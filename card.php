<?php
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Online Tech Store</title>

  <!-- favicon -->
  <link rel="shortcut icon" href="../Online_Tech_Store_v1/assets/Favicon/icons8-online-shop-96.png">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <style>
    body {
      background-color: #dce3f0;
    }

    .height {
      height: 100vh;
    }

    .card {
      width: 350px;
      height: 415px;
    }

    .image {
      position: absolute;
      right: 12px;
      top: 10px;
    }

    .main-heading {
      font-size: 40px;
      color: red !important;
    }

    .ratings i {
      color: orange;
    }

    .user-ratings h6 {
      margin-top: 2px;
    }

    .colors {
      display: flex;
      margin-top: 2px;
    }

    .colors span {
      width: 15px;
      height: 15px;
      border-radius: 50%;
      cursor: pointer;
      display: flex;
      margin-right: 6px;
    }

    .colors span:nth-child(1) {
      background-color: red;
    }

    .colors span:nth-child(2) {
      background-color: blue;
    }

    .colors span:nth-child(3) {
      background-color: yellow;
    }

    .colors span:nth-child(4) {
      background-color: purple;
    }

    .btn-danger {
      height: 48px;
      font-size: 18px;
    }

    h4 {
      font-size: 20px;
      text-transform: uppercase;
    }
  </style>
</head>

<body>

  <div class="height d-flex justify-content-center align-items-center">
    <div class="card p-3">
      <div class="d-flex justify-content-between align-items-center">
        <div class="mt-2">
          <h4 class="text-uppercase">Uncharted</h4>
          <h4 class="text-uppercase">Legacy </h4>
          <h4 class="text-uppercase">of Thieves</h4>
          <div class="mt-5">
            <h5 class="text-uppercase mb-0">Playstation</h5>
            <h1 class="main-heading mt-0">Games</h1>
            <div class="d-flex flex-row user-ratings">
              <div class="ratings">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </div>
              <h6 class="text-muted ml-1">4/5</h6>
            </div>
          </div>
        </div>
        <div class="image">
          <img src="../Online_Tech_Store_v1/assets/IMG/b641d84456.webp" width="195">
        </div>
      </div>
      <div class="card-price">
        <data value="324.90">&#8369; 324.90</data>
      </div>
      <p>A greater game that with great story buy now. </p>
      <form method="post" action="" id="add-to-cart-form">
        <?php
        require_once "cart_file.php";
        ?>
        <input type="hidden" name="product_id" value="101"> <!-- Change the value to the appropriate product ID -->
        <input type="hidden" name="price" value="324.90"> <!-- Change the value to the appropriate price -->
        <input type="hidden" name="picture" value="../Online_Tech_Store_v1/assets/IMG/b641d84456.webp">
        <button type="submit" name="submit" class="btn btn-danger" id="cart">Add to cart</button>
      </form>
    </div>
  </div>

  <!-- Custome JS-Script -->
  <script>
    document.getElementById('cart').addEventListener('click', function(){
      alert('The product is added to cart!!!');
    });
  </script>
  <!-- Bootstrap JS and dependencies -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>