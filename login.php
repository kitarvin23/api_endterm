<?php
$navigation = (isset($_GET['navigation']) && $_GET['navigation'] != '') ? $_GET['navigation']: '';
include('google/google-confirm.php');
if($login_button == true){
  include('facebook/facebook-confirm.php');
}
?>
        <?php
       if($facebook_login_url == '' OR $login_button == ''){
       header('location: index.php');
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
        echo '<div align="center">'.$facebook_login_url . '</div>';
        echo '<div align="center">'.$login_button . '</div>';
      }
    ?>
