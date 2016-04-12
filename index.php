<?php
require('/login/session.php');
?>
<!Doctype HTML>
<html>
<head>
<meta charset="UTF-8">
<title></title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <form id="container">
<?php
@session_start();
//require('/login/dbconnect.php');
ob_start();
include("sidebar.php");
if ($_GET[view] > 0) {
	$addsql=' where id = '.$_GET[view] ;
}
$ads_query=$connection->query('SELECT id, img_path, img_name, ad_name, description, price FROM `ads` '.$addsql);
	while ( ($row=$ads_query->fetch_assoc()) !== null) {
		extract($row);
		if($_GET[view]== $id){
			echo "<div class='ob_ins'>
                  <h1>".$ad_name."</h1>
				  <!--By user : <i>".$usr_name."</i>--><br><br>
				  <img src=".$img_path.'/'.$img_name."><br>
				  <b>Price:</b> ".$price."$<br>
				  <b>Product description:</b><br>".$description."<br>
				  <a href =". 'index.php' .">Return to Home Page</a>
                  </div>
				 ";
		} else {		
			echo "<div class='ob_out'>
                <p>	
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
			</p>
            </div>";
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