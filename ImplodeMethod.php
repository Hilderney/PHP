// Method used to Implod a string into 

<?php

// Array of Data
$array = array('lastname', 'email', 'phone');

// Calling the Method
$comma_separated = implode(", ", $array);

// RESULT 
echo $comma_separated; // lastname, email, phone


// Empty string when using an empty array:
var_dump(implode('hello', array())); // string(0) ""


// ================================================ //


// Call the Method
string implode ( string $glue , array $pieces )
// $glue -> Char junction
// $pieces -> Array of string data (better use only string)


// Using to list itens of an array
echo "<ul><li>" . implode("</li><li>", $elements) . "</li></ul>";

?>

