<?php


//$age = "4";


Function agetype($age){

    $age2 = $age;

    if($age2 < 3){
        echo "you are too young for school";
    } elseif ($age2 == 3 || 4){
     echo "you can go to preschool";
    } elseif ($age2 > 5 && $age < 12){
    echo "You can go to primary school";
    } elseif ($age2 > 12 && $age <18){
        echo "you can go to high school";
    }elseif($age2 > 18){
        echo "you do not have to go to school";
        
    }


}

$ageresult = agetype(5);

echo $ageresult;





?>