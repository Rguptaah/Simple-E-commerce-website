<?php
include("common.php");
$item = "SELECT * from items";

$query =  mysqli_query($conn, $item);
var_dump($query);
die;
// $results = mysqli_fetch_array($query);
$id = [];
$i = 0;
while ($row = mysqli_fetch_array($query)) {
    $id[$i] = $row['id'];
    $i++;
}
echo $id;
