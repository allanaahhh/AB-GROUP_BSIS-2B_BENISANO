<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Homepage</title>
</head>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap');
  .hero {
    position: relative;
    height: 100vh;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    color: white;
  }

  .back-video {
    position: absolute;
    top: 50%;
    left: 50%;
    min-width: 100%;
    min-height: 100%;
    width: auto;
    height: auto;
    z-index: -1;
    transform: translate(-50%, -50%);
  }

  nav {
    position: absolute;
    top: 30px;
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 100px;
  }

  nav img.logo {
    height: 100px;
    width: 100px;
  }

  nav ul {
    list-style: none;
    display: flex;
    gap: 50px;
  }

  nav ul li a {
    text-decoration: none;
    color: #FCC737;
    padding: 10px 10px;
    border-radius: 10px;
    transition: background-color 0.3s, color 0.3s;
    font-size: 20px;
  }

  nav ul li a:hover {
    background-color: #FFF6E9;
    color: rgb(225, 0, 94);
  }

  .content h1 {
    font-family: 'Oswald';
    font-size: 8rem;
    margin: 0;
  }

  .search-bar {
    margin-top: 50px;
  }

  .search-bar input {
    width: 300px;
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #FFF6E9;
  }

  .product-section {
    margin-top: 20px;
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 20px;
  }

  .product-card {
    background-color: #FFF6E9;
    border-radius: 10px;
    padding: 15px;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    width: 200px;
    text-align: center;
  }

  .product-card img {
    width: 100%;
    border-radius: 10px;
    height: 150px;
    object-fit: cover;
  }

  .product-card h3 {
    margin: 10px 0;
    font-size: 16px;
    color: #333;
  }

  .product-card p {
    font-size: 14px;
    color: #E1275F;
  }
</style>

<body>
  <div class="hero">
    <video autoplay loop muted plays-inline class="back-video">
      <source src="Website picture/VID_20241201185156.mp4" type="video/mp4">
    </video>

    <nav>
      <img src="Website picture/logo-removebg-preview.png" class="logo" alt="Logo">
      <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="aboutpage.php">About</a></li>
        <li><a href="productdraft.php">Product</a></li>
        <li><a href="shoppingcatalog.php"><i class='bx bx-cart'></i></a></li>
        <li><a href="loginpage.php"><i class='bx bx-user-circle'></i></a></li>
      </ul>
    </nav>

    <div class="content">
      <h1>CRAFTTIQUE</h1>
      <div class="search-bar">
        <input type="text" id="searchInput" placeholder="Search products..." onkeyup="searchProducts()">
      </div>
    </div>
  </div>


  <section id="products" class="product-section">
    <div class="product-card" data-name="amigurumi keychain">
      <img src="Website picture/312dd868b98942db658224431708f2f8.jpg" alt="Amigurumi Keychain">
      <h3>Amigurumi Keychain</h3>
      <p>₱80.00</p>
    </div>
    <div class="product-card" data-name="checkered sweatervest">
      <img src="Website picture/3d042c50908c5e723e17ec334100fcf8.jpg" alt="Checkered Sweatervest">
      <h3>Checkered Sweatervest</h3>
      <p>₱3,500.00</p>
    </div>
    <div class="product-card" data-name="tumbler holder">
      <img src="Website picture/18213c10b947aac874966053f40f0c99.jpg" alt="Tumbler Holder">
      <h3>Tumbler Holder</h3>
      <p>₱250.00</p>
    </div>
    <div class="product-card" data-name="ocean dreams bag">
      <img src="Website picture/31d7d2f0a738c7cd9e36b9a6cc36d03d.jpg" alt="Ocean Dreams Bag">
      <h3>Ocean Dreams Bag</h3>
      <p>₱1,000.00</p>
    </div>
    <div class="product-card" data-name="flower bouquet">
      <img src="Website picture/25962d88170c078d0d3dbd6d4572f2c5.jpg" alt="Flower Bouquet">
      <h3>Flower Bouquet</h3>
      <p>₱1,200.00</p>
    </div>
    <div class="product-card" data-name="spidey beanies">
      <img src="Website picture/76df85e6596f52b1fb41dfb51ea719d5.jpg" alt="Spidey Beanies">
      <h3>Spidey Beanies</h3>
      <p>₱500.00</p>
    </div>
  </section>

  <script>
    function searchProducts() {
      const input = document.getElementById('searchInput').value.toLowerCase();
      const cards = document.querySelectorAll('.product-card');

      cards.forEach(card => {
        const productName = card.getAttribute('data-name');
        if (productName.includes(input)) {
          card.style.display = 'block';
        } else {
          card.style.display = 'none';
        }
      });
    }
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>