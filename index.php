<?php
include "config.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Online Tech Store</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="../Online_Tech_Store_v1/assets/Favicon/icons8-online-shop-96.png" type="image/x-icon">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <!-- Bootstrap CSS -->

  <!-- splidejs CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.1/dist/css/splide.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.5.0/dist/css/themes/splide-skyblue.min.css">
  <!-- splidejs CSS -->

  <!-- css -->
  <link rel="stylesheet" href="../Online_Tech_Store_v1/assets/CSS/style.css" />
  <!-- assets/CSS/style.css -->
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

  <!-- START LOADING -->
  <div class="spinner-wrapper">
    <div class="spinner-border" role="status">
      <span class="visually-hidden">Loading...</span>
    </div>
  </div>
  <!-- END LOADING -->

  <!-- START MODAL -->
  <button class="btn btn-primary" id="teste55" data-toggle="modal" data-target="#modal2">Open modal 2</button>
  <div class="modal fade" tabindex="-1" role="dialog" id="modal2">
    <div class="modal-dialog modal-lg" id="modal-newsletter" role="document">
      <div class="modal-content">
        <div class="row-fluid">
          <button type="button" onclick="closeItem()" class="close" data-dismiss="modal" aria-hidden="true">
            <span><i class="bi bi-x-circle"></i></span>
          </button>
          <div class="modal-header" id="headermodal">
            <div class="icon-box col-md-6 modpicture">
              <img src="assets/IMG/IMG/Banners/Fullbanner principal mobile - Copia.jpg" alt="Foto modal newsletter">
            </div>
            <div class="col-md-6 col-lg-6 modnews">
              <div class="modal-body text-center">
                <div class="icon-box2 col-md-6">
                  <i class="bi bi-envelope-check"></i>
                </div>
                <div>
                  <h4>Online Tech Store Newsletter</h4>
                </div>
                <div class="subnewsletter">
                  <p>Receive the best offers and news in your email</p>
                  <p>You can unsubscribe at any time. To do this, please find <br />
                    our contact information in the legal notice</p>
                </div>
                <form action="" method="post">
                  <?php
                  require "subscriber.php";
                  ?>
                  <?php
                  // Initialize $err variable if it's not set
                  if (!isset($err)) {
                    $err = array();
                  }
                  ?>

                  <?php foreach ($err as $error) : ?>
                    <div class="alert alert-danger" role="alert">
                      <?php echo $error; ?>
                    </div>
                  <?php endforeach; ?>
                  <div class="input-group">
                    <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
                    <div class="input-group-append">
                      <input type="submit" class="btn btn-primary" value="Subscribe">
                    </div>
                  </div>
                </form>


              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END MODAL -->

  <header>

    <!-- START ALERT TOP BAR -->
    <div class="alert alert-primary" role="alert">
      <img src="../Online_Tech_Store_v1/assets/IMG/IMG/Icons/logo-pix-icone-256.png" width="20" height="20" />
      <span>Pay at OTS and get a 20% discount!</span>
    </div>
    <!-- END ALERT TOP BAR -->

    <!-- START NAVBAR HEADER -->
    <section class="navbar navbar-expand-lg" id="navbar1">
      <div class="col-md-2" onclick="redirectBtnindex()" href="index.php">
        <img src="../Online_Tech_Store_v1/assets/IMG/IMG/Logo/Logo_6.png" alt="" width="" height="90" />
        <!-- assets/IMG/IMG/Logo/ON_SHOP.png -->
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
            <div class="text-icon">Call center</div>
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

          <div class="col-md-3" id="iconscart" onclick="redirectIconCheckout()">
            <span class="shop-bag" id="cart">
              <ion-icon name="cart-outline"></ion-icon>
              <div class="notification">
                <span class="notification-number"></span>
              </div>
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
                <ion-icon name="person-circle-outline" onclick="redirectBtnlogin()" href="login.php"></ion-icon>
              </span>
            </div>
            <div class="text menu-dropdown" onclick="redirectBtnlogin()" href="login.php">
              <span class="msg" onclick="redirectBtnlogin()" href="login.php">Welcome to</span>
              <a class="link" onclick="redirectBtnlogin()" href="login.php">Login or Register</a>
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
    <!-- END OF MODAL MOBILE -->


    <!-- START MENU TOP NAVIGATION -->
    <section class="navigationmenu">
      <nav class="navigation-menu" id="navbar2">
        <div class="container-navigation-menu">
          <ul class="menu-category-list">
            <li class="menu-category">
              <span>
                <i class="bi bi-list" id="Todosdepartamentos-icon"></i>
                <a href="#" class="menu-title" id="Todosdepartamentos">All departments</a>
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
    <!-- END MENU TOP NAVIGATION -->

    <!-- HOME BANNER -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-slide="false">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item">
          <img src="../Online_Tech_Store_v1/assets/IMG/Galaxy-M01-Core.jpg" class="d-block w-100" alt="..." />
          <div class="carousel-caption d-none d-md-block">
            <h5></h5>
            <p>

            </p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="../Online_Tech_Store_v1/assets/IMG/Apple-iPhone.jpg" class="d-block w-100" alt="..." />
          <div class="carousel-caption d-none d-md-block">
            <h5></h5>
            <p>

            </p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="../Online_Tech_Store_v1/assets/IMG/xiaomi-recomendados-enero2018.jpg" class="d-block w-100" alt="..." />
          <div class="carousel-caption d-none d-md-block">
            <h5></h5>
            <p>

            </p>
          </div>
        </div>
        <div class="carousel-item active">
          <img src="../Online_Tech_Store_v1/assets/IMG/vivo.jpg" class="d-block w-100" alt="..." />
          <div class="carousel-caption d-none d-md-block">
            <h5></h5>
            <p></p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!-- END BANNER -->

    <!-- HOME BANNER-MOBILE -->
    <div id="carouselExampleCaptionsmobile" class="carousel slide" data-bs-slide="false">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptionsmobile" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptionsmobile" data-bs-slide-to="1" aria-label="Slide 2"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item">
          <img src="assets/IMG/AnyConv.com__1635417895_mobile-02.svg" class="d-block w-100" alt="..." />
          <div class="carousel-caption d-none d-md-block">
            <h5></h5>
            <p>

            </p>
          </div>
        </div>
        <div class="carousel-item active">
          <img src="assets/IMG/AnyConv.com__1635417895_mobile-01.svg" class="d-block w-100" alt="..." />
          <div class="carousel-caption d-none d-md-block">
            <h5></h5>
            <p>

            </p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptionsmobile" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" data-bs-target="#carouselExampleCaptionsmobile" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!-- END BANNER-MOBILE -->
  </header>

  <main>
    <!--START NAV-ITENS-->
    <div class="container mt-4 mb-4" id="contdiv">
      <div class="splide">
        <div class="splide__slider">
          <div class="splide__track">
            <ul class="splide__list">
              <li class="splide__slide">
                <div class="category-item">
                  <div class="category-item-icon">
                    <i class="bi bi-bag-heart"></i>
                  </div>
                  <div class="category-item-title">
                    <strong>Lorem ipsum dolor</strong>
                    <span>
                      30 Lorem ipsum dolor
                    </span>
                  </div>
                </div>
              </li>
              <li class="splide__slide">
                <div class="category-item">
                  <div class="category-item-icon">
                    <i class="bi bi-shield-fill-check"></i>
                  </div>
                  <div class="category-item-title">
                    <strong>Lorem ipsum dolor</strong>
                    <span>
                      Lorem ipsum dolor
                    </span>
                  </div>
                </div>
              </li>
              <li class="splide__slide">
                <div class="category-item">
                  <div class="category-item-icon">
                    <i class="bi bi-cash-coin"></i>
                  </div>
                  <div class="category-item-title">
                    <strong>
                      10% Lorem ipsum dolor
                    </strong>
                    <span>
                      Lorem ipsum dolor
                    </span>
                  </div>
                </div>
              </li>
              <li class="splide__slide">
                <div class="category-item">
                  <div class="category-item-icon">
                    <i class="bi bi-cart-check"></i>
                  </div>
                  <div class="category-item-title">
                    <strong>
                      Lorem ipsum dolor
                    </strong>
                    <span>
                      Lorem ipsum dolor
                    </span>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!--END NAV-ITENS-->

    <!--START MINI BANNER-->
    <div class="container">
      <div class="row">
        <div class="minibannermobile col-4">
          <div class="flexslider">
            <ul class="slides">
              <li>
                <img src="assets/IMG/1645553758_mini1.webp" alt="Mini banner 1">
              </li>
            </ul>
          </div>
        </div>
        <div class="minibannermobile col-4">
          <div class="flexslider">
            <ul class="slides">
              <li>
                <img src="assets/IMG/1645553838_mini3.webp" alt="Mini banner 1">
              </li>
            </ul>
          </div>
        </div>
        <div class="minibannermobile col-4">
          <div class="flexslider">
            <ul class="slides">
              <li>
                <img src="assets/IMG/1645553867_mini4.webp" alt="Mini banner 1">
              </li>
            </ul>
          </div>
        </div>
        <div class="minibannermobile col-4">
          <div class="flexslider">
            <ul class="slides">
              <li>
                <img src="assets/IMG/1645553818_mini2.webp" alt="Mini banner 1">
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!--END MINI BANNER-->


    <!--START MINI BANNER - MOBILE-->
    <section id="image-carousel" class="splide" aria-label="Beautiful Images">
      <div class="splide__track">
        <ul class="splide__list">
          <li class="splide__slide">
            <img src="assets/IMG/1645553838_mini3.webp" alt="">
          </li>
          <li class="splide__slide">
            <img src="assets/IMG/1645553867_mini4.webp" alt="">
          </li>
          <li class="splide__slide">
            <img src="assets/IMG/1645553818_mini2.webp" alt="">
          </li>
          <li class="splide__slide">
            <img src="assets/IMG/1645553758_mini1.webp" alt="">
          </li>
        </ul>
      </div>
    </section>

    <!-- START TITLE-SECTION -->
    <div class="category-tittle">
      <div class="category-tittle-container">
        <div class="category-item-tittle">
          <div class="category-content-flex-tittle">
            <h3 class="category-item-title-title">
              <a href="#">Lorem ipsum</a>
              <span>
              </span>
            </h3>
          </div>
        </div>
      </div>
    </div>
    <!--END TITLE-SECTION-->

    <!-- START PRODUCT -->
    <section class="section-product-Lançamentos grid">
      <div class="container-sm-fluid container-fluid-md">
        <ul class="product-list">
          <li class="col-3 col-md-3">
            <div class="product-card">
              <div class="card-banner">
                <div class="clearfix mb-1 pe-3">
                  <span class="float-end">
                    <i class="bi bi-heart heartcard"></i>
                  </span>
                </div>
                <img src="assets/IMG/b641d84456.webp" alt="" class="img-fluid w-75" />
                <div class="card-badge">New</div>
              </div>
              <div class="card-body">
                <div class="mb-3">
                  <a class="card-title">
                    <a class="title-text" target="_blank" onclick="redirectProductpage()" href="#">Uncharted Legacy of Thieves Collection Remastered Game PS5</a>
                  </a>
                  <div class="star">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-half"></ion-icon> <span>(5)</span>
                  </div>
                  <div class="card-price" onclick="redirectProductpage()">
                    <data value="">&#8369; 484,00</data>
                    <data value="">&#8369; 324,90</data>
                  </div>
                  <div class="conditions-price" onclick="redirectProductpage()">
                    <p><a href="">in sight</a> <span>(10% discount)</span></p>
                  </div>
                  <div class="conditions-payment" onclick="redirectProductpage()">
                    <span> or 8x of &#8369; 46,15 interest-free </span>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="col-3">
            <div class="product-card">
              <div class="card-banner">
                <div class="clearfix mb-1 pe-3">
                  <span class="float-end">
                    <i class="bi bi-heart heartcard"></i>
                  </span>
                </div>
                <img src="assets/IMG/monitor-gamer-aoc-led-24-full-hd-widescreen-hero-g2460pf-b3ded940.webp" alt="" class="img-fluid w-75" />
                <div class="card-badge">New</div>
              </div>
              <div class="card-body">
                <div class="mb-3">
                  <a class="card-title">
                    <a class="title-text" target="_blank" onclick="redirectProductpage()" href="#">Monitor Gamer AOC SPEED 24 75Hz IPS 1ms 24G2HE5</a>
                  </a>
                  <div class="star">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-half"></ion-icon> <span>(5)</span>
                  </div>
                  <div class="card-price" onclick="redirectProductpage()">
                    <data value="">&#8369; 1.869,00</data>
                    <data value="">&#8369; 1.792,42</data>
                  </div>
                  <div class="conditions-price" onclick="redirectProductpage()">
                    <p><a href="">in sight</a> <span>(10% discount)</span></p>
                  </div>
                  <div class="conditions-payment" onclick="redirectProductpage()">
                    <span> or 8x of &#8369; 179,24 interest-free </span>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="col-3">
            <div class="product-card">
              <div class="card-banner">
                <div class="clearfix mb-1 pe-3">
                  <span class="float-end">
                    <i class="bi bi-heart heartcard"></i>
                  </span>
                </div>
                <img src="assets/IMG/headset-gamer-razer-kraken-7-1-v2-chroma-oval-usb-06ab2be1.webp" alt="" class="img-fluid w-75" />
              </div>
              <div class="card-body">
                <div class="mb-3">
                  <a class="card-title">
                    <a class="title-text" target="_blank" onclick="redirectProductpage()" href="#">Headset Razer Kraken X Lite Surrounbr <br> d7.1 Drivers 40mm</a>
                  </a>
                  <div class="star">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-half"></ion-icon> <span>(5)</span>
                  </div>
                  <div class="card-price" onclick="redirectProductpage()">
                    <data value="">&#8369; 999,00</data>
                    <data value="">&#8369; 399,10</data>
                  </div>
                  <div class="conditions-price" onclick="redirectProductpage()">
                    <p><a href="">in sight</a> <span>(10% discount)</span></p>
                  </div>
                  <div class="conditions-payment" onclick="redirectProductpage()">
                    <span> or 10x of &#8369; 39,90 interest-free </span>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="col-3">
            <div class="product-card">
              <div class="card-banner">
                <div class="clearfix mb-1">
                  <span class="float-end">
                    <i class="bi bi-heart heartcard endheart"></i>
                  </span>
                </div>
                <img src="assets/IMG/jogo-mortal-kombat-11-ps4-6bba1909.webp" alt="" class="img-fluid w-75" />
                <div class="card-badge-full">
                  Full <ion-icon name="flash"></ion-icon>
                </div>
              </div>
              <div class="card-body">
                <div class="mb-3">
                  <a class="card-title">
                    <a class="title-text" target="_blank" onclick="redirectProductpage()" href="#">Mortal Kombat 11 - PS4</a>
                  </a>
                  <div class="star">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-half"></ion-icon> <span>(5)</span>
                  </div>
                  <div class="card-price" onclick="redirectProductpage()">
                    <data value="">&#8369; 99,10</data>
                  </div>
                  <div class="conditions-price" onclick="redirectProductpage()">
                    <p><a href="">in sight</a> <span>(10% discount)</span></p>
                  </div>
                  <div class="conditions-payment" onclick="redirectProductpage()">
                    <span> or 10x of &#8369; 9,90 interest-free </span>
                  </div>
                </div>
              </div>
            </div>
          </li>

          <li class="col-3">
            <div class="product-card">
              <div class="card-banner">
                <div class="clearfix mb-1 pe-3">
                  <span class="float-end">
                    <i class="bi bi-heart heartcard"></i>
                  </span>
                </div>
                <img src="assets/IMG/console-playstation-4-slim-500gb-preto-bivolt-2aaceb63.webp" alt="" class="img-fluid w-75" />
                <div class="card-badge-full">
                  Full <ion-icon name="flash"></ion-icon>
                </div>
              </div>
              <div class="card-body">
                <div class="mb-3">
                  <a class="card-title">
                    <a class="title-text" target="_blank" onclick="redirectProductpage()" href="#">Console Playstation 4 Slim 1 TB <div>God of War Ragnarok Bundle</div></a>
                  </a>
                  <div class="star">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-half"></ion-icon> <span>(5)</span>
                  </div>
                  <div class="card-price" onclick="redirectProductpage()">
                    <data value="">&#8369; 3.999,00</data>
                    <data value="">&#8369; 2.899,10</data>
                  </div>
                  <div class="conditions-price" onclick="redirectProductpage()">
                    <p><a href="">in sight</a> <span>(10% discount)</span></p>
                  </div>
                  <div class="conditions-payment" onclick="redirectProductpage()">
                    <span> or 10x of &#8369; 289,90 interest-free </span>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="col-3">
            <div class="product-card">
              <div class="card-banner">
                <div class="clearfix mb-1 pe-3">
                  <span class="float-end">
                    <i class="bi bi-heart heartcard"></i>
                  </span>
                </div>
                <img src="assets/IMG/3d6e734e22.webp" alt="Varsi Leather Bag" class="img-fluid w-75" />
                <div class="card-badge-red">50% off</div>
              </div>
              <div class="card-body">
                <div class="mb-3">
                  <a class="card-title">
                    <a class="title-text" target="_blank" onclick="redirectProductpage()" href="#">Console Atari Flashback X Tectoy<div>Com 110 Jogos E 2 Joystick</div></a>
                  </a>
                  <div class="star">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-half"></ion-icon> <span>(5)</span>
                  </div>
                  <div class="card-price" onclick="redirectProductpage()">
                    <data value="">&#8369; 895,10</data>
                  </div>
                  <div class="conditions-price" onclick="redirectProductpage()">
                    <p><a href="">in sight</a> <span>(10% discount)</span></p>
                  </div>
                  <div class="conditions-payment" onclick="redirectProductpage()">
                    <span> or 10x of &#8369; 85,00 interest-free </span>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="col-3">
            <div class="product-card">
              <div class="card-banner">
                <div class="clearfix mb-1 pe-3">
                  <span class="float-end">
                    <i class="bi bi-heart heartcard"></i>
                  </span>
                </div>
                <img src="../Online_Tech_Store_v1/assets/IMG/console-playstation-4-slim-500gb-preto-bivolt-2aaceb63.webp" alt="" class="img-fluid w-75" />
                <div class="card-badge-full">
                  Full <ion-icon name="flash"></ion-icon>
                </div>
              </div>
              <div class="card-body">
                <div class="mb-3">
                  <a class="card-title">
                    <a class="title-text" target="_blank" onclick="redirectProductpage()" href="#">Console Playstation 4 1TB<div>God of War Ragnarok Bundle</div></a>
                  </a>
                  <div class="star">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-half"></ion-icon> <span>(5)</span>
                  </div>
                  <div class="card-price" onclick="redirectProductpage()">
                    <data value="">&#8369; 2.499,10</data>
                  </div>
                  <div class="conditions-price" onclick="redirectProductpage()">
                    <p><a href="">in sight</a> <span>(10% discount)</span></p>
                  </div>
                  <div class="conditions-payment" onclick="redirectProductpage()">
                    <span> or 10x of &#8369; 49,00 interest-free </span>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="col-3">
            <div class="product-card">
              <div class="card-banner">
                <div class="clearfix mb-1">
                  <span class="float-end">
                    <i class="bi bi-heart heartcard endheart"></i>
                  </span>
                </div>
                <img src="assets/IMG/66f0195677.webp" alt="Varsi Leather Bag" class="img-fluid w-75" />
                <div class="card-badge-red">50% off</div>
              </div>
              <div class="card-body">
                <div class="mb-3">
                  <a class="card-title">
                    <a class="title-text" target="_blank" onclick="redirectProductpage()" href="#">Multimedia Speaker 6W Rms - SP261 Multilaser</a>
                  </a>
                  <div class="star">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-half"></ion-icon> <span>(5)</span>
                  </div>
                  <div class="card-price" onclick="redirectProductpage()">
                    <data value="">&#8369; 399,10</data>
                  </div>
                  <div class="conditions-price" onclick="redirectProductpage()">
                    <p><a href="">in sight</a> <span>(10% discount)</span></p>
                  </div>
                  <div class="conditions-payment" onclick="redirectProductpage()">
                    <span> or 10x of &#8369; 439,90 interest-free </span>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </section>
    <!-- END PRODUCT -->

    <!-- INICIO BANNER- CONTATDOR -->
    <section class="category-banner d-flex justify-content-center">
      <div class="container" id="bannerdesktop">
        <div class="col-10 col-md-12">
          <div class="container-category-banner d-flex justify-content-center">
            <ul class="category-list-banner">
              <li class="category-item-banner">
                <div>
                  <img src="../Online_Tech_Store_v1/assets/IMG/banner-contador (1).webp" alt="" />
                  <!-- assets/IMG/banner-contador (1).webp -->

                  <div class="counter">
                    <div class="days">
                      <div class="number" id="days"> 00 </div>
                      <div class="day" id="day-label">Day</div>
                    </div>
                    <div class="ping">:</div>
                    <div class="hours">
                      <div class="number" id="hours"> 00 </div>
                      <div class="hr" id="hours-label">Hours</div>
                    </div>
                    <div class="ping">:</div>
                    <div class="minutes">
                      <div class="number" id="minutes"> 00 </div>
                      <div class="min" id="minutes-label">Mins.</div>
                    </div>
                    <div class="ping">:</div>
                    <div class="seconds">
                      <div class="number" id="seconds"> 00 </div>
                      <div class="seg" id="seconds-label">Sec.</div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- FIM INICIO BANNER- CONTATDOR

      <!-- INICIO BANNER- CONTATDOR MOBILE -->
    <section class="bannercontador">
      <div class="container" id="mobilebanner">
        <div class="row-fluid">
          <div class="picturebannermobile">
            <img src="../Online_Tech_Store_v1/assets/IMG/banner-contador-mob.png" alt="" width="" />
            <!-- assets/IMG/banner-contador-mob.png -->
          </div>
        </div>
      </div>
    </section>

    <div class="counter-mobile">
      <div class="days-mobile">
        <div class="number" id="days-mobile">00</div>
        <div class="day" id="day-label-mobile">Day</div>
      </div>
      <div class="ping">:</div>
      <div class="hours-mobile">
        <div class="number" id="hours-mobile">00</div>
        <div class="day" id="hours-label-mobile">Hours</div>
      </div>
      <div class="ping">:</div>
      <div class="minutes-mobile">
        <div class="number" id="minutes-mobile">00</div>
        <div class="day" id="minutes-label-mobile">Minutes</div>
      </div>
      <div class="ping">:</div>
      <div class="seconds-mobile">
        <div class="number" id="seconds-mobile">00</div>
        <div class="day" id="seconds-label-mobile">Seconds</div>
      </div>
    </div>
    <!-- FIM INICIO BANNER- CONTATDOR MOBILE -->

    <!-- START TITLE-SECTION -->
    <div class="category-tittle">
      <div class="category-tittle-container">
        <div class="category-item-tittle">
          <div class="category-content-flex-tittle">
            <h3 class="category-item-title-title">
              <a href="#">Best sellers</a>
            </h3>
          </div>
        </div>
      </div>
    </div>
    <!--END TITLE-SECTION-->

    <!-- START PRODUCT -->
    <section class="section-product-Lançamentos grid">
      <div class="container-sm-fluid container-fluid-md">
        <ul class="product-list">
          <li class="col-3">
            <div class="product-card">
              <div class="card-banner">
                <div class="clearfix mb-1 pe-3">
                  <span class="float-end">
                    <i class="bi bi-heart heartcard"></i>
                  </span>
                </div>
                <img src="../Online_Tech_Store_v1/assets/IMG/iphone-xs-max-space-select-2018.jfif" alt="" class="img-fluid w-75" />
                <!-- assets/IMG/iphone-xs-max-space-select-2018.jfif -->
                <div class="card-badge">New</div>
              </div>
              <div class="card-body">
                <div class="mb-3">
                  <a class="card-title">
                    <a class="title-text" target="_blank" onclick="redirectProductpage()" href="#">Apple iPhone 11 (64 GB)</a>
                  </a>
                  <div class="star">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-half"></ion-icon> <span>(5)</span>
                  </div>
                  <div class="card-price" onclick="redirectProductpage()">
                    <data value="">&#8369; 8.299,00</data>
                    <data value="">&#8369; 6.599,10</data>
                  </div>
                  <div class="conditions-price" onclick="redirectProductpage()">
                    <p><a href="">in sight</a> <span>(10% discount)</span></p>
                  </div>
                  <div class="conditions-payment" onclick="redirectProductpage()">
                    <span> or 10x of &#8369; 659,90 interest-free </span>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="col-3">
            <div class="product-card">
              <div class="card-banner">
                <div class="clearfix mb-1 pe-3">
                  <span class="float-end">
                    <i class="bi bi-heart heartcard"></i>
                  </span>
                </div>
                <img src="../Online_Tech_Store_v1/assets/IMG/cf31dba1ff.webp" alt="" class="img-fluid w-75" />
                <!-- assets/IMG/cf31dba1ff.webp -->
                <div class="card-badge">New</div>
              </div>
              <div class="card-body">
                <div class="mb-3">
                  <a class="card-title">
                    <a class="title-text" target="_blank" onclick="redirectProductpage()" href="#">Apple iPhone 8 (64 GB)</a>
                  </a>
                  <div class="star">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-half"></ion-icon> <span>(5)</span>
                  </div>
                  <div class="card-price" onclick="redirectProductpage()">
                    <data value="">&#8369; 8.299,00</data>
                    <data value="">&#8369; 6.599,10</data>
                  </div>
                  <div class="conditions-price" onclick="redirectProductpage()">
                    <p><a href="">in sight</a> <span>(10% discount)</span></p>
                  </div>
                  <div class="conditions-payment" onclick="redirectProductpage()">
                    <span> or 10x of &#8369; 659,90 interest-free </span>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="col-3">
            <div class="product-card">
              <div class="card-banner">
                <div class="clearfix mb-1 pe-3">
                  <span class="float-end">
                    <i class="bi bi-heart heartcard"></i>
                  </span>
                </div>
                <img src="../Online_Tech_Store_v1/assets/IMG/2xiaomi_redmi_note_10_5g_128gb_graphite_gray-e1623347692143-250x300.jpg" alt="" class="img-fluid w-75" />
                <!-- assets/IMG/2xiaomi_redmi_note_10_5g_128gb_graphite_gray-e1623347692143-250x300.jpg -->
              </div>
              <div class="card-body">
                <div class="mb-3">
                  <a class="card-title">
                    <a class="title-text" target="_blank" onclick="redirectProductpage()" href="#">Xiaomi Redmi Note 10 (128 GB)</a>
                  </a>
                  <div class="star">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-half"></ion-icon> <span>(5)</span>
                  </div>
                  <div class="card-price" onclick="redirectProductpage()">
                    <data value="">&#8369; 5.499,00</data>
                    <data value="">&#8369; 4.349,10</data>
                  </div>
                  <div class="conditions-price" onclick="redirectProductpage()">
                    <p><a href="">in sight</a> <span>(10% discount)</span></p>
                  </div>
                  <div class="conditions-payment" onclick="redirectProductpage()">
                    <span> or 10x of &#8369; 149,90 interest-free </span>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="col-3">
            <div class="product-card">
              <div class="card-banner">
                <div class="clearfix mb-1">
                  <span class="float-end">
                    <i class="bi bi-heart heartcard endheart"></i>
                  </span>
                </div>
                <img src="../Online_Tech_Store_v1/assets/IMG/foto5-1-e1650206247663-250x300.jpg" alt="" class="img-fluid w-75" />
                <!-- assets/IMG/foto5-1-e1650206247663-250x300.jpg -->
                <div class="card-badge-red">50% off</div>
              </div>
              <div class="card-body">
                <div class="mb-3">
                  <a class="card-title">
                    <a class="title-text" target="_blank" onclick="redirectProductpage()" href="#">iPhone 12 Pro Max (512 GB)</a>
                  </a>
                  <div class="star">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-half"></ion-icon> <span>(5)</span>
                  </div>
                  <div class="card-price" onclick="redirectProductpage()">
                    <data value="">&#8369; 100,059.00</data>
                    <data value="">&#8369; 98,000.00</data>
                  </div>
                  <div class="conditions-price" onclick="redirectProductpage()">
                    <p><a href="">in sight</a> <span>(10% discount)</span></p>
                  </div>
                  <div class="conditions-payment" onclick="redirectProductpage()">
                    <span> or 10x of &#8369; 99,90 interest-free </span>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="col-3">
            <div class="product-card">
              <div class="card-banner">
                <div class="clearfix mb-1 pe-3">
                  <span class="float-end">
                    <i class="bi bi-heart heartcard"></i>
                  </span>
                </div>
                <img src="../Online_Tech_Store_v1/assets/IMG/3d6e734e22.webp" alt="" class="img-fluid w-75" />
                <!-- assets/IMG/3d6e734e22.webp -->
                <div class="card-badge-red">50% off</div>
              </div>
              <div class="card-body">
                <div class="mb-3">
                  <a class="card-title">
                    <a class="title-text" target="_blank" onclick="redirectProductpage()" href="#">Console Atari Flashback X Tectoy <br> Com 110 Jogos E 2 Joystick</a>
                  </a>
                  <div class="star">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-half"></ion-icon> <span>(5)</span>
                  </div>
                  <div class="card-price" onclick="redirectProductpage()">
                    <data value="">&#8369; 349,90</data>
                  </div>
                  <div class="conditions-price" onclick="redirectProductpage()">
                    <p><a href="">in sight</a> <span>(10% discount)</span></p>
                  </div>
                  <div class="conditions-payment" onclick="redirectProductpage()">
                    <span> or 6x &#8369; 58,35 interest-free </span>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="col-3">
            <div class="product-card">
              <div class="card-banner">
                <div class="clearfix mb-1 pe-3">
                  <span class="float-end">
                    <i class="bi bi-heart heartcard"></i>
                  </span>
                </div>
                <img src="../Online_Tech_Store_v1/assets/IMG/capinha-de-celular-iphone-8-cf2cb00b.webp" alt="" class="img-fluid w-75" />
                <!-- assets/IMG/capinha-de-celular-iphone-8-cf2cb00b.webp -->
                <div class="card-badge-red">50% off</div>
              </div>
              <div class="card-body">
                <div class="mb-3">
                  <a class="card-title">
                    <a class="title-text" target="_blank" onclick="redirectProductpage()" href="#">Iphone 7 Case </a>
                  </a>
                  <div class="star">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-half"></ion-icon> <span>(5)</span>
                  </div>
                  <div class="card-price" onclick="redirectProductpage()">
                    <data value="">&#8369; 439,00</data>
                  </div>
                  <div class="conditions-price" onclick="redirectProductpage()">
                    <p><a href="">in sight</a> <span>(10% discount)</span></p>
                  </div>
                  <div class="conditions-payment" onclick="redirectProductpage()">
                    <span> or 8x &#8369; 54,91 interest-free </span>
                  </div>
                </div>
              </div>
            </div>
          </li>

          <li class="col-3">
            <div class="product-card">
              <div class="card-banner">
                <div class="clearfix mb-1 pe-3">
                  <span class="float-end">
                    <i class="bi bi-heart heartcard"></i>
                  </span>
                </div>
                <img src="../Online_Tech_Store_v1/assets/IMG/zoom-in-smart-tv-uhd-4k-2019-ru7100-55-visual-com-cabos-escondidos-60a107ef.webp" alt="" class="img-fluid w-75" />
                <!-- assets/IMG/capinha-de-celular-iphone-8-cf2cb00b.webp -->
                <div class="card-badge-full">
                  Full <ion-icon name="flash"></ion-icon>
                </div>
              </div>
              <div class="card-body">
                <div class="mb-3">
                  <a class="card-title">
                    <a class="title-text" target="_blank" onclick="redirectProductpage()" href="#">Smart TV 32" LG HD 32LQ620 Wi-Fi <div>Bluetooth HDR ThinQ AI Google Alexa</div></a>
                  </a>
                  <div class="star">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-half"></ion-icon> <span>(5)</span>
                  </div>
                  <div class="card-price" onclick="redirectProductpage()">
                    <data value="">&#8369; 35,000.00</data>
                  </div>
                  <div class="conditions-price" onclick="redirectProductpage()">
                    <p><a href="">in sight</a> <span>(10% discount)</span></p>
                  </div>
                  <div class="conditions-payment" onclick="redirectProductpage()">
                    <span> or 8x &#8369; 162,49 interest-free </span>
                  </div>
                </div>
              </div>
            </div>
          </li>

          <li class="col-3">
            <div class="product-card">
              <div class="card-banner">
                <div class="clearfix mb-1">
                  <span class="float-end">
                    <i class="bi bi-heart heartcard endheart"></i>
                  </span>
                </div>
                <img src="../Online_Tech_Store_v1/assets/IMG/cf31dba1ff.webp" alt="" class="img-fluid w-75" />
                <!-- assets/IMG/capinha-de-celular-iphone-8-cf2cb00b.webp -->
                <div class="card-badge-full">
                  Full <ion-icon name="flash"></ion-icon>
                </div>
              </div>
              <div class="card-body">
                <div class="mb-3">
                  <a class="card-title">
                    <a class="title-text" target="_blank" onclick="redirectProductpage()" href="#">Iphone 7 Pro (64 GB) </a>
                  </a>
                  <div class="star">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-half"></ion-icon> <span>(5)</span>
                  </div>
                  <div class="card-price" onclick="redirectProductpage()">
                    <data value="">&#8369; 15,999.00</data>
                  </div>
                  <div class="conditions-price" onclick="redirectProductpage()">
                    <p><a href="">in sight</a> <span>(10% discount)</span></p>
                  </div>
                  <div class="conditions-payment" onclick="redirectProductpage()">
                    <span> or 12x &#8369; 2.166,58 interest-free </span>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </section>
    <!-- END PRODUCT -->

    <!--START MINI BANNER 2-->
    <div class="container">
      <div class="row d-flex justify-content-between m">
        <div class="modulo col-md-6">
          <div class="flexslider">
            <ul class="slides">
              <li>
                <img src="../Online_Tech_Store_v1/assets/IMG/04fe14a2ce66ef1087c1d9411005cd09 (1)123.jpg" alt="Mini banner 1">
                <!-- assets/IMG/04fe14a2ce66ef1087c1d9411005cd09 (1)123.jpg -->
              </li>
            </ul>
          </div>
        </div>
        <div class="modulo col-md-6">
          <div class="flexslider">
            <ul class="slides">
              <li>
                <img src="../Online_Tech_Store_v1/assets/IMG/Captura de tela 2023-01-10 171951.png" alt="Mini banner 2">
                <!-- assets/IMG/Captura de tela 2023-01-10 171951.png -->
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!--END MINI BANNER 2-->

    <!-- START TITLE-SECTION -->
    <div class="category-tittle">
      <div class="category-tittle-container">
        <div class="category-item-tittle">
          <div class="category-content-flex-tittle">
            <h3 class="category-item-title-title">
              <a href="#">Releases</a>
            </h3>
          </div>
        </div>
      </div>
    </div>
    <!--END TITLE-SECTION-->
    <!-- START PRODUCT -->
    <section class="section-product-Lançamentos grid">
      <div class="container-fluid">
        <ul class="product-list">
          <li class="col-3">
            <div class="product-card">
              <div class="card-banner">
                <div class="clearfix mb-1 pe-3">
                  <span class="float-end">
                    <i class="bi bi-heart heartcard"></i>
                  </span>
                </div>
                <img src="../Online_Tech_Store_v1/assets/IMG/IMG/Products/vivo v30.png" alt="" class="img-fluid w-75" />
                <!-- assets/IMG/IMG/Products/GERADOR.jpg -->
                <div class="card-badge-full">
                  Full <ion-icon name="flash"></ion-icon>
                </div>
              </div>
              <div class="card-body">
                <div class="mb-3">
                  <a class="title-text" target="_blank" onclick="redirectProductpage()" href="#">vivo V30-Aura Light, Slimmest 5000mAh Phone </a>
                  <div class="star">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-half"></ion-icon> <span>(5)</span>
                  </div>
                  <div class="card-price" onclick="redirectProductpage()">
                    <data value="">&#8369; 25,999</data>
                    <data value="">&#8369; 21,999</data>
                  </div>
                  <div class="conditions-price" onclick="redirectProductpage()">
                    <p><a href="">in sight</a> <span>(10% discount)</span></p>
                  </div>
                  <div class="conditions-payment" onclick="redirectProductpage()">
                    <span> or 12x of &#8369; 460,28 interest-free </span>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="col-3">
            <div class="product-card">
              <div class="card-banner">
                <div class="clearfix mb-1 pe-3">
                  <span class="float-end">
                    <i class="bi bi-heart heartcard"></i>
                  </span>
                </div>
                <img src="../Online_Tech_Store_v1/assets/IMG/IMG/Products/nitro 5 acer.jpg" alt="" class="img-fluid w-75" />
                <!-- assets/IMG/IMG/Products/NIKE.jpg -->
                <div class="card-badge badge badge-danger">New</div>
              </div>
              <div class="card-body">
                <div class="mb-3">
                  <a class="title-text" target="_blank" onclick="redirectProductpage()" href="#">acer Nitro 5 (2024) Gaming Laptop (17.3" QHD 165Hz, AMD 8-Core Ryzen 7 7840HS (Beat i7-12700H), 32GB DDR5 RAM, 1TB SSD, GeForce RTX 4060 8GB) <div> 4-Zone RGB, Wi-Fi 6E, IST Cable, Bag, Win 11 Home, Black </div></a>
                  <div class="star">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-half"></ion-icon> <span>(5)</span>
                  </div>
                  <div class="card-price" onclick="redirectProductpage()">
                    <data value="">&#8369; 48,999</data>
                  </div>
                  <div class="conditions-price" onclick="redirectProductpage()">
                    <p><a href="">in sight</a> <span>(10% discounted)</span></p>
                  </div>
                  <div class="conditions-payment" onclick="redirectProductpage()">
                    <span> or 10x &#8369; 90,00 interest-free </span>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="col-3">
            <div class="product-card">
              <div class="card-banner">
                <div class="clearfix mb-1 pe-3">
                  <span class="float-end">
                    <i class="bi bi-heart heartcard"></i>
                  </span>
                </div>
                <img src="../Online_Tech_Store_v1/assets/IMG/IMG/Products/Nvidia 4060Ti.jpg" alt="" class="img-fluid w-75" />
                <!-- assets/IMG/IMG/Products/PLACADEVIDEO2.jpg -->
                <div class="card-badge badge badge-danger">New</div>
              </div>
              <div class="card-body">
                <div class="mb-3">
                  <a class="title-text" target="_blank" onclick="redirectProductpage()" href="#">Colorful iGame GeForce RTX 4060 TI<div> Ultra W OC 8GB-V Graphics Card
                    </div></a>
                  <div class="star">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-half"></ion-icon> <span>(5)</span>
                  </div>
                  <div class="card-price" onclick="redirectProductpage()">
                    <data value="">&#8369; 24,995</data>
                  </div>
                  <div class="conditions-price" onclick="redirectProductpage()">
                    <p><a href="">in sight</a> <span>(10% discount)</span></p>
                  </div>
                  <div class="conditions-payment" onclick="redirectProductpage()">
                    <span> or 10x of &#8369; 317,64 interest-free </span>
                  </div>
                </div>
              </div>
            </div>
          </li>

          <li class="col-3">
            <div class="product-card">
              <div class="card-banner">
                <div class="clearfix mb-1">
                  <span class="float-end">
                    <i class="bi bi-heart heartcard endheart"></i>
                  </span>
                </div>
                <img src="../Online_Tech_Store_v1/assets/IMG/IMG/Products/Epson L5190.png" alt="" class="img-fluid w-75" />
                <!-- assets/IMG/IMG/Products/IMPRESSORA.jpg -->
                <div class="card-badge badge badge-danger">New</div>
              </div>
              <div class="card-body">
                <div class="mb-3">
                  <a class="title-text" target="_blank" onclick="redirectProductpage()" href="#">Epson L5190 Wi-Fi All-in-One Ink <div> Tank Printer with ADF </div></a>
                  <div class="star">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-half"></ion-icon> <span>(5)</span>
                  </div>
                  <div class="card-price" onclick="redirectProductpage()">
                    <data value="">&#8369; 14,994</data>
                  </div>
                  <div class="conditions-price" onclick="redirectProductpage()">
                    <p><a href="">in sight</a> <span>(10% discounted)</span></p>
                  </div>
                  <div class="conditions-payment" onclick="redirectProductpage()">
                    <span> or 10x of &#8369; 67,74 interest-free </span>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </section>
  </main>
  <!-- START TITLE-SECTION -->
  <div class="category-tittle">
    <div class="category-tittle-container">
      <div class="category-item-tittle">
        <div class="category-content-flex-tittle">
          <h3 class="category-item-title-title">
            <a href="#">Buy by brand </a>
          </h3>
        </div>
      </div>
    </div>
  </div>
  <!--END TITLE-SECTION-->
  <!--START BANNERS MARCAS-->
  <section class="splide container-fluid" id="carouseltag">
    <div class="splide__track">
      <ul class="splide__list">
        <li class="splide__slide" id="imgcarouseltag">
          <div>
            <img src="../Online_Tech_Store_v1/assets/IMG/SAMSUNG-150x150.jpg" alt="Mini banner 6">
            <!-- assets/IMG/SAMSUNG-150x150.jpg -->
          </div>
        </li>
        <li class="splide__slide">
          <img src="../Online_Tech_Store_v1/assets/IMG/GIGABYTE-150x150.jpg" alt="Mini banner 5">
          <!-- assets/IMG/GIGABYTE-150x150.jpg -->
        </li>
        <li class="splide__slide">
          <img src="../Online_Tech_Store_v1/assets/IMG/COOLER-MASTER-150x150.jpg" alt="Mini banner 5">
          <!-- assets/IMG/COOLER-MASTER-150x150.jpg -->
        </li>
        <li class="splide__slide">
          <img src="../Online_Tech_Store_v1/assets/IMG/ASUS-150x150.jpg" alt="Mini banner 5">
          <!-- assets/IMG/ASUS-150x150.jpg -->
        </li>
        <li class="splide__slide">
          <img src="../Online_Tech_Store_v1/assets/IMG/RAZER-150x150.jpg" alt="Mini banner 5">
          <!-- assets/IMG/RAZER-150x150.jpg -->
        </li>
        <li class="splide__slide">
          <img src="../Online_Tech_Store_v1/assets/IMG/THERMALTAKE-150x150.jpg" alt="Mini banner 5">
          <!-- assets/IMG/THERMALTAKE-150x150.jpg -->
        </li>
        <li class="splide__slide">
          <img src="../Online_Tech_Store_v1/assets/IMG/TP-LINK-150x150.jpg" alt="Mini banner 4">
          <!-- assets/IMG/TP-LINK-150x150.jpg -->
        </li>
        <li class="splide__slide">
          <img src="../Online_Tech_Store_v1/assets/IMG/TARGUS-150x150.jpg" alt="Mini banner 4">
          <!-- assets/IMG/TARGUS-150x150.jpg -->
        </li>
        <li class="splide__slide">
          <img src="../Online_Tech_Store_v1/assets/IMG/NVDIA-150x150.jpg" alt="Mini banner 4">
          <!-- assets/IMG/NVDIA-150x150.jpg -->
        </li>
        <li class="splide__slide">
          <img src="../Online_Tech_Store_v1/assets/IMG/LOGITECH-150x150.jpg" alt="Mini banner 4">
          <!-- assets/IMG/LOGITECH-150x150.jpg -->
        </li>
      </ul>
    </div>
  </section>
  <!--END BANNERS MARCAS-->
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
                    <a href="#"><img src="assets/IMG/IMG/Icons/site seguro 2.png" alt=""></a>
                  </div>
                  <div>
                    <a href="#"><img src="assets/IMG/IMG/Icons/selo-google-res.png" alt=""></a>
                  </div>
                  <div>
                    <a href="#"><img src="assets/IMG/IMG/Icons/site prote.png" alt=""></a>
                  </div>
                  <div>
                    <a href="#"><img src="assets/IMG/IMG/Icons/siteseguro3.png" alt=""></a>
                  </div>
                </div>
              </ul>
            </div>
            <div class="col-lg-3 col-md-3 mb-4 mb-lg-0" id="form2">
              <h5 class="text-uppercase mb-4">Receba Ofertas e Novidades de nossa loja</h5>
              <div class="form-outline form-white mb-4">
                <input type="email" class="form-control" placeholder="Email" />
              </div>
              <button type="submit" class="btn btn-outline-light  btn-block">Quero Receber!</button>
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
                    <a href="#">Terms e condition</a>
                  </span>
                </div>
                <div class="col-md-4">
                  <div class="payment methods">
                    <a href="#"><img src="assets/IMG/IMG/Icons/visa.svg" alt=""></a>
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
  <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.1/dist/js/splide.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-auto-scroll@0.4.2/dist/js/splide-extension-auto-scroll.min.js">
  </script>

  <!-- JS-COOKIES-->
  <script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>

  <!-- CUSTOM JS LINK-->
  <script src="../Online_Tech_Store_v1/assets/JS/index.js"></script>
  <!-- assets/JS/index.js -->

  <!-- ionicon link -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>


</html>