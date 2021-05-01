<?php
    /**
     * Form handler for SAC 1 Part 2 - UV Index and Rating
     * 
     * Gives the UV Index and UV Rating for the hour entered by the user
     * Validates form data, provides error messages with link back to form
     * 
     * @author Tabitha Melgalvis, Virtual School Victoria, <tmelgalv@vsv.vic.edu.au>
     * @author *** Bailey Clark ***
     * @copyright Virtual School Victoria 2021
     */

    $timearray = array(5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20);

    $uvindex = array(0.01,0.09,0.34,0.96,2.56,7.64,9.61,10.86,11.01,9.37,6.91,4.34,2.21,0.84,0.17,0.01);
    
    
    
    
    function test($funchour, $funcuvi, $funcuvr){
    
        echo 'The UV index at hour&nbsp'. $funchour.' &nbsp was&nbsp'.  $funcuvi .'&nbspand the uv rating was&nbsp'. $funcuvr. '</br>';
        echo '<a href="UVForm.html">Go back to form</a>';
    
    }
    // Check that a form has been submitted using POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        // Check that the form had a field called Hour
        if (isset($_POST['Hour']))
        {
            // Store the value entered on the form for Hour
            // in a local variable called $hour
            $hour = $_POST['Hour'];

            // Check if hour is a number between 5 and 20 (inclusive)
            // We only want to find the UV index and UV rating for valid hours
            if (is_numeric($hour) && $hour >= 5 && $hour <= 20)
            {




if($hour == 5){

    test($timearray[0],$uvindex[0], 'very Low');//i know there is a smarter way to do this with better validation/using an array to do the uv rating/validate but this does work


}
if($hour == 6){

    test($timearray[1],$uvindex[1], 'very low');//i know there is a smarter way to do this with better validation/using an array to do the uv rating/validate but this does work


}
if($hour == 7){

    test($timearray[2],$uvindex[2], 'Very low');//i know there is a smarter way to do this with better validation/using an array to do the uv rating/validate but this does work


}
if($hour == 8){

    test($timearray[3],$uvindex[3], 'Very Low');//i know there is a smarter way to do this with better validation/using an array to do the uv rating/validate but this does work


}
if($hour == 9){

    test($timearray[4],$uvindex[4], 'Low');//i know there is a smarter way to do this with better validation/using an array to do the uv rating/validate but this does work


}
if($hour == 10){

    test($timearray[5],$uvindex[5], 'High');//i know there is a smarter way to do this with better validation/using an array to do the uv rating/validate but this does work


}
if($hour == 11){

    test($timearray[6],$uvindex[6], 'Very High');//i know there is a smarter way to do this with better validation/using an array to do the uv rating/validate but this does work


}
if($hour == 12){

    test($timearray[7],$uvindex[7], 'Very High');//i know there is a smarter way to do this with better validation/using an array to do the uv rating/validate but this does work


}
if($hour == 13){

    test($timearray[8],$uvindex[8], 'Extreme');//i know there is a smarter way to do this with better validation/using an array to do the uv rating/validate but this does work


}
if($hour == 14){

    test($timearray[9],$uvindex[9], 'Very High');//i know there is a smarter way to do this with better validation/using an array to do the uv rating/validate but this does work


}
if($hour == 15){

    test($timearray[10],$uvindex[10], 'High');//i know there is a smarter way to do this with better validation/using an array to do the uv rating/validate but this does work


}
if($hour == 16){

    test($timearray[11],$uvindex[11], 'Moderate');//i know there is a smarter way to do this with better validation/using an array to do the uv rating/validate but this does work


}
if($hour == 17){

    test($timearray[12],$uvindex[12], 'Low');//i know there is a smarter way to do this with better validation/using an array to do the uv rating/validate but this does work


}
if($hour == 18){

    test($timearray[13],$uvindex[13], 'Very Low');//i know there is a smarter way to do this with better validation/using an array to do the uv rating/validate but this does work


}
if($hour == 19){

    test($timearray[14],$uvindex[14], 'Very Low');//i know there is a smarter way to do this with better validation/using an array to do the uv rating/validate but this does work


}
if($hour == 20){

    test($timearray[15],$uvindex[15], 'Very Low');//i know there is a smarter way to do this with better validation/using an array to do the uv rating/validate but this does work


}


















            }
            // If no value was entered on the form
            elseif ($hour == '')
            {
                echo '<p>No time was entered.<br>
                      Please enter a time of day between 5 (5am) and 20 (8pm)</p>';
                echo '<a href="UVForm.html">Go back to form</a>';
            }
            // If the hour entered was not in the valid range
            else
            {
                echo '<p>Please enter a time of day between 5 (5am) and 20 (8pm)</p>';
                echo '<a href="UVForm.html">Go back to form</a>';
            }
        }
    }
?>