//? Rendering Country list from JSON
var countryCodeVar = "971";
var countryCodeAttribute = "AE";


$('#bookingModalGlobal').on('show.bs.modal', function (event) {
  // callCountryCode();
})

function hideMesg() {
  // alert("clicked");
  document.getElementById("ApiError").innerHTML = "";

}

function callCountryCode() {

  selectorName = document.getElementById("flagdrop");
  $.getJSON(
    "/wp-content/themes/emaar-projects/json/countriesData.json",
    function (countriesData, textStatus, jqXHR) {
      countriesData.forEach((value, index) => {
        var option = document.createElement("option");
        option.value = value.iso2;
        option.setAttribute("title", "+" + value.calling_code);
        option.setAttribute("data-country", value.iso2);
        option.innerHTML = "(+" + value.calling_code + ") " + value.name;
        selectorName.appendChild(option);

        if (value.iso2 == countryCodeAttribute) {
          $('#flagdrop').val(countryCodeAttribute);
        }
      });
    }
  );
  console.log('Coutry Code Loaded');

  $('#flagdrop').selectpicker('refresh');
}
$("#flagdrop").on("changed.bs.select", function () {
  countryCodeAttribute = $("option:selected", this).data("country");
  console.log(countryCodeAttribute, typeof countryCodeAttribute);
});

function timeStringToNumber(time) {

  return ((new Date(("01 Jan 1970 " + time || "").replace(".", ":") + " GMT")) / 3600000) || 0;
}

$(".select_time_header").hide();

//function for displaying error messaage according to language code
function arraySearchForErrorMessage(nameKey, myArray) {
  errorArray = {};
  defaultArray = {};
  for (var i = 0; i < myArray.length; i++) {
    if (nameKey == 'zh-hans') { nameKey = 'zh' }
    if (myArray[i]["LanguageCode"] == nameKey) {
      errorArray = myArray[i]
      break;
    } else if (myArray[i]["LanguageCode"] == 'en') {
      defaultArray = myArray[i];
    }
  }
  console.log(Object.keys(errorArray).length === 0)
  if (Object.keys(errorArray).length === 0) {
    return defaultArray;
  } else {
    return errorArray;
  }
}

// function arraySearchForErrorMessage(nameKey, myArray) {
//    nameKey = nameKey == "en-ru" ? 'en' :nameKey;
//    for (var i = 0; i < myArray.length; i++) {
//       if (myArray[i]["LanguageCode"] == nameKey) {
//          return myArray[i];
//       }
//    }
// }




var resturantName;
var hotelName;
var contactEmail;
var contactPhone;
var opensAt;
var ClosesAt;
var MaxPartySize;
var confirmationNumber = "";
var modify = "";
var ReservationStatus = 0;

// if (ICL == 'ar') {
//    reservDetails = 'تفاصيل الحجز ';
// }
// else {
//    reservDetails = 'Reservation Details';
// }

//runs after selecting restaurant from dropdown
function select_restaurant_event(restaurantId, resturantName, hotelName, contactEmail, contactPhone, opensAt, ClosesAt, MaxPartySize, confirmationNumber, modify) {
  $(".restaurant_dropdown").removeClass("errorbox");
  $('.timerangebox, .tabletyperange').hide();
  $(".large-party-msg").addClass('d-none');
  $('.checkAvailibilityForm').find(".errormsg").addClass('hide');
  $('.checkAvailibilityForm').find('.api-error').hide();
  $('.modify-booking-info').find('.api-error').hide();

  $('#bookingModalGlobal .information').removeClass("d-none");
  $('#bookingModalGlobal .navbarDropdownTime').removeClass("d-none");
  // changes By Shubham for modal opening without selecting restaurant in Mobile

  $('#bookingModalGlobal .navbarDropdownTime-mobile').removeClass("d-none");
  $('#bookingModalGlobal .peopleDropdown-mobile').removeClass("d-none");
  $('#time_dine_dropdown').modal('hide');
  $('#dine_hotel_numberofpeople').modal('hide');
  // changes By Shubham for modal opening without selecting restaurant in Mobile

  $('#bookingModalGlobal .peopleDropdown').removeClass("d-none");

  console.log(confirmationNumber, modify)
  if (confirmationNumber != "" && modify != "") {
    $('#bookingModalGlobal .navbar .nav-item.restaurant_dropdown').hide();
  }

  $('#bookingModalGlobal .dineresname, #bookinginfodineModal .dineresname, .bookingConfirm .dineresname').html(resturantName);
  $('#bookingModalGlobal .dinereslocation, #bookinginfodineModal .dinereslocation, .bookingConfirm .dinereslocation').html(hotelName);


  if (contactPhone != null && contactPhone != "")
    $(".contact-details .dineresphone, .bookingInfo .dineresphone, .bookingConfirm .dineresphone").html('<a class="body-4 d-inline-flex align-items-center" href="tel:' + contactPhone + '"><i class="fal fa-phone-alt pr-2"></i><span class="dir-ltr">' + contactPhone + '</span></a>');

  if (contactEmail != null && contactEmail != "")
    $(".contact-details .dineresemail, .bookingInfo .dineresemail, .bookingConfirm .dineresemail").html('<a class="body-4 d-inline-flex align-items-center" href="mailto:' + contactEmail + '"><i class="fal fa-envelope pr-2"></i><span>' + contactEmail + '</span></a>');

  cust_email = contactEmail;
  cust_phnumber = contactPhone;

  $("#wp_block-email").html(cust_email);
  $("#wp_block-phone").html(cust_phnumber);

  $('#bookingresid').val(restaurantId);
  $('#peopleDropdown .dropdown-item.people-value').remove();
  $('#timeDropdownId .dropdown-item.time-value').remove();
  moment.locale(ICL);
  for (let people = 1; people <= MaxPartySize; people++) {
    $('#peopleDropdown .large-party-option').before('<a class="dropdown-item people-value" data-value="' + people + '" href="javascript:void(0)" rel="all">' + people + (people == 1 ? ' ' + personlg + '</a>' : ' ' + personslg + '</a>'));
  }
  for (let time = timeStringToNumber(opensAt); time <= timeStringToNumber(ClosesAt); time += 0.5) {
    $('#timeDropdownId,time_dine_dropdown #timeDropdownId').append('<a class="dropdown-item time-value" href="javascript:void(0)" rel="all" data-value="' + new Date(time * 3600000).toLocaleTimeString('en-US', { timeZone: 'UTC', hour12: false, hour: '2-digit', minute: '2-digit' }) + '">' + moment.utc(new Date(time * 3600000)).format(time_format) + '</a>');
  }
}

$(document).ready(function () {
  //update reservation on both manage booking and my dashboard update booking
  $(document).on("click", ".bookingdinecta", function () {
    //set dine as default tab when user clicks on dine booking from my dashboard
    if ($(this).attr('data-bookingtype') == "dine") {
      $("#bookingModalGlobal .nav-link").removeClass('active');
      $("#bookingModalGlobal #pills-Stay").removeClass("active");
      $("#bookingModalGlobal #pills-Stay").removeClass("show");
      $("#bookingModalGlobal .dine-tab").addClass("active");
      $("#bookingModalGlobal #pills-Dine").addClass("active");
      $("#bookingModalGlobal #pills-Dine").addClass("show");
    }
    restaurantId = $(this).attr('data-id');
    resturantName = $(this).attr("data-name");
    hotelName = $(this).attr("data-hotel");
    contactEmail = $(this).attr("data-email");
    contactPhone = $(this).attr("data-phnumber");
    opensAt = $(this).attr("data-OpensAt");
    ClosesAt = $(this).attr("data-ClosesAt");
    MaxPartySize = $(this).attr("data-MaxPartySize");
    confirmationNumber = $(this).attr("data-confirmation") ? $(this).attr("data-confirmation") : "";
    modify = $(this).attr("data-modify") ? $(this).attr("data-modify") : "";

    select_restaurant_event(restaurantId, resturantName, hotelName, contactEmail, contactPhone, opensAt, ClosesAt, MaxPartySize, confirmationNumber, modify);

    if (($(this).attr('data-modify') == 1) && ($(this).attr("data-confirmation") != "")) {
      console.log("inside if condition")
      $('#bookingModalGlobal .modal-title').html(updatetitlelg);
      $('#modifybooking').val(1);
      $('#modifyconfirmationNumber').val($(this).attr("data-confirmation"));
      $('#modifySeating').val($(this).attr("data-seating"));

      //when user updates from mydashboard button
      if (typeof booking_details === "undefined") {
        var date_formatted = (new Date($(this).attr('data-date'))).toLocaleDateString(ICL, { weekday: 'short', year: 'numeric', month: 'short', day: 'numeric' });
        var time_formatted = (new Date('01 Jan 1970 ' + $(this).attr('data-time'))).toLocaleTimeString('en-AE', { timeStyle: 'short' });
        var pax_formatted = $(this).attr('data-pax') + (($(this).attr('data-pax') == "1") ? " Person" : " People");
        booking_details = {
          date_formatted: date_formatted,
          date: $(this).attr('data-date'),
          time_formatted: time_formatted,
          time: $(this).attr('data-time'),
          pax_formatted: pax_formatted,
          pax: $(this).attr('data-pax')
        }
      }
      console.log(booking_details);
      console.log(typeof booking_details);
      console.log("_________________________");
      console.log(booking_details["time_formatted"]);
      console.log(typeof booking_details["time_formatted"]);
      //update datefield
      $("#datepick_modal_dine_desktop span").html(booking_details["date_formatted"]);
      $("#datepick_modal_dine_mobile").val(booking_details["date_formatted"]);

      $('#daterangeboxtxt').val(booking_details["date"]);
      $(".bookingInfo .date").html(booking_details["date_formatted"]);

      //update time field
      $(".timedropdown span").html(booking_details["time_formatted"]);
      $('#timerangeboxtxt').val(booking_details["time"]);
      $(".bookingInfo .time").html(booking_details["time_formatted"]);

      //update number of people
      $(".nopdropdown span").html(booking_details["pax_formatted"]);
      $("#pax").val(booking_details["pax"]);
      $(".bookingInfo .people").html(booking_details["pax_formatted"]);
    }
  });

  var tDays;
  var moNames;
  var isValid;
  var prevIcon;
  var nextIcon;
  moNames = [month_january, month_february, month_march, month_april, month_may, month_june, month_july, month_August, month_september, month_october, month_november, month_december]

  // Akshay | 04-08-22 | Start
  if (ICL == 'ar') {
    tDays = ["أ", "إ", "ث", "أ", "خ", "ج", "س"]
    //   moNames = ["يناير", "فبراير", "مارس", "ابريل", "مايو", "يونيو", "يوليو", "اغسطس", "سبتمبر", "اكتوبر", "نوفمبر", "ديسمبر"]
    isValid = true;
    prevIcon = '<i class="fal fa-angle-right calender-icons calender-next-icon"></i>'
    nextIcon = '<i class="fal fa-angle-left calender-icons calender-prev-icon"></i>'
  } else if (ICL == 'de') {
    tDays = ['S', 'M', 'D', 'M', 'D', 'F', 'S']
    // moNames = ['Januar', 'Februar', 'März', 'April', 'Mai', 'Juni', 'Juli', 'August', 'September', 'Oktober', 'November', 'Dezember']
    isValid = false;
    prevIcon = '<i class="fal fa-angle-left calender-icons calender-prev-icon"></i>'
    nextIcon = '<i class="fal fa-angle-right calender-icons calender-next-icon"></i>'
  } else if (ICL == 'fr') {
    tDays = ['D', 'L', 'M', 'M', 'J', 'V', 'S']
    // moNames = ['janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre']
    isValid = false;
    prevIcon = '<i class="fal fa-angle-left calender-icons calender-prev-icon"></i>'
    nextIcon = '<i class="fal fa-angle-right calender-icons calender-next-icon"></i>'
  } else {
    tDays = ['S', 'M', 'T', 'W', 'T', 'F', 'S']
    //   moNames = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December']
    isValid = false;
    prevIcon = '<i class="fal fa-angle-left calender-icons calender-prev-icon"></i>'
    nextIcon = '<i class="fal fa-angle-right calender-icons calender-next-icon"></i>'
  }
  // End

  //Date picker for desktop
  $('#datepick_modal_dine_desktop').datepick({
    rangeSelect: false,
    minDate: new Date(),
    alignment: 'bottomLeft',
    maxDate: '+24m',
    monthsToShow: 1,
    prevText: prevIcon,
    // todayText: '',
    useMouseWheel: false,
    isRTL: isValid,
    dayNamesMin: tDays,
    monthNames: moNames,
    firstDay: 1,
    nextText: nextIcon,
    popupContainer: "#dineBookingModal",
    dateFormat: 'dd/mm/yyyy',
    changeMonth: false,
    onSelect: function (dates) {
      cbdine(dates);
    }
  });

  //Date picker for desktop
  $('#datepick_modal_dine_mobile').datepick({
    rangeSelect: false,
    minDate: new Date(),
    alignment: 'bottomLeft',
    maxDate: '+24m',
    monthsToShow: 1,
    prevText: prevIcon,
    todayText: '',
    nextText: nextIcon,
    isRTL: isValid,
    dayNamesMin: tDays,
    useMouseWheel: false,
    monthNames: moNames,
    firstDay: 1,
    popupContainer: "#datepick_modal_dine_inside",
    dateFormat: 'dd/mm/yyyy',
    changeMonth: false,
    onSelect: function (dates) {
      cbdine(dates);
    }
  });

  //Date picker for desktop  deeplinking code
  const isValidDate = (date) => {
    // Regular expression for dd/mm/yyyy format
    const dateRegex = /^(0[1-9]|[12][0-9]|3[01])\/(0[1-9]|1[0-2])\/\d{4}$/;

    if (!dateRegex.test(date)) {
      return false; // Invalid format
    }

    // Extract day, month, and year from the date string
    const [day, month, year] = date.split('/').map(Number);

    // Create a Date object for the provided date
    const providedDate = new Date(year, month - 1, day); // Month is 0-indexed

    // Get the current date
    const currentDate = new Date();

    const maxDate = new Date(currentDate);
    maxDate.setFullYear(maxDate.getFullYear() + 1);


    // Check if the provided date is greater than or equal to the current date
    return providedDate >= currentDate && providedDate <= maxDate;

  };

  const urlParams = new URLSearchParams(window.location.search);
  const startDate = urlParams.get('date');

  // Redux action or reducer
  const validateDate = (date) => {
    if (isValidDate(date)) {
      // Date is valid, you can dispatch an action or perform other logic here
      if (startDate) {
        var cid_day = startDate.split('/')[0];
        var cid_month = startDate.split('/')[1] - 1;
        var cid_year = startDate.split('/')[2];
        var SelectedDate = new Date(cid_year, cid_month, cid_day);

        $('#datepick_modal_dine_desktop').datepick('setDate', SelectedDate);

        $('#datepick_modal_dine_mobile').datepick('setDate', SelectedDate);

      }
    }
  };
  if (startDate) {
    validateDate(startDate);
  }

  //dafter selcting date
  function cbdine(start, end, selector) {
    var dt = moment(new Date(start)).format("DD/MM/YYYY");
    var eventDate1 = moment(dt, 'DD/MM/YYYY').format('YYYY-MM-DD');
    var date1 = new Date(eventDate1 + 'T10:00:00Z'); //To avoid timezone issues
    var weekday = ["Su", "Mo", "Tu", "We", "Th", "Fr", "Sa"];
    var weekday2 = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];
    var day1 = weekday[date1.getDay()];
    var day2 = weekday2[date1.getDay()];
    if (($(".timerangebox, .tabletyperange").is(":visible")) && ($('#daterangeboxtxt').val() != moment(dt, 'DD/MM/YYYY').format('YYYY-MM-DD'))) {
      $('.timerangebox, .tabletyperange').hide();
    }
    // $("#datepick_modal_dine_desktop span").html(day2 + ', ' + moment(dt, 'DD/MM/YYYY').format('DD/MM/YY'));
    // Akshay | 12-08-22
    $("#datepick_modal_dine_desktop span").html((new Date(start)).toLocaleDateString(ICL, { weekday: 'short', day: '2-digit', month: '2-digit', year: '2-digit' }));
    $('#daterangeboxtxt').val(moment(dt, 'DD/MM/YYYY').format('YYYY-MM-DD'));

    $("#datepick_modal_dine_mobile span").html(day2 + '. ' + moment(dt, 'DD/MM/YYYY').format('DD MMM YYYY'));
    $('#dine_hotel_datebox').modal('hide');
    // $(".bookingInfo .date").html(day2 + ', ' + moment(dt, 'DD/MM/YYYY').format('DD MMM YYYY'));
    // Akshay | 04-08-22
    $(".bookingInfo .date").html((new Date(start)).toLocaleDateString(ICL, { weekday: 'short', year: 'numeric', month: 'short', day: 'numeric' }));
  }

  //click event on selecting the restaurant from drop down
  $(document).on("click", ".selected-restaurant", function () {
    restaurantId = $(this).attr('data-id');
    resturantName = $(this).attr("data-restaurant");
    hotelName = $(this).attr("data-hotel");
    contactEmail = $(this).attr("data-email");
    contactPhone = $(this).attr("data-phone");
    opensAt = $(this).attr("data-OpensAt");
    ClosesAt = $(this).attr("data-ClosesAt");
    MaxPartySize = $(this).attr("data-MaxPartySize");
    confirmationNumber = $(this).attr("data-confirmation") ? $(this).attr("data-confirmation") : "";
    modify = $(this).attr("data-modify") ? $(this).attr("data-modify") : "";
    select_restaurant_event(restaurantId, resturantName, hotelName, contactEmail, contactPhone, opensAt, ClosesAt, MaxPartySize, confirmationNumber, modify);
  });

  // click event time
  $(document).on("click", ".navbarDropdownTime .dropdown-item", function () {
    if (($(".timerangebox, .tabletyperange").is(":visible")) && ($('#timerangeboxtxt').val() != $(this).attr('data-value'))) {
      $('.timerangebox, .tabletyperange').hide();
    }
    $("#navbarDropdownTime span").html($(this).text());
    $('#timerangeboxtxt').val($(this).attr('data-value'));
    $(".bookingInfo .time").html($(this).text());
  });

  // Click event on selecting the people
  $(document).on("click", ".nopdropdown .dropdown-item", function () {
    if ($(this).hasClass("large-party-option")) {
      $(".large-party-msg").removeClass('d-none');
      $(".modalAvailibilitybtn").addClass("disabled");
      $(".modalAvailibilitybtn").prop('disabled', true);
      if (($(".timerangebox, .tabletyperange").is(":visible")) && ($('#pax').val() != $(this).attr('data-value'))) {
        $('.timerangebox, .tabletyperange').hide();
      }
      $(".nopdropdown span").html($(this).text());
    } else {
      $(".modalAvailibilitybtn").removeClass("disabled");
      $(".modalAvailibilitybtn").prop('disabled', false);
      $(".large-party-msg").addClass('d-none');
      if (($(".timerangebox, .tabletyperange").is(":visible")) && ($('#pax').val() != $(this).attr('data-value'))) {
        $('.timerangebox, .tabletyperange').hide();
      }
      $(".nopdropdown span").html($(this).text());
      $("#pax").val($(this).attr('data-value'));
      $(".bookingInfo .people").html($(this).text());
    }
  });

  $("#bookingModalGlobal").on('show.bs.modal', function () {
    $('.timerangebox, .tabletyperange').hide();
    $(".checkAvailibilityForm").find(".api-error").hide();
    $(".modify-booking-info").find(".api-error").hide();
  });

  //check availibility
  $("form[name='checkAvailibilityForm']").submit(function (e) {
    console.log("click event ------------------------")
    e.preventDefault();
    $('.timerangebox, .tabletyperange').hide();
  }).validate({
    ignore: [],
    errorClass: "error",
    validClass: "valid",

    // Specify validation rules
    rules: {
      bookingresid: {
        required: true
      },
      daterangeboxtxt: {
        required: true
      },
      timerangeboxtxt: {
        required: true
      },
      pax: {
        required: true
      }
    },

    // Specify validation error messages
    messages: {
      bookingresid: selectrestaurantlg,
      daterangeboxtxt: selectdatelg,
      timerangeboxtxt: selecttimelg,
      pax: selectpeoplelg
    },

    highlight: function (element, errorClass, validClass) {
      $(element).addClass(errorClass).removeClass(validClass);

      if ($(element).hasClass('selectpicker')) {
        $(element).siblings('.btn').removeClass(validClass).addClass(errorClass);

      }
      $(element.form).find("[name=' + element.name + ']").each(function (i, sameName) {
        //  $(element.form).find("label[for=" + sameName.id + "]").addClass(errorClass);
        $(element.form).find("label.formtitle").addClass('hide');
        $(element.form).find('.errormsg').addClass(errorClass);
      });
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass(errorClass).addClass(validClass);
      if ($(element).hasClass('selectpicker')) {
        $(element).siblings('.btn').removeClass(errorClass).addClass(validClass);
      }
      $(element.form).find("[name=' + element.name + ']").each(function (i, sameName) {
        //    $(element.form).find("label[for=" + sameName.id + "]").removeClass(errorClass);
        $(element.form).find("label.formtitle").removeClass('hide');
        $(element.form).find('.errormsg').removeClass(errorClass);
      });
    },

    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function (form) {
      $('.checkAvailibilityForm').find(".errormsg").addClass('hide');
      $(form).find('.api-error').hide();
      $(form).find('button[type="submit"]').attr("disabled", "");
      $(form).find('.button-loader').css("display", "inline-block");

      var date = document.querySelector('#daterangeboxtxt').value;
      // var formattedDate = moment(date, 'YYYY-MM-DD').format('YYYY-MM-DD');
      var time = form.querySelector('#timerangeboxtxt').value;
      var newTime = moment.utc(time, 'hh:mm').subtract(1, 'hour').format('HH:mm');
      var checkData = {
        restaurantId: form.querySelector('#bookingresid').value,
        date: date,
        time: newTime,
        pax: form.querySelector('#pax').value
      }
      console.log(checkData);
      var siteUrl = "/wp-json/reservation/v1/dine/check-availibility";
      jQuery.ajax({
        type: "GET",
        url: siteUrl,
        data: checkData,
        success: function (data) {
          $('.select_time_dine_desktop').removeClass("d-none");
          console.log(data)
          //if (data["data"]["status"] == 400) {
          var ICL_number = (ICL == "ar") ? 1 : 0;
          if (data["success"] == false) {
            error_message = arraySearchForErrorMessage(ICL, data["error"]["details"]["error_details"]);
            contact_details = arraySearchForErrorMessage(ICL, data["error"]["details"]["contact_details"]);
            if (error_message && contact_details)
              $(form).find('.api-error').html(error_message["TextContent"] + '<br>' + contact_details["TextContent"]).show();
            else if (contact_details)
              $(form).find('.api-error').html(contact_details["TextContent"]).show();
            else
              $(form).find('.api-error').html(servererror1lg + ' <a href="mailto:' + cust_email + '" target="_blank">' + cust_email + '</a> ' + servererror2lg + ' <a href="tel:' + cust_phnumber + '" target="_blank">' + cust_phnumber + '</a>').show();
          } else if (data["success"] == true) {
            showAvailibility(data["data"]["ResponseData"]);
            window.dataLayer.push({ "BookingStep": "Available Date", "resturantName": resturantName });
          } else {
            $(form).find('.api-error').html(servererror1lg + ' <a href="mailto:' + cust_email + '" target="_blank">' + cust_email + '</a> ' + servererror2lg + ' <a href="tel:' + cust_phnumber + '" target="_blank">' + cust_phnumber + '</a>').show();
          }
          $(form).find('.button-loader').css("display", "none");
          $(form).find('button[type="submit"]').removeAttr("disabled");
          $("#bookingModalGlobal .modal-content").animate({ scrollTop: $(document).height() }, 1000);
          // console.log('Scrolled');
        },
        error: function (data) {
          $(form).find('.button-loader').css("display", "none");
          $(form).find('button[type="submit"]').removeAttr("disabled");
        }
      });

      function showAvailibility(data) {
        ReservationStatus = data["Status"];
        var availibilityTimes = data["TimeSegments"];
        $(".timerangebox .timebox").remove();

        availibilityTimes.forEach(element => {
          var availTimeDec = element["ReservationTime"];
          var seatAvailibility = Array();
          element["Seatings"].forEach(item => {
            seatAvailibility.push(item["SeatingType"]);
          });
          // var displayTime = (new Date('01 Jan 1970 ' + element["ReservationTime"])).toLocaleTimeString('en-IN', { timeStyle: 'short' });
          // Akshay | 04-08-22
          var displayTime = moment.utc(new Date(timeStringToNumber(element["ReservationTime"]) * 3600000)).format(time_format);
          $(".timerangebox").append('<a href="#" value="' + availTimeDec + '" data-seating="' + JSON.stringify(seatAvailibility) + '"  data-value="' + availTimeDec + '" data-hotel="' + hotelName + '"  data-restaurant="' + resturantName + '" class="timebox" data-backdrop="static">' + displayTime + '</a>');
        });
        // $('.timerangebox a[data-value="' + form.querySelector('#timerangeboxtxt').value + '"]').addClass('selected');
        $('#navbarDropdownTime span').val($('.timerangebox a.selected').text());
        $(".timerangebox").show("slow");
        $(".select_time_header").show("slow");
      }

    }
  });

  //click event on time range
  $(document).on("click", ".timerangebox .timebox:not(.emptytimebox)", function (e) {
    console.log("click event on time range");
    e.preventDefault();
    $(".timebox.selected").removeClass('selected');
    $(this).addClass('selected');
    $('.timedropdown span').html($(this).text());
    $('#timerangeboxtxt').val($(this).attr("data-value"));
    $('.bookingInfo .time').html($(this).text());

    var seatAvailibility = JSON.parse($(this).attr("data-seating"));
    $('.tabletyperange .tabletypebox').hide().removeClass("seating-available");

    if ($('#modifybooking').val() == 1) {
      console.log("inside if")
      $('.tabletyperange .tabletypebox[data-value="' + parseInt($('#modifySeating').val()) + '"]').addClass("seating-available").show();
    } else {
      console.log("inside else")
      seatAvailibility.forEach(element => {
        $('.tabletyperange .tabletypebox[data-value="' + element + '"]').addClass("seating-available").show();
      });
    }
    console.log($('.tabletyperange .tabletypebox.seating-available').length);
    if ($('.tabletyperange .tabletypebox.seating-available').length == 1) {
      console.log("inside if table range")
      $('.tabletyperange .tabletypebox.seating-available').trigger("click");
    } else {
      console.log("inside else table range")
      $(".tabletyperange").show("slow");
    }
  });

  //click event on table type range
  $(document).on("click", ".tabletyperange .tabletypebox", function (e) {
    e.preventDefault();

    $(".tabletyperange .tabletypebox").removeClass('selected');
    $(this).addClass('selected');
    $('#tabletyperangetetxt').val($(this).attr("data-value"));
    $('.bookingInfo .seating').html($(this).text());
    console.log($('#modifybooking').val());
    if ($('#modifybooking').val() == 1) {
      $('.booking-form-title').hide();
      $('.modify-booking-container, .modify-booking-info').show();
      $('.guestInfoTable').appendTo('.modify-booking-info');
      $('.new-booking-container').hide();
      $('#bookingdineModal').hide("slow")
      $("#flagdrop").val("AE");
      $("#flagdrop").selectpicker('refresh');
      var addy = $(".flagdrop .filter-option-inner-inner").html();
      var newval = addy.substr(0, addy.indexOf('('));
      console.log(newval);
      if (newval != '')
        $(".flagdrop .filter-option-inner-inner").html(newval);
      $('#bookinginfodineModal').modal("show");
    } else {
      $('#bookingdineModal').hide("slow")
      $("#flagdrop").val("AE");
      $("#flagdrop").selectpicker('refresh');
      var addy = $(".flagdrop .filter-option-inner-inner").html();
      var newval = addy.substr(0, addy.indexOf('('));
      if (newval != '')
        $(".flagdrop .filter-option-inner-inner").html(newval);
      $('#bookinginfodineModal').modal("show");
      window.dataLayer.push({ "BookingStep": "Available Times", "resturantName": resturantName });
    }
  });

  //modify click event
  $(document).on("click", "#bookinginfodineModal .modifybutton", function (e) {
    e.preventDefault();
    $('#bookingdineModal').show();
    $('#bookinginfodineModal').modal("hide");
    document.getElementById("ApiError").innerHTML = "";
  });

  //click even on book now button
  $("#bookinginfodineModal .bookinginfodinebtn").click(function (e) {
    e.preventDefault();
    $('#bookinginfodineform').submit();
  });

  //confirm submit
  $(".donebtn").click(function (e) {
    e.preventDefault();
    $('.modal-backdrop').removeClass("show").hide();
    $('#bookingconfirmdineModal').modal("hide");
    $('#bookingModalGlobal').modal("hide");
  });

  // cust by shub

  //  if (ICL == 'ar') {
  //      seating_var = 'جلوس';
  //  } else {
  //      seating_var = ' Seating';
  //  }

  //  // cust by shub

  //  if (ICL == 'ar') {
  //      people_var = 'اشخاص';
  //  } else {
  //      people_var = 'people';
  //  }
  function removeHtmlEntities(input) {
    console.log("from html entities");
    const parser = new DOMParser();
    const doc = parser.parseFromString(input, 'text/html');
    return doc.documentElement.innerText;
  }

  function showBooking(data) {
    var reservationDetails = data["ResponseData"];
    $(".ConfirmationMessage").html(removeHtmlEntities(reservationDetails["ConfirmationMessage"]));
    $('.confirmationNumber').html(reservDetails + ' #' + removeHtmlEntities(reservationDetails["ConfirmationNumber"]));
    $(".bookingConfirm .date").html((new Date(reservationDetails["ReservationDate"])).toLocaleDateString(ICL, { weekday: 'short', year: 'numeric', month: 'short', day: 'numeric' }));
    // $(".bookingConfirm .time").html((new Date('01 Jan 1970 ' + reservationDetails["ReservationTime"])).toLocaleTimeString('en-IN', { timeStyle: 'short' }));
    // Akshay | 04-08-22
    $(".bookingConfirm .time").html(moment.utc(new Date(timeStringToNumber(reservationDetails["ReservationTime"]) * 3600000)).format(time_format));
    $(".bookingConfirm .people").html(reservationDetails["PartySize"] + ' ' + people_var);
    $('.bookingConfirm .seating').html(reservationDetails["Seating"]["SeatingTypeValue"] + ' ' + seating_var);

    $('.bookingGuest .name').html(removeHtmlEntities(reservationDetails["Firstname"]) + ' ' + removeHtmlEntities(reservationDetails["Lastname"]));
    $('.bookingGuest .email').html(removeHtmlEntities(reservationDetails["EmailAddress"]));
    $('.bookingGuest .phone').html(removeHtmlEntities(reservationDetails["PhoneNumber"]));

    $('.bookingSpecialInstructions').html(reservationDetails["SpecialRequest"] ? removeHtmlEntities(reservationDetails["SpecialRequest"]) : none_var);

    $('.timerangebox, .tabletyperange').hide();

    if ($('#modifybooking').val() == 1) {
      $('#bookingconfirmdineModal .modal-title').html('Your Booking is updated');
    }

    $('#bookinginfodineModal').modal("hide");
    $('#bookingconfirmdineModal').modal("show");
    window.dataLayer.push({
      "BookingStep": "Booking Confirmation",
      "BookingReference": reservationDetails["ConfirmationNumber"],
      "resturantName": resturantName,
      "BookingDate": reservationDetails["ReservationDate"],
      "BookingTime": reservationDetails["ReservationTime"],
      "Restaurant": resturantName,
      "Guest": reservationDetails["PartySize"],
      "NoGuest": reservationDetails["PartySize"],
      "GuestEmail": "",
      "Time": reservationDetails["ReservationTime"],
      "bookedDate": reservationDetails["ReservationDate"],
      "event": "DinningComplete"
    });
  }

  // cust by shub
  //  if (ICL == 'ar') {
  //      email_var = 'رجاء قم بإدخال بريد الكتروني صحيح';
  //  } else {
  //      email_var = 'Please enter a valid email address';
  //  }
  // cust by shub


  //form validation
  jQuery.validator.addMethod("emailchk", function (value, element) {
    return this.optional(element) || /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/.test(value);
  }, "Invalid Email");

  jQuery.validator.addMethod("lettersonly", function (value, element) {
    return this.optional(element) || /^[a-z ',-.]+$/i.test(value);
  }, "Letters only please");

  //book now form submit
  $("form[name='dineuserinfo']").validate({
    ignore: [],
    errorClass: "error",
    validClass: "valid",

    // Specify validation rules
    rules: {
      fname: {
        required: true,
        lettersonly: true,
        maxlength: 25
      },
      lname: {
        required: true,
        lettersonly: true,
        maxlength: 25
      },
      email: {
        required: true,
        emailchk: true,
        // Specify that email should be validated
        // by the built-in "email" rule
        email: true
      },
      mobile: {
        required: true,
        minlength: 8,
        number: true,
        maxlength: 15
      }
    },

    // Specify validation error messages
    messages: {
      fname: fnamelg,
      lname: lnamelg,
      mobile: {
        required: remoblg,
        minlength: remoblg
      },
      email: email_var
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass(errorClass).removeClass(validClass);

      if ($(element).hasClass('selectpicker')) {
        $(element).siblings('.btn').removeClass(validClass).addClass(errorClass);

      }
      $(element.form).find('[name=' + element.name + ']').each(function (i, sameName) {
        //  $(element.form).find("label[for=" + sameName.id + "]").addClass(errorClass);
        $(element.form).find("label.formtitle").addClass('hide');
        $(element.form).find('.errormsg').addClass(errorClass);
      });
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass(errorClass).addClass(validClass);
      if ($(element).hasClass('selectpicker')) {
        $(element).siblings('.btn').removeClass(errorClass).addClass(validClass);
      }
      $(element.form).find('[name=' + element.name + ']').each(function (i, sameName) {
        //    $(element.form).find("label[for=" + sameName.id + "]").removeClass(errorClass);
        $(element.form).find("label.formtitle").removeClass('hide');
        $(element.form).find('.errormsg').removeClass(errorClass);
      });
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function (form) {
      $('.bookingForm').find(".errormsg").addClass('hide');
      $(form).find('.api-error').hide();
      $(form).find('.bookinginfodinebtn').attr("disabled", "");
      $(form).find('.button-loader').css("display", "inline-block");
      grecaptcha.ready(function () {
        grecaptcha
          .execute(RECAPTCHA_SITE_KEY, {
            action: "submit",
          })
          .then(function (token) {

            if (token) {
              // Success message here
              console.log(token);

              var bookData = {
                "response_token": token,
                "restaurantId": document.querySelector('#bookingresid').value,
                "date": document.querySelector('#daterangeboxtxt').value,
                "time": document.querySelector('#timerangeboxtxt').value,
                "pax": document.querySelector('#pax').value,
                "first-name": form.querySelector('#fname').value,
                "last-name": form.querySelector('#lname').value,
                "email": form.querySelector('#email').value,
                "phone": form.querySelector('#mobile').value,
                "special-request": form.querySelector('#specialRequest').value,
                "country": form.querySelector('#flagdrop').value,
                "seatingType": $('.tabletypebox.selected').data('value'),
                "countryCode": parseInt($('button[data-id="flagdrop"]').attr("title")),
                "ReservationStatus": ReservationStatus
              }
              console.log(bookData);
              var siteUrl = "/wp-json/reservation/v1/dine/reserve";
              jQuery.ajax({
                type: "POST",
                url: siteUrl,
                data: bookData,
                success: function (data) {
                  console.log(data);
                  if (data["success"] == false) {
                    if (data["error"]) {
                      if (data["error"]["details"]) {
                        error_message = arraySearchForErrorMessage(ICL, data["error"]["details"]);
                        if (error_message)
                          $(form).find('.api-error').html(error_message["TextContent"]).show();
                        else
                          $(form).find('.api-error').html(data["error"]["message"]).show();
                      } else
                        if (data["error"]["message"]) {
                          $(form).find('.api-error').html(data["error"]["message"]).show();
                        }
                        else {
                          $(form).find('.api-error').html(JSON.stringify(data["error"])).show();
                        }
                    }
                  } else if (data["success"] == true) {
                    showBooking(data["data"]);
                  } else {
                    $(form).find('.api-error').html(data["error"]["message"]).show();
                  }
                  $(form).find('.button-loader').css("display", "none");
                  $(form).find('.bookinginfodinebtn').removeAttr("disabled");

                },
                error: function (data) {
                  $(form).find('.button-loader').css("display", "none");
                  $(form).find('.bookinginfodinebtn').removeAttr("disabled");

                }
              });


            }
            else {
              // Error message here.
              console.log("Error!");
              $(form).find('.api-error').html("ReCAPTCHA request error").show();
            }
            //});
          });
      });




    }
  });

  //update dine booking button click
  $('.updatebookingbtn').click(function (e) {
    $('.modify-booking-container').find(".errormsg").addClass('hide');
    $('.modify-booking-container').find('.api-error').hide();
    $('.updatebookingbtn').attr("disabled", "").find('.button-loader').css("display", "inline-block");
    var modifyData = {
      restaurantId: document.querySelector('#bookingresid').value,
      date: document.querySelector('#daterangeboxtxt').value,
      time: document.querySelector('#timerangeboxtxt').value,
      pax: document.querySelector('#pax').value,
      confirmation: document.querySelector('#modifyconfirmationNumber').value,
      ReservationStatus: ReservationStatus
    }
    console.log(modifyData);
    var siteUrl = "/wp-json/reservation/v1/dine/modify";
    jQuery.ajax({
      type: "POST",
      url: siteUrl,
      data: modifyData,
      success: function (data) {
        console.log(data);
        if (data["success"] == false) {
          if (data["error"]["details"]) {
            error_message = arraySearchForErrorMessage(ICL, data["error"]["details"]);
            if (error_message)
              $('.modify-booking-container').find('.api-error').html(error_message["TextContent"]).show();
            else
              $('.modify-booking-container').find('.api-error').html(data["error"]["message"]).show();
          } else
            $('.modify-booking-container').find('.api-error').html(data["error"]["message"]).show();
        } else if (data["success"] == true) {
          showBooking(data["data"]);
        } else {
          $('.modify-booking-container').find('.api-error').html(data["error"]["message"]).show();
        }
        $('.modify-booking-container').find('.button-loader').css("display", "none");
        $('.modify-booking-container').find('.updatebookingbtn').removeAttr("disabled");

      },
      error: function (data) {
        $('.modify-booking-container').find('.button-loader').css("display", "none");
        $('.modify-booking-container').find('.updatebookingbtn').removeAttr("disabled");

      }
    });
  });

  // error box for select restaurant
  $('.dinedatebox').on('click', function () {
    if ($('#bookingresid').val().length === 0) {
      $('.restaurant_dropdown').addClass('errorbox');
    }
  });

  $('.timedropdown').on('click', function () {
    if ($('#bookingresid').val().length === 0) {
      $('.restaurant_dropdown').addClass('errorbox');
    }
  });

  $('.nopdropdown').on('click', function () {
    if ($('#bookingresid').val().length === 0) {
      $('.restaurant_dropdown').addClass('errorbox');
      $("#dine_hotel_numberofpeople").modal("hide");
    }
  })

  $(".bookingdineModal").on("hidden.bs.modal", function () {
    $('.modal-backdrop').removeClass("show").hide();
  });

  $(".bookingdineModal .navbar-nav .nav-item").on("click", function () {
    $(".bookingdineModal .navbar-nav ").find(".active").removeClass("active");
    $(this).addClass("active");
  });

});
