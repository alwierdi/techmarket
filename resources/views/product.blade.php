<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Product || TechMarket</title>
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
    <link rel="stylesheet" href="css/product.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
  </head>
  <body>
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

    <section class="container">
      <div class="row flex-lg-row align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
          <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class="active" aria-current="true"></button>
              <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item">
                <img src="img/dxracer-drifting-oh-dh73-nc-3.jpg" class="d-block mx-lg-auto img-fluid" alt="gambar product" width="700" height="500" loading="lazy">
              </div>
              <div class="carousel-item active">
                <img src="img/DXRacer-DRIFTING-SERIES.png" class="d-block mx-lg-auto img-fluid" alt="gambar product" width="700" height="500" loading="lazy">
              </div>
              <div class="carousel-item">
                <img src="img/OIP.jpeg" class="d-block mx-lg-auto img-fluid" alt="gambar product" width="700" height="500" loading="lazy">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
              <span class="carousel-control-prev-icon bg-primary" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
              <span class="carousel-control-next-icon bg-primary" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
        <div class="col-lg-6">
          <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">DXRacer DRIFTING SERIES</h1>
          <p class="lead">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Incidunt dolorem error ut eaque minima debitis repellat, numquam obcaecati aspernatur, impedit ipsa nobis veritatis molestias quam maxime magni tempore porro mollitia delectus saepe quis illo praesentium! Distinctio ea corporis et ex provident! Impedit provident harum placeat, dolores numquam eveniet iusto hic!</p>
          <div class="d-grid gap-2 d-md-flex justify-content-md-start my-lg-5 my-sm-2">
            <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Checkout</button>
            <button type="button" class="btn btn-outline-secondary btn-lg px-4">Cart</button>
          </div>
        </div>
      </div>
    </section>

    <div class="container px-4 py-5 my-5" id="icon-grid">
      <h2 class="pb-2 border-bottom">Description</h2>
  
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5">
        <div class="col d-flex align-items-start">
          <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#bootstrap"></use></svg>
          <div>
            <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Featured title</h3>
            <p>Paragraph of text beneath the heading to explain the heading.</p>
          </div>
        </div>
        <div class="col d-flex align-items-start">
          <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#cpu-fill"></use></svg>
          <div>
            <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Featured title</h3>
            <p>Paragraph of text beneath the heading to explain the heading.</p>
          </div>
        </div>
        <div class="col d-flex align-items-start">
          <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#calendar3"></use></svg>
          <div>
            <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Featured title</h3>
            <p>Paragraph of text beneath the heading to explain the heading.</p>
          </div>
        </div>
        <div class="col d-flex align-items-start">
          <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#home"></use></svg>
          <div>
            <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Featured title</h3>
            <p>Paragraph of text beneath the heading to explain the heading.</p>
          </div>
        </div>
        <div class="col d-flex align-items-start">
          <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#speedometer2"></use></svg>
          <div>
            <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Featured title</h3>
            <p>Paragraph of text beneath the heading to explain the heading.</p>
          </div>
        </div>
        <div class="col d-flex align-items-start">
          <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#toggles2"></use></svg>
          <div>
            <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Featured title</h3>
            <p>Paragraph of text beneath the heading to explain the heading.</p>
          </div>
        </div>
        <div class="col d-flex align-items-start">
          <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#geo-fill"></use></svg>
          <div>
            <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Featured title</h3>
            <p>Paragraph of text beneath the heading to explain the heading.</p>
          </div>
        </div>
        <div class="col d-flex align-items-start">
          <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#tools"></use></svg>
          <div>
            <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Featured title</h3>
            <p>Paragraph of text beneath the heading to explain the heading.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="container marketing">
    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette align-items-center">
      <div class="col-md-7 d-flex align-items-center">
        <div class="col-lg-3">
          <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect></svg>
          <!-- <p><a class="btn btn-secondary" href="#">View details »</a></p> -->
        </div>
        <div class="row">
          <h2 class="fw-normal mt-2">AzkaDevanda</h2>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem culpa at eveniet velit repudiandae laboriosam possimus quae, distinctio voluptates tempora odit in, consequatur, eos provident soluta eum quos ex ipsa facere. Ut commodi repellendus id at nobis vitae suscipit ab perspiciatis aliquid numquam nesciunt fugiat, laboriosam quae, tempore soluta nulla?</p>
        </div>
      </div>
      <div class="col-md-5">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-bg)"></rect><text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em">500x500</text></svg>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette align-items-center">
      <div class="col-md-7 order-md-2 d-flex justify-content-end align-items-center">
        <div class="col-lg-3 order-sm-2 container">
          <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect></svg>
        </div>
        <div class="row mx-3">
          <h2 class="fw-normal mt-2 d-flex justify-content-end">Zahran Fakira</h2>
          <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
        </div>
      </div>
      <div class="col-md-5 order-md-1">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-bg)"></rect><text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em">500x500</text></svg>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette align-items-center">
      <div class="col-md-7 d-flex align-item-center">
        <div class="col-lg-3">
          <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect></svg>
        </div>
        <div class="row">
          <h2 class="fw-normal mt-2">Edgar & Adams</h2>
          <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
        </div>
      </div>
      <div class="col-md-5">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-bg)"></rect><text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em">500x500</text></svg>
      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div>
      
      <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
