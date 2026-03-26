var svgBlack =
  '<svg class="button-loader" style="display: none;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="200px" height="200px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid"><circle cx="50" cy="50" fill="none" stroke="#212529" stroke-width="10" r="35" stroke-dasharray="164.93361431346415 56.97787143782138" transform="rotate(132.222 50 50)"><animateTransform attributeName="transform" type="rotate" repeatCount="indefinite" dur="1s" values="0 50 50;360 50 50" keyTimes="0;1"></animateTransform></circle></svg>';

// Akash Optimizaiton Change - Load QuickText on USer Interaction - start

function checkUserAuthentication() {
  if (window.checkUserAuthDidInit) {
    return false;
  }
  window.checkUserAuthDidInit = true;

  var page_language = window.location.pathname.split("/").filter(Boolean)[0];
  window.dataLayer = window.dataLayer || [];
  $loginButton = $(".nav-link.login");
  $loginMenu = $(".login.dropdown-menu");
  $.ajax({
    type: "POST",
    url: "/wp-json/login/v1/user/authenticate",
    success: function (data) {
      switch (data["code"]) {
        case "success":
          if ((userDetails = data["data"]["details"])) {
            window.dataLayer.push({ loggedIn: "yes" });
            console.log(userDetails);
            $loginButton.html('<i class="fas fa-user-circle"></i>&nbsp;' + userDetails["FirstName"]);
            $loginMenu.find(".full_name").html(userDetails["FirstName"] + " " + userDetails["LastName"]);
            $loginMenu.find(".tier_name").html(userDetails["CardDetail"]["TierName"] + " " + "Tier");
            $loginMenu.find(".CurrentPoints").html(parseInt(userDetails["CardDetail"]["CurrentPoints"]));
            $loginMenu.find(".CurrentBalance").html(userDetails["CardDetail"]["CurrentBalance"]);
            $("body:not(.page-template-booking-user-info) .nav-link.login.disabled").removeClass("disabled");
            if ($(".login-nav-item").length) $(".login-nav-item").addClass("logged_in");
            if ($(".book_for_someone_else_row").length) $(".book_for_someone_else_row").show();
            break;
          }
        case "server_response":
          var base_url = window.location;
          if (base_url.href.includes("/booking-information/") || base_url.href.includes("add-ons") || base_url.href.includes("find/rooms")) {

            //   console.log(form_data["cookieinfo"]);
            //   redirectarray = { redirect_uri: base_url, cookieinfo: form_data["cookieinfo"] };
            // } else if (base_url.href.includes("find/rooms")) {
            if (cookieinfo)

              redirectarray = { redirect_uri: base_url, cookieinfo: cookieinfo };
          } else {
            redirectarray = { redirect_uri: base_url };
          }

          // console.log(redirectarray,'1');
          url =
            "https://accounts.emaar.com/" +
            ICL +
            "/user/login?next=/oauth/authorize?client_id=" +
            SSO_CLIENT_ID +
            "&response_type=code&redirect_uri=" +
            SSO_REDIRECT_URI +
            "&state=" +
            btoa(JSON.stringify(redirectarray));
          $loginButton.attr("href", url).removeAttr("data-toggle").removeClass("disabled");
          window.dataLayer.push({ loggedIn: "no" });
          if ($(".confirmation-sign-in-link").length) $(".confirmation-sign-in-link").removeClass("d-none");
          break;

        default:
          var base_url = window.location;
          redirectarray = { redirect_uri: base_url };

          url =
            "https://accounts.emaar.com/user/login?next=/oauth/authorize?client_id=" +
            SSO_CLIENT_ID +
            "&response_type=code&redirect_uri=" +
            SSO_REDIRECT_URI +
            "&state=" +
            btoa(JSON.stringify(redirectarray));

          window.dataLayer.push({ loggedIn: "no" });
          if ($(".confirmation-sign-in-link").length) $(".confirmation-sign-in-link").removeClass("d-none");
          break;
      }
    },
  });
}

function checkUserAuthenticationOnEvent(event) {
  checkUserAuthentication();
  event.currentTarget.removeEventListener(event.type, checkUserAuthenticationOnEvent);
}

document.addEventListener("scroll", checkUserAuthenticationOnEvent);
document.addEventListener("mousemove", checkUserAuthenticationOnEvent);
document.addEventListener("touchstart", checkUserAuthenticationOnEvent);

// Akash Optimizaiton Change - Load QuickText on USer Interaction - end

// $(document).on("click", "#sign_out_link", function(event) {
//     event.stopPropagation();
//     $(this).attr("disabled", "true");
//     if ( !( $(this).find('.button-loader').length ) )
//         $(this).prepend(svgBlack);
//     $(this).find('.button-loader').css("display", "inline-block");
//     $.ajax({
//         type: "POST",
//         url: "/wp-json/login/v1/member/logout",
//         success: function (data) {
//             switch (data["code"]) {
//                 case "success":
//                     $(this).removeAttr("disabled").find('.button-loader').css("display", "none");
//                     location.reload();
//                     break;
//                 default:
//                     $('#loginMenuButton').dropdown('toggle');
//                     // console.log(data)
//                     break;
//             }
//         },
//         error: function (data) {
//             $(this).html("Unknown Error!").removeAttr("disabled").find('.button-loader').css("display", "none");
//             $('#loginMenuButton').dropdown('toggle');
//             // console.log(data);
//         }
//     });
// });

//this code is addded to show the popup when user tries to sign-out inbetween the journey - JAYANT
$(document).ready(function () {
  const url = new URL(window.location.href);
  var adultChildArray = [];
  if (url.pathname.includes("/booking-information/") || url.pathname.includes("add-ons") || url.pathname.includes("find/rooms")) {
    var cookiedata = "";
    if (url.pathname.includes("find/rooms")) {
      cookiedata = cookieinfo;
    } else if ((url.pathname.includes("/booking-information/") || url.pathname.includes("add-ons")) && form_data && form_data["cookieinfo"]) {
      cookiedata = form_data["cookieinfo"];
    }
    getTransientData(cookiedata).then(function (data) {
      let is_ube_offer_flag = $("#ube_members_only").val();
      adult = 0;
      child = 0;
      for (i = 0; i < data.length; i++) {
        adult += parseInt(data[i]["adult"]);
        child += parseInt(data[i]["child"]);
      }

      if (data[0]["cid"] != undefined && data[0]["cod"] != undefined) {
        if (is_ube_offer_flag == "yes") {
          console.log("ube flag offers");
          urlParams =
            "id=" +
            data[0]["id"] +
            "&hotelname=" +
            encodeURIComponent(data[0]["hotelname"]) +
            "&cid=" +
            data[0]["cid"] +
            "&cod=" +
            data[0]["cod"] +
            "&rooms=" +
            data.length +
            "&adult=" +
            adult +
            "&child=" +
            child +
            "&type=" +
            data[0]["type"] +
            "&code=" +
            data[0]["code"] +
            "&bfse=" +
            data[0]["booking_for_someone_else"] +
            "&iata=" +
            data[0]["iata"] +
            "&rateplancode=" +
            "" +
            "&roomtypeid=" +
            "" +
            "&prodid=" +
            "" +
            "&room_currency_code=" +
            "" +
            "&rc=yes" + '&info=' + cookiedata;
          referringPath = "/" + ICL + "/find/rooms?" + urlParams;
        } else {
          console.log("not a ube flag offer");
          urlParams =
            "id=" +
            data[0]["id"] +
            "&hotelname=" +
            encodeURIComponent(data[0]["hotelname"]) +
            "&cid=" +
            data[0]["cid"] +
            "&cod=" +
            data[0]["cod"] +
            "&rooms=" +
            data.length +
            "&adult=" +
            adult +
            "&child=" +
            child +
            "&type=" +
            data[0]["type"] +
            "&code=" +
            data[0]["code"] +
            "&bfse=" +
            data[0]["booking_for_someone_else"] +
            "&iata=" +
            data[0]["iata"] +
            "&rateplancode=" +
            "" +
            "&roomtypeid=" +
            "" +
            "&prodid=" +
            "" +
            "&room_currency_code=" +
            "" +
            "&rc=yes" +
            "&rateplancode=" +
            data[0]["offer_rateplancode"] +
            "&offer_code=" +
            data[0]["offer_code"] +
            "&offer_name=" +
            data[0]["offer_name"] +
            "&offer_id=" +
            data[0]["offer_id"] + '&info=' + cookiedata;
          referringPath = "/" + ICL + "/find/rooms?" + urlParams;
        }
        // console.log('inside if');
        // urlParams = 'id=' + data[0]["id"] + '&hotelname=' + encodeURIComponent(data[0]["hotelname"]) + '&cid=' + data[0]["cid"] + '&cod=' + data[0]["cod"] + '&rooms=' + data.length + '&adult=' + adult + '&child=' + child + '&type=' + data[0]["type"] + '&code=' + data[0]["code"] + '&bfse=' + data[0]["booking_for_someone_else"] + '&iata=' + data[0]["iata"] + '&roomtypeid=' + '' + '&prodid=' + '' + '&room_currency_code=' + ''+'&rc=yes'+  '&rateplancode=' + data[0]['offer_rateplancode'] + '&offer_code=' + data[0]['offer_code'] + '&offer_name=' + data[0]['offer_name'] + '&offer_id=' + data[0]['offer_id'] ;
        // referringPath = "/" + ICL + "/find/rooms?" + urlParams;
      } else {
        console.log("inside else");
        referringPath = "";
      }

      //update transient data

      data.forEach((element) => {
        adult = element["adult"];
        child = element["child"];
        adultChildArray.push({ id: element["id"], adult: adult, child: child });
      });
    });
  } else {
    referringPath = "";
  }

  $(document).on("click", "#sign_out_link", function (event) {
    // console.log(referringPath);
    // console.log(adultChildArray);
    event.stopPropagation();
    $(this).attr("disabled", "true");
    if (!$(this).find(".button-loader").length) $(this).prepend(svgBlack);
    $(this).find(".button-loader").css("display", "inline-block");
    $.ajax({
      type: "POST",
      url: "/wp-json/login/v1/member/logout",
      success: function (data) {
        switch (data["code"]) {
          case "success":
            $(this).removeAttr("disabled").find(".button-loader").css("display", "none");
            //location.reload();

            // console.log(referringPath);
            if (referringPath != "") {
              setTransientData(adultChildArray)
                .then(function (data) {
                  referringPath = "/" + ICL + "/find/rooms?" + urlParams;
                })
                .catch(function (err) {
                  console.log(err);
                });
              window.location.replace(referringPath);
            } else {
              let text = window.location.pathname;
              let result = text.includes("offers-global");

              let is_ube_offer_flag = $("#ube_members_only").val();

              if (result) {
                let paramLastURL = new URLSearchParams(url.search);
                if (is_ube_offer_flag == "yes") {
                  paramLastURL.delete("offer_name");
                  paramLastURL.delete("offer_code");
                  paramLastURL.delete("offer_id");
                  paramLastURL.delete("offer_start_date");
                  paramLastURL.delete("offer_end_date");
                  paramLastURL.delete("rateplancode");
                }
                // console.log(document.location.origin + '/' + ICL + '/'+ 'offers-global');
                urltoopen = document.location.origin + "/" + document.location.pathname + "?" + paramLastURL;
                // urltoopen=  ;

                window.location.replace(urltoopen);
              } else if (text.includes("find/rooms")) {
                let lastfullURL = window.location.href;
                let paramLastURL = new URLSearchParams(url.search);
                if (is_ube_offer_flag == "yes") {
                  paramLastURL.delete("offer_name");
                  paramLastURL.delete("offer_code");
                  paramLastURL.delete("offer_id");
                  paramLastURL.delete("offer_start_date");
                  paramLastURL.delete("offer_end_date");
                  paramLastURL.delete("rateplancode");
                  console.log(is_ube_offer_flag, "InnerFlag");
                }
                urltoopen = document.location.origin + "/" + ICL + "/" + "find/rooms/?" + paramLastURL;
                // console.log(urltoopen);
                window.location.replace(urltoopen);
              } else if (text.includes("find/hotels")) {
                let lastfullURL = window.location.href;
                let paramLastURL = new URLSearchParams(url.search);
                if (is_ube_offer_flag == "yes") {
                  paramLastURL.delete("offer_name");
                  paramLastURL.delete("offer_code");
                  paramLastURL.delete("offer_id");
                  paramLastURL.delete("offer_start_date");
                  paramLastURL.delete("offer_end_date");
                  paramLastURL.delete("rateplancode");
                }
                urltoopen = document.location.origin + "/" + ICL + "/" + "find/hotels/?" + paramLastURL;
                // console.log(urltoopen);
                window.location.replace(urltoopen);
              } else if (text.includes("my-dashboard") || text.includes("change-password") || text.includes("personal-details")) {
                window.location.replace(document.location.origin + "/" + ICL);
              } else {
                location.reload();
              }
            }
            break;
          default:
            $("#loginMenuButton").dropdown("toggle");
            console.log(data);
            break;
        }
      },
      error: function (data) {
        $(this).html("Unknown Error!").removeAttr("disabled").find(".button-loader").css("display", "none");
        $("#loginMenuButton").dropdown("toggle");
        // console.log(data);
      },
    });
  });
});
