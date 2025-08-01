<?php
$stringOne = 'my name is ';
$stringTwo = 'Jule';

//echo $stringOne . $stringTwo; // concatenate the two strings

$age = 20;
//echo 'Hey i am ' . $age . 'years old'; 
//echo "Hey i am $age years old";

// using an escape character to output a quote
//echo "And then i said \"You don't know me\"";

// accessing the first element in an array
$name = 'Jule';
//echo $name[0]; // 'J'

// using string functions
//echo strlen($name); // find the length of the string name
//echo strtoupper($name); // uppercase all the characters in the string
//echo strtolower($name); // lowercase all the characters in the string
echo str_replace('J', 'A', $name); // replace the character 'J' in name by 'A'

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Time With PHP</title>
</head>

<body>

</body>

</html>