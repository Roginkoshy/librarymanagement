<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php include("connect.php") ;
	if(isset($_POST['submit']))
	{
		if($_POST['author']=='' or $_POST['subject']=='' or $_POST['book']=='')
		{
      echo("<script>alert('Fill all the fields')</script>");
      exit();
		}
		else
		{
			$author=$_POST['author'];
			$subject=$_POST['subject'];
			$image_name=$_FILES['image']['name'];
			$image_type=$_FILES['image']['type'];		
			$image_size=$_FILES['image']['size'];
			$image_tmp=$_FILES['image']['tmp_name'];
			$book=$_POST['book'];
			$date=date('y.m.d');
		}
		if($image_type=="image/jpeg" or $image_type=="image/jpg" or $image_type="image/png" or $image_type="image/gif")
		{
			if($image_size<=100002)
			{
			move_uploaded_file($image_tmp, "images/$image_name");
		    }
		    else
		    {
		    	echo("<script>alert('Image upto 100KB is valid.')</script>");
		    	exit();
		    }
		}
		else
		{
			echo("<script>alert('Invalid File type')</script>");
			exit();
		}
		$query="insert into bookentries(image,subject,author,Book_Name) values('$image_name','$subject','$author','$book')";
	
	if(mysqli_query($db,$query))
	{
		echo '<center><h1>Post has been submitted successfully.</h1></center>';
	}
	}

 ?>
<form name="frm" action="sampleform.php" method="post" enctype="multipart/form-data">
	<table align="center" border="10" width="740">
		<tr><td  colspan="5" align="center" bgcolor="skyblue"><h1>Insert New Book Here</h1></td></tr>
	<tr><td>Author Name</td><td><input type="text" name="author" size="60"></td></tr>
	<tr><td>Image</td><td><input type="file" name="image"></td></tr>
	<tr><td>Subject</td><td><select name="subject">
    <option value="Computer Science">Computer Science</option>
    <option value="Electronics">Electronics</option>
    <option value="Mechanical">Mechanical</option>
    <option value="Civil">Civil</option>
	</td></tr>
	<tr><td>Book Name</td><td><input type="text" name="book" size="60"></td></tr>
	<tr><td colspan="5" align="center"><input type="submit" name="submit" value="Insert Post"></td></tr>
</table>
</form>
</body>
</html>