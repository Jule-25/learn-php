<?php
// conditional statements
//$age = 20;
//if ($age <= 10) {
//    echo 'You are a kid';
//} else if ($age > 10 && $age < 20) {
//    echo 'You are a teenager';
//} else {
//    echo 'You are an adult';
//}

$products = [
    ['name' => 'mangoe', 'price' => 300],
    ['name' => 'orange', 'price' => 10],
    ['name' => 'apple', 'price' => 13]
];

//foreach ($products as $product) {
//    if ($product['price'] < 15) {
//        echo $product['name'] . '<br />';
//    }
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
    <div>
        <ul>
            <?php foreach ($products as $product) { ?>
                <?php if ($product['price'] < 15) { ?>
                    <li>
                        <?php echo $product['name'] ?>
                    </li>
                <?php } ?>
            <?php } ?>
        </ul>
    </div>
</body>

</html>