<?php
include "config.php";
require "register_file.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Online Tech Store</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <!-- Bootstrap CSS -->

  <!-- splidejs CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.5.0/dist/css/splide.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.5.0/dist/css/themes/splide-skyblue.min.css">
  <!-- splidejs CSS -->

  <!-- css -->
  <link rel="stylesheet" href="../Online_Tech_Store_v1/assets/CSS/Login.css" />
  <!-- assets/CSS/Login.css -->
  <!-- css -->

  <!-- Bootstrap icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" />
  <!-- Bootstrap icons -->

  <!-- Fonte Google -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <!-- Fonte Google -->

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
      <!-- assets/IMG/IMG/Icons/logo-pix-icone-256.png -->
      <span>Pay at PIX and get a 20% discount!</span>
    </div>
    <!-- END ALERT TOP BAR -->

    <!-- START NAVBAR HEADER -->
    <section class="navbar navbar-expand-lg" id="navbar1">
      <div class="col-md-2" onclick="redirectBtnindex()" href="index.php">
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
          <input class="form-control me-2 w-75" type="search" placeholder="Search" aria-label="Search">
          <i class="bi bi-search" id="formbusca"></i>
        </div>
      </form>
      <div class="col-md-3">
        <div class="d-flex d-md-flex flex-row align-items-center">
          <div class="col-md-3" id="iconsoutline">
            <span class="shop-bag">
              <ion-icon name="chatbubbles-outline"></ion-icon>
            </span>
            <div class="text-icon">Central of
              service</div>
          </div>
          <div class="col-md-3" id="iconsperson" onclick="redirectBtnlogin()">
            <span class="shop-bag">
              <ion-icon name="person-circle-outline"></ion-icon>
            </span>
            <div class="text-icon">
              Login or Register
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
              <a class="link" onclick="redirectBtnlogin()" href="#">Login or Register</a>
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
              <a href="#">Iphones</a>
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

    <!-- START MENU TOP NAVIGATION -->
    <section class="navigationmenu">
      <nav class="navigation-menu" id="navbar2">
        <div class="container-navigation-menu">
          <ul class="menu-category-list">
            <li class="menu-category">
              <span>
                <i class="bi bi-list" id="Todosdepartamentos-icon"></i>
                <a href="#" class="menu-title" id="Todosdepartamentos">All departments </a>
                <i class="bi bi-chevron-down" id="departamentosdown"></i>
              </span>
            </li>
            <li class="menu-category">
              <span>
                <i class="bi bi-headphones" id="Fones"></i>
                <a href="#" class="menu-title" id="Fonescolorchange">Headphone</a>
                <i class="bi bi-chevron-down" id="Fonesdown"></i>
              </span>
              <ul class="dropdown-list">
                <li class="dropdown-item">
                  <a href="#">JBL Category</a>
                </li>
                <li class="dropdown-item">
                  <a href="#">Beats Category</a>
                </li>
                <li class="dropdown-item">
                  <a href="#">Sony Category</a>
                </li>
                <li class="dropdown-item">
                  <a href="#">Pioneer Category</a>
                </li>
              </ul>
            </li>
            <li class="menu-category" id="Celulares">
              <span>
                <i class="bi bi-phone" id="Smartphone"></i>
                <a href="#" class="menu-title" id="Smartphoneschange">Smartphones</a>
                <i class="bi bi-chevron-down" id="Smartphonesown"></i>
              </span>
              <ul class="dropdown-list">
                <li class="dropdown-item">
                  <a href="#">Xiami Category</a>
                </li>
                <li class="dropdown-item">
                  <a href="#">Samsung Category</a>
                </li>
                <li class="dropdown-item">
                  <a href="#">Huawei Category</a>
                </li>
                <li class="dropdown-item">
                  <a href="#">Realme Category</a>
                </li>
                <li class="dropdown-item">
                  <a href="#">Vivo Category</a>
                </li>
              </ul>
            </li>
            <li class="menu-category" id="Eletro">
              <span>
                <i class="bi bi-smartwatch" id="Smartwatch"></i>
                <a href="#" class="menu-title" id="Smartwatchlchange">Smartwatch</a>
                <i class="bi bi-chevron-down" id="Smartphonesown"></i>
              </span>
              <ul class="dropdown-list">
                <li class="dropdown-item">
                  <a href="#">Apple Category</a>
                </li>
                <li class="dropdown-item">
                  <a href="#">Samsung Category</a>
                </li>
                <li class="dropdown-item">
                  <a href="#">Huawei Category</a>
                </li>
                <li class="dropdown-item">
                  <a href="#">Xiaomi Category</a>
                </li>
              </ul>
            </li>
            <li class="menu-category" id="Informática">
              <span>
                <i class="bi bi-pc-display-horizontal" id="iconpc"></i>
                <a href="#" class="menu-title">PC Build</a>
              </span>
            <li class="menu-category" id="Iphone">
              <span>
                <i class="bi bi-phone" id="Iphones"></i>
                <a href="#" class="menu-title">Iphones</a>
                <i class="bi bi-chevron-down" id="Smartphonesown"></i>
              </span>
              <ul class="dropdown-list">
                <li class="dropdown-item">
                  <a href="#">Iphone 10</a>
                </li>
                <li class="dropdown-item">
                  <a href="#">Iphone 11</a>
                </li>
                <li class="dropdown-item">
                  <a href="#">Iphone 12</a>
                </li>
                <li class="dropdown-item">
                  <a href="#">Iphone 13</a>
                </li>
                <li class="dropdown-item">
                  <a href="#">Iphone 14</a>
                </li>
                <li class="dropdown-item">
                  <a href="#">Iphone 15</a>
                </li>
              </ul>
            </li>

            </li>
          </ul>
        </div>
      </nav>
    </section>
    <!-- ENDMENU TOP NAVIGATION -->
  </header>

  <main>
    <!--INICIO LOGIN-->
    <div class="login-title">
      <h3>Identification</h3>
    </div>

    <div class="container login">
      <div class="row justify-content-between">

        <div class="col-11 col-sm-5 col-md-5 col-lg-5 col-xl-5 float-left ">

          <form class="loginclient" action="login_file.php" method="post">
            <h5 class="title-box-login">I'm already a customer</h5>
            <div class="form-group">
              <label for="email">Email</label>
              <input class="form-control email" type="text" name="email" placeholder="Email" />
            </div>
            <div class="form-group">
              <label for="Password">Password</label>
              <input class="form-control senha" type="password" name="password" placeholder="password" />
            </div>
            <div class="form-check">
              <label class="form-check-label font-weight-normal" for="remember">remember me</label>
              <input class="form-check-input form-control" type="checkbox" name="remember" />
            </div>
            <a href="#">Forgot your password?</a>
            <button type="submit" class="btn btn-primary mx-auto mt-3 w-50" id="btn1">Login</button>
          </form>

        </div>

        <div class="col-11 col-sm-5 col-md-5 col-lg-5 col-xl-5  float-right">

          <form class="notclient" action="" method="post">
            <h5 class="title-box-account">Create an account</h5>
            <?php
            // Display errors if any
            if (isset($err)) {
              // foreach($error as $err){
              //    echo '<span class="error-msg">'.$err.'</span>';
              // }
              foreach ($err as $error) {
                echo '<span class="error-msg">' . $error . '</span>';
              }
            }
            ?>
            <div class="form-group">
              <label for="email">Email</label>
              <input class="form-control email" type="text" name="email" placeholder="Enter your email?" />
            </div>
            <div class="form-group">
              <label for="Fullname">Fullname</label>
              <input class="form-control email" type="fullname" name="fullname" placeholder="Enter your full name?" />
            </div>
            <div class="form-group">
              <label for="Contact_no">Contact No.</label>
              <input class="form-control email" type="number" name="contact" placeholder="Enter your phone number?" />
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input class="form-control email" type="password" name="password" id="password" placeholder="Enter your password?" />
              <input type="checkbox" name="showPassword" id="showPassword" style="width: 15px; height: 15px;">
              <span class="checkmark"></span> Show Password
            </div>
            <div class="form-group">
              <label for="cpassword">Confirm Password</label>
              <input class="form-control email" type="password" name="confirm_password" id="confirmpassword" placeholder="Confirm your password?" />
              <input type="checkbox" name="showPassword" id="showConfirmPassword" style="width: 15px; height: 15px;">
              <span class="checkmark"></span> Show Password
            </div>
            <a href="#">Doubts? <a id="linkfale" href="">contact us</a></a>
            <button type="submit" class="btn btn-primary mx-auto mt-3 w-50" id="btn2" name="submit">Register</button>
          </form>

        </div>

      </div>

    </div>


  </main>
  <!--FIM LOGIN-->
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
            <div class="col-lg-3 col-md-3 mb-4 mb-lg-0">
              <h5 class="text-uppercase mb-4">Partnership</h5>
              <ul class="list-unstyled">
                <div class="media-icons" id="selos">
                  <div>
                    <a href="#"><img src="../Online_Tech_Store_v1/assets/IMG/IMG/Icons/site seguro 2.png" alt=""></a>
                  </div>
                  <div>
                    <a href="#"><img src="../Online_Tech_Store_v1/assets/IMG/IMG/Icons/selo-google-res.png" alt=""></a>
                  </div>
                  <div>
                    <a href="#"><img src="../Online_Tech_Store_v1/assets/IMG/IMG/Icons/site prote.png" alt=""></a>
                  </div>
                  <div>
                    <a href="#"><img src="../Online_Tech_Store_v1/assets/IMG/IMG/Icons/siteseguro3.png" alt=""></a>
                    <!-- assets/IMG/IMG/Icons/siteseguro3.png -->
                  </div>
                </div>
              </ul>
            </div>
            <div class="col-lg-3 col-md-3 mb-4 mb-lg-0" id="form2">
              <h5 class="text-uppercase mb-4">Receive Offers and News from our store</h5>
              <div class="form-outline form-white mb-4">
                <input type="email" class="form-control" placeholder="Email" />
              </div>
              <button type="submit" class="btn btn-outline-light  btn-block">I want to receive!</button>
            </div>
          </div>
        </div>
        <div class="text-center  border-top border-dark">
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
                    <a href="#"><img src="../Online_Tech_Store_v1/assets/IMG/IMG/Icons/visa.svg" alt=""></a>
                    <!-- assets/IMG/IMG/Icons/visa.svg -->
                    <a href="#"><img src="assets/IMG/IMG/Icons/master.svg" alt=""></a>
                    <a href="#"><img src="assets/IMG/IMG/Icons/hipercard.svg" alt=""></a>
                    <a href="#"><img src="assets/IMG/IMG/Icons/boleto.svg" alt=""></a>
                    <a href="#"><img src="assets/IMG/IMG/Icons/elo.svg" alt=""></a>
                    <a href="#"><img src="assets/IMG/IMG/Icons/aura.svg" alt=""></a>
                    <a href="#"><img src="assets/IMG/IMG/Icons/diners.svg" alt=""></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--FIM FOOTER

    
  
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
  <script src="../Online_Tech_Store_v1/assets/JS/login.js"></script>

  <!-- ionicon link -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>


</html>