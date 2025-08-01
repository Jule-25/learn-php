<?php
$peopleOne = ['Jule', 'Oumar', 'Babi']; // declare an array of type string
//echo $peopleOne[2]; // 'Babi'

$peopleTwo = array('Ouz', 'Racky', 'Malick', 'Demba');
//echo $peopleTwo[1]; // 'Racky'

$ages = [20, 30, 40, 50];
//print_r($ages); // allows you to see what's in an array

// modify an element inside an array
$ages[0] = 10;
//echo $ages[0];

// add a new value in an array
array_push($ages, 100);
//print_r($ages);

// ouput the numbers of elements inside an array
//echo count($ages);

// associative arrays (key & value pairs)
$peopleAges = ['Jule' => 20, 'Racky' => 22, 'Oumar' => 19];
// output Jule's age
echo $peopleAges['Jule'];
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