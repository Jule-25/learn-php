<?php

// functions
function sayHello($name = 'Jule')
{
    echo 'good morning ' . $name;
}
//sayHello('Oumar');

function formatProduct($product)
{
    return "{$product['name']} costs £{$product['price']} to buy <br />";
}
echo formatProduct(['name' => 'apple', 'price' => 10]);

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