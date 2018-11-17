<div style="background-color: #aaa;">
	<center>
		<?php
          $u=$_SESSION['username'];
		?>
		<h1>Name: <?php echo "$u" ?></h1>
		
         <h2>Books Subscribed!</h2>
         <?php 
            $q="SELECT * FROM subscribers where username='$username' ";

		?>
	</center>
</div>