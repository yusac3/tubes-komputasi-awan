<?php
require_once "pdo.php";  //it includes information required to connect to database
require "header.php";   //all the contents of header.php file are added here
if (isset($_POST['send'])) {
  if (isset($_POST['email']) && isset($_POST['message'])) {
    $stmt = $pdo->prepare('INSERT INTO feedback
          (email,message) VALUES ( :email,:message)');  //inserting data into database
    $stmt->execute(array(
      ':email' => $_POST['email'],
      ':message' => $_POST['message'],
    ));
    echo " <script>
    alert('Thank you for your Feedback');
    window.location.href='index.php';
    </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Fashion Factory</title>
  <link rel="icon" type="image/jpg" href="images/uboli-logo.png" />
  <link rel="stylesheet" type="text/css" href="index.css">
  <script src="https://kit.fontawesome.com/66036fc421.js" crossorigin="anonymous"></script>
</head>


<h2 class="middle">Categories</h2>
<div class="categories">
  <div class="first">
    <div>
      <a href="men.php">
        <p>Tronton</p>
      </a>
    </div>
  </div>
  <div class="second">
    <div><a href="women.php">
        <p>Kontainer</p>
      </a></div>
  </div>
  <div class="third">
    <div><a href="kids.php">
        <p>Engkel</p>
      </a></div>
  </div>
</div><br>
<h2 class="middle">Kualitas</h2>
<div class="products">
  <div class="fourth">
    <div>
      <a href="shirts.php">
        <p>A</p>
      </a>
    </div>
  </div>
  <div class="fifth">
    <div><a href="trousers.php">
        <p>B</p>
      </a></div>
  </div>
  <div class="sixth">
    <div><a href="tops.php">
        <p>C</p>
      </a></div>
  </div>
  <div class="seventh">
    <div><a href="leggings.php">
        <p>D</p>
      </a></div>
  </div>
  <div class="eighth">
    <div><a href="ethnic_wear.php">
        <p>E</p>
      </a></div>
  </div>
</div>

<footer>
  <div class="main">
    <div class="left">
      <h2>About us</h2>
      <p>Pemanfaatan ban yang sudah rusak untuk di daur ulang kembali menjadi ban </p>
      <div class="social">
        <ul>
          <li><a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-square"></i></a></li>
          <li><a href="https://twitter.com" target="_blank"><i class="fab fa-twitter-square"></i></a></li>
          <li><a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram-square"></i></a></li>
        </ul>
      </div>
    </div>
    <div class="mid">
      <h2>Address</h2>
      <ul>
        <li><i class="fas fa-map-marker-alt"></i><span class="text">Sidorjo, Jawa Timur</span></li>
        <div class="phone">
          <li><i class="fas fa-phone-alt"></i><span class="text">+6289679045463</span></li>
        </div>
        <li><i class="fas fa-envelope-square"></i><span class="text">maemmangga01@gmail.com</span></li>
      </ul>
  </div>
  <p class="copyright">Created By UboliStore
    <span class="far fa-copyright"></span>2024.
  </p>
</footer>

</html>