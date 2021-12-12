<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center><h1>Bails</h1>
    <img src="../bails.jpg" width="600" height="400"></center>
    <form action="Dellinspire14.php" method="post">
        <fieldset><legend>Review This Product</legend>
        <br/>
        <p><label for="rating">Rating</label>
        <input type="radio" name="rating" value="5" /> 5 
        <input type="radio" name="rating" value="4" /> 4
        <input type="radio" name="rating" value="3" /> 3 
        <input type="radio" name="rating" value="2" /> 2 
        <input type="radio" name="rating" value="1" /> 1</p>    
        <p><label for="review">Review</label>
        <textarea name="review" rows="8" cols="40" maxlength="450">
           </textarea></p>
        <br/>
        <p><input type="submit" value="Submit Review"></p>
    
    </fieldset>
    </form>
    <?php 
$path = "bails";
if (!isset($_COOKIE[$path]['count']))
{
    ?>
    Welcome! This is the first time you have viewed this page. 
<?php
    $cookie = 1;
    setcookie($path."[count]", $cookie);
}
else
{
    $cookie = ++$_COOKIE[$path]['count'];
    setcookie($path."[count]", $cookie);
    // setcookie($_COOKIE['path']['count'], $cookie);
    ?>  
    You have viewed this page <?= $_COOKIE[$path]['count'] ?> times. 
<?php
    }
?>
<?php
if(isset($_POST['buttonSubmit'])) {
    
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
</body>

</html>