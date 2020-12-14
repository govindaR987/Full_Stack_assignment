

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>program04</title>
</head>
<body>
<h3>Write a PHP program to save marks of English, Hindi, Marathi, Maths and Information Technology in an array. 
Display marks of individual subject along with total marks and percentage.</h3>
	<form action="" method="post">
		<label for="">English</label>
		<input type="text" name="English" value=""><br>

		<label for="">Mathi</label>		
		<input type="text" name="Marathi" value=""><br>
		
		<label for="">Hindi</label>
		<input type="text" name="Hindi" value=""><br>
		
		<label for="">Maths</label>
		<input type="text" name="Maths" value=""><br>
		
		<label for="">IT</label>
		<input type="text" name="IT" value=""><br>
		
		<input type="submit" name="" value="submit"><br>

	</form>
</body>
</html>
<?php 
			$english = $_POST['English'];
			  $marathi = $_POST['Marathi'];
            $hindi = $_POST['Hindi'];
          
            $maths = $_POST['Maths'];
            $it = $_POST['IT'];


	$subject_marks = array('English' =>$english ,'Marathi'=> $marathi,'Hindi' =>$hindi,'Maths' => $maths ,'IT'=>$it);
	$total_marks = $subject_marks['English'] + $subject_marks['Hindi'] + $subject_marks['Marathi'] +$subject_marks['Maths'] + $subject_marks['IT'];

	echo "<br>----------------------------------<br>";
	echo "English : ".$subject_marks['English'];
	echo "<br>Hindi : ".$subject_marks['Hindi'];
	echo "<br>Marathi : ".$subject_marks['Marathi'];
	echo "<br>Maths : ".$subject_marks['Maths'];
	echo "<br>IT : ".$subject_marks['IT'];
	echo "<br>------------Result-----------------";
	echo "<br><br>Total : ".$total_marks;
	$percentage = $total_marks/5;
	echo "<br>Percentage : ".$percentage;
 ?>