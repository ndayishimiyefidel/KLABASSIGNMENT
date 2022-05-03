<?php
//declare product array called myarray


$myarray = array(
    array("Name" => "TV", "Price" => 200),
    array("Name" => "Pc", "Price" => 1000),
    array("Name" => "Album", "Price" => 10),
    array("Name" => "Bike", "Price" => 100),
    array("Name" => "Phone", "Price" => 500),
    array("Name" => "Book", "Price" => 5)
);
//showing all products name and price
$all = array();
$allp = array();
$i = 0;
foreach ($myarray as $key => $value) {
    $all[] = $value['Name'];
    $allp[] = $value['Price'];
    $i++;
    echo "Item:" . " " . $i . " " . $all[$key] . " " . "Price" . " " . $allp[$key];
    echo "<br>";
    echo "<br>";
}
echo "<br>";
echo "<br>";
//$key is index of $myarray and $value is one of subarrays
//declare a new array to store all prices

$all_price = array();

foreach ($myarray as $key => $value) {
    //get only "Price" from each row of array (discard "Name")
    $all_price[] = $value["Price"];
    // echo  $all_price[$key];
}

//Filter and show the product that will be bought when 
//you don't have much money I mean Cheap one

$min = min($all_price);
echo ("Min Price: " . $min . "<br /><br />");

//Filter and show the product that will be expensive in the array
$max = max($all_price);
echo ("Max Price: " . $max . "<br /><br />");
//Calculate the full price of all product combined
$sum = 0;
foreach ($myarray as $key => $value) {
    $sum = $sum + $all_price[$key];
}
echo ("Sum of all Item: " .  $sum . "<br /><br />");
// Calculate the full price of all product combined and remove product
// that are under the 10 dollar
$totprice = 0;
foreach ($myarray as $key => $value) {
    if ($all_price[$key] > 10) {
        $totprice = $totprice + $all_price[$key];
    }
}
echo ("Total price except item 10 dollar: " .  $totprice . "<br /><br />");