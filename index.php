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

      <div>         
      <?php
       if($login_button == ''){
        switch($navigation){
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
        }
      }else{
        echo '<div align="center">'.$login_button . '</div>';
      }
    ?>
      <?php
      if(isset($facebook_login_url)){
            echo '<div align="center">' .$facebook_login_url. '</div>';
            }else{
        switch($navigation){
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
        }
      }
    ?>
    
      </div>
    </body>
</html>
