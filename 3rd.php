

<?php 
echo"Write a php program to perform the following operation of associative array<br>";
echo"";
	//Display elements of an array along with their keys
$age = array("govinda"=>"51", "vishal"=>"32", "RAhul"=>"23");

foreach($age as $x => $x_value) {
    echo "Key = " . $x . ", Value = " . $x_value;
    echo "<br>";
}
	//Display the size of an array
	echo "<br>Size of Array is : ".count($age)."<br>";
	//Delete an element from an array from the given index
		$data = array(1,2,3,4,5);
		for ($i=0; $i < count($data); $i++) { 
			echo " ".$data[$i];
		}
		unset($data[1]);
		echo "<br>Elements After Deleting : <br>";
		for ($i=0; $i < count($data); $i++) { 
			echo " ".$data[$i];
		}
 ?>
