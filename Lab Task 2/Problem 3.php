<?php
 $length = "a";
 $width = "b";
 $a = 4;
 $b = 2;
 $area = $a * $b;
 echo 'The area is ' .$area. '<br>';
 $perimeter = 2 * ($a + $b);
 echo 'The perimeter is ' .$perimeter. '<br>';
    if($a == $b){
        echo "The shape is a square.";
	}
    else{
	    echo "The shape is a rectangle.";
	}
?>