<?php
include "config.php";
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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <!-- Bootstrap CSS -->

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
            <div class="text-icon">Login or Register</div>
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
    <div class="container mt-5 cart desktop">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <div class="align-items-start">
            <span class="Titledesktopsac">Add To Cart</span>
          </div>

          <div class="product-details continer mt-5">
            <div class="row">
              <div class="d-flex align-itens-center">
                <div class="qtdstart col-8">
                  <span></span>
                </div>
                <div class="qtdstart col-2">
                  <span>Quantity</span>
                </div>
                <div class="pricestart col-1">
                  <span class="mr-1">Price</span>
                </div>
              </div>
            </div>
          </div>

          <div class="d-flex justify-content-between mt-3 pe-5 infoproduto">
            <div class="d-flex flex-row">
              <img class="rounded" src="../Online_Tech_Store_v1/assets/IMG/IMG/Products/iPhone_13.webp" width="80" height="80" />
              <div class="ml-2 ps-3">
                <span class="d-block titledesktop">Apple iPhone 13 128GB (PRODUCT) RED Tela 6,1” 12MP - iOS
                  <br />
                  - Red</span>
                <div class="mt-2">
                  <span class="coddesktop">Code 234662100</span><br />
                </div>
                <div class="mt-1 mb-2">
                  <span class="entrega mt-4">Sold and delivered by
                    <img src="../Online_Tech_Store_v1/assets/IMG/ONLINE_SHOP.png" width="80" alt="" /></span>
                </div>
              </div>
            </div>
            <input id="form7" min="0" name="quantity" value="2" type="number" class="form-control mb-5" style="width: 50px; height: 35px" />
            <div class="d-flex flex-row mb-5">
              <span class="ml-5">&#8369; 42,990.00</span>
              <i class="fa fa-trash-o ml-3 text-black-50"></i>
            </div>
          </div>

          <div class="d-flex justify-content-between mt-3 pe-5 infoproduto">
            <div class="d-flex flex-row">
              <img class="rounded" src="../Online_Tech_Store_v1/assets/IMG/IMG/Products/vivo v30.png" width="80" height="80" />
              <!-- assets/IMG/IMG/Products/PLACADEVIDEO2.jpg -->
              <div class="ml-2 ps-3">
                <span class="d-block titledesktop">vivo V30 Lite unveiled with a 120Hz screen and 50MP selfie camera
                  <br />
                  - Black</span>
                <div class="mt-2">
                  <span class="coddesktop">Code 234662100</span><br />
                </div>
                <div class="mt-1 mb-2">
                  <span class="entrega mt-4">Sold and delivered by
                    <img src="../Online_Tech_Store_v1/assets/IMG/ONLINE_SHOP.png" width="80" alt="" /></span>
                </div>
              </div>
            </div>
            <input id="form5" min="0" name="quantity" value="2" type="number" class="form-control mb-5" style="width: 50px; height: 35px" />
            <div class="d-flex flex-row mb-5">
              <span class="ml-5">&#8369; 21,949.00</span>
              <i class="fa fa-trash-o ml-3 text-black-50"></i>
            </div>
          </div>

          <div class="d-flex justify-content-between mt-3 pe-5 infoproduto">
            <div class="d-flex flex-row">
              <img class="rounded" src="../Online_Tech_Store_v1/assets/IMG/b641d84456.webp" width="80" height="80" />
              <div class="ml-2 ps-3">
                <span class="d-block titledesktop">Uncharted Legacy of Thieves Collection Remastered Game PS5
                  <br />
                  - PS5 Game</span>
                <div class="mt-2">
                  <span class="coddesktop">Code 234662100</span><br />
                </div>
                <div class="mt-1 mb-2">
                  <span class="entrega mt-4">Sold and delivered by
                    <img src="../Online_Tech_Store_v1/assets/IMG/ONLINE_SHOP.png" width="80" alt="" /></span>
                </div>
              </div>
            </div>
            <input id="form6" min="0" name="quantity" value="2" type="number" class="form-control mb-5" style="width: 50px; height: 35px" />
            <div class="d-flex flex-row mb-5">
              <span class="ml-5">&#8369; 484,00</span>
              <i class="fa fa-trash-o ml-3 text-black-50"></i>
            </div>
          </div>

          <div class="d-flex justify-content-between mt-3 pe-5 infoproduto">
            <div class="d-flex flex-row">
              <img class="rounded" src="../Online_Tech_Store_v1/assets/IMG/monitor-gamer-aoc-led-24-full-hd-widescreen-hero-g2460pf-b3ded940.webp" width="80" height="80" />
              <div class="ml-2 ps-3">
                <span class="d-block titledesktop">Monitor Gamer AOC SPEED 24 75Hz IPS 1ms 24G2HE5
                  <br />- Monitor</span>
                <div class="mt-2">
                  <span class="coddesktop">Code 234662100</span><br />
                </div>
                <div class="mt-1 mb-2">
                  <span class="entrega mt-4">Sold and delivered by
                    <img src="../Online_Tech_Store_v1/assets/IMG/ONLINE_SHOP.png" width="80" alt="" /></span>
                </div>
              </div>
            </div>
            <input id="form8" min="0" name="quantity" value="2" type="number" class="form-control mb-5" style="width: 50px; height: 35px" />
            <div class="d-flex flex-row mb-5">
              <span class="ml-5">&#8369; 15.792,42</span>
              <i class="fa fa-trash-o ml-3 text-black-50"></i>
            </div>
          </div>

          <!-- <div class="container mt-2 p-3 desktop">
            <div class="row">
              <div class="d-flex align-items-center mb-2">
                <span class="pe-2">Shipping</span>
                <input class="" maxlength="9" name="CEP" placeholder="00000-00" style="
                      width: 140px;
                      height: 40px;
                      justify-content: center;
                      align-items: center;
                    " />
                <button type="button" class="btn btn-primary okdesk">
                  OK
                </button>
              </div>
            </div>
          </div> -->

          <div class="d-flex align-items-center justify-content-end pe-3 destoptotal">
            <div class="row">
              <div class="d-flex justify-content-end">
                <span class="col-4 mt-3">
                  <span>Subtotal (4 itens)</span>
                </span>

                <span class="col-4 mt-3">
                  <div class="total">
                    <span class="d-flex justify-content-end">&#8369; 2.796,00</span>
                    <span class="d-flex justify-content-end">&#8369; 1.796,00 at sight</span>
                  </div>
                </span>
              </div>

              <div class="d-flex justify-content-end">
                <span class="mt-3 col-3">
                  <img src="../Online_Tech_Store_v1/assets/IMG/IMG/Icons/elo.svg" alt="" />
                  <img src="../Online_Tech_Store_v1/assets/IMG/IMG/Icons/master.svg" alt="" />
                  <!-- assets/IMG/IMG/Icons/master.svg -->
                </span>
                <span class="totaldesktopaymentcard mt-3">
                  <div class="cardconditions d-flex justify-content-end">
                    (Up to 12x &#8369; 233,00
                  </div>
                  <div class="">no interest on the card Online Tech )</div>
                  <a class="btn btn-primary mt-3 mb-5 btndesktop" href="#" role="button">Continue</a>
                </span>
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
              <span class="title-total">Subtotal (4 itens)</span>
              <img class="paymentcard" src="assets/IMG/IMG/Icons/elo.svg" alt="" />
              <img class="paymentcard" src="assets/IMG/IMG/Icons/master.svg" alt="" />
              <div class="total-checkout">
                <span class="total-checkout-value">R$ 2.796,00 ou</span>
                <span class="total-checkout-desc">R$ 1.796,00 a vista</span>
                <span class="condipricetotal">
                  <div>(Em até 12x de R$ 233,00</div>
                  <div>sem juros no cartão .On Shop )</div>
                  <a class="btn btn-primary mb-0 mt-0 btncheckoutpayment" href="#" role="button">Continuar</a>
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
                <h5 class="text-uppercase mb-4">Institucional</h5>
                <ul class="list-unstyled mb-4">
                  <li>
                    <a href="#!">Fale Conosco</a>
                  </li>
                  <li>
                    <a href="#!">Formas de Envio</a>
                  </li>
                  <li>
                    <a href="#!">Política de Troca</a>
                  </li>
                  <li>
                    <a href="#!">Segurança e Privacidade</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-3 col-md-3 mb-6 mb-lg-0">
                <h5 class="text-uppercase mb-4">Categorias</h5>
                <ul class="list-unstyled">
                  <li>
                    <a href="#!">Eletrônicos</a>
                  </li>
                  <li>
                    <a href="#!">Lançamentos</a>
                  </li>
                  <li>
                    <a href="#!">Casa e Decor</a>
                  </li>
                  <li>
                    <a href="#!">Outlet</a>
                  </li>
                  <li>
                    <a href="#!">Mochilas</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-3 col-md-3 mb-4 mb-lg-0">
                <h5 class="text-uppercase mb-4">Selos</h5>
                <ul class="list-unstyled">
                  <div class="media-icons" id="selos">
                    <div>
                      <a href="#"><img src="assets/IMG/IMG/Icons/site seguro 2.png" alt="" /></a>
                    </div>
                    <div>
                      <a href="#"><img src="assets/IMG/IMG/Icons/selo-google-res.png" alt="" /></a>
                    </div>
                    <div>
                      <a href="#"><img src="assets/IMG/IMG/Icons/site prote.png" alt="" /></a>
                    </div>
                    <div>
                      <a href="#"><img src="assets/IMG/IMG/Icons/siteseguro3.png" alt="" /></a>
                    </div>
                  </div>
                </ul>
              </div>
              <div class="col-lg-3 col-md-3 mb-4 mb-lg-0" id="form99">
                <h5 class="text-uppercase mb-4">
                  Receba Ofertas e Novidades de nossa loja
                </h5>
                <div class="form-outline form-white mb-4">
                  <input type="email" class="form-control" placeholder="Email" />
                </div>
                <button type="submit" class="btn btn-outline-light btn-block">
                  Quero Receber!
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
                      <a href="#">Terms e condition</a>
                    </span>
                  </div>
                  <div class="col-md-4">
                    <div class="payment methods">
                      <a href="#"><img src="assets/IMG/IMG/Icons/visa.svg" alt="" /></a>
                      <a href="#"><img src="assets/IMG/IMG/Icons/master.svg" alt="" /></a>
                      <a href="#"><img src="assets/IMG/IMG/Icons/hipercard.svg" alt="" /></a>
                      <a href="#"><img src="assets/IMG/IMG/Icons/boleto.svg" alt="" /></a>
                      <a href="#"><img src="assets/IMG/IMG/Icons/elo.svg" alt="" /></a>
                      <a href="#"><img src="assets/IMG/IMG/Icons/aura.svg" alt="" /></a>
                      <a href="#"><img src="assets/IMG/IMG/Icons/diners.svg" alt="" /></a>
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
</body>

</html>