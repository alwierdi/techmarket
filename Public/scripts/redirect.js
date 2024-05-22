function openLogin() {
  window.location.href = "loginPage.html";
}

function openHome() {
  window.location.href = "dashboard.html";
}

function openProduct() {
  window.location.href = "product.html";
}

function openCart() {
  window.location.href = "cart.html";
}

const products = [
  {
    id: 1,
    name: "DXRacer DRIFTING SERIES",
    price: 9000000,
    category: "Headset",
    image: "/src/img/DXRacer-DRIFTING-SERIES.png",
  },
  {
    id: 2,
    name: "Apa kek",
    price: 10000000,
    category: "Headset",
    image: "/src/img/dxracer-drifting-oh-dh73-nc-3.jpg",
  },
  {
    id: 3,
    name: "Test",
    price: 800000,
    category: "Mouse",
    image: "/src/img/OIP.jpeg"
  },
  { id: 4,
    name: "Test",
    price: 800000,
    category: "Mouse",
    image: "/src/img/OIP.jpeg" },
  { id: 5, name: "Product 5", category: "Keyboard", image: "product5.jpg" },
  { id: 6, name: "Product 6", category: "Keyboard", image: "product6.jpg" },
  { id: 7, name: "Product 7", category: "Monitor", image: "product7.jpg" },
  { id: 8, name: "Product 8", category: "Monitor", image: "product8.jpg" },
  { id: 9, name: "Product 9", category: "Gaming Chair", image: "product9.jpg" },
  {
    id: 10,
    name: "Product 10",
    category: "Gaming Chair",
    image: "product10.jpg",
  },
];

function displayProducts(category) {
  const productSection = document.getElementById("product-section");
  productSection.innerHTML = "";

  products.forEach((product) => {
    if (category === "all" || product.category === category) {
      const productCard = document.createElement("div");
      productCard.classList.add("card-product");
      productCard.innerHTML = `
        <div class="img-product" onclick="openProduct()">
          <img src="${product.image}" alt="${product.name}">
        </div>
        <p>${product.name}</p>
        <p>Rp${product.price.toLocaleString()}</p>
      `;
      productSection.appendChild(productCard);
    }
  });

  const categoryLinks = document.querySelectorAll('.nav-link');
  categoryLinks.forEach(link => {
    link.classList.remove('active');
    link.style.backgroundColor = '';
    link.style.color = '#000'
  });
  // event.target.classList.add('active');
  event.target.style.backgroundColor = '#f07a3c';
  event.target.style.color = '#fff';
}


const categoryLinks = document.querySelectorAll(".nav-link");
categoryLinks.forEach((link) => {
  link.addEventListener("click", (event) => {
    event.preventDefault();
    const category = event.target.dataset.category;
    categoryLinks.forEach((l) => l.classList.remove("active"));
    event.target.classList.add("active");
    displayProducts(category);
  });
});
