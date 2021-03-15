<DOCTYPE html>
<html>
<head> </head>

<body>

<?php

//this will work #bruh moment 

function bmicalc($Height, $Weight) {
    $BMI = $Weight / $Height * $Height;
    return $BMI;
}
//$arearesult = areafunc(7, 9);
//echo $arearesult;


// Define the function.
function createGreeting5($greetType, $name)
{
    $greeting = $greetType . ' ' . $name;
    $person = "no person";

    switch ($height)
    {
        case 'Jeff':
            $Height = 180;
            $weight = 84;
            $BMI = 84 / 180 * 180;

            break;
        case 'James':
            $dayMessage = 'It\'s only Tuesday!';
            break;
        case 'John':
            $dayMessage = 'Happy hump day!';
            break;
       
    }
    $greeting = $greeting . '. ' . $dayMessage;
    return $greeting;
}

// Set the variables.
$greet1 = 'Hello';
$greet2 = 'G\'day';
$greet3 = 'Ciao';
$name1 = 'Jess';
$name2 = 'Tracy';
$name3 = 'Haru';


$person1 = "john";
$person2 = "Jeff";
$person3 = "james";

$height1 = "180";
$height2 = "200";
$height3 = "184";

$weight1 = "75";
$weight2= "88";
$weight3= "60";


$bmi1 = "Normal weight";
$bmi2 = "Normal weight";
$bmi3 = "Underweight";

$weightclass = "";


// Use a for loop to call the function for each greeting and name pair.
//echo '<br>Using a for loop to get from $name1 to $name3 using createGreeting5()<br>';
for ($i = 0; $i < 3; $i++)
{
    $j = $i + 1;
   
    echo ${"person$j"};
    echo " weighs ";
    echo ${"weight$j"};
    echo " kilos and is ";
    echo ${"height$j"};
    echo " metres tall ";
    echo ${"person$j"};
    echo "'s Bmi is ";
    echo bmicalc(${"height$j"}, ${"weight$j"});
    echo " which classifys them as ";
    echo ${"bmi$j"};

  //  echo "person$j" . "weighs" . "weight$j" . " kilos and is" . "height$j" . "metres tall." "person$j" . "BMI is" . calculatebmi(${"height$j"}, ${"weight$j"}) . $weightclass;
    
    //echo ${"height$j"};
    
    echo '<br>';
}



?>

</body>
</html>