<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home || TechMarket</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <div class="background"></div>

    <div class="navbar-container">
      <nav>
        <!-- <a href="./dashboard.html" class="logo-brand">Techmarket</a> -->
        <ul class="nav-list">
          <a href="#home" class="nav-items">Home</a></li>
          <a href="" class="nav-items">Brand New</a></li>
          <a href="" class="nav-items">Special Deals</a></li>
        </ul>
    </nav>
    </div>

    <br>

    <div class="tools-container" id="home">
      <a href="/"class="hovering" >
        <img src="img/logo-techmarket.png" alt="logo-brand"></a>
      <p class="tech">Tech<span class="market"> Market</span></p>
      <div class="search-container">
        <input type="search" placeholder="Find Your Product" class="search-bar">
        <button type="submit" class="search-button">Search</button>
      </div>
    </div>    

    <section class="hero-section">
      <div class="banner-container">
        <!-- <img src="../src/img/Home.png" alt="Promo Banner"> -->
        <div class="banner"></div>
      </div>
    </section>

    <!-- Floating Cart -->
    <div class="floating-cart" onclick="openCart()">
      <div class="cart-icon">🛒</div>
    </div>

    <div class="category-container">
      <p>Last Change to Shop!</p>
      <ul class="nav nav-pills">
        <li class="nav-item category nav-link" data-category="All">All</li>
        <li class="nav-item category nav-link" data-category="Headset">Headset</li>
        <li class="nav-item category nav-link" data-category="Mouse">Mouse</li>
        <li class="nav-item category nav-link" data-category="Keyboard">Keyboard</li>
        <li class="nav-item category nav-link" data-category="Monitor">Monitor</li>
        <li class="nav-item category nav-link" data-category="Gaming Chair">Gaming Chair</li>
      </ul>
    </div>

    <div class="product-container" id="product-section">
      <!-- Product items will be dynamically added here -->
    </div>

    <div class="product-container">
      <div class="card-product">
        <div class="img-product" onclick="openProduct()">
          <img src="img/DXRacer-DRIFTING-SERIES.png" alt="">
        </div>
        <p>Nama Product</p>
        <p>Rp2.700.000</p>
      </div>

      <div class="card-product">
        <div class="img-product"></div>
        <p>Nama Product</p>
        <p>Rp2.700.000</p>
      </div>

      <div class="card-product">
        <div class="img-product"></div>
        <p>Nama Product</p>
        <p>Rp2.700.000</p>
      </div>

      <div class="card-product">
        <div class="img-product"></div>
        <p>Nama Product</p>
        <p>Rp2.700.000</p>
      </div>

      <div class="card-product">
        <div class="img-product"></div>
        <p>Nama Product</p>
        <p>Rp2.700.000</p>
      </div>

      <div class="card-product">
        <div class="img-product"></div>
        <p>Nama Product</p>
        <p>Rp2.700.000</p>
      </div>

      <div class="card-product">
        <div class="img-product"></div>
        <p>Nama Product</p>
        <p>Rp2.700.000</p>
      </div>

      <div class="card-product">
        <div class="img-product"></div>
        <p>Nama Product</p>
        <p>Rp2.700.000</p>
      </div>

      <div class="card-product">
        <div class="img-product"></div>
        <p>Nama Product</p>
        <p>Rp2.700.000</p>
      </div>

      <div class="card-product">
        <div class="img-product"></div>
        <p>Nama Product</p>
        <p>Rp2.700.000</p>
      </div>
    </div>

    <script src="js/redirect.js"></script>
  </body>
</html>
