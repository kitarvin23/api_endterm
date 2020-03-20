<link rel="stylesheet" type="text/css" href="css/css/bootstrap.min.css">
<link rel="stylesheet" href="css/navbar.css">
<link rel="stylesheet" href="css/profile.css">
<script rel="stylesheet" type="text/javascript" src="css/js/jquery-3.4.1.slim.min.js"></script>
<script rel="stylesheet" type="text/javascript" src="css/js/bootstrap.min.js"></script>
<!------ homepage ---------->    <body>

<nav class="navbar navbar-expand-md navbar-dark bg-info sticky-top">

<button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
  <span class="navbar-toggler-icon" ></span>
</button>

<div class="collapse navbar-collapse" id="collapse_target">
<a class="navbar-brand"><img src="images/api.png" width="70" height="auto"></a>
  <span class="navbar-text-dark">Gallego & Junsay</span>

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


</ul>

<div class="container" style="margin-left: 25%;">
	<div class="row">
		<div class="col-lg-7 col-sm-6">
            <div class="card hovercard">
                <div class="cardheader">

                </div>
                <div class="avatar">
                    <img alt="" src="<?php echo $_SESSION['user_image'] ?>">
                </div>
                <div class="info">
                    <div class="title">
                    <div><?php echo $_SESSION['user_first_name'] ?> <?php echo $_SESSION['user_last_name'] ?></div>
                    </div>
                    <div class="desc"><?php echo $_SESSION['user_email_address'] ?></div>
                  <a style="color:red;" class="desc" href="logout-google.php">Logout</a>
        
                </div>
            </div>

        </div>

	</div>
</div>
	
