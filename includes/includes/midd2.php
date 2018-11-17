<div class="content" style="background-color: grey;">
<?php if(isset($_SESSION['success'])): ?>
	<div class="error success">
		<h3><?php 
           echo $_SESSION['success'];
           unset($_SESSION['success']);;
		  ?></h3>
</div>
<?php endif ?>
<?php if(isset($_SESSION['username'])): ?>
	<marquee><p style="color:yellow"> Welcome <strong><?php echo $_SESSION['username'] ?></strong></p></marquee> 
	<?php endif ?>
<h1 align="center">Books Available</h1>
<br>
<h2 align="center">Computer Engineering</h2>
<?php
$db=mysqli_connect('localhost','root','password','registration');
$q="SELECT * FROM bookentries where subject='Computer Science' and Book_Name NOT IN (Select Book_Name from subscriber)";
$u=$_SESSION['username'];
$result=$db->query($q);
//$query=mysql_query('select * from new_post');
while($row = $result->fetch_assoc())
{
 $author=$row['author'];
 $subject=$row['subject'];
 $image=$row['image'];
 $book=$row['Book_Name'];
 ?>

<div style="height:400px">
	<div>
<center><img src='../images/<?php echo "$image"; ?>' style="width:200px;height:250px"></center>
</div>
<br>
<center><div>
	<h3><?php echo "$book" ?></h3>

    <p>Author: <?php echo "$author" ?></p>
</div>
<?php echo "<a href = 'includes/addtolist.php?u=$u&book=$book'><button>Add to list</button></a>"; ?>
</div></center>


<?php } ?>
<hr>
<h2 align="center">Electronics Engineering</h2>
<?php
$db=mysqli_connect('localhost','root','password','registration');
$q="SELECT * FROM bookentries where subject='Electronics' and Book_Name NOT IN (Select Book_Name from subscriber)";

$result=$db->query($q);
//$query=mysql_query('select * from new_post');
while($row = $result->fetch_assoc())
{
 $author=$row['author'];
 $subject=$row['subject'];
 $image=$row['image'];
 $book=$row['Book_Name'];
 $u=$_SESSION['username'];
 ?>

<div style="height:400px">
	<div>
<center><img title='<?php echo "$image" ?>'' src='../images/<?php echo "$image"; ?>' style="width:200px;height:250px"></center>
</div>
<br>
<center><div>
	<h3><?php echo "$book" ?></h3>

    <p>Author: <?php echo "$author" ?></p>
</div>
<?php echo "<a href = 'includes/addtolist.php?u=$u&book=$book'><button>Add to list</button></a>"; ?>
</div>
</center>

<?php } ?>
<hr>
<h2 align="center">Mechanical Engineering</h2>
<?php
$db=mysqli_connect('localhost','root','password','registration');
$q="SELECT * FROM bookentries where subject='Mechanical' and Book_Name NOT IN (Select Book_Name from subscriber)";

$result=$db->query($q);
//$query=mysql_query('select * from new_post');
while($row = $result->fetch_assoc())
{
 $author=$row['author'];
 $subject=$row['subject'];
 $image=$row['image'];
 $book=$row['Book_Name'];
 ?>

<div style="height:400px">
	<div>
<center><img src='../images/<?php echo "$image"; ?>' style="width:200px;height:250px"></center>
</div>
<br>
<center><div>
	<h3><?php echo "$book" ?></h3>

    <p>Author: <?php echo "$author" ?></p>
</div>
<?php echo "<a href = 'includes/addtolist.php?u=$u&book=$book'><button>Add to list</button></a>"; ?>
</div></center>


<?php } ?>

<hr>
<h2 align="center">Civil Engineering</h2>
<?php
$db=mysqli_connect('localhost','root','password','registration');
$q="SELECT * FROM bookentries where subject='Civil' and Book_Name NOT IN (Select Book_Name from subscriber where Username='$u')";

$result=$db->query($q);
//$query=mysql_query('select * from new_post');
while($row = $result->fetch_assoc())
{
 $author=$row['author'];
 $subject=$row['subject'];
 $image=$row['image'];
 $book=$row['Book_Name'];
 ?>

<div style="height:400px">
	<div>
<center><img src='../images/<?php echo "$image"; ?>' style="width:200px;height:250px"></center>
</div>
<br>
<center><div>
	<h3><?php echo "$book" ?></h3>

    <p>Author: <?php echo "$author" ?></p>
</div>
<?php echo "<a href = 'includes/addtolist.php?u=$u&book=$book'><button>Add to list</button></a>"; ?>
</div></center>


<?php } ?>
</div>
