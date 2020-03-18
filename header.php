<?php 
$navigation = (isset($_GET['navigation']) && $_GET['navigation'] != '') ? $_GET['navigation']: '';
?>
<link rel="stylesheet" type="text/css" href="css/css/bootstrap.min.css">
<link rel="stylesheet" href="css/navbar.css">
<script rel="stylesheet" type="text/javascript" src="css/js/jquery-3.4.1.slim.min.js"></script>
<script rel="stylesheet" type="text/javascript" src="css/js/bootstrap.min.js"></script>

<nav class="navbar navbar-expand-md navbar-dark bg-info sticky-top">

<button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
  <span class="navbar-toggler-icon" ></span>
</button>

<div class="collapse navbar-collapse" id="collapse_target">
<a class="navbar-brand"><img src="images/api.png" width="70" height="auto"></a>
  <span class="navbar-text-dark">Gallego & Junsay</span>

<ul class="navbar-nav ml-auto">
<li class="nav-item">
  
  <a class="nav-link" href="header.php?navigation=home">Home</a>

</li>

  <li class="nav-item">
  
    <a class="nav-link" href="home.php?navigation=product">Product</a>

  </li>
  
  <li class="nav-item">
  
    <a class="nav-link" href="index.php?navigation=categories">Categories</a>

  </li>

  <li class="nav-item">
  
    <a class="nav-link" href="index.php?navigation=create">Create</a>

  </li>


</ul>

</div>
</nav>
