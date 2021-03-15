<!DOCTYPE html>
<html>
<head> </head>


<body>

<?php 


$colour = array('Red' => '#FF0000', 'White' => '#FFFFFF', 'Green' => '#008000', 'Blue' => '#OOOOFF');

$numbers = array(22.7, 28.5, 22.1);

$numberscount = count($numbers);

foreach($colour as $colourname => $colourcode)
{
    echo 'This colour: ' . $colourname . ' has the colour code: ' .  $colourcode . '<br>';
}

for ($i = 0; $i < $numberscount; $i++)
{
    echo 'number ' . $i . ' is: ' . $numbers[$i];
    echo '<br>';
}

?>



</body>

</html>