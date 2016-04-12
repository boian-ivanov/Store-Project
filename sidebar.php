<?php 
    echo "<h1 id='Head_Ob'><a id='Head_Ob' href=".'index.php'.">Обяви.com</a></h1><br>
    <nav class='vertical'>";
            if(isset($_SESSION['login_user'])){
                echo "<h4 id='Hello'>Hello, <i>". $name_db ."</i>.</h4><br>
	<ul>
        <li><a href=". 'add.php'.">Add a Product</a></li><br>
        <li><a href=". '/obqvi/edit.php'.">Your products</a></li><br>
        <li><a href=". '/obqvi/login/logout.php'.">Logout</a></li>
    </ul>";
            } else {
                echo "<ul><li id=".register."><a href=". '/obqvi/login/index.php' .">Login Here<br>to add a Product</a></li></ul>";
            }	
?>
</nav>