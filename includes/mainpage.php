<?php include('server.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>Mainpage</title>
</head>
<body>
	<?php include('includes/header2.php') ?>
	<?php include('includes/midd2.php') ?>
	<?php include('includes/footer2.php') ?>
<div class="headermain">
	<h2>Home page</h2>
</div>
<div class="content">
<?php if(isset($_SESSION['success'])): ?>
	<div class="error success">
		<h3><?php 
           echo $_SESSION['success'];
           unset($_SESSION['success']);;
		  ?></h3>
</div>
<?php endif ?>
<?php if(isset($_SESSION['username'])): ?>
	<p> Welcome <strong><?php echo $_SESSION['username'] ?></strong></p> 
	<p><a href="../index.php">Logout</a></p>
	<?php endif ?>
</div>
</body>
</html>
