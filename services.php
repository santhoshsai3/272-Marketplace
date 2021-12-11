<html>
<head>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Services</title>
    <style>
            * {
    box-sizing: border-box;
}
body {
  background-image: url('bg1.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  margin: 0;
  padding: 0;
}

.navbar {
    display: flex;
    position: relative;
    justify-content: space-between;
    align-items: center;
    background-color: #333;
    color: white;
}

.brand-title {
    font-size: 1.5rem;
    margin: .5rem;
}

.navbar-links {
    height: 100%;
}

.navbar-links ul {
    display: flex;
    margin: 0;
    padding: 0;
}

.navbar-links li {
    list-style: none;
}

.navbar-links li a {
    display: block;
    text-decoration: none;
    color: white;
    padding: 1rem;
}

.navbar-links li:hover {
    background-color: #555;
}

.toggle-button {
    position: absolute;
    top: .75rem;
    right: 1rem;
    display: none;
    flex-direction: column;
    justify-content: space-between;
    width: 30px;
    height: 21px;
}

.toggle-button .bar {
    height: 3px;
    width: 100%;
    background-color: white;
    border-radius: 10px;
}

@media (max-width: 800px) {
    .navbar {
        flex-direction: column;
        align-items: flex-start;
    }

    .toggle-button {
        display: flex;
    }

    .navbar-links {
        display: none;
        width: 100%;
    }

    .navbar-links ul {
        width: 100%;
        flex-direction: column;
    }

    .navbar-links ul li {
        text-align: center;
    }

    .navbar-links ul li a {
        padding: .5rem 1rem;
    }

    .navbar-links.active {
        display: flex;
    }
}

@import url('https://fonts.googleapis.com/css?family=Raleway');

* {
    font-family: Raleway;
}

/* html {
    background:"background.jpg";
} */

.side-links {
  position: absolute;
  bottom: 15px;
  right: 15px;
}

.side-link {
  display: flex;
  align-items: center;
  justify-content: center;
  text-decoration: none;
  margin-bottom: 10px;
  color: white;
  width: 180px;
  padding: 10px 0;
  border-radius: 10px;
}

.side-link-youtube {
  background-color: red;
}

.side-link-twitter {
  background-color: #1DA1F2;
}

.side-link-github {
  background-color: #6e5494;
}

.side-link-text {
  margin-left: 10px;
  font-size: 18px;
}

.side-link-icon {
  color: white;
  font-size: 30px;
}
        </style>
</head>
<body>
<nav class="navbar">
        <div class="brand-title">Cricket Store</div>
        <a href="#" class="toggle-button">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </a>
        <div class="navbar-links">
          <ul>
            <li><a href="home.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="products.html">Products</a></li>
            <li><a href="news.html">News</a></li>
            <li><a href="contact.php">Contact</a></li>
	          <li><a href="services.php">Services</a></li>
            <li><a href = "login.html">Login</a></li>
	          <li><a href="register.html">Register</a></li>
          </ul>
        </div>
      </nav>
    <center>
    <h1>Services</h1>
    <form method="post">
      <div class="btn-group">
        <input type="submit" name="buttonBall" class="btn btn-primary" value="Ball"/>
        <input type="submit" name="buttonBat" class="btn btn-primary" value="Bat"/>
        <input type="submit" name="buttonHelmet" class="btn btn-primary" value="Helmet"/>
        <input type="submit" name="buttonPads" class="btn btn-primary" value="Pads"/>
        <input type="submit" name="buttonGloves" class="btn btn-primary" value="Gloves"/>
        <input type="submit" name="buttonSleeves" class="btn btn-primary" value="Sleeves"/>
        <input type="submit" name="buttonBails" class="btn btn-primary" value="Bails"/>
        <input type="submit" name="buttonGuard" class="btn btn-primary" value="Gurard"/>
        <input type="submit" name="buttonBoundary" class="btn btn-primary" value="Boundary"/>
        <input type="submit" name="buttonStumps" class="btn btn-primary" value="Stumps"/>
        <input type="submit" name="buttonSubmit" class=".btn-success" value="Previous Results"/>
      </div>
    </form>
    </center>
</body>
</html>
<?php
static $number = 0;
if(isset($_POST['buttonBall'])) {
    echo "<center>Click here to know more about cricket balls</center>";
    echo '<center><a href="Products/ball.html">Click here</a></center>';
    setcookie("buttonBall", "Ball", time()+30*24*60*60);
}
if(isset($_POST['buttonBat'])) {
    echo "<center>Click here to know more about cricket bats</center>";
    echo '<center><a href="Products/bat.html">Click here</a></center>';
    setcookie("buttonBat", "Bat", time()+30*24*60*60);
}
if(isset($_POST['buttonHelmet'])) {
    echo "<center>Click here to know more about Helmets</center>";
    echo '<center><a href="Products/helmet.html">Click here</a></center>';
    setcookie("buttonHelmet", "Helmet", time()+30*24*60*60);
}
if(isset($_POST['buttonPads'])) {
    echo "<center>Click here to know more about batting pads</center>";
    echo '<center><a href="Products/pads.html">Click here</a></center>';
    setcookie("buttonPads", "Pads", time()+30*24*60*60);
}
if(isset($_POST['buttonGloves'])) {
    echo "<center>Click here to know more about batting gloves</center>";
    echo '<center><a href="Products/gloves.html">Click here</a></center>';
    setcookie("buttonGloves", "Gloves", time()+30*24*60*60);
}
if(isset($_POST['buttonSleeves'])) {
    echo "<center>Click here to know more about batting sleeves</center>";
    echo '<center><a href="Products/sleeves.html">Click here</a></center>';
    setcookie("buttonSleeves", "Sleeves", time()+30*24*60*60);
}
if(isset($_POST['buttonBails'])) {
    echo "<center>Click here to know more about bails</center>";
    echo '<center><a href="Products/bails.html">Click here</a></center>';
    setcookie("buttonBails", "Bails", time()+30*24*60*60);
}
if(isset($_POST['buttonGuard'])) {
    echo "<center>Click here to know more about guard</center>";
    echo '<center><a href="Products/guard.html">Click here</a></center>';
    setcookie("buttonGuard", "Guard", time()+30*24*60*60);
}
if(isset($_POST['buttonBoundary'])) {
    echo "<center>Click here to know more about boundary</center>";
    echo '<center><a href="Products/boundary.html">Click here</a></center>';
    setcookie("buttonBoundary", "Boundary", time()+30*24*60*60);
}
if(isset($_POST['buttonStumps'])) {
    echo "<center>Click here to know more about stumps</center>";
    echo '<center><a href="Products/stumps.html">Click here</a></center>';
    setcookie("buttonStumps", "Stumps", time()+30*24*60*60);
}
if(isset($_POST['buttonSubmit'])) {
    $reverseCookie=array_reverse($_COOKIE);
    foreach ( $reverseCookie as $key => $value )
    {
        if($number == 5){
            break;
        }
        print_r($value);
        echo "<br>";
        $number++;
    }
    $past = time() - 3600;
    foreach ( $reverseCookie as $key => $value )
    {
        unset($_COOKIE[$key]);
        setcookie($key, '', time() - 3600, '/');

    }
}
?>

