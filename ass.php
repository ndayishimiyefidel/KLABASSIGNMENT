<?php
//php array
// const item = [ {name: 'Bike', price:100}, {name: 'TV', price:200},
// {name: 'Album', price:10}, {name: 'Book', price:5}, 
//{name: 'Phone', price:500}, {name: 'Computer', price:1000}, ],



//declaring products array

// $shopping_cart = array(
//     ["name" => "Bike", "price" => "100"],
//     ["name" => "Album", "price" => "410"],
//     ["name" => "computer", "price" => "100"],
//     ["name" => "Phone", "price" => "500"],
//     ["name" => "TV", "price" => "200"],
//     ["name" => "Book", "price" => "5"]

// );
// echo "<pre>";
// print_r($shopping_cart);
// echo "</pre>";
// echo "<pre>";
// var_dump($shopping_cart);
// echo "</pre>";
// foreach ($shopping_cart as $mark) {
//     echo $mark['0']['price'] . "\n";
// }

$shopping_cart = array(
    array("Bike", 100),
    array("Album", 10),
    array("pc", 200),
    array("phone", 50),
    array("Tv", 300),
    array("Book", 5),


);
// echo "<pre>";
// print_r($shopping_cart);
// echo "</pre>";
echo "All array element";
echo "<br>";
for ($row = 0; $row < count($shopping_cart); $row++) {

    for ($col = 0; $col < 2; $col++) {
        echo  $shopping_cart[$row][$col];
        echo "<br>";
    }
}
//find minimum value in multi demensional array
echo $shopping_cart[5][1];