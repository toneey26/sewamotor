<?php
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sewa Motor</title>

  <!-- Link to CSS -->
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <!-- Box Icons -->
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

  <!-- Link Swiper CSS -->
  <link rel="stylesheet" href="css/swiper-bundle.min.css">

  <style>
    body {
      margin: 0;
      padding: 0;
    }
    
    .navbar {
      background-color: #333;
      padding: 10px 0;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      z-index: 999;
    }

    .nav-container {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .nav-logo {
      color: #fff;
      font-size: 24px;
      text-decoration: none;
	  margin-left: 30px;
    }

    .nav-menu {
      list-style: none;
      display: flex;
      gap: 20px;
    }

    .nav-item {
      padding: 10px;
    }

    .nav-link {
      color: #fff;
      text-decoration: none;
      font-size: 16px;
    }

    .nav-link:hover {
      background-color: #555;
    }
  </style>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar">
    <div class="nav-container">
      <a href="#" class="nav-logo">Sewa Motor</a>
      <ul class="nav-menu">
        <li class="nav-item"><a href="#hero" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="identitas.php" class="nav-link">Sewa</a></li>
        <li class="nav-item"><a href="datasewa.php" class="nav-link">Data Sewa</a></li>
        <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
      </ul>
    </div>
  </nav>

  <!-- Bike Container -->
   <!-- Bike Container -->
   <section class="bike-container" id="bikes">
    <h1>Pilihan Motor</h1>
    <div class="bike-slider swiper">
      <div class="swiper-wrapper">

        <!-- Slide 1 -->
        <div class="swiper-slide">
          <!-- Bike Box -->
          <div class="bike-box">
            <img src="img/scoopy.jpg" alt="" class="box-img">
            <!-- Bike Title -->
            <h2 class="bike-title">Scoopy</h2>
            <!-- Price And Book -->
            <div class="price-book">
              <h3 class="price">Rp 90.000<span>/day</span></h3>
              <a href="identitas.php" class="book-btn">Sewa</a>
              <!-- Cancel Tag -->
              <span class="tag">Free Cancellation</span>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="swiper-slide">
          <!-- Bike Box -->
          <div class="bike-box">
            <img src="img/beat.jpg" alt="" class="box-img">
            <!-- Bike Title -->
            <h2 class="bike-title">Beat</h2>
            <!-- Price And Book -->
            <div class="price-book">
              <h3 class="price">Rp 80.000 <span>/day</span></h3>
              <a href="identitas.php" class="book-btn">Sewa</a>
              <!-- Cancel Tag -->
              <span class="tag">Free Cancellation</span>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="swiper-slide">
          <!-- Bike Box -->
          <div class="bike-box">
            <img src="img/vario.jpg" alt="" class="box-img">
            <!-- Bike Title -->
            <h2 class="bike-title">Vario 125</h2>
            <!-- Price And Book -->
            <div class="price-book">
              <h3 class="price">Rp 125.000<span>/day</span></h3>
              <a href="identitas.php" class="book-btn">Sewa</a>
              <!-- Cancel Tag -->
              <span class="tag">Free Cancellation</span>
            </div>
          </div>
        </div>

        <!-- Slide 4 -->
        <div class="swiper-slide">
          <!-- Bike Box -->
          <div class="bike-box">
            <img src="img/vixion.jpg" alt="" class="box-img">
            <!-- Bike Title -->
            <h2 class="bike-title">Vixion</h2>
            <!-- Price And Book -->
            <div class="price-book">
              <h3 class="price">Rp 100.000<span>/day</span></h3>
              <a href="identitas.php" class="book-btn">Sewa</a>
              <!-- Cancel Tag -->
              <span class="tag">Free Cancellation</span>
            </div>
          </div>
        </div>

        <!-- Slide 5 -->
        <div class="swiper-slide">
          <!-- Bike Box -->
          <div class="bike-box">
            <img src="img/nmax.jpg" alt="" class="box-img">
            <!-- Bike Title -->
            <h2 class="bike-title">NMAX</h2>
            <!-- Price And Book -->
            <div class="price-book">
              <h3 class="price">Rp 150.000<span>/day</span></h3>
              <a href="identitas.php" class="book-btn">Sewa</a>
              <!-- Cancel Tag -->
              <span class="tag">Free Cancellation</span>
            </div>
          </div>
        </div>

        <!-- Slide 6 -->
        <div class="swiper-slide">
          <!-- Bike Box -->
          <div class="bike-box">
            <img src="img/aerox.jpg" alt="" class="box-img">
            <!-- Bike Title -->
            <h2 class="bike-title">AEROX</h2>
            <!-- Price And Book -->
            <div class="price-book">
              <h3 class="price">Rp 150.000<span>/day</span></h3>
              <a href="identitas.php" class="book-btn">Sewa</a>
              <!-- Cancel Tag -->
              <span class="tag">Free Cancellation</span>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </section>

  <script src="js/swiper-bundle.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>
