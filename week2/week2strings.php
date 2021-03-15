<!DOCTYPE html>

<head>
</head>

<body>


<?php

$testsentence1 = "THIS is a Test sentence";

$testsentence2 = "this is also  a test Sentence";


echo "<p>strtoupper test:</p> ";
echo $testsentence1 . '<br>';

$testsentence1 = strtoupper($testsentence1);
echo $testsentence1 . '<br>';


echo "<p>strlen  test:</p> ";
echo $testsentence1 . '<br>';

$testsentence1 = strlen($testsentence1);
echo $testsentence1 . '<br>';

echo "<p>ucfirst   test:</p> ";
echo $testsentence2 . '<br>';

$testsentence2 = ucfirst($testsentence2);
echo $testsentence2 . '<br>';


?>


</body>