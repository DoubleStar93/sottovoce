//! Functions to toggle the logos

function hideBlackLogo() {
  $(".global-navbar #white_logo").show();
  $(".global-navbar #black_logo").hide();
}

function hideWhiteLogo() {
  $(".global-navbar #white_logo").hide();
  $(".global-navbar #black_logo").show();
}

//! Nav Scroll Function

//! Hide Book Now Button on Load

$(document).ready(function () {
  if ($(window).width() < 1024) {
    $("#topbooknow").show();
  }
});

if ($(window).width() < 1024) {
  $(".go-back-text").click(function () {
    $("#topbooknow").show();
    $(".navbar-nav").not(".cntplink").show();
  });

  $("#loginMenuButton").click(function () {
    $("#topbooknow").hide();
    $(".navbar-nav").not(".cntplink").hide();
  });
  $("#nav-main .navbar-toggler .fa-times").click(function () {
    $("#topbooknow").show();
    $(".navbar-nav").not(".cntplink").show();
  });
}
$(window).scroll(function () {
  var scroll = $(window).scrollTop();

  if (scroll >= 100) {
    $("#nav-main").addClass("darkHeader");

    if (page.HOME_PAGE) {
      $(".navbar-nav.rightlinks").addClass("show");
    } else {
      $("#nav-main #topbooknow").removeClass("secondary-btn");
    }
    hideWhiteLogo();
  } else {
    $("#nav-main").removeClass("darkHeader");

    if (page.HOME_PAGE) {
      $(".navbar-nav.rightlinks").removeClass("show");
    }
    hideBlackLogo();
  }
});

//! Navbar Hover State

if (
  $("#nav-main").hasClass("internal-nav") &&
  $("#nav-main").not(".darkHeader")
) {
  // $("#nav-main #topbooknow").addClass("secondary-btn").css("opacity", "1");
  $("#nav-main").hover(function () {
    if ($(this).is(".darkHeader")) {
      //   ?Do Nothing
    } else {
      $("#topbooknow").toggleClass("secondary-btn");
    }
  });
}

// ! Code For Dropdowns
if ($(window).width() >= 1024) {
  $(
    ".navbar-collapse .navbar-nav > .menu-item-has-children, .login-dropdown "
  ).on("hidden.bs.dropdown", function () {
    var scroll = $(window).scrollTop();
    if (scroll <= 0) {
      $("#nav-main").removeClass("darkHeader");
      hideBlackLogo();
    } else {
      $("#nav-main").addClass("darkHeader");
    }
    $("body").removeClass("overflow-hidden");
  });
  $(
    ".navbar-collapse .navbar-nav > .menu-item-has-children ,.login-dropdown"
  ).on("show.bs.dropdown", function () {
    $("#nav-main").addClass("darkHeader");
    $("body").addClass("overflow-hidden");
    hideWhiteLogo();
  });
}

$("#nav-main .navbar-toggler").click(function () {
  $("#nav-main").toggleClass("menu-open");

  if (!$("#nav-main").hasClass("darkHeader")) {
    $(".navbar-brand .logo").toggle();
  }

  $("html,body").toggleClass("overflow-hidden");
});

$(".global-home-link-dropdown-box").on("show.bs.dropdown", function () {
  $("html,body").addClass("overflow-hidden");
});

$(".global-home-link-dropdown-box").on("hide.bs.dropdown", function () {
  $("html,body").removeClass("overflow-hidden");
});
document.addEventListener("DOMContentLoaded", function () {
  const navElement = document.querySelector("#nav-main.fixed-top");

  if (navElement) {
    navElement.classList.add("darkHeader");
    hideWhiteLogo();

    const observer = new MutationObserver(() => {
      if (!navElement.classList.contains("darkHeader")) {
        navElement.classList.add("darkHeader");
        hideWhiteLogo();
      }
    });

    observer.observe(navElement, {
      attributes: true,
      attributeFilter: ["class"],
    });
  }
});
