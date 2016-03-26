<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Public  Photo Gallery</title>
		<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<style>
.bg-1 { 
    background-color: #1abc9c; 
    color: #ffffff;
}

.bg-2 { 
    background-color: #ffffff; /* White */
    color: #555555;
}
.navbar {
    padding-top: 15px;
    padding-bottom: 15px;
    border: 0;
    border-radius: 0;
    margin-bottom: 0;
    font-size: 12px;
    letter-spacing: 5px;
}

.navbar-nav li a:hover {
    color: #1abc9c !important;
}
</style>   

   </head>
   
   <body>
   <nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#">Public photo gallery</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
     <!-- <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Home</a></li>
        <li><a href="#">Upload</a></li>
        <li><a href="#">Photos</a></li>
      </ul> -->
    </div>
  </div>
</nav>

   	<div class="container-fluid bg-1  text-center">
  <br>
  <!--<h2><b>Show me your SELFIE!</h2>-->
  <br>
<img src="data:image/jpeg;base64,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"  class="img-circle"style="width:454px;height:400px;"  alt="selfie">
<br>
<br>
<br>
<br>
<br>
<br>
<br>

 </div>


<div  class="container-fluid bg-2">
 

        <!-- html form-->
        <h2> Select a File:</h2>
        <h4><form method="POST" action="" enctype="multipart/form-data">      
            <input type="file" name="image"> <br> <br>
            <input type="submit" value="submit" name="submit" color="black">
            <input type="reset" value="reset">
       </h4>
	   <br>
	   <br>
		</form>
		</div>

    
        <?php
        //connecting to DB
        require_once 'connect.php';

        if ($mysqli->connect_errno)

    {
        die ('There was the problem with your connection: '.$mysqli->connect_error());
    }
        
        // Defining variables
        if (isset($_FILES['image']['name'])){// do this, otherwise you'll have a notice message
          $destination = 'images/'; //the folder that stores your image
          $original_filename = basename($_FILES['image']['name']);
          $filename_array = explode('.', $original_filename); 
          $file_extension = end($filename_array);
          $size = filesize($_FILES['image']['tmp_name']);
          $tmp_name = 'file_'.md5($original_filename).'.'.$file_extension;
          
         // Uploading image 
          if (move_uploaded_file($_FILES['image']['tmp_name'], $destination.$tmp_name)){
            $query = "INSERT INTO images (file_path, file_name, tmp_name, file_ext, file_size) VALUES ('$destination', '$original_filename','$tmp_name',
                    '$file_extension', '$size')";
            $result = $mysqli->query($query);
            echo '<script>alert("Photo successfully uploaded!")</script>';
          }
           
          else {
              echo '<script>alert("Something went wrong")</script>';
               
          }
		
        }

// view photos from database
$query = "SELECT * FROM images";
 
$result = $mysqli->query($query) or die(mysqli_error($mysqli));
 
if ($result) {
  echo "<ul id='images'> \n";
     
  while ($row = $result->fetch_object()) {
     
   
   
    $id = $row->id;
    echo "<li><a  href='images'><img src='images/".$row->tmp_name."' id='$id' /> </a>\n";
	 echo "</li> \n \n";    
 
  
 
    }
	
  echo "\n</ul>";
}
        ?>
		

    </body>
</html>