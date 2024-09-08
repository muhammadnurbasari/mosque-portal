<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url('assets/plugins-login/') ?>fonts/icomoon/style.css">

    <link rel="stylesheet" href="<?php echo base_url('assets/plugins-login/') ?>css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/plugins-login/') ?>css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="<?php echo base_url('assets/plugins-login/') ?>css/style.css">

    <title>ADMIN || PANEL</title>
  </head>
  <body>
  
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="<?php echo base_url('assets/plugins-login/') ?>images/masjidaa.jpg" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4"></div>
              <!-- <h3>Log In</h3> -->
            </div>
            <?php if ($this->session->flashdata('message_error')) { ?>
      				<div class="alert alert-danger alert-dismissible fade show">
      			    	<button type="button" class="close" data-dismiss="alert">&times;</button>
      			    	<strong><?php echo $this->session->flashdata('message_error') ?></strong>
      			  	</div><br>
      			<?php } ?>
            <form action="<?php echo base_url('administrator/login') ?>" method="post">
              <div class="form-group first">
                <label for="">Username</label>
                <input type="text" class="form-control" id="username" name="username" autocomplete="off" >
              </div>
              <div class="form-group last mb-4">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password">
              </div>
              
              <input type="submit" value="Log In" class="btn btn-block btn-primary">

            </form>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>

    <script src="<?php echo base_url('assets/plugins-login/') ?>js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url('assets/plugins-login/') ?>js/popper.min.js"></script>
    <script src="<?php echo base_url('assets/plugins-login/') ?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url('assets/plugins-login/') ?>js/main.js"></script>
  </body>
</html>