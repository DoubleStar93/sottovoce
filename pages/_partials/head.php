<head>
<script>
(function () {
  function isAllowed(url) {
    try {
      var u = new URL(url, window.location.origin);
      return u.origin === window.location.origin;
    } catch (e) {
      return true;
    }
  }

  // WPML legacy global used by inline theme scripts.
  if (typeof window.ICL === 'undefined') {
    window.ICL = 'en';
  }
  if (typeof window.ICL_LANGUAGE_CODE === 'undefined') {
    window.ICL_LANGUAGE_CODE = window.ICL;
  }
  if (typeof window.google === 'undefined') {
    window.google = {
      maps: {
        event: { addDomListener: function () {} },
        LatLng: function () {},
        MapTypeId: { ROADMAP: 'roadmap' },
        Map: function () {},
        MarkerImage: function () {},
        Size: function () {},
        Point: function () {},
        Marker: function () {},
        InfoWindow: function () {}
      }
    };
  }

  var originalFetch = window.fetch;
  if (typeof originalFetch === 'function') {
    window.fetch = function (input, init) {
      var url = typeof input === 'string' ? input : (input && input.url ? input.url : '');
      if (url && !isAllowed(url)) {
        return Promise.resolve(new Response('', { status: 204, statusText: 'No Content' }));
      }
      return originalFetch.apply(this, arguments);
    };
  }

  var originalOpen = XMLHttpRequest.prototype.open;
  var originalSend = XMLHttpRequest.prototype.send;
  XMLHttpRequest.prototype.open = function (method, url) {
    if (url && !isAllowed(url)) {
      this.__blockedExternal = true;
      this.__blockedExternalUrl = url;
      return originalOpen.call(this, method || 'GET', '/');
    }
    this.__blockedExternal = false;
    return originalOpen.apply(this, arguments);
  };
  XMLHttpRequest.prototype.send = function () {
    if (this.__blockedExternal) {
      return;
    }
    return originalSend.apply(this, arguments);
  };

  if (typeof navigator.sendBeacon === 'function') {
    var originalBeacon = navigator.sendBeacon.bind(navigator);
    navigator.sendBeacon = function (url, data) {
      if (url && !isAllowed(url)) {
        return false;
      }
      return originalBeacon(url, data);
    };
  }

  if (typeof window.WebSocket === 'function') {
    var OriginalWebSocket = window.WebSocket;
    window.WebSocket = function (url, protocols) {
      if (url && !isAllowed(url)) {
        return {
          close: function () {},
          send: function () {},
          readyState: 3
        };
      }
      return new OriginalWebSocket(url, protocols);
    };
  }

  if (typeof window.EventSource === 'function') {
    var OriginalEventSource = window.EventSource;
    window.EventSource = function (url, config) {
      if (url && !isAllowed(url)) {
        return {
          close: function () {},
          readyState: 2
        };
      }
      return new OriginalEventSource(url, config);
    };
  }

  // Restore legacy entrance animations without external dependencies.
  function animateLegacySections() {
    var scrollItems = Array.prototype.slice.call(document.querySelectorAll('.show-on-scroll'));
    var aosItems = Array.prototype.slice.call(document.querySelectorAll('[data-aos]'));
    if (scrollItems.length === 0 && aosItems.length === 0) {
      return;
    }

    if (!document.getElementById('legacy-aos-fallback-style')) {
      var style = document.createElement('style');
      style.id = 'legacy-aos-fallback-style';
      style.textContent =
        '[data-aos]{opacity:0;transition-property:transform,opacity;transition-duration:.7s;transition-timing-function:ease;will-change:transform,opacity;}' +
        '[data-aos="fade-left"]{transform:translate3d(32px,0,0);}' +
        '[data-aos="fade-right"]{transform:translate3d(-32px,0,0);}' +
        '[data-aos="fade-up"]{transform:translate3d(0,32px,0);}' +
        '[data-aos="fade-down"]{transform:translate3d(0,-32px,0);}' +
        '[data-aos="zoom-in"]{transform:scale(.96);}' +
        '[data-aos].aos-animated{opacity:1;transform:translate3d(0,0,0) scale(1);}';
      document.head.appendChild(style);
    }

    function showNode(node, isAos) {
      if (!node) {
        return;
      }
      node.classList.add('is-visible');
      if (isAos) {
        var duration = parseInt(node.getAttribute('data-aos-duration') || '700', 10);
        if (!isNaN(duration) && duration > 0) {
          node.style.transitionDuration = duration + 'ms';
        }
        node.classList.add('aos-animated');
      }
    }

    if (typeof window.IntersectionObserver === 'function') {
      var observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            showNode(entry.target, entry.target.hasAttribute('data-aos'));
            observer.unobserve(entry.target);
          }
        });
      }, { rootMargin: '0px 0px -10% 0px', threshold: 0.08 });

      scrollItems.forEach(function (node) { observer.observe(node); });
      aosItems.forEach(function (node) { observer.observe(node); });
      return;
    }

    scrollItems.forEach(function (node) { showNode(node, false); });
    aosItems.forEach(function (node) { showNode(node, true); });
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', animateLegacySections);
  } else {
    animateLegacySections();
  }
})();
</script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="/dependencies/external/gmpg.org/xfn/11.bin">
  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="/dependencies/img/wp-content/themes/emaar-projects/img/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/dependencies/img/wp-content/themes/emaar-projects/img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/dependencies/img/wp-content/themes/emaar-projects/img/favicon/favicon-16x16.png">
  <link rel="mask-icon" href="/dependencies/img/wp-content/themes/emaar-projects/img/favicon/favicon-32x32.png">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="theme-color" content="#ffffff">
  <meta name="yandex-verification" content="4765176ea1d97e47">

  <meta name="google-site-verification" content="9ijprdUIq2E46IQpcBdOS7g8YmIA8OrGSL7eUbUeHvU">
  <link rel='dns-prefetch' href='//use.typekit.net'>
  <link rel='dns-prefetch' href='//www-addresshotels-com.azureedge.net'>
  <link href='https://www-addresshotels-com.azureedge.net' rel='preconnect'>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600&display=swap">

  
<meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1'>
<link rel="alternate" href="/index.php" hreflang="x-default">
<link rel="alternate" hreflang="en" href="/index.php">





<link rel="alternate" hreflang="x-default" href="/index.php">

	<!-- This site is optimized with the Yoast SEO plugin v22.9 - https://yoast.com/wordpress/plugins/seo/ -->
	<title>Address Sky View | Downtown Dubai | Address Hotels + Resorts</title>
	<meta name="description" content="Stay above it all at Address Sky View, a luxury hotel in Downtown Dubai with iconic infinity pool, breathtaking views of Burj Khalifa, direct access to Dubai Mall.">
	<link rel="canonical" href="/index.php">
	<meta property="og:locale" content="en_US">
	<meta property="og:type" content="article">
	<meta property="og:title" content="Address Sky View | Downtown Dubai | Address Hotels + Resorts">
	<meta property="og:description" content="Stay above it all at Address Sky View, a luxury hotel in Downtown Dubai with iconic infinity pool, breathtaking views of Burj Khalifa, direct access to Dubai Mall.">
	<meta property="og:url" content="/en/hotels/address-sky-view/">
	<meta property="og:site_name" content="Address Hotels in Dubai">
	<meta property="article:modified_time" content="2026-01-13T06:55:49+00:00">
	<meta property="og:image" content="">
	<meta property="og:image:width" content="1920">
	<meta property="og:image:height" content="1080">
	<meta property="og:image:type" content="image/jpeg">
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:label1" content="Est. reading time">
	<meta name="twitter:data1" content="1 minute">
	<script type="application/ld+json" class="yoast-schema-graph">{"@context":"https://schema.org","@graph":[{"@type":"WebPage","@id":"https://www.addresshotels.com/en/hotels/address-sky-view/","url":"https://www.addresshotels.com/en/hotels/address-sky-view/","name":"Address Sky View | Downtown Dubai | Address Hotels + Resorts","isPartOf":{"@id":"https://www.addresshotels.com/en/#website"},"primaryImageOfPage":{"@id":"https://www.addresshotels.com/en/hotels/address-sky-view/#primaryimage"},"image":{"@id":"https://www.addresshotels.com/en/hotels/address-sky-view/#primaryimage"},"thumbnailUrl":"https://www-addresshotels-com.azureedge.net/wp-content/uploads/2021/02/Address-SkyView-V1.mp4.jpg","datePublished":"2020-10-07T08:47:07+00:00","dateModified":"2026-01-13T06:55:49+00:00","description":"Stay above it all at Address Sky View, a luxury hotel in Downtown Dubai with iconic infinity pool, breathtaking views of Burj Khalifa, direct access to Dubai Mall.","inLanguage":"en","potentialAction":[{"@type":"ReadAction","target":["https://www.addresshotels.com/en/hotels/address-sky-view/"]}]},{"@type":"ImageObject","inLanguage":"en","@id":"https://www.addresshotels.com/en/hotels/address-sky-view/#primaryimage","url":"https://www-addresshotels-com.azureedge.net/wp-content/uploads/2021/02/Address-SkyView-V1.mp4.jpg","contentUrl":"https://www-addresshotels-com.azureedge.net/wp-content/uploads/2021/02/Address-SkyView-V1.mp4.jpg","width":1920,"height":1080},{"@type":"WebSite","@id":"https://www.addresshotels.com/en/#website","url":"https://www.addresshotels.com/en/","name":"Address Hotels in Dubai","description":"Book a Hotel - Address Hotels + Resorts","potentialAction":[{"@type":"SearchAction","target":{"@type":"EntryPoint","urlTemplate":"https://www.addresshotels.com/en/?s={search_term_string}"},"query-input":"required name=search_term_string"}],"inLanguage":"en"}]}</script>
	<!-- / Yoast SEO plugin. -->





<link rel='stylesheet' id='sbi_styles-css' href='/dependencies/css/wp-content/plugins/instagram-feed/css/sbi-styles.min.css?ver=6.9.1' type='text/css' media='all'>
<style id='wp-emoji-styles-inline-css' type='text/css'>

	img.wp-smiley, img.emoji {
		display: inline !important;
		border: none !important;
		box-shadow: none !important;
		height: 1em !important;
		width: 1em !important;
		margin: 0 0.07em !important;
		vertical-align: -0.1em !important;
		background: none !important;
		padding: 0 !important;
	}
</style>
<link rel='stylesheet' id='wp-block-library-css' href='/dependencies/css/wp-includes/css/dist/block-library/style.min.css?ver=6.6.4' type='text/css' media='all'>
<style id='gutenberg-blocks-homepage-banner-style-inline-css' type='text/css'>
/*!**************************************************************************************************************************************************************************************************************************************************************!*\
  !*** css ./node_modules/css-loader/dist/cjs.js??ruleSet[1].rules[4].use[1]!./node_modules/postcss-loader/dist/cjs.js??ruleSet[1].rules[4].use[2]!./node_modules/sass-loader/dist/cjs.js??ruleSet[1].rules[4].use[3]!./src/blocks/homepage-banner/index.scss ***!
  \**************************************************************************************************************************************************************************************************************************************************************/
.image-slider-container {
  height: 100vh;
}

.slider-block .carousel-indicators .active {
  background-color: white;
  /* Active indicator color */
}

#carousalHeaders .carousel-caption {
  top: auto;
  bottom: 20%;
}

.image-slider {
  height: 100%;
  -o-object-fit: cover;
     object-fit: cover;
}

@media screen and (max-width: 400px) {
  .header-banner-img-content-box .slider-header {
    font-size: 32px !important;
    line-height: 36px !important;
    letter-spacing: -1px !important;
  }
}
@media (min-width: 1025px) and (max-width: 1440px) and (max-height: 850px) {
  .header-banner-img-content-box .slider-header {
    font-size: 56px !important;
    line-height: 60px !important;
    letter-spacing: -1px !important;
  }
}
@media screen and (max-width: 600px) {
  .image-slider-container {
    height: 100vh;
  }
  .slider-description {
    font-size: 16px !important;
  }
  .slider-header {
    font-size: 48px !important;
    line-height: 48px !important;
  }
  .slider-block #carousalHeaders .carousel-caption {
    width: 96%;
  }
}
.carousel-caption {
  left: 0 !important;
  right: 0 !important;
}

@media screen and (min-width: 991px) {
  #carousalHeaders .carousel-caption {
    bottom: 30%;
  }
}
@media screen and (min-width: 1200px) {
  #carousalHeaders .carousel-caption {
    max-width: 1200px;
  }
}
@media screen and (min-width: 1250px) {
  #carousalHeaders .carousel-caption {
    padding-left: 0px;
  }
}
@media (max-width: 991px) {
  .global-home-link-dropdown-box .dropdown-menu.show {
    transform: translateX(20px);
  }
}
@media (max-width: 1198px) and (min-width: 992px) {
  .global-home-link-dropdown-box .dropdown-menu.show {
    transform: translateX(25px);
    padding: 44px 25px 35px !important;
  }
  .global-home-link-dropdown-inner {
    max-width: 1000px !important;
  }
}
@media (max-width: 1199px) and (min-width: 601px) {
  .slider-block #carousalHeaders .carousel-caption {
    width: 97%;
    max-width: unset;
  }
}
.image-slider-container {
  position: relative;
}

.image-slider-container::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-image: radial-gradient(127.1% 107.76% at 47.48% 100%, rgba(42, 60, 68, 0.00008) 0%, rgba(42, 60, 68, 0.00008) 66.59%, rgba(42, 60, 68, 0.48) 99.98%), linear-gradient(135deg, rgba(0, 0, 0, 0.7) 2.11%, rgba(37, 40, 45, 0.00007) 89.75%), linear-gradient(243.98deg, rgba(0, 0, 0, 0.00005) 19.63%, rgba(37, 40, 45, 0.5) 96.46%);
  z-index: 1;
}

.carousel-caption {
  position: relative;
  z-index: 2;
  /* To ensure the text is above the gradient */
}

.slider-block .carousel-indicators {
  padding: 5px 20px;
}

@media (max-width: 1199px) {
  .slider-block .carousel-indicators {
    bottom: 12% !important;
  }
}
.slider-block .carousel-indicators {
  position: absolute;
  display: flex;
  justify-content: center;
  margin-left: auto;
  margin-right: auto;
  list-style: none;
  width: -moz-fit-content;
  width: fit-content;
  left: 0;
  right: 0;
}

:lang(ar) .slider-block .carousel-item-next,
:lang(ar) .slider-block .carousel-item-prev,
:lang(ar) .slider-block .carousel-item.active {
  display: flex !important;
}

/*# sourceMappingURL=index.css.map*/
</style>
<style id='gutenberg-blocks-homepage-about-us-style-inline-css' type='text/css'>
.homepage-about-us-section{background-image:linear-gradient(180deg,#fff 0,hsla(0,0%,100%,0) 40%,hsla(0,0%,100%,0) 60%,#fff),url(/dependencies/img/wp-content/uploads/2021/07/Address-Artwork-123x123-1-1.png);background-repeat:repeat;height:100%}.homepage-about-us{max-width:954px!important;padding-bottom:80px!important;padding-top:20px!important}@media screen and (max-width:1025px){.homepage-about-us{padding:30px 20px 64px!important}.section-divider{padding-bottom:64px!important}}.section-divider{border-top:1px solid #b8bbbf;margin:0 auto;padding-bottom:80px;width:120px}.message-container{opacity:0;transition:opacity .3s ease-in-out}.make-full-width{opacity:1}@media screen and (max-width:375px){.changes-375{font-size:46px!important;line-break:anywhere}}@media(min-width:375px)and (max-width:600px){.font-56-mobile1{font-size:56px!important;line-height:66px!important}}

</style>
<style id='gutenberg-blocks-homepage-luxury-hotel-style-inline-css' type='text/css'>
html[dir=rtl] .individual-homepage-experience-section .overlap-btn-new-block,html[dir=rtl] .individual-homepage-experience-section .overlap-text-experience{text-align:right!important}.individual-homepage-experience-section dir[dir=rtl]{text-align:right}html[dir=rtl] .individual-homepage-experience-section .overlap-text-experience{text-align:right!important}.wp-block-create-block-homepage-luxury-hotels{background-color:#21759b;color:#fff;padding:2px}h2.display-1-72{margin-bottom:8px!important}.individual-homepage-hotel-highlights-section-luxury-hotel{padding-top:40px!important}.individual-homepage-hotel-highlights-section-luxury-hotel .img-shadow{box-shadow:0 60px 70px -50px rgba(37,40,45,.5)}.individual-homepage-hotel-highlights-section-luxury-hotel .container{padding:40px 100px!important}.luxury-hotel-section-title{margin-top:24px}@media screen and (max-width:992px){.individual-homepage-hotel-highlights-section-luxury-hotel .container{padding:40px 20px!important}}button.flickity-button.flickity-prev-next-button.next,button.flickity-button.flickity-prev-next-button.previous{visibility:hidden}.individual-homepage-hotel-highlights-section-luxury-hotel.hotel-landing-top-attractions{padding-top:25px}.individual-homepage-hotel-highlights-section-luxury-hotel.hotel-landing-top-attractions .container{padding:40px 90px 120px}.individual-homepage-hotel-highlights-section-luxury-hotel .other-cities-container{padding:40px 80px 60px}.individual-homepage-hotel-highlights-section-luxury-hotel ol.flickity-page-dots{display:none}.cta-btn{align-items:center;display:flex;flex-direction:column}.slider-img-luxury-section{height:520px;margin-left:16px;margin-right:16px;padding-bottom:100px!important;width:380px}#dine-carousel .flickity-slider>div:first-child{padding-left:100px;width:460px}#dine-carousel .flickity-slider>div:last-child{padding-right:80px;width:460px}#dine-carousel .slider-img-explore-accommodations:last-child{padding-right:80px;width:904px}#dine-carousel .slider-img-explore-accommodations:first-child{padding-left:80px;width:904px}#dine-carousel .flickity-slider>div .img-content,#dine-carousel .flickity-slider>div .img-shadow,#dine-carousel .flickity-slider>div .img-shadow img{height:100%;width:100%}.individual-homepage-hotel-highlights-section-luxury-hotel .img-content:hover .overlap-content .overlap-text-luxury-hotel h3{overflow:hidden!important;text-overflow:ellipsis!important;white-space:nowrap!important;width:240px!important}.individual-homepage-hotel-highlights-section-luxury-hotel .img-content .overlap-content .overlap-text-luxury-hotel h3{overflow:hidden!important;text-overflow:ellipsis!important;white-space:nowrap!important;width:340px!important}.individual-homepage-hotel-highlights-section-luxury-hotel .img-content:hover .overlap-content .overlap-text-luxury-hotel span{display:block!important;overflow:hidden!important;text-overflow:ellipsis!important;white-space:nowrap!important;width:240px!important}.individual-homepage-hotel-highlights-section-luxury-hotel .img-content .overlap-content .overlap-text-luxury-hotel span{display:block;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;width:340px}.img-content:hover .overlap-btn-new-block{opacity:1!important;transition:.5s ease!important}.img-content .overlap-btn-new-block{background-color:transparent!important;opacity:0!important}@media screen and (max-width:992px){.individual-homepage-hotel-highlights-section-luxury-hotel .container,.individual-homepage-hotel-highlights-section-luxury-hotel.hotel-landing-top-attractions .container{padding:40px 10px}.individual-homepage-hotel-highlights-section-luxury-hotel .overlap-content .overlap-text-luxury-hotel h3,.individual-homepage-hotel-highlights-section-luxury-hotel .overlap-content .overlap-text-luxury-hotel span{overflow:hidden;text-overflow:ellipsis;white-space:nowrap;width:220px}.individual-homepage-hotel-highlights-section-luxury-hotel .overlap-content{align-items:flex-end}}.bottom-section{padding-bottom:40px}@media(max-width:600px){.bottom-section{padding-bottom:24px}#dine-carousel .flickity-slider>div:first-child{padding-left:20px!important;width:300px}.individual-homepage-hotel-highlights-section-luxury-hotel .other-cities-container{padding:40px 10px}.slider-img-luxury-section{height:354px!important;margin-left:10px;margin-right:10px;padding-bottom:52px!important;width:305px!important}#dine-carousel .flickity-slider>div:last-child{padding-right:20px;width:300px}.individual-homepage-hotel-highlights-section-luxury-hotel .overlap-content{display:block;padding:20px}.individual-homepage-hotel-highlights-section-luxury-hotel .overlap-content .overlap-btn{margin-top:10px}.individual-homepage-hotel-highlights-section-luxury-hotel .img-content .overlap-content .overlap-text-luxury-hotel span{width:240px!important}.eyebrow-dark-luxury-hotel{letter-spacing:1px!important;line-height:16.21px!important}.luxury-hotel-section-title{margin-top:20px}.individual-homepage-hotel-highlights-section-luxury-hotel{padding-top:24px!important}}.individual-homepage-hotel-highlights-section-luxury-hotel .hotel-name{font-family:FreightSansProBook-Regular;font-size:32px!important;letter-spacing:0;line-height:28px}.individual-homepage-hotel-highlights-section-luxury-hotel p.body-2 a{font-family:FreightSansProBook;font-size:22px;font-weight:300;letter-spacing:0;line-height:34px}

</style>
<style id='gutenberg-blocks-homepage-video-section-style-inline-css' type='text/css'>
.individual-homepage-explore-videoCardss{background-image:linear-gradient(180deg,#fff 0,hsla(0,0%,100%,0) 40%,hsla(0,0%,100%,0) 60%,#fff),url(/dependencies/img/wp-content/uploads/2021/07/Address-Artwork-123x123-1-1.png);background-repeat:repeat;height:100%}.individual-homepage-explore-videoCardss .flickity-viewport{height:620px!important}.individual-homepage-explore-videoCardss .video-section-img-box{box-shadow:0 60px 70px -30px rgba(37,40,45,.5);height:520px}.individual-homepage-explore-videoCardss .video-poster{height:100%;left:0;-o-object-fit:cover;object-fit:cover;pointer-events:none;position:absolute;top:0;width:100%}@media(min-width:760px)and (max-width:1000px){.individual-homepage-explore-videoCardss .img-text-box{margin-inline-end:30px}}.individual-homepage-explore-videoCardss .video-card-section-title{margin-top:24px}.individual-homepage-explore-videoCardss #videos-carousel{margin-top:40px}.individual-homepage-explore-videoCardss .flickity-slider>div:last-child{padding-right:60px}@media screen and (max-width:767px){.individual-homepage-explore-videoCardss .slider-img-explore-videoCardss{padding-left:20px;width:305px!important}.individual-homepage-explore-videoCardss .flickity-slider>div:last-child{padding-right:20px}.individual-homepage-explore-videoCardss .video-card-top-section{padding-left:20px!important;padding-right:20px!important}.eyebrow-dark-mobile-video-section{font-size:14px!important}.individual-homepage-explore-videoCardss .video-card-section-title{margin-bottom:0!important;margin-top:20px}.individual-homepage-explore-videoCardss .flickity-viewport{height:465px!important}.individual-homepage-explore-videoCardss .video-section-img-box{height:372px}}@media screen and (min-width:1000px){.slider-img-explore-videoCardss{padding-left:60px;width:884px;width:824px}.individual-homepage-explore-videoCardss .img-content{width:824px}}

</style>
<link rel='stylesheet' id='gutenberg-blocks-homepage-experience-section-style-css' href='/dependencies/css/wp-content/themes/emaar-projects/gutenberg-blocks/build/blocks/homepage-experience-section/index.css?ver=0.1.0' type='text/css' media='all'>
<style id='gutenberg-blocks-homepage-blog-section-style-inline-css' type='text/css'>
.homepage-blog-section{background:#f2f2f2;padding:100px 80px!important}.homepage-blog-section .show-on-scroll{max-width:1364px}.homepage-blog-section .blog-cards{box-shadow:0 4px 6px 0 rgba(131,134,163,.122);height:100%;padding:20px!important}.homepage-blog-section .blog-cards:hover{box-shadow:0 20px 44px 0 rgba(131,134,163,.247)}.homepage-blog-section .blogs-section-description{max-width:954px}.card-body .icon-date{gap:8px;margin-bottom:7px}.homepage-blog-section .blog-card-section{margin-top:40px}.blog-card-section .clock-icon{background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 512 512%27%3E%3Cpath stroke=%27%23000%27 d=%27M464 256a208 208 0 1 1-416 0 208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0 256 256 0 1 0-512 0zm232-136v136c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120a24 24 0 1 0-48 0z%27/%3E%3C/svg%3E");display:inline-block;height:17px;opacity:.7;width:17px}.card-img-top{aspect-ratio:1.6!important;-o-object-fit:cover!important;object-fit:cover!important}.card-text{display:-webkit-box;width:100%;-webkit-line-clamp:4;-webkit-box-orient:vertical;margin:0;overflow:hidden;padding:0;text-overflow:ellipsis}.view-all-btn{border-color:#25282d!important;font-family:FreightSansProSemibold;font-size:17px!important;font-weight:400!important;letter-spacing:.5px;margin-top:40px;padding-bottom:12px!important;padding-top:12px!important;width:366px}.view-all-btn:hover{background-color:transparent!important;border-color:#25282d!important;color:#25282d!important}@media screen and (max-width:905px){.view-all-btn{margin-top:20px;width:320px;width:100%}.blog-card:first-child{margin-top:0!important}.blog-cards{margin-top:20px!important}.homepage-blog-section{padding-left:20px!important;padding-right:20px!important}.homepage-blog-section .blog-cards{height:auto}}.no-underline,.no-underline:hover{text-decoration:none}@media screen and (min-width:1350px){.homepage-blog-section .blog-cards{height:534px;width:380px}.homepage-blog-section .card-img-top{aspect-ratio:1.63}}@media screen and (max-width:750px){.homepage-blog-section .card-img-top{aspect-ratio:1.34}}.webclamp-card-title{display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;overflow:hidden}.line-spacing-38{line-height:38px!important;padding-bottom:5px}

</style>
<style id='gutenberg-blocks-homepage-ubyemaar-section-style-inline-css' type='text/css'>
.spa-and-wellness-section{background:#f7f8f6;margin-bottom:unset!important;padding:100px!important}.download-bbe-app-block .eyebrow-dark{margin-top:40px}.download-bbe-app-block .logo{height:64px;-o-object-fit:contain;object-fit:contain;width:64px}.download-bbe-app-block .img-shadow{margin:0 auto;max-width:409px}.download-bbe-app-block .mobile-image-container{box-shadow:0 60px 70px -30px rgba(37,40,45,.5);margin-bottom:60px;margin-top:25px}.download-bbe-app-block .inline-logo-container{gap:16px;margin-top:32px}.download-bbe-app-block .inline-logo{height:40px;-o-object-fit:contain;object-fit:contain;width:130px}@media(max-width:600px){.app-logo{height:42px;width:136px}.inline-logo-container{display:flex;flex-wrap:wrap;gap:16px!important;justify-content:center}}@media screen and (max-width:992px){.download-bbe-app-block{padding:100px 20px}.ubyemaar-title-mobile{font-size:48px!important}.download-bbe-app-block .inline-logo-container{margin-top:24px}.download-bbe-app-block .inline-logo{margin-top:16px;width:150px}.spa-and-wellness-section{height:auto!important;margin-bottom:52px!important;padding:40px 20px!important}}.download-bbe-aspect-ratio{aspect-ratio:.903}@media screen and (min-width:992px){.download-bbe-aspect-ratio{height:453px!important}}.download-bbe-app-block .mobile-image-container{height:331px;margin:30px auto;width:276px}

</style>
<link rel='stylesheet' id='gutenberg-blocks-all-hotel-list-style-css' href='/dependencies/css/wp-content/themes/emaar-projects/gutenberg-blocks/build/blocks/all-hotel-list/index.css?ver=0.1.0' type='text/css' media='all'>
<style id='create-block-global-event-details-style-inline-css' type='text/css'>
/*!*******************************************************************************************************************************************************************************************************************************************************************!*\
  !*** css ./node_modules/css-loader/dist/cjs.js??ruleSet[1].rules[4].use[1]!./node_modules/postcss-loader/dist/cjs.js??ruleSet[1].rules[4].use[2]!./node_modules/sass-loader/dist/cjs.js??ruleSet[1].rules[4].use[3]!./src/blocks/global-event-details/style.scss ***!
  \*******************************************************************************************************************************************************************************************************************************************************************/
/**
 * The following styles get applied both on the front of your site
 * and in the editor.
 *
 * Replace them with your own styles or remove the file completely.
 */
.event-details-box {
  padding: 80px;
}

.img-event {
  -o-object-fit: cover;
  object-fit: cover;
  overflow: hidden;
  height: 290px;
  width: 100%;
  box-shadow: 0 60px 70px -30px rgba(37, 40, 45, 0.3);
}

.address-content-box {
  padding: 0 47px;
}

.bullet-features {
  list-style: none;
  padding: 0;
}

/* .bullet-features li:not(.location-icons)::before {
    content: url(https://www-addresshotels-com.azureedge.net/wp-content/themes/emaar-projects/gutenberg-blocks/build/blocks/global-event-details//wp-content/uploads/2021/07/generic-icon.svg);
    vertical-align: middle;
    margin: 10px;
} */
.bullet-features li.location-icons a {
  font-size: 17px;
  color: #25282d !important;
}

.bullet-features li.location-icons a i {
  margin: 0 10px;
}

/*Media Queries*/
@media (max-width: 991px) {
  .event-details-box .stay-overlay {
    opacity: 1;
  }
}
@media (max-width: 600px) {
  .event-details-box {
    padding: 40px 20px;
  }
  .address-content-box {
    padding: 0;
  }
  .event-details-box .stay-overlay .primary-btn,
  .event-details-box .stay-overlay .secondary-btn {
    width: 90%;
  }
}

/*# sourceMappingURL=style-index.css.map*/
</style>
<style id='global-styles-inline-css' type='text/css'>
:root{--wp--preset--aspect-ratio--square: 1;--wp--preset--aspect-ratio--4-3: 4/3;--wp--preset--aspect-ratio--3-4: 3/4;--wp--preset--aspect-ratio--3-2: 3/2;--wp--preset--aspect-ratio--2-3: 2/3;--wp--preset--aspect-ratio--16-9: 16/9;--wp--preset--aspect-ratio--9-16: 9/16;--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);}:where(.is-layout-flex){gap: 0.5em;}:where(.is-layout-grid){gap: 0.5em;}body .is-layout-flex{display: flex;}.is-layout-flex{flex-wrap: wrap;align-items: center;}.is-layout-flex > :is(*, div){margin: 0;}body .is-layout-grid{display: grid;}.is-layout-grid > :is(*, div){margin: 0;}:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}
:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}
:root :where(.wp-block-pullquote){font-size: 1.5em;line-height: 1.6;}
</style>
<link rel='stylesheet' id='wpml-blocks-css' href='/dependencies/css/wp-content/plugins/sitepress-multilingual-cms/dist/css/blocks/styles.css?ver=4.6.13' type='text/css' media='all'>
<link rel='stylesheet' id='wpml-legacy-dropdown-click-0-css' href='/dependencies/css/wp-content/plugins/sitepress-multilingual-cms/templates/language-switchers/legacy-dropdown-click/style.min.css?ver=1' type='text/css' media='all'>
<style id='wpml-legacy-dropdown-click-0-inline-css' type='text/css'>
.wpml-ls-statics-shortcode_actions .wpml-ls-current-language > a {color:#ffffff;}
</style>
<link rel='stylesheet' id='bootscore-style-css' href='/dependencies/css/wp-content/themes/emaar-projects/style.css?ver=6.6.4' type='text/css' media='all'>
<link rel='stylesheet' id='all-css' href='/dependencies/css/wp-content/themes/emaar-projects/css/all.css?ver=6.6.4' type='text/css' media='all'>
<link rel='stylesheet' id='bootstrap-css' href='/dependencies/css/wp-content/themes/emaar-projects/css/lib/bootstrap.min.css?ver=6.6.4' type='text/css' media='all'>
<link rel='stylesheet' id='normalize-css' href='/dependencies/css/wp-content/themes/emaar-projects/css/normalize.css?ver=6.6.4' type='text/css' media='all'>
<link rel='stylesheet' id='fontawesome-css' href='/dependencies/css/wp-content/themes/emaar-projects/css/lib/fontawesome.min.css?ver=1707315139' type='text/css' media='all'>
<link rel='stylesheet' id='bootstrap-select-css' href='/dependencies/css/wp-content/themes/emaar-projects/vendor/css/bootstrap-select.min.css?ver=1.13.0' type='text/css' media='all'>
<link rel='stylesheet' id='typography-art-board-css' href='/dependencies/css/wp-content/themes/emaar-projects/css/dynamic-css/dynamic-typography.css?ver=6.6.4' type='text/css' media='all'>
<link rel='stylesheet' id='dynamic-custom-colors-css' href='/dependencies/css/wp-content/themes/emaar-projects/css/dynamic-css/dynamic-custom-colors.css?ver=6.6.4' type='text/css' media='all'>
<link rel='stylesheet' id='dynamic-font-faces-css' href='/dependencies/css/wp-content/themes/emaar-projects/css/dynamic-css/dynamic-font-faces.css?ver=6.6.4' type='text/css' media='all'>

<link rel='stylesheet' id='global_styles-css' href='/dependencies/css/wp-content/themes/emaar-projects/css/lib/global_styles.css?ver=1716547034' type='text/css' media='all'>
<link rel='stylesheet' id='navbar-css-css' href='/dependencies/css/wp-content/themes/emaar-projects/template-parts/navbars/css/navbar.css?ver=1766397437' type='text/css' media='all'>
<link rel='stylesheet' id='navbar-individual-hotels-css-css' href='/dependencies/css/wp-content/themes/emaar-projects/template-parts/navbars/css/navbar-individual-hotels.css?ver=1733217111' type='text/css' media='all'>
<link rel='stylesheet' id='global-dynamic-blocks-common-css' href='/dependencies/css/wp-content/themes/emaar-projects/template-parts/dynamic-blocks/assets/css/global_dynamic_blocks_common.css?ver=1737511377' type='text/css' media='all'>
<style id='rocket-lazyload-inline-css' type='text/css'>
.rll-youtube-player{position:relative;padding-bottom:56.23%;height:0;overflow:hidden;max-width:100%;}.rll-youtube-player:focus-within{outline: 2px solid currentColor;outline-offset: 5px;}.rll-youtube-player iframe{position:absolute;top:0;left:0;width:100%;height:100%;z-index:100;background:0 0}.rll-youtube-player img{bottom:0;display:block;left:0;margin:auto;max-width:100%;width:100%;position:absolute;right:0;top:0;border:none;height:auto;-webkit-transition:.4s all;-moz-transition:.4s all;transition:.4s all}.rll-youtube-player img:hover{-webkit-filter:brightness(75%)}.rll-youtube-player .play{height:100%;width:100%;left:0;top:0;position:absolute;background:url(/dependencies/img/wp-content/plugins/wp-rocket/assets/img/youtube.png) no-repeat center;background-color: transparent !important;cursor:pointer;border:none;}
</style>
<script type="text/javascript" src="/dependencies/js/wp-includes/js/dist/vendor/react.min.js?ver=18.3.1" id="react-js"></script>
<script type="text/javascript" src="/dependencies/js/wp-includes/js/dist/vendor/react-dom.min.js?ver=18.3.1" id="react-dom-js"></script>






<script type="text/javascript" src="/dependencies/js/wp-content/themes/emaar-projects/gutenberg-blocks/build/blocks/homepage-video-section/index-render.js?ver=31d6cfe0d16ae931b73c" id="gutenberg-blocks-homepage-video-section-script-js"></script>
<script type="text/javascript" src="/dependencies/js/wp-content/plugins/sitepress-multilingual-cms/templates/language-switchers/legacy-dropdown-click/script.min.js?ver=1" id="wpml-legacy-dropdown-click-0-js"></script>
<script type="text/javascript" src="/dependencies/js/wp-content/themes/emaar-projects/js/lib/jquery.min.js?ver=3.6.0" id="jquery-js"></script>
<meta name="generator" content="WPML ver:4.6.13 stt:5,59,1,4,3,45,53;">
<link rel="icon" href="/dependencies/img/wp-content/uploads/2020/06/address-favicon-dark.jpg.webp" sizes="32x32">
<link rel="icon" href="/dependencies/img/wp-content/uploads/2020/06/address-favicon-dark.jpg.webp" sizes="192x192">
<link rel="apple-touch-icon" href="/dependencies/img/wp-content/uploads/2020/06/address-favicon-dark.jpg.webp">
<meta name="msapplication-TileImage" content="">
		<style type="text/css" id="wp-custom-css">
			/* Start Page Infinity Pool */
.page-id-190574 .individual-homepage-featured-offer:nth-child(2n+1) .row {
    flex-direction: row-reverse;
}

.page-id-197302 .individual-homepage-featured-offer:nth-child(2n+1) .row {
    flex-direction: row-reverse;
}
.page-id-199346 .individual-homepage-featured-offer:nth-child(2n+1) .row {
    flex-direction: row-reverse;
}
.page-id-190574 .display-2-48{
	display: none;
}
/* End Page Infinity Pool */
/*  Start Rooms and clubs*/
.page-id-190552 .individual-homepage-explore-accommodations{
	background-color: #f7f8f6;
}
.page-id-190552 .hotel-list-main-container{
	padding-top:0px;
}
.page-id-190552 #wellness-vid {
  object-fit: cover;
}
.page-id-190574 .header-banner-img-container.header-2 {
    height: 664px;
    min-height: auto;
}

.page-id-192005 .header-banner-img-container {
  height: 100px;

	    background-image: linear-gradient(-105deg, rgba(37, 40, 45, 0) 18%, #00000000 104%), radial-gradient(circle at 53% 100%, rgba(42, 60, 68, 0), rgba(42, 60, 68, 0) 53%, rgb(42 60 68 / 0%) 79%), url(/dependencies/img/wp-content/uploads/2025/06/Banner.png);
}
}
.page-id-192881 .individual-homepage-featured-offer:nth-child(odd) .row {
  flex-direction: row;
}

.page-id-192881 .individual-homepage-featured-offer:nth-child(even) .row {
  flex-direction: row-reverse;
}
.page-id-192881 .header-banner-img-container.header-2 {
  bottom: -61px;
  position: relative;
}

.page-id-4490 
.content-box {
    text-align: left !important;
}

.page-id-4490 .container.individual-homepage-featured-offer .row.g-0.align-items-center.text-center.justify-content-between {
    flex-direction: row-reverse;
}
.page-id-4490 .container.individual-homepage-featured-offer:nth-of-type(even) 
.row.g-0.align-items-center.text-center.justify-content-between {
    flex-direction: row;
}
.page-id-4490 .container.individual-homepage-featured-offer:nth-of-type(even) .inline-left {
    padding-left: 0;
    padding-right: 60px;
}
.page-id-4490 .container.individual-homepage-featured-offer:nth-of-type(odd) .inline-left {
    padding-right: 0;
    padding-left: 60px;
}









		</style>
		<noscript><style id="rocket-lazyload-nojs-css">.rll-youtube-player, [data-lazy-src]{display:none !important;}</style></noscript>  
  
  <!-- <link href="/dependencies/external/fonts.googleapis.com/css2-family-Lato-wght-300-400-display-swap.bin" rel="stylesheet">  -->
<link rel="stylesheet" href="/css/sottovoce-luxury-shell.css" type="text/css" media="all">
<meta name="generator" content="WP Rocket 3.17.3.1" data-wpr-features="wpr_lazyload_iframes wpr_image_dimensions wpr_cache_webp wpr_cdn wpr_desktop wpr_dns_prefetch"></head>