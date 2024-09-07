$(document).ready(function(){

      // show edit page
      $("body").on('click','#editButton', function() {
        // declaration variable
        let here = $(this);
        let table = here.data('table');
        let id = here.data('id');

        // open modal loading
        $("#loadingModal").modal({backdrop: 'static', keyboard: false})

        setTimeout(function() {
          window.location.href = baseURL+"manage/view_edit/"+table+"/"+id;
        }, 3000)
      });

      // execute update function 
      $("body").on('click','#btnEdit', function() {
        // declaration variable
        let here = $(this);
        let table =here.data('table');
        let data = $("form.edit").serialize();
        let action = $("form.edit").attr("action");

        $.ajax({
          type: 'POST',
          url: action,
          data: data,
          beforeSend:function() {
            here.attr("disabled", "disabled");
            here.html("UPDATING ...");
          },
          success: function(response) {
            here.removeAttr("disabled");
            if (response == 1) {
              setTimeout(function() {
                here.html("Edit User");
                $("div.alert-edit").html(`<div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    Update Data sukses
                </div>`)
              }, 2000)
              setTimeout(function() {
                 // open modal loading
                  $("#loadingModal").modal({backdrop: 'static', keyboard: false})
              }, 3000)
              setTimeout(function() {
                 window.location.href = baseURL+"manage/"+table;
              }, 4000)
            }

            if (response != "1") {
              setTimeout(function() {
                here.html("Edit User");
                $("div.alert-edit").html(`<div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    `+response+`
                </div>`)
              }, 2000)
            }

          }
        })
      })

      // show add page
      $("body").on('click','#addButton', function() {
        // declaration variable
        let here = $(this);
        let table = here.data('table');

        // open modal loading
        $("#loadingModal").modal({backdrop: 'static', keyboard: false})

        setTimeout(function() {
          window.location.href = baseURL+"manage/view_add/"+table;
        }, 3000)
        
      });

      // execute add function 
      $("body").on('click','#btnSave', function() {
        // declaration variable
        let here = $(this);
        let table =here.data('table');
        let data = $("form.add").serialize();
        let action = $("form.add").attr("action");

        $.ajax({
          type: 'POST',
          url: action,
          data: data,
          beforeSend:function() {
            here.attr("disabled", "disabled");
            here.html("Proses Simpan ...");
          },
          success: function(response) {
            if (response == 1) {
              setTimeout(function() {
                here.html("Tambah User");
                $("div.alert-add").html(`<div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    Simpan Data sukses
                </div>`)
              }, 2000)
              setTimeout(function() {
                 // open modal loading
                  $("#loadingModal").modal({backdrop: 'static', keyboard: false})
              }, 3000)
              setTimeout(function() {
                 window.location.href = baseURL+"manage/"+table;
              }, 4000)
            }

            if (response != "1") {
              setTimeout(function() {
                here.html("Tambah User");
                $("div.alert-add").html(`<div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    `+response+`
                </div>`)
              }, 2000)
            }

          }
        })
      })

      // show delete popup
      $("body").on('click','#deleteButton', function() {
        // declaration variable
        let here = $(this);
        let table = here.data('table');
        let id = here.data('id');
        let name = here.data('name');

        // open modal
        $("#deleteModal").modal({backdrop: 'static', keyboard: false})
        $("#deleteModal .modal-body h5.modal-title").html("Yakin Hapus Data "+name+ " ?");
        $("#deleteModal .modal-footer form#form").attr("action", baseURL+"manage/"+table+"/delete");
        $("#deleteModal .modal-footer form#form input#id").val(id);
        
      });


      // execute delete function 
      $("body").on('click','#btnDelete', function() {
        // declaration variable
        let here = $(this);
        let data = $("#deleteModal .modal-footer #form").serialize();
        let action = $("#deleteModal .modal-footer #form").attr("action");

        $.ajax({
          type: 'POST',
          url: action,
          data: data,
          beforeSend:function() {
            $("button#btnDeleteProses").show("slow");
            $("button#btnDelete").hide();
          },
          success: function(response) {
            if (response == 1) {
              setTimeout(function() {
              }, 3000)
              setTimeout(function() {
                $("#deleteModal").modal('hide')
                 location.reload();
              }, 5000)
            }

          }
        })
      })

      // back button
      $("body").on('click','#backButton', function() {
        // declaration variable
        let here = $(this);
        let table = here.data('table');

        // open modal loading
        $("#loadingModal").modal({backdrop: 'static', keyboard: false})

        setTimeout(function() {
          window.location.href = baseURL+"manage/"+table;
        }, 3000)
        
      });

    }); // end document ready