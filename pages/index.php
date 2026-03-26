<?php
declare(strict_types=1);
require_once __DIR__ . '/../config.php';
$mobeePageUrl = appEnv('MOBEE_PAGE_URL', '');
?>
<!doctype html>
<html lang="en">


<?php include __DIR__ . '/_partials/head.php'; ?>

<body id="page-top" class="page-template page-template-templates page-template-individual-home-custom-template page-template-templatesindividual-home-custom-template-php page page-id-3739 page-parent page-child parent-pageid-662">
  <!-- Preloader -->
  <!-- Preloader End -->
  <div id="page" class="site">

    <script>
      ICL = "en";
      RECAPTCHA_SITE_KEY = "6Ld_JNIbAAAAAPu9Dbv8WgBHfIYmdKBzNh-7w72X";
      MOBEE_PAGE_URL = <?= json_encode($mobeePageUrl, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) ?>;
    </script>

    


<?php include __DIR__ . '/_partials/header.php'; ?><!-- #masthead -->
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

  #hotelList__dropdown .work-area-more-dropdown li {
    margin: 0 !important;
    width: 100%;
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
    overflow: scroll;
    padding-bottom: 80px !important;
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
    margin-bottom: 80px;
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




@media (min-width: 1199px) {

  #work-area {
    visibility: hidden;
  }

  .navigation-ul-area {
    visibility: hidden;
  }
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
    const workAreaMoreDropdown = document.querySelector('#work-area-dropss');
    const newBookingWidget = document.querySelector('.new-booking-widget');
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
        whiteLogo.style.setProperty('display', 'none', 'important');
        blackLogo.style.setProperty('display', 'block', 'important');


        // Set z-index to allow dropdowns to appear over the widget
        if (newBookingWidget & !languageSwitcherOpen) {
          newBookingWidget.style.setProperty('z-index', 'unset', 'important');
        }

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
    //adjustDropdownMargin();
  }
  handleDropdowns();

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

      const moreDropdown = document.querySelector('#work-area-dropss > a');
      if (moreDropdown) {
        moreDropdown.addEventListener('click', function() {
          handleDropdowns();
        });
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

    const averageSpacing = count > 0 ? totalSpacing / count : 0;
    return averageSpacing;
  }

  function checkAndHideEmptyListItems() {
    const workArea = document.querySelector('#work-area');
    const ulElement = workArea ? workArea.querySelector('.work-navbar-nav') : null;


    if (!workArea || !ulElement) {
      return;
    }

    const listItems = ulElement.querySelectorAll('li');

    let allItemsEmptyOrZeroWidth = true;

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
    const ulWidth = ulElement.offsetWidth;
    const divWidth = 300;

    const staticArea = document.querySelector('.static-area');
    const moreNavigationArea = document.querySelector('.navigation-ul-area');
    const moreNavigationAreaWidth = moreNavigationArea ? moreNavigationArea.offsetWidth : 0;
    const spacing = getSpacingBetweenItems(
      staticArea); // Get spacing between items in static area


    const totalMargin = spacing * (ulElement.children.length - 1);
    const spaceWidth = parentWidth - (ulWidth + divWidth + moreNavigationAreaWidth);

    const workArea = document.querySelector('#work-area');
    const moreDropdownMenu = document.querySelector(
      '#hotelList__dropdown .work-area-more-dropdown');
    const moreDropdown = document.querySelector('#work-area-dropss');

    if (!moreDropdownMenu) {
      console.error('Work Area menu container or work area not found.');
      return;
    }
    if (!workArea) {
      console.error('Dropdown menu container not found.');
      return;
    }

    workArea.style.display = 'block';

    const listItems = [
      ...workArea.querySelectorAll('ul.navbar-nav > li'),
      ...moreDropdownMenu.querySelectorAll('li')
    ].filter((item) => item.className.trim() !== "");


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
        document.querySelector('.custom-navbar-page #work-area').style.maxWidth =
          `${totalWidth}px`;
      }
      parentContainer.style.width = `${totalWidth}px`;
    }

    moveItemsToDropdownIfEmpty([...workArea.querySelectorAll('ul.navbar-nav > li'), ...
      moreDropdownMenu
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
  if (window.innerWidth > 1200) {
    adjustNavItems();
  }

  // Adjust nav items on window resize and zoom
  window.addEventListener('resize', function() {
    if (window.innerWidth > 1200) {
      adjustNavItems();
    }
  });

  // Handle browser zoom changes
  window.visualViewport.addEventListener('resize', function() {
    if (window.innerWidth > 1200) {
      adjustNavItems();
    }
  });

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

  if (!navMain.classList.contains('darkHeader')) {
    document.querySelectorAll('.navbar-brand .logo').forEach(logo => logo.style.display = logo
      .style
      .display === 'none' ? 'block' : 'none');
  }
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
<!--
<link rel="stylesheet" href="/dependencies/external/www-addresshotels-com.azureedge.net/wp-content/themes/emaar-projects/vendor/css/individual-home.css">

-->

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
        `<a href="/dependencies/external/www.quicktext.im/index.bin" title="Hotel AI Chabot and Guest Communication">Quicktext hotel chatbot</a>`
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
       نظرًا لأعمال الصيانة ، سيكون المطعم مغلق من ٣ إلى 8 مايو2025.خلال هذه الفترة، يمكنكم الاستمتاع بوجباتكم في  SoCal في الأوقات التالية :الإفطار من 7:00 إلى 11:00 صباحًا ,الغداء من 12:00 إلى 5:00 مساءً, العشاء من 6:00 إلى 10:30 مساءً. نشكركم مقدمًا على حسن تفهمكم ونتطلع إلى الترحيب بكم في المستقبل.
      </p> -->
<!-- <div>
        <p class=" my-0 mx-auto">Due to scheduled maintenance, The Restaurant will be closed from the 3rd till the 8th of May 2025. In the meantime, you can enjoy all your meals at SoCal – Breakfast: 7:00–11:00 AM, Lunch: 12:00–5:00 PM, and Dinner: 6:00–10:30 PM. Thank you for your understanding, and we look forward to welcoming you back soon!
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

<div class="container-fluid position-relative fullscreen-hero-banner-booking-widget">
  <div class="row">
    <div id="video-overlay"></div>
    
      <style>
        @media (min-width: 768px) {
          #hero-vid {
            background-image: url(../../../wp-content/uploads/2021/02/Address-SkyView-V1.mp4.jpg);
          }
        }

        @media (max-width: 767px) {
          /* Change Here Harshit 18th Oct,2022 */

          video#hero-vid:-webkit-full-screen {
            width: 100%;
            height: 100%;
            max-height: 100%;
            object-fit: cover;
          }

          video#hero-vid {
            width: 100%;
            max-height: 100%;
            object-fit: cover;
          }

          /* Change Ends Harshit 18th Oct,2022 */
          #hero-vid {
            background-image: url(../../../wp-content/uploads/2021/02/Address-SkyView-V1.mp4-1.jpg);
          }

          #nav-main {
            top: 0 !important;
          }
        }
      </style>

      <video class="visible-desktop individual-homepage-video" id="hero-vid" autoplay="" loop="" muted="" playsinline="">
                  <source type="video/mp4" media="all and (min-width: 768px)" src="/dependencies/media/wp-content/uploads/2023/08/WEB-Wide-1_2.mp4">
                  <source type="video/mp4" media="all and (max-width: 767px)" src="/dependencies/media/wp-content/uploads/2023/08/WEB-Mobile-1_2.mp4">
              </video>


    
<div class="container-fluid individual-homepage-content-section">
  <div class="container mx-auto">
    <h1 class="display-2-48 text-capitalize mb-2 pb-1 text-white h2">Address Sky View</h1>
    <p class="mb-2 homepage-content-description text-white d-none"></p>
    <p class="mb-2 homepage-content-address ">Sheikh Mohammed Bin Rashed Boulevard Downtown Dubai, PO Box 111969 Dubai, UAE</p>
    <p class="mb-0 homepage-content-conact-links">
      <a class="bluelink secondary-medium" href="tel:+97148738888">
        <span class="dir-ltr">+97148738888</span>
      </a>
      <a href="/dependencies/external/www.google.co.in/maps/place/Address+Sky+View/@25.2015914,55.2683494,17z/data=!3m1!4b1!4m8!3m7!1s0x3e5f43859586ed13:0xe1103d783cf1f2f1!5m2!4m1!1i2!8m2!3d25.2015914!4d55-hl-en.2705381" id="pseudo_map_link" target="_blank">Location      </a>
      <a href="#contact-details">Contact Us</a>
    </p>
    <div class="hero-prenota-cta">
      <button class="home-prenota-btn home-prenota-btn-hero" type="button" onclick="if (typeof MOBEE_PAGE_URL !== 'undefined' && MOBEE_PAGE_URL) { window.open(MOBEE_PAGE_URL, '_blank', 'noopener,noreferrer'); }">
        Prenota
      </button>
    </div>
  </div>
</div>  </div>
</div>
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
      <button class="book-outline-luxury home-prenota-btn" type="button" style="border-radius:0 !important;border:1px solid #25282d;background:transparent;color:#25282d;" onmouseover="this.style.background='#000000';this.style.color='#ffffff';this.style.border='1px solid #ffffff';" onmouseout="this.style.background='transparent';this.style.color='#25282d';this.style.border='1px solid #25282d';" onclick="if (typeof MOBEE_PAGE_URL !== 'undefined' && MOBEE_PAGE_URL) { window.open(MOBEE_PAGE_URL, '_blank', 'noopener,noreferrer'); }">
        Prenota      </button>
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
            <button class="book-outline-luxury home-prenota-btn home-prenota-btn-mobile" type="button" style="border-radius:0 !important;border:1px solid #25282d;background:transparent;color:#25282d;" onmouseover="this.style.background='#000000';this.style.color='#ffffff';this.style.border='1px solid #ffffff';" onmouseout="this.style.background='transparent';this.style.color='#25282d';this.style.border='1px solid #25282d';" onclick="if (typeof MOBEE_PAGE_URL !== 'undefined' && MOBEE_PAGE_URL) { window.open(MOBEE_PAGE_URL, '_blank', 'noopener,noreferrer'); }">
              Prenota            </button>
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
  .hero-prenota-cta {
    margin-top: 20px;
    width: 100%;
    max-width: 600px;
  }
  .home-prenota-btn-hero {
    width: 100%;
    min-height: 56px;
    padding: 0 20px;
    border: 1px solid #25282d;
    border-radius: 0 !important;
    background: #ffffff;
    color: #25282d;
    letter-spacing: .4px;
    box-shadow: none !important;
    transform: none !important;
    transition: background .2s ease, color .2s ease, border-color .2s ease;
  }
  .home-prenota-btn-hero:hover,
  .home-prenota-btn-hero:focus,
  .home-prenota-btn-hero:active {
    background: #000000 !important;
    color: #ffffff !important;
    border: 1px solid #ffffff !important;
    border-radius: 0 !important;
  }
  /* Hide legacy booking widget to avoid responsive misalignment */
  .new-booking-widget {
    display: none !important;
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
  
    .new-booking-widget {
      /* padding-left: 12px;
      padding-right: 12px; */
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


          <h2 class="display-1-72 font-48-mobile mt-4 text-uppercase title-pink">Iconic Luxury in a Prime Location and Unparalleled Views</h2>

          <p class="body-2 description--text">Discover luxury with an unparalleled view at Address Sky View. This <a href="/en/hotels-in-downtown-dubai/"><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-vivid-cyan-blue-color"><span style="text-decoration: underline;">hotel in Downtown</span></mark></a> offers breathtaking panoramas, iconic infinity pool overlooking Burj Khalifa. Renowned for its prime location with direct access to Dubai Mall and metro station, Address Sky View is a haven for both leisure and business travellers.</p>
    
    <div class="cta-btn mt-4">
          </div>
  </div>
</section>

<div id="featured-offer" class="container individual-homepage-featured-offer">
  <div class="row g-0 align-items-center text-center justify-content-between">
    <div class="col-12 col-lg-6 inline-left show-on-scroll">
      <div class="content-box" data-aos="fade-right" data-aos-duration="1000" data-aos-offset="300" data-aos-easing="ease-in-sine">
        <h5 class="eyebrow-text">FEATURED OFFER</h5><h2 class="offers-section-item-heading text-center display-1-72 font-56-mobile">Infinity Pool Day Pass</h2><p class="body-2 mb-0 mb-lg-5">Rise above the city at Address Sky View&#8217;s iconic Infinity Pool in Alto 54. Suspended high above Dubai, the pool offers sweeping, uninterrupted views of the Burj Khalifa and the city skyline, and elegance. </p><a class="btn primary-btn" href="/en/offers/infinity-pool-day-pass/">Learn More</a>      </div>
    </div>
    <div class="col-12 col-lg-6 p-0 inline-right show-on-scroll image-zoom-animation img-shadow">
      <div class="img-box img-shadow image-zoom-animation" data-aos="fade-left" data-aos-duration="1000" data-aos-offset="300" data-aos-easing="ease-in-sine">
        <img width="1024" height="535" decoding="async" src="/dependencies/img/wp-content/uploads/2026/01/ASV-Infinity-Pool-5-1-e1736344266192.jpg" alt="" class="img-fluid">        
      </div>
    </div>
  </div>
</div>



<div id="accommodation" class="individual-homepage-explore-accommodations">

  <div class="container-fluid p-0">
    <div class="container text-center p-2 p-lg-5 inline-up2 show-on-scroll">

              <p class="text-uppercase offers-section-item-label eyebrow-dark text-center">STAY</p>
      
              <h2 class="offers-section-item-heading text-center display-1-72 font-56-mobile mt-0">Explore Our Accommodation</h2>
                </div>
  </div>

  

  <div id="offers-carousel">
    <div class="main-carousel" data-flickity='{ "cellAlign": "center", "contain": true,"pageDots": false }'>
                <div class="img-text-box slider-img slider-img-explore-accommodations is-selected ">
            <div class="img-content">

                              <div class="img-box img-shadow">
                  <img width="824" height="520" decoding="async" src="/dependencies/img/wp-content/uploads/2020/10/DEF8469.jpg.webp" class="img-fluid" alt="">
                </div>
              

              <style>
                @media (max-width: 767px) {
                  .slider-img-explore-accommodations .img-content::before {
                    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(38%, rgba(0, 0, 0, 0)), color-stop(104%, rgba(0, 0, 0, 0.8))) !important;
                  }
                }
              </style>


              <div class="overlap-content accomodation-content">
                <div class="overlap-text text-left text-white w-100">
                                      <p class="smalltitle eyebrow-dark whitetext secondary-medium font-14 text-uppercase d-inline-block p-0 m-0">Address Sky View</p>
                  
                                      <h3 class="whitetext m-0 display-4-32 secondary-normal mb-2">Rooms</h3>
                                    <div class="d-flex flex-column flex-md-row align-items-start align-md-items-center justify-content-between gap-2">
                                        <div class="overlap-btn mb-0 mb-md-auto">
                                              <a class="btn alternate-btn small-btn" style="width: max-content;" href="/pages/rooms-and-suites/index.php">Discover More</a>
                                          </div>

                  </div>

                </div>
              </div>
            </div>
          </div>

                <div class="img-text-box slider-img slider-img-explore-accommodations is-selected ">
            <div class="img-content">

                              <div class="img-box img-shadow">
                  <img width="824" height="520" decoding="async" src="/dependencies/img/wp-content/uploads/2020/10/ADH_ADSVH_RESIDENCES_CATEGORY_AMBIENT_HR_02.jpg.webp" class="img-fluid" alt="">
                </div>
              

              <style>
                @media (max-width: 767px) {
                  .slider-img-explore-accommodations .img-content::before {
                    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(38%, rgba(0, 0, 0, 0)), color-stop(104%, rgba(0, 0, 0, 0.8))) !important;
                  }
                }
              </style>


              <div class="overlap-content accomodation-content">
                <div class="overlap-text text-left text-white w-100">
                                      <p class="smalltitle eyebrow-dark whitetext secondary-medium font-14 text-uppercase d-inline-block p-0 m-0">Address Sky View</p>
                  
                                      <h3 class="whitetext m-0 display-4-32 secondary-normal mb-2">Residences </h3>
                                    <div class="d-flex flex-column flex-md-row align-items-start align-md-items-center justify-content-between gap-2">
                                        <div class="overlap-btn mb-0 mb-md-auto">
                                              <a class="btn alternate-btn small-btn" style="width: max-content;" href="/pages/residences/index.php">Discover More</a>
                                          </div>

                  </div>

                </div>
              </div>
            </div>
          </div>

          </div>
  </div>

</div>
<style>
  .accomodation-content .overlap-btn {
    margin-bottom: 20px;
  }

  @media (max-width: 350px) {
    .slider-img-explore-accommodations {
      height: 500px !important;
      width: 300px !important;
    }
  }

  @media screen and (max-width: 767px) {
    .accomodation-text {
      line-height: 24px;
    }

  }
  .page-id-196909 .overlap-btn.mb-0.mb-md-auto {
    all: unset; 
}

</style>

<div id="highlights" class="individual-homepage-hotel-highlights-section  " style="background-image: linear-gradient( to bottom, #ffffff 0%, #ffffff00 40%, #ffffff00 60%, #ffffff 100% ),
    url('../../../wp-content/uploads/2021/07/Address-Artwork-123x123-1-1-1.png');
    background-repeat: repeat;
    /* background-size: cover; */
    height: 100%;">
      <div class="container-fluid">
      <div class="container text-center inline-up show-on-scroll">

                  <p class="text-uppercase eyebrow-dark h6 mb-2 mt-0">ADDRESS SKY VIEW</p>
                          <h2 class="display-1-72 font-56-mobile mt-0">Iconic Stays</h2>
                  <p class="m-auto body-2 py-lg-0">In this skyline-defining duo of towers joined by an architecturally marvellous Sky Bridge, embrace the unique privilege of staying ‘Where Life Happens’.</p>
              </div>
    </div>
    <div id="dine-carousel">
    <div class="main-carousel" data-flickity='{ "cellAlign": "center", "contain": true,"pageDots": false }'>
                <div class="img-text-box slider-img slider-img-hotel-highlights is-selected">
            <div class="img-content highlight-container">
              <div class="img-box img-shadow">
                                  <img width="380" height="400" decoding="async" src="/dependencies/img/wp-content/uploads/2020/10/THE-RESTAURANT-2-ADDRESS-SKY-VIEW.jpg.webp" class="img-fluid">
                              </div>
              <div class="overlap-content overlap-container flex-column">
                <div class="d-lg-flex align-items-center justify-content-between w-100">
                  <div class="overlap-text text-left text-white">
                                          <span class="smalltitle eyebrow-dark whitetext secondary-medium font-14 text-uppercase ">Restaurants</span>
                                                              <h3 class="whitetext m-0 display-4-32 secondary-normal ">Gourmet Dining</h3>
                                      </div>
                  <div class="overlap-btn">
                                          <a class="btn alternate-btn small-btn" href="/pages/dining/index.php">Explore</a>
                                      </div>
                </div>
                <div class="overlap-below d-none mt-1">
                                  </div>
                <div class="mobile-overlap-btn d-none">
                                      <a class="btn alternate-btn small-btn" href="/pages/dining/index.php">Explore</a>
                  
                </div>

              </div>
            </div>



          </div>
                <div class="img-text-box slider-img slider-img-hotel-highlights is-selected">
            <div class="img-content highlight-container">
              <div class="img-box img-shadow">
                                  <img width="2560" height="1706" decoding="async" src="/dependencies/img/wp-content/uploads/2023/06/THE-SPA-COUPLE-ROOM-JACUZZI-ADDRESS-SKY-VIEW-scaled.jpg.webp" class="img-fluid">
                              </div>
              <div class="overlap-content overlap-container flex-column">
                <div class="d-lg-flex align-items-center justify-content-between w-100">
                  <div class="overlap-text text-left text-white">
                                          <span class="smalltitle eyebrow-dark whitetext secondary-medium font-14 text-uppercase ">Wellness</span>
                                                              <h3 class="whitetext m-0 display-4-32 secondary-normal ">The Spa</h3>
                                      </div>
                  <div class="overlap-btn">
                                          <a class="btn alternate-btn small-btn" href="/pages/wellness/spa/index.php">Explore</a>
                                      </div>
                </div>
                <div class="overlap-below d-none mt-1">
                                  </div>
                <div class="mobile-overlap-btn d-none">
                                      <a class="btn alternate-btn small-btn" href="/pages/wellness/spa/index.php">Explore</a>
                  
                </div>

              </div>
            </div>



          </div>
                <div class="img-text-box slider-img slider-img-hotel-highlights is-selected">
            <div class="img-content highlight-container">
              <div class="img-box img-shadow">
                                  <img width="1750" height="1166" decoding="async" src="/dependencies/img/wp-content/uploads/2023/01/FITNESS-GYM-ADDRESS-SKY-VIEW-1.jpg.webp" class="img-fluid">
                              </div>
              <div class="overlap-content overlap-container flex-column">
                <div class="d-lg-flex align-items-center justify-content-between w-100">
                  <div class="overlap-text text-left text-white">
                                          <span class="smalltitle eyebrow-dark whitetext secondary-medium font-14 text-uppercase ">Pool &amp; Fitness</span>
                                                              <h3 class="whitetext m-0 display-4-32 secondary-normal ">Superb Recreation</h3>
                                      </div>
                  <div class="overlap-btn">
                                          <a class="btn alternate-btn small-btn" href="/pages/wellness/index.php">Explore</a>
                                      </div>
                </div>
                <div class="overlap-below d-none mt-1">
                                  </div>
                <div class="mobile-overlap-btn d-none">
                                      <a class="btn alternate-btn small-btn" href="/pages/wellness/index.php">Explore</a>
                  
                </div>

              </div>
            </div>



          </div>
                <div class="img-text-box slider-img slider-img-hotel-highlights is-selected">
            <div class="img-content highlight-container">
              <div class="img-box img-shadow">
                                  <img width="1750" height="1166" decoding="async" src="/dependencies/img/wp-content/uploads/2023/01/KIDS-CLUB-ADDRESS-SKY-VIEW.jpg.webp" class="img-fluid">
                              </div>
              <div class="overlap-content overlap-container flex-column">
                <div class="d-lg-flex align-items-center justify-content-between w-100">
                  <div class="overlap-text text-left text-white">
                                          <span class="smalltitle eyebrow-dark whitetext secondary-medium font-14 text-uppercase ">Amenities</span>
                                                              <h3 class="whitetext m-0 display-4-32 secondary-normal ">Opulent Amenities</h3>
                                      </div>
                  <div class="overlap-btn">
                                          <a class="btn alternate-btn small-btn" href="/pages/amenities/index.php">Explore</a>
                                      </div>
                </div>
                <div class="overlap-below d-none mt-1">
                                  </div>
                <div class="mobile-overlap-btn d-none">
                                      <a class="btn alternate-btn small-btn" href="/pages/amenities/index.php">Explore</a>
                  
                </div>

              </div>
            </div>



          </div>
          </div>
  </div>
</div>
<style>
  .highlight-container {
    position: relative;
    overflow: hidden;
    height: auto;

  }

  .highlight-container .overlap-btn,
  .highlight-container .overlap-text {
    position: relative;
    transition: transform 0.3s ease;

  }

  .highlight-container .overlap-btn {
    padding-top: 30px;
  }

  @media (max-width: 991px) {
    .highlight-container .overlap-btn {
      display: none !important;
    }

    .highlight-container .overlap-below {
      opacity: 1;
      display: block !important;

    }

    html[dir="rtl"] .overlap-content {

      -webkit-align-items: unset !important;
    }

    .highlight-container .mobile-overlap-btn {
      display: block !important;
    }

    .highlight-container .overlap-content {
      align-items: baseline !important;
    }
  }

  @media (max-width: 600px) {
    .slider-img-hotel-highlights {
      height: 520px !important;
      width: 320px !important;
    }
  }

  @media (max-width: 350px) {
    .slider-img-hotel-highlights {
      height: 500px !important;
      width: 300px !important;
    }
  }

  .overlap-below {
    /* position: absolute; */
    bottom: 0;
    left: 20px;
    width: 100%;
    /* padding: 10px; */
    box-sizing: border-box;
    color: white;
    transition: opacity 0.3s ease;
    opacity: 0;

  }



  .highlight-container:hover .overlap-below {
    opacity: 1;
    display: block !important;

  }

  @media screen and (max-width: 767px) {
    .overlap-desc {
      line-height: 24px;
    }

  }
 .page-id-197302 .flickity-viewport{
  height : 500px !important;
 }  
</style>

<link rel="stylesheet" href="/dependencies/css/wp-content/themes/emaar-projects/template-parts/dynamic-blocks/assets/css/individual-homepage-corporate-section.css">



<div id="carousalHeaders" class="carousel slide" data-ride="carousel">


    <div class="carousel-inner">
            <style>
          .individual-homepage-corporate-section.individual-homepage-corporate-section-0 {
            background-image: url('../../../wp-content/uploads/2024/11/EMAAR-Address-SkyView-by-Maddy-Christina-153-sur-171-scaled.jpg');

          }
        </style>

        <style>
          html[dir="rtl"] .individual-homepage-corporate-section.individual-homepage-corporate-section-0 {
            background-image: url('../../../wp-content/uploads/2024/11/EMAAR-Address-SkyView-by-Maddy-Christina-153-sur-171-scaled.jpg');
          }
        </style>
        <div class="carousel-item active">
          <div id="events" class="container-fluid g-0 individual-homepage-corporate-section individual-homepage-corporate-section-0">
            <div class="corporate-img-section">
              <div class="corporate-img-overlay"></div>
            </div>
            <div class="corporate-img-content text-white">

                              <h5 class="smalltitle eyebrow-dark whitetext">Weddings &amp; Events</h5>
              
                              <h2 class="whitetext pt-4 display-1-72 font-56-mobile mt-0 whitetext">Memorable Events</h2>
              
                              <p class="body-2 whitetext corporate-desc">Whether you’re celebrating your special day or conducting business in style, we have the perfect venue to make it memorable. </p>
              
              <div class="cta-btn">
                                  <a class="btn transbtn mt15r cntplink transparent-btn" href="/pages/events/index.php">View Details</a>
                              </div>

            </div>
          </div>
        </div>
      </div>



</div>
<style>
  @media (max-width: 600px) {
    .corporate-desc {
      overflow: hidden;
      text-overflow: ellipsis;
      display: -webkit-box !important;
      -webkit-line-clamp: 6;
      -webkit-box-orient: vertical;
    }
  }
</style>



<div class="container-fluid individual-homepage-contact-map-section" id="contact-details">
  <div class="container individual-homepage-contact-map">
    <div class="row g-0">
      <div class="col-12 col-lg-5 px-5 pt-5 py-lg-0 px-lg-3">
        <div class="individual-homepage-contact-map-content-box" data-aos="fade-right" data-aos-duration="600" data-aos-offset="300" data-aos-easing="ease-in-sine">

                      <h2 class="display-2-48">Contact Us</h2>
          
          <div class="contact-details">
            <!-- Gayathree- Contact email changes start -->

                          <p class="body-4">
                <i class="fal fa-phone-alt"></i>
                                <a class="bluelink secondary-medium" href="tel:+97148738888">
                  <span class="dir-ltr">+97148738888</span>
                </a>
              </p>
            

                          <p class="body-4">
                <i class="fal fa-envelope"></i>
                                <a class="bluelink secondary-medium" href="mailto:stay@addresshotels.com">
                  stay@addresshotels.com                </a>
              </p>
            

            
                        <!-- Gayathree- Contact email changes end -->

            

            

                          <p class="body-4">
                <i class="fal fa-map-marker-alt"></i>
                Sheikh Mohammed Bin Rashed Boulevard Downtown Dubai, PO Box 111969 Dubai, UAE              </p>
            
          </div>
        </div>
        <hr>
      </div>

      
        
        

        <script type="text/javascript">
          function initialize() {
            var mapOptions = {

              center: new google.maps.LatLng(25.201485152531276, 55.27063659940833),
              zoom: 12,

              styles: [{
                  "elementType": "geometry",
                  "stylers": [{
                    "color": "#f5f5f5"
                  }]
                },
                {
                  "elementType": "geometry.fill",
                  "stylers": [{
                    "color": "#ECEAE8"
                  }]
                },
                {
                  "elementType": "labels.icon",
                  "stylers": [{
                    "visibility": "off"
                  }]
                },
                {
                  "elementType": "labels.text.fill",
                  "stylers": [{
                    "color": "#928F8A"
                  }]
                },
                {
                  "elementType": "labels.text.stroke",
                  "stylers": [{
                    "color": "#f5f5f5"
                  }]
                },
                {
                  "featureType": "administrative.land_parcel",
                  "elementType": "labels",
                  "stylers": [{
                    "visibility": "off"
                  }]
                },
                {
                  "featureType": "administrative.land_parcel",
                  "elementType": "labels.text.fill",
                  "stylers": [{
                    "color": "#bdbdbd"
                  }]
                },
                {
                  "featureType": "administrative.locality",
                  "elementType": "labels",
                  "stylers": [{
                    "visibility": "off"
                  }]
                },
                {
                  "featureType": "poi",
                  "elementType": "geometry",
                  "stylers": [{
                    "color": "#eeeeee"
                  }]
                },
                {
                  "featureType": "poi",
                  "elementType": "labels.text",
                  "stylers": [{
                    "visibility": "off"
                  }]
                },
                {
                  "featureType": "poi",
                  "elementType": "labels.text.fill",
                  "stylers": [{
                    "color": "#757575"
                  }]
                },
                {
                  "featureType": "poi.park",
                  "elementType": "geometry",
                  "stylers": [{
                    "color": "#e5e5e5"
                  }]
                },
                {
                  "featureType": "poi.park",
                  "elementType": "labels.text.fill",
                  "stylers": [{
                    "color": "#9e9e9e"
                  }]
                },
                {
                  "featureType": "road",
                  "elementType": "geometry",
                  "stylers": [{
                    "color": "#ffffff"
                  }]
                },
                {
                  "featureType": "road",
                  "elementType": "geometry.fill",
                  "stylers": [{
                    "color": "#ffffff"
                  }]
                },
                {
                  "featureType": "road.arterial",
                  "elementType": "labels.text.fill",
                  "stylers": [{
                    "color": "#757575"
                  }]
                },
                {
                  "featureType": "road.highway",
                  "elementType": "geometry",
                  "stylers": [{
                    "color": "#dadada"
                  }]
                },
                {
                  "featureType": "road.highway",
                  "elementType": "geometry.fill",
                  "stylers": [{
                    "color": "#ffffff"
                  }]
                },
                {
                  "featureType": "road.highway",
                  "elementType": "labels.text.fill",
                  "stylers": [{
                    "color": "#616161"
                  }]
                },
                {
                  "featureType": "road.local",
                  "elementType": "labels",
                  "stylers": [{
                    "visibility": "off"
                  }]
                },
                {
                  "featureType": "road.local",
                  "elementType": "labels.text.fill",
                  "stylers": [{
                    "color": "#9e9e9e"
                  }]
                },
                {
                  "featureType": "transit.line",
                  "elementType": "geometry",
                  "stylers": [{
                    "color": "#e5e5e5"
                  }]
                },
                {
                  "featureType": "transit.station",
                  "elementType": "geometry",
                  "stylers": [{
                    "color": "#eeeeee"
                  }]
                },
                {
                  "featureType": "water",
                  "elementType": "geometry",
                  "stylers": [{
                    "color": "#c9c9c9"
                  }]
                },
                {
                  "featureType": "water",
                  "elementType": "geometry.fill",
                  "stylers": [{
                    "color": "#D4D1CC"
                  }]
                },
                {
                  "featureType": "water",
                  "elementType": "labels.text.fill",
                  "stylers": [{
                    "color": "#9e9e9e"
                  }]
                }
              ],
              mapTypeId: google.maps.MapTypeId.ROADMAP,

              // MAP CONTROLS (START)
              // mapTypeControl: true,
              panControl: false,
              zoomControl: false,
              streetViewControl: false,
              fullscreenControl: false,
              mapTypeControl: false,
              // MAP CONTROLS (END)

            };
            var map = new google.maps.Map(document.getElementById("map_canvas"),
              mapOptions);
            /**********Location Image/icon ******/
            var imagaloc = "/images/map-indicator.png";
            var companyImage = new google.maps.MarkerImage(imagaloc,
              new google.maps.Size(40, 55),
              new google.maps.Point(0, 0),
              new google.maps.Point(20, 60)
            );
            /****************************/

            // -------------- MARKER 2
            //The Address Dubai Mall
            var marker2 = new google.maps.Marker({
              position: new google.maps.LatLng(25.201485152531276, 55.27063659940833),
              icon: "https://www.addresshotels.com/wp-content/themes/emaar-projects/images/marker-location.svg", // Request ID # 212282 | 26/07/22 | Anubhav Gogoi
              map: map
            });

            var infowindow2 = new google.maps.InfoWindow({
              content: 'Address Sky View'
            });

            marker2.addListener('click', function() {
              infowindow2.open(map, marker2);
              $("#pseudo_map_link")[0].click(); // Request ID # 212282 | 26/07/22 | Anubhav Gogoi
            });


          }
          google.maps.event.addDomListener(window, 'load', initialize);
        </script>

        <div class="col-12 col-lg-7 mt-0">

          <!-- # CHG3718 | 07/07/22 | Anubhav Gogoi -->
          <!-- <a href="/dependencies/external/www.google.co.in/maps/place/Address+Sky+View/@25.2015914,55.2683494,17z/data=!3m1!4b1!4m8!3m7!1s0x3e5f43859586ed13:0xe1103d783cf1f2f1!5m2!4m1!1i2!8m2!3d25.2015914!4d55.2705381" id="pseudo_map_link" target="_blank"></a> -->
          <!-- # CHG3718 | 07/07/22 | Anubhav Gogoi END  -->

          <a href="/dependencies/external/www.google.co.in/maps/place/Address+Sky+View/@25.2015914,55.2683494,17z/data=!3m1!4b1!4m8!3m7!1s0x3e5f43859586ed13:0xe1103d783cf1f2f1!5m2!4m1!1i2!8m2!3d25.2015914!4d55-hl-en.2705381" id="pseudo_map_link" target="_blank"></a>


          <div class="is-visible">
            <div id="map_canvas" style="height:400px;" data-aos="fade-left" data-aos-duration="600" data-aos-offset="300" data-aos-easing="ease-in-sine"></div>
          </div>
        </div>
      

    </div>
  </div>
</div>


<section id="faq" class="global-hotel-landing-faq-section greyboxlight">
  <div class="container px-3 py-5">
    <h2 class="mb-3 pb-1 display-2-48 font-56-mobile">FAQs</h2>
    <div class="accordion accordionFaq" id="accordionFaq659105484">
              <div class="card">
          <div class="card-header" id="heading0">

                          <button class="btn btn-block d-flex text-left body-2 justify-content-between align-items-center" type="button" data-toggle="collapse" data-target="#collapse6591054840" aria-expanded="true" aria-controls="collapse0">
                <h3 class="mb-0 body-2">How can I make a hotel reservation at Address Sky View? </h3>
                <i class="fal fa-plus float-end plus-icon" aria-hidden="true"></i>
              </button>
                      </div>

          <div id="collapse6591054840" class="collapse accordionFaq-card-content" aria-labelledby="heading0" data-parent="#accordionFaq659105484">
            <div class="card-body">
            To secure your reservation with us at Address Sky View, you have multiple convenient options. You may initiate the booking process by accessing our official website at <a href="/pages/index.php">https://www.addresshotels.com/en/hotels/address-sky-view/</a>. Alternatively, you can send us an email at <a href="mailto:stay@addresshotels.com">stay@addresshotels.com</a>. <br>For direct assistance and personalized service, feel free to contact our dedicated team by placing a call to us at +971 42 458 888.              <div class="cta-btn mt-4">
              </div>
            </div>
          </div>
        </div>
              <div class="card">
          <div class="card-header" id="heading1">

                          <button class="btn btn-block d-flex text-left body-2 justify-content-between align-items-center" type="button" data-toggle="collapse" data-target="#collapse6591054841" aria-expanded="true" aria-controls="collapse1">
                <h3 class="mb-0 body-2">What is the standard check-in time and check-out time at Address Sky View? </h3>
                <i class="fal fa-plus float-end plus-icon" aria-hidden="true"></i>
              </button>
                      </div>

          <div id="collapse6591054841" class="collapse accordionFaq-card-content" aria-labelledby="heading1" data-parent="#accordionFaq659105484">
            <div class="card-body">
            The designated time for standard check-in is 3:00 PM, and for check-out, it is scheduled for 12:00 PM. This policy applies to all guests at Address Hotels + Resorts, ensuring a seamless and organized arrival and departure experience. We kindly request our valued guests to adhere to these timings to facilitate the efficient turnover of accommodations and maintain the high standards of service synonymous with Address Hotels + Resorts.              <div class="cta-btn mt-4">
              </div>
            </div>
          </div>
        </div>
              <div class="card">
          <div class="card-header" id="heading2">

                          <button class="btn btn-block d-flex text-left body-2 justify-content-between align-items-center" type="button" data-toggle="collapse" data-target="#collapse6591054842" aria-expanded="true" aria-controls="collapse2">
                <h3 class="mb-0 body-2">What accommodation options are available at Address Sky View? </h3>
                <i class="fal fa-plus float-end plus-icon" aria-hidden="true"></i>
              </button>
                      </div>

          <div id="collapse6591054842" class="collapse accordionFaq-card-content" aria-labelledby="heading2" data-parent="#accordionFaq659105484">
            <div class="card-body">
            Discover an array of picturesque accommodations at Address Sky View, featuring an exquisite selection of rooms and suites that cater to diverse preferences. Among the enticing choices are the Premier Room King, Premier Room Twin, Premier Burj View Room King, Premier Burj View Room Twin, Club Room King, Club Room Twin, Junior Suite, Executive Suite, and the opulent Presidential Suite. Each category is meticulously designed to provide a distinctive experience, ensuring a stay that exceeds expectations.<br>For a comprehensive insight into the distinctive characteristics and amenities offered by each of our room categories, we invite you to explore further details by visiting the following link: <a href="/pages/rooms-and-suites/index.php">https://www.addresshotels.com/en/hotels/address-sky-view/rooms-and-suites/</a>. This resource provides an in-depth overview, allowing you to make an informed choice and tailor your stay at Address Sky View to your individual preferences and desires.              <div class="cta-btn mt-4">
              </div>
            </div>
          </div>
        </div>
              <div class="card">
          <div class="card-header" id="heading3">

                          <button class="btn btn-block d-flex text-left body-2 justify-content-between align-items-center" type="button" data-toggle="collapse" data-target="#collapse6591054843" aria-expanded="true" aria-controls="collapse3">
                <h3 class="mb-0 body-2">What room amenities are available at Address Sky View ? </h3>
                <i class="fal fa-plus float-end plus-icon" aria-hidden="true"></i>
              </button>
                      </div>

          <div id="collapse6591054843" class="collapse accordionFaq-card-content" aria-labelledby="heading3" data-parent="#accordionFaq659105484">
            <div class="card-body">
            Step into an elevated realm of comfort and convenience with our thoughtfully furnished rooms and suites, each equipped with modern amenities for an enhanced stay. Explore the seamless accessibility of our automated in-room iPad service, granting you easy control over various services. Stay connected with complimentary high-speed Wi-Fi, and unwind with the added convenience of a coffee machine and tea-making facilities within your space. Your safety is paramount with an in-room security safe, offering a secure spot for your valuables. Enjoy entertainment at its finest with an interactive flat-screen TV, boasting a range of channels and on-demand content. Additionally, treat yourself to a private minibar, where you can indulge in a curated selection of beverages and snacks (surcharge applies), completing the perfect accommodation experience.              <div class="cta-btn mt-4">
              </div>
            </div>
          </div>
        </div>
              <div class="card">
          <div class="card-header" id="heading4">

                          <button class="btn btn-block d-flex text-left body-2 justify-content-between align-items-center" type="button" data-toggle="collapse" data-target="#collapse6591054844" aria-expanded="true" aria-controls="collapse4">
                <h3 class="mb-0 body-2">How do I access the infinity pool as a hotel guest or as a non-hotel guest? </h3>
                <i class="fal fa-plus float-end plus-icon" aria-hidden="true"></i>
              </button>
                      </div>

          <div id="collapse6591054844" class="collapse accordionFaq-card-content" aria-labelledby="heading4" data-parent="#accordionFaq659105484">
            <div class="card-body">
            The highly sought-after infinity pool, offering breathtaking views of the iconic Burj Khalifa, is a privileged amenity exclusively accessible to our esteemed hotel guests. For those not staying with us, there&#8217;s an enticing option to relish the ambiance by choosing to dine at CÉ LA VI Dubai. However a dining experience at Ce La Vi, does not entail the use to the Infinity Pool.<br><br>For an unforgettable experience at Address Sky View, securing your stay is just a few clicks away. Explore the available accommodations, amenities, and services by visiting our website at <a href="/pages/index.php">https://www.addresshotels.com/en/hotels/address-sky-view/</a>. To make a reservation, you can also reach out to us via email at <a href="mailto:stay@addresshotels.com">stay@addresshotels.com</a> or contact our dedicated team directly at +971 42 458 888. We look forward to making your stay with us truly exceptional.              <div class="cta-btn mt-4">
              </div>
            </div>
          </div>
        </div>
              <div class="card">
          <div class="card-header" id="heading5">

                          <button class="btn btn-block d-flex text-left body-2 justify-content-between align-items-center" type="button" data-toggle="collapse" data-target="#collapse6591054845" aria-expanded="true" aria-controls="collapse5">
                <h3 class="mb-0 body-2">Is U by Emaar applicable at your hotel? </h3>
                <i class="fal fa-plus float-end plus-icon" aria-hidden="true"></i>
              </button>
                      </div>

          <div id="collapse6591054845" class="collapse accordionFaq-card-content" aria-labelledby="heading5" data-parent="#accordionFaq659105484">
            <div class="card-body">
            Certainly, U by Emaar discounts can be availed across various facets of your experience, extending their applicability to accommodations, dining experiences, and rejuvenating wellness treatments. Whether you choose to stay with us, indulge in delectable dining options, or pamper yourself with wellness treatments, the exclusive benefits of U by Emaar are designed to enhance and elevate every aspect of your visit.              <div class="cta-btn mt-4">
              </div>
            </div>
          </div>
        </div>
              <div class="card">
          <div class="card-header" id="heading6">

                          <button class="btn btn-block d-flex text-left body-2 justify-content-between align-items-center" type="button" data-toggle="collapse" data-target="#collapse6591054846" aria-expanded="true" aria-controls="collapse6">
                <h3 class="mb-0 body-2">Does Address Sky View have a spa? </h3>
                <i class="fal fa-plus float-end plus-icon" aria-hidden="true"></i>
              </button>
                      </div>

          <div id="collapse6591054846" class="collapse accordionFaq-card-content" aria-labelledby="heading6" data-parent="#accordionFaq659105484">
            <div class="card-body">
            Situated on Level 54, The Spa at Address Sky View stands out for its world-class facilities, featuring dedicated spaces for beauty treatments, massage therapies, and a diverse range of wellness experiences, all administered by highly skilled professionals.              <div class="cta-btn mt-4">
              </div>
            </div>
          </div>
        </div>
              <div class="card">
          <div class="card-header" id="heading7">

                          <button class="btn btn-block d-flex text-left body-2 justify-content-between align-items-center" type="button" data-toggle="collapse" data-target="#collapse6591054847" aria-expanded="true" aria-controls="collapse7">
                <h3 class="mb-0 body-2">How many restaurants are in Address Sky View? </h3>
                <i class="fal fa-plus float-end plus-icon" aria-hidden="true"></i>
              </button>
                      </div>

          <div id="collapse6591054847" class="collapse accordionFaq-card-content" aria-labelledby="heading7" data-parent="#accordionFaq659105484">
            <div class="card-body">
            Address Sky View boasts six distinct dining destinations within the hotel, offering a diverse culinary experience. These include:<br><br>&#8211; The Restaurant, an all-day dining venue<br>&#8211; Deck Too, a poolside lounge<br>&#8211; Patisserie, located in the lobby<br>&#8211; CÉ LA VI, offering contemporary Asian cuisine<br>&#8211; Lucia’s, specializing in Italian fare<br>&#8211; Amelia Restaurant and Lounge, presenting a fusion of Peruvian and Japanese flavours.<br><br>Each of these dining establishments contributes to the rich tapestry of gastronomic delights available at Address Sky View.<br>              <div class="cta-btn mt-4">
              </div>
            </div>
          </div>
        </div>
              <div class="card">
          <div class="card-header" id="heading8">

                          <button class="btn btn-block d-flex text-left body-2 justify-content-between align-items-center" type="button" data-toggle="collapse" data-target="#collapse6591054848" aria-expanded="true" aria-controls="collapse8">
                <h3 class="mb-0 body-2">What facilities and activities are available at the hotel? </h3>
                <i class="fal fa-plus float-end plus-icon" aria-hidden="true"></i>
              </button>
                      </div>

          <div id="collapse6591054848" class="collapse accordionFaq-card-content" aria-labelledby="heading8" data-parent="#accordionFaq659105484">
            <div class="card-body">
            Our offerings encompass a comprehensive array of facilities, ensuring a well-rounded and enriching experience for our guests. From the captivating “<a href="/dependencies/external/www.skyviewsdubai.com/index.bin">Sky View Observatory</a>” to the engaging Qix Kids Club, the multiple swimming pools situated on the ground level, and the mesmerizing infinity pool on Level 54, we provide diverse options for relaxation and recreation. Our spa, fitness centre, and beauty salon cater to wellness and grooming needs, while the six distinctive dining venues present a culinary journey. Additionally, we offer versatile event spaces to accommodate various occasions, further enhancing the overall experience at our establishment.              <div class="cta-btn mt-4">
              </div>
            </div>
          </div>
        </div>
              <div class="card">
          <div class="card-header" id="heading9">

                          <button class="btn btn-block d-flex text-left body-2 justify-content-between align-items-center" type="button" data-toggle="collapse" data-target="#collapse6591054849" aria-expanded="true" aria-controls="collapse9">
                <h3 class="mb-0 body-2">How far is Address Sky View from Dubai Mall? </h3>
                <i class="fal fa-plus float-end plus-icon" aria-hidden="true"></i>
              </button>
                      </div>

          <div id="collapse6591054849" class="collapse accordionFaq-card-content" aria-labelledby="heading9" data-parent="#accordionFaq659105484">
            <div class="card-body">
            Dubai Mall is conveniently located just a short stroll away from Address Sky View, with an approximate walking distance of about 10 minutes via the air-conditioned walkway. This proximity allows our guests to seamlessly access the vibrant shopping, dining, and entertainment offerings at Dubai Mall, enhancing their overall experience during their stay at Address Sky View.              <div class="cta-btn mt-4">
              </div>
            </div>
          </div>
        </div>
              <div class="card">
          <div class="card-header" id="heading10">

                          <button class="btn btn-block d-flex text-left body-2 justify-content-between align-items-center" type="button" data-toggle="collapse" data-target="#collapse65910548410" aria-expanded="true" aria-controls="collapse10">
                <h3 class="mb-0 body-2">What is sky views observatory? </h3>
                <i class="fal fa-plus float-end plus-icon" aria-hidden="true"></i>
              </button>
                      </div>

          <div id="collapse65910548410" class="collapse accordionFaq-card-content" aria-labelledby="heading10" data-parent="#accordionFaq659105484">
            <div class="card-body">
            The Sky Views Observatory introduces a groundbreaking and unprecedented array of exhilarating experiences, featuring a unique outdoor glass slide. This extraordinary slide propels adventurous visitors from the elevated height of level 53 at 219.5 meters to level 52 at 215.5 meters, all within the confines of an enclosed and transparent glass tube. This one-of-a-kind attraction promises an unparalleled adventure, providing guests with a thrilling journey and breathtaking panoramic views of the surroundings. For bookings please visit our Sky View Observatory site and <a href="/dependencies/external/www.skyviewsdubai.com/booking.bin">Book now</a>!              <div class="cta-btn mt-4">
              </div>
            </div>
          </div>
        </div>
          </div>
  </div>
</section>


<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [{
    "@type": "Question",
    "name": "How can I make a hotel reservation at Address Sky View?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "To secure your reservation with us at Address Sky View, you have multiple convenient options. You may initiate the booking process by accessing our official website at https://www.addresshotels.com/en/hotels/address-sky-view/. Alternatively, you can send us an email at stay@addresshotels.com.
For direct assistance and personalized service, feel free to contact our dedicated team by placing a call to us at +971 42 458 888."
    }
  },{
    "@type": "Question",
    "name": ">What is the standard check-in time and check-out time at Address Sky View?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "The designated time for standard check-in is 3:00 PM, and for check-out, it is scheduled for 12:00 PM. This policy applies to all guests at Address Hotels + Resorts, ensuring a seamless and organized arrival and departure experience. We kindly request our valued guests to adhere to these timings to facilitate the efficient turnover of accommodations and maintain the high standards of service synonymous with Address Hotels + Resorts."
    }
  },{
    "@type": "Question",
    "name": "What accommodation options are available at Address Sky View?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Discover an array of picturesque accommodations at Address Sky View, featuring an exquisite selection of rooms and suites that cater to diverse preferences. Among the enticing choices are the Premier Room King, Premier Room Twin, Premier Burj View Room King, Premier Burj View Room Twin, Club Room King, Club Room Twin, Junior Suite, Executive Suite, and the opulent Presidential Suite. Each category is meticulously designed to provide a distinctive experience, ensuring a stay that exceeds expectations.
For a comprehensive insight into the distinctive characteristics and amenities offered by each of our room categories, we invite you to explore further details by visiting the following link: https://www.addresshotels.com/en/hotels/address-sky-view/rooms-and-suites/. This resource provides an in-depth overview, allowing you to make an informed choice and tailor your stay at Address Sky View to your individual preferences and desires."
    }
  },{
    "@type": "Question",
    "name": "What room amenities are available at Address Sky View ?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Step into an elevated realm of comfort and convenience with our thoughtfully furnished rooms and suites, each equipped with modern amenities for an enhanced stay. Explore the seamless accessibility of our automated in-room iPad service, granting you easy control over various services. Stay connected with complimentary high-speed Wi-Fi, and unwind with the added convenience of a coffee machine and tea-making facilities within your space. Your safety is paramount with an in-room security safe, offering a secure spot for your valuables. Enjoy entertainment at its finest with an interactive flat-screen TV, boasting a range of channels and on-demand content. Additionally, treat yourself to a private minibar, where you can indulge in a curated selection of beverages and snacks (surcharge applies), completing the perfect accommodation experience."
    }
  },{
    "@type": "Question",
    "name": "How do I access the infinity pool as a hotel guest or as a non-hotel guest?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "The highly sought-after infinity pool, offering breathtaking views of the iconic Burj Khalifa, is a privileged amenity exclusively accessible to our esteemed hotel guests. For those not staying with us, there’s an enticing option to relish the ambiance by choosing to dine at CÉ LA VI Dubai. However a dining experience at Ce La Vi, does not entail the use to the Infinity Pool.

For an unforgettable experience at Address Sky View, securing your stay is just a few clicks away. Explore the available accommodations, amenities, and services by visiting our website at https://www.addresshotels.com/en/hotels/address-sky-view/. To make a reservation, you can also reach out to us via email at stay@addresshotels.com or contact our dedicated team directly at +971 42 458 888. We look forward to making your stay with us truly exceptional."
    }
  },{
    "@type": "Question",
    "name": "Is U by Emaar applicable at your hotel?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Certainly, U by Emaar discounts can be availed across various facets of your experience, extending their applicability to accommodations, dining experiences, and rejuvenating wellness treatments. Whether you choose to stay with us, indulge in delectable dining options, or pamper yourself with wellness treatments, the exclusive benefits of U by Emaar are designed to enhance and elevate every aspect of your visit."
    }
  },{
    "@type": "Question",
    "name": "Does Address Sky View have a spa?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Situated on Level 54, The Spa at Address Sky View stands out for its world-class facilities, featuring dedicated spaces for beauty treatments, massage therapies, and a diverse range of wellness experiences, all administered by highly skilled professionals."
    }
  },{
    "@type": "Question",
    "name": "How many restaurants are in Address Sky View?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Address Sky View boasts six distinct dining destinations within the hotel, offering a diverse culinary experience. These include:

– The Restaurant, an all-day dining venue
– Deck Too, a poolside lounge
– Patisserie, located in the lobby
– CÉ LA VI, offering contemporary Asian cuisine
– Lucia’s, specializing in Italian fare
– Amelia Restaurant and Lounge, presenting a fusion of Peruvian and Japanese flavours.

Each of these dining establishments contributes to the rich tapestry of gastronomic delights available at Address Sky View."
    }
  },{
    "@type": "Question",
    "name": "What facilities and activities are available at the hotel?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Our offerings encompass a comprehensive array of facilities, ensuring a well-rounded and enriching experience for our guests. From the captivating “Sky View Observatory” to the engaging Qix Kids Club, the multiple swimming pools situated on the ground level, and the mesmerizing infinity pool on Level 54, we provide diverse options for relaxation and recreation. Our spa, fitness centre, and beauty salon cater to wellness and grooming needs, while the six distinctive dining venues present a culinary journey. Additionally, we offer versatile event spaces to accommodate various occasions, further enhancing the overall experience at our establishment."
    }
  },{
    "@type": "Question",
    "name": "How far is Address Sky View from Dubai Mall?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Dubai Mall is conveniently located just a short stroll away from Address Sky View, with an approximate walking distance of about 10 minutes via the air-conditioned walkway. This proximity allows our guests to seamlessly access the vibrant shopping, dining, and entertainment offerings at Dubai Mall, enhancing their overall experience during their stay at Address Sky View."
    }
  },{
    "@type": "Question",
    "name": "What is sky views observatory?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "The Sky Views Observatory introduces a groundbreaking and unprecedented array of exhilarating experiences, featuring a unique outdoor glass slide. This extraordinary slide propels adventurous visitors from the elevated height of level 53 at 219.5 meters to level 52 at 215.5 meters, all within the confines of an enclosed and transparent glass tube. This one-of-a-kind attraction promises an unparalleled adventure, providing guests with a thrilling journey and breathtaking panoramic views of the surroundings. For bookings please visit our Sky View Observatory site and Book now!"
    }
  }]
}
</script>
<div id="amenities" class="container text-center pt-5">
  <h2 class="pt-4 mb-4 pb-3 eyebrow-dark">ADDRESS SKY VIEW AMENITIES</h2>
</div>
<div class="wp-block-group container-fluid white-bg mb-5 pb-5">
  <div class="wp-block-group__inner-container is-layout-flow wp-block-group-is-layout-flow">
    <div class="container-fluid pt-5">
      <div class="row position-relative">
        <div class="col-12 p-0 px-lg-3">
          <img width="1284" height="375" decoding="async" src="/dependencies/img/wp-content/uploads/2020/10/INFINITY-POOL-DAY-ADDRESS-SKY-VIEW-copy.jpg" alt="Infinity pool at Address Sky View" class="img-fluid amenities-large-img p-0 px-lg-3">
        </div>
        <div class="amenities-title-box ">
          <h2 class="display-2-48">Infinity Pool</h2>
        </div>
        <hr class="amenities-title-box-hr">
      </div>
      <div class="row justify-content-center text-center">
        <div class="col-12 col-lg-8 amenities-list-col">
          <p class="text-center mt-5 mb-4 body-4">Relax in style at our breathtaking infinity pool. A large sun-lounging deck, private cabanas, a bar with both pool and dry deck seating - the Address Sky View pool deck is all of that and more.</p>
          <ul class="amenities-list text-left body-4">
            <li class="d-flex align-items-center mb-2"><span class="generic-icon px-2"></span>Located on the iconic Sky Deck</li>
            <li class="d-flex align-items-center mb-2"><span class="generic-icon px-2"></span>Access to 18 years and above.</li>
            <li class="d-flex align-items-center mb-2"><span class="generic-icon px-2"></span>Timing: 9:00 AM till Sunset</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container-fluid pt-5">
      <div class="row position-relative">
        <div class="col-12 p-0 px-lg-3">
          <img width="1284" height="375" decoding="async" src="/dependencies/img/wp-content/uploads/2020/10/KIDS-CLUB-ADDRESS-SKY-VIEW-copy.jpg" alt="Qix Kids Club at Address Sky View" class="img-fluid amenities-large-img p-0 px-lg-3">
        </div>
        <div class="amenities-title-box ">
          <h2 class="display-2-48">Qix Kids Club</h2>
        </div>
        <hr class="amenities-title-box-hr">
      </div>
      <div class="row justify-content-center text-center">
        <div class="col-12 col-lg-8 amenities-list-col">
          <p class="text-center mt-5 mb-4 body-4">Enjoy a well-earned moment for yourself and leave your little ones to us. Our qualified team of childcare professionals will spark their imagination with educational games, fun activities and craft sessions they will love.</p>
          <ul class="amenities-list text-left body-4">
            <li class="d-flex align-items-center mb-2"><span class="generic-icon px-2"></span>For children between the ages of 4 and 12</li>
            <li class="d-flex align-items-center mb-2"><span class="generic-icon px-2"></span>Babysitting services to be booked 24 hours in advance.</li>
            <li class="d-flex align-items-center mb-2"><span class="generic-icon px-2"></span>Timing: 10am to 7pm</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<?php include __DIR__ . '/_partials/footer.php'; ?>
<?php include __DIR__ . '/_partials/foot.php'; ?>
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