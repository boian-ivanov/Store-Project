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

echo "<h1>Каталог</h1>
<b id=".cart."><a href=". 'cart.php' .">Кошница</a></b>";

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
					Цена : ". $row[price] ."$<br>
				</td>
				<td	>
					<input type='submit' name='add".$row[id]."' value='Добави в кошницата'/>
				</td>
			</table>
		</p>
		";
    }
	
	// for($i=0;$i<$row_cnt;$i++){
		// if(isset($_GET['add.$row[id].'])){
			
		// }
	// }
	$result->close();
}
?>
</form>
</body>
</html>