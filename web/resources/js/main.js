
  //"use strict";

  // ==== Preloader
  // window.onload = function () {
  //   window.setTimeout(fadeout, 500);
  // };

  // function fadeout() {
  //   document.querySelector(".preloader").style.opacity = "0";
  //   document.querySelector(".preloader").style.display = "none";
  // }

  // ======= Sticky
  window.onscroll = function () {
    const header_navbar = document.querySelector(".navbar-area");
    const sticky = header_navbar.offsetTop;
    const logo = document.querySelector(".navbar-brand img");

    if (window.pageYOffset > sticky) {
      header_navbar.classList.add("sticky");
      logo.src = BASEURL+"/resources/images/logo/logo-bot.png";
    } else {
      header_navbar.classList.remove("sticky");
      logo.src = BASEURL+"/resources/images/logo/logo.png";
    }

    // show or hide the back-top-top button
    const backToTop = document.querySelector(".back-to-top");
    if (
        document.body.scrollTop > 50 ||
        document.documentElement.scrollTop > 50
    ) {
      backToTop.style.display = "flex";
    } else {
      backToTop.style.display = "none";
    }
  };

  // ==== for menu scroll
  const pageLink = document.querySelectorAll(".page-scroll");

  pageLink.forEach((elem) => {
    elem.addEventListener("click", (e) => {
      e.preventDefault();
      document.querySelector(elem.getAttribute("href")).scrollIntoView({
        behavior: "smooth",
        offsetTop: 1 - 60,
      });
    });
  });

  // section menu active
  function onScroll(event) {
    const sections = document.querySelectorAll(".page-scroll");
    const scrollPos =
        window.pageYOffset ||
        document.documentElement.scrollTop ||
        document.body.scrollTop;

    for (let i = 0; i < sections.length; i++) {
      const currLink = sections[i];
      const val = currLink.getAttribute("href");
      const refElement = document.querySelector(val);
      const scrollTopMinus = scrollPos + 73;
      if (
          refElement.offsetTop <= scrollTopMinus &&
          refElement.offsetTop + refElement.offsetHeight > scrollTopMinus
      ) {
        document.querySelector(".page-scroll").classList.remove("active");
        currLink.classList.add("active");
      } else {
        currLink.classList.remove("active");
      }
    }
  }

  window.document.addEventListener("scroll", onScroll);

  //===== close navbar-collapse when a  clicked
  // let navbarToggler = document.querySelector(".navbar-toggler");
  // const navbarCollapse = document.querySelector(".navbar-collapse");
  //
  // document.querySelectorAll(".page-scroll").forEach((e) =>
  //     e.addEventListener("click", () => {
  //       navbarToggler.classList.remove("active");
  //       navbarCollapse.classList.remove("show");
  //     })
  // );
  // navbarToggler.addEventListener("click", function () {
  //   navbarToggler.classList.toggle("active");
  // });

  //====== counter up
  const cu = new counterUp({
    start: 0,
    duration: 2000,
    intvalues: true,
    interval: 100,
    append: "k",
  });
  cu.start();

  //======== tiny slider for clients
  // tns({
  //   container: ".testimonial-active",
  //   autoplay: true,
  //   autoplayTimeout: 5000,
  //   autoplayButtonOutput: false,
  //   mouseDrag: true,
  //   gutter: 24,
  //   nav: true,
  //   navPosition: "bottom",
  //   controls: false,
  //   controlsText: [
  //     '<i class="lni lni-chevron-left"></i>',
  //     '<i class="lni lni-chevron-right"></i>',
  //   ],
  //   items: 1,
  //   responsive: {
  //     768: {
  //       items: 2,
  //     },
  //     992: {
  //       items: 3,
  //     },
  //   },
  // });

  //=====  WOW active
  new WOW().init();

