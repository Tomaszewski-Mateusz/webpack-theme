import '../scss/app.scss';

window.onscroll = function () {
    navScroll();
  };
  var navbar = document.querySelector("#frontNav");
  var sticky = navbar.offsetTop;
  
  function navScroll() {
    if (window.pageYOffset >= sticky) {
      navbar.classList.add("sticky-shadow");
    } else {
      navbar.classList.remove("sticky-shadow");
    }
  }