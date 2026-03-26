function countryFlagsDropdown() {
  // Country Flags Dropdown :: START
  /*const BASE_URL = $('base[ href ]').attr('href');*/
  const BASE_URL = "";
  const $_SELECT_PICKER = $(".my-image-selectpicker");
  // $_SELECT_PICKER.find('option').each((idx, elem) => {
  $_SELECT_PICKER.find("option").each(function (idx, elem) {
    const $OPTION = $(elem);
    // console.log('elem in countryFlag',elem);
    const IMAGE_URL = $OPTION.attr("data-thumbnail");
    //  const VAL = $OPTION.val();
    //	const VAL =  $OPTION.attr('data-content');
    if (IMAGE_URL) {
      $OPTION.attr(
        "data-content",
        "<img width='35' class='pr-1' src='%i'/> %s"
          .replace(/%i/, BASE_URL + IMAGE_URL)
          .replace(/%s/, $OPTION.text())
      );

      //  $OPTION.attr('data-content', "<img width='33' src='%i'/> %s".replace(/%i/, BASE_URL + IMAGE_URL).replace(/%s/, $OPTION.text()));
      // $OPTION.attr('data-title', "<img width='33' src='%i'/> %s".replace(/%i/, BASE_URL + IMAGE_URL).replace(/%s/, VAL));
    }
  });

  return $_SELECT_PICKER.selectpicker();
  // Country Flags Dropdown :: END
}

function countryFlagsDropdownTwo() {
  // Country Flags Dropdown :: START
  /*const BASE_URL = $('base[ href ]').attr('href');*/
  const BASE_URL_TWO = "";
  const $_SELECT_PICKER_TWO = $(".my-image-selectpicker-two");
  // $_SELECT_PICKER_TWO.find('option').each((idx, elem) => {
  $_SELECT_PICKER_TWO.find("option").each(function (idx, elem) {
    const $OPTION_TWO = $(elem);
    const IMAGE_URL_TWO = $OPTION_TWO.attr("data-thumbnail");
    //  const VAL = $OPTION.val();
    //	const VAL =  $OPTION.attr('data-content');
    if (IMAGE_URL_TWO) {
      $OPTION_TWO.attr(
        "data-content",
        "<img width='35' class='pr-1' src='%i'/> %s"
          .replace(/%i/, BASE_URL_TWO + IMAGE_URL_TWO)
          .replace(/%s/, $OPTION_TWO.text())
      );

      //  $OPTION.attr('data-content', "<img width='33' src='%i'/> %s".replace(/%i/, BASE_URL + IMAGE_URL).replace(/%s/, $OPTION.text()));
      // $OPTION.attr('data-title', "<img width='33' src='%i'/> %s".replace(/%i/, BASE_URL + IMAGE_URL).replace(/%s/, VAL));
    }
  });

  return $_SELECT_PICKER_TWO.selectpicker();
  // Country Flags Dropdown :: END
}

$(document).ready(function () {
  countryFlagsDropdown();
  var selected = $(".flagdrop option:selected").val();
  var selected2 = $(".flagdrop option:selected").attr("data-thumbnail");

  if (selected2)
    $(".flagdrop .filter-option-inner-inner").html(
      '<img width="35" class="pr-1" src="' + selected2 + '"/>'
    );

  $(".flagdrop").on("changed.bs.select", function () {
    // console.log(" change event for flag dropdown");
    var addy = $(".flagdrop .filter-option-inner-inner").html();
    // console.log("addy", addy);
    var newval = addy.substr(0, addy.indexOf("("));
    // console.log(newval);
    // console.log(newval != "");
    if (newval != "") {
      // console.log("inside if");
      $(".flagdrop .filter-option-inner-inner").html(newval);
    } else {
      // console.log("inside else");
      $(".flagdrop .filter-option-inner-inner").html(addy);
    }
  });

  var selected = $("#forgot_phonecode option:selected").val();

  var selected2 = $("#forgot_phonecode option:selected").attr("data-thumbnail");

  if (selected2 || selected)
    $(".flagdrop_two .filter-option-inner-inner").html(
      '<img width="35" class="pr-1" src="' + selected2 + '"/>+' + selected
    );

  $(".flagdrop_two").on("changed.bs.select", function () {
    var addy = $(".flagdrop_two .filter-option-inner-inner").html();

    var newval = addy.substr(0, addy.indexOf("("));

    if (newval != "") {
      $(".flagdrop_two .filter-option-inner-inner").html(newval);
    } else {
      $(".flagdrop_two .filter-option-inner-inner").html(addy);
    }
  });

  //! Animations for Homepage
  function isIE() {
    ua = navigator.userAgent;
    /* MSIE used to detect old browsers and Trident used to newer ones*/
    var is_ie = ua.indexOf("MSIE ") > -1 || ua.indexOf("Trident/") > -1;

    return is_ie;
  }
  if (isIE()) {
    // alert('It is InternetExplorer');
    $(".show-on-scroll").addClass("is-visible");
  } else { }
  var scroll =
    window.requestAnimationFrame ||
    // IE Fallback
    function (callback) {
      window.setTimeout(callback, 1000 / 60);
    };
  var elementsToShow = document.querySelectorAll(".show-on-scroll");

  function loop() {
    Array.prototype.forEach.call(elementsToShow, function (element) {
      if (isElementInViewport(element)) {
        element.classList.add("is-visible");
      } else {
        element.classList.remove("is-visible");
      }
    });

    scroll(loop);
  }

  // Call the loop for the first time
  loop();

  function isElementInViewport(el) {
    // special bonus for those using jQuery
    if (typeof jQuery === "function" && el instanceof jQuery) {
      el = el[0];
    }
    var rect = el.getBoundingClientRect();
    return (
      (rect.top <= 0 && rect.bottom >= 0) ||
      (rect.bottom >=
        (window.innerHeight || document.documentElement.clientHeight) &&
        rect.top <=
        (window.innerHeight || document.documentElement.clientHeight)) ||
      (rect.top >= 0 &&
        rect.bottom <=
        (window.innerHeight || document.documentElement.clientHeight))
    );
  }

  // code to hide the language switcher toogle on hover
  $(".wpml-ls-sub-menu").mouseleave(function () {
    $(this).attr("style", "visibility: hidden");
  });
});

function loadgtm(w, d, s, l, i) {
  w[l] = w[l] || [];
  w[l].push({
    "gtm.start": new Date().getTime(),
    event: "gtm.js",
  });
  var f = d.getElementsByTagName(s)[0],
    j = d.createElement(s),
    dl = l != "dataLayer" ? "&l=" + l : "";
  j.async = true;
  j.defer = true;
  j.src = "//www.googletagmanager.com/gtm.js?id=" + i + dl;
  f.parentNode.insertBefore(j, f);
}

function loadgtm_noscript(gtm_key) {
  $(document.body).prepend('<noscript class="gtm-noscript"></noscript>');
  $(".gtm-noscript").html(
    `<iframe src="https://www.googletagmanager.com/ns.html?id=${gtm_key}" height="0" width="0" style="display:none;visibility:hidden"></iframe>`
  );
}

//Akash New GTM Integration Start
function initGTM() {
  // if (window.gtmDidInit) {
  //   return false;
  // }
  // window.gtmDidInit = true; // flag to ensure script does not get added to DOM more than once.
  //get GTM key
  const gtm_key = site_constants["gtm_key"];
  //load GTM script and noscript tags
  if (gtm_key) {
    loadgtm(window, document, 'script', 'dataLayer', gtm_key);
    loadgtm_noscript(gtm_key);
  }
}

// function initGTMOnEvent(event) {
initGTM();
//   event.currentTarget.removeEventListener('scroll', initGTMOnEvent);
//   event.currentTarget.removeEventListener('mousemove', initGTMOnEvent);
//   event.currentTarget.removeEventListener('touchstart', initGTMOnEvent);
//   event.currentTarget.removeEventListener('load', initGTMOnEvent);
// }

// if (site_constants["gtm_key"]) {
//   document.addEventListener('scroll', initGTMOnEvent);
//   document.addEventListener('mousemove', initGTMOnEvent);
//   document.addEventListener('touchstart', initGTMOnEvent);
//   document.addEventListener('load', initGTMOnEvent);
// }
//Akash New GTM Integration End

$(window).on("load", function () {
  // countryFlagsDropdown();
  countryFlagsDropdownTwo();
  setTimeout(() => {
    selectpickerRender();
  }, 1500);
});

function blockSpecialChar(e) {
  var k;
  document.all ? (k = e.keyCode) : (k = e.which);
  return (
    (k > 64 && k < 91) ||
    (k > 96 && k < 123) ||
    k == 8 ||
    k == 32 ||
    (k >= 48 && k <= 57) ||
    k == 46
  );
}

async function selectpickerRender() {
  (
    await
      function () {
        $(".selectpicker").selectpicker("render");
      }
  )();
  var regex = /([/+])\d*/g;
  if (templateName == "templates/sign-in.php") {
    a = regex.exec($(".field_country-code .filter-option-inner-inner").text());

    $(".field_country-code .filter-option-inner-inner")
      .contents()
      .last()[0].textContent = a[0];
  }
  if (templateName == "templates/booking-user-info.php" || "templates/booking-user-info-multiroom.php") {
    b = regex.exec($("#country_select .filter-option-inner-inner").text());

    // If condition fix to resolve the TypeError Variable is null error on console.
    if (typeof b !== 'undefined' && b) {
      $("#country_select .filter-option-inner-inner")
        .contents()
        .last()[0].textContent = b[0];
    }
  }
  if (templateName == "templates/sign-up.php") {
    c = regex.exec($("#field_country_code .filter-option-inner-inner").text());
    // console.log(c);
    $("#field_country_code .filter-option-inner-inner")
      .contents()
      .last()[0].textContent = c[0];
  }
}
$(".forgot-password-link").click(function (e) {
  var regex = /([/+])\d*/g;
  d = regex.exec(
    $(".field_country_code-forget_pwd .filter-option-inner-inner").text()
  );
  $(".field_country_code-forget_pwd .filter-option-inner-inner")
    .contents()
    .last()[0].textContent = d[0];
  // console.log(d, "----------d");
});


//multiroom changes starts
async function setTransientData(adultChildArray) {
  return new Promise(function (resolve, reject) {
    $.ajax({
      type: "POST",
      url: "/wp-json/reservation/v1/setTransientData/info",
      data: { "cookieData": adultChildArray },
      success: function (data) {
        console.log(data);
        resolve(data) // Resolve promise and go to then()
      },
      error: function (data) {
        // console.log(data);
        reject(err) // Reject the promise and go to catch()
      }
    });
  });
}

async function getTransientData(cookieinfo) {
  return new Promise(function (resolve, reject) {
    $.ajax({
      type: "GET",
      url: "/wp-json/reservation/v1/getTransientData/info?cookieinfo=" + cookieinfo,
      success: function (data) {
        // console.log("inside getTransient windows on load");
        // console.log(data);
        // return data;
        resolve(data) // Resolve promise and go to then()
      },
      error: function (data) {
        // return data;
        reject(err) // Reject the promise and go to catch()
      }
    });
  });
}

// changing the icon of dropdown up-down
$(".card-link").on("click", function () {
  $("i", this).toggleClass('fa-chevron-down fa-chevron-up');
});

//multiroom changes ends
