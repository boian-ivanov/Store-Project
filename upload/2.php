<?php
include 'connect.php';

$query = "SELECT * FROM display_images WHERE id='1'";
if($file_path_db = $mysqli->query($query)){
	while($row = $file_path_db->fetch_assoc()){
		echo $row["file_path"];
		var_dump($query);
	}
}
var_dump($query);
?>