<?php declare(strict_types=1); ?>
<!doctype html>
<html lang="en">


<?php include dirname(__DIR__, 4) . '/_partials/head.php'; ?>

<body class="page-template page-template-templates page-template-roomsandsuites page-template-templatesroomsandsuites-php page page-id-5455 page-parent page-child parent-pageid-3739">
  <!-- Preloader -->
  <!-- Preloader End -->
  <div id="page" class="site">

    <script>
      ICL = "en";
      RECAPTCHA_SITE_KEY = "6Ld_JNIbAAAAAPu9Dbv8WgBHfIYmdKBzNh-7w72X";
    </script>

    
<script>
var page = {"PAGE_SCOPE":"individual","HOME_PAGE":false,"DINE_PAGE":false,"BOOK_NOW_BTN":false,"HOTEL_TITLE":"Address Sky View","HOTEL_SLUG":"address-sky-view","HOTEL_ID":"18","TEMPLATE":"templates\/roomsandsuites.php","HOTEL_URL":"https:\/\/www.addresshotels.com\/en\/hotels\/address-sky-view\/","DROPDOWN_POSITION":"dropup","DISABLE_BOOK_NOW":false,"FACEBOOK_SOCIAL_LINK":"https:\/\/www.facebook.com\/addressskyview","TWITTER_SOCIAL_LINK":"https:\/\/twitter.com\/Address_Hotels\/","YOUTUBE_SOCIAL_LINK":"https:\/\/www.youtube.com\/@AddressHotels","INSTAGRAM_SOCIAL_LINK":"https:\/\/www.instagram.com\/addressskyview\/","WHATSAPP_SOCIAL_LINK":"97142488553","POST_TYPE":"page"};
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

    <script>
  var hotel_id = 18;
  var viewmorelg = "View More";
  var booknowlg = "Book Now";
  var peoplelg = "People";
  var kingbedlg = "King Bed";
  var kingbedslg = "King Beds";
  var twinbedslg = "Twin Beds";
  var errormsglg = "We are having trouble in fetching data right now. Please try again later.";
  var linklg = "https://www.addresshotels.com/en/hotels/address-sky-view/rooms-and-suites/room-details/?room_details=";
</script>
<header class="internal-page">
  <div class="header-content">
      </div>
</header>
<div class="container-fluid room-page-content defcontent grey-background pt-80 mt-5">
  <div class="row ">
    <div class="col-lg-11 col-md-11 col-sm-12 m-auto p-0">
      <div class="container px-lg-0 px-md-0 px-sm-0 pb-3 title-text">
        <div class="row align-items-center roomsandsuites-content">
          <div class="col-xl-7 col-lg-7 col-md-10 col-sm-12  px-lg-3 px-2 roomsandsuites-heading">
            <h1 class="display-2-48">
              Address Sky View Rooms &#038; Suites                              <span class="dropdown-icon"><i class="fas fa-chevron-down roomsandsuites-icon"></i></span>
                          </h1>


          </div>
          <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12  p-y pr-0 pl-3  ">
            <!-- Links -->
            <div class="container  px-0">
              <div class="row w-100 pl-md-15 pl-sm-0 pl-xs-0">
                <div class="col-xl-12 col-lg-12 col-md-12 col-ms-12 p-0 d-flex  align-items-center justify-content-end rooms-count invisible">
                  <span><span class="countbox showing"></span> of <span class="countbox total"></span></span>
                  <hr class="vhr-dark mx-3">
                  <a href="javascript:void(0);" id="view-all-rooms" class=" meduimtext view-all invisible bluelink secondary-medium">
                    <svg class="button-loader" style="display: none;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="200px" height="200px" viewbox="0 0 100 100" preserveaspectratio="xMidYMid">
                      <circle cx="50" cy="50" fill="none" stroke="#483d8b" stroke-width="10" r="35" stroke-dasharray="164.93361431346415 56.97787143782138" transform="rotate(132.222 50 50)">
                        <animatetransform attributename="transform" type="rotate" repeatcount="indefinite" dur="1s" values="0 50 50;360 50 50" keytimes="0;1"></animatetransform>
                      </circle>
                    </svg>
                    View All                  </a>
                  <div class="pricefilter filterbox d-flex px-3">
                    <div id="showfilter" class="dropdown showfilter text-right">
                      <a type="button" class="btn btn-light toggle" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" id="openFilter">
                        <span id="filterText">Show Filter </span> <i class="fal fa-filter"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12  px-lg-3 px-2 ">
            <div class="dropdown-menuus">
              <p class="body-4">Elevated high above Downtown Dubai, Address Sky View redefines city luxury with its sleek rooms and suites, each crafted as a refined retreat with elegant interiors, seamless technology, and panoramic skyline perspectives. <br><br>
Wake up to sweeping scenes from one of the top Burj Khalifa view hotels, with exclusive access to the Sky Bridge, the iconic infinity pool Dubai is known for, and the sophisticated Club Lounge. Guests also enjoy direct connectivity to Dubai Metro and Dubai Mall, making this an ideal hotel near Burj Khalifa for both leisure and business travel.<br><br>
While staying in one of the most luxurious hotels in Downtown, take your experience further at the Sky View Observatory, or challenge your limits with the Glass Slide and Edge Walk. Cap your day with dinner in the clouds at Alto54 — the rooftop dining destination that pairs fine cuisine with unbeatable views.<br><br>
Explore exclusive offers curated for your stay and immerse yourself in a city escape where elegance rises above expectation.
</p>
            </div>
          </div>
        </div>

        <div class="collapse filter-toggle" id="collapseExample">
          <!-- //Show hide Based on Count of Cards if 0 then hide -->
          <div class="card card-body">
            <div class="row bedTypefilter-row">
              <div class="bedTypefilter filterbox px-lg-3  ">
                <h4 class="body-4 secondary-medium pb-1">Bed Type</h4>
                <div id="bedTypefilter" class="dropdown pricefilter bedTypefilterList">

                </div>
              </div>
              <div class="bedTypefilter filterbox px-lg-3  ">
                <h4 class="body-4 secondary-medium pb-1">Room Type</h4>
                <div id="bedTypefilter" class="dropdown pricefilter">
                  <label class="filter_label">Residence<input type="checkbox" class="roomfilter" value="Residence"> </label>
                                      <label class="filter_label">
                      Room <input type="checkbox" class="roomfilter" value="Room">
                    </label>
                                          <label class="filter_label">
                        Suite <input type="checkbox" class="roomfilter" value="Suite">
                      </label>

                                                        </div>
              </div>
              <div class="bedTypefilter filterbox px-lg-3  room-view-filter">
                <h4 class="body-4 secondary-medium pb-1">Room View</h4>
                <div id="bedTypefilter" class="dropdown pricefilter roomViewFilterList">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-11 col-md-11 col-ms-12 m-auto p-0">
      <div class="container all-rooms-details p-0" id="misha_posts_wrap">
      </div>
      <div class="mt-5 col-lg-12 col-md-12 col-ms-12 text-center d-none" id="api-error">
        <h3>We are having trouble in fetching data right now. Please try again later.</h3>
      </div>
      <!--Start: No Rooms Found when filters are selected - Ashutosh-->
      <div class="container d-none text-center noRoomsFound" id="noRoomsFound">
        <h2 id="roomHeading" class="rooms-list-header display-2-48  mx-lg-0"> No Rooms Found</h2>
        <p> Unfortunately, no rooms with selected filters are available. To view the available rooms, clear one or more filters.</p>
        <button class="btn blackbtn curchgrt primary-btn" id="clearFilter">
          <b>Clear Filter</b>
        </button>
      </div>
      <!-- End: No Rooms Found when filters are selected - Ashutosh-->
       <!--Start: No rooms found on a successful response - Kaveri-->
      <div class="container d-none text-center noRoomsFound" id="noRoomsFoundInResponse">
        <h3 id="roomHeading" class="rooms-list-header display-2-48  mx-lg-0"> No Rooms Found</h3>
        <p> Unfortunately, no rooms are available</p>
      </div>
      <!-- End: No rooms found on a successful response - Kaveri-->

      <div class="container ">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-ms-4 mx-auto my-4">
            <div class="text-center py-4">
              <button id="view-more-rooms" class="btn simplebtn view-more-button hide secondary-btn" data-count="" data-total="">
                <svg class="button-loader" style="display: none;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="200px" height="200px" viewbox="0 0 100 100" preserveaspectratio="xMidYMid">
                  <circle cx="50" cy="50" fill="none" stroke="#000" stroke-width="10" r="35" stroke-dasharray="164.93361431346415 56.97787143782138" transform="rotate(132.222 50 50)">
                    <animatetransform attributename="transform" type="rotate" repeatcount="indefinite" dur="1s" values="0 50 50;360 50 50" keytimes="0;1"></animatetransform>
                  </circle>
                </svg>
                <span class="viewmore">View More</span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<form id="bookingform" name="bookingform" action="javascript:void(0);" method="get"><input type="hidden" id="id" name="id" value="all"><input type="hidden" id="hotelname" name="hotelname" value=""><input type="hidden" id="cid" name="cid" value=""><input type="hidden" id="cod" name="cod" value=""><input type="hidden" name="rooms" id="no_of_rooms" value="1"><input type="hidden" name="book_for_someone_else" id="book_for_someone_else" value=""><input type="hidden" name="adult" id="totadlt" value="1"><input type="hidden" name="child" id="totchld" value="0"><input type="hidden" name="type" id="cdname" value=""><input type="hidden" name="code" id="promocodevalue" value=""><input type="hidden" name="offerCode" id="offerCode" value=""><input type="hidden" name="offerStart" id="offerStart" value=""><input type="hidden" name="offerEnd" id="offerEnd" value=""><input type="hidden" name="roomtypecode" id="roomtypecode" value=""></form>

<!-- Card -->
<div class="common-card-shadow d-none" id="common_card">
  <div class="common-card">
    <div class="row m-0 offerboxdetails room-loading common-card-row">
      <div class="col-lg-7 col-md-12 col-12">
        <div id="carouselControls1" class="carousel slide room-images-container room-loading-container" data-ride="carousel" data-interval="false">
          <ol class="carousel-indicators"></ol>
           <style>

  /* 360 logo overlay button */
  .figma-logo-overlay {
    position: absolute;
    top: 10px;
    right: 60px;
    z-index: 15;
  }
  .figma-logo-overlay img {
    width: 36px;
    height: 36px;
    object-fit: contain;
    cursor: pointer;
    position: relative;
    left: 3pc; /* shift a little from the right */
  }

  /* Modal close button */
  .modal-close-btn {
    position: fixed !important;   /* fixed so it stays visible */
    top: 15px !important;
    right: 20px !important;
    z-index: 9999 !important;     /* stay on top of everything */
    background: #fff;
    color: #000;
    font-size: 1.5rem;
    font-weight: 700;
    border: none;
    cursor: pointer;
    padding: 0;
    line-height: 1;
    border-radius: 50%;
    width: 35px;
    height: 35px;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .modal-close-btn span {
    margin: 0;
    line-height: 1;
  }

  /* Responsive full-height modal for mobile */
  @media (max-width: 768px) {
    .modal-dialog {
      margin: 0;
      max-width: 100%;
      height: 100% !important;
    }
    .modal-content {
      height: 100vh !important;
      border-radius: 0;
    }
    .modal-body {
      height: 100% !important;
      padding: 0 !important;
    }
    .modal-body > div {
      height: 100% !important;
    }
  }
</style>

      
          <div id="virtual-tour-room">
            <a href="javascript:void(0)" class="figma-logo-overlay" data-toggle="modal" data-target="#figmaModal">
              <img width="48" height="48" decoding="async" src="/dependencies/img/wp-content/uploads/2025/09/360-degree.svg" alt="360 View">
            </a>
          </div>
          <div class="carousel-inner"></div>
          <button type="button" class="btn telescopeicon-rs showgal whitetext" id="galleryitem1" name="galleryroom1">
            <i class="fal fa-search"></i>
          </button>
        </div>
      </div>
      <div class="col-lg-5 col-md-12 col-12">
        <div class="row h-100">
          <div class="col-lg-12 col-md-12 col-ms-12 room-details-container room-loading-container px-0 px-lg-3 ">
            <h3 class="card-title m-0 d-flex d-inline-flex pt-lg-0 py-3 mb-1 room-title body-1 secondary-medium"></h3>
            <p class="room-description body-4"></p>
            <dl class="room-features">
              <dd class="room-occupancy body-4"></dd>
              <dd class="room-bed body-4"></dd>
              <dd class="room-size body-4"></dd>
            </dl>
          </div>
          <div class="col-lg-12 col-md-12 col-ms-12 mt-2 mx-md-0 mx-sm-15 d-lg-flex d-md-flex align-self-end w-100 p-0 booknowbtn room-cta-container room-loading-container">
            <a href="javascript:void(0);" data-toggle="modal" data-target="#bookingModalGlobal" class="align-self-end btn blackbtn w-100 ml-lg-3 mr-lg-3 mt-3 room-cta room-book-link primary-btn mr-md-3">Book Now </a>
            <a href="/pages/en/hotels/address-sky-view/rooms-and-suites/index.php?room_details=" class="align-self-end mb-0 mt-3 btn whitebtn w-100 room-cta room-info-link secondary-btn ml-0 ml-lg-3"><svg class="button-loader" style="display: none;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="200px" height="200px" viewbox="0 0 100 100" preserveaspectratio="xMidYMid">
                <circle cx="50" cy="50" fill="none" stroke="#232323" stroke-width="10" r="35" stroke-dasharray="164.93361431346415 56.97787143782138" transform="rotate(132.222 50 50)">
                  <animatetransform attributename="transform" type="rotate" repeatcount="indefinite" dur="1s" values="0 50 50;360 50 50" keytimes="0;1"></animatetransform>
                </circle>
              </svg>View More</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal gallerymodal rnsmodal room-images-modal" id="galleryitem2">
    <button type="button" class="close closegal" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <div id="carouselControls2" class="carousel slide pr-md-3" data-ride="carousel" data-interval="false">
      <ol class="carousel-indicators"></ol>
      <div class="carousel-inner"></div>
    </div>
  </div>
</div>
<!-- 360 view -->

 <div class="modal fade" id="figmaModal" tabindex="-1" role="dialog" aria-labelledby="figmaModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
    <div class="modal-content">

      <!--  Top-right close button -->
        <button type="button" class="modal-close-btn" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>

      <!--  Iframe container -->
      <div class="modal-body p-0">
        <div id="iframe-container" class="w-100" style="height:80vh;"></div>
      </div>
      
    </div>
  </div>
</div>
</div>
<!-- Card -->
<label id="bedfil" class="filter_label d-none"><span id="bedtypelabel"></span><input type="checkbox" id="clonebed" value="BEDTYPE"></label>
<style>
  .card {
    border: none !important;
  }

  @media screen and (max-width: 380px) {
    .bluelink {
      font-size: 14px;
    }
  }

  @media screen and (min-width: 990px) and (max-width: 1160px) {
    .primary-btn {
      min-width: 170px !important;
    }

    .secondary-btn {
      min-width: 170px !important;
    }
  }

  .display-2-48 {
    /* display: flex;
    align-items: center; */
  }

  .dropdown-icon {
    margin-left: 10px;
    cursor: pointer;
  }

  .dropdown-menuus {
    display: none;
    /* position: absolute;
    background-color: #f9f9f9;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    /* z-index: 1; */
    /* min-width: 160px; */

  }

  .roomsandsuites-icon::before {
    font-size: 30px;

  }

  @media screen and (min-width: 900px) and (max-width: 970px) {
    .roomsandsuites-heading {
      flex: 0 0 100% !important;
      max-width: 100% !important;

    }
  }
</style>
<script>
  jQuery(document).ready(function() {
    jQuery('.roomsandsuites-content .dropdown-icon').click(function() {
      jQuery('.roomsandsuites-content .dropdown-menuus').toggle();
    });
  });
</script><?php include dirname(__DIR__, 4) . '/_partials/footer.php'; ?>
<?php include dirname(__DIR__, 4) . '/_partials/foot.php'; ?>
</body>

</html><!-- Rocket has webp -->
<!-- This website is like a Rocket, isn't it? Performance optimized by WP Rocket. Learn more: https://wp-rocket.me -->