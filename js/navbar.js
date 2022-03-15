function mobileToggle(x) {
    x.classList.toggle("change");

    navB = document.getElementById("n-btn");

    navB.style.display = navB.style.display == "flex" ? "none" : "flex";
}

var cls = document.getElementById("menu-close");

cls.addEventListener('click', () => {
  var navB = document.getElementById("n-btn");

  var menuBar = document.getElementById("menu-toggle");
  menuBar.classList.toggle("change");

  navB.style.display = "none";
});

