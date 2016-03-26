<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css" type="text/css"/>
	<title>Edit your Ads</title>
</head>
<body>
<form action="" method="post">
<h1><a href="index.php">Обяви.com</a></h1>

<?php
require('/login/session.php');

if(!isset($_SESSION['login_user'])){
	header("Location: index.php");
}

if($_POST[edit]){
	$editsql = ' AND id='.$_POST[edit];
}


$ads_query=$connection->query('SELECT id, img_path, img_name, ad_name, description, price FROM `ads` WHERE usr_id = '.$_SESSION['login_id'].''.$editsql);
while (($row=$ads_query->fetch_assoc()) !== null) {
	extract($row);
	if($_POST[edit] == $id){
		echo " Title : <input type='text' name='name' value='".$ad_name."'><br><br>
			  Description : <br><textarea id='description' name='description' rows='9' cols='70'>".$description."</textarea><br>
			  Price : <input type='text' name='price' value='".$price."'><br><br>
			  <button type='submit' name='confirm' value='".$id."'>Confirm edit</button><br>
			  <a href =". 'edit.php' .">Return to your products</a><br>
			  ";
			 echo 'UPDATE ads SET ad_name='."'".$ad_name."'".', description='."'".$description."'".', price ='."'".$price."'".'WHERE id = '.$id;
			 if(isset($_POST[confirm])) {
			 	//$confirm_query=
				$connection->query('UPDATE ads SET ad_name='."'".$ad_name."'".', description='."'".$description."'".', price ='."'".$price."'".'WHERE id = '.$id);

			}

	} else {	
		echo $_POST[confirm];
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
						<button type='submit' name='edit' value='".$id."'>Edit</button>
					</td>
				</table>
			</p>";
	}
	//echo '<pre>' . var_export($row, true) . '</pre>';
}
$ads_query->close();
mysqli_close($connection);
ob_end_flush();
?>
