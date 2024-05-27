<?php
include "config.php";
session_start();

$sql = "SELECT `id`, `product_id`, `price`, `picture`, `quantity` FROM `cart`";
$result = mysqli_query($connection, $sql);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>Online Tech Store</title>

  <!-- FAVICON -->
  <link rel="shortcut icon" href="../Online_Tech_Store_v1/assets/Favicon/icons8-online-shop-96.png" type="image/x-icon">
  <!-- FAVICON -->

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- splidejs CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.5.0/dist/css/splide.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.5.0/dist/css/themes/splide-skyblue.min.css" />
  <!-- splidejs CSS -->

  <!-- css -->
  <link rel="stylesheet" href="../Online_Tech_Store_v1/assets/CSS/cart.css" />
  <!-- css -->

  <!-- Bootstrap icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" />
  <!-- Bootstrap icons -->

  <!-- Fonte Google -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <!-- Fonte Google -->

  <!-- custome css -->
  <style>
    /* Custom CSS */
    .cart {
      padding: 20px;
    }

    .summary {
      padding: 20px;
    }

    .title {
      margin-bottom: 20px;
    }

    .cart-item {
      margin-bottom: 20px;
    }

    .close {
      cursor: pointer;
    }
  </style>
</head>

<body>
  <div class="spinner-wrapper">
    <div class="spinner-border" role="status">
      <span class="visually-hidden">Loading...</span>
    </div>
  </div>

  <header>
    <!-- START ALERT TOP BAR -->
    <div class="alert alert-primary" role="alert">
      <img src="../Online_Tech_Store_v1/assets/IMG/IMG/Icons/logo-pix-icone-256.png" width="20" height="20" />
      <span>Pay at PIX and get a 20% discount!</span>
    </div>
    <!-- END ALERT TOP BAR -->

    <!-- START NAVBAR HEADER -->
    <section class="navbar navbar-expand-lg" id="navbar1">
      <div class="col-md-2" onclick="redirectBtnindex()" href="Login.html">
        <img src="../Online_Tech_Store_v1/assets/IMG/IMG/Logo/Logo_5.png" alt="" width="" height="75" />
      </div>
      <button class="navbar-toggler d-lg-none" id="main">
        <span class="navbar-toggler-icon">
          <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <ion-icon name="menu-outline"></ion-icon>
          </a>
        </span>
      </button>
      <form class="d-lg-flex mb-2 mb-lg-0 mx-auto w-100" id="mobile">
        <div class="busca">
          <input class="form-control me-2 w-75" type="search" placeholder="Search" aria-label="Search" />
          <i class="bi bi-search" id="formbusca"></i>
        </div>
      </form>
      <div class="col-md-3">
        <div class="d-flex d-md-flex flex-row align-items-center">
          <div class="col-md-3" id="iconsoutline">
            <span class="shop-bag">
              <ion-icon name="chatbubbles-outline"></ion-icon>
            </span>
            <div class="text-icon">call center</div>
          </div>
          <div class="col-md-3" id="iconsperson" onclick="redirectBtnlogin()">
            <span class="shop-bag">
              <ion-icon name="person-circle-outline"></ion-icon>
            </span>
            <div class="text-icon">
              <?php

              // Display login status
              if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true) {
                // If the user is logged in, extract and display their first and second names
                $fullName = $_SESSION['fullName'];
                $names = explode(' ', $fullName); // Split full name into an array of names
                $firstName = $names[0]; // Extracting the first name
                $secondName = isset($names[1]) ? $names[1] : ''; // Extracting the second name if available
                echo "<span style='font-size: small;'>Welcome, " . htmlspecialchars($firstName) . " " . htmlspecialchars($secondName) . "</span>";
              } else {
                // If the user is not logged in, display Login or Register
                echo "Login or Register";
              }

              ?>
            </div>
          </div>
          <div class="col-md-3" id="iconscart">
            <span class="shop-bag" id="cart">
              <ion-icon name="cart-outline"></ion-icon>
            </span>
          </div>
        </div>
      </div>
    </section>
    <!-- END NAVBAR HEADER -->

    <!-- MODAL MOBILE -->
    <div class="modal animated slide-in-right" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
          <div class="modal-header">
            <div class="account-login">
              <span>
                <ion-icon name="person-circle-outline" onclick="redirectBtnlogin()" href="#"></ion-icon>
              </span>
            </div>
            <div class="text menu-dropdown" onclick="redirectBtnlogin()" href="#">
              <span class="msg" onclick="redirectBtnlogin()" href="#">Welcome to</span>
              <a class="link" onclick="redirectBtnlogin()" href="login.php">
                <?php

                // Display login status
                if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true) {
                  // If the user is logged in, extract and display their first and second names
                  $fullName = $_SESSION['fullName'];
                  $names = explode(' ', $fullName); // Split full name into an array of names
                  $firstName = $names[0]; // Extracting the first name
                  $secondName = isset($names[1]) ? $names[1] : ''; // Extracting the second name if available
                  echo "<span style='font-size: small;'>Welcome, " . htmlspecialchars($firstName) . " " . htmlspecialchars($secondName) . "</span>";
                } else {
                  // If the user is not logged in, display Login or Register
                  echo "Login or Register";
                }

                ?>
              </a>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
              <i class="fa-solid fa-xmark"></i>
            </button>
          </div>
          <div class="modal-body">
            <div class="modal-line">
              <a href="#">My requests</a>
            </div>
            <div class="modal-line">
              <a href="#">My account</a>
            </div>
            <div class="modal-line" id="titlesub-menu-modal">
              <a href="#"> <strong>Shop by department</strong></a>
            </div>
            <div class="modal-line" onclick="toggleDropdownMenu()">
              <a href="#">Headphone or Headset</a>
              <i class="bi bi-chevron-down" id="setmodal"></i>
              <ul id="dropdown-menu" class="sidebar-dropdown-menu" style="display:none">
                <li class="sidebar-dropdown-item">
                  <a href="#">JBL</a>
                </li>
                <li class="sidebar-dropdown-item">
                  <a href="#">Beats</a>
                </li>
                <li class="sidebar-dropdown-item">
                  <a href="#">Sony</a>
                </li>
                <li class="sidebar-dropdown-item">
                  <a href="#">Pioneer</a>
                </li>
              </ul>
            </div>
            <div class="modal-line" onclick="toggleDropdownMenu2()">
              <a href="#">Smartphones</a>
              <i class="bi bi-chevron-down" id="setmodal2"></i>
              <ul id="dropdown-menu2" class="sidebar-dropdown-menu" style="display: none;">
                <li class="sidebar-dropdown-item">
                  <a href="#">Xiaomi</a>
                </li>
                <li class="sidebar-dropdown-item">
                  <a href="#">Samsung</a>
                </li>
                <li class="sidebar-dropdown-item">
                  <a href="">Huawei</a>
                </li>
                <li class="sidebar-dropdown-item">
                  <a href="#">Realme</a>
                </li>
                <li class="sidebar-dropdown-item">
                  <a href="#">Vivo</a>
                </li>
              </ul>
            </div>
            <div class="modal-line" onclick="toggleDropdownMenu5()">
              <i class="fa-solid fa-file-lines"></i>
              <a href="#">Smartwatch</a>
              <i class="bi bi-chevron-down" id="setmodal2"></i>
              <ul class="sidebar-dropdown-menu" id="dropdown-menu5" style="display: none;">
                <li class="sidebar-dropdown-item">
                  <a href="#">Xiaomi</a>
                </li>
                <li class="sidebar-dropdown-item">
                  <a href="#">Apple</a>
                </li>
                <li class="sidebar-dropdown-item">
                  <a href="#">Samsung</a>
                </li>
              </ul>
            </div>
            <div class="modal-line">
              <i class="fa-solid fa-file-lines"></i>
              <a href="#">PC Build</a>
            </div>
            <div class="modal-line" onclick="toggleDropdownMenu3()">
              <a href="#">Apple Iphone</a>
              <i class="bi bi-chevron-down" id="setmodal3"></i>
              <ul id="dropdown-menu3" class="sidebar-dropdown-menu" style="display: none;">
                <li class="sidebar-dropdown-item">
                  <a href="#">Iphone 10</a>
                </li>
                <li class="sidebar-dropdown-item">
                  <a href="#">Iphone 11</a>
                </li>
                <li class="sidebar-dropdown-item">
                  <a href="#">Iphone 12</a>
                </li>
                <li class="sidebar-dropdown-item">
                  <a href="#">Iphone 13</a>
                </li>
                <li class="sidebar-dropdown-item">
                  <a href="#">Iphone 14</a>
                </li>
                <li class="sidebar-dropdown-item">
                  <a href="#">Iphone 15</a>
                </li>
                <li class="sidebar-dropdown-item">
                  <a href="#">Iphone 16</a>
                </li>
                <li class="sidebar-dropdown-item">
                  <a href="#">Accesories Apple</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- MODAL MOBILE -->
  </header>

  <main>
    <!-- Chaeckout Desktop -->


    <div class="container">
      <div class="row justify-content-center align-items-center">
        <div class="col-md-10">
          <div class="card">
            <div class="row">
              <div class="col-md-6 cart">
                <div class="title">
                  <div class="row">
                    <div class="col">
                      <h4><b>Shopping Cart</b></h4>
                    </div>
                    <div class="col align-self-center text-right text-muted">
                      <span id="cart-item-count"></span> items
                    </div>
                  </div>
                </div>
                <?php
                if ($result && mysqli_num_rows($result) > 0) {
                  while ($row = mysqli_fetch_assoc($result)) {
                    $total = $row['product_id'] * $row['price'];
                ?>
                    <div class="row cart-item border-top border-bottom">
                      <div class="row main align-items-center">
                        <div class="col-2">
                          <img class="img-fluid rounded" src="<?php echo $row['picture']; ?>" style="max-width: 100px; max-height: 100px;">
                        </div>

                        <div class="col">
                          <div class="row text-muted"></div>
                          <div class="row"></div>
                        </div>
                        <div class="col"> <a href="#" class="border"><?php echo $row['quantity']; ?></a></div>
                        <div class="col">&#8369; <?php echo number_format($row['price'], 2, ',', '.'); ?><span class="close">&#10005;</span></div>
                      </div>
                    </div>
                <?php
                  }
                } else {
                  echo "<div class='row border-top border-bottom'><div class='row main align-items-center'><div class='col text-center'><p>Your cart is empty.</p></div></div></div>";
                }
                ?>
              </div>
              <div class="col-md-6 summary">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title"><b>Summary</b></h5>
                    <hr>
                    <div class="row">
                      <div class="col-6">ITEMS <span id="cart-summary-count"></span></div>
                      <!-- <div class="col-6 text-right">R$ <span id="cart-total-price"></span></div> -->
                    </div>
                    <form>
                      <div class="form-group">
                        <label for="shipping">SHIPPING</label>
                        <select id="shipping" class="form-control">
                          <option class="text-muted">Standard-Delivery- &#8369; 20.00</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="shipping">SHIPPING DELIVERY</label>
                        <select id="shipping" class="form-control">
                          <option class="text-muted">CASH ON DELIVERY</option>
                          <option class="text-muted">GCASH</option>
                          <option class="text-muted">HOME CREDIT</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="code">VOUCHER</label>
                        <input id="code" class="form-control" placeholder="Enter your code">
                      </div>
                    </form>
                    <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                      <div class="col">TOTAL PRICE</div>
                      <div class="col text-right">Total: &#8369; <span id="cart-total-price-summary"><?php echo number_format($total, 2, ',', '.'); ?></span></div>
                    </div>
                    <button class="btn btn-primary btn-block">CHECKOUT</button>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Chaeckout Desktop -->
    <!-- Chaeckout Mobile -->
    <div class="container cart" id="mobiletitlecart">
      <div class="row">
        <div class="col-md-8">
          <div class="product-details">
            <div class="d-flex flex-row">
              <span class="ml-2 titlecheckout">Add To Cart</span>
            </div>
            <br />
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid mobile">
      <div class="row">
        <div class="col-md-12">
          <div class="d-flex justify-content-between mt-3 p-2">
            <div class="d-flex flex-row">
              <img class="rounded" src="../Online_Tech_Store_v1/assets/IMG/IMG/Products/iPhone_13.webp" width="80" height="80" />
              <div class="ml-2 desc">
                <span class="d-block">Apple iPhone 13 128GB (PRODUCT) RED Tela 6,1” 12MP - iOS
                  - Red</span>
                <span class="speccod pt-5">Code 234662100</span><br />
                <span class="specenv">Sold and delivered by
                  <img src="../Online_Tech_Store_v1/assets/IMG/ONLINE_SHOP.png" width="80" alt="" /></span>
              </div>
            </div>
          </div>

          <div class="d-flex justify-content-between mt-3 pb-3 info">
            <div class="flex-row">
              <span>Quantity</span>
              <input id="form88" min="0" name="quantity" value="1" type="number" class="form-control" style="width: 50px" />
              <i class="bi bi-trash3"></i>
            </div>

            <div class="flex-row">
              <span class="d-block price"> <s> off &#8369; 2,900.00 by </s></span>
              <span class="d-block pricev"> &#8369; 42,990.00 </span>
            </div>
          </div>

          <div class="d-flex justify-content-between mt-3 p-2">
            <div class="d-flex flex-row">
              <img class="rounded" src="../Online_Tech_Store_v1/assets/IMG/IMG/Products/vivo v30.png" width="80" height="80" />
              <div class="ml-2 desc">
                <span class="d-block">vivo V30 Lite unveiled with a 120Hz screen and 50MP selfie camera
                  - Black</span>
                <span class="speccod pt-5">Code 234662100</span><br />
                <span class="specenv">Sold and delivered by
                  <img src="../Online_Tech_Store_v1/assets/IMG/ONLINE_SHOP.png" width="80" alt="" /></span>
              </div>
            </div>
          </div>

          <div class="d-flex justify-content-between mt-3 pb-3 info">
            <div class="flex-row">
              <span>Quantity</span>
              <input id="form888" min="0" name="quantity" value="1" type="number" class="form-control" style="width: 50px" />
              <i class="bi bi-trash3"></i>
            </div>
            <div class="flex-row">
              <span class="d-block price"> <s> off &#8369; 2,900.00 by </s></span>
              <span class="d-block pricev"> &#8369; 21,949.00</span>
              <i class="fa fa-trash-o ml-3"></i>
            </div>
          </div>

          <div class="d-flex justify-content-between mt-3 p-2">
            <div class="d-flex flex-row">
              <img class="rounded" src="../Online_Tech_Store_v1/assets/IMG/b641d84456.webp" width="80" height="80" />
              <div class="ml-2 desc">
                <span class="d-block">Uncharted Legacy of Thieves Collection Remastered
                  - Game PS5</span>
                <span class="speccod pt-5">Code 234662100</span><br />
                <span class="specenv">Sold and delivered by
                  <img src="../Online_Tech_Store_v1/assets/IMG/ONLINE_SHOP.png" width="80" alt="" /></span>
              </div>
            </div>
          </div>

          <div class="d-flex justify-content-between mt-3 pb-3 info">
            <div class="flex-row">
              <span>Quantity</span>
              <input id="form9" min="0" name="quantity" value="1" type="number" class="form-control" style="width: 50px" />
              <i class="bi bi-trash3"></i>
            </div>

            <div class="flex-row">
              <span class="d-block price"> <s> off &#8369; 100 by</s></span>
              <span class="d-block pricev"> &#8369; 484,00</span>
              <i class="fa fa-trash-o ml-3"></i>
            </div>
          </div>

          <div class="d-flex justify-content-between mt-3 p-2">
            <div class="d-flex flex-row">
              <img class="rounded" src="../Online_Tech_Store_v1/assets/IMG/monitor-gamer-aoc-led-24-full-hd-widescreen-hero-g2460pf-b3ded940.webp" width="80" height="80" />
              <div class="ml-2 desc">
                <span class="d-block">Monitor Gamer AOC SPEED 24 75Hz IPS 1ms 24G2HE5
                  - Gaming Monitor</span>
                <span class="speccod pt-5">Code 234662100</span><br />
                <span class="specenv">Sold and delivered by
                  <img src="../Online_Tech_Store_v1/assets/IMG/ONLINE_SHOP.png" width="80" alt="" /></span>
              </div>
            </div>
          </div>

          <div class="d-flex justify-content-between mt-3 pb-3 info">
            <div class="flex-row">
              <span>Quantity</span>
              <input id="form10" min="0" name="quantity" value="1" type="number" class="form-control" style="width: 50px" />
              <i class="bi bi-trash3"></i>
            </div>

            <div class="flex-row">
              <span class="d-block price"> <s> off &#8369; 100 by </s></span>
              <span class="d-block pricev"> &#8369; 15.869,00</span>
              <i class="fa fa-trash-o ml-3"></i>
            </div>
          </div>

          <!-- <div class="col-md-6 ps-3 zipcode">
            <span class="envcheckout pb-3">Frete</span>
            <input class="zipcodeform" maxlength="9" name="CEP" placeholder="00000-00" style="
                  width: 150px;
                  height: 54px;
                  justify-content: center;
                  align-items: center;
                " />
            <button type="button" class="btn btn-primary" id="zipcodebtn">
              OK
            </button>
          </div> -->

          <div class="total">
            <div class="payment-total">
              <span class="title-total">Subtotal (4 items)</span>
              <img class="paymentcard" src="../Online_Tech_Store_v1/assets/IMG/IMG/Icons/elo.svg" alt="" />
              <!-- assets/IMG/IMG/Icons/elo.svg -->
              <img class="paymentcard" src="../Online_Tech_Store_v1/assets/IMG/IMG/Icons/master.svg" alt="" />
              <!-- assets/IMG/IMG/Icons/master.svg -->
              <div class="total-checkout">
                <span class="total-checkout-value">&#8369; 2.796,00</span>
                <span class="total-checkout-desc">&#8369; 1.796,00</span>
                <span class="condipricetotal">
                  <div>(In until 12x of &#8369; 233,00</div>
                  <div>no interest on the card Online Tech )</div>
                  <a class="btn btn-primary mb-0 mt-0 btncheckoutpayment" href="#" role="button">Continue</a>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Chaeckout Mobile -->
    <!--INICIO FOOTER-->
    <footer>
      <div class="container-fluid" id="footerb">
        <div class="text-center text-lg-start mt-xl-5 pt-4">
          <div class="container p-4">
            <div class="row">
              <div class="col-lg-3 col-md-3 mb-4 mb-lg-0">
                <h5 class="text-uppercase mb-4">Institutional</h5>
                <ul class="list-unstyled mb-4">
                  <li>
                    <a href="#!">Contact us</a>
                  </li>
                  <li>
                    <a href="#!">Shipping Methods</a>
                  </li>
                  <li>
                    <a href="#!">Exchange Policy</a>
                  </li>
                  <li>
                    <a href="#!">Security and Privacy</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-3 col-md-3 mb-6 mb-lg-0">
                <h5 class="text-uppercase mb-4">Categories</h5>
                <ul class="list-unstyled">
                  <li>
                    <a href="#!">Electronics</a>
                  </li>
                  <li>
                    <a href="#!">Releases</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-3 col-md-3 mb-4 mb-lg-0">
                <h5 class="text-uppercase mb-4">Partnership</h5>
                <ul class="list-unstyled">
                  <div class="media-icons" id="selos">
                    <div>
                      <a href="#"><img src="../Online_Tech_Store_v1/assets/IMG/IMG/Icons/site seguro 2.png" alt="" /></a>
                    </div>
                    <div>
                      <a href="#"><img src="../Online_Tech_Store_v1/assets/IMG/IMG/Icons/selo-google-res.png" alt="" /></a>
                    </div>
                    <div>
                      <a href="#"><img src="../Online_Tech_Store_v1/assets/IMG/IMG/Icons/site prote.png" alt="" /></a>
                    </div>
                    <div>
                      <a href="#"><img src="../Online_Tech_Store_v1/assets/IMG/IMG/Icons/siteseguro3.png" alt="" /></a>
                    </div>
                  </div>
                </ul>
              </div>
              <div class="col-lg-3 col-md-3 mb-4 mb-lg-0" id="form99">
                <h5 class="text-uppercase mb-4">
                  Receive Offers and News from our store
                </h5>
                <div class="form-outline form-white mb-4">
                  <input type="email" class="form-control" placeholder="Email" />
                </div>
                <button type="submit" class="btn btn-outline-light btn-block">
                  I want to receive!
                </button>
              </div>
            </div>
          </div>
          <div class="text-center border-top border-dark">
            <div class="alert my-alert" role="alert">
              <div class="container">
                <div class="row">
                  <div class="col-md-4">
                    <div class="media-icons">
                      <a href="#"><ion-icon name="logo-linkedin"></ion-icon></a>
                      <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
                      <a href="#"><ion-icon name="logo-google"></ion-icon></a>
                      <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
                      <a href="#"><ion-icon name="logo-github"></ion-icon></a>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <span class="policy_terms">
                      <a href="#">Privacy policy</a><br />
                      <a href="#">Terms & condition</a>
                    </span>
                  </div>
                  <div class="col-md-4">
                    <div class="payment methods">
                      <a href="#"><img src="../Online_Tech_Store_v1/assets/IMG/IMG/Icons/visa.svg" alt="" /></a>
                      <a href="#"><img src="../Online_Tech_Store_v1/assets/IMG/IMG/Icons/master.svg" alt="" /></a>
                      <a href="#"><img src="../Online_Tech_Store_v1/assets/IMG/IMG/Icons/hipercard.svg" alt="" /></a>
                      <a href="#"><img src="../Online_Tech_Store_v1/assets/IMG/IMG/Icons/boleto.svg" alt="" /></a>
                      <a href="#"><img src="../Online_Tech_Store_v1/assets/IMG/IMG/Icons/elo.svg" alt="" /></a>
                      <a href="#"><img src="../Online_Tech_Store_v1/assets/IMG/IMG/Icons/aura.svg" alt="" /></a>
                      <a href="#"><img src="../Online_Tech_Store_v1/assets/IMG/IMG/Icons/diners.svg" alt="" /></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!--FIM FOOTER-->
  </main>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <!-- Bootstrap JavaScript Libraries -->

  <!-- SPLIDE JS LINK-->
  <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.5.0/dist/js/splide.min.js"></script>

  <!-- JS-COOKIES-->
  <script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>

  <!-- CUSTOM JS LINK-->
  <script src="assets/JS/cart.js"></script>

  <!-- ionicon link -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  <!-- custome bs -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>