<?php
 if(isset($_POST['button1'])) {
    echo "This is Button1 that is selected";
    setcookie("Button1", "Videos", time()+30*24*60*60);
}
if(isset($_POST['button2'])) {
    echo "This is Button2 that is selected";
    setcookie("Button2", "Photos", time()+30*24*60*60);
}
if(isset($_POST['button3'])) {
    echo "This is Button1 that is selected";
    setcookie("Button3", "IMAX", time()+30*24*60*60);
}
if(isset($_POST['button4'])) {
    echo "This is Button2 that is selected";
    setcookie("Button4", "Drone", time()+30*24*60*60);
}
if(isset($_POST['button5'])) {
    echo "This is Button1 that is selected";
    setcookie("Button5", "Films", time()+30*24*60*60);
}
if(isset($_POST['button6'])) {
    echo "This is Button2 that is selected";
    setcookie("Button6", "Still", time()+30*24*60*60);
}
if(isset($_POST['button7'])) {
    echo "This is Button1 that is selected";
    setcookie("Button7", "Robot", time()+30*24*60*60);
}
if(isset($_POST['button8'])) {
    echo "This is Button2 that is selected";
    setcookie("Button8", "Rope", time()+30*24*60*60);
}
if(isset($_POST['button9'])) {
    echo "This is Button1 that is selected";
    setcookie("Button9", "ARRI", time()+30*24*60*60);
}
if(isset($_POST['button10'])) {
    echo "This is Button2 that is selected";
    setcookie("Button10", "DSLR", time()+30*24*60*60);
}
?>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>SERVICES</title>
</head>
<body>
    <h1>Services</h1>
    <form method="post">
        <input type="submit" name="button1" value="Videos"/>
        <input type="submit" name="button2" value="Photos"/>
        <input type="submit" name="button3" value="IMAX"/>
        <input type="submit" name="button4" value="Drone"/>
        <input type="submit" name="button5" value="Films"/>
        <input type="submit" name="button6" value="Still"/>
        <input type="submit" name="button7" value="Robot"/>
        <input type="submit" name="button8" value="Rope"/>
        <input type="submit" name="button9" value="ARRI"/>
        <input type="submit" name="button10" value="DSLR"/>
    </form>
</body>
</html>