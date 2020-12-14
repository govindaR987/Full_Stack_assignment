<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>program 02</title>
</head>
<body>
    <h1>Write a PHP function to count the total number
 of vowels (a,e,i,o,u)
 from the string. Accept a string by using HTML form.
</h1>
    <form action="" method="post">
    <input type="text" name="string" placeholder="Enter a string" >
    <input type="submit" name="" value="submit">    
    </form>
</body>
</html>


<?php 
    if($_POST)
    {
        $string = strtolower($_POST['string']);
        //strtolower is used to make string lower
        $vowels = array('a','e','i','o','u');
        $len = strlen($string);
        //strlen is used to calculate string
        $num = 0;
        for($i=0; $i<$len; $i++){
            if(in_array($string[$i], $vowels))
            {
                $num++;
            }
        }
         echo "Number of vowels : ".$num;
    }
 
?>
