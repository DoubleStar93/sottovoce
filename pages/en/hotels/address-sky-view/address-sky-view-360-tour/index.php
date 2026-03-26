<?php declare(strict_types=1); ?>
<!doctype html>
<html lang="en">


<?php include dirname(__DIR__, 4) . '/_partials/head.php'; ?>

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



<?php include dirname(__DIR__, 4) . '/_partials/header.php'; ?><!-- #masthead -->

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

@media (min-width: 1199px) {

    /* CSS to hide the work-area initially */
    #work-area {
        visibility: hidden;
        /* or use display: none; if needed */
    }

    /* CSS to hide the navigation-ul-area initially */
    .navigation-ul-area {
        visibility: hidden;
        /* or use display: none; if necessary */
    }
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
        const workAreaMoreDropdown = document.querySelector('#work-area-dropss');

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

    function getSpacingBetweenItems(container) {
        const items = container.querySelectorAll('.static-area > li');
        let totalSpacing = 0;
        let count = 0;

        for (let i = 0; i < items.length - 1; i++) {
            const currentItem = items[i];
            const nextItem = items[i + 1];

            // Calculate spacing in an absolute manner to avoid negative values
            const spacing = Math.abs(isRTL ?
                currentItem.offsetLeft - nextItem.offsetLeft - nextItem.offsetWidth :
                nextItem.offsetLeft - (currentItem.offsetLeft + currentItem.offsetWidth)
            );

            totalSpacing += spacing;
            count++;
        }

        // Calculate the average spacing between items
        const averageSpacing = count > 0 ? totalSpacing / count : 0;
        return averageSpacing;
    }

    function checkAndHideEmptyListItems() {
        // Get the work-area element and its nested ul element
        const workArea = document.querySelector('#work-area');
        const ulElement = workArea ? workArea.querySelector('.work-navbar-nav') : null;


        if (!workArea || !ulElement) {
            // If work-area or ulElement is missing, exit the function
            return;
        }

        // Get all li elements inside the ul
        const listItems = ulElement.querySelectorAll('li');

        let allItemsEmptyOrZeroWidth = true; // Flag to track if all items are empty or have 0px width

        // Check each li element
        listItems.forEach((li, index) => {
            // Check if the li element is empty (no child nodes or text content)
            const isEmpty = !li.textContent.trim() && li.children.length === 0;

            // Check if the li element is taking space
            const hasWidth = li.offsetWidth > 0;

            // If any item is not empty or has width, set the flag to false
            if (!isEmpty && hasWidth) {
                allItemsEmptyOrZeroWidth = false;
            }
        });

        // Hide the #work-area element if all li elements are empty or have 0px width
        if (allItemsEmptyOrZeroWidth) {
            workArea.style.setProperty('display', 'none', 'important');
        } else {

        }
    }

    function adjustNavItems() {
        const parentContainer = document.querySelector('#bootscore-navbar-collapsedd');
        if (!parentContainer) {
            console.error('Parent container not found.');
            return;
        }

        const ulElement = parentContainer.querySelector('ul.navbar-nav');
        const divElement = parentContainer.querySelector('#right-side-elements');
        if (!ulElement || !divElement) {
            console.error('Navbar elements not found.');
            return;
        }

        const getFixedScreenWidth = (screenWidth) => {
            if (screenWidth >= 1200 && screenWidth < 1300) {
                return 1200;
            } else if (screenWidth >= 1300 && screenWidth < 1400) {
                return 1300;
            } else if (screenWidth >= 1400 && screenWidth < 1600) {
                return 1400;
            } else if (screenWidth >= 1600 && screenWidth < 1800) {
                return 1600;
            } else {
                return screenWidth; // No change if screen width is 1600 or more
            }
        };

        // Function to determine the parent container width based on screen width
        const getParentContainerWidth = (screenWidth) => {
            if (screenWidth >= 1800) {
                return parentContainer.getBoundingClientRect()
                    .width; // For 1500px, parent container width should be 1200px
            } else if (screenWidth >= 1600) {
                return 1200; // For 1400px, parent container width should be 1100px
            } else if (screenWidth >= 1400) {
                return 1000; // For 1300px, parent container width should be 1000px
            } else if (screenWidth >= 1300) {
                return 900; // For 1300px, parent container width should be 1000px
            } else if (screenWidth >= 1200) {
                return 800; // For 1300px, parent container width should be 1000px
            }
        };




        const screenWidth = window.innerWidth;

        // Apply the fixed screen width logic
        const fixedWidth = getFixedScreenWidth(screenWidth);

        // Get the parent container width based on screen width
        const parentWidth = getParentContainerWidth(screenWidth);

        // Set the parent container width dynamically
        parentContainer.style.width = `${parentWidth}px`;

        // Log the adjusted screen width for testing
        const ulWidth = ulElement.offsetWidth;
        const divWidth = 400;

        const staticArea = document.querySelector('.static-area');
        const moreNavigationArea = document.querySelector('.navigation-ul-area');
        const moreNavigationAreaWidth = moreNavigationArea ? moreNavigationArea.offsetWidth : 0;
        const spacing = getSpacingBetweenItems(staticArea); // Get spacing between items in static area


        const totalMargin = spacing * (ulElement.children.length - 1);
        const spaceWidth = parentWidth - (ulWidth + divWidth + moreNavigationAreaWidth);

        const workArea = document.querySelector('#work-area');
        const moreDropdownMenu = document.querySelector('#hotelList__dropdown .work-area-more-dropdown');
        const moreDropdown = document.querySelector('#work-area-dropss');

        if (!moreDropdownMenu || !workArea) {
            console.error('Dropdown menu container or work area not found.');
            return;
        }

        workArea.style.display = 'block';

        const listItems = [
            ...workArea.querySelectorAll('ul.navbar-nav > li'),
            ...moreDropdownMenu.querySelectorAll('li')
        ];

        let totalWidth = 0;

        moreDropdownMenu.querySelectorAll('li').forEach((item) => {
            moreDropdownMenu.removeChild(item);
            workArea.querySelector('ul.navbar-nav').appendChild(item);
        });

        listItems.forEach((item, index) => {
            item.style.margin = isRTL ? `0 0 0 ${spacing}px` : `0 ${spacing}px 0 0`;
            const itemWidth = item.offsetWidth + spacing;
            if (index === listItems.length - 1) {
                item.style.marginRight = '0'; // Remove margin for the last item
            }


            if ((totalWidth + itemWidth) <= spaceWidth) {
                totalWidth += itemWidth;
                item.style.display = 'inline-block';
            } else {
                item.style.display = '';
                moreDropdownMenu.appendChild(item);
            }
        });



        const spacer = document.createElement('li');
        spacer.style.display = 'inline-block';
        spacer.style.width = `${spacing}px`;
        workArea.querySelector('ul.navbar-nav').appendChild(spacer);

        if (window.innerWidth > 1450) {
            if (moreDropdownMenu.children.length === 0) {
                moreDropdown.classList.add('d-none');
            } else {
                moreDropdown.classList.remove('d-none');
            }
        }

        if (totalWidth < spaceWidth) {
            if ((spaceWidth - totalWidth) > 4) {
                document.querySelector('.custom-navbar-page #work-area').style.maxWidth = `${totalWidth}px`;
            }
            parentContainer.style.width = `${totalWidth}px`;
        }

        moveItemsToDropdownIfEmpty([...workArea.querySelectorAll('ul.navbar-nav > li'), ...moreDropdownMenu
            .querySelectorAll('li')
        ], moreDropdownMenu);

        workArea.style.visibility = 'visible';
        moreNavigationArea.style.visibility = 'visible';
        checkAndHideEmptyListItems();
    }

    function moveItemsToDropdownIfEmpty(listItems, moreDropdownMenu) {
        const navLinksEmpty = listItems.length === 0;
        const dropdownEmpty = moreDropdownMenu.children.length === 0;

        if (navLinksEmpty && dropdownEmpty) {
            listItems.forEach((item) => {
                moreDropdownMenu.appendChild(item);
            });
        }
    }


    // Initial layout adjustment
    if (window.innerWidth > 1198) {

        adjustNavItems();
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

<?php include dirname(__DIR__, 4) . '/_partials/footer.php'; ?>
<?php include dirname(__DIR__, 4) . '/_partials/foot.php'; ?>
</body>

</html><!-- Rocket has webp -->
<!-- This website is like a Rocket, isn't it? Performance optimized by WP Rocket. Learn more: https://wp-rocket.me -->