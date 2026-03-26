<?php
declare(strict_types=1);
$requestPath = trim((string) parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH), '/');
$isOnePageHome = in_array($requestPath, ['', 'index.php', 'pages/index.php'], true);
$homePrefix = $isOnePageHome ? '' : '/pages/index.php';
?>
<header id="masthead" class="site-header custom-navbar-page nav-individual more-dropdown-navbar">
  <div id="to-top"></div>
  <style>
    html { scroll-behavior: smooth; }
    #featured-offer, #accommodation, #highlights, #events, #amenities, #contact-details, #faq, #page-top {
      scroll-margin-top: 120px;
    }
    #nav-main.scrolled-nav {
      background-color: #fff !important;
    }
    #nav-main.scrolled-nav .navbar-nav .nav-link,
    #nav-main.scrolled-nav .wpml-ls-legacy-dropdown-click a {
      color: #25282d !important;
    }
    #nav-main #black_logo { display: none !important; }
    #nav-main #white_logo { display: block !important; }
    #nav-main.scrolled-nav #black_logo { display: block !important; }
    #nav-main.scrolled-nav #white_logo { display: none !important; }
    #nav-main .toggler-icon-animated .fa-times { display: none; }
    #nav-main.menu-open .toggler-icon-animated .fa-bars { display: none; }
    #nav-main.menu-open .toggler-icon-animated .fa-times { display: inline-block; }
  </style>

  <nav id="nav-main" class="navbar navbar-expand-xl fixed-top top-0 start-0 w-100 px-0 px-lg-3 py-3 py-lg-4 align-content-start global-navbar internal-nav" style="z-index: 900;">

    <div class="custom-navigation-expandable container-fluid px-sm-3 justify-content-lg-between align-items-lg-end mt-3 mt-lg-2">

      <div id="custom-sticky-itendifier">
        <a class="navbar-brand pb-0 pl-3 px-lg-0 custom-width-navbar-brand d-flex justify-content-center" href="<?= $homePrefix ?>#page-top">
          <img width="141" height="34" id="black_logo" src="/dependencies/img/wp-content/uploads/2021/03/address-SkyViews-logo-B.svg" alt="logo" class="logo" style="display:none">

          <img width="141" height="34" id="white_logo" src="/dependencies/img/wp-content/uploads/2021/03/address-SkyViews-logo-W.svg" alt="logo" class="logo">
        </a>
      </div>

      <!-- Mobile Search Module -->
      <div class="d-flex">
        <button class="navbar-toggler ml-2 pr-3 px-lg-3 px-xl-0 bootstrap-collapse-navbar" type="button" data-toggle="collapse" data-target="#bootscore-navbar-collapse" aria-controls="#cw-navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
          <div class="toggler-icon-animated">
            <i class="fal fa-bars"></i>
            <i class="fal fa-times"></i>
          </div>
        </button>
      </div>
      <hr class="header-bottom-line-IBU d-none">


      <div class="collapse navbar-collapse custom-collapsed-items align-items-xl-end p-lg-0 px-3 py-4 " id="bootscore-navbar-collapsedd">

        <div class=" flex-grow-1 justify-content-start" id="responsive-navbar-flex">
          <ul class="navbar-nav static-area">
            <li id="menu-item-175612" class="nav-item dropdown hotelsandresortsmenu menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children dropdown active menu-item-175612 nav-item"><a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle nav-link" id="menu-item-dropdown-175612">Hotels &#038; Resorts</a>
<ul id='hotelList__dropdown' class="dropdown-menu" aria-labelledby="menu-item-dropdown-175612"><div class='container hotel_resorts_dropdown'>
	<li id="menu-item-175613" class="nav-indentation-class nav-link menu-item menu-item-type-custom menu-item-object-custom menu-item-175613 nav-item"><a href="#" class="dropdown-item">United Arab Emirates</a></li>
	<li id="menu-item-175614" class="dropdown-item hotel-nav-sub-heading menu-item menu-item-type-custom menu-item-object-custom menu-item-175614 nav-item"><a href="#" class="dropdown-item">Dubai</a></li>
	<li id="menu-item-175615" class="dropdown-item menu-item menu-item-type-custom menu-item-object-custom menu-item-175615 nav-item"><a href="/en/resorts/address-beach-resort/" class="dropdown-item">Address Beach Resort</a></li>
	<li id="menu-item-175616" class="dropdown-item menu-item menu-item-type-custom menu-item-object-custom menu-item-175616 nav-item"><a href="/en/hotels/address-downtown/" class="dropdown-item">Address Downtown</a></li>
	<li id="menu-item-175617" class="dropdown-item menu-item menu-item-type-custom menu-item-object-custom menu-item-175617 nav-item"><a href="/en/hotels/address-dubai-mall/" class="dropdown-item">Address Dubai Mall</a></li>
	<li id="menu-item-175618" class="dropdown-item menu-item menu-item-type-custom menu-item-object-custom menu-item-175618 nav-item"><a href="/en/hotels/address-creek-harbour/" class="dropdown-item">Address Creek Harbour</a></li>
	<li id="menu-item-175619" class="dropdown-item menu-item menu-item-type-custom menu-item-object-custom menu-item-175619 nav-item"><a href="/en/hotels/address-montgomerie/" class="dropdown-item">Address Montgomerie</a></li>
	<li id="menu-item-175621" class="dropdown-item menu-item menu-item-type-custom menu-item-object-custom current-menu-item active menu-item-175621 nav-item"><a href="<?= $homePrefix ?>#page-top" class="dropdown-item" aria-current="page">Address Sky View</a></li>
	<li id="menu-item-175624" class="dropdown-item menu-item menu-item-type-custom menu-item-object-custom menu-item-175624 nav-item"><a href="/en/hotels/palace-downtown/" class="dropdown-item">Palace Downtown</a></li>
	<li id="menu-item-175625" class="dropdown-item menu-item menu-item-type-custom menu-item-object-custom menu-item-175625 nav-item"><a href="/en/hotels/palace-dubai-creek-harbour/" class="dropdown-item">Palace Dubai Creek Harbour</a></li>
	<li id="menu-item-175627" class="dropdown-item hotel-nav-sub-heading menu-item menu-item-type-custom menu-item-object-custom menu-item-175627 nav-item"><a href="#" class="dropdown-item">Fujairah</a></li>
	<li id="menu-item-175628" class="dropdown-item menu-item menu-item-type-custom menu-item-object-custom menu-item-175628 nav-item"><a href="/en/resorts/address-beach-resort-fujairah/" class="dropdown-item">Address Beach Resort Fujairah</a></li>
	<li id="menu-item-175668" class="dropdown-item menu-item menu-item-type-custom menu-item-object-custom menu-item-175668 nav-item"><a href="/en/resorts/palace-beach-resort-fujairah/" class="dropdown-item">Palace Beach Resort Fujairah</a></li>
	<li id="menu-item-175669" class="nav-indentation-class nav-linking menu-item menu-item-type-custom menu-item-object-custom menu-item-175669 nav-item"><a href="#" class="dropdown-item">Bahrain</a></li>
	<li id="menu-item-175670" class="dropdown-item menu-item menu-item-type-custom menu-item-object-custom menu-item-175670 nav-item"><a href="/en/resorts/address-beach-resort-bahrain/" class="dropdown-item">Address Beach Resort Bahrain</a></li>
	<li id="menu-item-175671" class="dropdown-item hotel-nav-sub-heading menu-item menu-item-type-custom menu-item-object-custom menu-item-175671 nav-item"><a href="#" class="dropdown-item">Egypt</a></li>
	<li id="menu-item-175672" class="dropdown-item menu-item menu-item-type-custom menu-item-object-custom menu-item-175672 nav-item"><a href="/en/resorts/address-marassi-golf-resort/" class="dropdown-item">Address Marassi Golf Resort</a></li>
	<li id="menu-item-175673" class="dropdown-item menu-item menu-item-type-custom menu-item-object-custom menu-item-175673 nav-item"><a href="/en/resorts/address-beach-resort-marassi/" class="dropdown-item">Address Beach Resort Marassi</a></li>
	<li id="menu-item-201444" class="dropdown-item menu-item menu-item-type-post_type menu-item-object-page menu-item-201444 nav-item"><a href="/en/resorts/palace-beach-resort/" class="dropdown-item">Palace Beach Resort</a></li>
	<li id="menu-item-175674" class="dropdown-item hotel-nav-sub-heading menu-item menu-item-type-custom menu-item-object-custom menu-item-175674 nav-item"><a href="#" class="dropdown-item">Saudi Arabia</a></li>
	<li id="menu-item-175675" class="dropdown-item menu-item menu-item-type-custom menu-item-object-custom menu-item-175675 nav-item"><a href="/en/hotels/address-jabal-omar-makkah/" class="dropdown-item">Address Jabal Omar Makkah</a></li>
	<li id="menu-item-175676" class="dropdown-item hotel-nav-sub-heading menu-item menu-item-type-custom menu-item-object-custom menu-item-175676 nav-item"><a href="#" class="dropdown-item">Turkey</a></li>
	<li id="menu-item-175638" class="dropdown-item menu-item menu-item-type-custom menu-item-object-custom menu-item-175638 nav-item"><a href="/en/hotels/address-istanbul/" class="dropdown-item">Address Istanbul</a></li>
</div></ul>
</li>
<li id="menu-item-29631" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-29631 nav-item"><a href="<?= $homePrefix ?>#accommodation" class="nav-link">Rooms and Suites</a></li>
<li id="menu-item-2838" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2838 nav-item"><a href="<?= $homePrefix ?>#accommodation" class="nav-link">Residences</a></li>
<li id="menu-item-2839" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2839 nav-item"><a href="<?= $homePrefix ?>#highlights" class="nav-link">Dining</a></li>
<li id="menu-item-2840" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2840 nav-item"><a href="<?= $homePrefix ?>#highlights" class="nav-link">Wellness</a></li>
<li id="menu-item-2841" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2841 nav-item"><a href="<?= $homePrefix ?>#events" class="nav-link">Events</a></li>
          </ul>

                    <div id="work-area" class="work-area-class">
            <!-- Add your content here -->
            <ul class="navbar-nav work-navbar-nav">
              <li id="menu-item-175954" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-175954 nav-item"><a href="<?= $homePrefix ?>#highlights" class="nav-link">Gallery</a></li>
<li id="menu-item-175955" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-175955 nav-item"><a href="<?= $homePrefix ?>#featured-offer" class="nav-link">Offers</a></li>
<li id="menu-item-175956" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-175956 nav-item"><a href="<?= $homePrefix ?>#amenities" class="nav-link">Amenities</a></li>
<li id="menu-item-175965" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-175965 nav-item"><a target="_blank" rel="noopener noreferrer" href="/dependencies/external/www.google.co.in/maps/place/Address+Sky+View/@25.2015914,55.2683494,17z/data=!3m1!4b1!4m8!3m7!1s0x3e5f43859586ed13:0xe1103d783cf1f2f1!5m2!4m1!1i2!8m2!3d25.2015914!4d55.2705381" class="nav-link">Location</a></li>
<li id="menu-item-175968" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-175968 nav-item"><a href="<?= $homePrefix ?>#contact-details" class="nav-link">360 Tour</a></li>
            </ul>
          </div>
          
          <ul class="navigation-ul-area">       
            <li id="work-area-dropss" class="more-option-menu position-relative menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown nav-item">
              <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle nav-link">More…</a>
              <ul id="hotelList__dropdown" class="dropdown-menu" aria-labelledby="menu-item-dropdown-153290">
                <div class="container hotel_resorts_dropdown work-area-more-dropdown">
                </div>
              </ul>
            </li>
          </ul>

        </div>



        <div class="d-flex flex-xl-row flex-column justify-content-end right-nav-container  h-100" id="right-side-elements">
          <ul class="navbar-nav rightlinks  cntplink align-items-xl-end fit-content justify-content-  ">
            <li class="nav-item d-flex align-items-end language-selector language-individual-spacing">
              
<div class="wpml-ls-statics-shortcode_actions wpml-ls wpml-ls-legacy-dropdown-click js-wpml-ls-legacy-dropdown-click">
	<ul>

		<li class="wpml-ls-slot-shortcode_actions wpml-ls-item wpml-ls-item-en wpml-ls-current-language wpml-ls-first-item wpml-ls-item-legacy-dropdown-click">

			<a href="#" class="js-wpml-ls-item-toggle wpml-ls-item-toggle">
                                                    <img width="18" height="12" class="wpml-ls-flag" src="/dependencies/img/wp-content/plugins/sitepress-multilingual-cms/res/flags/en.svg" alt=""><span class="wpml-ls-native">EN</span></a>

			<ul class="js-wpml-ls-sub-menu wpml-ls-sub-menu">
				
					<li class="wpml-ls-slot-shortcode_actions wpml-ls-item wpml-ls-item-ar">
						<a href="/ar/hotels/address-sky-view/" class="wpml-ls-link">
                                                                <img width="18" height="12" class="wpml-ls-flag" src="/dependencies/img/wp-content/plugins/sitepress-multilingual-cms/res/flags/ar.svg" alt=""><span class="wpml-ls-native" lang="ar">AR</span></a>
					</li>

				
					<li class="wpml-ls-slot-shortcode_actions wpml-ls-item wpml-ls-item-zh-hans">
						<a href="/zh-hans/hotels/address-sky-view/" class="wpml-ls-link">
                                                                <img width="18" height="12" class="wpml-ls-flag" src="/dependencies/img/wp-content/plugins/sitepress-multilingual-cms/res/flags/zh-hans.svg" alt=""><span class="wpml-ls-native" lang="zh-hans">ZH</span></a>
					</li>

				
					<li class="wpml-ls-slot-shortcode_actions wpml-ls-item wpml-ls-item-fr">
						<a href="/fr/hotels/address-sky-view/" class="wpml-ls-link">
                                                                <img width="18" height="12" class="wpml-ls-flag" src="/dependencies/img/wp-content/plugins/sitepress-multilingual-cms/res/flags/fr.svg" alt=""><span class="wpml-ls-native" lang="fr">FR</span></a>
					</li>

				
					<li class="wpml-ls-slot-shortcode_actions wpml-ls-item wpml-ls-item-de">
						<a href="/de/hotels/address-sky-view/" class="wpml-ls-link">
                                                                <img width="18" height="12" class="wpml-ls-flag" src="/dependencies/img/wp-content/plugins/sitepress-multilingual-cms/res/flags/de.svg" alt=""><span class="wpml-ls-native" lang="de">DE</span></a>
					</li>

				
					<li class="wpml-ls-slot-shortcode_actions wpml-ls-item wpml-ls-item-ru wpml-ls-last-item">
						<a href="/ru/hotels/address-sky-view/" class="wpml-ls-link">
                                                                <img width="18" height="12" class="wpml-ls-flag" src="/dependencies/img/wp-content/plugins/sitepress-multilingual-cms/res/flags/ru.svg" alt=""><span class="wpml-ls-native" lang="ru">RU</span></a>
					</li>

							</ul>

		</li>

	</ul>
</div>
            </li>
            <!-- Boat By Address Micro-Site Changes Start -->
            <!-- 
 -->
            <!-- Boat By Address Micro-Site Changes End -->
          </ul>

        </div>
      </div>
    </div>

    
    <div class="global-home-link-dropdown-box dropdown d-none" aria-hidden="true">
      <a class="dropdown-toggle global-home-link-dropdown global-home-link /en/" id="dropdownMenuButton1" href="/en/"></a>
      <ul class="dropdown-menu d-none" aria-labelledby="dropdownMenuButton1">
        <div class="container global-home-link-dropdown-inner">
          <div class="global-home-link-dropdown-inner-box w-100">

            <button type="button" class="close" data-dismiss="modal" id="modelclosesign"><i class="fal fa-times"></i></button>
            <ul class="navbar-nav cntplink">

              <li id="menu-item-17822" class="nav-indentation-class nav-link menu-item menu-item-type-custom menu-item-object-custom menu-item-17822 nav-item"><a href="#" class="nav-link">United Arab Emirates</a></li>
<li id="menu-item-17824" class="dropdown-item nav-link hotel-nav-sub-heading menu-item menu-item-type-custom menu-item-object-custom menu-item-17824 nav-item"><a href="#" class="nav-link">Dubai</a></li>
<li id="menu-item-17834" class="dropdown-item menu-item menu-item-type-post_type menu-item-object-page menu-item-17834 nav-item"><a href="/en/resorts/address-beach-resort/" class="nav-link">Address Beach Resort</a></li>
<li id="menu-item-17826" class="dropdown-item menu-item menu-item-type-post_type menu-item-object-page menu-item-17826 nav-item"><a href="/en/hotels/address-downtown/" class="nav-link">Address Downtown</a></li>
<li id="menu-item-17838" class="dropdown-item menu-item menu-item-type-post_type menu-item-object-page menu-item-17838 nav-item"><a href="/en/hotels/address-dubai-mall/" class="nav-link">Address Dubai Mall</a></li>
<li id="menu-item-96332" class="dropdown-item menu-item menu-item-type-post_type menu-item-object-page menu-item-96332 nav-item"><a href="/en/hotels/address-creek-harbour/" class="nav-link">Address Creek Harbour</a></li>
<li id="menu-item-17828" class="dropdown-item menu-item menu-item-type-post_type menu-item-object-page menu-item-17828 nav-item"><a href="/en/hotels/address-montgomerie/" class="nav-link">Address Montgomerie</a></li>
<li id="menu-item-17836" class="dropdown-item menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-3739 current_page_item active menu-item-17836 nav-item"><a href="<?= $homePrefix ?>#page-top" class="nav-link" aria-current="page">Address Sky View</a></li>
<li id="menu-item-17843" class="dropdown-item menu-item menu-item-type-post_type menu-item-object-page menu-item-17843 nav-item"><a href="/en/hotels/palace-downtown/" class="nav-link">Palace Downtown</a></li>
<li id="menu-item-156297" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-156297 nav-item"><a href="/en/hotels/palace-dubai-creek-harbour/" class="nav-link">Palace Dubai Creek Harbour</a></li>
<li id="menu-item-19776" class="dropdown-item nav-link hotel-nav-sub-heading menu-item menu-item-type-custom menu-item-object-custom menu-item-19776 nav-item"><a href="#" class="nav-link">Fujairah</a></li>
<li id="menu-item-19777" class="dropdown-item menu-item menu-item-type-post_type menu-item-object-page menu-item-19777 nav-item"><a href="/en/resorts/address-beach-resort-fujairah/" class="nav-link">Address Beach Resort Fujairah</a></li>
<li id="menu-item-82068" class="dropdown-item menu-item menu-item-type-post_type menu-item-object-page menu-item-82068 nav-item"><a href="/en/resorts/palace-beach-resort-fujairah/" class="nav-link">Palace Beach Resort Fujairah</a></li>
<li id="menu-item-93194" class="nav-indentation-class nav-link menu-item menu-item-type-custom menu-item-object-custom menu-item-93194 nav-item"><a href="#" class="nav-link">Bahrain</a></li>
<li id="menu-item-93195" class="dropdown-item menu-item menu-item-type-custom menu-item-object-custom menu-item-93195 nav-item"><a href="/en/resorts/address-beach-resort-bahrain/" class="nav-link">Address Beach Resort Bahrain</a></li>
<li id="menu-item-17844" class="dropdown-item nav-link hotel-nav-sub-heading menu-bottom-border menu-item menu-item-type-custom menu-item-object-custom menu-item-17844 nav-item"><a href="#" class="nav-link">Egypt</a></li>
<li id="menu-item-17842" class="dropdown-item menu-item menu-item-type-post_type menu-item-object-page menu-item-17842 nav-item"><a href="/en/resorts/address-marassi-golf-resort/" class="nav-link">Address Marassi Golf Resort</a></li>
<li id="menu-item-157066" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-157066 nav-item"><a href="/en/resorts/address-beach-resort-marassi/" class="nav-link">Address Beach Resort Marassi</a></li>
<li id="menu-item-118756" class="dropdown-item nav-link hotel-nav-sub-heading menu-bottom-border menu-item menu-item-type-custom menu-item-object-custom menu-item-118756 nav-item"><a href="#" class="nav-link">Saudi Arabia</a></li>
<li id="menu-item-118757" class="dropdown-item menu-item menu-item-type-post_type menu-item-object-page menu-item-118757 nav-item"><a href="/en/hotels/address-jabal-omar-makkah/" class="nav-link">Address Jabal Omar Makkah</a></li>
<li id="menu-item-22451" class="nav-indentation-class nav-link menu-item menu-item-type-custom menu-item-object-custom menu-item-22451 nav-item"><a href="#" class="nav-link">Turkey</a></li>
<li id="menu-item-22452" class="dropdown-item menu-item menu-item-type-post_type menu-item-object-page menu-item-22452 nav-item"><a href="/en/hotels/address-istanbul/" class="nav-link">Address Istanbul</a></li>

            </ul>
          </div>
        </div>
      </ul>
    </div>
  </nav>

</header>