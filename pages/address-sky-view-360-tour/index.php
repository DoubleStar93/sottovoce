<?php declare(strict_types=1); ?>
<!doctype html>
<html lang="en">


<?php include dirname(__DIR__, 1) . '/_partials/head.php'; ?>

<body class="page-template-default page page-id-57607 page-child parent-pageid-3739">
  <!-- Preloader -->
  <!-- Preloader End -->
  <div id="page" class="site">

    <script>
      ICL = "en";
      RECAPTCHA_SITE_KEY = "6Ld_JNIbAAAAAPu9Dbv8WgBHfIYmdKBzNh-7w72X";
    </script>

    
<script>
var page = {"PAGE_SCOPE":"individual","HOME_PAGE":false,"DINE_PAGE":false,"BOOK_NOW_BTN":false,"HOTEL_TITLE":"Address Sky View","HOTEL_SLUG":"address-sky-view","HOTEL_ID":"18","TEMPLATE":"","HOTEL_URL":"https:\/\/www.addresshotels.com\/en\/hotels\/address-sky-view\/","DROPDOWN_POSITION":"dropup","DISABLE_BOOK_NOW":false,"FACEBOOK_SOCIAL_LINK":"https:\/\/www.facebook.com\/addressskyview","TWITTER_SOCIAL_LINK":"https:\/\/twitter.com\/Address_Hotels\/","YOUTUBE_SOCIAL_LINK":"https:\/\/www.youtube.com\/@AddressHotels","INSTAGRAM_SOCIAL_LINK":"https:\/\/www.instagram.com\/addressskyview\/","WHATSAPP_SOCIAL_LINK":"97142488553","POST_TYPE":"page"};
</script>



<?php include dirname(__DIR__, 1) . '/_partials/header.php'; ?><!-- #masthead -->

<style>
#nav-main .right-nav-container {
    max-width: 400px !important;
}

@media screen and (min-width: 1140px) {
    :lang(ar).navbar-collapse .navbar-nav.rightlinks {
        padding-inline-end: 0 !important;
        /* Adjusted for RTL support */
    }

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

    /* .manageBooking-desktop {
      position: absolute;
      right: 75px;
    } */

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
}


/* .darkHeader .manageBooking-global.manageBooking-desktop {
    right: 70px !important;
  } */

/* :lang(ar) .darkHeader .manageBooking-desktop {
    right: unset !important;
    left: 55px !important;
  }

  :lang(ar) .darkHeader .manageBooking-desktop {
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

@media screen and (min-width: 900px) and (max-width: 1199px) {

    /* :lang(ar) .darkHeader .manageBooking-desktop {
      right: unset !important;
      left: 30px !important;
    } */

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
</style>
<script>
$('#nav-main .navbar-toggler').click(function() {
    $('#nav-main').toggleClass('menu-open');
    $('html,body').toggleClass('overflow-hidden');
})
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
        const dropdownMenus = document.querySelectorAll('.navbar-nav .menu-item-has-children .dropdown-menu');
        const navbar = document.querySelector('#nav-main.navbar');
        const blackLogo = document.querySelector('#black_logo');
        const whiteLogo = document.querySelector('#white_logo');
        let isAnyMenuOpen = false;

        dropdownMenus.forEach(function(menu) {
            if (menu.classList.contains('show')) {
                isAnyMenuOpen = true;
            }
        });

        if (!isAnyMenuOpen) {

            document.body.classList.remove('overflow-hidden');
        }

    }

    adjustDropdownMargin();
    handleDropdowns();

    // Event listener to adjust dropdown margin and handle dark header on window resize
    window.addEventListener('resize', function() {
        adjustDropdownMargin();
        handleDropdowns();
    });

    // Event listener to check for clicks anywhere on the page
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

    function checkDropdownState(dropdown) {
        const menu = dropdown.querySelector('.dropdown-menu');
        if (menu.classList.contains('show') && menu.classList.contains('first-element-hotel-list')) {

            if (!menu.querySelector('.view-all-btn')) {
                const divider = document.createElement('div');
                divider.classList.add('modified-divider-vm');
                const buttonContainer = document.createElement('div');
                buttonContainer.classList.add('text-center', 'cta-buttons-redirection');

                const viewMoreButton = document.createElement('a');
                viewMoreButton.classList.add('btn', 'btn-outline-dark', 'view-all-btn',
                    'view-all-btn-adjustment');
                viewMoreButton.href = "/" + ICL;
                viewMoreButton.textContent = isRTL ? "موقع عنوان العالمي" :
                    "Address Global Website"; // Arabic text

                buttonContainer.appendChild(divider);
                buttonContainer.appendChild(viewMoreButton);
                menu.appendChild(buttonContainer);
            }
        } else {
            const buttonContainer = menu.querySelector('.text-center');
            if (buttonContainer) {
                menu.removeChild(buttonContainer);
            }
        }
    }

});

document.addEventListener("DOMContentLoaded", function() {
    const togglerButton = document.querySelector('.navbar-toggler');
    const collapseElement = document.querySelector('.bootstrap-collapse-navbar');
    const navbar = document.querySelector('.navbar'); // Select the navbar
    let addedStyle = null; // To keep track of dynamically added style

    // Improved logging for missing elements
    if (!togglerButton) {
        console.error(
            "Toggler button not found: Please check if an element with class 'navbar-toggler' exists.");
    }
    if (!collapseElement) {
        console.error(
            "Collapse element not found: Please check if an element with class 'bootstrap-collapse-navbar' exists."
        );
    }
    if (!navbar) {
        console.error("Navbar not found: Please check if an element with class 'navbar' exists.");
    }

    // Continue only if all elements are found
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
                        @media (max-width: 1199px) {
                            #work-area {
                                display: block !important;
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
                    headerBottomLine.classList.remove('menus-open'); // Add class when menus are open
                }

                // If 'menu-open' class is not present, remove any added styles
                if (addedStyle) {
                    addedStyle.remove(); // Remove the dynamically added <style> element
                    addedStyle = null; // Reset the reference
                }
            }
        });
    } else {
        console.error("Required elements are missing. Check the logs above for more details.");
    }
});
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
  <div class="header-content">
    
  </div>
</header>

<div class="width-1204-p container whtcontent2">
  <div class="row w-100 mx-auto pt-80">
    <div class="col-lg-12">
      <div class="wp-block-address-content-box-21 contact-us-titles body-4 secondary-medium">
                    <h3 class="display-2-48 secondary-medium mb-5 text-center">360 Virtual Tour at Address Sky View  </h3>
              </div>
    </div>

    <div class="col-lg-12 i-frame-height-adjustment">
      <div class="embed-responsive embed-responsive-16by9 i-frame-responsiveness">
        <iframe loading="lazy" class="embed-responsive-item" src="about:blank" frameborder="0" allowfullscreen="" allow="xr-spatial-tracking" data-rocket-lazyload="fitvidscompatible" data-lazy-src="/dependencies/external/dbnproduction.com/address-sky-view.bin"></iframe><noscript><iframe class="embed-responsive-item" src="/dependencies/external/dbnproduction.com/address-sky-view.bin" frameborder="0" allowfullscreen="" allow="xr-spatial-tracking"></iframe></noscript>      </div>
    </div>
  </div>
</div>
<style>
  .whtcontent2 {
    padding: 50px 80px;
  }

  #content {
    min-height: 100%;
  }

  @media(max-width:991px) {
    .whtcontent2 {
      padding: 40px 20px 60px;
    }
  }

  @media(max-width:650px) {

    .i-frame-height-adjustment,
    .i-frame-responsiveness {
      height: 600px;
    }
  }

  @media(max-width:450px) {

    .i-frame-height-adjustment,
    .i-frame-responsiveness {
      height: 500px;
    }


  }
</style>            </main><!-- #main -->

         </div><!-- col -->
      </div><!-- row -->

   </div><!-- #primary -->
</div><!-- #content -->

<?php include dirname(__DIR__, 1) . '/_partials/footer.php'; ?>
<?php include dirname(__DIR__, 1) . '/_partials/foot.php'; ?>
</body>

</html><!-- Rocket has webp -->
<!-- This website is like a Rocket, isn't it? Performance optimized by WP Rocket. Learn more: https://wp-rocket.me -->