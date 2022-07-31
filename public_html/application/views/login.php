<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Prima Armada Raya</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
    integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo site_url('assets/plugins/sweetalert2/dist/sweetalert2.min.css'); ?>">
  <style>
    @media print {

      html,
      body {
        display: none;
        /* hide whole page */
      }
    }

    body {
      background-image: url('<?php echo site_url('dist/img/background.jpg') ?>');
      background-size: 100% 100%;
    }

    html {
      margin: 0;
      padding: 0;
      height: 100%;
      width: 100%;

    }

    .user_card {
      height: 330px;
      width: 400px;
      margin-top: auto;
      margin-bottom: auto;
      background: white;
      position: relative;
      display: flex;
      justify-content: center;
      flex-direction: column;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      -webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      -moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      border-radius: 5px;

    }

    .brand_logo_container {
      position: absolute;
      height: 170px;
      width: 170px;
      top: -75px;
      border-radius: 50%;
      background: white;
      padding: 0;
      text-align: center;
    }

    .brand_logo {
      height: 150px;
      width: 150px;
      border-radius: 50%;
      border: 2px solid white;
    }

    .form_container {
      margin-top: 100px;
    }
  </style>
</head>
<!--Coded with love by Mutiullah Samim-->

<body>
  <div class="float-right">
    <div class="container">
      <div class="d-flex justify-content-center h-100">
        <div class="user_card">
          <div class="d-flex justify-content-center">
            <div class="brand_logo_container">
              <img src="<?php echo site_url('dist/img/login.png') ?>" class="brand_logo" alt="Logo">
            </div>
          </div>
          <div class="d-flex justify-content-center form_container">
            <?php
              $data = array(
                      'class' => 'form-horizontal',
                      'role' => 'form',
                    );
              echo form_open('login/aksi_login'); ?>
              <div class="input-group mb-2">
                <h4>Login</h4>
              </div>
              <div class="input-group mb-2">
                Prima Armada Raya
              </div>
              <div class="input-group mb-3">
                <div class="input-group-append">
                  <span class="input-group-text"><i class="fas fa-user"></i></span>
                </div>
                <input type="text" name="username" class="form-control" value="" placeholder="Username">
              </div>
              <div class="input-group mb-2">
                <div class="input-group-append">
                  <span class="input-group-text"><i class="fas fa-key"></i></span>
                </div>
                <input type="password" name="password" class="form-control" value="" placeholder="Password" id="password">
                <div class="input-group-append">
                  <span class="input-group-text"><i class="fas fa-eye-slash" id="eye"></i></span>
                </div>
              </div>
              <div class="form-group">
              </div>
              <div class="d-flex justify-content-center login_container">
                <button type="submit" name="button" class="btn btn-primary">Login</button>
              </div>
            <?php echo form_close() ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="<?php echo site_url('assets/plugins/sweetalert2/dist/sweetalert2.min.js'); ?>"></script>
  <script>
    $(function(){
      $('#eye').click(function(){
          if($(this).hasClass('fa-eye-slash')){
            $(this).removeClass('fa-eye-slash');
            $(this).addClass('fa-eye');
            $('#password').attr('type','text');
          }else{
            $(this).removeClass('fa-eye');
            $(this).addClass('fa-eye-slash');
            $('#password').attr('type','password');
          }
      });
    });
    
    $(function() {
			const Toast = Swal.mixin({
			toast: true,
			position: 'top-end',
			showConfirmButton: false,
			timer: 3000
			});

			<?php if($this->session->flashdata('msg')){ ?>
				Toast.fire({
					type: 'error',
					title: 'Username atau Password salah'
				})
			<?php } ?>
		});
  </script>
</body>

</html>