<?php 
$connection = mysqli_connect("127.0.0.1","root","","store-project"); // there is no difference between localhost and 127.0.0.1, but it should be slightly faster to not consult the hosts file of your server every time you connect.
//if($connection){ an empty-ish variable evaluates to false so ==0 is not needed, also this entire if-block is not needed because you're not catching the error in it.
//    echo "Connection Failed";
//}
?>
