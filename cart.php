<!Doctype HTML>
<html>
<head>
	<link rel="stylesheet" href="style.css" type="text/css"/>
	<title>Кошница</title>
</head>
<body>
<form action="" method="get">

<?php
	session_start();
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
				
	while ($store_query->fetch()) {
		if($incart==1){
			echo "<tr>
				<th><input type='checkbox' value='check".$id."' name='check".$id."'></th>
				<th>".$name."</th>
				<th>".$price."$	</th>
				</tr>
			";
		}
	}	
	echo "</table></p><br><br>
		<input type='submit' name='remove' value='Remove selected from cart'/>
	";
	
	if(null!==($_GET('remove')) && null!==($_GET('check".$id."'))){
		
	}
	
	
	// echo $_SESSION['cart'];
?>

</form>
</body>
</html>