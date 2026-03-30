<?php
declare(strict_types=1);
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/includes/SunsetForecast.php';
require_once __DIR__ . '/includes/NextSunset.php';

$mobeePageUrl = appEnv('MOBEE_PAGE_URL', '');
$currentLocale = appCurrentLocale();
$nextSunsetCountdown = (new NextSunset(SunsetForecast::fromEnv()))->resolve();
?>
<!doctype html>
<html lang="<?= htmlspecialchars($currentLocale, ENT_QUOTES) ?>">


<?php include __DIR__ . '/pages/_partials/head.php'; ?>

<body class="sottovoce-luxury page-template page-template-templates page-template-individual-home-custom-template page-template-templatesindividual-home-custom-template-php page page-id-3739 page-parent page-child parent-pageid-662">
  <!-- Preloader -->
  <!-- Preloader End -->
  <div id="bgHalosHome" class="bg-halos-home" aria-hidden="true"></div>
  <div id="page" class="site">

    <script>
      ICL = <?= json_encode($currentLocale, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) ?>;
      RECAPTCHA_SITE_KEY = "6Ld_JNIbAAAAAPu9Dbv8WgBHfIYmdKBzNh-7w72X";
      MOBEE_PAGE_URL = <?= json_encode($mobeePageUrl, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) ?>;
    </script>

    


<?php include __DIR__ . '/pages/_partials/header.php'; ?><!-- #masthead -->
<style>
@media (min-width: 992px) {
  :lang(ar) .global-home-link-dropdown-box .dropdown-menu li {
    padding: 10px 5px 13px 20px;
  }
}

@media (min-width: 1200px) {
  :lang(ar) .global-home-link-dropdown-box .dropdown-item.current-menu-item::before {
    top: 0%;
    border-right: unset;
    transform: translateY(10px);
    font-weight: 600;
  }

  :lang(ar) .global-home-link-dropdown-inner li.dropdown-item:not(.hotel-nav-sub-heading):hover::before {
    border-right: unset;
  }

}

@media (min-width: 1200px) {
  .hotelsandresortsmenu li.dropdown-item:not(.hotel-nav-sub-heading):hover::before {
    content: "";
    position: absolute;
    left: -10px;
    top: 50%;
    transform: translateY(-50%);
    border-left: 6px solid black;
    border-top: 6px solid transparent;
    border-bottom: 6px solid transparent;
  }

  :lang(ar) .hotelsandresortsmenu li.dropdown-item:not(.hotel-nav-sub-heading):hover::before {
    border-right: 6px solid black !important;
    border-left: unset !important;
  }
}

.hotelsandresortsmenu .dropdown-item.current-menu-item {
  position: relative;
}

:lang(ar) .hotelsandresortsmenu .dropdown-item.current-menu-item::before {
  content: "";
  position: absolute;
  right: -10px;
  top: 50%;
  transform: translateY(-50%);
  border-right: 6px solid black !important;
  border-left: unset !important;
  border-top: 6px solid transparent;
  border-bottom: 6px solid transparent;
}

.hotelsandresortsmenu .dropdown-item.current-menu-item::before {
  content: "";
  position: absolute;
  left: -10px;
  top: 50%;
  transform: translateY(-50%);
  border-left: 6px solid black;
  border-right: unset !important;
  border-top: 6px solid transparent;
  border-bottom: 6px solid transparent;
}

@media screen and (max-width: 998px) {
  .global-home-link-dropdown-inner-box .navbar-nav .dropdown-item.current-menu-item::before {
    top: 20px;
  }
}

@media (max-width: 991px) {
  :lang(ar) .global-home-link-dropdown-inner-box .navbar-nav li {
    padding-right: 15px;
  }
}

#nav-main .right-nav-container {
  max-width: 300px !important;
}

@media (min-width: 1200px) {
  /* .manageBooking-global.manageBooking-desktop {
right: 70px !important;
}

:lang(ar) .manageBooking-global.manageBooking-desktop.managebooking-individual {
right: unset !important;
left: 55px;
} */
}

@media screen and (min-width: 1300px) {
  .wpml-ls-legacy-dropdown-click a {
    padding: 0 22px;
  }
}


@media screen and (max-width: 998px) {

  .dropdown-item.selected {
    font-weight: 600 !important;
    position: relative;
  }

  .dropdown-item.selected::before {
    content: "";
    position: absolute;
    left: -10px;
    top: 50%;
    transform: translateY(-50%);
    border-left: 6px solid black;
    border-top: 6px solid transparent;
    border-bottom: 6px solid transparent;
  }

  #bootscore-navbar-collapsedd {
    max-height: 95vh;
    overflow-y: auto;
    overflow-x: hidden;
    padding-bottom: 24px !important;
    box-sizing: border-box;
  }

  #bootscore-navbar-collapsedd .dropdown-menu,
  #bootscore-navbar-collapsedd .hotel_resorts_dropdown,
  #bootscore-navbar-collapsedd .container {
    max-width: 100%;
    overflow-x: hidden;
  }
}


/* @media (min-width: 1202px) and (max-width: 1252px) {
.manageBooking-global.manageBooking-desktop {
right: 55px !important;
}
} */

@media (min-width: 992px) and (max-width: 1140px) {
  .managebooking-individual {
    color: white !important;
  }
}

nav.global-navbar.internal-nav .language-selector .wpml-ls-item-tr {
  display: none;
}

@media (max-width: 1199px) {
  .individual-home-navbar {
    z-index: 1000 !important;
  }

  :lang(ar) #responsive-navbar-flex {
    margin-inline-start: 20px
  }

  :lang(ar) #right-side-elements {
    margin-inline-start: 20px
  }
}

@media (max-width: 600px) {
  .navbar-expand-xl .navbar-nav .nav-link {
    padding-inline-start: 0 !important;
  }

  #right-side-elements {
    margin-bottom: 0;
    padding-bottom: 16px;
  }
}


.modified-divider-vm {
  border-bottom: 1px solid rgba(0, 0, 0, 0.1);
  width: 90vw;
  margin: 0 auto;
  padding-bottom: 25px;

}

.view-all-btn-adjustment {
  margin-bottom: 30px;
  margin-top: 30px;
  width: 250px;
}


#topbooknow {
  position: relative;
  bottom: -15px;
  right: 0;
}

:lang(ar) .darkHeader .manageBooking-global.manageBooking-desktop {
  right: unset !important;
  left: 55px;
}




:lang(ar) .manageBooking-global.manageBooking-desktop.managebooking-individual {
  right: unset;
  left: 180px;
}

@media (min-width: 992px) {
  :lang(ar) .global-home-link-dropdown {
    left: 40px !important;
  }

  :lang(ar) .global-home-link-dropdown-box {
    right: auto;
    left: 0;
  }
}

.whatsapp-icon-mobile .nav-link {
  color: white;
}
</style>
<script>
//script for controlling opening of the dropdown
document.addEventListener("DOMContentLoaded", function() {
  const togglerButton = document.querySelector('.navbar-toggler');
  const collapseElement = document.querySelector('.bootstrap-collapse-navbar');
  const navbar = document.querySelector('.navbar'); // Select the navbar
  let addedStyle = null; // To keep track of dynamically added style

  if (togglerButton && collapseElement && navbar) {

    togglerButton.addEventListener('click', function() {

      if (navbar.classList.contains('menu-open')) {

        const headerBottomLine = document.querySelector('.header-bottom-line-IBU');
        if (headerBottomLine) {
          headerBottomLine.classList.add('menus-open'); // Add class when menus are open
        }

        if (!collapseElement.classList.contains('show')) {

          collapseElement.style.display = 'block';

          addedStyle = document.createElement('style');
          addedStyle.innerHTML = `
.collapse:not(.show) {
display: block !important;
}
@media (max-width: 1199px) {
#work-area {
display:block !important
}

`;

          document.head.appendChild(addedStyle);

        } else {

          collapseElement.style.display = '';
          if (addedStyle) {
            addedStyle.remove();
            addedStyle = null;
          }
        }
      } else {

        const headerBottomLine = document.querySelector('.header-bottom-line-IBU');
        if (headerBottomLine) {
          headerBottomLine.classList.remove('menus-open'); // Add class when menus are open
        }
        if (addedStyle) {
          addedStyle.remove();
          addedStyle = null;
        }
      }
    });
  } else {
    console.error("Toggler button, collapse element, or navbar not found.");
  }
});
//script for adding CTA

document.addEventListener("DOMContentLoaded", function() {
  function adjustDropdownMargin() {
    if (window.innerWidth > 1200) {
      const menuItem = document.querySelector('.static-area');
      if (menuItem) {
        const rect = menuItem.getBoundingClientRect();
        const isRTL = window.getComputedStyle(document.documentElement).direction === 'rtl';

        let distanceFromStart = isRTL ? (window.innerWidth - rect.right + 12) : (rect.left + 12);


        const dropdownElement = document.querySelector(
          '[id^="menu-item-"] #hotelList__dropdown .hotel_resorts_dropdown'
        );
        if (dropdownElement) {
          dropdownElement.style.marginInlineStart = distanceFromStart + 'px';
        }
      } else {
        console.error('Element with class "static-area" not found');
      }
    }
  }



  function handleDropdowns() {
    const dropdownMenus = document.querySelectorAll(
      '.navbar-nav .menu-item-has-children .dropdown-menu');
    const navbar = document.querySelector('#nav-main.navbar');
    const newBookingWidget = document.querySelector('.new-booking-widget');
    const dropdownToggles = document.querySelectorAll('.navbar-nav .menu-item-has-children > a');

    let isAnyMenuOpen = false;
    requestAnimationFrame(() => {
      dropdownMenus.forEach(function(menu) {
        if (menu.classList.contains('show')) {
          isAnyMenuOpen = true;
        }
      });

      let languageSwitcherOpen = false;

      const languageSwitcher = document.querySelector(".js-wpml-ls-sub-menu.wpml-ls-sub-menu");

      if (languageSwitcher) {

        const isVisible = getComputedStyle(languageSwitcher).visibility === "visible";

        if (isVisible) {

          languageSwitcherOpen = true; // Set the state to true if visible
        } else {

        }
      }

      // Toggle dark header and logos based on dropdown state
      if (isAnyMenuOpen || languageSwitcherOpen) {
        navbar.classList.add('darkHeader');


        // Set z-index to allow dropdowns to appear over the widget
        if (newBookingWidget & !languageSwitcherOpen) {
          newBookingWidget.style.setProperty('z-index', 'unset', 'important');
        }

      } else {
        const scroll = window.pageYOffset || document.documentElement.scrollTop;
        if (scroll > 0) {
          navbar.classList.add('darkHeader');
        } else {
          navbar.classList.remove('darkHeader');
        }

        // Reset z-index to default when dropdowns are closed
        if (newBookingWidget) {
          newBookingWidget.style.setProperty('z-index', '999', 'important');
        }
        //disable scrolling
        document.body.classList.remove('overflow-hidden');
      }
    });
  }

  function applyHeaderStateOnScroll() {
    const navbar = document.querySelector('#nav-main.navbar');
    if (!navbar) return;

    const scroll = window.pageYOffset || document.documentElement.scrollTop;
    if (scroll > 0) {
      navbar.classList.add('darkHeader');
    } else {
      navbar.classList.remove('darkHeader');
    }
  }

  if (window.innerWidth > 1200) {
    //adjustDropdownMargin();
  }
  handleDropdowns();
  applyHeaderStateOnScroll();
  window.addEventListener('scroll', applyHeaderStateOnScroll, { passive: true });

  window.addEventListener('resize', function() {
    if (window.innerWidth > 1200) {
      //adjustDropdownMargin();
    }
    handleDropdowns();
  });

  document.addEventListener('click', function(event) {
    if (window.innerWidth > 1200) {
      handleDropdowns();

      const clickedListItem = event.target.closest('li');
      if (clickedListItem) {
        //  const dropdownMenu = clickedListItem.querySelector('.dropdown-menu');
        //  if (dropdownMenu) {
        //    dropdownMenu.classList.toggle('show');
        //  }
        handleDropdowns();
      }
    }
  });


  if (window.innerWidth > 1200) {
    document.body.addEventListener('mouseover', function() {
      handleDropdowns();
    });
  }
});



//script to add spacing
document.addEventListener('DOMContentLoaded', function() {

  const isRTL = document.documentElement.getAttribute('dir') === 'rtl';
  const firstNavItemDropdown = document.querySelector('.static-area .nav-item.dropdown');

  if (firstNavItemDropdown) {
    const firstDropdownMenu = firstNavItemDropdown.querySelector('ul.dropdown-menu');
    if (firstDropdownMenu) {
      firstDropdownMenu.classList.add('first-element-hotel-list');
    }
  }

  const navDropdowns = document.querySelectorAll('.nav-item.dropdown.hotelsandresortsmenu');
  const newBookingWidget = document.querySelector('.new-booking-widget');


  navDropdowns.forEach(dropdown => {

    const toggle = dropdown.querySelector('.dropdown-toggle');
    const navbatogglerButton = dropdown.querySelector('.navbar-toggler')
    if (toggle || navbatogglerButton) {
      toggle.addEventListener('click', function(event) {
        event.preventDefault();
        setTimeout(() => {
          checkDropdownState(dropdown);
        }, 100);
      });
    } else {

    }
  });
  const navbarTogglerButton = document.querySelector('.navbar-toggler');

  if (navbarTogglerButton) {
    navbarTogglerButton.addEventListener('click', function(event) {
      navDropdowns.forEach(dropdown => {
        setTimeout(() => {
          checkDropdownState(dropdown);
        }, 100);
      });
    });
  }




  //function to add CTA
  function addCTAElements(menu, lang) {

    // Check if the CTA button already exists
    if (!menu.querySelector('.view-all-btn')) {

      const divider = document.createElement('div');
      divider.classList.add('modified-divider-vm');

      const buttonContainer = document.createElement('div');
      buttonContainer.classList.add('text-center', 'cta-buttons-redirection');

      const viewMoreButton = document.createElement('a');
      viewMoreButton.classList.add('btn', 'btn-outline-dark', 'view-all-btn',
        'view-all-btn-adjustment');

      // Dynamically set and log href based on language
      viewMoreButton.href = "/" + ICL + "/destinations/";
      viewMoreButton.textContent = view_all_hotel;

      buttonContainer.appendChild(divider);
      buttonContainer.appendChild(viewMoreButton);
      menu.appendChild(buttonContainer);
      // disable scroll
      document.body.classList.add('overflow-hidden');
    }
  }

  //function to add CTA  based on language
  function checkDropdownState(dropdown) {

    const menu = dropdown.querySelector('.dropdown-menu');

    if (menu.classList.contains('show') && menu.classList.contains(
        'first-element-hotel-list')) {
      if (newBookingWidget) {
        newBookingWidget.style.setProperty('z-index', 'unset', 'important');
      }
      let lang = document.documentElement.lang || 'en';
      if (lang === 'ru-ru') {
        lang = 'ru';
      } else if (lang === 'de-de') {
        lang = 'de';
      } else if (lang === 'fr-fr') {
        lang = 'fr';
      }

      addCTAElements(menu, lang);

    } else {
      const buttonContainer = menu.querySelector('.text-center');
      if (buttonContainer) {
        menu.removeChild(buttonContainer);
      }
      newBookingWidget.style.setProperty('z-index', '999', 'important');
      if (menu.classList.contains('show')) {
        // disable scroll
        document.body.classList.add('overflow-hidden');
      }
      document.body.classList.remove('overflow-hidden');

    }
  }

});


if (window.innerWidth >= 1024) {

  const dropdownElements = document.querySelectorAll(
    '.navbar-collapse .navbar-nav > .menu-item-has-children, .login-dropdown');

  dropdownElements.forEach(element => {
    element.addEventListener('hidden.bs.dropdown', function() {
      const scroll = window.pageYOffset || document.documentElement.scrollTop;
      const navMain = document.getElementById('nav-main');

      if (scroll <= 0) {
        navMain.classList.remove('darkHeader');
        hideBlackLogo();
      } else {
        navMain.classList.add('darkHeader');
      }
      document.body.classList.remove('overflow-hidden');
    });

    element.addEventListener('show.bs.dropdown', function() {
      document.getElementById('nav-main').classList.add('darkHeader');
      document.body.classList.add('overflow-hidden');
      hideWhiteLogo();
    });
  });
}

document.querySelector('#nav-main .navbar-toggler').addEventListener('click', function() {
  const navMain = document.getElementById('nav-main');
  navMain.classList.toggle('menu-open');
  navMain.classList.toggle('individual-home-navbar');
  document.querySelector('#dropdownMenuButton1').classList.toggle('darkgrey');

  document.documentElement.classList.toggle('overflow-hidden');
  document.body.classList.toggle('overflow-hidden');
});

const globalHomeLinkDropdownBox = document.querySelector('.global-home-link-dropdown-box');
if (globalHomeLinkDropdownBox) {
  const navMain = document.getElementById('nav-main');
  globalHomeLinkDropdownBox.addEventListener('show.bs.dropdown', function() {
    document.documentElement.classList.add('overflow-hidden');
    document.body.classList.add('overflow-hidden');
    navMain.classList.add('individual-home-navbar');
  });

  globalHomeLinkDropdownBox.addEventListener('hide.bs.dropdown', function() {
    document.documentElement.classList.remove('overflow-hidden');
    document.body.classList.remove('overflow-hidden');
    navMain.classList.remove('individual-home-navbar');
  });
}
</script>
    <script>
      CURRENT_HOTEL_SLUG = 'address-sky-view';
      var ICL = "en";
      var SSO_CLIENT_ID = "znhNJo7GaCOVfCCEoyIP1HjII8jPL3w84zoluNQQ"
      var SSO_REDIRECT_URI = "https://www.addresshotels.com/en/my-dashboard"
    </script>



    <div class="opac z11"></div>


    <style>
      .container {
        max-width: 1364px;
      }
    </style>

    

<script>
   jQuery(document).ready(function() {
      $('a[rel="noopener noreferrer"]').removeAttr("rel");
   });
</script>



<!----------------------------- Specific Styles and Scripts------------------------------->

<script>
   $(document).ready(function() {

      // window.onscroll = function () {
      //     stickyMenuFunction()
      // };

      // // init Flickity
      // var $carousel = $('.carousel').flickity();

      // //var flkty = $carousel.data('flickity');
      // function stickyMenuFunction() {
      //    if (window.pageYOffset >= 1850 && window.pageYOffset <= 2560) {
      //        // alert('flickity');
      //        $carousel.flickity('next');
      //    }
      // }


   });
</script>




<!-- <header id="top" class="panel snapdiv" data-section-name="top">

     

    
  
</header> -->


<!--end booking --------------------------------------------------------->
<div id="global__individual__template">
   <!-- removed hotel ID 31 for Address Marassi Golf Resort as per request on mail from Sathish and Omkar -->
  <!-- <script>
  function initQuickText() {
    if (window.quickTextDidInit) {
      return false;
    }
    window.quickTextDidInit = true; // flag to ensure script does not get added to DOM more than once.

    var scriptTag = document.createElement('script');
    scriptTag.src = 'https://cdn.quicktext.im/widget.min.js';
    scriptTag.setAttribute("type", "text/javascript");
    scriptTag.setAttribute("async", true);
    scriptTag.setAttribute("data-license", "8QHsG-4I9i");
    document.body.appendChild(scriptTag);
    $(document.body).prepend('<noscript class="quicktext-noscript"></noscript>');
    $(".quicktext-noscript").html(
        `<span title="Hotel AI Chabot and Guest Communication">Quicktext hotel chatbot</span>`
    );
  }

  function initQuickTextOnEvent(event) {
    initQuickText();
    event.currentTarget.removeEventListener(event.type, initQuickTextOnEvent); // remove the event listener that got triggered
  }
  document.addEventListener('scroll', initQuickTextOnEvent);
  document.addEventListener('mousemove', initQuickTextOnEvent);
  document.addEventListener('touchstart', initQuickTextOnEvent);
</script> -->



<!-- <div class="important-msg d-flex align-items-center justify-content-between text-lg-center px-lg-5" id="imp-msge"> -->
<!-- <p class="my-0 mx-auto">
       Ù†Ø¸Ø±Ù‹Ø§ Ù„Ø£Ø¹Ù…Ø§Ù„ Ø§Ù„ØµÙŠØ§Ù†Ø© ØŒ Ø³ÙŠÙƒÙˆÙ† Ø§Ù„Ù…Ø·Ø¹Ù… Ù…ØºÙ„Ù‚ Ù…Ù† Ù£ Ø¥Ù„Ù‰ 8 Ù…Ø§ÙŠÙˆ2025.Ø®Ù„Ø§Ù„ Ù‡Ø°Ù‡ Ø§Ù„ÙØªØ±Ø©ØŒ ÙŠÙ…ÙƒÙ†ÙƒÙ… Ø§Ù„Ø§Ø³ØªÙ…ØªØ§Ø¹ Ø¨ÙˆØ¬Ø¨Ø§ØªÙƒÙ… ÙÙŠ  SoCal ÙÙŠ Ø§Ù„Ø£ÙˆÙ‚Ø§Øª Ø§Ù„ØªØ§Ù„ÙŠØ© :Ø§Ù„Ø¥ÙØ·Ø§Ø± Ù…Ù† 7:00 Ø¥Ù„Ù‰ 11:00 ØµØ¨Ø§Ø­Ù‹Ø§ ,Ø§Ù„ØºØ¯Ø§Ø¡ Ù…Ù† 12:00 Ø¥Ù„Ù‰ 5:00 Ù…Ø³Ø§Ø¡Ù‹, Ø§Ù„Ø¹Ø´Ø§Ø¡ Ù…Ù† 6:00 Ø¥Ù„Ù‰ 10:30 Ù…Ø³Ø§Ø¡Ù‹. Ù†Ø´ÙƒØ±ÙƒÙ… Ù…Ù‚Ø¯Ù…Ù‹Ø§ Ø¹Ù„Ù‰ Ø­Ø³Ù† ØªÙÙ‡Ù…ÙƒÙ… ÙˆÙ†ØªØ·Ù„Ø¹ Ø¥Ù„Ù‰ Ø§Ù„ØªØ±Ø­ÙŠØ¨ Ø¨ÙƒÙ… ÙÙŠ Ø§Ù„Ù…Ø³ØªÙ‚Ø¨Ù„.
      </p> -->
<!-- <div>
        <p class=" my-0 mx-auto">Due to scheduled maintenance, The Restaurant will be closed from the 3rd till the 8th of May 2025. In the meantime, you can enjoy all your meals at SoCal â€“ Breakfast: 7:00â€“11:00 AM, Lunch: 12:00â€“5:00 PM, and Dinner: 6:00â€“10:30 PM. Thank you for your understanding, and we look forward to welcoming you back soon!
        </p>
      </div> -->
<!-- <div>
      <a href="#" class="btn close-msg"><i class="fa fa-times"></i></a>
    </div>
  </div> -->




<style>
  #liveToastBtn {
    position: fixed;
    bottom: 20px;
    z-index: 1040;
    right: 20px;
  }

  .important-msg {
    position: absolute;
    z-index: 1050;
    top: 0;
    width: 100%;
    background-color: black;
    color: #fff;
    padding: 10px 21px;
    text-align: center;
    padding-bottom: 0 !important;
  }

  .important-msg p {
    font-size: 15px;
    padding-top: 10px;
    padding-bottom: 10px;
  }

  :lang(ar) .important-msg p {
    padding-top: 20px;
    padding-bottom: 10px;
  }

  .important-msg a {
    color: #fff;
    text-decoration: underline;
    font-size: 17px;
  }

  .important-msg p a {
    color: #fff;
    text-decoration: underline;
  }

  .important-msg .btn {
    color: #fff;
  }

  @media (max-width:768px) {
    .important-msg {
      flex-direction: row;
      align-items: start !important;
      text-align: center;
    }

    .important-msg p,
    :lang(ar) .important-msg p {
      padding-top: 0px;
    }
  }
</style>
<script>
  $(document).ready(() => {
    calculateTop()
    $('.close-msg').click(function() {
      $('#imp-msge').removeClass('d-flex').addClass('d-none');
      calculateTop();
    })

    function calculateTop() {
      if (($('#imp-msge').length)) {
        if (!$('#imp-msge').hasClass('d-none')) {
          var disclaimerHeight = $('#imp-msge').outerHeight(true);

          var windowHeight = $(window).height();

          var adjustedHeight = windowHeight - disclaimerHeight;
          $('.fullscreen-hero-banner-booking-widget').css('margin-top', disclaimerHeight);

          if ($(window).width() > 576) {
            $('.fullscreen-hero-banner-booking-widget').css('height', adjustedHeight + 'px');
            $('#hero-vid').css('height', adjustedHeight + 'px');
          } else {
            $('#bootscore-navbar-collapsedd').css({
              'margin-top': '15px',
              'max-height': '85vh'
            });
            $('#right-side-elements').css('margin-bottom', '200px');
            $('.container.hotel_resorts_dropdown').css('margin-bottom', '150px');
            $('.navbar.menu-open').css({
              'overflow-y': '',
              'overflow-x': ''
            });
          }
        } else {

          $('.fullscreen-hero-banner-booking-widget').css({
            'margin-top': '',
            'height': ''
          });
          $('#hero-vid').css('height', '');
        }
      }
    }


    $(window).on('resize', function() {
      calculateTop();
    });
  });
</script>

<?php include __DIR__ . '/pages/_partials/hero_intro_video.php'; ?>
<script type="text/javascript">
  // Sing-in & sign-up page messaages


  var required_text = "This field is required";
  var mob_already_exist = "Looks like your mobile number already exists";
  var ubymaartext = "Use your U by Emaar credentials to sign in.";
  var welbacktext = "Welcome Back";
  var signintext = "Sign In";
  var valid_otp = "Please Enter valid otp";
  var error_only_digits = "Mobile number can only contain digits";
  var error_min_dig_7 = "Minimum allowed digits is 7";
  var error_min_dig_10 = "Maximum allowed digits is 15";
  var strong_pwd = "Please enter a strong password";
  var valid_email = "Please enter a valid Email.";
  var valid_name = "Please enter valid name.";
  var success_account_created = "Thank you! your account had been successfully created.";
  var opt_resent = "OTP has been resent!";

  // Sing-in & sign-up page messaages

  // Sing-in & sign-up Api error page messaages

  var security_token_error = "Could not set security token. Please reload and try again.";
  var server_reach_error = "Could not reach server. Please try again later.";
  var unknown_error = "We are facing an unknown error. Please try again later.";

  // Sing-in & sign-up Api error page messaages


  // Booking Modal & Widget Month&Day

  var enter_code_var = "Enter code";
  var code_applied_var = "Code applied";
  var codes_applied_var = "Codes applied";
  var hotel_modalTitle = "Select a hotel and check availability";
  var modal_title = "Search available hotels for this offer";
  var modal_title_rooms = "Select your check-in & check-out dates";
  var loading_price_var = "Loading all prices";
  var price_var = "All prices are displayed in";
  var child_text = "Child";
  var children_text = "Children";
  var adult_text = "Adult";
  var adults_text = "Adults";
  var nightVar = "Night";
  var nightsVar = "Nights";
  var minLength_error_message = "The selected dates requires a minimum of";
  // var minLength_error_message = "This offer requires a reservation of at least";
  var maxLength_error_message = "The selected dates requires a maximum of";
  var nights_stay_var = "nights stay.";
  // var nights_stay_var = "nights.";
  var select_these_dates_var = "Select these dates";
  var select_a_checkout_date_var = "Select a checkout date";
  var all_hotels_var = "All Hotels";

  //multiroom changes
  var room_var = "Room";
  var add_room_var = "Add Room";
  var view_detail_var = "View Detail";
  var hide_detail_var = "Hide Detail";


  // Months
  var month_january = "January";
  var month_february = "February";
  var month_march = "March";
  var month_april = "April";
  var month_may = "May";
  var month_june = "June";
  var month_july = "July";
  var month_August = "August";
  var month_september = "September";
  var month_october = "October";
  var month_november = "November";
  var month_december = "December";

  // var month_sunday ="";
  // var month_monday ="";
  // var month_tuesday ="";
  // var month_wednesday ="";
  // var month_thursday ="";
  // var month_friday ="";
  // var month_saturday ="";


  // dine modal
  var people_var = "people";
  var seating_var = "Seating";
  var reservDetails = "Reservation Details";
  var email_var = "Please enter a valid email address";
  var none_var = "None";

  // Booking Modal & Widget Month&Day


  // ModifyBooking Messages

  var invalid_confirmation = "Invalid Confirmation Number";
  var invalid_last_name = "Invalid Last Name";
  var select_hotel_name = "Select hotel";
  var select_resturant_name = "Select resturant";
  var invalid_email = "Invalid Email";
  // ModifyBooking Messages
  var no_upcoming_booking = "No Upcoming Bookings";

  // Akshay | 04-08-22
  var time_format;

  if (ICL == 'de') {
    time_format = 'HH:mm [Uhr]';
  } else if (ICL == 'fr' || ICL == 'ru') {
    time_format = 'HH:mm';
  } else {
    time_format = 'h:mm a';
  }


  // fetch-Global-offers-page translation
  var ube_member_only_text = "U By Emaar Members Only";
  var offer_applied_text = "Offer Applied";
  var offer_name_text = "Offer Name";

  // strings need to be translated for backend


  var hotelandresorts_Text = "Hotels & Resorts";

  // For new booking widget
  var checkin_text = "Check In - Check Out";
  var checkinmobile_text = "Check In - Out";
  var calendar_minerror = "The selected dates requires a minimum of 1 nights stay.";
  var checkout_unavail = "This date is unavailable as a Check-out Date";
  var checkin_unavail = "This date is unavailable as a Check-in Date";
  var view_all_hotel = "View All Hotels";

  var from_text = "from";
  var soldout_text = "Sold Out";
  var view_rooms_text = "View Rooms";
  var error_text = "We are having trouble in fetching data right now. Please try again later";


  var view_more_rates = "View More Rates";
  var view_less_rates = "View Less Rates";
  var currency_prefix = "Currency:";
  var hideFilterText = "Hide Filter";
  var moreFilterText = "More Filter";
</script>

<!-- ""; -->
<script>
  modal_title = "Search available hotels for this offer";
  preset_hotel_id = "18";
  preset_hotel_name = "Address Sky View";
  templateName = "templates/individual-home-custom-template.php";
  requestArray = '[]';
  hotel_timezone_offset = [{"IbuId":"61","timezone_offset":240},{"IbuId":"54","timezone_offset":240},{"IbuId":"52","timezone_offset":240},{"IbuId":"51","timezone_offset":240},{"IbuId":"42","timezone_offset":240},{"IbuId":"50","timezone_offset":240},{"IbuId":"","timezone_offset":240},{"IbuId":"40","timezone_offset":240},{"IbuId":"38","timezone_offset":180},{"IbuId":"35","timezone_offset":240},{"IbuId":"29","timezone_offset":240},{"IbuId":"4","timezone_offset":240},{"IbuId":"31","timezone_offset":120},{"IbuId":"18","timezone_offset":240},{"IbuId":"17","timezone_offset":240},{"IbuId":"2","timezone_offset":240},{"IbuId":"5","timezone_offset":240},{"IbuId":"3","timezone_offset":240},{"IbuId":"10","timezone_offset":240},{"IbuId":"1","timezone_offset":240}];
  minimun_timezone_offset = 120;
  roomIndex = "";
</script>


<div class="new-booking-widget ibu">
  <div class="widget-ui justify-content-start justify-content-xl-between d-flex position-relative">
          <div class="hotel-selector flex-column justify-content-start d-none widget-border-left" role="button" tabindex="0" data-id="">
        <div class="hotel-selector-title d-flex align-items-center">
                      <!-- <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon pr-1" width="24" height="24" style="width:1em;height:1em;vertical-align:middle;fill:currentColor;overflow:hidden" viewBox="0 0 1024 1024">
              fa-map-marker-alt            </svg> -->
            <i class="fal fa-map-marker-alt pr-2 widget-icons"></i>
                    <span class="hotel-selector-title-text">
            Choose Hotels          </span>
        </div>
        <div class="d-flex justify-content-between flex-row">
          <p class="selected-hotel m-0 mt-1">
            All Hotels          </p>
                  </div>
      </div>
          <div class="date-selector flex-column justify-content-start d-flex w-100 " role="button" tabindex="0" data-date="">
        <div class="date-selector-title d-flex align-items-center">
                      <!-- <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon pr-1" width="24" height="24" style="width:1em;height:1em;vertical-align:middle;fill:currentColor;overflow:hidden" viewBox="0 0 1024 1024">
              fa-calendar            </svg> -->
            <i class="fal fa-calendar pr-2 widget-icons"></i>
                    <span class="date-selector-title-text">
            Dates          </span>
        </div>
        <div class="d-flex justify-content-between flex-row">
          <p class="selected-date m-0 mt-1">
            Check In &#8211; Check Out          </p>
                    <span class="night_var_widget selected-night-count d-none mt-1"></span>
                  </div>
      </div>
          <div class="guest-selector flex-column justify-content-start d-flex w-100 widget-border-left" role="button" tabindex="0" data-guest="">
        <div class="guest-selector-title d-flex align-items-center">
                      <!-- <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon pr-1" width="24" height="24" style="width:1em;height:1em;vertical-align:middle;fill:currentColor;overflow:hidden" viewBox="0 0 1024 1024">
              fa-user-friends            </svg> -->
            <i class="fal fa-user-friends pr-2 widget-icons"></i>
                    <span class="guest-selector-title-text">
            Room and Guests          </span>
        </div>
        <div class="d-flex justify-content-between flex-row">
          <p class="selected-guest m-0 mt-1">
            1 Adult, 0 Child          </p>
                  </div>
      </div>
          <div class="code-selector flex-column justify-content-start d-none d-xl-flex w-100 setwidth widget-border-left" role="button" tabindex="0" data-code="">
        <div class="code-selector-title d-flex align-items-center">
                    <span class="code-selector-title-text">
            Code          </span>
        </div>
        <div class="d-flex justify-content-between flex-row">
          <p class="selected-code m-0 mt-1">
            Enter Code          </p>
                  </div>
      </div>
        <div class="search-button d-none d-xl-flex flex-column justify-content-center w-100">
      <button class="book-outline-luxury home-prenota-btn" type="button" style="border-radius:0 !important;border:1px solid #e3cba5;background:#3c3e21;color:#e3cba5;" onmouseover="this.style.background='#e3cba5';this.style.color='#000000';this.style.border='1px solid #3c3e21';" onmouseout="this.style.background='#3c3e21';this.style.color='#e3cba5';this.style.border='1px solid #e3cba5';" onclick="if (typeof MOBEE_PAGE_URL !== 'undefined' && MOBEE_PAGE_URL) { window.open(MOBEE_PAGE_URL, '_blank', 'noopener,noreferrer'); }">
        <?= htmlspecialchars(label('cta.book', 'Prenota'), ENT_QUOTES) ?>      </button>
    </div>

    <div class="hotel-popup bg-grey py-2 px-4 border d-none">
      <p class="dropdown-item hotel_list_item px-lg-0 mb-2 pb-0" data-id="all" role="button" tabindex="0">
        <!-- <i class="fal fa-map-marker-alt pr-2"></i> -->
        <span>All Hotels</span>
      </p>
      <div class="row">
                              <div class="col-md-8">
                      <div class="body-3 secondary-semibold countryName_heading">
                        United Arab Emirates                      </div>
                      <div class="row no-gutters">
                                                  <div class="individual_hotel_restaurant pr-3 mb-0">
                                                        <div class="body-3 secondary-semibold countryName_subheading">
                              Dubai                            </div>
                                                                                     
                              <p class="dropdown-item hotel_list_item px-lg-0 mb-2 pb-0" data-id="1" role="button" tabindex="0">Address Downtown</p>
                                                         
                              <p class="dropdown-item hotel_list_item px-lg-0 mb-2 pb-0" data-id="2" role="button" tabindex="0">Palace Downtown</p>
                                                         
                              <p class="dropdown-item hotel_list_item px-lg-0 mb-2 pb-0" data-id="4" role="button" tabindex="0">Address Montgomerie</p>
                                                         
                              <p class="dropdown-item hotel_list_item px-lg-0 mb-2 pb-0" data-id="17" role="button" tabindex="0">Address Dubai Mall</p>
                                                         
                              <p class="dropdown-item hotel_list_item px-lg-0 mb-2 pb-0" data-id="42" role="button" tabindex="0">Address Creek Harbour</p>
                                                         
                              <p class="dropdown-item hotel_list_item px-lg-0 mb-2 pb-0" data-id="18" role="button" tabindex="0">Address Sky View, Downtown Dubai</p>
                                                         
                              <p class="dropdown-item hotel_list_item px-lg-0 mb-2 pb-0" data-id="29" role="button" tabindex="0">Address Beach Resort</p>
                                                         
                              <p class="dropdown-item hotel_list_item px-lg-0 mb-2 pb-0" data-id="54" role="button" tabindex="0">Palace Dubai Creek Harbour</p>
                                                      </div>
                                                  <div class="individual_hotel_restaurant pr-3 mb-0">
                                                        <div class="body-3 secondary-semibold countryName_subheading">
                              Fujairah                            </div>
                                                                                     
                              <p class="dropdown-item hotel_list_item px-lg-0 mb-2 pb-0" data-id="40" role="button" tabindex="0">Palace Beach Resort Fujairah</p>
                                                         
                              <p class="dropdown-item hotel_list_item px-lg-0 mb-2 pb-0" data-id="35" role="button" tabindex="0">Address Beach Resort Fujairah</p>
                                                      </div>
                                              </div>
                    </div>
                                  
                <div class="col-md-4">
                                      <div>
                      <div class="body-3 secondary-semibold countryName_heading">
                        Bahrain                      </div>
                      <div class="row no-gutters">
                                                  <div class="individual_hotel_restaurant mb-0">                           
                                                          <p class="dropdown-item hotel_list_item px-lg-0 mb-2 pb-0" data-id="50" role="button" tabindex="0">Address Beach Resort Bahrain</p>
                                                      </div>
                                              </div>
                    </div>
                                      <div>
                      <div class="body-3 secondary-semibold countryName_heading">
                        Egypt                      </div>
                      <div class="row no-gutters">
                                                  <div class="individual_hotel_restaurant mb-0">                           
                                                          <p class="dropdown-item hotel_list_item px-lg-0 mb-2 pb-0" data-id="31" role="button" tabindex="0">Address Marassi Golf Resort</p>
                                                          <p class="dropdown-item hotel_list_item px-lg-0 mb-2 pb-0" data-id="52" role="button" tabindex="0">Address Beach Resort Marassi</p>
                                                          <p class="dropdown-item hotel_list_item px-lg-0 mb-2 pb-0" data-id="61" role="button" tabindex="0">Palace Beach Resort</p>
                                                      </div>
                                              </div>
                    </div>
                                      <div>
                      <div class="body-3 secondary-semibold countryName_heading">
                        Saudi Arabia                      </div>
                      <div class="row no-gutters">
                                                  <div class="individual_hotel_restaurant mb-0">                           
                                                          <p class="dropdown-item hotel_list_item px-lg-0 mb-2 pb-0" data-id="51" role="button" tabindex="0">Address Jabal Omar Makkah</p>
                                                      </div>
                                              </div>
                    </div>
                                      <div>
                      <div class="body-3 secondary-semibold countryName_heading">
                        Turkey                      </div>
                      <div class="row no-gutters">
                                                  <div class="individual_hotel_restaurant mb-0">                           
                                                          <p class="dropdown-item hotel_list_item px-lg-0 mb-2 pb-0" data-id="38" role="button" tabindex="0">Address Istanbul</p>
                                                      </div>
                                              </div>
                    </div>
                          </div>
      </div>
    </div>
    <div class="date-popup bg-grey d-none individualpage_popup ">
      <div class="stayCalendar pt-4 text-center bg-grey d-none">
        <div class=" calendar-error-msg mb-0" role="alert">
          <p>
          <i class="fal fa-exclamation-triangle px-1"></i>
          <span class="error-message"></span>
          </p>
        </div>
      </div>
      <input class="datepicker d-none">
      <p class="prices-text text-end body-4 font-14 mb-3 pr-4 d-none"></p>
    </div>
    <div class="pax-popup bg-grey py-1 d-none border individualpage_popup">
      <input type="hidden" name="rooms" id="no_of_rooms" value="1">
      <div class="rooms px-3 adult-child-dropdown">
        <div class="room" data-room="1">
          <div class="room-header align-items-center d-none mt-3">
            <div class="room-title">Room 1</div>
            <span class="btn-remove-room" aria-label="Remove room">
              <i class="fal fa-trash-alt trash_widget"></i>
            </span>
          </div>
          <div class="guest-counter d-flex justify-content-between align-items-center py-1 my-3">
            <label class="guest-label mb-0">Adult (12+)</label>
            <div class="counter-box d-flex align-items-center">
              <span class="btn_counter ag-minus disabled" data-action="minus">
                <i class="fal fa-minus-circle"></i>
              </span>
              <span class="adult-counter count b4">1</span>
              <span class="btn_counter ag-plus" data-action="plus">
                <i class="fal fa-plus-circle"></i>
              </span>
            </div>
          </div>
          <div class="guest-counter d-flex justify-content-between align-items-center py-1 my-3">
            <label class="guest-label mb-0">Children (4-11)</label>
            <div class="counter-box d-flex gap-1 align-items-center">
              <span class="btn_counter cg-minus disabled" data-action="minus">
                <i class="fal fa-minus-circle"></i>
              </span>
              <span class="child-counter count b4">0</span>
              <span class="btn_counter cg-plus" data-action="plus">
                <i class="fal fa-plus-circle"></i>
              </span>
            </div>
          </div>
        </div>
      </div>
      <div class="addRoomWidget px-3 mt-3 mb-2">
        <div class="roomcircle addroom desktop">
          <i class="fas fa-plus"></i>
          <span>Add a room</span>
        </div>
      </div>
      <div class="book_for_someone_else_row pl-3" style="display:none;">
        <div colspan="4">
          <form class="go-bottom">
            <label class="checkbox book_for_someone_else_label">
              I am booking for someone else.              <input type="checkbox" name="book_for_someone_else_checkbox" id="book_for_someone_else_checkbox">
              <span name="agree" class="geekmark mandatory"></span>
            </label>
          </form>
        </div>
      </div>
    </div>
    <div class="code-popup bg-grey p-4 d-none border stay_promo_dropdown individualpage_popup">
      <div class="promocode-info-box-main">
        <p class="mb-0">Enter Code</p>
        <i class="fal fa-info-circle promocode-box-info-icon"></i>
        <div class="promocode-info-box bg-grey d-none">
          <p>You can apply upto two codes at a time as below combination. e.g.</p>
          <p>IATA +Promo Code </p>
          <p>IATA + Corporate Code</p>
        </div>
      </div>
      <p class="promocode-invalid-message d-none click_error_widget error_label" id="">You can&#8217;t apply more than two codes.</p>
      <p class="promocode-code-warning d-none iata_error_widget error_label" id="">You can&#8217;t apply two codes without IATA code combination.</p>
      <p class="promocode-code-warning d-none group_error_widget error_label" id="">This combination is not valid.</p>
      <hr>
      <ul>
        <!---------------IATA Code desktop--------------------->
        <label class="checkbox IATACheckbox_widget">
          <input type="checkbox" id="chkPassportIATA_widget" class="Checkbox-input chkPassportIATA_widget" autocomplete="off"><span class="geekmark">
          </span>IATA code        </label>

        <div class="promocode-input-code-box promocode-input-code-box-desktop iatacode_input_widget">
          <i class="fas fa-check-circle promocode-validation-icon promocode-valid-icon valid_widget iatacode_valid d-none"></i>
          <i class="fas fa-times-circle promocode-validation-icon promocode-invalid-icon invalid_widget iatacode_invalid d-none"></i>
          <input type="text" placeholder="Enter IATA code" class="iatacode_widget inputfield_widget" autocomplete="off">
          <button class="btn promocode-apply-btn iatacode_apply_btn_widget widget_apply_btn" id="" disabled="">
            <svg class="button-loader d-none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="200px" height="200px" viewbox="0 0 100 100" preserveaspectratio="xMidYMid">
              <circle cx="50" cy="50" fill="none" stroke="#ffffff" stroke-width="10" r="35" stroke-dasharray="164.93361431346415 56.97787143782138" transform="rotate(132.222 50 50)">
                <animatetransform attributename="transform" type="rotate" repeatcount="indefinite" dur="1s" values="0 50 50;360 50 50" keytimes="0;1"></animatetransform>
              </circle>
            </svg>
            Apply          </button>
          <i class="fal fa-trash-alt promocode-trash-icon trash_widget iatacode_trash d-none"></i>
        </div>
        <p class="promocode-invalid-message iatacode_error error_widget d-none"></p>

        <!---------------Corporate Code--------------------->
        <label class="checkbox CorporateCheckbox_widget">
          <input type="checkbox" id="chkPassportCorporate_widget" class="Checkbox-input chkPassportCorporate_widget" autocomplete="off">
          <span class="geekmark"></span>Corporate code        </label>

        <div class="promocode-input-code-box promocode-input-code-box-desktop corporatecode_input_widget">
          <i class="fas fa-check-circle promocode-validation-icon promocode-valid-icon corporatecode_valid valid_widget d-none"></i>
          <i class="fas fa-times-circle promocode-validation-icon promocode-invalid-icon corporatecode_invalid invalid_widget d-none"></i>
          <input type="text" placeholder="Enter corporate code" class="corporatecode_widget inputfield_widget" autocomplete="off">
          <button class="btn promocode-apply-btn corporatecode_apply_btn_widget widget_apply_btn" disabled="">
            <svg class="button-loader d-none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="200px" height="200px" viewbox="0 0 100 100" preserveaspectratio="xMidYMid">
              <circle cx="50" cy="50" fill="none" stroke="#ffffff" stroke-width="10" r="35" stroke-dasharray="164.93361431346415 56.97787143782138" transform="rotate(132.222 50 50)">
                <animatetransform attributename="transform" type="rotate" repeatcount="indefinite" dur="1s" values="0 50 50;360 50 50" keytimes="0;1"></animatetransform>
              </circle>
            </svg>
            Apply          </button>
          <i class="fal fa-trash-alt promocode-trash-icon corporatecode_trash trash_widget d-none"></i>
        </div>
        <p class="promocode-invalid-message corporatecode_error error d-none"></p>
        <!---------------Promo Code--------------------->
        <label class="checkbox promocodeCheckbox PromoCheckbox_widget">
          <input type="checkbox" id="chkPassportPromo_widget" class="Checkbox-input chkPassportPromo_widget" autocomplete="off">
          <span class="geekmark"></span>Promo code        </label>

        <div class="promocode-input-code-box promocode-input-code-box-desktop promocode_input_widget">
          <i class="fas fa-check-circle promocode-validation-icon promocode-valid-icon  valid_widget d-none"></i>
          <i class="fas fa-times-circle promocode-validation-icon promocode-invalid-icon promocode_invalid invalid_widget d-none"></i>
          <input type="text" placeholder="Enter promo code" class="promocode_widget inputfield_widget" autocomplete="off">
          <button class="btn promocode-apply-btn promocode_apply_btn_widget widget_apply_btn" disabled="">
            <svg class="button-loader d-none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="200px" height="200px" viewbox="0 0 100 100" preserveaspectratio="xMidYMid">
              <circle cx="50" cy="50" fill="none" stroke="#ffffff" stroke-width="10" r="35" stroke-dasharray="164.93361431346415 56.97787143782138" transform="rotate(132.222 50 50)">
                <animatetransform attributename="transform" type="rotate" repeatcount="indefinite" dur="1s" values="0 50 50;360 50 50" keytimes="0;1"></animatetransform>
              </circle>
            </svg>
            Apply          </button>
          <i class="fal fa-trash-alt promocode-trash-icon promocode_trash trash_widget d-none"></i>
        </div>
        <p class="promocode-invalid-message promocode_error error d-none"></p>

        <!---------------Group Code--------------------->
        <label class="checkbox groupCheckbox GroupCheckbox_widget">
          <input type="checkbox" id="chkPassportGroup_widget" class="Checkbox-input chkPassportGroup_widget" autocomplete="off">
          <span class="geekmark"></span>Group code        </label>

        <div class="promocode-input-code-box promocode-input-code-box-desktop groupcode_input_widget">
          <i class="fas fa-check-circle promocode-validation-icon promocode-valid-icon groupcode_valid valid_widget d-none"></i>
          <i class="fas fa-times-circle promocode-validation-icon promocode-invalid-icon groupcode_invalid invalid_widget d-none" id=""></i>
          <input type="text" placeholder="Enter group code" class="groupcode_widget inputfield_widget" autocomplete="off">
          <button class="btn promocode-apply-btn groupcode_apply_btn_widget widget_apply_btn" disabled="">
            <svg class="button-loader d-none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="200px" height="200px" viewbox="0 0 100 100" preserveaspectratio="xMidYMid">
              <circle cx="50" cy="50" fill="none" stroke="#ffffff" stroke-width="10" r="35" stroke-dasharray="164.93361431346415 56.97787143782138" transform="rotate(132.222 50 50)">
                <animatetransform attributename="transform" type="rotate" repeatcount="indefinite" dur="1s" values="0 50 50;360 50 50" keytimes="0;1"></animatetransform>
              </circle>
            </svg>
            Apply          </button>
          <i class="fal fa-trash-alt promocode-trash-icon groupcode_trash trash_widget d-none" id=""></i>
        </div>
        <p class="promocode-invalid-message groupcode_error error d-none" id=""></p>
      </ul>
    </div>


    <!-- create a popup for mobnile device -->
    <div class="mobile-popup-wrapper">
      <div class="d-none mobile-hotel-selector">
        <div class="mobile-popup-header">
          <div class="d-flex justify-content-between align-items-center mb-4">
            <p class="mb-0">Select a hotel &amp; check availability</p>
            <span class="close-mobile-popup">
              <i class="fal fa-times"></i>
            </span>
          </div>
          <div class="d-flex align-items-center">
            <i class="fal fa-map-marker-alt pr-2"></i>
            <span class="hotel-selector-title-text">All Hotels</span>
          </div>
        </div>
        <div class="mobile-popup-hotel-body m-3 px-3">
          <p class="dropdown-item hotel_list_item mb-0 px-0" data-id="all" role="button" tabindex="0">
            <!-- <i class="fal fa-map-marker-alt pr-2"></i> -->
            <span>All Hotels</span>
          </p>
                              <!-- <div class="width-75"> -->
                      <div class="body-3 secondary-semibold countryName_heading">
                        United Arab Emirates                      </div>
                      <div class="row no-gutters">
                                                  <div class="individual_hotel_restaurant">
                                                          <div class="body-3 secondary-semibold ">
                                Dubai                              </div>
                                                                                     
                               <p class="dropdown-item hotel_list_item px-lg-0 mb-2 pb-0" data-id="1" role="button" tabindex="0">Address Downtown</p>
                                                         
                               <p class="dropdown-item hotel_list_item px-lg-0 mb-2 pb-0" data-id="2" role="button" tabindex="0">Palace Downtown</p>
                                                         
                               <p class="dropdown-item hotel_list_item px-lg-0 mb-2 pb-0" data-id="4" role="button" tabindex="0">Address Montgomerie</p>
                                                         
                               <p class="dropdown-item hotel_list_item px-lg-0 mb-2 pb-0" data-id="17" role="button" tabindex="0">Address Dubai Mall</p>
                                                         
                               <p class="dropdown-item hotel_list_item px-lg-0 mb-2 pb-0" data-id="42" role="button" tabindex="0">Address Creek Harbour</p>
                                                         
                               <p class="dropdown-item hotel_list_item px-lg-0 mb-2 pb-0" data-id="18" role="button" tabindex="0">Address Sky View, Downtown Dubai</p>
                                                         
                               <p class="dropdown-item hotel_list_item px-lg-0 mb-2 pb-0" data-id="29" role="button" tabindex="0">Address Beach Resort</p>
                                                         
                               <p class="dropdown-item hotel_list_item px-lg-0 mb-2 pb-0" data-id="54" role="button" tabindex="0">Palace Dubai Creek Harbour</p>
                                                      </div>
                                                  <div class="individual_hotel_restaurant">
                                                          <div class="body-3 secondary-semibold ">
                                Fujairah                              </div>
                                                                                     
                               <p class="dropdown-item hotel_list_item px-lg-0 mb-2 pb-0" data-id="40" role="button" tabindex="0">Palace Beach Resort Fujairah</p>
                                                         
                               <p class="dropdown-item hotel_list_item px-lg-0 mb-2 pb-0" data-id="35" role="button" tabindex="0">Address Beach Resort Fujairah</p>
                                                      </div>
                                              </div>
                    <!-- </div> -->
                                      <!-- <div class="width-75"> -->
                      <div class="body-3 secondary-semibold countryName_heading">
                        Bahrain                      </div>
                      <div class="row no-gutters">
                                                  <div class="individual_hotel_restaurant">
                                                                                     
                               <p class="dropdown-item hotel_list_item px-lg-0 mb-2 pb-0" data-id="50" role="button" tabindex="0">Address Beach Resort Bahrain</p>
                                                      </div>
                                              </div>
                    <!-- </div> -->
                                      <!-- <div class="width-75"> -->
                      <div class="body-3 secondary-semibold countryName_heading">
                        Egypt                      </div>
                      <div class="row no-gutters">
                                                  <div class="individual_hotel_restaurant">
                                                                                     
                               <p class="dropdown-item hotel_list_item px-lg-0 mb-2 pb-0" data-id="31" role="button" tabindex="0">Address Marassi Golf Resort</p>
                                                         
                               <p class="dropdown-item hotel_list_item px-lg-0 mb-2 pb-0" data-id="52" role="button" tabindex="0">Address Beach Resort Marassi</p>
                                                         
                               <p class="dropdown-item hotel_list_item px-lg-0 mb-2 pb-0" data-id="61" role="button" tabindex="0">Palace Beach Resort</p>
                                                      </div>
                                              </div>
                    <!-- </div> -->
                                      <!-- <div class="width-75"> -->
                      <div class="body-3 secondary-semibold countryName_heading">
                        Saudi Arabia                      </div>
                      <div class="row no-gutters">
                                                  <div class="individual_hotel_restaurant">
                                                                                     
                               <p class="dropdown-item hotel_list_item px-lg-0 mb-2 pb-0" data-id="51" role="button" tabindex="0">Address Jabal Omar Makkah</p>
                                                      </div>
                                              </div>
                    <!-- </div> -->
                                      <!-- <div class="width-75"> -->
                      <div class="body-3 secondary-semibold countryName_heading">
                        Turkey                      </div>
                      <div class="row no-gutters">
                                                  <div class="individual_hotel_restaurant">
                                                                                     
                               <p class="dropdown-item hotel_list_item px-lg-0 mb-2 pb-0" data-id="38" role="button" tabindex="0">Address Istanbul</p>
                                                      </div>
                                              </div>
                    <!-- </div> -->
                          </div>

      </div>
      <div class="d-none mobile-date-selector">
        <div class="mobile-popup-header">
          <div class="d-flex justify-content-between align-items-center mb-4">
            <p class="mb-0">Select a date &amp; check availability</p>
            <span class="close-mobile-popup">
              <i class="fal fa-times"></i>
            </span>
          </div>
          <div class="d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
              <i class="fal fa-calendar pr-2"></i>
              <span class="date-selector-title-text">Check In &#8211; Check Out</span>
            </div>
            <div class="date-clear-btn cursor-pointer d-none">Clear</div>
          </div>
        </div>
        <div class="mobile-popup-date-body p-4">
          <div class="stayCalendar pt-4 text-center bg-grey d-none">
            <div class=" calendar-error-msg mb-0" role="alert">
              <p>
              <i class="fal fa-exclamation-triangle px-1"></i>
              <span class="error-message"></span>
              </p>
            </div>
          </div>
          <input class="datepicker d-none">
          <div class="select-date-button-wrapper button-wrapper mb-3 pb-1">
            <button class="btn primary-btn w-100 select-date-button d-none">Select these dates</button>
          </div>
          <span class="currency-text position-absolute w-100 text-center py-2 d-none"></span>
        </div>
      </div>
      <div class="d-none mobile-guest-selector">
        <div class="mobile-popup-header">
          <div class="d-flex justify-content-between align-items-center mb-4">
            <div class="d-flex align-items-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left backtoguestwidget" viewbox="0 0 16 16">
                <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0"></path>
              </svg>
              <p class="mb-0 ml-3">Rooms &amp; Guests</p>
            </div>
            <span class="close-mobile-popup">
              <i class="fal fa-times"></i>
            </span>
          </div>
          <div class="d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
              <i class="fal fa-user-friends pr-2"></i>
              <span class="guest-selected-title-text">1 Adult, 0 Children</span>
            </div>
            <div class="guest-clear-btn cursor-pointer">Clear</div>
          </div>
        </div>
        <div class="mobile-popup-guest-body p-3 d-flex flex-column justify-content-between">
          <div class="overflow-wrapper">
            <div class="d-flex flex-column pt-2 rooms">
              <div class="room mb-2 bg-grey rounded-8px py-2" data-room="1">
                <div class="px-4 room-header mt-2 align-items-center d-none">
                  <div class="room-title">Room 1</div>
                  <span class="btn-remove-room" aria-label="Remove room">
                    <i class="fal fa-trash-alt trash_widget"></i>
                  </span>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="guest-counter w-100 py-1">
                    <label class="guest-label mb-2 px-4">Adults (12+)</label>
                    <div class="counter-box d-flex align-items-center justify-content-between px-4">
                      <span class="btn_counter ag-minus disabled" data-action="minus">
                        <i class="fal fa-minus-circle"></i>
                      </span>
                      <span class="adult-counter count b4">1</span>
                      <span class="btn_counter ag-plus" data-action="plus">
                        <i class="fal fa-plus-circle"></i>
                      </span>
                    </div>
                  </div>
                  <div style="background: #25282D29; width: 1px; height: 48px;"></div>
                  <div class="guest-counter w-100 py-1">
                    <label class="guest-label mb-2 px-4">Children (4-11)</label>
                    <div class="counter-box d-flex align-items-center justify-content-between px-4">
                      <span class="btn_counter cg-minus disabled" data-action="minus">
                        <i class="fal fa-minus-circle"></i>
                      </span>
                      <span class="child-counter count b4">0</span>
                      <span class="btn_counter cg-plus" data-action="plus">
                        <i class="fal fa-plus-circle"></i>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="addRoomWidget py-2 mb-4 bg-grey rounded-8px">
              <div class="roomcircle addroom mx-3 my-1 px-1 mobile">
                <i class="fas fa-plus"></i>
                <span>Add a room</span>
              </div>
            </div>
            <div class="book_for_someone_else_row pl-2 pt-2" style="display:none;">
            <div colspan="4">
              <form class="go-bottom">
                <label class="checkbox book_for_someone_else_label">
                  I am booking for someone else.                  <input type="checkbox" name="book_for_someone_else_checkbox" id="book_for_someone_else_checkbox">
                  <span name="agree" class="geekmark mandatory"></span>
                </label>
              </form>
            </div>
            </div>
          </div>
          <div class="button-wrapper">
            <button class="btn primary-btn w-100 mobile-guest-selector-done">Done</button>
          </div>
        </div>
      </div>
      <div class="d-none mobile-code-selector">
        <div class="mobile-popup-header">
          <div class="d-flex justify-content-between align-items-center mb-4">
            <div class="d-flex align-items-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left backtocodewidget" viewbox="0 0 16 16">
                <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0"></path>
              </svg>
              <p class="mb-0 ml-3">Select a Code type</p>
            </div>
            <span class="close-mobile-popup">
              <i class="fal fa-times"></i>
            </span>
          </div>
          <div class="d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
              <span class="code-selected-title-text">Enter Code</span>
              <i class="fal fa-info-circle promocode-box-info-icon"></i>
              <div class="promocode-info-box promocode-info-box-mobile bg-grey d-none">
                <div>You can apply upto two codes at a time as below combination. e.g.</div>
                <div>IATA +Promo Code </div>
                <div>IATA + Corporate Code</div>
              </div>
            </div>
            <div class="code-clear-btn cursor-pointer">Clear</div>
          </div>
        </div>
        <div class="mobile-popup-code-body p-4 d-flex flex-column justify-content-between">
          <div class="overflow-wrapper p-3 bg-grey rounded-8px">
            <p class="promocode-invalid-message d-none click_error_widget error_label" id="">You can&#8217;t apply more than two codes.</p>
            <p class="promocode-code-warning d-none iata_error_widget error_label" id="">You can&#8217;t apply two codes without IATA code combination.</p>
            <p class="promocode-code-warning d-none group_error_widget error_label" id="">This combination is not valid.</p>
            <!-- IATA -->
            <label class="checkbox">
              <input type="checkbox" id="chkPassportIATA_widget" class="Checkbox-input chkPassportIATA_widget" autocomplete="off">
              <span class="geekmark"></span>IATA code            </label>
            <div class="promocode-input-code-box promocode-input-code-box-desktop iatacode_input_widget">
              <i class="fas fa-check-circle promocode-validation-icon promocode-valid-icon valid_widget iatacode_valid d-none"></i>
              <i class="fas fa-times-circle promocode-validation-icon promocode-invalid-icon invalid_widget iatacode_invalid d-none"></i>
              <input type="text" placeholder="Enter IATA code" class="iatacode_widget inputfield_widget" autocomplete="off">
              <button class="btn promocode-apply-btn iatacode_apply_btn_widget widget_apply_btn" id="" disabled="">
                <svg class="button-loader d-none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="200px" height="200px" viewbox="0 0 100 100" preserveaspectratio="xMidYMid">
                  <circle cx="50" cy="50" fill="none" stroke="#ffffff" stroke-width="10" r="35" stroke-dasharray="164.93361431346415 56.97787143782138" transform="rotate(132.222 50 50)">
                    <animatetransform attributename="transform" type="rotate" repeatcount="indefinite" dur="1s" values="0 50 50;360 50 50" keytimes="0;1"></animatetransform>
                  </circle>
                </svg>
                Apply              </button>
              <i class="fal fa-trash-alt promocode-trash-icon trash_widget iatacode_trash d-none"></i>
            </div>
            <p class="promocode-invalid-message iatacode_error error_widget d-none"></p>
            <!-- Corporate -->
            <label class="checkbox">
              <input type="checkbox" id="chkPassportCorporate_widget" class="Checkbox-input chkPassportCorporate_widget" autocomplete="off">
              <span class="geekmark"></span>Corporate code            </label>
            <div class="promocode-input-code-box promocode-input-code-box-desktop corporatecode_input_widget">
              <i class="fas fa-check-circle promocode-validation-icon promocode-valid-icon corporatecode_valid valid_widget d-none"></i>
              <i class="fas fa-times-circle promocode-validation-icon promocode-invalid-icon corporatecode_invalid invalid_widget d-none"></i>
              <input type="text" placeholder="Enter corporate code" class="corporatecode_widget inputfield_widget" autocomplete="off">
              <button class="btn promocode-apply-btn corporatecode_apply_btn_widget widget_apply_btn" disabled="">
                <svg class="button-loader d-none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="200px" height="200px" viewbox="0 0 100 100" preserveaspectratio="xMidYMid">
                  <circle cx="50" cy="50" fill="none" stroke="#ffffff" stroke-width="10" r="35" stroke-dasharray="164.93361431346415 56.97787143782138" transform="rotate(132.222 50 50)">
                    <animatetransform attributename="transform" type="rotate" repeatcount="indefinite" dur="1s" values="0 50 50;360 50 50" keytimes="0;1"></animatetransform>
                  </circle>
                </svg>
                Apply              </button>
              <i class="fal fa-trash-alt promocode-trash-icon corporatecode_trash trash_widget d-none"></i>
            </div>
            <p class="promocode-invalid-message corporatecode_error error d-none"></p>
            <!-- Promotion -->
            <label class="checkbox">
              <input type="checkbox" id="chkPassportPromo_widget" class="Checkbox-input chkPassportPromo_widget" autocomplete="off">
              <span class="geekmark"></span>Promo code            </label>
            <div class="promocode-input-code-box promocode-input-code-box-desktop promocode_input_widget">
              <i class="fas fa-check-circle promocode-validation-icon promocode-valid-icon  valid_widget d-none"></i>
              <i class="fas fa-times-circle promocode-validation-icon promocode-invalid-icon promocode_invalid invalid_widget d-none"></i>
              <input type="text" placeholder="Enter promo code" class="promocode_widget inputfield_widget" autocomplete="off">
              <button class="btn promocode-apply-btn promocode_apply_btn_widget widget_apply_btn" disabled="">
                <svg class="button-loader d-none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="200px" height="200px" viewbox="0 0 100 100" preserveaspectratio="xMidYMid">
                  <circle cx="50" cy="50" fill="none" stroke="#ffffff" stroke-width="10" r="35" stroke-dasharray="164.93361431346415 56.97787143782138" transform="rotate(132.222 50 50)">
                    <animatetransform attributename="transform" type="rotate" repeatcount="indefinite" dur="1s" values="0 50 50;360 50 50" keytimes="0;1"></animatetransform>
                  </circle>
                </svg>
                Apply              </button>
              <i class="fal fa-trash-alt promocode-trash-icon promocode_trash trash_widget d-none"></i>
            </div>
            <p class="promocode-invalid-message promocode_error error d-none"></p>
            <!-- Group Code -->
            <label class="checkbox">
              <input type="checkbox" id="chkPassportGroup_widget" class="Checkbox-input chkPassportGroup_widget" autocomplete="off">
              <span class="geekmark"></span>Group code            </label>
             <div class="promocode-input-code-box promocode-input-code-box-desktop groupcode_input_widget">
                <i class="fas fa-check-circle promocode-validation-icon promocode-valid-icon groupcode_valid valid_widget d-none"></i>
                <i class="fas fa-times-circle promocode-validation-icon promocode-invalid-icon groupcode_invalid invalid_widget d-none" id=""></i>
                <input type="text" placeholder="Enter group code" class="groupcode_widget inputfield_widget" autocomplete="off">
                <button class="btn promocode-apply-btn groupcode_apply_btn_widget widget_apply_btn" disabled="">
                  <svg class="button-loader d-none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="200px" height="200px" viewbox="0 0 100 100" preserveaspectratio="xMidYMid">
                    <circle cx="50" cy="50" fill="none" stroke="#ffffff" stroke-width="10" r="35" stroke-dasharray="164.93361431346415 56.97787143782138" transform="rotate(132.222 50 50)">
                      <animatetransform attributename="transform" type="rotate" repeatcount="indefinite" dur="1s" values="0 50 50;360 50 50" keytimes="0;1"></animatetransform>
                    </circle>
                  </svg>
                  Apply                </button>
                <i class="fal fa-trash-alt promocode-trash-icon groupcode_trash trash_widget d-none" id=""></i>
              </div>
              <p class="promocode-invalid-message groupcode_error error d-none" id=""></p>
          </div>
          <div class="button-wrapper mt-3">
            <button class="btn primary-btn w-100 selected-code-done">Done</button>
          </div>
        </div>
      </div>
      <div class="d-none mobile-bookingwidget-selector">
        <div class="mobile-popup-header">
          
          <div class="d-flex justify-content-between align-items-center mb-4">
            <div class="d-flex align-items-center">
              <p class="mb-0">Search</p>
            </div>
            <span class="close-mobile-popup">
              <i class="fal fa-times"></i>
            </span>
          </div>
          <div class="d-flex justify-content-end align-items-center">
            <div class="widget-clear-btn cursor-pointer">Clear</div>
          </div>
        </div>
        
        <div class="mobile-popup-bookingwidget-body pb-3 px-3 d-flex flex-column justify-content-between">
          <div class="mobile-bookingwidget-selector overflow-wrapper bg-grey rounded-8px">
            <div class="hotel-selection m-3">
                <i class="fal fa-map-marker-alt pr-2"></i>
                <span class="hotel-selector-title-text">All Hotels</span>
            </div>
            <hr>
            <div class="date-selection m-3">
              <div class="d-flex justify-content-between align-items-center">
                <div>
                    <i class="fal fa-calendar pr-2"></i>
                    <span class="date-selector-title-text">Check In &#8211; Check Out</span>
                </div>
                <span class="night_var_widget d-none"></span>
              </div>
                 
            </div>
            <hr>
            <div class="guest-selection m-3">
                  <i class="fal fa-user-friends pr-2"></i>
                <span class="guest-selected-title-text">1 Adult, 0 Children</span>
            </div>
            <hr>
            <div class="code-input-selection m-3">
                <span class="code-selected-title-text">Enter Code</span>
            </div>
            
          </div>
          <div class="button-wrapper mt-3">
            <button class="book-outline-luxury home-prenota-btn home-prenota-btn-mobile" type="button" style="border-radius:0 !important;border:1px solid #e3cba5;background:#3c3e21;color:#e3cba5;" onmouseover="this.style.background='#e3cba5';this.style.color='#000000';this.style.border='1px solid #3c3e21';" onmouseout="this.style.background='#3c3e21';this.style.color='#e3cba5';this.style.border='1px solid #e3cba5';" onclick="if (typeof MOBEE_PAGE_URL !== 'undefined' && MOBEE_PAGE_URL) { window.open(MOBEE_PAGE_URL, '_blank', 'noopener,noreferrer'); }">
              <?= htmlspecialchars(label('cta.book', 'Prenota'), ENT_QUOTES) ?>            </button>
          </div>
        </div>
       
      </div>

    </div>

    <style>
      .mobile-popup-wrapper .rounded-8px {
        border-radius: 8px;
      }

      .mobile-popup-wrapper .room-title {
        font-weight: 400;
        font-family: "FreightSansProSemibold";
      }

      .mobile-popup-wrapper {
        position: fixed;
        bottom: 0;
        left: 0;
        width: 100%;
        height: auto;
        background-color: #EBEDE8;
        border-top-left-radius: 1rem;
        border-top-right-radius: 1rem;
      }

      .mobile-popup-wrapper .mobile-popup-header {
        padding: 20px;
        border-bottom: 1px solid #25282D29;
      }
      .mobile-popup-wrapper .mobile-bookingwidget-selector .mobile-popup-header {
        padding: 20px;
        border-bottom: unset;
      }

      .mobile-popup-wrapper .mobile-popup-header p {
        font-family: 'Vanitasbold';
        font-size: 24px;
        font-weight: 400;
        line-height: 28.42px;
        letter-spacing: -1px;
        text-align: left;
      }

      .mobile-popup-wrapper .mobile-popup-hotel-body {
        border-radius: .5rem;
        overflow-y: auto;
        height: 100%;
        max-height: 60vh;
        background-color:#F7F8F6;
      }

      .mobile-popup-wrapper .mobile-date-selector .date-clear-btn {
        font-size: 17px;
        font-weight: 400;
        line-height: 19.69px;
        text-align: right;
        color: #483D8B;
      }

      .mobile-popup-wrapper .mobile-date-selector .currency-text {
        font-family: FreightSansProBook-Regular;
        font-size: 12px;
        font-weight: 400;
        line-height: 15.37px;
        text-align: center;
        bottom: 0;
        left: 0;
      }

      .mobile-popup-wrapper .mobile-guest-selector .mobile-popup-guest-body {
        min-height: 50vh;
        max-height: 60vh;
        /* overflow: auto; */
      }
     .mobile-popup-wrapper .mobile-guest-selector .mobile-popup-guest-body .overflow-wrapper {
        overflow: auto;
      }
      .mobile-popup-wrapper .mobile-guest-selector .guest-clear-btn {
        font-size: 17px;
        font-weight: 400;
        line-height: 19.69px;
        text-align: right;
        color: #483D8B;
      }

       .mobile-popup-wrapper .mobile-code-selector .mobile-popup-guest-body {
        min-height: 50vh;
        max-height: 60vh;
        overflow: auto;
      }
      

      .mobile-popup-wrapper .mobile-code-selector .code-clear-btn,.widget-clear-btn {
        font-size: 17px;
        font-weight: 400;
        line-height: 19.69px;
        text-align: right;
        color: #483D8B;
      }
    </style>

  </div>
</div>

<style>
  /* Shell verde / tipografia: css/sottovoce-luxury-shell.css */

  /* 20px dal bordo inferiore dellâ€™area video (override tema: 11.5rem) */
  body.sottovoce-luxury .fullscreen-hero-banner-booking-widget .individual-homepage-content-section.hero-home-bottom {
    bottom: 20px !important;
  }
  .hero-home-bottom .container.mx-auto {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
  }
  .hero-home-bottom .sunset-countdown-hero {
    margin-top: 0;
    width: 100%;
  }
  #featured-offer .signature-prenota-cta {
    margin-top: 96px;
    margin-bottom: 19px;
    width: 100%;
    max-width: 600px;
  }
  body.sottovoce-luxury #featured-offer .signature-prenota-cta button.home-prenota-btn-hero {
    width: 100%;
    min-height: 56px;
    padding: 0 20px;
    border: 1px solid rgba(255, 255, 255, 0.72) !important;
    border-radius: 0 !important;
    background: rgba(60, 62, 33, 0.78) !important;
    color: #ffffff !important;
    letter-spacing: 0.14em;
    text-shadow:
      0 1px 2px rgba(0, 0, 0, 0.75),
      0 0 10px rgba(255, 255, 255, 0.65),
      0 0 22px rgba(255, 255, 255, 0.4) !important;
    box-shadow:
      0 0 14px rgba(255, 255, 255, 0.28),
      0 0 32px rgba(255, 255, 255, 0.14),
      inset 0 0 14px rgba(255, 255, 255, 0.06) !important;
    transform: none !important;
    transition:
      background 0.25s ease,
      color 0.25s ease,
      border-color 0.25s ease,
      box-shadow 0.25s ease,
      text-shadow 0.25s ease;
  }
  body.sottovoce-luxury #featured-offer .signature-prenota-cta button.home-prenota-btn-hero:hover,
  body.sottovoce-luxury #featured-offer .signature-prenota-cta button.home-prenota-btn-hero:focus {
    background: rgba(255, 255, 255, 0.1) !important;
    color: #ffffff !important;
    border: 1px solid rgba(255, 255, 255, 0.95) !important;
    border-radius: 0 !important;
    text-shadow:
      0 1px 2px rgba(0, 0, 0, 0.55),
      0 0 14px rgba(255, 255, 255, 0.95),
      0 0 32px rgba(255, 255, 255, 0.65) !important;
    box-shadow:
      0 0 20px rgba(255, 255, 255, 0.48),
      0 0 44px rgba(255, 255, 255, 0.28),
      inset 0 0 22px rgba(255, 255, 255, 0.12) !important;
  }
  body.sottovoce-luxury #featured-offer .signature-prenota-cta button.home-prenota-btn-hero:active {
    background: rgba(255, 255, 255, 0.16) !important;
    color: #ffffff !important;
    border: 1px solid rgba(255, 255, 255, 0.88) !important;
    border-radius: 0 !important;
    text-shadow:
      0 1px 2px rgba(0, 0, 0, 0.65),
      0 0 12px rgba(255, 255, 255, 0.85) !important;
    box-shadow:
      0 0 16px rgba(255, 255, 255, 0.4),
      0 0 36px rgba(255, 255, 255, 0.2) !important;
  }
  /* Hide legacy booking widget to avoid responsive misalignment */
  .new-booking-widget {
    display: none !important;
  }

  .content-box {
    background: #e3cba5;
    padding: 24px;
  }

  #featured-offer .content-box {
    background: transparent !important;
    background-image: none !important;
  }

  .new-booking-widget .prevent-select {
    -webkit-user-select: none;
    -ms-user-select: none;
    user-select: none;
  }

  .new-booking-widget {
    width: 100%;
    margin: auto;
    padding-left: max(15px, calc((100vw - 1364px) / 2 + 15px));
    padding-right: 15px;
    box-sizing: border-box;
    bottom: 14rem;
    z-index: 100 !important;
    border-radius: 0 !important;
    position: relative;
    transition: all 0.3s ease-in-out;
  }
  
@media (min-width: 1200px) {
  .new-booking-widget.ibu {
    bottom: 11rem;
  }
}

  @media (max-width: 1199px) {
    .new-booking-widget {
      bottom: 6rem;
      padding-left: 25px;
      padding-right: 25px;
    }
    .new-booking-widget.ibu{
      bottom: 6rem;
      padding-left: 25px;
      padding-right: 25px;
    }
    .new-booking-widget.active-scroll.fixed-scroll {
      top : unset !important;
      box-shadow: 0.5rem 0 1rem rgba(0, 0, 0, .15) !important;
    }
  }

  .new-booking-widget.active-scroll {
    bottom: 0rem;
    border-bottom: 1px solid #25282D29;
    box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15) !important;
    background-color:#F7F8F6;
    margin-bottom: 30px;
  }

  .new-booking-widget .widget-ui {
    border-radius: 0 !important;
    width: 100%;
    max-width: 600px;
    margin-left: 0;
    margin-right: auto;
    background-color:#F7F8F6;
  }

  /* Keep only booking CTA in widget */
  .new-booking-widget .widget-ui > :not(.search-button) {
    display: none !important;
  }
  .new-booking-widget .widget-ui {
    justify-content: flex-start !important;
    max-width: 600px;
  }
  .new-booking-widget .search-button {
    display: flex !important;
    width: 100%;
    max-width: 600px;
    padding: 0 !important;
    margin-left: 0;
    margin-right: auto;
    border-radius: 0 !important;
  }
  .new-booking-widget .search-button button.home-prenota-btn {
    width: 100%;
    max-width: 600px;
    min-height: 56px;
    border-radius: 0 !important;
    padding: 0 20px !important;
    font-size: 17px;
    box-shadow: none !important;
    transform: none !important;
    transition: none !important;
    background-image: none !important;
    filter: none !important;
    border-radius: 0 !important;
  }

  .new-booking-widget.active-scroll.fixed-scroll {
    position: fixed;
    top: 0px;
    z-index: 100 !important;
    background: white;
    border: 1px solid #25282D29;
    height: fit-content;
    border-radius: 0rem;
    margin: unset;
    box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15);
    background-color:#F7F8F6;
  }

  .new-booking-widget .hotel-selector {
    width: 285px;
    padding: 20px 24px;
    /* border-right: 1px solid #25282D29; */
  }
  .widget-border-right{
     border-right: 1px solid #25282D29;
  }
  .widget-border-left{
     border-left: 1px solid #25282D29;
  }

  @media (max-width: 1199px) {
    .new-booking-widget .hotel-selector {
      width: 50%;
      padding: 12px 16px;
    }
  }

  .new-booking-widget .date-selector {
    width: 323px;
    padding: 20px 24px;
    /* border-right: 1px solid #25282D29; */
  }

  @media (max-width: 1199px) {
    .new-booking-widget .date-selector {
      width: 50%;
      padding: 12px 16px;
      border-right: 1px solid #25282D29;
    }
    .new-booking-widget .date-selector.widget-border-right {
      width: 50%;
      padding: 12px 16px;
      border-right: unset;
    }
    :lang(ar) .new-booking-widget .date-selector.widget-border-right {
        width: 50%;
        padding: 12px 16px;
        border-right: 1px solid #25282D29;
    }
    
    .new-booking-widget .guest-selector.widget-border-left {
         border-left: unset;
        width: 50%;
         padding: 12px 16px;
  }
      .new-booking-widget .guest-selector {
       width: 50%;
      padding: 12px 16px;
    }
    :lang(ar) .new-booking-widget.ibu .date-selector {
        width: 50%;
        padding: 12px 16px;
        border-right: unset;
    }
  }

  .new-booking-widget .guest-selector {
    width: 226px;
    padding: 20px 24px;
    /* border-right: 1px solid #25282D29; */
  }

  .new-booking-widget .code-selector {
    width: 170px;
    padding: 20px 24px;
  }
  .new-booking-widget .code-selector.setwidth {
    max-width : 200px
  }

  .new-booking-widget .search-button {
    width: 100%;
    max-width: 600px;
    margin-left: 0;
    margin-right: auto;
    margin-top: 0 !important;
  }

  .new-booking-widget .search-button button {
    border-radius: 0;
  }
  .new-booking-widget .search-button button.book-outline-luxury {
    background: transparent !important;
    color: #25282d !important;
    border: 1px solid #25282d !important;
    border-radius: 0 !important;
    text-decoration: none !important;
    letter-spacing: .4px !important;
    font-weight: 500 !important;
    box-shadow: none !important;
    transform: none !important;
    transition: background .2s ease, color .2s ease, border-color .2s ease !important;
  }
  .new-booking-widget .search-button button.book-outline-luxury .button-loader circle {
    stroke: #25282d;
  }
  .new-booking-widget .search-button button.book-outline-luxury .button-loader {
    border: 0 !important;
    border-radius: 0 !important;
    background: transparent !important;
    box-shadow: none !important;
    overflow: visible;
  }
  .new-booking-widget .search-button button.home-prenota-btn:hover,
  .new-booking-widget .search-button button.home-prenota-btn:focus,
  .new-booking-widget .search-button button.home-prenota-btn:active {
    box-shadow: none !important;
    transform: none !important;
    background-image: none !important;
    filter: none !important;
  }
  .new-booking-widget .search-button button.book-outline-luxury:hover,
  .new-booking-widget .search-button button.book-outline-luxury:focus,
  .new-booking-widget .search-button button.book-outline-luxury:active {
    background: #000000 !important;
    color: #ffffff !important;
    border: 1px solid #ffffff !important;
    border-radius: 0 !important;
    text-decoration: none !important;
    box-shadow: none !important;
    transform: none !important;
  }
  .new-booking-widget .search-button button.home-prenota-btn:hover,
  .new-booking-widget .search-button button.home-prenota-btn:focus,
  .new-booking-widget .search-button button.home-prenota-btn:active,
  .new-booking-widget .search-button button.home-prenota-btn.book-outline-luxury:hover,
  .new-booking-widget .search-button button.home-prenota-btn.book-outline-luxury:focus,
  .new-booking-widget .search-button button.home-prenota-btn.book-outline-luxury:active {
    background: #000000 !important;
    color: #ffffff !important;
    border: 1px solid #ffffff !important;
    border-radius: 0 !important;
  }
  .new-booking-widget .search-button button.book-outline-luxury:hover .button-loader circle,
  .new-booking-widget .search-button button.book-outline-luxury:focus .button-loader circle,
  .new-booking-widget .search-button button.book-outline-luxury:active .button-loader circle {
    stroke: #ffffff;
  }
  button.home-prenota-btn-mobile {
    background: transparent !important;
    color: #25282d !important;
    border: 1px solid #25282d !important;
    border-radius: 0 !important;
    text-decoration: none !important;
    letter-spacing: .4px !important;
    font-weight: 500 !important;
    box-shadow: none !important;
    transform: none !important;
    transition: background .2s ease, color .2s ease, border-color .2s ease !important;
  }
  button.home-prenota-btn-mobile:hover,
  button.home-prenota-btn-mobile:focus,
  button.home-prenota-btn-mobile:active {
    background: #000000 !important;
    color: #ffffff !important;
    border: 1px solid #ffffff !important;
    border-radius: 0 !important;
    text-decoration: none !important;
    box-shadow: none !important;
    transform: none !important;
  }
  button.home-prenota-btn-mobile .button-loader circle {
    stroke: #25282d;
  }
  button.home-prenota-btn-mobile .button-loader {
    border: 0 !important;
    border-radius: 0 !important;
    background: transparent !important;
    box-shadow: none !important;
    overflow: visible;
  }
  button.home-prenota-btn-mobile:hover .button-loader circle,
  button.home-prenota-btn-mobile:focus .button-loader circle,
  button.home-prenota-btn-mobile:active .button-loader circle {
    stroke: #ffffff;
  }

  .new-booking-widget .hotel-popup {
    width: 100%;
    max-width: 900px;
    height: 100%;
    max-height: 800px;
    border-radius: 0.5rem;
    bottom: 103%;
    height: auto;
    position: absolute;
  }

  .new-booking-widget.active-scroll .hotel-popup {
    bottom: unset;
    top: 103%;
  }

  .new-booking-widget .date-popup {
    height: 100%;
    max-height: 800px;
    border-radius: 0.5rem;
    bottom: 103%;
    height: auto;
    position: absolute;
    left: 280px;
  }
  .new-booking-widget .date-popup.individualpage_popup {
    left: unset;
  }

  .new-booking-widget.active-scroll .date-popup {
    bottom: unset;
    top: 103%;
  }

  .new-booking-widget .pax-popup {
    border-radius: 0.5rem;
    bottom: 103%;
    height: auto;
    position: absolute;
    left: 605px;
    width: 300px;
  }
  .new-booking-widget .pax-popup.individualpage_popup {
    left: 340px;
    width: 324px;
  }

  .new-booking-widget.active-scroll .pax-popup {
    bottom: unset;
    top: 103%;
  }

  .new-booking-widget .room-header {
    gap: 8px;
  }

  .new-booking-widget .code-popup {
    border-radius: 0.5rem;
    bottom: 103%;
    height: auto;
    position: absolute;
    left: 830px;
    width: 300px;
  }
  .new-booking-widget .code-popup.individualpage_popup {  
    left: 680px;  
  }

  .new-booking-widget.active-scroll .code-popup {
    bottom: unset;
    top: 103%;
  }
  .hotel-selector-title-text,.date-selector-title-text,.guest-selector-title-text,.code-selector-title-text{
     font-family: FreightSansProBook-Regular;
     font-size:14px;
    line-height : 17.93px;
    color : #25282D;
    font-weight: 400;
    opacity: 80%;
  }
  .widget-icons{
    opacity: 60%;
    color : #25282D;
  }
  .selected-hotel ,.selected-date , .selected-guest ,.selected-code,.selected-night-count{
      font-family: FreightSansProMedium;
      font-size:18px;
    line-height : 20.84px;
    color : #25282D;
    font-weight: 400;
  } 
  .mobile-popup-wrapper .hotel-selector-title-text,.mobile-popup-wrapper .date-selector-title-text,.mobile-popup-wrapper .guest-selector-title-text,.mobile-popup-wrapper .code-selector-title-text{
     font-family: FreightSansProBook-Regular;
     font-size:17px;
    line-height : 21.78px;
    color : #25282D;
    font-weight: 400;
    opacity: 1;
  }
  .bg-grey{
    background-color:#F7F8F6;
  }
  :lang(ar) .new-booking-widget .pax-popup {
    left: 297px;
  }
   :lang(ar) .new-booking-widget .code-popup{
    left: 45px;
  }
  :lang(ar) .new-booking-widget .code-popup {
    width: 330px;
  }
   :lang(ar) .new-booking-widget .pax-popup.individualpage_popup {
    left: 536px;
}
 :lang(ar) .new-booking-widget .code-popup.individualpage_popup {
    left: 190px;
}
.mobile-popup-header .promocode-info-box-mobile{
  top: 100px;
  left:100px;
  background-color: #F7F8F6;
}
.code-popup .promocode-info-box{
 background-color: #F7F8F6;
}
.mobile-bookingwidget-selector span.close-mobile-popup {
    margin-right: 12px;
}
.pax-popup {
    overflow-y: auto;
    max-height: 386px;
}
 
.pax-popup::-webkit-scrollbar {
    width: 4px !important;
}
.pax-popup::-webkit-scrollbar-track {
    background-color: #ccc;
}
.pax-popup::-webkit-scrollbar-thumb {
    background-color: #25282d;
    height: 60%;
}
.pax-popup::-webkit-scrollbar {
    width: 4px;
}


@media (max-width: 1400px) and (min-width: 1199px) {
  
  .new-booking-widget .widget-ui {
    width: 96%;
  }
  
}
.hotel-selection.disabled{
  cursor: not-allowed;
    pointer-events: none;
    opacity: 0.4;
}
.select-date-button-wrapper{
     position: absolute;
    bottom: 12px;
    width: 100%;
    padding-right: 48px;
}
:lang(ar) .select-date-button-wrapper{
    padding-left: 48px;
    padding-right : unset;
}
.book_for_someone_else_label .geekmark{
  top:15px !important;
}
:lang(ar) .backtocodewidget, :lang(ar) .backtoguestwidget{
  transform: scaleX(-1);
}
@media (max-width: 599px) {
  .selected-date.visible-date{
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    max-width: 80px;
  }
  :lang(ar) .selected-date.visible-date{
    max-width: 80px;
  }
   :lang(ar) .ibu .selected-date.visible-date{
    max-width: 80px;
  }
  .selected-guest, .selected-date{
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    max-width: 120px;
  }
}
@media (max-width: 380px) {
   :lang(ar) .ibu .selected-date.visible-date, .ibu .selected-date.visible-date,.selected-date.visible-date ,:lang(ar) .selected-date.visible-date{
    max-width: 60px;
  }
}

@media (max-width: 400px) {
  .guest-selector-title-text{
     white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    max-width: 75px;
  }
  
}
 :lang(ar) .widget-icons{
    padding-right: 0% !important;
  }
  .selected-hotel{
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
  
  }
</style>


<script>
  //Video play in safari on play click- Gayathree(11 Oct,2022)
  var video_playing_status = false;
  var background_video = document.getElementById("hero-vid");
  if (background_video != null) {
    const isVideoPlaying = video => !!(video.currentTime > 0 && !video.paused && !video.ended && video.readyState > 2);

    $('body').on('click touchstart', function() {
      if (!isVideoPlaying(background_video)) {
        background_video.play();
      }
    });
  }
</script>


<section class="subtitle-title-desc pt-5">
  <div class="container text-center">


          <h2 class="display-1-72 font-48-mobile mt-4 text-uppercase title-pink"><?= htmlspecialchars(label('section.intro.title', 'Aperitivo al tramonto, firma Sottovoce'), ENT_QUOTES) ?></h2>

          <p class="body-2 description--text"><?= htmlspecialchars(label('section.intro.description', "Sottovoce e un indirizzo serale nel cuore di Ravenna, dove mixology e cucina leggera si incontrano in un'atmosfera raffinata."), ENT_QUOTES) ?></p>
          <p class="body-2 description--text"><?= htmlspecialchars(label('section.intro.how', 'Come funziona: apertura al tramonto, prenotazione consigliata e turni da 50 minuti per garantire un servizio accurato e tempi perfetti.'), ENT_QUOTES) ?></p>
  </div>
</section>

<div id="featured-offer" class="container individual-homepage-featured-offer">
  <div class="row g-0 align-items-center text-center justify-content-between">
    <div class="col-12 col-lg-6 inline-left show-on-scroll">
      <div class="content-box" data-aos="fade-right" data-aos-duration="1000" data-aos-offset="300" data-aos-easing="ease-in-sine">
        <h5 class="eyebrow-text"><?= htmlspecialchars(label('section.signature.eyebrow', 'SIGNATURE EXPERIENCE'), ENT_QUOTES) ?></h5><h2 class="offers-section-item-heading text-center display-1-72 font-56-mobile"><?= htmlspecialchars(label('section.signature.title', 'Il rituale del tramonto'), ENT_QUOTES) ?></h2><p class="body-2 mb-0 mb-lg-5"><?= htmlspecialchars(label('section.signature.body', "Dal primo calice all'ultimo assaggio, un percorso elegante tra cocktail signature e piccoli piatti pensati per il ritmo della sera."), ENT_QUOTES) ?></p>
      </div>
    </div>
    <div class="col-12 col-lg-6 p-0 inline-right show-on-scroll image-zoom-animation img-shadow">
      <div class="img-box img-shadow image-zoom-animation" data-aos="fade-left" data-aos-duration="1000" data-aos-offset="300" data-aos-easing="ease-in-sine">
        <img width="1024" height="535" decoding="async" src="/assets/images/tramonto.jpg" alt="Tramonto da Sottovoce" class="img-fluid sottovoce-featured-media">        
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-12 d-flex justify-content-center">
      <div class="signature-prenota-cta">
        <button class="home-prenota-btn home-prenota-btn-hero" type="button" onclick="if (typeof MOBEE_PAGE_URL !== 'undefined' && MOBEE_PAGE_URL) { window.open(MOBEE_PAGE_URL, '_blank', 'noopener,noreferrer'); }">
          <?= htmlspecialchars(label('cta.book', 'Prenota'), ENT_QUOTES) ?>
        </button>
      </div>
    </div>
  </div>
</div>

<link rel="stylesheet" href="/dependencies/css/wp-content/themes/emaar-projects/template-parts/dynamic-blocks/assets/css/individual-homepage-corporate-section.css">



<div id="carousalHeaders" class="carousel slide" data-ride="carousel">


    <div class="carousel-inner">
            <style>
          .individual-homepage-corporate-section.individual-homepage-corporate-section-0 {
            background-image: url('/assets/images/momento_romantico.jpg');

          }
        </style>

        <style>
          html[dir="rtl"] .individual-homepage-corporate-section.individual-homepage-corporate-section-0 {
            background-image: url('/assets/images/momento_romantico.jpg');
          }
        </style>
        <div class="carousel-item active">
          <div id="events" class="container-fluid g-0 individual-homepage-corporate-section individual-homepage-corporate-section-0">
            <div class="corporate-img-section">
              <div class="corporate-img-overlay"></div>
            </div>
            <div class="corporate-img-content text-white text-center sottovoce-events-copy">

                              <h5 class="smalltitle eyebrow-dark whitetext mb-0"><?= htmlspecialchars(label('section.events.eyebrow', 'Al tramonto'), ENT_QUOTES) ?></h5>

                              <h2 class="whitetext pt-3 pt-md-4 display-1-72 font-56-mobile mt-0 whitetext"><?= htmlspecialchars(label('section.events.title', 'Momenti speciali, in punta di luce'), ENT_QUOTES) ?></h2>

                              <p class="body-2 whitetext corporate-desc mx-auto mb-0"><?= htmlspecialchars(label('section.events.body', 'Brindisi, piccole celebrazioni e serate dedicate: la sala si accende con la luce dorata del calar del sole. Un contesto intimo e curato, con turni da 50 minuti per un servizio preciso e un ritmo elegante.'), ENT_QUOTES) ?></p>

            </div>
          </div>
        </div>
      </div>



</div>
<style>
  body.sottovoce-luxury #events .corporate-img-content.sottovoce-events-copy {
    left: 50%;
    right: auto;
    transform: translateX(-50%);
    width: min(92%, 38rem);
    text-align: center;
    align-items: center;
  }
  body.sottovoce-luxury #events .corporate-img-content.sottovoce-events-copy .corporate-desc {
    max-width: 36rem;
  }
  .sottovoce-featured-media {
    width: 100%;
    aspect-ratio: 16 / 9;
    object-fit: cover;
    display: block;
  }
  @media (max-width: 600px) {
    .corporate-desc {
      overflow: hidden;
      text-overflow: ellipsis;
      display: -webkit-box !important;
      -webkit-line-clamp: 8;
      line-clamp: 8;
      -webkit-box-orient: vertical;
    }
  }
</style>






<style>
  .bg-halos-home {
    position: fixed;
    inset: 0;
    overflow: hidden;
    pointer-events: none;
    z-index: 2;
    mix-blend-mode: screen;
  }

  .bg-halo-home {
    position: absolute;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(255, 214, 188, 0.2) 0%, rgba(206, 85, 22, 0.2) 30%, rgba(206, 85, 22, 0.08) 56%, rgba(206, 85, 22, 0) 78%);
    filter: blur(var(--blur, 24px));
    opacity: var(--opacity, 0.62);
    transform: translate(-50%, -50%);
    animation: homeHaloDrift var(--dur, 9s) ease-in-out infinite;
    animation-delay: var(--delay, 0s);
  }

  #page {
    position: relative;
    z-index: 1;
  }

  @keyframes homeHaloDrift {
    0%, 100% { transform: translate(-50%, -50%) scale(0.92); }
    50% { transform: translate(-50%, -50%) scale(1.08); }
  }

  #contact-details,
  #contact-details .individual-homepage-contact-map,
  #faq,
  #faq .container {
    background: transparent !important;
    background-color: transparent !important;
    background-image: none !important;
  }

  body.sottovoce-luxury #contact-details.individual-homepage-contact-map-section {
    padding-top: 3rem !important;
    padding-bottom: 0 !important;
  }

  body.sottovoce-luxury #contact-details .individual-homepage-contact-map {
    max-width: 100% !important;
    padding: 2.75rem 1rem 3rem !important;
    background: transparent !important;
  }

  body.sottovoce-luxury #contact-details .sottovoce-contact-copy {
    background: transparent !important;
  }

  body.sottovoce-luxury #contact-details .contact-details p {
    display: block !important;
    text-align: center !important;
    margin-left: auto !important;
    margin-right: auto !important;
  }

  body.sottovoce-luxury #contact-details .sottovoce-contact-map {
    max-width: 72rem;
    margin-left: auto;
    margin-right: auto;
  }

  body.sottovoce-luxury #faq.sottovoce-faq {
    position: relative;
  }

  body.sottovoce-luxury #faq.sottovoce-faq .sottovoce-faq-title {
    max-width: 28rem;
    margin-left: auto;
    margin-right: auto;
    font-weight: 400;
    letter-spacing: 0.04em;
  }

  body.sottovoce-luxury #faq.sottovoce-faq .accordionFaq {
    max-width: 52rem;
    margin-left: auto;
    margin-right: auto;
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
    background: transparent !important;
    background-color: transparent !important;
    box-shadow: none !important;
  }

  body.sottovoce-luxury #faq.sottovoce-faq .accordionFaq .card {
    border: none !important;
    background: transparent !important;
    background-color: transparent !important;
  }

  body.sottovoce-luxury #faq.sottovoce-faq .accordionFaq .card:not(:last-child) {
    border-bottom: 1px solid rgba(227, 203, 165, 0.28) !important;
  }

  body.sottovoce-luxury #faq.sottovoce-faq .accordionFaq .card-header {
    background: transparent !important;
    background-color: transparent !important;
    padding-left: 0 !important;
    padding-right: 0 !important;
  }

  body.sottovoce-luxury #faq.sottovoce-faq .accordionFaq .card-body,
  body.sottovoce-luxury #faq.sottovoce-faq .accordionFaq .accordionFaq-card-content,
  body.sottovoce-luxury #faq.sottovoce-faq .accordionFaq .collapse {
    background: transparent !important;
    background-color: transparent !important;
    background-image: none !important;
    box-shadow: none !important;
  }

  body.sottovoce-luxury #faq.sottovoce-faq .accordionFaq .card-body {
    padding-left: 0 !important;
    padding-right: 2rem;
    padding-top: 0;
    opacity: 0.92;
    line-height: 1.65;
  }

  body.sottovoce-luxury #faq.sottovoce-faq .accordionFaq button.btn {
    border-bottom: none !important;
    padding-left: 0 !important;
    padding-right: 0 !important;
  }

  body.sottovoce-luxury #faq.sottovoce-faq .accordionFaq button > h3 {
    color: #ffffff !important;
    font-weight: 400 !important;
    letter-spacing: 0.02em;
  }

  body.sottovoce-luxury #faq.sottovoce-faq .accordionFaq .plus-icon {
    color: #e3cba5 !important;
    opacity: 0.95;
  }

  #contact-details .contact-map-wrap {
    position: relative;
    overflow: hidden;
    height: 400px;
    filter: grayscale(1);
    -webkit-filter: grayscale(1);
  }

  #contact-details .contact-map-wrap iframe {
    width: 100%;
    height: 100%;
    border: 0;
    display: block;
  }

  body.sottovoce-luxury footer,
  body.sottovoce-luxury footer .footer,
  body.sottovoce-luxury footer .ft-btm-link,
  body.sottovoce-luxury footer .enclosedarea,
  body.sottovoce-luxury footer .footer-links,
  body.sottovoce-luxury footer .footer-info-card {
    background-color: #e3cba5 !important;
    background-image: none !important;
  }

  body.sottovoce-luxury footer {
    position: relative;
    z-index: 4;
  }
</style>

<script>
  (function () {
    var HALO_COUNT = 10;
    var count = Math.min(40, Math.max(1, HALO_COUNT));
    var root = document.getElementById("bgHalosHome");
    if (!root) return;

    for (var i = 0; i < count; i += 1) {
      var halo = document.createElement("div");
      halo.className = "bg-halo-home";

      var size = 140 + Math.random() * 320;
      var left = Math.random() * 100;
      var top = Math.random() * 100;
      var opacity = 0.4 + Math.random() * 0.35;
      var blur = 12 + Math.random() * 22;
      var duration = 7 + Math.random() * 7;
      var delay = -Math.random() * 6;

      halo.style.width = size + "px";
      halo.style.height = size + "px";
      halo.style.left = left + "%";
      halo.style.top = top + "%";
      halo.style.setProperty("--opacity", opacity.toFixed(2));
      halo.style.setProperty("--blur", blur.toFixed(0) + "px");
      halo.style.setProperty("--dur", duration.toFixed(2) + "s");
      halo.style.setProperty("--delay", delay.toFixed(2) + "s");

      root.appendChild(halo);
    }
  })();
</script>

</div>

<?php include __DIR__ . '/pages/_partials/footer.php'; ?>
<?php include __DIR__ . '/pages/_partials/foot.php'; ?>
</body>

</html>
<script>
   //Video play in safari on play click- Gayathree(11 Oct,2022)
   // var video_playing_status = false;
   // var background_video = document.getElementById("hero-vid");
   // const isVideoPlaying = video => !!(video.currentTime > 0 && !video.paused && !video.ended && video.readyState > 2);

   // $('body').on('click touchstart', function() {
   //    if (!isVideoPlaying(background_video)) {
   //       background_video.play();
   //    }
   // });
</script><!-- Rocket has webp -->
<!-- This website is like a Rocket, isn't it? Performance optimized by WP Rocket. Learn more: https://wp-rocket.me -->

