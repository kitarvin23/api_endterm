<?php 
$navigation = (isset($_GET['navigation']) && $_GET['navigation'] != '') ? $_GET['navigation']: '';
include('google/google-confirm.php');
if($login_button == true){
  include('facebook/facebook-confirm.php');
}
?>
<html> 
    <head>
      <title>API</title>
      <link rel="stylesheet" type="text/css" href="css/css/bootstrap.min.css">
<link rel="stylesheet" href="css/navbar.css">
<script rel="stylesheet" type="text/javascript" src="css/js/jquery-3.4.1.slim.min.js"></script>
<script rel="stylesheet" type="text/javascript" src="css/js/bootstrap.min.js"></script>
    </head>
  <body>
   
<nav class="navbar navbar-expand-md navbar-dark bg-info sticky-top">

<button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
  <span class="navbar-toggler-icon" ></span>
</button>

<div class="collapse navbar-collapse" id="collapse_target">
<a class="navbar-brand"><img src="images/api.png" width="70" height="auto"></a>
  <span class="navbar-text-dark">Gallego & Junsay</span>



</ul>
</div>
</nav>
      <div>  
          <?php if($facebook_login_url == '' OR $login_button == ''){ ?>
     
<ul class="navbar-nav ml-auto">
<li class="nav-item">
  <a class="nav-link" href="index.php?navigation=home">Home</a>
</li>

  <li class="nav-item">
    <a class="nav-link" href="index.php?navigation=product">Product</a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link" href="index.php?navigation=categories">Categories</a>
  </li>
        
  <li class="nav-item">
    <a class="nav-link" href="index.php?navigation=create">Create</a>
  </li>
        
      <?php  switch($navigation){
          case 'product':
            require_once 'product.php';
            break;
          case 'categories':
            require_once 'categories.php';
            break;
          case 'create':
            require_once 'form_create.php';
            break;
          case 'details':
            require_once 'product-details.php';
            break;
            case 'update':
              require_once 'form_update.php';
              break;
          default:
          require_once 'home.php';
          break;
         } ?>
        
       <?php }else{
        echo '<div align="center">'.$facebook_login_url . '</div>';
        echo '<div align="center">'.$login_button . '</div>';
      }
        ?>


      </div>
    </body>
</html>

  
