<?php

// Method used to Explode a string into pieces

// Array separated with spaces
$pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";

// Calling the Method
$pieces = explode(" ", $pizza);

// RESULTS (printing an array)
echo $pieces[0]; // piece1
echo $pieces[1]; // piece2 ...

// Array can be separated with any Character
$data = "foo:*:1023:1000::/home/foo:/bin/sh";

// Inserting data into a list of variables
list($user, $pass, $uid, $gid, $gecos, $home, $shell) = explode(":", $data);

//RESULTS (printing single variables)
echo $user; // foo
echo $pass; // *
echo $uid; // 1023 ...


// ================================================ //


// Call the Method
array explode ( string $delimiter , string $string [, int $limit ] )
// $delimiter -> Char that will be used as limit separator
// $string -> String with data joined by a single separator - "," (a,b,c,d)
// $limit -> number of limiters that will be separated

?>