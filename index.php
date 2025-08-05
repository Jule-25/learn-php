<?php
// loops

$names = ['Oumar', 'Ibrahim', 'David'];
//for ($i = 0; $i < count($names); $i++) {
//  echo $names[$i] . '<br \>';
//}
//foreach ($names as $name) {
//   echo $name . '<br />';
//}

$products = [
    ['name' => 'mangoe', 'price' => 300],
    ['name' => 'orange', 'price' => 200],
    ['name' => 'apple', 'price' => 100]
];
//foreach ($products as $product) {
//    echo $product['name'] . '<br />';
//}

//$i = 0;
//while ($i < count($products)) {
//    echo $products[$i]['name'] . '<br />';
//    $i++;
//}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Time With PHP</title>
</head>

<body>
    <h1>products</h1>
    <?php foreach ($products as $product) { ?>
        <h3><?php echo $product['name'] ?></h3>
        <p>&dollar;<?php echo $product['price'] ?></p>
    <?php } ?>
</body>

</html>