<?php
echo"
write a php program to save marks of english hindi ,
marathi math and inforamtion technology in array dispaly marks and percentage of each student using foreach
<br>";

$mark = array(
				"student1" => array("english" => "68","hindi"=>"60","marathi"=>"70","math"=>"68","it"=>"78"),
				"student2" => array("english" => "60","hindi"=>"68","marathi"=>"68","math"=>"78","it"=>"99"),
				"student3" =>array("english" => "68","hindi"=>"58","marathi"=>"44","math"=>"88","it"=>"68"),
				"student4" => array("english" => "58","hindi"=>"68","marathi"=>"68","math"=>"36","it"=>"45"),
				"student5" => array("english" => "69","hindi"=>"89","marathi"=>"99","math"=>"68","it"=>"68")
);
$total = '0';
foreach($mark as $student => $value)
{
    echo "---------------{$student}----------<br>";
    foreach($value as $sub => $number)
    {
        echo "{$sub} : {$number}<br>";
        $total += $number;
    }
   	    echo "total marks : {$total}";
		$percentage = $total * 100 /500;
		echo "<br>percentage : {$percentage}";
		echo"<br>-------------------------------------<br>";
		echo "<br><br>";


}

?>