<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


/**
 * generateJWT - Generate a JWT token
 */
function generateJWT() 
{
    // Load the service account JSON file
    $serviceAccountPath = './masjidabdulaziz-84099-firebase-adminsdk-edd78-8428f4b643.json';
    $serviceAccount = json_decode(file_get_contents($serviceAccountPath), true);

    // Extract information from the service account JSON file
    $serviceAccountEmail = $serviceAccount['client_email'];
    $serviceAccountPrivateKey = $serviceAccount['private_key'];

    // define JWT header and payload
    $header = json_encode(['typ' => 'JWT', 'alg' => 'RS256']);
    $now = time();
    $expiration = $now + 3600;  // 1 hour
    $payload = json_encode(['iss' => $serviceAccountEmail, 'aud' => 'https://oauth2.googleapis.com/token', 'iat' => $now, 'exp' => $expiration, 'scope' => 'https://www.googleapis.com/auth/cloud-platform https://www.googleapis.com/auth/firebase.messaging']);

    // encode to base64
    $base64UrlHeader = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($header));
    $base64UrlPayload = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($payload));

    // create signature
    $signatureInput = $base64UrlHeader . '.' . $base64UrlPayload;
    openssl_sign($signatureInput, $signature, $serviceAccountPrivateKey, 'SHA256');
    $base64UrlSignature = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($signature));

    // create the JWT
    $jwt = $base64UrlHeader . '.' . $base64UrlPayload . '.' . $base64UrlSignature;

    // Exchange the JWT for an access token
    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => 'https://oauth2.googleapis.com/token',
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => http_build_query([
            'grant_type' => 'urn:ietf:params:oauth:grant-type:jwt-bearer',
            'assertion' => $jwt
        ]),
        CURLOPT_HTTPHEADER => [
            'Content-Type: application/x-www-form-urlencoded'
        ],
        CURLOPT_RETURNTRANSFER => true
    ]);
    $response = curl_exec($curl);
    curl_close($curl);
    $responseData = json_decode($response, true);
    $accessToken = $responseData['access_token'];

    return $accessToken;
}

/**
 * uploadFileToStorage - Upload file to Firebase Storage
 * 
 * return array
 * is_success: boolean
 * message: string
 * data: array
 */
function uploadFileToStorage($file) 
{
    $returning = [
        'is_success' => false,
        'message' => 'Failed to upload file',
        'data' => []
    ];

    if ($file['size'] > 1572864) { // 1.5 MB
        $returning['message'] = 'Ukuran file Gambar maksimal 1.5 MB';
        return $returning;
    }

    $file_type = $file['type'];
    $allowed_types = ['image/png', 'image/jpeg', 'image/jpg'];

    if (!in_array($file_type, $allowed_types)) {
        $returning['message'] = 'Tipe file harus PNG, JPEG, atau JPG';
        return $returning;
    }

    $filename = base64_encode($file['name'].':'.time()); // Ganti dengan nama file yang ingin diupload
    $token = generateJWT(); // Ganti dengan token autentikasi Firebase
    $file_path = $file['tmp_name']; // Ganti dengan path file yang ingin diupload
    $firebase_storage_url = 'https://firebasestorage.googleapis.com/v0/b/masjidabdulaziz-84099.appspot.com/o?uploadType=media&name='.$filename;

    $headers = [
        'Authorization: Bearer '.$token,
        'Content-Type: application/octet-stream'
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $firebase_storage_url);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, file_get_contents($file_path));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);

    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch); 

    // Decode the response to get the download URL
    $responseData = json_decode($response, true);

    if ($httpCode == 200) {
        // Construct the public download URL
        $downloadUrl = "https://firebasestorage.googleapis.com/v0/b/masjidabdulaziz-84099.appspot.com/o/" . urlencode($responseData['name']) . "?alt=media&token=" . $responseData['downloadTokens'];
        
        $returning['is_success'] = true;
        $returning['message'] = 'File berhasil diupload';
        $returning['data'] = ["download_link" => $downloadUrl];
    } else {
        $returning['message'] = 'Gagal mengupload file';
    }

    return $returning;
}

function deleteFileStorage($url) 
{
    $returning = [
        'is_success' => false,
        'message' => 'Failed to delete file',
    ];

    // Extract file path from the URL
    $parsedUrl = parse_url($url);
    $urlDelete = $parsedUrl["scheme"]."://".$parsedUrl["host"].$parsedUrl["path"];

    $token = generateJWT();
    $firebase_storage_url = $urlDelete;

    $headers = [
        'Authorization: Bearer '.$token,
        'Content-Type: application/json'
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $firebase_storage_url);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);

    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    
    if ($httpCode == 204) {
        $returning['is_success'] = true;
        $returning['message'] = 'File berhasil dihapus';
    }

    return $returning;    
}