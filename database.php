<?php 
$connection = mysqli_connect("127.0.0.1","root","","store-project"); // there is no difference between localhost and 127.0.0.1, but it should be slightly faster to not consult the hosts file of your server every time you connect.
//if($connection){ an empty-ish variable evaluates to false so ==0 is not needed, also this entire if-block is not needed because you're not catching the error in it.
//    echo "Connection Failed";
//}

$store_query=$connection->prepare('SELECT img_path, img_name, name, description, price, id, incart FROM `store`;');
$store_query->bind_result($img_path, $img_name, $name, $description, $price, $id, $incart);
$store_query->execute();

?>