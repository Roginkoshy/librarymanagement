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
		<h1 >Register</h1>
		<?php include("errors.php"); ?><br>
	<form name="frm1" action="register.php" method="POST">
		<input type="text" name="username" placeholder="Username" value="<?php echo $username ?>"><br><br>
		<input type="email" name="email" placeholder="Email" value="<?php echo $email ?>"> 
		<br><br>
		<input type="password" name="password_1" placeholder="Password"><br><br>
		<input type="password" name="password_2" placeholder="Confirm Password"><br><br>
		<button class="btn" type="submit" name="register">Register</button>
	</form>
	<p>Already a member?</p><a href="../index.php" style="color:white;text-decoration: none;">Login</a>
	<br>
	

   </div>
</div>