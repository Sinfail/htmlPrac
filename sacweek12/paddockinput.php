
<html>

<head> </head>

<body>

<?php
// define variables and set to empty values
$paddockErr = $weightErr = "";
$paddock = $weight =  "";

//used to validate the data server side
function validate($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }


//recieve data from html form, validate and return error or creative paddock txt file
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST['Paddock']) or $_POST['Paddock'] < 1 or $_POST['Paddock'] > 4) {
    $paddockErr = "Paddock number must be a numeric value between 1 and 4";

    echo "$paddockErr";
    echo "<br>";

  } else {
    $paddock = validate($_POST["Paddock"]);
  }

  if (empty($_POST['Weight']) or $_POST['Weight'] < 10 or $_POST['Weight'] > 100) {
    $weightErr = "The egg weight must be a numeric value between 10 and 100";

    echo "$weightErr";
    echo "<br>";

  } else {
    $weight = validate($_POST["Weight"]);

    $fp = fopen("Paddock$paddock.txt", 'a+');


    fwrite($fp, $weight);
    fclose($fp);


  }

  
}

//tell user that data has been saved
if(isset($paddock) && isset($weight))
{
    /*
//$data=$_POST['textdata'];
$fp = fopen("Paddock$paddock.txt", 'a+');
//fwrite($fp, $paddock);
fwrite($fp, $weight);
fclose($fp);
*/
echo "Your data has been saved to Paddock$paddock.txt  <br>";




}
//return back to html form
echo '<a href="inputpaddock.html"> Return to the form </a>';





?>

</body>

</html>