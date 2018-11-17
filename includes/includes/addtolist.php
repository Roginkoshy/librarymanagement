<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
	$username = $_GET["u"];
	$book = $_GET["book"];
	$db=new mysqli('localhost','root','password','registration');
	$q="SELECT * FROM bookentries WHERE Book_Name='$book' ";
    $res=$db->query($q);
    //$row=$res->fetch_assoc();
   // echo " $res['author'] ";
while($row = $res->fetch_assoc())
{
 $author=$row["author"];
 $subject=$row["subject"];
 $image=$row["image"];
 $book=$row["Book_Name"]; 
$qrr = "INSERT INTO `subscriber` (`Username`,`image`, `subject`,`author`,`Book_Name`) VALUES ('$username','$image', '$subject','$author','$book');";
 echo "$author $subject";
mysqli_query($db, $qrr);
} 
 
// echo "<h1>$username</h1>";
$db->close();
//	if(mysqli_query($con, $qrr));
//	else{
//		$qr1="DELETE FROM `likes` WHERE uid='$userid' and pid = $postid";
//		mysqli_query($con, $qr1);
//	}
//	$qr7 = "SELECT count(*) FROM `likes` WHERE pid = $postid";
//	$res = mysqli_query($con, $qr7);
//	$count = mysqli_fetch_assoc($res)['count(*)'];
//	$qr8 = "UPDATE `blogpost` SET likes_count = $count WHERE pid = $postid";
		echo "<script>window.location.href='../mainpage.php'</script>";
?>

</body>
</html>
