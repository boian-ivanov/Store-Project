<?php
@session_start();
require('/login/dbconnect.php');
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css" type="text/css"/>
	<title>Online Catalog for Ads</title>
</head>
<body>
<form action="" method="get">

<?php 

echo "<header><h1><a href=". 'index.php' .">Обяви.com</a></h1></header>";
require_once('/login/session.php');
if(isset($_SESSION['login_user'])){
	echo "<nav><h4>Hello, <i>". $name_db ."</i>.</h4>
	<b><a href=".'add.php'.">Add a Product</a></b><br><br>
	<b id=".edit."><a href=". '/obqvi/edit.php' .">Your products</a></b><br><br>
	<b id=".register."><a href=". '/obqvi/login/logout.php' .">Logout Here</a></b>";
} else {
	echo "<b id=".register."><a href=". '/obqvi/login/index.php' .">Login Here<br>to add a Product</a></b>";
}	
if ($_GET[view] > 0) {
	$addsql=' where id = '.$_GET[view] ;
}
$ads_query=$connection->query('SELECT id, img_path, img_name, ad_name, description, price FROM `ads` '.$addsql);
echo "</nav>";
	while ( ($row=$ads_query->fetch_assoc()) !== null) {
		extract($row);
		if($_GET[view]== $id){
			echo "<h1>".$ad_name."</h1>
				  <!--By user : <i>".$usr_name."</i>--><br><br>
				  <img src=".$img_path.'/'.$img_name."><br>
				  <b>Price:</b> ".$price."$<br>
				  <b>Product description:</b><br>".$description."<br>
				  <a href =". 'index.php' .">Return to Home Page</a>
				 ";
		} else {		
			echo "<p>	
				<table>
					<th>
						<img src=".$img_path.''.$img_name.">
					</th>
					<td>
						<h2>". $ad_name ."</h2><br>
						". $description = substr($description,0,100).'...' ."<br><br>
						<b>Price :</b> <i>". $price ."</i> $<br>
					</td>
					<td>
						<button type='submit' name='view' value='".$id."'>View Product</button>
					</td>
				</table>
			</p>";
		// if(isset($_GET['view'.$id.''])){
			// $cart_query=$connection->prepare('UPDATE `ads` SET `incart` = 1 WHERE `id` = ?');
			// $cart_query -> bind_param("i", $id);
			// $cart_query -> execute();
			// $cart_query -> close(); 
			// header("Location: cart.php");
		// }
    	}
    }
    $ads_query->close();
	mysqli_close($connection);
	ob_end_flush();
?>
</form>
</body>
</html>