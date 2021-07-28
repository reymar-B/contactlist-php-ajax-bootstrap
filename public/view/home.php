<?php
  session_start();
 
  if(isset($_SESSION['id']))
  {?>

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
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    
    <title>contact list</title>
</head>
<body class="bg-home">
  <div class="container">
    <!-- Navigation -->
    <header>    
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href=" / "> Home </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/logout"> Log out </a>
              </li>
              <!-- Trigger Modal -->
              <li class="nav-item">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" 
                data-bs-target="#contacts-add">Add Contacts</button>
              </li>
              <!-- /Trigger Modal -->
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
    </header>
    <main>
      <div>
          <!--SHOW CONTACTS -->
          <div class="jumbotron text-center">
            <h1> Contact lists </h1>
          </div>  
          <!-- Load Table Data -->
          <div class="d-flex justify-content-center">
            <div id="show-tbl" class="col-sm-12 col-md-8 col-lg-6"></div>
          </div>

          <!-- Modals -->
          <?php require 'modals/contacts_modal.php'; ?>
          <?php require 'modals/edit_modal.php'; ?>

      </div>
    </main>
    </div>
  <script src="app/js/jquery.js"></script>
  <script src="public/assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="app/js/add_contacts.js"></script>
  </body>
</html>
<?php }else header('location: /login') ?>
