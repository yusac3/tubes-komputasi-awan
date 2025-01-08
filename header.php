<?php
require_once "pdo.php";   //it includes information required to connect to database
session_start();
if (isset($_SESSION['name'])) {
  $profile = $_SESSION['name'];
} else {
  $profile = 'Profile';
}
if (isset($_POST['submit'])) {
  if ($_POST['searched_item'] != '') {
    $_SESSION['searched_item'] = $_POST['searched_item'];
    header('location:searched_item.php');
    return;
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <link rel="icon" type="image/png" href="images/uboli-logo.png" />
  <script src="https://kit.fontawesome.com/66036fc421.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="header.css">
</head>
<header>
  <img src="images/logo.png" alt="logo">
  <nav>
    <ul>
      <li><a href="men.php">Tronton</a></li>
      <li><a href="women.php">Kontainer</a></li>
      <li><a href="kids.php">Engkel</a></li>
      <li><a href="index.php">Home</a></li>
    </ul>
    <div class="one">
      <form method="POST">
        <input type="text" name="searched_item" placeholder="Search for products,brands and more..." size="40" />
        <button type="submit" name="submit">Search</button>
        <ul>
          <li><a href="cart.php" class="top-right"><i class="fas fa-shopping-cart"></i>&nbsp;<span>Cart</span></a></li>
          <li><a href="profile.php" class="top-right"><i class="fas fa-user-circle"></i>&nbsp;<span><?php echo $profile ?></span></a></li>
        </ul>
      </form>
    </div>
  </nav>
</header>

<body>

</body>

</html>