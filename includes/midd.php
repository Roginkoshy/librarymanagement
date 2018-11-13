<div class="mid" style="border-radius:6px 6px 6px 6px">
	<div class="textstuff">
	<h1 style="color:#42f4ff;font-size: 250%">Dont read too often?</h1>
	<br><br>
	<div style="color:lightyellow;font-weight:bold;font-size:150%"><p>Reading helps you to witness a</p><br>
	<p>world beyond our own which others</p><br>
	<p>cant perceive in their wildest dreams.</p><br>
	<p>~Lorem Ipsum</p>
	</div>

	</div>
	
	<div class="formstuff">
		<h1 >Login</h1>
		<br>
		<?php include("errors.php"); ?>
		<br>
	<form name="frm" action="index.php" method="POST">
		<input type="text" name="username" placeholder="Username" value="<?php echo $username ?>"><br><br><br>
		<input type="password" name="password" placeholder="Password">
		<br><br><br>
		<button class="btn" type="submit" name="login">Sign in</button>
	</form>
	<p>Not a member yet?</p><a href="includes/register.php" style="color:white;text-decoration: none;">Signup</a>
	<br>
	

   </div>
</div>