<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>program07</title>
</head>
<body>
<h3>Write a php program to insert a roll number and student number in database accepte roll no and name from user</h3>
    <h1>Students Detail</h1>
	<form action="" method="post">
		Enter roll no : <br>
		<input type="text" name="r1"><br>
		Enter your name : <br>
		<input type="text" name="t1"><br>
		<input type="submit" name="submit" value="submit">
	</form>
    <?php 
		$host_name="localhost";
		$user_name="root";
		$password="";
		$connect = mysqli_connect($host_name,$user_name,$password);
		
	if (isset($_POST['submit'])) {
		$roll_no=$_POST['r1'];
		$name=$_POST['t1'];		
		$sql = "insert into students_table values('".$roll_no."','".$name."')";
		$result = mysqli_query($connect,$sql);

		if ($result) {
			echo "Data inserted";
		}
		else{
			echo "Not inserted";
		}
	}

	?>
</body>
</html>
	
