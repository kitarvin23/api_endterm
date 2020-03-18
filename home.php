<link rel="stylesheet" type="text/css" href="css/css/bootstrap.min.css">
<link rel="stylesheet" href="css/navbar.css">
<link rel="stylesheet" href="css/profile.css">
<script rel="stylesheet" type="text/javascript" src="css/js/jquery-3.4.1.slim.min.js"></script>
<script rel="stylesheet" type="text/javascript" src="css/js/bootstrap.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<div class="container">
	<div class="row">
		<div class="col-lg-3 col-sm-6">

            <div class="card hovercard">
                <div class="cardheader">

                </div>
                <div class="avatar">
                    <img alt="" src="<?php echo $_SESSION["user_image"] ?>">
                </div>
                <div class="info">
                    <div class="title">
                        <a target="_blank" href="https://scripteden.com/">Script Eden</a>
                    </div>
                    <div class="desc"><?php echo $_SESSION['user_first_name'] ?> <?php echo $_SESSION['user_last_name'] ?></div>
                    <div class="desc"><?php echo $_SESSION['user_email_address'] ?></div>
                  <a class="desc" href="logout-google.php">Logout</a>
        
                </div>
            </div>

        </div>

	</div>
</div>
