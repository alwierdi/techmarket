// Dapatkan referensi ke elemen-elemen form
const usernameInput = document.getElementById("usernameFloatingInput");
const emailInput = document.getElementById("emailFloatingInput");
const passwordInput = document.getElementById("floatingPassword");
const signupButton = document.querySelector(".signup");


signupButton.addEventListener("click", async (event) => {
  // event.preventDefault(); // Cegah pengiriman form secara default

  // Dapatkan nilai-nilai input
  const username = usernameInput.value;
  const email = emailInput.value;
  const password = passwordInput.value;

  console.log("Username:", username);
  console.log("Email:", email);
  console.log("Password:", password);
  console.log("Sending data to backend...");

  try {
    // Kirim data ke backend menggunakan Fetch API
    const response = await fetch('http://localhost:8080/signup', {
      method: 'POST',
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify({ username, email, password }),
    });

    if (response.ok) {
      // Jika berhasil, lakukan sesuatu (misalnya redirect ke halaman lain)
      console.log("Signup berhasil!");
      window.location.href = "/Public/loginPage.html";
    } else {
      // Jika gagal, tampilkan pesan error
      const error = await response.json();
      console.error("Signup gagal:", error.message);
    }
  } catch (error) {
    // Tangani error lainnya
    console.error('Terjadi kesalahan:', error);
  }
});
