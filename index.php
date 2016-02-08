<!Doctype HTML>
<html>
<head>
	<link rel="stylesheet" href="style.css" type="text/css"/>
	<title>Онлайн Каталог</title>
</head>
<body>
<form action="" method="get">

<?php 
session_start();
require('database.php');
echo "<h1><a href=". 'index.php' .">Catalog</a></h1>
<b id=".cart."><a href=". 'cart.php' .">Show cart</a></b>";
	// $store_query=$connection->prepare('SELECT img_path, img_name, name, description, price, id FROM `store`;');
	// $store_query->bind_result($img_path, $img_name, $name, $description, $price, $id);
	// $store_query->execute();
	while ($store_query->fetch()) {
		echo "<p>
			<table>
				<th>
					<img src=".$img_path.'/'.$img_name.">
				</th>
				<td>
					<h2>". $name ."</h2><br>
					". $description ."<br><br>
					Price : ". $price ."$<br>
				</td>
				<td>
					<input type='submit' name='add".$id."' value='Add to cart'/>
				</td>
			</table>
		</p>";
		if(isset($_GET['add'.$id.''])){
			$cart=1;
			//$cart_query=$connection->prepare('INSERT INTO `store-project`.`store` (`incart`) VALUES(?)');
			$cart_query=$connection->prepare('UPDATE `store-project`.`store` SET `incart` = 1 WHERE `store`.`id` = ?');
			$cart_query->bind_param('i', $id);
			$cart_query->execute();
			$cart_query->close(); //Close query
			header("Location: cart.php");	
		}
    	}
    	$store_query->close(); //close store query
	mysqli_close($connection); //Done with the database, closing connection
?>
</form>
</body>
</html>