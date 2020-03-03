<?php
function bannercolour(){ // Creating function to change the table colour in Score page according to the time of the day
$t = date("H");

if ($t < "20") { // If statement to check the time of the day
    echo '<div class="grid-container" id="night">'; // Using ID to alter the change in the table
} else { // If the time is not night then it will go in the else statement
    echo '<div class="grid-container" id="morning">'; // Using ID to alter the change in the table
}
}
?>