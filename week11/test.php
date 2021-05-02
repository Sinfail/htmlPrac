<!DOCTYPE html>

<html>

<head>
</head>

<body>



    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">

    Email: <input type = 'text' name = 'email'><br>
    Password: <input type = 'text' name = 'psswd'><br>
    Re-Enter Password: <input type = 'text' name = 'psswdcheck'><br>
    DOB: <input type = 'date' name = 'Date'><br>
<input type = 'submit'>
</form>

<?php


    // define variables and set to empty values
    $name = $email = $psswd = $psswdchk = "" ;
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $name = test_input($_POST["email"]);
      $email = test_input($_POST["psswd"]);
      $website = test_input($_POST["psswdcheck"]);
      $comment = test_input($_POST["Date"]);
    
    }
    
    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }


    echo $name;




?>



</body>





</html>