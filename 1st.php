<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>program01</title>
</head>
<body>
<h1>Write a PHP program to check if a person is eligible to vote</h1>
    <form action="" method="post">
    <label for="">Age</label>
        <input type="text" name="age" value=""><br>
    <label for="">Name</label>
        <input type="text" name="name" value="">
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>

<?php

 vote();

function vote() {
    //$name ="govinda";
   // $age ="14";
    $age = $_POST['age'];
     $name = $_POST['name'];
    if($age >= 18){
        echo $name.",You are Eligible for voting.";
    }
    else {
        # code...
        echo $name .",You are Not Eligible for Voting.";
    }
   
}

?>
