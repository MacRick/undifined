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

<main>
<button class="tablink" onclick="openPage('Home', this, '')"id="defaultOpen">Home</button>
<button class="tablink" onclick="openPage('Contact', this, '')">Collection</button>
<button class="tablink" onclick="openPage('About', this, '')">About</button>
<button class="tablink" onclick="openPage('Login', this, '')" >Login</button>

<div id="Home" class="tabcontent">
  <h1>Birdy</h1><h1>Records</h1>
    
</div>

<div id="Login" class="tabcontent">
    <?php   
$error = "";
if (isset($_POST['submit'])){
    if (isset($_POST['username']) && !empty($_POST['password'])){
        $username = $_POST['username'];
        $password =  $_POST['password'];
            $user = "Rick";
            $pass = "password";
        if ($username == $user && $password == $pass){
            session_start();
            $_SESSION['ingelogd'] = true;
            header("Location: ingelogd.php");
    }   else{
    $error = "Username & password zijn incorrect";
    
}

    }  
    else{
    $error = "Username & password zijn verplicht";
    
}
        }   
?> 
<div class="login-page">

<form method="post">
<?php echo $error; ?><br><br>
<label>Username</label><br><input type="text" name="username" /><br>
<label>Password</label><br><input type="password" name="password" /><br><br>
<input type="submit" name="submit" value="inloggen" />
</form>
</div>
        
    
    
    </div>
    
    
    <?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "undefined";
$connect = new mysqli($servername, $username, $password, $database);

if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}

$sql = "SELECT * FROM records";
    ?>

<div id="Contact" class="tabcontent">
<h1>A small taste of our collection</h1> 
<ul>
    <?php
    if ($result = $connect->query($sql)) {
        while ($row = $result->fetch_row()) {
            ?>
          <li>
            <div class="details">
             <a href="albums.php?id=<?php echo $row[0]; ?>"> <h2><?php echo $row[1] ?></h2></a>
              <p><?php echo $row[5] ?></p>
              <p><?php echo $row[5] ?></p>
              <img src="<?php echo "img/".$row[2] ?>">
              <img src="<?php echo "img/".$row[2] ?>">
            </div>
          </li>
    <?php
        }
        $result->close();
    }
              ?>
    </ul>
</div>

    <div id="About" class="tabcontent">
        
 <article><h3>About Birdy Records</h3>Founded in 2018 Birdy Records is the most popular webshop to date for all your favorite alternative and punk records,
 <br> order your records online or swing by our physical store in Alphen aan den Rijn. 
   </article> 
        
 
        
         
</div>
  
    
</main>   
    
    
 <script>function openPage(pageName, elmnt, color) {
  // Hide all elements with class="tabcontent" by default */
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Remove the background color of all tablinks/buttons
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }

  // Show the specific tab content
  document.getElementById(pageName).style.display = "block";

  // Add the specific color to the button used to open the tab content
  elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click(); </script>   
    
    
    
    
    
	
	
</body>
</html>

