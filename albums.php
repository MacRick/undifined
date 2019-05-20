<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="Rick Nagtegaal">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Birdy Records Offical Site</title>
	
    <link rel=stylesheet href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet"> 
</head>
    
    
    <body>
    
    <a href="index.php" class="button">Back</a>
        

    
    <?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "undefined";
$connect = new mysqli($servername, $username, $password, $database);

if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}

$sql = "SELECT * FROM records where id=".$_GET["id"];
        
        $result = $connect->query($sql);
        $row = $result->fetch_row();
        
?>
        
        <div class='album_show'>
          
    <h5>Name:</h5>          <?php   echo $row[1];    ?> 
    <h5>Artist:</h5>         <?php   echo $row[3];    ?>
    <h5>Genre:</h5>          <?php   echo $row[4];    ?>
    <h5>Price (incl. vat):</h5>         <?php   echo $row[5];    ?>
        
            <img src="img/<?php echo $row[2]; ?>";
      
        </div>
            <br><br>
         <a href="#" class="button2">Add To Basket</a> 
     
        
    </body>
    
</html>