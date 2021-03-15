<!DOCTYPE html>

<html>

<head>

</head>


<body>

<?php 

$lottodraw = array(

array( "7 Mar 2020", '45',' 22 33 23 4 14','7'),
array( '14 mar 2020', '46' , 34,35,23,12,18,31),
array( '21 mar 2020','47', 6, 12,16,44,41,16 ),
array( '28 mar 2020', '48', 16,1,8,17,32,2),
array( '4 apr 2020', '49', 29,8,25,19,21,4),

);




for ($row = 0; $row < 5; $row++)
{
echo '<p>Row ' . $row . '<br>';

for ($col = 0; $col < 4; $col++)
{
 
if ($col == 0)
{
echo $lottodraw[$row][$col];
}
elseif ($col == 1){
    echo '\'s draw number is: '. $lottodraw[$row][$col];
}
elseif ($col == 2){
    echo 'Number draws are:'. $lottodraw[$row][$col];
}

/*elseif ($col == 3)
{
echo $lottodraw[$row][$col];
}
elseif ($col == 1)
{
echo $lottodraw[$row][$col];
}*/
/*
else
{
echo $lottodraw[$row][$col] . ' ';
}
}*/
//echo '</p>';
}
}

?>

</body>

</html>

