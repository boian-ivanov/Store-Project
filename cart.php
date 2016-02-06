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

	echo $_SESSION['cart'];
?>

</form>
</body>
</html>