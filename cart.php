<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css" type="text/css"/>
	<title>Кошница</title>
</head>
<body>
<form action="" method="POST">

<?php
	@session_start();
	require('database.php');
	
	echo "<h1>Кошница</h1>
	<b id=".cart."><a href=". 'index.php' .">Обратно към магазина</a></b>";
	echo "<p>
			<table id='table_cart'>
				<tr>
					<th> </th>
					<th>Продукт</th>
					<th>Цена</th>
				</tr>";
				
	while ( ($row=$store_query->fetch_assoc()) !== null) {
		extract($row);
		if($incart==1){
			$allprice +=$price;
			echo "<tr>
				<th><input type='checkbox' value='check".$id."' name='check".$id."'></th>
				<th>".$name."</th>
				<th>".$price."$</th>
				</tr>
			";
		}
		if(isset($_POST['check'.$id]) && isset($_POST['remove'])){
			$cart_query=$connection->prepare('UPDATE `store` SET `incart` = 0 WHERE `id` = ?');
			$cart_query->bind_param('i', $id);
			$cart_query->execute();
			$cart_query->close();
		}
	}
	echo "	<tr>
				<th></th>
				<th></th>
				<th>".$allprice."$</th>
			</tr>";
	echo "</table></p><br><br>
		<input type='submit' name='remove' value='Премахване на избраните от количката'/>
	";
	
	
?>

</form>
</body>
</html>