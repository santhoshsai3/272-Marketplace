<html>
<head>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Services</title>
</head>
<body>
    <center>
    <h1>Services</h1>
    <form method="post">
      <div class="btn-group">
        <button type="submit"><img src="mybutton.jpg" /></button>
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
    echo '<center><a href="ball.html">Click here</a></center>';
    setcookie("buttonBall", "Ball", time()+30*24*60*60);
}
if(isset($_POST['buttonBat'])) {
    echo "<center>Click here to know more about cricket bats</center>";
    echo '<center><a href="bat.html">Click here</a></center>';
    setcookie("buttonBat", "Bat", time()+30*24*60*60);
}
if(isset($_POST['buttonHelmet'])) {
    echo "<center>Click here to know more about Helmets</center>";
    echo '<center><a href="helmet.html">Click here</a></center>';
    setcookie("buttonHelmet", "Helmet", time()+30*24*60*60);
}
if(isset($_POST['buttonPads'])) {
    echo "<center>Click here to know more about batting pads</center>";
    echo '<center><a href="pads.html">Click here</a></center>';
    setcookie("buttonPads", "Pads", time()+30*24*60*60);
}
if(isset($_POST['buttonGloves'])) {
    echo "<center>Click here to know more about batting gloves</center>";
    echo '<center><a href="gloves.html">Click here</a></center>';
    setcookie("buttonGloves", "Gloves", time()+30*24*60*60);
}
if(isset($_POST['buttonSleeves'])) {
    echo "<center>Click here to know more about batting sleeves</center>";
    echo '<center><a href="sleeves.html">Click here</a></center>';
    setcookie("buttonSleeves", "Sleeves", time()+30*24*60*60);
}
if(isset($_POST['buttonBails'])) {
    echo "<center>Click here to know more about bails</center>";
    echo '<center><a href="Products/bails.html">Click here</a></center>';
    setcookie("buttonBails", "Bails", time()+30*24*60*60);
}
if(isset($_POST['buttonGuard'])) {
    echo "<center>Click here to know more about guard</center>";
    echo '<center><a href="guard.html">Click here</a></center>';
    setcookie("buttonGuard", "Guard", time()+30*24*60*60);
}
if(isset($_POST['buttonBoundary'])) {
    echo "<center>Click here to know more about boundary</center>";
    echo '<center><a href="boundary.html">Click here</a></center>';
    setcookie("buttonBoundary", "Boundary", time()+30*24*60*60);
}
if(isset($_POST['buttonStumps'])) {
    echo "<center>Click here to know more about stumps</center>";
    echo '<center><a href="stumps.html">Click here</a></center>';
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

