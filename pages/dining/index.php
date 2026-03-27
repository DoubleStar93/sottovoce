<?php declare(strict_types=1); ?>
<!doctype html>
<html lang="en">


<?php include dirname(__DIR__, 1) . '/_partials/head.php'; ?>

<body class="page-template page-template-templates page-template-dine-individual-custom-template page-template-templatesdine-individual-custom-template-php page page-id-2770 page-child parent-pageid-3739">
  <!-- Preloader -->
  <!-- Preloader End -->
  <div id="page" class="site">

    <script>
      ICL = "en";
      RECAPTCHA_SITE_KEY = "6Ld_JNIbAAAAAPu9Dbv8WgBHfIYmdKBzNh-7w72X";
    </script>

    
<style>
/* #nav-main .navbar-collapse .navbar-nav.rightlinks .language-selector {
      display: none !important;
   } */
</style>

<script>
var page = {"PAGE_SCOPE":"individual","HOME_PAGE":false,"DINE_PAGE":true,"BOOK_NOW_BTN":false,"HOTEL_TITLE":"Address Sky View","HOTEL_SLUG":"address-sky-view","HOTEL_ID":"18","TEMPLATE":"templates\/dine-individual-custom-template.php","HOTEL_URL":"https:\/\/www.addresshotels.com\/en\/hotels\/address-sky-view\/","DROPDOWN_POSITION":"dropup","DISABLE_BOOK_NOW":false,"FACEBOOK_SOCIAL_LINK":"https:\/\/www.facebook.com\/addressskyview","TWITTER_SOCIAL_LINK":"https:\/\/twitter.com\/Address_Hotels\/","YOUTUBE_SOCIAL_LINK":"https:\/\/www.youtube.com\/@AddressHotels","INSTAGRAM_SOCIAL_LINK":"https:\/\/www.instagram.com\/addressskyview\/","WHATSAPP_SOCIAL_LINK":"97142488553","POST_TYPE":"page"};
</script>
<!-- <script src="/dependencies/external/cdn.quicktext.im/widget.min.js" data-license="8QHsG-4I9i"></script>

<noscript>
   <a href="/dependencies/external/www.quicktext.im/index.bin" title="Hotel AI Chabot and Guest Communication">Quicktext hotel chatbot</a>
</noscript> -->


<?php include dirname(__DIR__, 1) . '/_partials/header.php'; ?><!-- #masthead -->
<style>
#nav-main .right-nav-container {
    max-width: 400px !important;
}

[dir="rtl"] [id^="menu-item-"] #hotelList__dropdown .nav-indentation-class {
    margin-inline-start: 15px !important;
    /* Override for RTL */
}

/* .manageBooking-global.manageBooking-desktop {
    right: 70px !important;

  } */

@media screen and (min-width: 1300px) {
    .wpml-ls-legacy-dropdown-click a {
        padding: 0 22px;
    }
}

@media screen and (min-width: 1198px) {

    li.dropdown-item:hover {
        position: relative;
    }

    li.dropdown-item:hover a {
        font-weight: 600 !important;
    }

    li.dropdown-item:not(.hotel-nav-sub-heading):hover::before {
        content: "";
        position: absolute;
        left: -10px;
        top: 50%;
        transform: translateY(-50%);
        border-left: 6px solid black;
        border-top: 6px solid transparent;
        border-bottom: 6px solid transparent;
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
}


@media (min-width: 1202px) and (max-width: 1252px) {
    /* .manageBooking-global.manageBooking-desktop {
      right: 55px !important;
    } */

}

@media screen and (min-width: 1200px) {
    .wpml-ls-legacy-dropdown-click .wpml-ls-item-toggle {
        margin-inline-end: 25px;
    }


    /* :lang(ar) .manageBooking-global.manageBooking-desktop.managebooking-individual {
      right: unset !important;
      left: 55px !important;
    } */
}


/* .darkHeader .manageBooking-global.manageBooking-desktop {
    right: 70px !important;
  }

  :lang(ar) .darkHeader .manageBooking-global.manageBooking-desktop {
    right: unset !important;
    left: 55px !important;
  } */



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

/* :lang(ar) .manageBooking-global.manageBooking-desktop.managebooking-individual {
    right: unset;
    left: 180px;
} */

#topbooknow {
    position: relative;
    bottom: -15px;
    right: 0;
}

[dir="rtl"] [id^="menu-item-"] #hotelList__dropdown .nav-indentation-class {
    margin-inline-start: 10px !important;
    /* Override for RTL */
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

@media (min-width: 992px) and (max-width: 1140px) {
    .managebooking-individual {
        color: white !important;
    }
}
</style>
<script>
document.addEventListener("DOMContentLoaded", function() {
    const togglerButton = document.querySelector('.navbar-toggler');
    const collapseElement = document.querySelector('.bootstrap-collapse-navbar');
    const navbar = document.querySelector('.navbar'); // Select the navbar
    let addedStyle = null; // To keep track of dynamically added style

    // Check if both elements exist
    if (togglerButton && collapseElement && navbar) {

        togglerButton.addEventListener('click', function() {

            // Check if the navbar has the 'menu-open' class
            if (navbar.classList.contains('menu-open')) {

                const headerBottomLine = document.querySelector('.header-bottom-line-IBU');
                if (headerBottomLine) {
                    headerBottomLine.classList.add('menus-open'); // Add class when menus are open
                }

                // Check if collapse element is not showing
                if (!collapseElement.classList.contains('show')) {

                    // Apply the inline CSS to show the collapse element
                    collapseElement.style.display = 'block';

                    // Dynamically add CSS for the .collapse:not(.show) selector and #black_logo
                    addedStyle = document.createElement('style');
                    addedStyle.innerHTML = `
    .collapse:not(.show) {
        display: block !important;
    }
    @media (min-width: 320px) and (max-width: 1024px) {
        #black_logo {
            display: block !important;
        }
        #white_logo {
            display: none !important;
        }
    }
    @media (min-width: 1025px) and (max-width: 1140px) {
                        #black_logo {
                            display: block !important;
                        }
                        #white_logo {
                            display: none !important;
                        }
    }
    @media (max-width: 1199px) {
     #work-area {
     display:block !important
    }
   }
`;

                    document.head.appendChild(addedStyle);

                } else {



                    collapseElement.style.display = ''; // Reset to default if showing

                    // Remove the dynamically added style when the dropdown is shown again
                    if (addedStyle) {
                        addedStyle.remove(); // Remove the added <style> element
                        addedStyle = null; // Reset the reference
                    }
                }
            } else {

                const headerBottomLine = document.querySelector('.header-bottom-line-IBU');

                if (headerBottomLine) {
                    headerBottomLine.classList.remove(
                        'menus-open'); // Remove class when menus are closed
                }


                // If 'menu-open' class is not present, remove any added styles
                if (addedStyle) {
                    addedStyle.remove(); // Remove the dynamically added <style> element
                    addedStyle = null; // Reset the reference
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
        if (window.innerWidth > 1198) {
            const menuItem = document.querySelector('.static-area');
            if (menuItem) {
                const rect = menuItem.getBoundingClientRect();
                const isRTL = window.getComputedStyle(document.documentElement).direction === 'rtl';

                // Calculate distance from the inline start
                let distanceFromStart = isRTL ? (window.innerWidth - rect.right + 12) : (rect.left + 12);


                const dropdownElement = document.querySelector(
                    '[id^="menu-item-"] #hotelList__dropdown .hotel_resorts_dropdown'
                );
                if (dropdownElement) {
                    dropdownElement.style.marginInlineStart = distanceFromStart + 'px';
                } else {
                    console.error('Dropdown element not found');
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
        const blackLogo = document.querySelector('#black_logo');
        const whiteLogo = document.querySelector('#white_logo');
        const newBookingWidget = document.querySelector('.new-booking-widget'); // For z-index control
        const dropdownToggles = document.querySelectorAll('.navbar-nav .menu-item-has-children > a');

        let isAnyMenuOpen = false;

        requestAnimationFrame(() => {
            dropdownMenus.forEach(function(menu) {
                if (menu.classList.contains('show')) {
                    isAnyMenuOpen = true;
                }
            });

            // Toggle dark header and logos based on dropdown state
            if (isAnyMenuOpen) {
                navbar.classList.add('darkHeader');
                whiteLogo.style.display = 'none';
                blackLogo.style.display = 'block';

                // Set z-index to allow dropdowns to appear over the widget
                if (newBookingWidget) {
                    newBookingWidget.style.setProperty('z-index', 'unset', 'important');
                }
                document.body.classList.add('overflow-hidden');
            } else {
                navbar.classList.remove('darkHeader');
                whiteLogo.style.display = 'block';
                blackLogo.style.display = 'none';

                // Reset z-index to default when dropdowns are closed
                if (newBookingWidget) {
                    newBookingWidget.style.setProperty('z-index', '999', 'important');
                }
                //disable scrolling
                document.body.classList.remove('overflow-hidden');
            }
        });
    }

    if (window.innerWidth > 1200) {
        handleDropdowns();
        adjustDropdownMargin();
    }

    // Event listener to handle resizing
    window.addEventListener('resize', function() {
        if (window.innerWidth > 1200) {
            handleDropdowns();
            adjustDropdownMargin();
        }
    });

    // Event listener to check for clicks anywhere on the page to update dropdown state
    document.addEventListener('click', function(event) {
        // Only execute handleDropdowns() if window width is greater than 1200px
        if (window.innerWidth > 1200) {
            handleDropdowns();

            // Handle dropdown interaction if a list item was clicked
            const clickedListItem = event.target.closest('li');
            if (clickedListItem) {
                // const dropdownMenu = clickedListItem.querySelector('.dropdown-menu');
                // if (dropdownMenu) {
                //   dropdownMenu.classList.toggle('show');
                // }
                handleDropdowns();
            }
        }
    });


    // Mouseover handling for larger screens only
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

    const navDropdowns = document.querySelectorAll('.nav-item.dropdown');
    const newBookingWidget = document.querySelector('.new-booking-widget');

    navDropdowns.forEach(dropdown => {

        const toggle = dropdown.querySelector('.dropdown-toggle');
        if (toggle) { // Check if toggle exists before adding an event listener
            toggle.addEventListener('click', function(event) {
                event.preventDefault();
                setTimeout(() => {
                    checkDropdownState(dropdown);
                }, 100);
            });
        } else {

        }
    });




    //function to add CTA
    function addCTAElements(menu, lang) {

        // Check if the CTA button already exists
        if (!menu.querySelector('.view-all-btn')) {

            const divider = document.createElement('div');
            divider.classList.add('modified-divider-vm');

            const buttonContainer = document.createElement('div');
            buttonContainer.classList.add('text-center', 'cta-buttons-redirection');

            const viewMoreButton = document.createElement('a');
            viewMoreButton.classList.add('btn', 'btn-outline-dark', 'view-all-btn', 'view-all-btn-adjustment');

            // Dynamically set and log href based on language
            viewMoreButton.href = "/" + ICL + "/destinations/";
            viewMoreButton.textContent = view_all_hotel;

            buttonContainer.appendChild(divider);
            buttonContainer.appendChild(viewMoreButton);
            menu.appendChild(buttonContainer);
            // disable scroll
            document.body.classList.add('overflow-hidden');
        } else {
            // enable scroll
            document.body.classList.remove('overflow-hidden');
        }
    }

    //function to add CTA  based on language
    function checkDropdownState(dropdown) {

        const menu = dropdown.querySelector('.dropdown-menu');

        if (menu.classList.contains('show') && menu.classList.contains('first-element-hotel-list')) {

            // Detect and adjust language
            let lang = document.documentElement.lang || 'en';

            if (lang === 'ru-ru') {
                lang = 'ru';
            } else if (lang === 'de-de') {
                lang = 'de';
            } else if (lang === 'fr-fr') {
                lang = 'fr';
            }

            // Call the function to add CTA elements
            addCTAElements(menu, lang);

            // Handle z-index adjustment

        } else {
            const buttonContainer = menu.querySelector('.text-center');
            if (buttonContainer) {
                menu.removeChild(buttonContainer);
            }
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

// document.querySelector('#nav-main .navbar-toggler').addEventListener('click', function() {
//   const navMain = document.getElementById('nav-main');
//   navMain.classList.toggle('menu-open');
//   navMain.classList.toggle('individual-home-navbar');

//   if (!navMain.classList.contains('darkHeader')) {
//     document.querySelectorAll('.navbar-brand .logo').forEach(logo => logo.style.display = logo.style
//       .display === 'none' ? 'block' : 'none');
//   }
//   document.documentElement.classList.toggle('overflow-hidden');
//   document.body.classList.toggle('overflow-hidden');
// });

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

    
<div id="content" class="site-content container-fluid p-0 greyboxlight">
   <div id="primary" class="content-area">

      <div class="row no-gutters">
         <div class="col-md-12">

            <main id="main" class="site-main">
               <!-- <link rel="stylesheet" href="/dependencies/external/www-addresshotels-com.azureedge.net/wp-content/themes/emaar-projects/template-parts/dynamic-blocks/assets/css/global_dynamic_blocks_common.css"> -->


<div id="carousalHeaders" class="carousel slide" data-ride="carousel">


  



  <div class="carousel-inner">

                  <style>
          .header-banner-img-container.dine-header-0 {
            background-image: linear-gradient(-105deg, rgba(37, 40, 45, 0) 18%, #000000 104%), radial-gradient(circle at 53% 100%, rgba(42, 60, 68, 0), rgba(42, 60, 68, 0) 53%, rgba(42, 60, 68, 0.6) 79%), url('../../../../wp-content/uploads/2022/11/Skyview-249.jpg');

          }
        </style>
            <div class="carousel-item active">
        <div class="container-fluid p-0 header-banner-img-container dine-header-0 header-2">
          <div class="row no-gutters h-100 align-items-center  px-4 px-lg-0 pl-lg-5">
            <div class="col-12 col-lg-8 header-banner-img-content-box pl-lg-5">

                              <h1 class="display-1-72 whitetext my-2 font-56-mobile">Address Sky View Dining</h1>
                            <p class="body-2 whitetext"></p>


              <div class="carousal-banner-cta mt-5">
                              </div>
            </div>

          </div>

        </div>
      </div>

    
  </div>


  </div>


<script>
   var hotel = "address-sky-view";
</script>



<div class="container px-md-5 px-lg-4">
    <div class="row my-4">
        <div class="col-lg-6 col-md-12 col-12">
            <h2 class="display-2-48">Find A Restaurant</h2>
        </div>
        <div class="col-lg-6 col-md-12 col-12">
            <ul class="d-flex  align-items-center justify-content-end restaurant-filter m-0 h-100">
                                <li class="p-0 filterbox mx-2 w-md-100">
                    <select class="selectpicker cuisine_filter w-md-100" data-default-value="all">
                        <option title="Cuisine" value="all">All</option>
                                                    <option value="contemporary-asian"> Contemporary Asian </option>
                                                    <option value="french-bistronomy"> French Bistronomy </option>
                                                    <option value="modern-italian"> Modern Italian </option>
                                                    <option value="pastries-and-cakes"> Pastries and Cakes </option>
                                                    <option value="peruvian-japanese"> Peruvian Japanese </option>
                                                    <option value="pool-lounge"> Pool Lounge </option>
                                                    <option value="rooftop-pool-lounge"> Rooftop Pool Lounge </option>
                                            </select>
                </li>
                <li class="p-0 filterbox mx-2 w-md-100">
                    <select class="selectpicker exp_filter w-md-100" data-default-value="all">
                        <option title="Experience" value="all">All</option>
                                                    <option value="a-la-carte"> A La Carte </option>
                                                    <option value="afternoon-tea"> Afternoon Tea </option>
                                                    <option value="all-day-dining"> All day Dining </option>
                                                    <option value="bar"> Bar </option>
                                                    <option value="breakfast"> Breakfast </option>
                                                    <option value="brunch"> Brunch </option>
                                                    <option value="business-lunch"> Business Lunch </option>
                                                    <option value="cafe"> Café </option>
                                                    <option value="dinner"> Dinner </option>
                                                    <option value="dubai-skyline-dining"> Dubai skyline dining </option>
                                                    <option value="light-bites"> Light Bites </option>
                                                    <option value="lounge"> Lounge </option>
                                                    <option value="lunch"> Lunch </option>
                                                    <option value="nightlife"> Nightlife </option>
                                                    <option value="poolside"> Poolside </option>
                                                    <option value="poolside-bites"> Poolside Bites </option>
                                                    <option value="seafood-restaurants"> Seafood Restaurants </option>
                                            </select>
                </li>
            </ul>
        </div>
    </div>

</div>

<!-- ------FETCH DINE ------ -->
<div class="container mt-5 px-md-5 px-lg-4">
    <div class="row">
                    <div class="col-12 col-md-6 col-lg-4 card-container restaurant-card  exp-breakfast exp-brunch exp-dinner exp-lunch" data-hotel="address-sky-view" data-cuisine="french-bistronomy" data-experience="breakfast">
                <!-- //?Image Container -->
                <div class="card-image">
                                    <img width="816" height="728" decoding="async" src="/dependencies/img/wp-content/uploads/2020/10/The-Restaurant-SV.jpg" alt="dine-image" class="img-fluid">
                                    </div>
                <!-- //?Hotel Names/ -->
                <div class="card-data p-3">
                    <div class="card-overlay">
                        <h6 class="body-4 secondary-semibold mb-2 mx-1 text-capitalize">The Restaurant at Address Sky View</h6>
                                                    <p class="body-4 mb-1 mx-1">&nbsp;French Bistronomy</p>
                                                                                <p class="body-4 mt-3 mb-4 mx-1">&nbsp;</p>
                                                </div>
                    <div class="card-buttons d-flex">

                                                <a href="/en/restaurant/address-sky-view/the-restaurant-at-address-sky-view/" data-id="1" class="btn secondary-btn secondary-small w-100 mx-1">View Details</a>
                                                        <!-- <a href="" class="btn primary-btn primary-small w-100 mx-1 bookingdinecta" data-backdrop="static" data-email="" data-phnumber="" data-id="1" data-OpensAt="" data-ClosesAt="" data-MaxPartySize="" data-name="" data-hotel="" data-toggle="modal" data-target="#bookingModalGlobal" data-backdrop="static">
                                                                    </a> -->
                                                                                <a href="/dependencies/external/www.sevenrooms.com/explore/therestaurantadsv/reservations/create/search-tracking-the-restaurant-address-sky-view-official.bin" class="btn primary-btn primary-small w-100 mx-1 bookingdinecta" target="_blank" data-name="The Restaurant at Address Sky View" data-hotel="">Reserve a Table</a>
                                            </div>
                </div>
            </div>
                    <div class="col-12 col-md-6 col-lg-4 card-container restaurant-card  exp-breakfast exp-cafe exp-lunch" data-hotel="address-sky-view" data-cuisine="pastries-and-cakes" data-experience="breakfast">
                <!-- //?Image Container -->
                <div class="card-image">
                                    <img width="824" height="520" decoding="async" src="/dependencies/img/wp-content/uploads/2020/10/Patisserie-Image-Address-Sky-View824x520.jpg" alt="dine-image" class="img-fluid">
                                    </div>
                <!-- //?Hotel Names/ -->
                <div class="card-data p-3">
                    <div class="card-overlay">
                        <h6 class="body-4 secondary-semibold mb-2 mx-1 text-capitalize">Patisserie</h6>
                                                    <p class="body-4 mb-1 mx-1">&nbsp;Pastries and Cakes</p>
                                                                                <p class="body-4 mt-3 mb-4 mx-1">&nbsp;</p>
                                                </div>
                    <div class="card-buttons d-flex">

                                                <a href="/en/restaurant/address-sky-view/patisserie-at-address-sky-view/" data-id="" class="btn secondary-btn secondary-small w-100 mx-1">View Details</a>
                                                        <!-- <a href="" class="btn primary-btn primary-small w-100 mx-1 bookingdinecta" data-backdrop="static" data-email="" data-phnumber="" data-id="0" data-OpensAt="" data-ClosesAt="" data-MaxPartySize="" data-name="" data-hotel="" data-toggle="modal" data-target="#bookingModalGlobal" data-backdrop="static">
                                                                    </a> -->
                                                                        </div>
                </div>
            </div>
                    <div class="col-12 col-md-6 col-lg-4 card-container restaurant-card  exp-brunch exp-dinner exp-lunch exp-nightlife exp-poolside" data-hotel="address-sky-view" data-cuisine="pool-lounge" data-experience="brunch">
                <!-- //?Image Container -->
                <div class="card-image">
                                    <img width="2560" height="1707" decoding="async" src="/dependencies/img/wp-content/uploads/2020/10/ADH_ADSVH_FACILITIES_LOBBYPOOL_AMBIENT_HR_01-1-scaled.jpg.webp" alt="dine-image" class="img-fluid">
                                    </div>
                <!-- //?Hotel Names/ -->
                <div class="card-data p-3">
                    <div class="card-overlay">
                        <h6 class="body-4 secondary-semibold mb-2 mx-1 text-capitalize">Deck Too</h6>
                                                    <p class="body-4 mb-1 mx-1">&nbsp;Pool Lounge</p>
                                                                                <p class="body-4 mt-3 mb-4 mx-1">&nbsp;</p>
                                                </div>
                    <div class="card-buttons d-flex">

                                                <a href="/en/restaurant/address-sky-view/deck-too/" data-id="3" class="btn secondary-btn secondary-small w-100 mx-1">View Details</a>
                                                        <!-- <a href="" class="btn primary-btn primary-small w-100 mx-1 bookingdinecta" data-backdrop="static" data-email="" data-phnumber="" data-id="3" data-OpensAt="" data-ClosesAt="" data-MaxPartySize="" data-name="" data-hotel="" data-toggle="modal" data-target="#bookingModalGlobal" data-backdrop="static">
                                                                    </a> -->
                                                                        </div>
                </div>
            </div>
                    <div class="col-12 col-md-6 col-lg-4 card-container restaurant-card  exp-breakfast exp-brunch exp-dinner exp-lunch" data-hotel="address-sky-view" data-cuisine="contemporary-asian" data-experience="breakfast">
                <!-- //?Image Container -->
                <div class="card-image">
                                    <img width="960" height="485" decoding="async" src="/dependencies/img/wp-content/uploads/2022/06/HERO_1920x970.jpg.webp" alt="dine-image" class="img-fluid">
                                    </div>
                <!-- //?Hotel Names/ -->
                <div class="card-data p-3">
                    <div class="card-overlay">
                        <h6 class="body-4 secondary-semibold mb-2 mx-1 text-capitalize">CÉ LA VI</h6>
                                                    <p class="body-4 mb-1 mx-1">&nbsp;Contemporary Asian</p>
                                                                                <p class="body-4 mt-3 mb-4 mx-1">&nbsp;</p>
                                                </div>
                    <div class="card-buttons d-flex">

                                                <a href="/en/restaurant/address-sky-view/ce-la-vi/" data-id="" class="btn secondary-btn secondary-small w-100 mx-1">View Details</a>
                                                        <!-- <a href="" class="btn primary-btn primary-small w-100 mx-1 bookingdinecta" data-backdrop="static" data-email="" data-phnumber="" data-id="0" data-OpensAt="" data-ClosesAt="" data-MaxPartySize="" data-name="" data-hotel="" data-toggle="modal" data-target="#bookingModalGlobal" data-backdrop="static">
                                                                    </a> -->
                                                                        </div>
                </div>
            </div>
                    <div class="col-12 col-md-6 col-lg-4 card-container restaurant-card  exp-dinner" data-hotel="address-sky-view" data-cuisine="peruvian-japanese" data-experience="dinner">
                <!-- //?Image Container -->
                <div class="card-image">
                                    <img width="2560" height="1707" decoding="async" src="/dependencies/img/wp-content/uploads/2022/07/VTL00284-HDR-scaled.jpg.webp" alt="dine-image" class="img-fluid">
                                    </div>
                <!-- //?Hotel Names/ -->
                <div class="card-data p-3">
                    <div class="card-overlay">
                        <h6 class="body-4 secondary-semibold mb-2 mx-1 text-capitalize">Amelia Restaurant and Lounge</h6>
                                                    <p class="body-4 mb-1 mx-1">&nbsp;Peruvian Japanese</p>
                                                                                <p class="body-4 mt-3 mb-4 mx-1">&nbsp;</p>
                                                </div>
                    <div class="card-buttons d-flex">

                                                <a href="/en/restaurant/address-sky-view/amelia-restaurant-and-lounge/" data-id="" class="btn secondary-btn secondary-small w-100 mx-1">View Details</a>
                                                        <!-- <a href="" class="btn primary-btn primary-small w-100 mx-1 bookingdinecta" data-backdrop="static" data-email="" data-phnumber="" data-id="0" data-OpensAt="" data-ClosesAt="" data-MaxPartySize="" data-name="" data-hotel="" data-toggle="modal" data-target="#bookingModalGlobal" data-backdrop="static">
                                                                    </a> -->
                                                                        </div>
                </div>
            </div>
                    <div class="col-12 col-md-6 col-lg-4 card-container restaurant-card " data-hotel="address-sky-view" data-cuisine="rooftop-pool-lounge" data-experience="">
                <!-- //?Image Container -->
                <div class="card-image">
                                    <img width="2256" height="928" decoding="async" src="/dependencies/img/wp-content/uploads/2025/02/INFINITY-POOL-ADDRESS-SKY-VIEW-e1739341203610.jpg" alt="dine-image" class="img-fluid">
                                    </div>
                <!-- //?Hotel Names/ -->
                <div class="card-data p-3">
                    <div class="card-overlay">
                        <h6 class="body-4 secondary-semibold mb-2 mx-1 text-capitalize">Alto 54</h6>
                                                    <p class="body-4 mb-1 mx-1">&nbsp;Rooftop Pool Lounge</p>
                                                                                <p class="body-4 mt-3 mb-4 mx-1">&nbsp;</p>
                                                </div>
                    <div class="card-buttons d-flex">

                                                <a href="/en/restaurant/address-sky-view/alto-54/" data-id="" class="btn secondary-btn secondary-small w-100 mx-1">View Details</a>
                                                        <!-- <a href="" class="btn primary-btn primary-small w-100 mx-1 bookingdinecta" data-backdrop="static" data-email="" data-phnumber="" data-id="0" data-OpensAt="" data-ClosesAt="" data-MaxPartySize="" data-name="" data-hotel="" data-toggle="modal" data-target="#bookingModalGlobal" data-backdrop="static">
                                                                    </a> -->
                                                                        </div>
                </div>
            </div>
                    <div class="col-12 col-md-6 col-lg-4 card-container restaurant-card " data-hotel="address-sky-view" data-cuisine="modern-italian" data-experience="">
                <!-- //?Image Container -->
                <div class="card-image">
                                    <img width="1784" height="600" decoding="async" src="/dependencies/img/wp-content/uploads/2026/02/Web-banner.jpg" alt="dine-image" class="img-fluid">
                                    </div>
                <!-- //?Hotel Names/ -->
                <div class="card-data p-3">
                    <div class="card-overlay">
                        <h6 class="body-4 secondary-semibold mb-2 mx-1 text-capitalize">Felicità</h6>
                                                    <p class="body-4 mb-1 mx-1">&nbsp;Modern Italian</p>
                                                                                <p class="body-4 mt-3 mb-4 mx-1">&nbsp;</p>
                                                </div>
                    <div class="card-buttons d-flex">

                                                <a href="/en/restaurant/address-sky-view/felicita/" data-id="" class="btn secondary-btn secondary-small w-100 mx-1">View Details</a>
                                                        <!-- <a href="" class="btn primary-btn primary-small w-100 mx-1 bookingdinecta" data-backdrop="static" data-email="" data-phnumber="" data-id="0" data-OpensAt="" data-ClosesAt="" data-MaxPartySize="" data-name="" data-hotel="" data-toggle="modal" data-target="#bookingModalGlobal" data-backdrop="static">
                                                                    </a> -->
                                                                        </div>
                </div>
            </div>
            </div>
</div>

<style>
.card-container.restaurant-card .card-overlay p{
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    cursor: default;
}

</style>
<script>
document.addEventListener("click", function (e) {
    const btn = e.target.closest(".bookingdinecta");
    
    if (!btn) return;
    
    window.dataLayer = window.dataLayer || [];

    dataLayer.push({
        event: "reservation_cta_click",
        reservation: {
            type: "dine",
            brand: "Address", 
            hotel_name: btn.getAttribute("data-hotel") || "",
            hotel_location: "Dubai, UAE",
            venue_name: btn.getAttribute("data-name") || "",
            cta_text: btn.textContent.trim(),
            cta_position: "card",
            destination_url: window.location.pathname.replace(/^\/|\/$/g, ''),
            provider: "SevenRooms",
            language: document.documentElement.lang || "en",
            site_scope: "property",
            page_url: window.location.href,
            page_title: document.title,
            // restaurant_id: btn.getAttribute("data-id") || "",
            // opens_at: btn.getAttribute("data-OpensAt") || "",
            // closes_at: btn.getAttribute("data-ClosesAt") || "",
            // max_party_size: btn.getAttribute("data-MaxPartySize") || "",
            // contact_email: btn.getAttribute("data-email") || "",
            // contact_number: btn.getAttribute("data-phnumber") || ""
        }
    });
});
</script>
            </main><!-- #main -->

         </div><!-- col -->
      </div><!-- row -->

   </div><!-- #primary -->
</div><!-- #content -->

<?php include dirname(__DIR__, 1) . '/_partials/footer.php'; ?>
<?php include dirname(__DIR__, 1) . '/_partials/foot.php'; ?>
</body>

</html><!-- Rocket has webp -->
<!-- This website is like a Rocket, isn't it? Performance optimized by WP Rocket. Learn more: https://wp-rocket.me -->