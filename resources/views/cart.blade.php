<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cart || TechMarket</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
    <link rel="stylesheet" href="css/cart.css" />
  </head>
  <body>
    <div class="navbar-container">
      <nav>
        <!-- <a href="./dashboard.html" class="logo-brand">Techmarket</a> -->
        <ul class="nav-list">
          <a href="/" class="nav-items">Home</a></li>
          <a href="" class="nav-items">Brand New</a></li>
          <a href="" class="nav-items">Special Deals</a></li>
        </ul>
    </nav>
    </div>

    <div class="background"></div>

    <div class="tools-container" id="home">
      <a href="/" class="hovering"
        ><img src="img/logo-techmarket.png" alt="logo-brand"
      /></a>
      <p class="tech">Tech<span class="market"> Market</span></p>
      <svg
        class="profile-icon"
        xmlns="http://www.w3.org/2000/svg"
        width="50"
        height="50"
        fill="currentColor"
        class="bi bi-person-circle"
        viewBox="0 0 16 16"
        color="white"
      >
        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
        <path
          fill-rule="evenodd"
          d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"
        />
      </svg>
    </div>

    <section>
      <div class="container">
        <!-- Left Side -->
        <div class="product-container">
          <div class="card">
            <div class="layout">
              <img src="img/contoh img.png" alt="Product image" />
              <div class="details-product">
                <div class="information">
                  <h3>Fantech Studio Pro</h3>
                  <p>Color : White</p>
                  <p>Quantity : 1</p>
                  <p class="price-product">Rp9.000.000</p>
                </div>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="layout">
              <img src="img/contoh img.png" alt="Product image" />
              <div class="details-product">
                <div class="information">
                  <h3>Fantech Studio Pro</h3>
                  <p>Color : White</p>
                  <p>Quantity : 1</p>
                  <p class="price-product">Rp9.000.000</p>
                </div>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="layout">
              <img src="img/contoh img.png" alt="Product image" />
              <div class="details-product">
                <div class="information">
                  <h3>Fantech Studio Pro</h3>
                  <p>Color : White</p>
                  <p>Quantity : 1</p>
                  <p class="price-product">Rp9.000.000</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Right Side -->
        <div class="total-price">
          <div class="invoice">
            <h3 class="center-text">Invoice</h3>
            <div class="invoice-details">
              <div class="details">
                <p>Fantech Studio Pro</p>
                <p>Rp9,000,000</p>
              </div>
              <div class="details">
                <p>Fantech Studio Pro</p>
                <p>Rp9,000,000</p>
              </div>
              <div class="details">
                <p>Fantech Studio Pro</p>
                <p>Rp9,000,000</p>
              </div>
              <div class="details">
                <p>Fantech Studio Pro</p>
                <p>Rp9,000,000</p>
              </div>
              <div class="details total">
                <p>Total</p>
                <p>Rp9,000,000</p>
              </div>
            </div>
          </div>
          <button>Checkout</button>
        </div>
      </div>
    </section>


  </body>
</html>
