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


<?php
session_start();
if ($_SESSION['ingelogd'] !=true){
    header("Location: ingelogd.php");
}

?>
        
   <div class="add_cd">
     <a href="index.php" class="button">Log Out</a>
   
      <h1>Welcome Rick</h1>
        <h2>You can add CD's using the Form below</h2>
    <form action="insert.php" method="post">
        <label>Name (name of the album)</label><br><input type="text" name="name" id="name"><br/>
        <label>image ([ ].jpg)</label><br><input type="text" name="image" id="image"><br/>
        <label>Artist</label><br><input type="text" name="artist" id="artist"><br/>
        <label>Genre</label><br><input type="text" name="genre" id="genre"><br/>
        <label>Price (add $)</label><br><input type="text" name="price" id="price"><br/>
            <input type="submit" value="Add CD">
        
        
        
        
        
        </form>
</div>
    </body>


</html>