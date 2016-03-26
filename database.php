<?php 
$connection = mysqli_connect("127.0.0.1","root","","obqvi"); 
$store_query=$connection->query('SELECT img_path, img_name, name, description, price, id, incart FROM `store`');