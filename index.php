<?php
@session_start();
require('database.php');
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css" type="text/css"/>
	<title>Онлайн Каталог</title>
</head>
<body>
<form action="" method="get">

<?php 
echo "<h1><a href=". 'index.php' .">Каталог</a></h1>
<b id=".cart."><a href=". 'cart.php' .">Покажи кошница</a></b>";
	while ( ($row=$store_query->fetch_assoc()) !== null) {
		extract($row);
		echo "<p>
			<table>
				<th>
					<img src=".$img_path.'/'.$img_name.">
				</th>
				<td>
					<h2>". $name ."</h2><br>
					". $description ."<br><br>
					Цена : ". $price ."$<br>
				</td>
				<td>
					<input type='submit' name='add".$id."' value='Добави в кошница'/>
				</td>
			</table>
		</p>";
		if(isset($_GET['add'.$id.''])){
			$cart_query=$connection->prepare('UPDATE `store` SET `incart` = 1 WHERE `id` = ?');
			$cart_query -> bind_param("i", $id);
			$cart_query -> execute();
			$cart_query -> close(); 
			header("Location: cart.php");
		}
    }
    	$store_query->close();
	mysqli_close($connection);
	ob_end_flush();
?>
</form>
</body>
</html>