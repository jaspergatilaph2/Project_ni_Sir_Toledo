


document.addEventListener("DOMContentLoaded", function()
{
  document.querySelector(".spinner-wrapper").style.opacity= "0";
  setTimeout(function(){
    document.querySelector(".spinner-wrapper").style.display = "none";
  }, 2000); 
});


//SplideJs
document.addEventListener('DOMContentLoaded', function () {
const splide = new Splide(".splide", {
  type: "loop",
  padding: { y: 10 },
  gap: "1rem",
  rewind: true,
  speed: 2000,
  width: "100vw",
  perPage: 4,
  start: 1,
  perMove: 1,
  autoplay: false,
  interval: 4000,
  arrows: false,
  pagination: false,
  pauseOnHover: true,
  wheel: true,
});
splide.mount();
});

//SplideJsmobile
document.addEventListener('DOMContentLoaded', function () {
const splidemobile = new Splide("#image-carousel", {
  type: "loop",
  padding: { y: 10 },
  gap: "1rem",
  rewind: true,
  speed: 2000,
  width: "100vw",
  perPage: 1,
  start: 1,
  perMove: 1,
  autoplay: true,
  interval: 4000,
  arrows: false,
  pagination: false,
  pauseOnHover: true,
  wheel: true,
}).mount();
});


document.addEventListener('DOMContentLoaded', function () {
  new Splide('#carouseltag', {
    type   : 'loop',
    drag   : 'free',
    perPage: 4,
    arrows: false,
    pagination: false,
    pauseOnHover: true,
    wheel: true,
    gap: "4rem",
    autoScroll: {
      speed: 1,
    },
  }).mount( window.splide.Extensions );
});

//Menu-Modal-Dropdown
function toggleDropdownMenu() {
  var menu = document.getElementById("dropdown-menu");
  if (menu.style.display === "block") {
    menu.style.display = "none";
  } else {
    menu.style.display = "block";
  }
}

function toggleDropdownMenu2() {
  var menu = document.getElementById("dropdown-menu2");
  if (menu.style.display === "block") {
    menu.style.display = "none";
  } else {
    menu.style.display = "block";
  }
}

function toggleDropdownMenu3() {
  var menu = document.getElementById("dropdown-menu3");
  if (menu.style.display === "block") {
    menu.style.display = "none";
  } else {
    menu.style.display = "block";
  }
}

function toggleDropdownMenu4() {
  var menu = document.getElementById("dropdown-menu4");
  if (menu.style.display === "block") {
    menu.style.display = "none";
  } else {
    menu.style.display = "block";
  }
}

function toggleDropdownMenu5() {
  var menu = document.getElementById("dropdown-menu5");
  if (menu.style.display === "block") {
    menu.style.display = "none";
  } else {
    menu.style.display = "block";
  }
}

setTimeout(function () {
$("#modal2").modal("show");
}, 3500);

function closeItem() {
  $("#modal2").modal("hide");
}



// redirect index
const returnbtn = document.querySelector(".col-md-2");
function redirectBtnindex() {
  window.location.href = "index.php";
}

// redirect login e produto
const actionbtn = document.querySelector(
  ".text",
  ".link",
  "#iconsperson",
  ".account-login"
);
function redirectBtnlogin() {
  window.location.href = "login.php";
}

const actionproductcard = document.querySelector(
  ".card-banner",
  ".card-price",
  ".conditions-price",
  ".conditions-payment",
  "title-text"
);
function redirectProductpage() {
  window.location.href = "card.php";
}

const actionCheckout = document.querySelector(".iconscart");
function redirectIconCheckout() {
  window.location.href = "cart.php";
}





//Fixed Navbar
var navbar1 = document.querySelector("#navbar1");
var navbar2 = document.querySelector("#navbar2");
var sticky = navbar1.offsetTop;

window.onscroll = function () {
  if (window.pageYOffset >= sticky) {
    navbar1.classList.add("fixed");
    navbar2.classList.add("fixed");
    navbar2.classList.add("color");
  } else {
    navbar1.classList.remove("fixed");
    navbar2.classList.remove("fixed");
    navbar2.classList.remove("color");
  }
};

//Countdown Desktop
const countDownDate = new Date("Oct 29, 2024 23:00:00").getTime();
const daysElement = document.getElementById("days");
const hoursElement = document.getElementById("hours");
const minutesElement = document.getElementById("minutes");
const secondsElement = document.getElementById("seconds");
const dayLabel = document.getElementById("day-label");
const hourLabel = document.getElementById("hours-label");
const minutesLabel = document.getElementById("minutes-label");
const secondsLabel = document.getElementById("seconds-label");

const x = setInterval(function () {
  const now = new Date().getTime();
  let distance = countDownDate - now;
  if (distance < 0) {
    distance = countDownDate - distance;
  }

  const days = Math.floor(distance / (1000 * 60 * 60 * 24));
  const hours = Math.floor(
    (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
  );
  const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  const seconds = Math.floor((distance % (1000 * 60)) / 1000);

  daysElement.innerHTML = days;
  hoursElement.innerHTML = hours;
  minutesElement.innerHTML = minutes;
  secondsElement.innerHTML = seconds;
  dayLabel.innerHTML = "Day";
  hourLabel.innerHTML = "Hours";
  minutesLabel.innerHTML = "Min";
  secondsLabel.innerHTML = "Sec.";
}, 1000);

console.log(countDownDate);

//Countdown Mobile
const countDownDatemobile = new Date("Oct 29, 2024 23:00:00").getTime();

const daysMobileElement = document.getElementById("days-mobile");
const hoursMobileElement = document.getElementById("hours-mobile");
const minutesMobileElement = document.getElementById("minutes-mobile");
const secondsMobileElement = document.getElementById("seconds-mobile");
const dayLabelMobile = document.getElementById("day-label-mobile");
const hourLabelMobile = document.getElementById("hours-label-mobile");
const minutesLabelMobile = document.getElementById("minutes-label-mobile");
const secondsLabelMobile = document.getElementById("seconds-label-mobile");

const xmobile = setInterval(function () {
  const now = new Date().getTime();
  let distance = countDownDatemobile - now;
  if (distance < 0) {
    distance = countDownDatemobile - distance;
  }

  const days = Math.floor(distance / (1000 * 60 * 60 * 24));
  const hours = Math.floor(
    (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
  );
  const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  const seconds = Math.floor((distance % (1000 * 60)) / 1000);

  daysMobileElement.innerHTML = days;
  hoursMobileElement.innerHTML = hours;
  minutesMobileElement.innerHTML = minutes;
  secondsMobileElement.innerHTML = seconds;
  dayLabelMobile.innerHTML = "Day";
  hourLabelMobile.innerHTML = "Hours";
  minutesLabelMobile.innerHTML = "Mins.";
  secondsLabelMobile.innerHTML = "Sec.";
}, 1000);

console.log(countDownDate);

// function addToCart(productName, price) {
//   // You can use AJAX to send the product information to a PHP file that handles adding it to the cart
//   // For demonstration purposes, let's assume you have a PHP file named addToCart.php
  
//   // Create an XMLHttpRequest object
//   var xhr = new XMLHttpRequest();
  
//   // Prepare the POST request
//   xhr.open("POST", "cart.php", true);
  
//   // Set the request header
//   xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  
//   // Define what happens on successful data submission
//   xhr.onload = function() {
//     // Handle response from addToCart.php if needed
//     console.log(xhr.responseText);
//   };
  
//   // Define what happens in case of error
//   xhr.onerror = function() {
//     console.error('Error occurred while sending the request.');
//   };
  

//   var data = "productName=" + encodeURIComponent(productName) + "&price=" + price;
  
//   // Send the request
//   xhr.send(data);
// }