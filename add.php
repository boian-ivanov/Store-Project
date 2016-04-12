<?php
require('/login/session.php');

if(!isset($_SESSION['login_user'])){
	header("Location: index.php");
}

$img_path = "img/";
$target_file = $img_path . basename($_FILES["img_upload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

$img_name = basename($_FILES["img_upload"]["name"]);
$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];
$usr_id = $_SESSION['login_id'];

if(isset($_POST['accept_btn'])){

	@$check = getimagesize($_FILES["img_upload"]["tmp_name"]);
	if($check !== false) {
        // echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        // echo "File is not an image.";
        $uploadOk = 0;
    }

    if (file_exists($target_file)) {
	    //echo "Sorry, file already exists.";
	    $uploadOk = 0;
	}
	if ($_FILES["img_upload"]["size"] > 500000) {
	    //echo "Sorry, your file is too large.";
	    $uploadOk = 0;
	}
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
	    //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	    $uploadOk = 0;
	}
	if ($uploadOk == 0) {
    	//echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
	} else {
	    if (move_uploaded_file($_FILES["img_upload"]["tmp_name"], $target_file)) {
	        //echo "The file ". basename( $_FILES["img_upload"]["name"]). " has been uploaded.";
	    } else {
	        //echo "Sorry, there was an error uploading your file.";
	    }
	}

	if($img_path != NULL && $img_name != NULL && $name != NULL && $description != NULL && $price != NULL){
		$query= 'INSERT INTO ads (img_path, img_name, ad_name, description, price, usr_id) 
		VALUES ('."'".$img_path."'".', '."'".$img_name."'".', '."'".$name."'".', '."'".$description."'".', '."'".$price."'".', '."'".$usr_id."'".')';

		if($connection->query($query)){
			echo "<script>alert ('Your product has been added');</script>";
			header("Location: index.php");
		} else {
			echo "<script>alert ('You can not add an empty product');</script>";
		}
	}
}
?>

    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css" type="text/css" />
        <title>Add a Prduct</title>
    </head>

    <body>
        <script>
            function getFile() {
                document.getElementById("img_upload").click();
            }

            function sendFile() {
                if (document.getElementById("img_upload").files.length == 0) {
                    alert("Cannot add a product without an image!");
                    return false;
                } else /*if (document.getElementById("name").)*/{
                    return true;
                }
            }
        </script>
        <!-- <form action="upload.php" method="POST" enctype="multipart/form-data"> -->
        <form id="form_add" method="POST" enctype="multipart/form-data" onSubmit="return sendFile();">
            <h1 id="Head_Ob"><a id="Head_Ob" href="index.php">Обяви.com</a></h1>
            <h1 id="head">Add a Product</h1>
            <div id="add">
                <input id="name" type="text" placeholder="Title" name="name"></input>
                <br>
                <textarea id="description" placeholder="Description" name="description" rows="4" cols="50"></textarea>
                <br>
                <input id="price" type="number" placeholder="Price" name="price"></input>
                <br>

                <div id="yourBtn" style="height: 50px; width: 100px;border: 1px dashed #BBB; cursor:pointer;" onclick="getFile()">Click to upload!</div>
                <div style='height: 0px;width: 0px; overflow:hidden;'>
                    <input type="file" name="img_upload" id="img_upload">
                    <br>
                </div>

                <input id="accept_btn" type="submit" name="accept_btn" value="Accept">
            </div>
        </form>
    </body>

    </html>