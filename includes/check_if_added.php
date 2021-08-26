<?php
function check_if_added_to_cart($item_id)
{
    include "./includes/common.php";
    include "./includes/item.php";
    $user_id = $_SESSION['id'];
    $item_id = $_SESSION['pid'];
    $q = " SELECT * FROM  `users_products` where user_id = '$user_id' and item_id = '$item_id' and status = 'Added to Cart ' ";
    $fetch = mysqli_query($conn, $q);
    if (mysqli_num_rows($fetch) >= 1) {
        return 1;
    } else {
        return  0;
    }
}
