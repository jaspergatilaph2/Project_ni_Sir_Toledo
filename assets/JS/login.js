document.addEventListener("DOMContentLoaded", function () {
  document.querySelector(".spinner-wrapper").style.opacity = "0";
  setTimeout(function () {
    document.querySelector(".spinner-wrapper").style.display = "none";
  }, 2500);
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

// Get the checkbox and password input element
const checkbox = document.getElementById("showPassword");
const passwordInput = document.getElementById("password");

// Add event listener to checkbox
checkbox.addEventListener("change", function () {
  // If checkbox is checked, show password; otherwise, hide it
  if (this.checked) {
    passwordInput.type = "text";
  } else {
    passwordInput.type = "password";
  }
});

document.getElementById("showConfirmPassword").addEventListener("change", function() {
  var confirmPasswordInput = document.getElementById("confirmpassword");
  if (this.checked) {
    confirmPasswordInput.type = "text";
  } else {
    confirmPasswordInput.type = "password";
  }
});


document.getElementById("showEmailPassword").addEventListener("change", function(){
  var show = document.getElementById("emailpassword");
  if(this.checked){
    show.type = "text";
  }else{
    show.type = "password";
  }
})