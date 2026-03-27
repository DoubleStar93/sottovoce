<?php declare(strict_types=1); ?>
<!doctype html>
<html lang="en">


<?php include dirname(__DIR__, 1) . '/_partials/head.php'; ?>

<body class="page-template-default page page-id-2772 page-parent page-child parent-pageid-3739">
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
var page = {"PAGE_SCOPE":"individual","HOME_PAGE":false,"DINE_PAGE":false,"BOOK_NOW_BTN":false,"HOTEL_TITLE":"Address Sky View","HOTEL_SLUG":"address-sky-view","HOTEL_ID":"18","TEMPLATE":"default","HOTEL_URL":"https:\/\/www.addresshotels.com\/en\/hotels\/address-sky-view\/","DROPDOWN_POSITION":"dropup","DISABLE_BOOK_NOW":false,"FACEBOOK_SOCIAL_LINK":"https:\/\/www.facebook.com\/addressskyview","TWITTER_SOCIAL_LINK":"https:\/\/twitter.com\/Address_Hotels\/","YOUTUBE_SOCIAL_LINK":"https:\/\/www.youtube.com\/@AddressHotels","INSTAGRAM_SOCIAL_LINK":"https:\/\/www.instagram.com\/addressskyview\/","WHATSAPP_SOCIAL_LINK":"97142488553","POST_TYPE":"page"};
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

            if (workAreaMoreDropdown && workAreaMoreDropdown.classList.contains('show')) {
                isAnyMenuOpen = true;
            }

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

    
<div id="content" class="site-content container-fluid p-0">
   <div id="primary" class="content-area">

      <div class="row no-gutters">
         <div class="col-md-12">

            <main id="main" class="site-main">
               <header class="internal-page">
  <div class="container-fluid p-0 header-banner-img-container header-2">

    <div class="row no-gutters h-100 align-items-center  px-4 px-lg-0 pl-lg-5">
      <div class="col-12 col-lg-8 header-banner-img-content-box pl-lg-5">

        
        
      </div>
    </div>

  </div>
</header>

  <style>
    .header-banner-img-container {
      background-image: linear-gradient(-105deg, rgba(37, 40, 45, 0) 18%, #000000 104%), radial-gradient(circle at 53% 100%, rgba(42, 60, 68, 0), rgba(42, 60, 68, 0) 53%, rgba(42, 60, 68, 0.6) 79%), url('../../../../wp-content/uploads/2020/10/ADH_ADSVH_FACILITIES_SPA_FEMALE_VITALITY_POOL_AMBIENT_HR_09.jpg');

    }
  </style>



<div class="container spa-and-wellness-section text-center px-lg-0">
   <div class="row no-gutters align-items-center text-center justify-content-between">
      <div class="col-12 col-lg-6 content-box">

                     <h6 class="eyebrow-dark text-center">SPA AND WELLNESS</h6>
         
                     <h2 class="display-1-72 text-center font-56-mobile my-4">Extraordinary Experiences</h2>
         
                     <p class="body-4 text-center my-4">Go on a journey of self-discovery at The Spa, or bolster your fitness regiment at the high-tech Fitness Centre. Either way, you’re guaranteed a memorable experience.</p>
         

         <div class="wellness_contact_Info body-4 text-center mt-md-4 p-lg-2">

                           <p class="m-0">
                  <i class="fal fa-clock pr-2 pl-4"></i>
                  <span class="dir-ltr">10.00am to 10.00pm</span>
               </p>
            
                           <p class="m-0">
                  <i class="fal fa-envelope pr-2 pl-4"></i>
                  <a href="mailto:spa.adsvh@addresshotels.com" class="bluelink">spa.adsvh@addresshotels.com</a>
               </p>
            
                           <p class="m-0">
                  <i class="fal fa-phone-alt pr-2 pl-4"></i>
                  <span class="dir-ltr">+97148738888</span>
               </p>
            
         </div>

         <div class="cta-btns-inline my-5 my-lg-4 row no-gutters">
                           <a class=" btn col-7 col-md-5 my-2 m-2 d-flex align-items-center justify-content-center black-btn-hvr sec-def-btn section-1-part-1-btn-view-more btn secondary-btn" href="/pages/wellness/spa/index.php" target="_self">View More</a>

            
                           <a class=" btn col-7 col-md-5 m-2 d-flex align-items-center justify-content-center  white-btn-hvr prim-def-black-btn  section-1-part-1-btn-reserve-your-spa primary-btn btn-reserve-unique" href="/dependencies/external/emea.spatime.com/asv1969/5383409/home.bin" target="_self">Reserve Your Treatment</a>
            
         </div>

      </div>

      <div class="col-12 col-lg-5 img-box img-shadow px-0">
                     <img width="804" height="748" decoding="async" src="/dependencies/img/wp-content/uploads/2020/10/AD_BRAND_SKY_VIEW_EGG_CHAIRS_2875_LIFESTYLE-copy.jpg" alt="" class="img-fluid h-100 w-100">
               </div>

   </div>
</div>

<!-- <link rel="stylesheet" href="/dependencies/external/www-addresshotels-com.azureedge.net/wp-content/themes/emaar-projects/template-parts/dynamic-blocks/assets/css/wellness-pool-details.css"> -->


<div class="container-fluid wellness-pool-details text-center">
   <div class="wellness-pool-img m-0">
               <img width="1920" height="1024" decoding="async" src="/dependencies/img/wp-content/uploads/2020/10/AD_BRAND_SKY_VIEW_SKY_DECK_INFINITYPOOL_0714_LIFESTYLE-copy.jpg" alt="Swimming Pool at Address Sky View" class="img-fluid">
         </div>

   <div class="container wellness-pool-content-box ">

               <h6 class="pt-2 eyebrow-dark">
            <p>SWIMMING POOL</p>
         </h6>
      
               <h2 class="pb-3 display-1-72 mt-3">Dubai’s Ultimate Pool</h2>
      
      <hr>
      
               <p class="body-4">With the iconic Sky Deck, enviable lounging areas and a refreshing pool bar, the Address Sky View infinity pool simply pushes the boundaries of imagination.</p>
      
      <ul class="list-two-col text-left body-4 d-flex flex-md-row flex-column flex-wrap">
                              <li class="d-flex align-items-center"><span class="generic-icon px-2"></span>Panoramic city views</li>
                                       <li class="d-flex align-items-center"><span class="generic-icon px-2"></span>Large sun-lunging deck</li>
                                       <li class="d-flex align-items-center"><span class="generic-icon px-2"></span>Private cabanas</li>
                                       <li class="d-flex align-items-center"><span class="generic-icon px-2"></span>Pool bar with pool seating and dry deck seating</li>
                                       <li class="d-flex align-items-center"><span class="generic-icon px-2"></span>Access to hotel guests only.</li>
                                       <li class="d-flex align-items-center"><span class="generic-icon px-2"></span>Access to 18 years and above.</li>
                                       <li class="d-flex align-items-center"><span class="generic-icon px-2"></span>Timing: 9:00 AM to sunset </li>
                        </ul>


   </div>

</div>


<div class="container-fluid wellness-fitness-center">
   <div class="row g-o">

      <div class="col-12 col-lg-7 px-0">
                     <img width="2100" height="1399" decoding="async" class="img-fluid w-100 h-100" src="/dependencies/img/wp-content/uploads/2024/01/FITNESS-GYM-ADDRESS-SKY-VIEW-1-4.jpg.webp">
               </div>

      <div class="col-12 col-lg-5 px-0 bg-dark flex-md-row text-white">
         <div class="wellness-fitness-text-content">

                           <h6 class="eyebrow-dark whitetext">FITNESS CENTRE</h6>
            
                           <h2 class="font-56-mobile display-1-72 whitetext">Get Fit In Style</h2>
            
                           <div>
                  <p class="body-4 whitetext">
                     With cutting-edge equipment, a dedicated team of trainers and powerfully motivating views, The Fitness Centre at Address Sky View offers you the workout you have always wanted.                  </p>
               </div>
            
            <dl class="wellness_Icons_12 body-4 whitetext">

                                 <dd class="d-flex align-items-center">
                     <i class="fal fa-clock pr-2 pt40p"></i>
                     Daily, 24 hours                   </dd>
               
                                 <dd class="d-flex align-items-center">
                     <i class="fal fa-map-marker-alt pr-2"></i>
                     1st Floor, Address Sky View                  </dd>
               
                                 <dd class="d-flex align-items-center">
                     <i class="fal fa-phone-alt pr-2"></i>
                     <span class="dir-ltr">
                     <a class="text-white" href="tel:+97148738886">+97148738886</a>
                     </span>
                  </dd>
               
                                 <dd class="d-flex align-items-center">
                     <i class="fal fa-envelope pr-2"></i>
                     <a href="mailto:spa.adsvh@addresshotels.com" class="whitelink text-white">spa.adsvh@addresshotels.com</a>
                  </dd>
               
            </dl>

                           <a class="white-btn-hvr sec-white-btn section-get-fit-stay-fit-btn transparent-btn d-block" href="/dependencies/docs/wp-content/uploads/2024/01/ADSV_FITNESS_FLYER.pdf" rel="nofollow" target="">
                  <i class="fal fa-arrow-to-bottom pr-2"></i>
                  Brochure Pdf               </a>
            
         </div>
      </div>
   </div>
</div>


<div class="wp-block-group greyboxlight d-none"><div class="wp-block-group__inner-container is-layout-flow wp-block-group-is-layout-flow"></div></div>



<div class="container wellness-fitness-features-main">

   <div class="wellness-fitness-features-heading">
               <h2 class="display-2-48">The Future of Fitness</h2>
         </div>

   <div class="wellness-fitness-features">
      <div class="wellness-fitness-features-box">
         <ul class="">
            <li class="d-flex align-items-center"><span class="generic-icon px-2"></span><span class="text-left">State-of-the-art gym</span></li><li class="d-flex align-items-center"><span class="generic-icon px-2"></span><span class="text-left">High-tech equipment</span></li><li class="d-flex align-items-center"><span class="generic-icon px-2"></span><span class="text-left">Certified Personal Trainers</span></li><li class="d-flex align-items-center"><span class="generic-icon px-2"></span><span class="text-left">Yoga studio</span></li><li class="d-flex align-items-center"><span class="generic-icon px-2"></span><span class="text-left">Equipment-integrated TV</span></li><li class="d-flex align-items-center"><span class="generic-icon px-2"></span><span class="text-left">Positive atmosphere</span></li><li class="d-flex align-items-center"><span class="generic-icon px-2"></span><span class="text-left">Juice counter</span></li><li class="d-flex align-items-center"><span class="generic-icon px-2"></span><span class="text-left">Personal Training session</span></li><li class="d-flex align-items-center"><span class="generic-icon px-2"></span><span class="text-left">Fitness Classes</span></li><li class="d-flex align-items-center"><span class="generic-icon px-2"></span><span class="text-left">Views of Burj Khalifa</span></li>         </ul>
      </div>
   </div>
</div>

<script>
   var total_offers = 1;
</script>
   <div class="container-fluid greyboxlight">
      <div class="container py-4">
         <h2 class="display-2-48">Featured Offers</h2>
         <div class="row">
            <div class="flickity_carousel w-100">
               

                     <div class="col-11 col-md-6 col-lg-4 px-lg-3 pl-0 card-container carousel-cell">
                        <div class="card-image">
                           <img width="1088" height="1088" decoding="async" class="img-fluid" src="/dependencies/img/wp-content/uploads/2021/10/PRIVATE-JACUZZI-TIME-AT-THE-SPA-ADDRESS-SKY-VIEW.jpg.webp" alt="Jacuzzi with stunning Downtown Dubai &#038; Burj Khalifa view at Address Hotels + Resorts">
                        </div>
                        <div class="card-data p-3">
                           <div class="card-overlay">
                              <h6 class="body-4 secondary-semibold mb-3 mx-1 text-capitalize"><a class="post_title w4pl_post_title body-4 secondary-semibold" href="/en/offers/private-jacuzzi-time-at-the-spa/" title="Private Jacuzzi Time at The Spa"> Private Jacuzzi Time at The Spa </a></h6>
                              <i class="fal fa-map-marker-alt pr-2"></i>Address Sky View                              <p class="d-none d-lg-block">&nbsp;</p>

                           </div>
                           <div class="card-buttons d-flex w-100i">
                              <a href="/en/offers/private-jacuzzi-time-at-the-spa/" class="btn whitebtnborder w-100 mr-2 secondary-btn secondary-small">
                                 View Details</a>
                                                         </div>
                        </div>
                     </div>
                           </div>
         </div>
      </div>
   </div>


<script>
   $(document).ready(function() {

      if (ICL == 'ar') {
         $('.flickity_carousel').flickity({
            // options
            cellAlign: 'right',
            contain: true,
            prevNextButtons: false,
            pageDots: false,
            rightToLeft: true
         });
      } else {

         $('.flickity_carousel').flickity({
            // options
            cellAlign: 'left',
            contain: true,
            prevNextButtons: false,
            pageDots: false,

         });
      }
   });
</script>            </main><!-- #main -->

         </div><!-- col -->
      </div><!-- row -->

   </div><!-- #primary -->
</div><!-- #content -->

<?php include dirname(__DIR__, 1) . '/_partials/footer.php'; ?>
<?php include dirname(__DIR__, 1) . '/_partials/foot.php'; ?>
</body>

</html><!-- Rocket has webp -->
<!-- This website is like a Rocket, isn't it? Performance optimized by WP Rocket. Learn more: https://wp-rocket.me -->