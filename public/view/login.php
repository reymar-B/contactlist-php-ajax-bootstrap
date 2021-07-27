<?php
session_start();
if(isset($_SESSION['id']))
{
    header('location: /');
}else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
  <link rel="stylesheet" href="public/assets/style.css">
  <link rel="shortcut icon" type="image/png"  href="app/img/hxh.png">
  <link rel="stylesheet" href="public/assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="public/assets/font-awesome/css/font-awesome.min.css">
  <title>contact list</title>
</head>
  <body>
    <div class="container">
      <div class="log-pg">
        <div class="d-flex justify-content-center" >
          <div class="frm-bg">
            <main>
              <div>
                <h3 class="m-3 text-center"> Login </h3>
                <p id="login-message"></p>
                <form action="/login" method="POST">
                  <div class="m-3">
                    <label for="email" class="form-label">Email address</label>
                    <input name="email" id="email" type="email" class="form-control" id="email">
                  </div>
                  <div class="m-3">
                  <label for="password" class="form-label"> Password </label>
                  <input name="password" id="password" type="password" class="form-control" >
                  </div>
                  <div class="m-3">
                  <button name="login" id="login" type="submit" class="btn btn-primary"> Login </button>
                  <!-- Modal Trigger Button -->
                  <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#register-user">Register</button>
                  <!-- Modal Trigger Button -->
                  </div>
                </form>
              <!-- Register Modal -->
              <?php require 'modals/reg_modal.php'; ?>
              <!-- Register Modal -->
              </div>    
            </main>
          </div>
        </div>    
      </div>
    </div>
    
    <script src="app/js/jquery.js"></script>
    <script src="public/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="app/js/login.js"></script>
    <script src="app/js/users.js"></script>
  </body>
</html>

<?php } ?>
