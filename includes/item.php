<?php

$item = "SELECT * from  `item` ";

$query =  mysqli_query($conn, $item);
$results = mysqli_fetch_array($query);
$id = [];
$i = 0;
while ($row = mysqli_fetch_array($query)) {
    $id[$i] = $row['id'];
}
