<!DOCTYPE html>

<html>

<head> </head>

<body>

<?php

$temparray = array(

 //   array('12th','12th','14th','15th','16th','17th', '18th','19th', '20th','21st', '22nd', '23rd', '24th', '25th')
   // array(12.3,20.8,20,24.6,31.3,28.8, 31.8,32.6,23.8,20.6,21.8,19.2,20.2,24.3),

);


function countInRange($arr, $n, 
                        $x, $y) 
{ 
      
    // initialize result 
    $count = 0; 
    for ($i = 0; $i < $n; $i++) 
    { 
  
        // check if element is in range 
        if ($arr[$i] >= $x &&  
            $arr[$i] <= $y) 
            $count++; 
    } 
    return $count; 
} 


// Driver Code 
$dates =   array('12th','13th','14th','15th','16th','17th', '18th','19th', '20th','21st', '22nd', '23rd', '24th', '25th');
 
$arr = array( 12.3,20.8,20,24.6,31.3,28.8, 31.8,32.6,23.8,20.6,21.8,19.2,20.2,24.3);
//$n = count($arr); 

// Answer queries 

//echo countInRange($arr, $n, 0, 20)."\n"; 

/*
$i = 22; 
$j = 32; 
echo countInRange($arr, $n, $i, $j)."\n"; */

//$colour = array('Red' => '#FF0000', 'White' => '#FFFFFF', 'Green' => '#008000', 'Blue' => '#OOOOFF');

//$numbers = array(22.7, 28.5, 22.1);

$numberscount = count($arr);





function test($number){

if($number == 0){
    return "12th";

}
else if($number == 1){
    return "13th";


}else if($number == 2){
    return "14th";

}
else if($number == 3){
    return "15th";

}
else if($number == 4){
    return "16th";

}else if($number == 5){
    return "17th";


}else if($number == 6){
    return "18th";


}else if($number == 7){
    return "19th";


}else if($number == 8){
    return "20th";


}else if($number == 9){
    return "21st";


}else if($number == 10){
    return "22nd";


}else if($number == 11){
    return "23rd";


}
else if($number == 12){
    return "24th";


}else if($number == 13){
    return "25th";


}


};
// remove the these temps part from the for loop & seperate the loops so you can title them easy then done
for ($i = 0; $i < $numberscount; $i++ )
{
    if ($arr[$i] >= 0 &&  
            $arr[$i] <= 20) {
                echo 'These temperatures are below 20 degrees C';
                echo 'The Temp on the ' . test($i) . ' is: ' . $arr[$i];
                echo '<br>';

            }
   
            if ($arr[$i] >= 22 &&  
            $arr[$i] <= 32) {
                echo 'These temperatures are above 22 Degrees and below 32 degrees';
                echo 'The Temp on the ' . test($i) . ' is: ' . $arr[$i];
                echo '<br>';

            }


}

/*
if ($arr[$i] >= $x &&  
            $arr[$i] <= $y) 
*/




?>





</body>


</html>