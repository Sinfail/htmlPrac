<!DOCTYPE html>


<html>


<head>
</head>

<body>

<?php


$countarraysmall = "";

$countarraymedium = "";

$countarraylarge = "";


//title
echo "egg counts for paddock5.txt <br>";
echo "<br>";



//read file contents of paddock and put contents in array
$fileContents = file('Paddock5.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);


//filter the array for number items
$sub_data = array_filter($fileContents, function($item) { return is_numeric($item); });


//display the number of eggs
echo "the total number of eggs is: ";
echo count($sub_data);
echo '<br>';
echo '<br>';

echo  "total number of small eggs:";



//i really struggled reading the psuedocode trying to work out how to do this section of the sac unfortunately

    $goodArr = array_filter($sub_data, function($value){
        return ($value <= 49);
    });

    echo $goodArr;

/*
 //   $colors = array("red", "green", "blue", "yellow");

 $count = NULL;

foreach ($sub_data as $value) {


    if ($value > 49 && $value < 56){
        $count +1;

    }


  echo "$value <br>";
}*/












//echo fread($myfile,filesize("webdictionary.txt"));

















?>



</body>



</html>