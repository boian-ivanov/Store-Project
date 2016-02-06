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

if ($result = $connection->query("SELECT * FROM `store`")) {
	$row_cnt = $result->num_rows;
	while ($row = $result->fetch_assoc()) {
		echo "<p>
			<table>
				<th>
					<img src=".$row[img_path].'/'.$row[img_name].">
				</th>
				<td>
					<h2>". $row[name] ."</h2><br>
					". $row[description] ."<br><br>
					Price : ". $row[price] ."$<br>
				</td>
				<td	>
					<input type='submit' name='add".$row[id]."' value='Add to cart'/>
				</td>
			</table>
		</p>
		";
		
		if(isset($_GET['add.$row[id].'])){
			$cart=1;
			if(mysqli_query($connection, "INSERT INTO `store-project`.`store` (`incart`) VALUES ('$cart')")){
				mysqli_close($connection);
				header("Location: cart.php");
			}	
		}
    }
	
	
	$result->close();
}
?>
</form>
</body>
</html>