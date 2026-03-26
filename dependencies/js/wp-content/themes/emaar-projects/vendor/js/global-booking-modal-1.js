// $('.global-calender-clear-btn').on("click", function () {
//     $('#datepick_modal_stay_mobile').val('Check In - Check Out');
//     $(".global-booking-dropdown-mobile").hide();
// });

// mobile view modal date clear button click event
$('.global-calender-clear-btn').on("click", function () {
  $(".global-calender-select-date-btn").hide();
  $('#datepick-modal-mobile-dropdown').val('Check In - Check Out');
  $(".night_var").text("");
  closeFlag = false; //added on 04-04-23
  $("#check_in_date").val("");
  $("#check_out_date").val("");
  $("#datepick_modal_stay_mobile").val('Check In - Check Out');
  $(".datepick-popup").find(".datepick-selected:first").removeClass("start");
  $(".datepick-popup").find(".datepick-selected:last").removeClass("end");
  $(".datepick-popup").find(".datepick-selected:first").parent().removeClass("datepick-selected-td-first");
  $(".datepick-popup").find(".datepick-selected:last").parent().removeClass("datepick-selected-td-last");
  $(".datepick-popup").find(".datepick-selected").parent().removeClass("datepick-selected-td");
});

//added to remove the backdrop issue of modal when user closes the calendar after selecting dates.

const closeIcon = document.querySelector('#modelclosesignGlobal');

closeIcon.addEventListener('click', () => {
  $('.modal-backdrop').remove();
  $(".global-calender-select-date-btn").hide();
  $('#datepick-modal-mobile-dropdown').val('Check In - Check Out');
  $(".night_var").text("");
  $("#check_in_date").val("");
  $("#check_out_date").val("");
  $("#datepick_modal_stay_mobile").val('Check In - Check Out');
  $(".datepick-popup").find(".datepick-selected:first").removeClass("start");
  $(".datepick-popup").find(".datepick-selected:last").removeClass("end");
  $(".datepick-popup").find(".datepick-selected:first").parent().removeClass("datepick-selected-td-first");
  $(".datepick-popup").find(".datepick-selected:last").parent().removeClass("datepick-selected-td-last");
  $(".datepick-popup").find(".datepick-selected").parent().removeClass("datepick-selected-td");
});

// hide mobile date modal when clciked on select these dates button
$(document).on('click', '.global-calender-select-date-btn', function (e) {
  //console.log("inside button clicked");
  e.stopPropagation();
  if (!closeFlag && !wrongDate)
    //console.log("inside if of button clicked");
    $(".global-booking-dropdown-mobile").hide();
});

// to overcome the overlapping issue when error message is displayed - JAYANT
$(".hoteldropdownModal").click(function () {
  $("#datepick_modal_stay").datepick('option', {
    onClose: function () {
      $("#datepick_modal_stay").datepick('hide');
    }
  });
});

function pad(n) {
  return n < 10 ? '0' + n : n
}

var hotelId;
var daynames = [];
var currencyType;
if (typeof specificPrices === 'undefined')
  specificPrices = {};
var loading = false;
var max_rooms = 0;
var selectedLength = 0;
var Difference_In_Days;
var eventDate1;
var eventDate2;
var closeFlag = false;
var closeCounter = 0;
var lengthError = "";
var prev_hotelId = 0;
var errorFlag = true;

var offset;
var roomtypecode_flag; //Savitha Invalid Room type changes
var old_date_cid = 0; //added to resolve the last date selection issue - JAYANT
var old_date_cod = 0; //added to resolve the last date selection issue - JAYANT
var wrongDate = false; //added to disable the find-room button when a invalid date is selected - JAYANT
var hotelChanged = false; // added to disable the find-room button when hotel is changed will dates are selected and then invalid date comes up - JAYANT
var currentMonth = ""; //added for new implementation of calendar to remove the loader - JAYANT
var currentYear = ""; //added for new implementation of calendar to remove the loader - JAYANT
var hotelChangedForSelectedDates = true; //added for new implementation of calendar to remove the loader - JAYANT
var newCheckIn = false;
var hotelIdMappingModal = [
  { HotelId: 1, Name: "Address Downtown", TravelClickCode: "16954" },
  { HotelId: 2, Name: "Palace Downtown", TravelClickCode: "17035" },
  { HotelId: 4, Name: "Address Montgomerie", TravelClickCode: "17426" },
  { HotelId: 17, Name: "Address Dubai Mall", TravelClickCode: "108321" },
  { HotelId: 18, Name: "Address Sky View", TravelClickCode: "108317" },
  { HotelId: 29, Name: "Address Jumeirah Resort", TravelClickCode: "112897" },
  { HotelId: 31, Name: "Address Marrassi", TravelClickCode: "112608" }
];
var cookiedetailinfo = "";

// { HotelId: 5, Name: "Address Dubai Marina", TravelClickCode: "73168" },
// { HotelId: 3, Name: "Address Dubai Mall", TravelClickCode: "17147" },
// { HotelId: 10, Name: "Address Boulevard", TravelClickCode: "99931" },

// function showDayOfYear(date) {
//     var checkDate = date.getFullYear() + '-' + pad(date.getMonth() + 1) + '-' + pad(date.getDate()); //2015-12-04
//     if (specificPrices[hotelId] && specificPrices[hotelId].hasOwnProperty('currencyCode'))
//         currencyType = specificPrices[hotelId].currencyCode;
//     else {
//         currencyType = "";
//     }

//     if (specificPrices[hotelId] && specificPrices[hotelId][checkDate]) {
//         if (specificPrices[hotelId][checkDate]["Rate"] == "Sold Out" || specificPrices[hotelId][checkDate]["Rate"] == "C/O") {
//             specificPrice = '<p>N/A</p>';
//         } else {
//             specificPrice = '<p>' + specificPrices[hotelId][checkDate]["Rate"] + '</p>';
//         }
//     } else {
//         specificPrice = '';
//     }
//     if (specificPrices[hotelId] && specificPrices[hotelId][checkDate]) {
//         if (specificPrices[hotelId][checkDate]["Rate"] == "Sold Out") {
//             return {
//                 content: date.getDate() + specificPrice,
//                 dateClass: 'showDoY',
//                 selectable: false
//             };
//         } else {
//             return {
//                 content: date.getDate() + specificPrice,
//                 dateClass: 'showDoY'
//             };
//         }
//     } else {
//         return {
//             content: date.getDate() + specificPrice,
//             dateClass: 'showDoY'
//         };
//     }
// }
function showDayOfYear(date) {
  var checkDate = date.getFullYear() + '-' + pad(date.getMonth() + 1) + '-' + pad(date.getDate()); //2015-12-04
  // to fix the checkout /checkin error messages - JAYANT
  const formattedCheckDate = pad(date.getDate()) + "/" + pad(date.getMonth() + 1) + "/" + pad(date.getFullYear() % 100);
  if (specificPrices[hotelId] && specificPrices[hotelId].hasOwnProperty('currencyCode'))
    currencyType = specificPrices[hotelId].currencyCode;
  else {
    currencyType = "";
  }

  var twoYearsFromToday = moment().add(2, 'years');
  if (specificPrices[hotelId] && specificPrices[hotelId][checkDate] && twoYearsFromToday >= date) {
    if (specificPrices[hotelId][checkDate]["Status"] == "Sold-Out") {
      specificPrice = '<p>N/A</p>';
    } else if (specificPrices[hotelId][checkDate]["Status"] == "Only-Check-out") {
      specificPrice = '<p>Chk-out</p>';
    } else if (specificPrices[hotelId][checkDate]["Status"] == "Only-Check-in") {
      specificPrice = '<p>Chk-in</p>';
    } else if (specificPrices[hotelId][checkDate]["ShowRate"] == true) {
      specificPrice = '<p>' + specificPrices[hotelId][checkDate]["Rate"] + '</p>';
    } else {
      specificPrice = '';
    }
  } else {
    specificPrice = '';
  }
  if (hotelId == 'all') {
    $('#findRoomModalBtn').attr("disabled", false);
    wrongDate = false;
    closeFlag = false;
    lengthError = "";
  }
  if (specificPrices[hotelId] && specificPrices[hotelId][checkDate]) {

    //these vairables are written to check the conditions when user changes the hotel after selecting the rates - JAYANT
    var cod = document.getElementById("check_out_date").value;
    var cid = document.getElementById("check_in_date").value;
    var check_date = cod.split('/')[0];
    var check_in_date = cid.split('/')[0];

    var cid_day = cid.split('/')[0];
    var cid_month = cid.split('/')[1] - 1;
    var cid_year = "20" + cid.split('/')[2];

    var cod_day = cod.split('/')[0];
    var cod_month = cod.split('/')[1] - 1;
    var cod_year = "20" + cod.split('/')[2];

    var startDate = new Date(cid_year, cid_month, cid_day);
    var EndDate = new Date(cod_year, cod_month, cod_day);

    var startdateNew = new Date(startDate);
    var enddateNew = new Date(EndDate);

    var formattedStartDate = startdateNew.toLocaleDateString('en-US', { weekday: 'long', month: 'short', day: 'numeric', year: 'numeric' });
    var formattedEndDate = enddateNew.toLocaleDateString('en-US', { weekday: 'long', month: 'short', day: 'numeric', year: 'numeric' });

    var eventDate1 = moment(new Date(formattedStartDate)).format('YYYY-MM-DD');
    var eventDate2 = moment(new Date(formattedEndDate)).format('YYYY-MM-DD');
    var date1 = new Date(eventDate1 + 'T10:00:00Z'); //To avoid timezone issues
    var date2 = new Date(eventDate2 + 'T10:00:00Z'); //To avoid timezone issues

    var Difference_In_Time = date2.getTime() - date1.getTime();
    var Difference_In_Days = Difference_In_Time / (1000 * 3600 * 24);

    if (specificPrices[hotelId][eventDate1] != undefined) {
      if (Difference_In_Days < specificPrices[hotelId][eventDate1]["MinLength"] && check_date != "" && check_date != check_in_date && check_in_date != "") {
        closeFlag = true;

        lengthError =
          minLength_error_message +
          " " +
          specificPrices[hotelId][eventDate1]["MinLength"] +
          " " +
          nights_stay_var;
        $('#findRoomModalBtn').attr("disabled", true);
        $('.global-calender-select-date-btn').addClass("disabled");
      }

    }

    if (specificPrices[hotelId][checkDate]["Status"] == "Sold-Out") {

      if (check_date == date.getDate() && check_in_date == date.getDate()) {
        // alert("in");
        closeFlag = false;
        lengthError = '';
        $('#findRoomModalBtn').attr("disabled", true);
        $('.global-calender-select-date-btn').addClass("disabled");

      }
      return {
        content: date.getDate() + specificPrice,
        dateClass: 'showDoY',
        selectable: false
      };
    } else if (specificPrices[hotelId][checkDate]["Status"] == "Only-Check-out" && formattedCheckDate == cid) //thhs is written to make sure the error appers even after user changes the hotel - JAYANT
    {
      if (check_in_date == date.getDate()) {
        // alert("in");

        $('#findRoomModalBtn').attr("disabled", true);
        $('.global-calender-select-date-btn').addClass("disabled");
        closeFlag = true;
        lengthError = 'This date is unavailable as a Check-in Date';
        scroll = $(window).scrollTop();
        if (scroll > 140) {
          window.scrollTo({
            top: 0,
            behavior: 'smooth',
          })

        }
      } else {


        wrongDate = false;
      }
      return {

        content: date.getDate() + specificPrice,
        dateClass: 'showDoY',
      };
    } else if (specificPrices[hotelId][checkDate]["Status"] == "Only-Check-in" && formattedCheckDate == cod) {
      if (check_date == date.getDate()) {
        $('.global-calender-select-date-btn').addClass("disabled");
        $('#findRoomModalBtn').attr("disabled", true);
        closeFlag = true;
        lengthError = 'This date is unavailable as a Check-out Date';
        //console.log("From here again and againss ------------->");

      } else {

        wrongDate = false;
      }
      return {

        content: date.getDate() + specificPrice,
        dateClass: 'showDoY',
      };
    } else {


      return {
        content: date.getDate() + specificPrice,
        dateClass: 'showDoY'
      };
    }
  } else {

    return {
      content: date.getDate() + specificPrice,
      dateClass: 'showDoY'
    };
  }
}


// function reInitialise(year, month, element, flag) {
//     $('#datepick_modal_stay, #datepick-modal-mobile-dropdown').datepick('option', {
//         minDate: new Date(moment().utcOffset(offset).format("YYYY/MM/DD")),
//         onDate: showDayOfYear,
//         defaultDate: '01/' + month + '/' + year
//     });
// }
function reInitialise(year, month, element, flag) {
  loading = false;

  //added to disable the find-room button when a invalid date is selected - JAYANT
  if (wrongDate) {
    $('#datepick_modal_stay, #datepick-modal-mobile-dropdown').datepick('option', {
      //minDate: new Date(moment().utcOffset(offset).format("YYYY/MM/DD")),
      onDate: showDayOfYear,
      defaultDate: '01/' + month + '/' + year,
    });

    $('#findRoomModalBtn').attr("disabled", true);
  } else {

    if (month == 0) {
      month = 1;
      year = 2024;
    }
    $('#datepick_modal_stay, #datepick-modal-mobile-dropdown').datepick('option', {
      //minDate: new Date(moment().utcOffset(offset).format("YYYY/MM/DD")),
      onDate: showDayOfYear,
      defaultDate: '01/' + month + '/' + year,
    });
    $('.global-calender-select-date-btn').removeClass("disabled");
  }

}

function parameter_details() {
  var adult_count = $("#total_adults").val();
  var child_count = $("#total_childs").val();

  //multiroom change pass no of rooms to all parameter_details_widget function
  // var no_of_rooms = $('#table_modal_container table').length;
  var no_of_rooms = $("#room_count").val();
  //multiroom change end

  var code_type = $("#code_type").val();
  if (code_type == null || code_type == "" || code_type == " ")
    code_type = "";

  var code_value = $("#code_value").val();
  if (code_value == null || code_value == "" || code_value == " ")
    code_value = "";

  var iata_value = $("#iata_value").val();
  if (iata_value == null || iata_value == "" || iata_value == " ")
    iata_value = "";

  var start_date_pre = $('#check_in_date').val();
  if (start_date_pre == "" || start_date_pre == null) {
    start_date_pre = moment().subtract(0, 'days');
  } else {
    start_date_pre = moment(start_date_pre, 'DD/MM/YY').format('MM/DD/YYYY');
  }
  var end_date_pre = $('#check_out_date').val();
  if (end_date_pre == "" || end_date_pre == null) {
    end_date_pre = moment();
  } else {
    end_date_pre = moment(end_date_pre, 'DD/MM/YY').format('MM/DD/YYYY');
  }

  var rate_plan_code = $('#rate_plan_code').val();
  if (rate_plan_code == null || rate_plan_code == "" || rate_plan_code == " ")
    rate_plan_code = "";

  // for packages
  var rate_plan_type = $('#rate_plan_type').val();
  if (rate_plan_type == null || rate_plan_type == "" || rate_plan_type == " ")
    rate_plan_type = "";

  return {
    adult_count,
    child_count,
    no_of_rooms,
    code_type,
    code_value,
    iata_value,
    start_date_pre,
    end_date_pre,
    rate_plan_code,
    rate_plan_type
  }

}

//
function select_hotel_event(HotelName, hotelId, prev_hotelId = null) {
  var oldHotelId = $("#hotelid").val(hotelId); // added to disable the find-room button when hotel is changed will dates are selected and then invalid date comes up - JAYANT
  var newHotelId = "";
  $(".hoteldropdownModal .dropdown-item").parents(".hoteldropdownModal").find("a:first-child span").html(HotelName);
  $(".hoteldropdownModal .dropdown-item").parents(".hoteldropdownModal").find("a:nth-child(2) span").html(HotelName);
  $(".hoteldropdownModal .dropdown-item").removeClass("hotel-select-highlight");
  $("#hotel_id").val(hotelId);
  $("#hotel_name").val(HotelName);
  //check offset based on hotel selected
  if (hotelId != 'all') {
    // added to disable the find-room button when hotel is changed will dates are selected and then invalid date comes up - JAYANT
    newHotelId = hotelId;
    if (oldHotelId != newHotelId) {
      hotelChangedForSelectedDates = true;
      hotelChanged = true;
    }
    var offset_data = hotel_timezone_offset.filter(obj => { return obj.IbuId == hotelId });
    closeFlag = false;
    lengthError = "";
    if (offset_data != "") {
      offset = offset_data[0]["timezone_offset"];
    }
    // //console.log("Timezone offset", offset);
    // //console.log("Timezone offset data", offset_data);
  } else {
    offset = minimun_timezone_offset;
    // //console.log("Timezone offset", offset);

  }
  // //console.log(offset);

  if (prev_hotelId != hotelId && prev_hotelId != null) {
    $("#rate_plan_code").val("");
  }
  // initiliaze calender based on min offset value
  var start_date = moment().utcOffset(offset).format("YYYY-MM-DD");
  var start_date_year = moment(start_date, 'YYYY-MM-DD').toDate().getFullYear();
  var start_date_month = moment(start_date, 'YYYY-MM-DD').toDate().getMonth() + 1;
  if (hotelId != "all") {
    loading = true;
    var { adult_count, child_count, no_of_rooms, code_type, code_value, iata_value, start_date_pre, end_date_pre, rate_plan_code, rate_plan_type } = parameter_details();
    var end_date = moment().add(1, 'months').endOf('month').format("YYYY-MM-DD");
    // //console.log(adult_count, child_count, no_of_rooms, code_type, code_value, iata_value, start_date_pre, end_date_pre, rate_plan_code, rate_plan_type);
    if (specificPrices[hotelId] == undefined) {
      //not to  reinitilize the calendar if date is selected - JAYANT
      var cid = document.getElementById("check_in_date").value;
      call_ajax_method(hotelId, adult_count, child_count, no_of_rooms, code_type, code_value, start_date, end_date, rate_plan_code, rate_plan_type, cookiedetailinfo).then((data) => {
        // //console.log(data);
        specificPrices[hotelId] = data;
        if (cid == "") {
          reInitialise(start_date_year, start_date_month, this, false);
          loading = false;
        }
      });
    } else {
      loading = false;
      reInitialise(start_date_year, start_date_month, this, false);
    }
  } else {
    reInitialise(start_date_year, start_date_month, this, false);
  }

  // ajax call to get max rooms for the booking for particular hotel
  // details = {
  //    languageCode: ICL,
  //    IbuId: hotelId
  // }
  // jQuery.ajax({
  //    type: "GET",
  //    url: "/wp-json/hotels/v1/find/max_rooms/",
  //    data: details,
  //    success: function (data) {
  //       if (data["success"]) {
  //          max_rooms = data["data"]["ResponseData"]["MaxRoomsPerBooking"];
  //       }
  //    },
  //    error: function (data) {
  //       //console.log(data)
  //    }
  // });
}

//manage booking--modal(my-dashboard)
$(document).on("click", ".manage-booking.stay", function () {

  hotelId = $(this).attr("data-hotelid");
  HotelName = $(this).attr("data-hotelname");
  checkInDate = new Date($(this).attr('data-cid')).toLocaleDateString('en-AE', {
    year: '2-digit',
    month: '2-digit',
    day: '2-digit'
  });
  checkOutDate = new Date($(this).attr('data-cod')).toLocaleDateString('en-AE', {
    year: '2-digit',
    month: '2-digit',
    day: '2-digit'
  });
  nightDuration = $(this).attr('data-duration') + (($(this).attr('data-duration') == "1") ? nightVar : nightsVar);
  adultCount = $(this).attr("data-adults");
  childCount = $(this).attr("data-children");
  details = sessionStorage.getItem($(this).attr('data-confirmation'));
  // set data to hidden field
  $("#hotel_id").val(hotelId);
  $("#hotel_name").val(HotelName);
  $("#check_in_date").val(checkInDate);
  $("#check_out_date").val(checkOutDate);
  $("#total_adults").val(adultCount);
  $("#total_childs").val(childCount);

  if (childCount != 0) {
    child_text = children_text;
  }
  if (adultCount > 1) {
    adult_text = adults_text;
  }
  string_total_count = adultCount + " " + adult_text + "," + " " + childCount + " " + child_text;
  $("span.count-adult-child").text(string_total_count);
  $('#bookingModalGlobal .navbar .nav-item.hoteldropdownModal').hide();
  $("#bookingModalGlobal #hname").removeClass('d-none');
  $("#bookingModalGlobal #hname span.hotelName").html(HotelName);

  //multiroom change
  // parent_table_id = $('.addRoomsDropdownModal div.adult_minus').closest('table').attr('id');
  parent_table_id = $('.table_modal_container').find('table').attr('id');
  $('#' + parent_table_id).find('span.count_adult').text(adultCount);
  $('#' + parent_table_id).find('span.count_child').text(childCount);
  //if count is more remove disabled class
  if (parseInt(adultCount) > 1) {
    $('.adult_minus_modal').removeClass('disabled');
  }
  if (parseInt(childCount) > 0) {
    $('.child_minus_modal').removeClass('disabled');
  }
  $("#datepick_modal_stay").val(checkInDate + ' - ' + checkOutDate);
  $("#datepick-modal-mobile-dropdown").val(checkInDate + ' - ' + checkOutDate);
  $('.night_var').text(nightDuration);
  $("#hotelDetails").val(details);
  select_hotel_event(HotelName, hotelId);
});

//update booking --modal code starts here
$(document).on("click", ".bookmodal-selectedhotel", function () {

  //multiroom change
  //hide the add room button for manage booking and remove the bottom padding
  $('.addRoomsDropdownModal #table_modal_container table').addClass("mb-0");
  $('.addRoomModal').hide();

  if ($(this).attr('data-bookingtype') == "stay") {
    // //console.log("inside condition")
    $("#bookingModalGlobal .nav-link").addClass('active');
    $("#bookingModalGlobal #pills-Stay").addClass("active");
    $("#bookingModalGlobal #pills-Stay").addClass("show");
    $("#bookingModalGlobal .dine-tab").removeClass("active");
    $("#bookingModalGlobal #pills-Dine").removeClass("active");
    $("#bookingModalGlobal #pills-Dine").removeClass("show");
  }
  hotelId = $(this).attr("data-hotelid");
  HotelName = $(this).attr("data-hotelname");
  checkInDate = $(this).attr("data-cid");
  checkOutDate = $(this).attr("data-cod");
  nightDuration = $(this).attr("data-duration");
  adultCount = $(this).attr("data-adults");
  childCount = $(this).attr("data-children");
  details = $(this).attr("data-string");
  //for packages
  rateplantype = $(this).attr("data-rateplantype");
  rateplancode = $(this).attr("data-rateplancode");

  // set data to hidden field
  $("#hotel_id").val(hotelId);
  $("#hotel_name").val(HotelName);
  $("#check_in_date").val(moment(checkInDate, "DD/MM/YYYY").format('DD/MM/YY'));
  $("#check_out_date").val(moment(checkOutDate, "DD/MM/YYYY").format('DD/MM/YY'));
  $("#total_adults").val(adultCount);
  $("#total_childs").val(childCount);
  $("#hotelDetails").val(details);
  //for packages
  $("#rate_plan_type").val(rateplantype);
  $("#rate_plan_code").val(rateplancode);

  $('#bookingModalGlobal .navbar .nav-item.hoteldropdownModal').hide();
  $("#bookingModalGlobal #hname").removeClass('d-none');
  $("#bookingModalGlobal #hname span.hotelName").html(HotelName);
  //multiroom change
  //parent_table_id = $('.addRoomsDropdownModal div.adult_minus').closest('table').attr('id');
  parent_table_id = $('.table_modal_container').find('table').attr('id');
  $('#' + parent_table_id).find('span.count_adult').text(adultCount);
  $('#' + parent_table_id).find('span.count_child').text(childCount);
  //if count is more remove disabled class
  if (parseInt(adultCount) > 1) {
    $('.adult_minus_modal').removeClass('disabled');
  }
  if (parseInt(childCount) > 0) {
    $('.child_minus_modal').removeClass('disabled');
  }
  //$('#datesField').datepick('setDate', checkInDate, checkOutDate);
  $("#datepick_modal_stay").val(checkInDate + ' - ' + checkOutDate);
  $("#datepick-modal-mobile-dropdown").val(checkInDate + ' - ' + checkOutDate);
  if (parseInt(nightDuration) > 1) {
    var_night = nightsVar;
  } else {
    var_night = nightVar;
  }
  $('.night_var').text(parseInt(nightDuration) + " " + var_night);
  select_hotel_event(HotelName, hotelId);
});

// offer modal code starts here----------------------------------
$(document).on("click", ".offer-booknow-btn", function () {
  $("#bookingModalGlobal .modal-title").html(modal_title);
  var ratePlanCode = $(this).attr("data-rateplancode").trim();
  var offerCode = $(this).attr("data-offercode").trim();
  $("#offer_code").val(offerCode);

  hotelId = $(this).attr("data-hotelid") ? $(this).attr("data-hotelid").trim() : "";
  HotelName = $(this).attr("data-hotelname") ? $(this).attr("data-hotelname").trim() : "";

  var offer = $(this).attr("data-offer") ? $(this).attr("data-offer").trim() : "";
  $("#offer").val(offer);
  var offerStartDate = $(this).attr("data-offerstart");
  var offerEndDate = $(this).attr("data-offerend");
  var offerid = $(this).attr("data-offerid");
  var offertype = $(this).attr("data-offertype") ? $(this).attr("data-offertype").trim() : "";

  $("#bookingModalGlobal #offer_name").removeClass('d-none');
  $("#bookingModalGlobal #offer_name span.offerName").html(offer);

  // hide li fields
  $('#bookingModalGlobal .navbar .nav-item.hoteldropdownModal').hide();
  $('#bookingModalGlobal .navbar .nav-item.codebox').hide();
  if (HotelName != "" || hotelId != 0) {
    $("#bookingModalGlobal #hname").removeClass('d-none');
    $("#bookingModalGlobal #hname span.hotelName").html(HotelName)
    if (offerEndDate != "") {
      $('#datepick_modal_stay, #datepick-modal-mobile-dropdown').datepick('option', {
        minDate: (new Date() <= new Date(offerStartDate)) ? new Date(offerStartDate) : new Date(), //stay offers- Gayathree 7,oct 2022
        maxDate: new Date(offerEndDate),
      });
    }
    var offerCode = $(this).attr("data-offercode");
    $("#offer_code").val(offerCode);
    $("#offer").val(offer);
    $("#offerid").val(offerid);
    $("#offer_start_date").val(offerStartDate);
    $("#offer_end_date").val(offerEndDate);
    $("#rate_plan_code").val(ratePlanCode);
    select_hotel_event(HotelName, hotelId);
  } else {
    $("#bookingModalGlobal #hname").addClass('d-none');
    var offerCode = $(this).attr("data-offercode");
    $("#offer_code").val(offerCode);
    $("#hotel_id").val("");
    $("#hotel_name").val("");
    $("#offerid").val(offerid);
    $("#offer").val(offer);
    $("#rate_plan_code").val("");
    $("#offer_start_date").val(offerStartDate);
    $("#offer_end_date").val(offerEndDate);
    if (offerEndDate != "") {
      $('#datepick_modal_stay, #datepick-modal-mobile-dropdown').datepick('option', {
        minDate: (new Date() <= new Date(offerStartDate)) ? new Date(offerStartDate) : new Date(), //stay offers- Gayathree 7,oct 2022
        maxDate: new Date(offerEndDate),
      });
    }
  }
});

//rooms and suites
$(document).on("click", ".room-book-link", function () {
  //$("#bookingModalGlobal .modal-title").html(modal_title_rooms);
  var roomtypecode = $(this).attr("data-roomtypecode");
  $("#roomtypecode").val(roomtypecode);
});

function resetPromoCode(iata, value, type) {
  if (iata != "") {
    $(".I_Checkbox").prop("checked", true);
    $('.promocodedropdown').find($("div[class*='iatacode_input']")).show();
    $('.promocodedropdown').find($("input[class*='iatacode']")).attr('disabled', 'disabled');
    that = $('.promocodedropdown').find($("input[class*='iatacode']")).closest('div').find("button");
    iata_value = iata;
    code_value = value;
    $(".iatacode").val(iata_value);
    codeValidate(that, iata_value, code_value);
  }
  if (value != "") {
    if (type == "ccode") {
      $(".C_Checkbox").prop("checked", true);
      $('.promocodedropdown').find($("div[class*='corporatecode_input']")).show();
      $('.promocodedropdown').find($("input[class*='corporatecode']")).attr('disabled', 'disabled');
      that = $('.promocodedropdown').find($("input[class*='corporatecode']")).closest('div').find("button");
      iata_value = iata;
      code_value = value;
      $(".corporatecode").val(code_value);
      codeValidate(that, iata_value, code_value);
    } else if (type == "pcode") {
      $(".P_Checkbox").prop("checked", true);
      $('.promocodedropdown').find($("div[class*='promocode_input']")).show();
      $('.promocodedropdown').find($("input[class*='promocode']")).attr('disabled', 'disabled');
      that = $('.promocodedropdown').find($("input[class*='promocode']")).closest('div').find("button");
      iata_value = iata;
      code_value = value;
      $(".promocode").val(code_value);
      codeValidate(that, iata_value, code_value);
    } else if (type == "gcode") {
      $(".G_Checkbox").prop("checked", true);
      $('.promocodedropdown').find($("div[class*='groupcode_input']")).show();
      $('.promocodedropdown').find($("input[class*='groupcode']")).attr('disabled', 'disabled');
      that = $('.promocodedropdown').find($("input[class*='groupcode']")).closest('div').find("button");
      iata_value = iata;
      code_value = value;
      $(".groupcode").val(code_value);
      codeValidate(that, iata_value, code_value);
    }
  }
}


function codeValidate(that, iata_value, code_value) {
  that.closest('div').find('input').addClass("icon-space");
  that.closest('div').find('.trash, .valid').removeClass("d-none");
  that.addClass("d-none");
  if (iata_value != "" && code_value != "" && code_value != undefined &&
    ($('.I_Checkbox').is(":checked") || $('.C_Checkbox').is(":checked") ||
      $('.P_Checkbox').is(":checked") || $('.G_Checkbox').is(":checked"))) {
    $(".modal_apply_btn").parents("li").find("a:first-child span,a:nth-child(2) span").html(codes_applied_var);
  } else {
    $(".modal_apply_btn").parents("li").find("a:first-child span,a:nth-child(2) span").html(code_applied_var);
  }
}


$(document).ready(function () {
  //fetch url parameter
  var urlParams = new URLSearchParams(window.location.search);
  //fetch code and type
  var code = urlParams.get('code');
  var type = urlParams.get('type');

  //if value is not null or empty assign the values in input  type wih id code_value and code_type
  if (code != null && code != "") {
    $("#code_value").val(code);
  }
  if (type != null && type != "") {
    $("#code_type").val(type);
  }
  // get the offset based on hote selected on load
  offset = minimun_timezone_offset;
  if (hotelId != undefined) {
    if (hotelId != 'all') {
      var offset_data = hotel_timezone_offset.filter(obj => { return obj.IbuId == hotelId });
      //if (offset_data.length > 0 ) {

      offset = offset_data[0]["timezone_offset"];
      // //console.log("Timezone offset", offset);
      // //console.log("Timezone offset data", offset_data);
      //}
    }
  }

  // //console.log(preset_hotel_id);
  // //console.log(preset_hotel_name);
  // //console.log(templateName);
  if (ICL == 'ar') {
    $('.global-booking-modal-back-btn i').removeClass('fa-chevron-left').addClass('fa-chevron-right')
  }
  //multiroom change add condition for template
  if (templateName == "templates/rooms-list.php" || templateName == "templates/rooms-list-multiroom.php" || templateName === "templates/error-bookingwidget.php" || templateName === "templates/hotels-list-map.php" || templateName === "templates/hotel-list.php" || templateName === "templates/no-room-available.php") {
    var requestParam = JSON.parse(requestArray);
    hotelId = requestParam.id;
    if (requestParam.hotelname == 0 || requestParam.id == 'all') {
      hotelname = all_hotels_var;
      // if (ICL == 'ar') {
      //     hotelname = "جميع الفنادق";

      // } else {
      //     hotelname = 'All Hotels';
      // }
    } else {
      hotelname = requestParam.hotelname;
    }
    prev_hotelId = preset_hotel_id;
    // for packages
    if (requestParam.rateplancode) {
      $("#rate_plan_code").val(requestParam.rateplancode);
    }
    // for packages
    if (requestParam.prodid) {
      $("#rate_plan_code").val(requestParam.prodid);
      $("#rate_plan_type").val("2");
    }

    if (requestParam.info) {
      cookiedetailinfo = requestParam.info;
    }


    $("#check_in_date").val(requestParam.cid);
    $("#check_out_date").val(requestParam.cod);
    $("#room_count").val(requestParam.rooms);
    $('#datepick-modal-mobile-dropdown').val(
      moment(requestParam.cid, "DD/MM/YY").format('ddd, DD/MM/YYYY') + ' - ' +
      ' ' + moment(requestParam.cod, "DD/MM/YY").format('ddd, DD/MM/YYYY')
    );
    Difference_In_Days = calculateDifferenceInDays(moment(requestParam.cid, "DD/MM/YY").format('YYYY-MM-DD'), moment(requestParam.cod, "DD/MM/YY").format('YYYY-MM-DD'));
    if (Difference_In_Days > 1) {
      var_night = nightsVar;
    } else {
      var_night = nightVar;
    }
    $('.night_var').text(Difference_In_Days + ' ' + var_night);

    if (requestParam.adult > 1) {
      adult_text = adults_text;
    } else {
      adult_text = adult_text
    }
    if (requestParam.child > 1) {
      child_text = children_text;
    } else {
      child_text = child_text
    }
    $("#bfse").val(requestParam.bfse);
    if (requestParam.bfse == 1) {
      $(".book_for_someone_else_chkbox").attr('checked', true);
    } else {
      $(".book_for_someone_else_chkbox").attr('checked', false);
    }

    $('span.count-adult-child').text(requestParam.adult + ' ' + adult_text + ', ' + requestParam.child + ' ' + child_text)
    //multiroom changes
    if (requestParam.rooms > 1) {
      appendTableToModal(parseInt(requestParam.rooms));
    } else {
      $("#total_adults").val(requestParam.adult);
      $("#total_childs").val(requestParam.child);
    }

    select_hotel_event(hotelname, hotelId);
    console.log("total child", requestParam.child);
    parent_table_id = $('.addRoomsDropdownModal.mobile-persons-select').closest('table').attr('id');
    console.log("parent_table_id", parent_table_id);
    $('#' + 'table_modal0').find('span.count_adult').text(requestParam.adult);
    $('#' + 'table_modal0').find('span.count_child').text(requestParam.child);
    resetPromoCode(requestParam.iata, requestParam.code, requestParam.type);
  }

  if (preset_hotel_id.length != 0 && preset_hotel_id != 0) {
    hotelId = preset_hotel_id;
    HotelName = preset_hotel_name;
    select_hotel_event(HotelName, hotelId);
  }

  // select dine tab as default tab in modal
  if (dine_booking_active) {
    $("#bookingModalGlobal .nav-link").removeClass('active');
    $("#bookingModalGlobal #pills-Stay").removeClass("active");
    $("#bookingModalGlobal #pills-Stay").removeClass("show");
    $("#bookingModalGlobal .dine-tab").addClass("active");
    $("#bookingModalGlobal #pills-Dine").addClass("active");
    $("#bookingModalGlobal #pills-Dine").addClass("show");
  }


  var tDays;
  var moNames;
  var isValid;
  var prevIcon = '<i class="fal fa-angle-left calender-icons calender-prev-icon"></i>';
  var nextIcon = '<i class="fal fa-angle-right calender-icons calender-next-icon"></i>';
  moNames = [month_january, month_february, month_march, month_april, month_may, month_june, month_july, month_August, month_september, month_october, month_november, month_december]

  if (ICL == 'ar') {
    tDays = ["أ", "إ", "ث", "أ", "خ", "ج", "س"]
    // moNames = ["يناير", "فبراير", "مارس", "ابريل", "مايو", "يونيو", "يوليو", "اغسطس", "سبتمبر", "اكتوبر", "نوفمبر", "ديسمبر"]
    isValid = true;
    prevIcon = '<i class="fal fa-angle-right calender-icons calender-next-icon"></i>'
    nextIcon = '<i class="fal fa-angle-left calender-icons calender-prev-icon"></i>'
  } else if (ICL == 'tr') {
    tDays = ["Pz", "Pt", "Sa", "Ça", "Pe", "Cu", "Ct"]
    // moNames = ["Ocak", "Şubat", "Mart", "Nisan", "Mayıs", "Haziran", "Temmuz", "Ağustos", "Eylül", "Ekim", "Kasım", "Aralık"]
    isValid = false;
    // prevIcon = '<i class="fal fa-angle-right calender-icons calender-next-icon"></i>'
    // nextIcon = '<i class="fal fa-angle-left calender-icons calender-prev-icon"></i>'
  } else if (ICL == 'de') {
    tDays = ['So.', 'Mo.', 'Di.', 'Mi.', 'Do.', 'Fr.', 'Sa.']
    // moNames = ['Januar', 'Februar', 'März', 'April', 'Mai', 'Juni', 'Juli', 'August', 'September', 'Oktober', 'November', 'Dezember']
    isValid = false;
    prevIcon = '<i class="fal fa-angle-left calender-icons calender-prev-icon"></i>'
    nextIcon = '<i class="fal fa-angle-right calender-icons calender-next-icon"></i>'
  } else if (ICL == 'fr') {
    tDays = ['Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam']
    // moNames = ['janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre']
    isValid = false;
    prevIcon = '<i class="fal fa-angle-left calender-icons calender-prev-icon"></i>'
    nextIcon = '<i class="fal fa-angle-right calender-icons calender-next-icon"></i>'
  } else if (ICL == 'zh-hans') {
    tDays = ['周日', '周一', '周二', '周三', '周四', '周五', '周六']
    // moNames = ['janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre']
    isValid = false;
    prevIcon = '<i class="fal fa-angle-left calender-icons calender-prev-icon"></i>'
    nextIcon = '<i class="fal fa-angle-right calender-icons calender-next-icon"></i>'
  } else if (ICL == 'ru') {
    tDays = ['вс', 'пн', 'вт', 'ср', 'чт', 'пт', 'сб']
    // moNames = ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь']
    isValid = false;
    prevIcon = '<i class="fal fa-angle-left calender-icons calender-prev-icon"></i>'
    nextIcon = '<i class="fal fa-angle-right calender-icons calender-next-icon"></i>'
  } else {
    tDays = ['S', 'M', 'T', 'W', 'T', 'F', 'S']
    // moNames = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December']
    isValid = false;
    // prevIcon = '<i class="fal fa-angle-left calender-icons calender-prev-icon"></i>'
    // nextIcon = '<i class="fal fa-angle-right calender-icons calender-next-icon"></i>'
  }

  $("#bookingModalGlobal").on("click", 'li.datebox', function (e) {
    $("#bookingModalGlobal .modal-title").html(modal_title_rooms);
  });

  // $("#datepick_modal_stay").datepick({
  //     rangeSelect: true,
  //     minDate: new Date(moment().utcOffset(offset).format("YYYY/MM/DD")),
  //     maxDate: '+12m',
  //     monthsToShow: 2,
  //     useMouseWheel: false,
  //     prevText: prevIcon,
  //     todayText: '',
  //     nextText: nextIcon,
  //     popupContainer: "#navbarContent",
  //     dateFormat: 'dd/mm/yyyy',
  //     // dateFormat: 'D, dd/mm/yyyy',
  //     changeMonth: false,
  //     dayNamesMin: tDays,
  //     monthNames: moNames,
  //     firstDay: 1,
  //     showAnim: false,
  //     isRTL: isValid,
  //     defaultDate: new Date(moment().utcOffset(offset).format("YYYY/MM/DD")),
  //     onSelect: function (dates) {
  //         closeFlag = false;
  //         closeCounter = 0;
  //         lengthError = "";
  //         cbstay(dates);
  //     },
  //     onShow: function (picker, inst) {
  //         $("#datefield_modal_stay").removeClass("errorbox");
  //         open(picker, inst);
  //     },
  //     onClose: function (dates) {
  //         if (closeFlag && closeCounter < 2) {
  //             $("#datepick_modal_stay").datepick('show');
  //             closeCounter++;
  //         }
  //     }
  // });

  // $("#datepick-modal-mobile-dropdown").datepick({
  //     useMouseWheel: false,
  //     rangeSelect: true,
  //     //minDate: new Date(),
  //     minDate: new Date(moment().utcOffset(offset).format("YYYY/MM/DD")),
  //     maxDate: '+12m',
  //     monthsToShow: 2,
  //     prevText: prevIcon,
  //     todayText: '',
  //     showAnim: false,
  //     nextText: nextIcon,
  //     popupContainer: "#datepick_modal_stay_inside",
  //     //dateFormat: 'D, dd/mm/yyyy',
  //     dateFormat: 'dd/mm/yyyy',
  //     changeMonth: false,
  //     dayNamesMin: tDays,
  //     monthNames: moNames,
  //     firstDay: 1,
  //     isRTL: isValid,
  //     // onDate: showDayOfYear,
  //     // rangeSelect: true, monthsToShow: [1, 12],
  //     defaultDate: new Date(moment().utcOffset(offset).format("YYYY/MM/DD")),
  //     onSelect: function (dates) {
  //         closeCounter = 0;
  //         closeFlag = false;
  //         lengthError = "";
  //         cbstay(dates);
  //     },
  //     onShow: function (picker, inst) {
  //         $("#datefield_modal_stay").removeClass("errorbox");
  //         open(picker, inst);
  //     },
  //     onClose: function () {
  //         if (closeFlag) {
  //             $("#datepick-modal-mobile-dropdown").datepick('show');
  //         } else {
  //             // $(".global-booking-dropdown-mobile").modal("hide");
  //             $("#datepick-modal-mobile-dropdown").datepick('show');
  //         }

  //     }
  // });
  //added these conditions for showing the selected date range when user re-opnes the calender - JAYANT
  var cid = document.getElementById("check_in_date").value;
  var cod = document.getElementById("check_out_date").value;

  var cid_day = cid.split('/')[0];
  var cid_month = cid.split('/')[1] - 1;
  var cid_year = "20" + cid.split('/')[2];

  var cod_day = cod.split('/')[0];
  var cod_month = cod.split('/')[1] - 1;
  var cod_year = "20" + cod.split('/')[2];

  var startDate = new Date(cid_year, cid_month, cid_day);
  var endDate = new Date(cod_year, cod_month, cod_day);

  if (cid != '' && cod != '') {

    $("#datepick_modal_stay").datepick({
      rangeSelect: true,
      minDate: new Date(moment().utcOffset(offset).format("YYYY/MM/DD")),
      maxDate: '+24m',
      monthsToShow: 2,
      useMouseWheel: false,
      prevText: prevIcon,
      todayText: '',
      nextText: nextIcon,
      alignment: 'top',
      popupContainer: '#navbarContent',
      dateFormat: 'dd/mm/yyyy',
      changeMonth: false,
      dayNamesMin: tDays,
      monthNames: moNames,
      firstDay: 1,
      showAnim: false,
      isRTL: isValid,
      //to change the default behaviour of StartDate - Endate when we change the month -JAYANT
      onChangeMonthYear: function (year, month, instance) {
        // Remove "start" class from first day of new month
        currentMonth = month;
        currentYear = year;
        hotelChangedForSelectedDates = false;
        updateCalendar();


      },

      onSelect: function (dates) {
        closeFlag = false;
        closeCounter = 0;
        lengthError = "";


        //this code is added to resolve the issue of re-selecting the check-in dates when a date is selected and month is changed - JAYANT
        var new_date_cid = document.getElementById("check_in_date").value;
        var new_date_cod = document.getElementById("check_out_date").value;

        if (new_date_cod == new_date_cid && new_date_cid != "") {

          var cid_day_old = new_date_cid.split('/')[0];
          var cid_month_old = new_date_cid.split('/')[1] - 1;
          var cid_year_old = "20" + new_date_cid.split('/')[2];
          var minDate_val = new Date(cid_year_old, cid_month_old, cid_day_old);
          dates[0] = minDate_val;
          old_date_cid = "";
          old_date_cod = "";

          //  $("#datepick_modal_stay").datepick('hide');
        }


        //this code is added to allow the user to re-select check-in date when lesser date is selected - JAYANT

        if (old_date_cid != old_date_cod) {




          negDate = false;
          var cid_day_old = old_date_cid.split('/')[0];
          var cid_month_old = old_date_cid.split('/')[1] - 1;
          var cid_year_old = "20" + old_date_cid.split('/')[2];
          var minDate_val = new Date(cid_year_old, cid_month_old, cid_day_old);

          dates[0] = minDate_val;
          old_date_cid = 0
          old_date_cod = 0;

          $("#datepick_modal_stay").datepick('hide');
        }

        //  //console.log("datepick date : " + dates);
        cbstay(dates);
      },
      onShow: function (picker, inst) {
        $("#datefield_modal_stay").removeClass("errorbox");
        open(picker, inst);
        updateCalendar();

      },
      onClose: function (dates) {
        if (closeFlag && closeCounter < 2) {
          $("#datepick_modal_stay").datepick('show');
          closeCounter++;
        }
      }
      // Add any other options you want to customize your datepicker
    });

    $("#datepick-modal-mobile-dropdown").datepick({
      useMouseWheel: false,
      rangeSelect: true,
      //minDate: new Date(),
      minDate: new Date(moment().utcOffset(offset).format("YYYY/MM/DD")),
      maxDate: '+24m',
      monthsToShow: 2,
      prevText: prevIcon,
      todayText: '',
      showAnim: false,
      nextText: nextIcon,
      popupContainer: "#datepick_modal_stay_inside",
      //dateFormat: 'D, dd/mm/yyyy',
      dateFormat: 'dd/mm/yyyy',
      changeMonth: false,
      dayNamesMin: tDays,
      monthNames: moNames,
      firstDay: 1,
      isRTL: isValid,
      // onDate: showDayOfYear,
      // rangeSelect: true, monthsToShow: [1, 12],
      //to change the default behaviour of StartDate - Endate when we change the month
      onChangeMonthYear: function (year, month, instance) {
        // Remove "start" class from first day of new month
        currentMonth = month;
        currentYear = year;
        hotelChangedForSelectedDates = false;
        updateCalendar();

      },
      onSelect: function (dates) {
        closeCounter = 0;
        closeFlag = false;
        lengthError = "";

        //added to resolve the last date selection issue - JAYANT
        // if(old_date_cod==old_date_cid && old_date_cid!=0)
        // {
        //     var cid_day_old =  old_date_cid.split('/')[0];
        //     var cid_month_old =  old_date_cid.split('/')[1]-1;
        //     var cid_year_old =  "20"+old_date_cid.split('/')[2];
        //     var minDate_val = new Date(cid_year_old, cid_month_old, cid_day_old);
        //     dates[0] = minDate_val;
        //     old_date_cid = 0;
        // }
        // //console.log("datepick date : " + dates);
        cbstay(dates);
      },
      onShow: function (picker, inst) {
        $("#datefield_modal_stay").removeClass("errorbox");
        open(picker, inst);
        updateCalendar();
      },
      onClose: function () {
        if (closeFlag) {
          $("#datepick-modal-mobile-dropdown").datepick('show');
        } else {
          // $(".global-booking-dropdown-mobile").modal("hide");
          $("#datepick-modal-mobile-dropdown").datepick('show');
        }

      }
    });
    // Set default date range
    $('#datepick_modal_stay').datepick('setDate', [startDate, endDate]);
    $('#datepick-modal-mobile-dropdown').datepick('setDate', [startDate, endDate]);
    if (templateName == "templates/rooms-list.php" || templateName == "templates/rooms-list-multiroom.php" || templateName === "templates/error-bookingwidget.php" || templateName === "templates/hotels-list-map.php" || templateName === "templates/hotel-list.php" || templateName === "templates/no-room-available.php") {
      const offerStartDate = $("#offer_start_date").val();
      const offerEndDate = $("#offer_end_date").val();
      if (offerEndDate && offerEndDate.trim() !== '') {
        //set max and min date for mobile date picker
        $('#datepick-modal-mobile-dropdown').datepick('option', {
          minDate: (new Date() <= new Date(offerStartDate)) ? new Date(offerStartDate) : new Date(), //stay offers- Gayathree 7,oct 2022
          maxDate: new Date(offerEndDate),
        });
      }
    }
  } else {

    $("#datepick_modal_stay").datepick({
      rangeSelect: true,
      minDate: new Date(moment().utcOffset(offset).format("YYYY/MM/DD")),
      maxDate: '+24m',
      monthsToShow: 2,
      useMouseWheel: false,
      prevText: prevIcon,
      todayText: '',
      nextText: nextIcon,
      popupContainer: "#navbarContent",
      dateFormat: 'dd/mm/yyyy',
      // dateFormat: 'D, dd/mm/yyyy',
      changeMonth: false,
      dayNamesMin: tDays,
      monthNames: moNames,
      firstDay: 1,
      showAnim: false,
      isRTL: isValid,
      defaultDate: new Date(moment().utcOffset(offset).format("YYYY/MM/DD")),
      //to change the default behaviour of StartDate - Endate when we change the month
      onChangeMonthYear: function (year, month, instance) {
        // Remove "start" class from first day of new month
        currentMonth = month;
        currentYear = year;
        hotelChangedForSelectedDates = false;
        updateCalendar();

      },
      //added to resolve the last date selection issue - JAYANT
      onSelect: function (dates) {
        closeFlag = false;
        closeCounter = 0;
        lengthError = "";

        // if(old_date_cod==old_date_cid && old_date_cid!=0  && old_date_cod!=0)
        // {


        //     var cid_day_old =  old_date_cid.split('/')[0];
        //     var cid_month_old =  old_date_cid.split('/')[1]-1;
        //     var cid_year_old =  "20"+old_date_cid.split('/')[2];
        //     var minDate_val = new Date(cid_year_old, cid_month_old, cid_day_old);
        //     dates[0] = minDate_val;
        //     old_date_cid=0;
        //     old_date_cod=0;

        // }
        //this code is added to resolve the issue of re-selecting the check-in dates when a date is selected and month is changed - JAYANT
        var new_date_cid = document.getElementById("check_in_date").value;
        var new_date_cod = document.getElementById("check_out_date").value;

        if (new_date_cod == new_date_cid && new_date_cid != "") {

          var cid_day_old = new_date_cid.split('/')[0];
          var cid_month_old = new_date_cid.split('/')[1] - 1;
          var cid_year_old = "20" + new_date_cid.split('/')[2];
          var minDate_val = new Date(cid_year_old, cid_month_old, cid_day_old);
          dates[0] = minDate_val;
          old_date_cid = "";
          old_date_cod = "";

          //  $("#datepick_modal_stay").datepick('hide');
        }


        //this code is added to allow the user to re-select check-in date when lesser date is selected - JAYANT

        if (old_date_cid != old_date_cod) {




          negDate = false;
          var cid_day_old = old_date_cid.split('/')[0];
          var cid_month_old = old_date_cid.split('/')[1] - 1;
          var cid_year_old = "20" + old_date_cid.split('/')[2];
          var minDate_val = new Date(cid_year_old, cid_month_old, cid_day_old);

          dates[0] = minDate_val;
          old_date_cid = 0
          old_date_cod = 0;

          $("#datepick_modal_stay").datepick('hide');
        }

        ////console.log("datepick date : " + dates);
        cbstay(dates);
      },
      onShow: function (picker, inst) {
        $("#datefield_modal_stay").removeClass("errorbox");
        open(picker, inst);
        updateCalendar();
      },
      onClose: function (dates) {
        if (closeFlag && closeCounter < 2) {
          $("#datepick_modal_stay").datepick('show');
          closeCounter++;
        }
      }
    });

    $("#datepick-modal-mobile-dropdown").datepick({
      useMouseWheel: false,
      rangeSelect: true,
      //minDate: new Date(),
      minDate: new Date(moment().utcOffset(offset).format("YYYY/MM/DD")),
      maxDate: '+24m',
      monthsToShow: 2,
      prevText: prevIcon,
      todayText: '',
      showAnim: false,
      nextText: nextIcon,
      popupContainer: "#datepick_modal_stay_inside",
      //dateFormat: 'D, dd/mm/yyyy',
      dateFormat: 'dd/mm/yyyy',
      changeMonth: false,
      dayNamesMin: tDays,
      monthNames: moNames,
      firstDay: 1,
      isRTL: isValid,
      // onDate: showDayOfYear,
      // rangeSelect: true, monthsToShow: [1, 12],
      defaultDate: new Date(moment().utcOffset(offset).format("YYYY/MM/DD")),
      //to change the default behaviour of StartDate - Endate when we change the month
      onChangeMonthYear: function (year, month, instance) {
        // Remove "start" class from first day of new month
        currentMonth = month;
        currentYear = year;
        hotelChangedForSelectedDates = false;
        updateCalendar();

      },
      //added to resolve the last date selection issue - JAYANT
      onSelect: function (dates) {
        closeCounter = 0;
        closeFlag = false;
        lengthError = "";

        //this code is added to resolve the issue of re-selecting the check-in dates when a date is selected and month is changed - JAYANT
        var new_date_cid = document.getElementById("check_in_date").value;
        var new_date_cod = document.getElementById("check_out_date").value;

        if (new_date_cod == new_date_cid && new_date_cid != "") {

          var cid_day_old = new_date_cid.split('/')[0];
          var cid_month_old = new_date_cid.split('/')[1] - 1;
          var cid_year_old = "20" + new_date_cid.split('/')[2];
          var minDate_val = new Date(cid_year_old, cid_month_old, cid_day_old);
          dates[0] = minDate_val;
          old_date_cid = "";
          old_date_cod = "";

          //  $("#datepick_modal_stay").datepick('hide');
        }


        //this code is added to allow the user to re-select check-in date when lesser date is selected - JAYANT

        if (old_date_cid != old_date_cod) {

          negDate = false;
          var cid_day_old = old_date_cid.split('/')[0];
          var cid_month_old = old_date_cid.split('/')[1] - 1;
          var cid_year_old = "20" + old_date_cid.split('/')[2];
          var minDate_val = new Date(cid_year_old, cid_month_old, cid_day_old);

          dates[0] = minDate_val;
          old_date_cid = 0
          old_date_cod = 0;

          //$("#datepick_modal_stay").datepick('hide');
        }

        ////console.log("datepick date : " + dates);
        cbstay(dates);
      },
      onShow: function (picker, inst) {
        $("#datefield_modal_stay").removeClass("errorbox");
        open(picker, inst);
        updateCalendar();
      },
      onClose: function () {
        if (closeFlag) {
          $("#datepick-modal-mobile-dropdown").datepick('show');
        } else {
          // $(".global-booking-dropdown-mobile").modal("hide");
          $("#datepick-modal-mobile-dropdown").datepick('show');
        }

      }
    });
  }

  //this function removes the default behaviour of the calender that selects firstDate and LastDate of the months automatically - JAYANT
  function updateCalendar() {

    var cid = document.getElementById("check_in_date").value;
    var cod = document.getElementById("check_out_date").value;

    var cid_day = cid.split('/')[0];
    var cid_month = cid.split('/')[1] - 1;
    var cid_year = "20" + cid.split('/')[2];

    var cod_day = cod.split('/')[0];
    var cod_month = cod.split('/')[1] - 1;
    var cod_year = "20" + cod.split('/')[2];

    var startDate = new Date(cid_year, cid_month, cid_day);

    var startdateNew = new Date(startDate);
    var formattedStartDate = startdateNew.toLocaleDateString('en-US', { weekday: 'long', month: 'short', day: 'numeric', year: 'numeric' });
    formattedStartDate = "Select " + formattedStartDate;


    ////console.log("Date -> " +formattedStartDate);

    var endDate = new Date(cod_year, cod_month, cod_day);
    var enddateNew = new Date(endDate);
    var formattedEndDate = enddateNew.toLocaleDateString('en-US', { weekday: 'long', month: 'short', day: 'numeric', year: 'numeric' });
    formattedEndDate = "Select " + formattedEndDate;

    const tdElements = document.querySelectorAll('a.start');

    tdElements.forEach(td => {

      ////console.log("Title -> " + td.getAttribute('title'));

      if (td.getAttribute('title') != formattedStartDate) {

        // //console.log('inisde');
        td.parentNode.classList.remove('datepick-selected-td-first');
        //    td.classList.remove('datepick-selected');
        td.classList.remove('start');


      }
    });
    const tdendElements = document.querySelectorAll('a.end');

    tdendElements.forEach(td => {

      // //console.log("End Title -> " + td.getAttribute('title'));

      if (td.getAttribute('title') != formattedEndDate) {

        // //console.log('inisde end');
        td.parentNode.classList.remove('datepick-selected-td-last');
        td.classList.remove('end');

      }
    });





  }

  //calculate difference between two dates in days
  function calculateDifferenceInDays(start, end) {
    eventDate1 = moment(new Date(start)).format('YYYY-MM-DD');
    eventDate2 = moment(new Date(end)).format('YYYY-MM-DD');
    var date1 = new Date(eventDate1 + 'T10:00:00Z'); //To avoid timezone issues
    var date2 = new Date(eventDate2 + 'T10:00:00Z'); //To avoid timezone issues
    var Difference_In_Time = date2.getTime() - date1.getTime();
    Difference_In_Days = Difference_In_Time / (1000 * 3600 * 24);
    return Difference_In_Days;
  }



  // function cbstay(dates) {
  //     start = dates[0];
  //     end = dates[1];
  //     var negDate = false;
  //     var eventDate3 = moment(new Date(start)).format('DD/MM/YYYY');
  //     var eventDate4 = moment(new Date(end)).format('DD/MM/YYYY');

  //     Difference_In_Days = calculateDifferenceInDays(start, end);
  //     var minLength = 0;
  //     var maxLength = 0;

  //     // if (hotelId != 'all' && typeof (specificPrices[hotelId]) != 'undefined') {

  //     //     // Condition to check for selecting Check-in date i.e. start date
  //     //     if (dates[0] != '' && dates[0] == dates[1]) {

  //     //         // Else write a condition where if the start date is not selected then disable the check-out date
  //     //         if (specificPrices[hotelId][eventDate1] && specificPrices[hotelId][eventDate1]['Status'] == 'Only-Check-out') {

  //     //             //console.log('inside check-out');
  //     //             closeFlag = true;
  //     //             // lengthErrorWidget = checkIn_error_message;
  //     //             lengthError = 'This date is unavailable as a Check-in date';
  //     //             $('#findRoomModalBtn').attr("disabled", true);

  //     //         } else {

  //     //             $('#findRoomModalBtn').attr("disabled", false);

  //     //         }

  //     //     }

  //     //     // Condition to check the minimum length and Check-out i.e. end date
  //     //     if (dates[1] != '' && dates[1] != dates[0]) {

  //     //         $("#datepick_modal_stay").val(eventDate3 + " - " +eventDate4);
  //     //         $("#datepick-modal-mobile-dropdown").val(eventDate3 + " - " +eventDate4);


  //     //         if (specificPrices[hotelId][eventDate2] && specificPrices[hotelId][eventDate2]['Status'] == 'Only-Check-in') {

  //     //             //console.log('inside check-in');
  //     //             closeFlag = true;
  //     //             // lengthErrorWidget = checkIn_error_message;
  //     //             lengthError = 'This date is unavailable as a Check-out date';
  //     //             $('#findRoomModalBtn').attr("disabled", true);

  //     //         } else if (specificPrices[hotelId][eventDate1]["MinLength"] != 0 ) {

  //     //             if (Difference_In_Days < specificPrices[hotelId][eventDate1]["MinLength"]) {
  //     //                 closeFlag = true;
  //     //                 lengthError = minLength_error_message + " " + specificPrices[hotelId][eventDate1]["MinLength"] + " " + nights_stay_var;
  //     //                 // $('#findroom').attr("disabled");
  //     //                 $('#findRoomModalBtn').attr("disabled", true);
  //     //             } else {
  //     //                 $('#findRoomModalBtn').attr("disabled", false);
  //     //             }

  //     //         } else {
  //     //             $('#findRoomModalBtn').attr("disabled", false);
  //     //         }

  //     //     }

  //     // }

  //     if (hotelId != 'all' && typeof (specificPrices[hotelId]) != 'undefined') {

  //         // Condition to check for selecting Check-in date i.e. start date
  //         if (dates[0] != '' && dates[0] == dates[1]) {

  //             $("#datepick_modal_stay").val(eventDate3 + " - Check Out");
  //             $("#datepick-modal-mobile-dropdown").val(eventDate3 + " - Check Out");
  //             $("#datepick_modal_stay_mobile").val(eventDate3 + " - Check Out");

  //             // Else write a condition where if the start date is not selected then disable the check-out date
  //             if (specificPrices[hotelId][eventDate1] && specificPrices[hotelId][eventDate1]['Status'] == 'Only-Check-out') {

  //                 //console.log('inside check-out');
  //                 closeFlag = true;
  //                 // lengthErrorWidget = checkIn_error_message;
  //                 lengthError = 'This date is unavailable as a Check-in date';
  //                 $('#findRoomModalBtn').attr("disabled", true);
  //                 $('#findroom').attr("disabled", true);

  //                 wrongDate = true;
  //                 $("#check_in_date").val();
  //                 $("#check_out_date").val();

  //             } else {

  //                 $('#findRoomModalBtn').attr("disabled", false);

  //             }

  //         }

  //         // Condition to check the minimum length and Check-out i.e. end date
  //         if (dates[1] != '' && dates[1] != dates[0]) {

  //             $("#datepick_modal_stay").val(eventDate3 + " - " +eventDate4);
  //             $("#datepick-modal-mobile-dropdown").val(eventDate3 + " - " +eventDate4);
  //             $("#datepick_modal_stay_mobile").val(eventDate3 + " - " +eventDate4);
  //             if (specificPrices[hotelId][eventDate1] && specificPrices[hotelId][eventDate1]['Status'] == 'Only-Check-out') {

  //                 //console.log('inside check-out');
  //                 closeFlag = true;
  //                 // lengthErrorWidget = checkIn_error_message;
  //                 lengthError = 'This date is unavailable as a Check-in date';
  //                 $('#findRoomModalBtn').attr("disabled", true);
  //                 $('#findroom').attr("disabled", true);

  //                 wrongDate = true;
  //                 $("#check_in_date").val();
  //                 $("#check_out_date").val();

  //             } else {

  //                 $('#findRoomModalBtn').attr("disabled", false);
  //                 if (specificPrices[hotelId][eventDate2] && specificPrices[hotelId][eventDate2]['Status'] == 'Only-Check-in') {

  //                     //console.log('inside check-in');
  //                     closeFlag = true;
  //                     // lengthErrorWidget = checkIn_error_message;
  //                     lengthError = 'This date is unavailable as a Check-out date';
  //                     $('#findRoomModalBtn').attr("disabled", true);

  //                 } else if (hotelId != 'all' && typeof (specificPrices[hotelId]) != 'undefined' && specificPrices[hotelId][eventDate1]) {

  //                     if (Difference_In_Days < specificPrices[hotelId][eventDate1]["MinLength"]) {
  //                         closeFlag = true;
  //                         //negDate =  true;
  //                         lengthError = minLength_error_message + " " + specificPrices[hotelId][eventDate1]["MinLength"] + " " + nights_stay_var;
  //                         //lengthError =  "Please select a valid dates";
  //                         // $('#findroom').attr("disabled");
  //                         $('#findRoomModalBtn').attr("disabled", true);
  //                     } else {
  //                         $('#findRoomModalBtn').attr("disabled", false);
  //                     }



  //                 } else {
  //                     $('#findRoomModalBtn').attr("disabled", false);
  //                 }
  //             }


  //         }

  //     }
  //     else
  //     {
  //         // Condition to check for selecting Check-in date i.e. start date
  //         if (dates[0] != '' && dates[0] == dates[1]) {

  //             $("#datepick_modal_stay").val(eventDate3 + " - Check Out");
  //             $("#datepick-modal-mobile-dropdown").val(eventDate3 + " - Check Out");
  //             $("#datepick_modal_stay_mobile").val(eventDate3 + " - Check Out");
  //         }

  //         // Condition to check the minimum length and Check-out i.e. end date
  //         if (dates[1] != '' && dates[1] != dates[0]) {

  //             $("#datepick_modal_stay").val(eventDate3 + " - " +eventDate4);
  //             $("#datepick-modal-mobile-dropdown").val(eventDate3 + " - " +eventDate4);

  //             $("#datepick_modal_stay_mobile").val(eventDate3 + " - " +eventDate4);



  //         }
  //     }
  //     if ((dates[1] != dates[0] && dates[1] != '') && !closeFlag) {
  //         $(".global-calender-select-date-btn").css('pointer-events', 'auto');
  //         $(".global-calender-select-date-btn").removeClass("disabled");
  //         $(".global-calender-select-date-btn").html(select_these_dates_var);
  //         $('.global-calender-select-date-btn').show();
  //     } else {
  //         $(".global-calender-select-date-btn").css('pointer-events', 'none');
  //         $(".global-calender-select-date-btn").addClass("disabled");
  //         $(".global-calender-select-date-btn").html(select_a_checkout_date_var);
  //         $('.global-calender-select-date-btn').show();
  //     }
  //     var close_icon = '<i class="fal fa-times"></i>';
  //     var_night = Difference_In_Days > 1 ? nightsVar : nightVar;
  //     //$("#datepick_modal_stay_mobile").val(moment(new Date(start)).format("DD/MM/YYYY") + " - " + moment(new Date(end)).format("DD/MM/YYYY"));
  //     if(negDate)
  //     {
  //         $('.night_var').text('0 ' + var_night);

  //         $("#datepick_modal_stay").val("Check In - Check Out");
  //         $("#datepick-modal-mobile-dropdown").val("Check In - Check Out");
  //         $("#datepick_modal_stay_mobile").val("Check In - Check Out");

  //         $("#check_in_date").val();
  //         $("#check_out_date").val();

  //        // $("#datepick-modal-mobile-dropdown").datepick("show");
  //         //$("#datepick_modal_stay").datepick("show");
  //         var newYear = eventDate3.split('/')[2];
  //         var newMonth = eventDate3.split('/')[1];

  //         reInitialise(newYear,newMonth);

  //     }
  //     else
  //     {
  //         $('.night_var').text(Difference_In_Days + ' ' + var_night);
  //         $("#check_in_date").val(moment(new Date(start)).format("DD/MM/YY"));
  //         $("#check_out_date").val(moment(new Date(end)).format("DD/MM/YY"));
  //     }

  //     setTimeout(datePickTodayRemove, 100);
  // }
  function cbstay(dates) {
    start = dates[0];
    end = dates[1];
    var negDate = false;
    var eventDate3 = moment(new Date(start)).format('DD/MM/YYYY');
    var eventDate4 = moment(new Date(end)).format('DD/MM/YYYY');

    Difference_In_Days = calculateDifferenceInDays(start, end);
    var minLength = 0;
    var maxLength = 0;

    // if (hotelId != 'all' && typeof (specificPrices[hotelId]) != 'undefined') {

    //     // Condition to check for selecting Check-in date i.e. start date
    //     if (dates[0] != '' && dates[0] == dates[1]) {

    //         // Else write a condition where if the start date is not selected then disable the check-out date
    //         if (specificPrices[hotelId][eventDate1] && specificPrices[hotelId][eventDate1]['Status'] == 'Only-Check-out') {

    //             //console.log('inside check-out');
    //             closeFlag = true;
    //             // lengthErrorWidget = checkIn_error_message;
    //             lengthError = 'This date is unavailable as a Check-in date';
    //             $('#findRoomModalBtn').attr("disabled", true);

    //         } else {

    //             $('#findRoomModalBtn').attr("disabled", false);

    //         }

    //     }

    //     // Condition to check the minimum length and Check-out i.e. end date
    //     if (dates[1] != '' && dates[1] != dates[0]) {

    //         $("#datepick_modal_stay").val(eventDate3 + " - " +eventDate4);
    //         $("#datepick-modal-mobile-dropdown").val(eventDate3 + " - " +eventDate4);


    //         if (specificPrices[hotelId][eventDate2] && specificPrices[hotelId][eventDate2]['Status'] == 'Only-Check-in') {

    //             //console.log('inside check-in');
    //             closeFlag = true;
    //             // lengthErrorWidget = checkIn_error_message;
    //             lengthError = 'This date is unavailable as a Check-out date';
    //             $('#findRoomModalBtn').attr("disabled", true);

    //         } else if (specificPrices[hotelId][eventDate1]["MinLength"] != 0 ) {

    //             if (Difference_In_Days < specificPrices[hotelId][eventDate1]["MinLength"]) {
    //                 closeFlag = true;
    //                 lengthError = minLength_error_message + " " + specificPrices[hotelId][eventDate1]["MinLength"] + " " + nights_stay_var;
    //                 // $('#findroom').attr("disabled");
    //                 $('#findRoomModalBtn').attr("disabled", true);
    //             } else {
    //                 $('#findRoomModalBtn').attr("disabled", false);
    //             }

    //         } else {
    //             $('#findRoomModalBtn').attr("disabled", false);
    //         }

    //     }

    // }


    if (hotelId != "all" && typeof specificPrices[hotelId] != "undefined") {
      // Condition to check for selecting Check-in date i.e. start date
      if (dates[0] != "" && dates[0] == dates[1]) {
        $("#datepick_modal_stay").val(eventDate3 + " - Check Out");
        $("#datepick-modal-mobile-dropdown").val(eventDate3 + " - Check Out");
        $("#datepick_modal_stay_mobile").val(eventDate3 + " - Check Out");

        // Else write a condition where if the start date is not selected then disable the check-out date
        if (
          specificPrices[hotelId][eventDate1] &&
          specificPrices[hotelId][eventDate1]["Status"] == "Only-Check-out"
        ) {
          // //console.log("inside check-out");
          closeFlag = true;
          // lengthErrorWidget = checkIn_error_message;
          lengthError = "This date is unavailable as a Check-in date";
          $("#findRoomModalBtn").attr("disabled", true);
          $("#findroom").attr("disabled", true);
          $('.global-calender-select-date-btn').addClass("disabled");

          //added to disable the find-room button when a invalid date is selected - JAYANT
          wrongDate = true;
          if (dates[1] < dates[0]) {
            negDate = true;
          }
          $("#check_in_date").val();
          $("#check_out_date").val();
        } else {
          wrongDate = false;
          $("#findRoomModalBtn").attr("disabled", false);
          $('.global-calender-select-date-btn').removeClass("disabled");
        }
      }

      // Condition to check the minimum length and Check-out i.e. end date
      if (dates[1] != "" && dates[1] != dates[0]) {
        $("#datepick_modal_stay").val(eventDate3 + " - " + eventDate4);
        $("#datepick-modal-mobile-dropdown").val(
          eventDate3 + " - " + eventDate4
        );
        $("#datepick_modal_stay_mobile").val(eventDate3 + " - " + eventDate4);
        if (
          specificPrices[hotelId][eventDate1] &&
          specificPrices[hotelId][eventDate1]["Status"] == "Only-Check-out"
        ) {
          // //console.log("inside check-out");
          closeFlag = true;
          // lengthErrorWidget = checkIn_error_message;
          lengthError = "This date is unavailable as a Check-in date";
          $("#findRoomModalBtn").attr("disabled", true);
          $("#findroom").attr("disabled", true);
          $('.global-calender-select-date-btn').addClass("disabled");

          //added to disable the find-room button when a invalid date is selected - JAYANT
          wrongDate = true;
          if (dates[1] < dates[0]) {

            negDate = true;
          }
          $("#check_in_date").val();
          $("#check_out_date").val();
        } else {
          wrongDate = false;
          $("#findRoomModalBtn").attr("disabled", false);
          $('.global-calender-select-date-btn').removeClass("disabled");
          if (
            specificPrices[hotelId][eventDate2] &&
            specificPrices[hotelId][eventDate2]["Status"] == "Only-Check-in"
          ) {
            ////console.log("inside check-in");
            closeFlag = true;
            // lengthErrorWidget = checkIn_error_message;
            $("#datepick_modal_stay").datepick('option', {
              onClose: function () {
                $("#datepick_modal_stay").datepick('show');
              }
            });
            lengthError = "This date is unavailable as a Check-out date";

            $("#findRoomModalBtn").attr("disabled", true);
            $('.global-calender-select-date-btn').addClass("disabled");
            $("#datepick_modal_stay").datepick('option', {
              onClose: function () {
                if (closeCounter < 2) {
                  $("#datepick_modal_stay").datepick('show');
                  closeCounter++;
                }

              }
            });
            if (dates[1] < dates[0]) {
              negDate = true;
            }
          } else if (
            hotelId != "all" &&
            typeof specificPrices[hotelId] != "undefined" &&
            specificPrices[hotelId][eventDate1]
          ) {
            if (
              Difference_In_Days <
              specificPrices[hotelId][eventDate1]["MinLength"]
            ) {
              //  //console.log("inside if");
              closeFlag = true;

              lengthError =
                minLength_error_message +
                " " +
                specificPrices[hotelId][eventDate1]["MinLength"] +
                " " +
                nights_stay_var;
              if (dates[1] < dates[0]) {
                negDate = true; //this is added when ever the checkout date is selected as a lesser date than the current selected date - JAYANT
              }

              $('.global-calender-select-date-btn').addClass("disabled");
              $("#findRoomModalBtn").attr("disabled", true);
            } else {
              //  //console.log("inside else if");

              if (Difference_In_Days > 30) {
                maxDateError = true;
              }
              $("#findroom").attr("disabled", false);
              $('.global-calender-select-date-btn').removeClass("disabled");
            }
          } else {
            //console.log("inside else");
            $("#findRoomModalBtn").attr("disabled", false);
            $('.global-calender-select-date-btn').removeClass("disabled");
          }
        }
      }
    } else {
      // Condition to check for selecting Check-in date i.e. start date
      if (dates[0] != "" && dates[0] == dates[1]) {
        $("#datepick_modal_stay").val(eventDate3 + " - Check Out");
        $("#datepick-modal-mobile-dropdown").val(eventDate3 + " - Check Out");
        $("#datepick_modal_stay_mobile").val(eventDate3 + " - Check Out");
      }

      // Condition to check the minimum length and Check-out i.e. end date
      if (dates[1] != "" && dates[1] != dates[0]) {
        $("#datepick_modal_stay").val(eventDate3 + " - " + eventDate4);
        $("#datepick-modal-mobile-dropdown").val(
          eventDate3 + " - " + eventDate4
        );

        $("#datepick_modal_stay_mobile").val(eventDate3 + " - " + eventDate4);
        if (dates[1] < dates[0]) {
          negDate = true;

        } else {
          //alert('else');
          $("#datepick_modal_stay").datepick('option', {
            onClose: function () {
              $("#datepick_modal_stay").datepick('hide');
            }
          });



        }
      }
    }
    if ((dates[1] != dates[0] && dates[1] != '') && !closeFlag) {
      $(".global-calender-select-date-btn").css('pointer-events', 'auto');
      $(".global-calender-select-date-btn").removeClass("disabled");
      $(".global-calender-select-date-btn").html(select_these_dates_var);
      $('.global-calender-select-date-btn').show();
    } else {
      $(".global-calender-select-date-btn").css('pointer-events', 'none');
      $(".global-calender-select-date-btn").addClass("disabled");
      $(".global-calender-select-date-btn").html(select_a_checkout_date_var);
      $('.global-calender-select-date-btn').show();
    }
    var close_icon = '<i class="fal fa-times"></i>';
    var_night = Difference_In_Days > 1 ? nightsVar : nightVar;
    //$("#datepick_modal_stay_mobile").val(moment(new Date(start)).format("DD/MM/YYYY") + " - " + moment(new Date(end)).format("DD/MM/YYYY"));
    if (negDate) {

      $('.night_var').text('0 ' + var_night);

      $("#datepick_modal_stay").val(eventDate4 + " - Check Out");
      $("#datepick-modal-mobile-dropdown").val(eventDate4 + " - Check Out");
      $("#datepick_modal_stay_mobile").val(eventDate4 + " - Check Out");

      $("#check_in_date").val(moment(new Date(end)).format("DD/MM/YY"));
      $("#check_out_date").val('');

      $("#datepick_modal_stay").datepick('option', {
        onClose: function () {
          if (closeCounter < 2) {
            $("#datepick_modal_stay").datepick('show');
            closeCounter++;
          }

        }
      });
      $("#datepick-modal-mobile-dropdown").datepick('option', {
        onClose: function () {
          if (closeCounter < 2) {
            $("#datepick-modal-mobile-dropdown").datepick('show');
            closeCounter++;
          }
        }
      });

      closeFlag = false;
      lengthError = '';
      wrongDate = false;


    } else {
      $('.night_var').text(Difference_In_Days + ' ' + var_night);
      $("#check_in_date").val(moment(new Date(start)).format("DD/MM/YY"));
      $("#check_out_date").val(moment(new Date(end)).format("DD/MM/YY"));

      if (old_date_cid != old_date_cod) {

        $("#datepick_modal_stay").datepick('option', {
          onClose: function () {
            $("#datepick_modal_stay").datepick('hide');
          }
        });

      }
    }

    setTimeout(datePickTodayRemove, 100);
  }

  function datePickTodayRemove() {
    $(".datepick-popup .datepick-today").removeClass("today");
    // $(".global-booking-dropdown-mobile").modal("hide");
  }


  function open(picker, inst) {




    //highlight only today's date

    if (moment(inst.curMinDate()).month() != moment(inst.drawDate).month()) {

      var cid = document.getElementById("check_in_date").value;
      var cid_month = cid.split('/')[1] - 1;
      var cid_year = "20" + cid.split('/')[2];

      var second_month_start_moment = moment(inst.drawDate).add(1, 'months').startOf('month');
      var second_month_start_formatted = second_month_start_moment.format("YYYY-MM-DD");
      var insideHotelChanged = false;
      var second_month_start_formatted_year = second_month_start_formatted.split('-')[0];
      var second_month_start_formatted_month = second_month_start_formatted.split('-')[1] - 1;
      var second_month_start_formatted_day = second_month_start_formatted.split('-')[2];
      var new_second_month_start_formatted = second_month_start_formatted_year + "-" + "0" + second_month_start_formatted_month + "-" + second_month_start_formatted_day;
      var second_month_end_date = moment(inst.drawDate).add(1, 'months').endOf('month').format("YYYY-MM-DD");


      //alert(second_month_start_formatted);
      if (second_month_start_formatted_month >= 10) {

        new_second_month_start_formatted = second_month_start_formatted_year + "-" + second_month_start_formatted_month + "-" + second_month_start_formatted_day;
      }

      if (second_month_start_formatted_month == 0) {
        second_month_start_formatted_year = second_month_start_formatted_year - 1;
        new_second_month_start_formatted = second_month_start_formatted_year + "-12-" + second_month_start_formatted_day;
      }

      // added to disable the find-room button when hotel is changed will dates are selected and then invalid date comes up - JAYANT
      if (hotelChanged && cid != "") {

        $('#findRoomModalBtn').attr("disabled", false);
        insideHotelChanged = true;
        hotelChanged = false;
      }


      var timedout_executed = 0;
      var timeout;
      var specificprices_storage = [];
      if (hotelId != "all" && typeof (specificPrices[hotelId]) != 'undefined' && (specificPrices[hotelId][new_second_month_start_formatted] == undefined || specificPrices[hotelId][second_month_start_formatted] == undefined) || insideHotelChanged) {
        //loading = true;
        var { adult_count, child_count, no_of_rooms, code_type, code_value, no_of_rooms, iata_value, start_date_pre, end_date_pre, rate_plan_code, rate_plan_type } = parameter_details();
        var second_month_end_date = moment(inst.drawDate).add(1, 'months').endOf('month').format("YYYY-MM-DD");

        //    if (specificPrices[hotelId][first_month_start_date_formatted] != undefined) {
        //       start_of_month = second_month_start_formatted;
        //   } else {
        //       start_of_month = first_month_start_date_formatted;
        //   }
        var reInitialise_year = second_month_start_moment.toDate().getMonth() == 0 ? second_month_start_moment.toDate().getFullYear() - 1 : second_month_start_moment.toDate().getFullYear();
        var reInitialise_month = second_month_start_moment.toDate().getMonth() == 0 ? 12 : second_month_start_moment.toDate().getMonth();

        //added to resolve the last date selection issue - JAYANT
        old_date_cid = document.getElementById("check_in_date").value;
        old_date_cod = document.getElementById("check_out_date").value;

        if (insideHotelChanged) {

          reInitialise_month = reInitialise_month - 1;
          insideHotelChanged = false;
        }
        if (reInitialise_month == 0) {
          reInitialise_month = 12;
          reInitialise_year = reInitialise_year - 1;
        }
        //   Multiroom changes
        var currentdate = new Date();
        //console.log("Old Time " + currentdate.getHours() + ":" + currentdate.getMinutes() + ":" + currentdate.getSeconds() + ":" + currentdate.getMilliseconds());
        call_ajax_method(hotelId, adult_count, child_count, no_of_rooms, code_type, code_value, new_second_month_start_formatted, second_month_end_date, rate_plan_code, rate_plan_type, cookiedetailinfo).then((data) => {
          var newdate = new Date();
          //console.log("New Time " + newdate.getHours() + ":" + newdate.getMinutes() + ":" + newdate.getSeconds() + ":" + newdate.getMilliseconds());
          if (data["success"] == false) {
            //console.log('inside call_ajax_method second else');
            loading = false;
            picker.append("");
            $('.currency_type').hide();
            picker.find('.datepick-nav .datepick-cmd-next').attr("data-disabled", false);
          }
          else {
            Object.entries(data).map(([key, value]) => specificPrices[hotelId][key] = value);
            loading = false;
            clearTimeout(timeout);
            //if(timedout_executed==0)
            if (!isNaN(cid_month)) {
              if (hotelChangedForSelectedDates) {
                currentMonth = cid_month;
                currentYear = cid_year;
              }

            }
            reInitialise(currentYear, currentMonth, this, false);
          }
        });
        timeout = setTimeout(function () {
          loading = false;
          timedout_executed = 1;
          specificprices_storage = specificPrices[hotelId];
          specificPrices[hotelId] = undefined;
          // alert("hi");
          reInitialise(reInitialise_year, reInitialise_month, this, false);
          specificPrices[hotelId] = specificprices_storage;
        }, 5000);

      }


    }


    if (picker.length > 0) {


      old_date_cid = document.getElementById("check_in_date").value;
      old_date_cod = document.getElementById("check_out_date").value;

      if (hotelId == 4 && old_date_cid == "04/12/23") {

        $('#findRoomModalBtn').attr("disabled", true);
        $('.global-calender-select-date-btn ').addClass("disabled");
        closeFlag = true;
        lengthError = 'This date is unavailable as a Check-in date';
      }

      if (old_date_cid != "" && old_date_cod != "") {
        old_date_cid = 0;

        old_date_cod = 0;
      }



      //this code is added to allow the user to re-select the check-in date when lesser date is selected - JAYANT





      picker.find(".datepick-selected:first").addClass("start");
      picker.find(".datepick-selected:last").addClass("end");
      picker.find(".datepick-selected:first").parent().addClass("datepick-selected-td-first");
      picker.find(".datepick-selected:last").parent().addClass("datepick-selected-td-last");
      picker.find(".datepick-selected").parent().addClass("datepick-selected-td");
      if (closeFlag) {
        $('#datefield_modal_stay').attr("data-invalid", true);
        picker.prepend(
          '<div class="calendar-error-msg p-3 body-4">' +
          '<p><i class="fal fa-exclamation-triangle px-1"></i> ' + lengthError + '</p>' +
          '</div>'
        );
      } else {
        $('#datefield_modal_stay').attr("data-invalid", false);
      }
    }
    if (picker.find(".datepick-selected:first").hasClass("start")) {
      picker.find(".datepick-today").removeClass("today");
    }
    picker.find(".currency_type").remove();
    if (hotelId != 0 || hotelId != undefined) {
      if (loading) {
        //alert("from if");
        picker.append('<div class="position-absolute currency_type"><div class="position-relative h-100"><div class="bar top"></div></div></div>');
        picker.find('.datepick-nav .datepick-cmd-next').attr("data-disabled", true);
      } else if (currencyType) {
        //alert("from if");
        if (currencyType) {
          //alert("from else if if");
          picker.append("<p class='currency_type-text position-absolute body-4 font-14 m-0'>" + price_var + " " + currencyType + "</p>");
          //$("p.global-calender-all-price-text").text(price_var + " " + currencyType);
        }
        picker.find('.datepick-nav .datepick-cmd-next').attr("data-disabled", false);
      } else {
        //alert("from else else");
        picker.append("");
        $('.currency_type').hide();
        picker.find('.datepick-nav .datepick-cmd-next').attr("data-disabled", false);
      }
    }

    var today = moment();
    var maxDateMonth = moment().add(2, 'years').startOf('month'); // Max date month is 2 years from now
    var secondMonthDate = moment(inst.drawDate).add(1, 'months').startOf('month'); // Second displayed month

    // If the second month displayed is the max date month or beyond, hide the next button
    if (secondMonthDate.isSameOrAfter(maxDateMonth)) {
      picker.find('.datepick-nav .datepick-cmd-next').hide();
    }
  }


  // ----------------------------------------------------------Stay Booking starts here
  function bookingvldcheck(formid) {
    var error = 0;
    /****/
    if ($('#check_in_date').val() === '' || $('#check_out_date').val() === '' || $('#datefield_modal_stay').attr("data-invalid") == "true") {
      error = error + 1;
      $("#datefield_modal_stay").addClass("errorbox");
    } else if ($('#check_in_date').val() === $('#check_out_date').val()) {
      error = error + 1;
      $("#datefield_modal_stay").addClass("errorbox");
    } else if ($('#total_adults').val() == '0') {
      error = error + 1;
      $("#navbarDropdownAddRooms").parents('li').addClass("errorbox");
      e.stopPropagation();
    }
    if (error > 0)
      return false;
    else
      return true;
  }

  // click event on find rooms
  $("#bookingModalGlobal").on("click", "#findRoomModalBtn", function (e) {
    if (bookingvldcheck($(this))) {
      $(this).attr("disabled");
      $(this).find('.button-loader').css("display", "inline-block");
      req_id = $('#hotel_id').val() ? $('#hotel_id').val() : "all"; // changed from 0 to all
      hotelname = ($('#hotel_name').val() && $('#hotel_name').val() != 0 && $('#hotel_name').val() != '' && $('#hotel_name').val() != 'undefined' && $('#hotel_name').val() != null) ? $('#hotel_name').val() : "All Hotels"; //changed from 0 to "All Hotels"
      // if(hotelname=="Все отели"){
      //     hotelname="All Hotels";
      // }
      //console.log(hotelname);
      req_cid = $('#check_in_date').val() ? $('#check_in_date').val() : "";
      req_cod = $('#check_out_date').val() ? $('#check_out_date').val() : "";
      req_totadlt = $('#total_adults').val() ? $('#total_adults').val() : 1;
      req_totchld = $('#total_childs').val() ? $('#total_childs').val() : 0;

      var offerid = $('#offerid').val();
      var cid_day = req_cid.split('/')[0];
      var cid_month = req_cid.split('/')[1] - 1;
      var cid_year = "20" + req_cid.split('/')[2];

      var cod_day = req_cod.split('/')[0];
      var cod_month = req_cod.split('/')[1] - 1;
      var cod_year = "20" + req_cod.split('/')[2];

      var startDate = new Date(cid_year, cid_month, cid_day);
      var EndDate = new Date(cod_year, cod_month, cod_day);

      var startdateNew = new Date(startDate);
      var enddateNew = new Date(EndDate);

      var formattedStartDate = startdateNew.toLocaleDateString('en-US', { weekday: 'long', month: 'short', day: 'numeric', year: 'numeric' });
      var formattedEndDate = enddateNew.toLocaleDateString('en-US', { weekday: 'long', month: 'short', day: 'numeric', year: 'numeric' });

      var eventDate1 = moment(new Date(formattedStartDate)).format('YYYY-MM-DD');
      var eventDate2 = moment(new Date(formattedEndDate)).format('YYYY-MM-DD');
      var date1 = new Date(eventDate1 + 'T10:00:00Z'); //To avoid timezone issues
      var date2 = new Date(eventDate2 + 'T10:00:00Z'); //To avoid timezone issues

      var Difference_In_Time = date2.getTime() - date1.getTime();
      var Difference_In_Days = Difference_In_Time / (1000 * 3600 * 24);

      //multiroom change starts
      // req_no_of_rooms = $(tableClass + ' table').length;
      req_no_of_rooms = $("#room_count").val();
      //req_no_of_rooms = $("#room_count").val() ? $("#room_count").val() : 1;
      //if (req_no_of_rooms > 1) {
      var adultChildArray = [];
      $(tableClass + ' table').each(function () {
        tcount_adult = parseInt($(this).find('.count_adult.adult-ct-check1').text());
        tcount_child = parseInt($(this).find('.count_child.child-ct-check1').text());
        adultChildArray.push({ 'id': req_id, 'adult': tcount_adult, 'child': tcount_child });
      });

      $('#adult_child_count').val(JSON.stringify(adultChildArray));
      // }
      //multiroom change ends


      if ($('.C_Checkbox').is(":checked") || $('.P_Checkbox').is(":checked") || $('.G_Checkbox').is(":checked")) {
        req_code_val = $('#code_value').val() ? $('#code_value').val() : "";
        req_code_type = $('#code_type').val() ? $('#code_type').val() : "";
      } else {
        req_code_val = "";
        req_code_type = "";
      }
      if ($('.I_Checkbox').is(":checked"))
        iata_value = $('#iata_value').val() ? $('#iata_value').val() : "";
      else
        iata_value = "";
      //req_no_of_rooms = $('#room_count').val() ? $('#room_count').val() : 1;
      book_for_someone_else = $('#bfse').val() ? $('#bfse').val() : 0;
      var roomtypecode = $('#roomtypecode').val() ? $('#roomtypecode').val() : "";
      var ratePlanCode = $('#rate_plan_code').val();

      // for packages
      var rate_plan_type = $('#rate_plan_type').val() ? $('#rate_plan_type').val() : "";

      var prod_id = "";
      if (rate_plan_type == "2") {
        ratePlanCode = "";
        prod_id = $('#rate_plan_code').val() ? $('#rate_plan_code').val() : "";
      }

      var offerCode = $('#offer_code').val();
      var offerName = $('#offer').val();
      var offerStartDate = $('#offer_start_date').val();
      var offerEndDate = $('#offer_end_date').val();
      var booked_hotel_details = $('#hotelDetails').val();

      var searchPage;
      if (offerCode == "" && booked_hotel_details == "" && roomtypecode == "" && ratePlanCode == "") {
        //global url
        if ((hotelname == "All Hotels") || (hotelname == "" && roomtypecode == "") || req_id == "all") {
          searchPage = "/" + ICL + "/find/hotels?"
        } else {
          //multiroom changes starts
          // if (req_no_of_rooms == 1)
          //     searchPage = "/" + ICL + "/find/rooms?";
          // else
          //searchPage = "/" + ICL + "/find/rooms-multiroom?"; // Sneha
          searchPage = "/" + ICL + "/find/rooms?";


          //multiroom changes ends
        }
        urlParams = 'id=' + req_id + '&hotelname=' + encodeURIComponent(hotelname) + '&cid=' + req_cid + '&cod=' + req_cod + '&rooms=' + req_no_of_rooms + '&adult=' + req_totadlt + '&child=' + req_totchld + '&type=' + req_code_type + '&code=' + req_code_val + '&bfse=' + book_for_someone_else + '&iata=' + iata_value + '&offer_code=' + offerCode + '&offer_name=' + encodeURIComponent(offerName) + '&nights=' + Difference_In_Days + '&offer_id=' + offerid;
        finalUrl = searchPage + urlParams;
      } else if (booked_hotel_details == "" && roomtypecode == "") {
        //offers url
        if (ratePlanCode != "" && req_id != "" && hotelname != "" && (offerCode != "" || ratePlanCode != "")) {
          //multiroom changes starts
          urlParams = "id=" + req_id + "&hotelname=" + encodeURIComponent(hotelname) + "&cid=" + req_cid + "&cod=" + req_cod + "&rooms=" +
            req_no_of_rooms + "&adult=" + req_totadlt + "&child=" + req_totchld + "&type=" +
            req_code_type + "&code=" + req_code_val + "&bfse=" +
            book_for_someone_else + "&iata=" + iata_value + "&rateplancode=" + encodeURIComponent(ratePlanCode) + '&offer_code=' + offerCode + '&offer_name=' + encodeURIComponent(offerName) + '&offer_id=' + offerid + '&nights=' + Difference_In_Days;

          searchUrl = "/" + ICL + "/find/rooms?";

          // Sneha
          /* if (req_no_of_rooms == 1)
           searchUrl = "/" + ICL + "/find/rooms?";
           else
           searchUrl = "/" + ICL + "/find/rooms-multiroom?"; */
        } else {
          searchUrl = "/" + ICL + "/find/hotels?";
          urlParams = 'id=' + req_id + '&hotelname=' + encodeURIComponent(hotelname) + '&cid=' + req_cid + '&cod=' + req_cod + '&rooms=' + req_no_of_rooms + '&adult=' + req_totadlt + '&child=' + req_totchld + '&type=' + req_code_type + '&code=' + req_code_val + '&bfse=' + book_for_someone_else + '&iata=' + iata_value + '&rateplancode=' + encodeURIComponent(offerCode) + '&offer_code=' + offerCode + '&offer_name=' + encodeURIComponent(offerName) + '&offer_id=' + offerid + '&nights=' + Difference_In_Days;
        }
        finalUrl = searchUrl + urlParams;
        //multiroom changes ends
      } else if (roomtypecode == "") {
        //multiroom changes starts
        //manage booking
        // if (req_no_of_rooms == 1)
        //     searchPage = "/" + ICL + "/find/rooms?";
        // else

        searchPage = "/" + ICL + "/find/rooms?";

        //searchPage = "/" + ICL + "/find/rooms-multiroom?"; //Sneha

        urlParams = 'id=' + req_id + '&hotelname=' + hotelname + '&cid=' + req_cid + '&cod=' + req_cod + '&rooms=' + 1 + '&adult=' + req_totadlt + '&child=' + req_totchld + '&type=' + req_code_type + '&code=' + req_code_val + '&bfse=' + book_for_someone_else + '&iata=' + iata_value + '&prodid=&details=' + encodeURIComponent(booked_hotel_details) + '&nights=' + Difference_In_Days;
        finalUrl = searchPage;
        finalUrl = searchPage + urlParams;
        //multiroom changes ends
      } else { //rooms and suits page
        if ((hotelname == "All Hotels") || (hotelname == "")) {
          searchPage = "/" + ICL + "/find/hotels?"
        } else {
          //multiroom changes starts

          searchPage = "/" + ICL + "/find/rooms?";

          //Sneha
          /*if (req_no_of_rooms == 1)
              searchPage = "/" + ICL + "/find/rooms?";
          else
              searchPage = "/" + ICL + "/find/rooms-multiroom?"; */
          //multiroom changes ends
        }
        urlParams = 'id=' + req_id + '&hotelname=' + encodeURIComponent(hotelname) + '&cid=' + req_cid + '&cod=' + req_cod + '&rooms=' + req_no_of_rooms + '&adult=' + req_totadlt + '&child=' + req_totchld + '&type=' + req_code_type + '&code=' + req_code_val + '&iata=' + iata_value + '&bfse=' + book_for_someone_else + '&roomtypeid=' + roomtypecode + '&offer_code=' + offerCode + '&offer_name=' + encodeURIComponent(offerName) + '&nights=' + Difference_In_Days;
        finalUrl = searchPage + urlParams;
      }
      $(this).removeAttr("disabled");
      //multiroom change starts
      //wait till count is set in ajax call and then redirect
      //window.location.href = finalUrl;

      //if (req_no_of_rooms > 1) {
      // //console.log("before setting");
      // //console.log(adultChildArray);
      setTransientData(adultChildArray).then(function (data) {
        // //console.log(data);
        window.location.href = finalUrl;
      }).catch(function (err) {
        // //console.log(err)
      });
      // } else {
      //     window.location.href = finalUrl;
      // }
      //multiroom change ends
    } else {
      // //console.log("inside else");
    }
  });


  //set the modal title and remove error box on click
  // $("#bookingModalGlobal").on("click", 'li ul', function (e) {
  // 	var justify = $(this).attr('alt');
  // 	$(".modal-title").html(justify);
  //    $(this).removeClass("errorbox");
  // });
  $(".hoteldropdownModal .dropdown-item").click(function () {
    HotelName = $(this).text().trim();
    hotelId = $(this).attr('rel');
    select_hotel_event(HotelName, hotelId, prev_hotelId);
    roomtypecode_flag = 1; //Savitha Invalid Room type changes
    if (requestParam.hotelname != HotelName) {
      $("#roomtypecode").val('');
    } else {
      if (requestParam.roomtypeid) {
        $("#roomtypecode").val(requestParam.roomtypeid);
      }
    }
  });

  //Multiroombooking code-----STARTS----------------
  if (window.matchMedia("(max-width: 991px)").matches) {
    tableClass = "#table_modal_container_mobile";
  } else {
    tableClass = "#table_modal_container";
  }
  var i = 0;
  // Check if requestParam is defined
  if (requestParam && typeof requestParam === 'object') {
    var childCount = (requestParam.child) ? requestParam.child : '0';
    var adultCount = (requestParam.adult) ? requestParam.adult : '1';
  } else {
    // If requestParam is not defined or not an object, set default values
    var childCount = '0';
    var adultCount = '1';
  }
  $(tableClass).append('<table class="table" id="table_modal' + i + '"><tbody> <tr><td><span>' + adults_text + ' ' + '( 12+ )' + '</span></td><td><div class="adult_minus_modal disabled text-center"><i class="fal fa-minus-circle"></i></div></td><td class="text-center"><span class="count_adult adult-ct-check1">' + adultCount + '</span></td><td><div class="adult_plus_modal text-center"><i class="fal fa-plus-circle"></i></div></td></tr><tr><td><span>' + children_text + ' ' + '(4-11)' + '</span></td><td><div class="child_minus_modal disabled text-center"><i class="fal fa-minus-circle"></i></div></td><td class="text-center"><span class="count_child child-ct-check1">' + childCount + '</span></td><td><div class="child_plus_modal text-center"><i class="fal fa-plus-circle"></i></div></td></tr></table>');

  function appendTableToModal(rooms = null) {
    //append tables on home page modal based on add room click event
    if (rooms == null) {
      //  var i = $(tableClass + " table").length;
      var i = parseInt($("#room_count").val());
      $(tableClass).append('<table class="table" id="table_modal' + i + '"><tbody><tr><td><span class="roomHeading">' + room_var + ' ' + (i + 1) + '</span> <i class="fal fa-trash-alt trashModal" id="trash_modal"></i></td></tr> <tr><td><span>' + adults_text + ' ' + '( 12+ )' + '</span></td><td><div class="adult_minus_modal disabled text-center"><i class="fal fa-minus-circle"></i></div></td><td class="text-center"><span class="count_adult adult-ct-check1">1</span></td><td><div class="adult_plus_modal text-center"><i class="fal fa-plus-circle"></i></div></td></tr><tr><td><span>' + children_text + ' ' + '(4-11)' + '</span></td><td><div class="child_minus_modal disabled text-center"><i class="fal fa-minus-circle"></i></div></td><td class="text-center"><span class="count_child child-ct-check1">0</span></td><td><div class="child_plus_modal text-center"><i class="fal fa-plus-circle"></i></div></td></tr></table>');
      if (window.matchMedia("(max-width: 991px)").matches) {
        $(".add_rooms_nav_dropdown > #guest_dropdown.show .table_modal_container_mobile_main").scrollTop($(".add_rooms_nav_dropdown > #guest_dropdown.show .table_modal_container_mobile_main")[0].scrollHeight);
      } else {
        $(".add_rooms_nav_dropdown > .dropdown-menu.show").scrollTop($(".add_rooms_nav_dropdown > .dropdown-menu.show")[0].scrollHeight);
      }
      updateAdultChildCountOnModal();
    } else {
      // //console.log("inside table append ");
      // //console.log(rooms);
      getTransientData(cookiedetailinfo).then(function (data) {
        //if rooms=10 then hide the addRoom button
        if (data.length == 9) {
          $('.addRoomModal').addClass('d-none');
        }
        // //console.log("get transient data");
        // //console.log(data);
        //append tables on room-list page based on number of rooms
        $(tableClass).html('');
        table = '';
        for (i = 0; i < data.length; i++) {
          adult = data[i]["adult"];
          child = data[i]["child"];
          // //console.log(adult + "------------" + child)
          table += `<table class="table" id="table_modal${i}"><tbody><tr><td><span class="roomHeading">${room_var} ${i + 1}</span> <i class="fal fa-trash-alt trashModal" id="trash_modal"></i></td></tr> <tr><td><span>${adults_text} ( 12+ )</span></td><td><div class="adult_minus_modal disabled text-center"><i class="fal fa-minus-circle"></i></div></td><td class="text-center"><span class="count_adult adult-ct-check1">${adult}</span></td><td><div class="adult_plus_modal text-center"><i class="fal fa-plus-circle"></i></div></td></tr><tr><td><span>${children_text} (4-11)</span></td><td><div class="child_minus_modal disabled text-center"><i class="fal fa-minus-circle"></i></div></td><td class="text-center"><span class="count_child child-ct-check1">${child}</span></td><td><div class="child_plus_modal text-center"><i class="fal fa-plus-circle"></i></div></td></tr></table>`;
        }
        $(tableClass).prepend(table);
      }).catch(function (err) {
        // //console.log(err)
      });

    }
  }

  function reNumberTables() {
    $(tableClass + " > table").each(function (i, v) {
      $(this).closest('table').find('tr td span:first').text(room_var + " " + (i + 1));
      $(this).closest('table').attr('id', 'table_modal' + i); //renumber the id of table as well
    });
    // var i = $(tableClass + " table").length;
    var i = parseInt($("#room_count").val());
    if (i == 1) {
      $(tableClass + " table").find("tr:first").remove();
    }
  }

  $(document).on("click", ".trashModal", function (e) {
    $(this).closest('table').remove();
    if ($('.addRoomModal').hasClass('d-none')) {
      $('.addRoomModal').removeClass('d-none')
    }
    updateAdultChildCountOnModal();
    reNumberTables();

  });

  // multi room fix
  $(document).on('click', '.addRoomModal', function () {
    // var i = $(tableClass + " table").length;
    var i = parseInt($("#room_count").val());
    if (i == 1) {
      $(tableClass).find("table:first").prepend($('<tr><td><span class="roomHeading">' + room_var + ' ' + 1 + '</span> <i class="fal fa-trash-alt trashModal" id="trash_modal"></i></td></tr>'));
    }
    if (i == 8) {
      $('.addRoomModal').addClass('d-none');
    }
    if (i < 9) {
      appendTableToModal();
    }
  });

  //multiroom Changes starts
  $(document).on('click', '.addRoomsDropdownModal div.adult_plus_modal', function (e) {
    e.stopPropagation();
    e.preventDefault();
    parent_table_id = $(this).closest('table').attr('id');
    val = parseInt($('#' + parent_table_id).find('span.count_adult').text());
    if (val < 10) {
      updateAdultChildCountOnModal(true);
      $('#' + parent_table_id).find('span.count_adult').text(val + 1);
    }
    if ((val + 1) > 1) {
      $('#' + parent_table_id).find(".adult_minus_modal").removeClass("disabled");
    } else {
      $('#' + parent_table_id).find(".adult_minus_modal").addClass("disabled");
    }

    if ((val + 1) >= 10) {
      $('#' + parent_table_id).find(".adult_plus_modal").addClass("disabled"); // CHG 3761 by Anubhav Gogoi
    }
  });

  $('.addRoomsDropdownModal').on('click', 'div.adult_minus_modal', function (e) {
    e.stopPropagation();
    e.preventDefault();
    parent_table_id = $(this).closest('table').attr('id');
    val = parseInt($('#' + parent_table_id).find('span.count_adult').text());
    if (val > 1) {
      updateAdultChildCountOnModal(false, true);
      $("#totrm").val(string_total_count);
      $('#' + parent_table_id).find('span.count_adult').text(val - 1);
    }
    if ((val - 1) > 1) {
      $('#' + parent_table_id).find(".adult_minus_modal").removeClass("disabled");
      $('#' + parent_table_id).find(".adult_plus_modal").removeClass("disabled"); // CHG 3761 by Anubhav Gogoi
    } else {
      $('#' + parent_table_id).find(".adult_minus_modal").addClass("disabled");
    }
  });

  $('.addRoomsDropdownModal').on('click', 'div.child_plus_modal', function (e) {
    e.stopPropagation();
    e.preventDefault();
    parent_table_id = $(this).closest('table').attr('id');
    val = parseInt($('#' + parent_table_id).find('.count_child').text());
    if (val < 10) {
      updateAdultChildCountOnModal(false, false, true);
      $("#totrm").val(string_total_count);
      $('#' + parent_table_id).find('.count_child').text(val + 1);
    }
    if ((val + 1) > 0) {
      $('#' + parent_table_id).find(".child_minus_modal").removeClass("disabled");
    } else {
      $('#' + parent_table_id).find(".child_minus_modal").addClass("disabled");
    }

    if ((val + 1) >= 10) {
      $('#' + parent_table_id).find(".child_plus_modal").addClass("disabled");
    } // CHG 3761 by Anubhav Gogoi
  });


  $('.addRoomsDropdownModal').on('click', 'div.child_minus_modal', function (e) {
    e.stopPropagation();
    e.preventDefault();
    parent_table_id = $(this).closest('table').attr('id');
    val = parseInt($('#' + parent_table_id).find('.count_child').text());
    if (val != 0) {
      updateAdultChildCountOnModal(false, false, false, true);
      $("#totrm").val(string_total_count);
      $('#' + parent_table_id).find('.count_child').text(val - 1);
    }
    if ((val - 1) > 0) {
      $('#' + parent_table_id).find(".child_minus_modal").removeClass("disabled");
      $('#' + parent_table_id).find(".child_plus_modal").removeClass("disabled"); // CHG 3761 by Anubhav Gogoi
    } else {
      $('#' + parent_table_id).find(".child_minus_modal").addClass("disabled");
    }
  });

  function updateAdultChildCountOnModal(adultPlus = null, adultMinus = null, childPlus = null, childMinus = null) {
    var tcount_adult = 0;
    var tcount_child = 0;
    $(tableClass + " table").each(function () {
      tcount_adult += parseInt($(this).find('.count_adult.adult-ct-check1').text());
      tcount_child += parseInt($(this).find('.count_child.child-ct-check1').text());
    });
    if (adultPlus)
      tcount_adult = tcount_adult + 1;
    if (adultMinus)
      tcount_adult = tcount_adult - 1;

    if (childPlus)
      tcount_child = tcount_child + 1;
    if (childMinus)
      tcount_child = tcount_child - 1;

    if (tcount_child > 1) {
      child_text = children_text;
    } else {
      child_text = child_text;
    }

    if (tcount_adult > 1) {
      adult_text = adults_text;
    } else {
      adult_text = adult_text;
    }
    if (tcount_adult > 1) {
      $(this).parents('.addRoomsDropdownModal').find(".adult_minus_modal").removeClass("disabled");
      string_total_count = tcount_adult + " " + adults_text + "," + " " + tcount_child + " " + child_text;
    } else {
      $(this).parents('.addRoomsDropdownModal').find(".adult_minus_modal").addClass("disabled");
      string_total_count = tcount_adult + " " + adult_text + "," + tcount_child + " " + child_text;
    }

    if (tcount_child > 1) {
      string_total_count = tcount_adult + " " + adult_text + "," + " " + tcount_child + " " + children_text;
    } else {
      string_total_count = tcount_adult + " " + adult_text + "," + tcount_child + " " + child_text;
    }
    $("#total_adults").val(tcount_adult);
    $("#total_childs").val(tcount_child);
    $("#room_count").val($(tableClass + " table").length);
    $("#TotalChildren").val(tcount_child);
    $("span.count-adult-child").text(string_total_count);
  }

  // avoid closing the dropdown on inside click
  $(document).on('click', '.add_rooms_nav_dropdown .addRoomsDropdownModal', function (e) {
    e.stopPropagation();
  });
  //multiroom Changes ends

});

$(function () {
  // booking model close validate error box
  $("#modelclosesignGlobal").click(function () {
    $(".restaurant_dropdown").parents('li').removeClass("errorbox");
  });

  //    $('#bookingModalGlobal').on('hidden.bs.modal', function () {
  //     $(this).find('form').trigger('reset');
  // });

  $("#bookingModalGlobal").on("click", 'li.add_rooms_nav_dropdown', function (e) {
    $("#bookingModalGlobal .modal-title").html($(this).attr("alt"));
  });

  //booking for someone else
  $(".book_for_someone_else").on("click", function (e) {
    //  e.stopPropagation();
    if ($(this).find('input[name="book_for_someone_else_chkbox"]').is(":checked")) {
      $("form[name='book_now_form']").find("#bfse").val(1);
    } else {
      $("form[name='bookingform']").find("#bfse").val(0);
    }
  });

});



$(document).ready(function () {

  // ----------------Modal Hide Functionality---------------------


  $('.done_btn .primary-btn').click(function () {
    $('#guest_dropdown').modal('hide');


  });
  $('.global-booking-modal-back-btn').click(function () {
    $('#hotel_dropdown').modal('hide');


  });
  $('.global-booking-modal-back-btn').click(function () {
    $('#guest_dropdown').modal('hide');


  });
  $('.global-booking-modal-back-btn').click(function () {
    $('#stay_calender_dropdown').modal('hide');


  });
  $('.global-booking-modal-back-btn').click(function () {
    $('#promocode_dropdown').modal('hide');
  });

  $('.mobile_done_button').click(function () {
    $('#promocode_dropdown').modal('hide');
  });

  // on load hide the button in mobile view
  $('.global-calender-select-date-btn').hide();

  // $('#stay_calender_dropdown .datefield-mobile .selectdate').on("click", function () {
  //    $('.global-calender-select-date-btn-box').show();
  // });
});

// BookNowModelNew
var justify1;
$(".getAltAttr").click(function () {
  justify1 = $(this).closest('.nav-item[alt]').attr('alt');
  $("#pills-Stay .modal-title-stay").text(justify1);
});

// update the modal title for Dine
var justify;
$(".getAltAttrDine").click(function () {
  justify = $(this).closest('.nav-item[alt]').attr('alt');
  $("#pills-Dine .modal-title-dine").text(justify);
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

$('#bookingModalGlobal li.nav-item').on('click', function () {
  $(this).removeClass('errorbox')
})

// add rooms scripts
$(function () {
  $('.roomcircle-tr').click(function () {
    $('.roomcircle-tr').hide();
    $('.addroomPlusMinus').addClass('d-table-row')

  })

  // avoid hiding add_rooms_nav_dropdown_widget dropdown when clciked inside menu
  // $(document).on('click', '.add_rooms_nav_dropdown .dropdown-menu', function (e) {
  //    e.stopPropagation();
  // });

  // //avoid hiding dropdown
  $(document).on('click', '.codebox .dropdown-menu', function (e) {
    e.stopPropagation();
  });

  // error on datebox
  $(".codebox").click(function (e) {
    if (($('#check_in_date').val() === '') || ($('#check_out_date').val() === '')) {
      if ($('#bookingModalGlobal .navbar .nav-item.codebox a').attr('aria-haspopup') === 'true') {
        e.stopPropagation();
      }
      $("#datefield_modal_stay").addClass("errorbox");
    }
  });


  //click event on iata checkbox
  $(document).on('click', '.I_Checkbox', function (e) {

    //text change on li
    if (($('#iata_value').val() != "" && ($('.I_Checkbox').is(":checked"))) ||
      ($('#code_value').val() != "" && ($('.C_Checkbox').is(":checked") ||
        $('.P_Checkbox').is(":checked") || $('.G_Checkbox').is(":checked"))))
      $(".codebox").find("a:first-child span,a:nth-child(2) span").html(code_applied_var);
    else if (($('#iata_value').val() != "" && $('.I_Checkbox').is(":checked")) &&
      ($('#code_value').val() != "" && ($('.C_Checkbox').is(":checked") ||
        $('.G_Checkbox').is(":checked") || $('.P_Checkbox').is(":checked")))) {
      $(".codebox").find("a:first-child span,a:nth-child(2) span").html(codes_applied_var);
    } else {
      $(".codebox").find("a:first-child span,a:nth-child(2) span").html(enter_code_var);
    }

    // remove previous error messages
    $(this).parents('.promocodedropdown').find($(".click_error:not([class*='d-none'])")).addClass("d-none");
    $(this).parents('.promocodedropdown').find($(".iata_error:not([class*='d-none'])")).addClass("d-none");
    $(this).parents('.promocodedropdown').find($(".group_error:not([class*='d-none'])")).addClass('d-none');
    $(this).parents('.promocodedropdown').find($(".iatacode_error:not([class*='d-none'])")).addClass("d-none");

    if ($('.G_Checkbox').is(":checked")) {
      $(this).parents('.promocodedropdown').find($('[class*="group_error"]')).removeClass('d-none');
      $(this).prop("checked", false).change();
    } else {
      if ($(this).is(":checked")) {
        $(this).parents('.promocodedropdown').find($("div[class*='iatacode_input']")).show();
      } else {
        $(this).parents('.promocodedropdown').find($("div[class*='iatacode_input']")).hide();
      }
    }
  });

  //click event for corporate code checkbox
  $(document).on('click', '.C_Checkbox', function (e) {
    if (($('#iata_value').val() != "" && ($('.I_Checkbox').is(":checked"))) ||
      ($('#code_value').val() != "" && ($('.C_Checkbox').is(":checked") ||
        $('.P_Checkbox').is(":checked") || $('.G_Checkbox').is(":checked"))))
      $(".codebox").find("a:first-child span,a:nth-child(2) span").html(code_applied_var);
    else if (($('#iata_value').val() != "" && $('.I_Checkbox').is(":checked")) &&
      ($('#code_value').val() != "" && ($('.C_Checkbox').is(":checked") ||
        $('.G_Checkbox').is(":checked") || $('.P_Checkbox').is(":checked")))) {
      $(".codebox").find("a:first-child span,a:nth-child(2) span").html(codes_applied_var);
    } else {
      $(".codebox").find("a:first-child span,a:nth-child(2) span").html(enter_code_var);
    }

    // remove previous error messages
    $(this).parents('.promocodedropdown').find($(".click_error:not([class*='d-none'])")).addClass("d-none");
    $(this).parents('.promocodedropdown').find($(".iata_error:not([class*='d-none'])")).addClass("d-none");
    $(this).parents('.promocodedropdown').find($(".group_error:not([class*='d-none'])")).addClass('d-none');
    $(this).parents('.promocodedropdown').find($(".corporatecode_error:not([class*='d-none'])")).addClass("d-none");


    if ($('.P_Checkbox').is(":checked")) {
      if ($('.I_Checkbox').is(":checked")) {
        $(this).parents('.promocodedropdown').find($('[class*="click_error"]')).removeClass('d-none');
      } else {
        $(this).parents('.promocodedropdown').find($('[class*="iata_error"]')).removeClass('d-none');
      }
      $(this).prop("checked", false).change();
    } else if ($('.G_Checkbox').is(":checked")) {
      $(this).parents('.promocodedropdown').find($('[class*="group_error"]')).removeClass('d-none');
      $(this).prop("checked", false).change();
    } else {

      if ($(this).is(":checked")) {
        $(this).parents('.promocodedropdown').find($("div[class*='corporatecode_input']")).show();
      } else {
        $(this).parents('.promocodedropdown').find($("div[class*='corporatecode_input']")).hide();
      }
    }
  });

  //promo code checkbox
  $(document).on('click', '.P_Checkbox', function (e) {
    if (($('#iata_value').val() != "" && ($('.I_Checkbox').is(":checked"))) ||
      ($('#code_value').val() != "" && ($('.C_Checkbox').is(":checked") ||
        $('.P_Checkbox').is(":checked") || $('.G_Checkbox').is(":checked"))))
      $(".codebox").find("a:first-child span,a:nth-child(2) span").html(code_applied_var);
    else if (($('#iata_value').val() != "" && $('.I_Checkbox').is(":checked")) &&
      ($('#code_value').val() != "" && ($('.C_Checkbox').is(":checked") ||
        $('.G_Checkbox').is(":checked") || $('.P_Checkbox').is(":checked")))) {
      $(".codebox").find("a:first-child span,a:nth-child(2) span").html(codes_applied_var);
    } else {
      $(".codebox").find("a:first-child span,a:nth-child(2) span").html(enter_code_var);
    }


    // remove previous error messages
    $(this).parents('.promocodedropdown').find($(".click_error:not([class*='d-none'])")).addClass("d-none");
    $(this).parents('.promocodedropdown').find($(".iata_error:not([class*='d-none'])")).addClass("d-none");
    $(this).parents('.promocodedropdown').find($(".group_error:not([class*='d-none'])")).addClass('d-none');
    $(this).parents('.promocodedropdown').find($(".promocode_error:not([class*='d-none'])")).addClass("d-none");

    if ($('.C_Checkbox').is(":checked")) {
      if ($('.I_Checkbox').is(":checked")) {
        $(this).parents('.promocodedropdown').find($('[class*="click_error"]')).removeClass('d-none');
      } else {
        $(this).parents('.promocodedropdown').find($('[class*="iata_error"]')).removeClass('d-none');
      }
      $(this).prop("checked", false).change();
    } else if ($('.G_Checkbox').is(":checked")) {
      $(this).parents('.promocodedropdown').find($('[class*="group_error"]')).removeClass('d-none');
      $(this).prop("checked", false).change();
    } else {

      if ($(this).is(":checked")) {
        $(this).parents('.promocodedropdown').find($("div[class*='promocode_input']")).show();
      } else {
        $(this).parents('.promocodedropdown').find($("div[class*='promocode_input']")).hide();
      }
    }
  });

  //group code checkbox
  $(document).on('click', '.G_Checkbox', function (e) {
    if (($('#iata_value').val() != "" && ($('.I_Checkbox').is(":checked"))) ||
      ($('#code_value').val() != "" && ($('.C_Checkbox').is(":checked") ||
        $('.P_Checkbox').is(":checked") || $('.G_Checkbox').is(":checked"))))
      $(".codebox").find("a:first-child span,a:nth-child(2) span").html(code_applied_var);
    else if (($('#iata_value').val() != "" && $('.I_Checkbox').is(":checked")) &&
      ($('#code_value').val() != "" && ($('.C_Checkbox').is(":checked") ||
        $('.G_Checkbox').is(":checked") || $('.P_Checkbox').is(":checked")))) {
      $(".codebox").find("a:first-child span,a:nth-child(2) span").html(codes_applied_var);
    } else {
      $(".codebox").find("a:first-child span,a:nth-child(2) span").html(enter_code_var);
    }

    // remove previous error messages
    $(this).parents('.promocodedropdown').find($(".click_error:not([class*='d-none'])")).addClass("d-none");
    $(this).parents('.promocodedropdown').find($(".iata_error:not([class*='d-none'])")).addClass("d-none");
    $(this).parents('.promocodedropdown').find($(".group_error:not([class*='d-none'])")).addClass('d-none');
    $(this).parents('.promocodedropdown').find($(".groupcode_error:not([class*='d-none'])")).addClass("d-none");

    if ($('.C_Checkbox').is(":checked") || $('.P_Checkbox').is(":checked") ||
      $('.I_Checkbox').is(":checked")) {
      $(this).parents('.promocodedropdown').find($('[class*="group_error"]')).removeClass('d-none');
      $(this).prop("checked", false).change();
    } else {
      if ($(this).is(":checked")) {
        $(this).parents('.promocodedropdown').find($("div[class*='groupcode_input']")).show();
      } else {
        $(this).parents('.promocodedropdown').find($("div[class*='groupcode_input']")).hide();
      }
    }
  });

  // keyup event on input box
  $(document).on('keyup', '.inputfield', function (e) {
    if ($(this).val().trim() != "") {
      $(this).closest('div').find($("button[class*='btn']")).removeAttr("disabled");
    } else {
      $(this).closest('div').find($("button[class*='btn']")).attr("disabled");
    }
  });

  //click event on apply btn
  $(document).on('click', '.modal_apply_btn', function (e) {
    that = $(this);
    $(this).attr("disabled", "").find('.button-loader').css("display", "inline-block");
    $(this).closest('div').find(".inputfield").attr('disabled', 'disabled');
    if ($(this).closest('div').find("input").hasClass("iatacode")) {
      $("#iata_value").val($(this).parents('.promocodedropdown').find(".iatacode").val());
    } else if ($(this).closest('div').find("input").hasClass("corporatecode")) {
      $("#code_type").val("ccode");
      $('#code_value').val($(this).parents('.promocodedropdown').find(".corporatecode").val());
    } else if ($(this).closest('div').find("input").hasClass("promocode")) {
      $("#code_type").val("pcode");
      $('#code_value').val($(this).parents('.promocodedropdown').find(".promocode").val());
    } else {
      $("#code_type").val("gcode");
      $('#code_value').val($(this).parents('.promocodedropdown').find(".groupcode").val());
    }
    var { adult_count, child_count, no_of_rooms, code_type, code_value, iata_value, start_date_pre, end_date_pre } = parameter_details();
    verify_code(hotelId, start_date_pre, end_date_pre, adult_count, child_count, no_of_rooms, code_type, code_value, iata_value, that);
  });



  function verify_code(hotelId, start_date_pre, end_date_pre, adult_count, child_count, no_of_rooms, code_type, code_value, iata_value, that) {

    start_date_pre = moment(start_date_pre, 'MM/DD/YYYY').format('YYYY-MM-DD');
    end_date_pre = moment(end_date_pre, 'MM/DD/YYYY').format('YYYY-MM-DD');
    if (hotelId != undefined && hotelId !== "all") {
      var siteUrl = "/wp-json/reservation/v1/hotels/verify_promo_code";
      var details = {
        IbuId: hotelId,
        cid: start_date_pre,
        cod: end_date_pre,
        //multiroom change
        rooms: no_of_rooms,
        adult: adult_count,
        child: child_count,
      }
    } else {
      var siteUrl = "/wp-json/reservation/v1/find/hotels_verify_code";
      var details = {
        ICL: ICL,
        cid: start_date_pre,
        cod: end_date_pre,
        //multiroom change
        rooms: no_of_rooms,
        adult: adult_count,
        child: child_count,
      }
    }
    if (iata_value != "") {
      details['icode'] = iata_value;
    }

    if (code_type == 'ccode') {
      details['ccode'] = code_value;
    }

    if (code_type == 'gcode') {
      details['gcode'] = code_value;
    }

    if (code_type == 'pcode') {
      details['pcode'] = code_value;
    }

    jQuery.ajax({
      type: "POST",
      url: siteUrl,
      data: details,
      success: function (data) {
        // //console.log(data)
        if (data["success"]) {
          codeValidate(that, iata_value, code_value);
        } else {
          if (data["error"]["message"] == 96) {
            codeValidate(that, iata_value, code_value);
          } else {
            var error_message = arraySearchForErrorMessage(ICL, data["error"]["details"]);
            if (error_message)
              that.closest('div').next("p").html(error_message["TextContent"]);
            else
              that.closest('div').next("p").html(data["error"]["message"]);
            that.closest('div').find('input').addClass("icon-space errorbox");
            that.closest('div').find('.trash, .invalid').removeClass("d-none");
            that.closest('div').next("p").removeClass("d-none");

            that.addClass("d-none");
            $('#code_type').val("");
            $('#code_value').val("");
            if (that.closest('div').find("input").hasClass("iatacode")) {
              $('#iata_value').val("");
            }
          }

        }
      },
      error: function (data) {
        // //console.log(data)
      }
    });
  }


  //delete click event
  $(document).on('click', '.trash', function (e) {
    $(this).closest('div').find("input").val("").removeAttr('disabled').removeClass("icon-space errorbox");
    $(this).closest('div').find("button").removeClass("d-none").find('.button-loader').css("display", "none");
    $(this).closest('div').find(".trash, .invalid, .valid").addClass("d-none");
    $(this).closest('div').next("p").addClass("d-none");
    $('#code_type').val("");
    $('#code_value').val("");
    if ($(this).closest('div').find("input").hasClass("iatacode")) {
      $('#iata_value').val("");
    }
    if ($('#iata_value').val() != "" || $('#code_value').val() != "") {
      $(".codebox").find("a:first-child span,a:nth-child(2) span").html(code_applied_var);
    } else {
      $(".codebox").find("a:first-child span,a:nth-child(2) span").html(enter_code_var);
    }
  });
});

$(function () {
  $("#menu-item-296").click(function () {
    if ($('#hotelList__dropdown').hasClass(".dropdown-menu.show")) {
      $("#navbar__Global").addClass(".hotellist-menu-hover")
    } else {
      $("#navbar__Global").removeClass(".hotellist-menu-hover")
    }
  });

  $("#PromocodeApply").click(function () {
    var promocodeVal = $("#IATACode").val();
    $("#dropdownMenu2").val = promocodeVal
  });

  if ($('#hotelList__dropdown').hasClass("show")) {
    $("#navbar__Global").addClass("hotel-list-menu-color");
  } else {
    $("#navbar__Global").removeClass("hotel-list-menu-color");
  }
  // $('#hotelList__dropdown').on('show.bs.dropdown', function () {
  //     $("#navbar__Global").addClass("hotel-list-menu-color");
  //  })
});

function updateSelectedCurrency() {
  const selectEl = document.getElementById('curr_identify');
  if (!selectEl || selectEl.selectedIndex < 0) return;

  const selectedOption = selectEl.options[selectEl.selectedIndex];
  const currencyCode = selectedOption.getAttribute('data-title');
  const isMobile = window.innerWidth <= 992;

  const buttons = document.querySelectorAll('button[data-id="curr_identify"]');
  buttons.forEach(button => {
    const innerElement = button.querySelector('.filter-option-inner-inner');
    if (innerElement) {
      innerElement.textContent = isMobile ? currencyCode : currency_prefix + currencyCode;
    }
  });

  selectedOption.textContent = isMobile ? currencyCode : currency_prefix + currencyCode;

  if (typeof $(selectEl).selectpicker === 'function') {
    $(selectEl).selectpicker('refresh');
  }

  removePrefixdrop();
}

function removePrefixdrop() {
  const dropdownItems = document.querySelectorAll('.dropdown-menu.inner .dropdown-item .text');
  dropdownItems.forEach(item => {
    const text = item.textContent.trim();
    if (text.startsWith(currency_prefix)) {
      item.textContent = text.replace(currency_prefix, '').trim();
    }
  });
}

/* currency filter  */
$('.selcurrency').on("changed.bs.select", function () {
  if (templateName == "templates/rooms-list-multiroom.php") {
    updateSelectedCurrency();

  }
  var title = $('option:selected', this).attr("data-title");
  var rate = $('option:selected', this).attr("data-rate");
  $('input[name="curcode"]').val(title);
  // //console.log(title);
  $('input[name="currate"]').val(rate);
  // //console.log(rate);
  $("#currcode").val(title);
  var calcval;
  $('.prexli').each(function (index) {
    // //console.log("Data-val: " + $(this).data('val'));
    calcval = parseInt($(this).data('val') * rate);
    ////console.log("calcval: " + calcval);
    if ($(this).is('input')) {
      $(this).val(title + ' ' + calcval.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
      $(this).attr('data-val', calcval.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
    } else {
      $(this).text(title + ' ' + calcval.toString());
      $(this).digits();
    }
  });
  var checkedRadios = $('.roomsratetyps input[type="radio"]:checked')
  $.each(checkedRadios, function (idx, checkbox) {
    roomselect(checkbox);
  })
});

$.fn.digits = function () {
  return this.each(function () {
    $(this).text($(this).text().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
  })
}

// change currency values if we get room_currency_value from URL
$(document).ready(function () {
  var selectedTitle = $('.selcurrency').find(":selected").data('title');
  $('.selcurrency').data('title', selectedTitle).trigger("changed");
});

//room select radio button click change
function roomselect(thisObj) {
  var $foundCheckedRadio = $(thisObj);
  var rate_plan_code = $foundCheckedRadio.closest(".radio").find("input[name='rate_plan_code']").val();
  var rate_plan_type = $foundCheckedRadio.closest(".radio").find("input[name='rate_plan_type']").val();
  var rate_plan_price = $foundCheckedRadio.closest(".radio").find("input[name='rate_plan_price']").val();
  var rate_plan_cancellation_max_date = $foundCheckedRadio.closest(".radio").find("input[name='rate_plan_cancellation_max_date_value']").val();
  var rate_plan_cancellation_policy = $foundCheckedRadio.closest(".radio").find("input[name='rate_plan_cancellation_policy_value']").val();
  var rates_plan_guarantee_policy = $foundCheckedRadio.closest(".radio").find("input[name='rates_plan_guarantee_policy_value']").val();
  var rate_plan_non_refundable = parseInt($foundCheckedRadio.closest(".radio").find("input[name='rate_plan_non_refundable_value']").val());
  var roomtypecode = $foundCheckedRadio.data('roomtypecode');
  var $foundSpan = $('.' + roomtypecode).find('span');

  $foundSpan.text($foundCheckedRadio.val())
  $foundSpan.attr("data-val", $foundCheckedRadio.data('val'));
  //setter
  var $form = $('#roombookingform-' + roomtypecode)
  $form.find("input[name='rate_plan_code']").val(rate_plan_code);
  $form.find("input[name='rate_plan_type']").val(rate_plan_type);
  $form.find("input[name='rate_plan_price']").val(btoa(rate_plan_price));
  $form.find("input[name='rate_plan_non_refundable']").val(rate_plan_non_refundable);
  $form.find("input[name='rate_plan_cancellation_max_date']").val(rate_plan_cancellation_max_date);
  $form.find("input[name='rate_plan_cancellation_policy']").val(rate_plan_cancellation_policy);
  $form.find("input[name='rates_plan_guarantee_policy']").val(rates_plan_guarantee_policy);
} //roomselect :: END

$('#hotel_dropdown .modal-content .hotel-mobile-dropdown .dropdown-menu .dropdown-item').click(function () {
  $('#navbarContent .hoteldropdown .hotel-dropdown-mobile  span').text($(this).text());
  $('#hotel_dropdown .modal-content .hotel-mobile-dropdown .dropdown-toggle span').text($(this).text());
  $('#hotel_dropdown').modal('hide');
});
$('.dropdown_toggle_desktop').on('click', function () {
  $('.minusSign').addClass('disabled')
})

$('.promocode-box-info-icon').click(function () {
  $('.promocode-info-box').toggle()
})

//? Enable restaurant dropdown in mobile
if (preset_hotel_id == 0) {


  $('#dineBookingModal .restaurant_dropdown > .global-booking-dropdown-mobile').click(function () {
    $('.global-booking-dropdown-mobile .global-booking-dropdown-mobile .all_Hotel__dropdown').addClass('show')
  })
}

$(document).on("focusout", "#promocode_dropdown.show .promocode-input-code-box-mobile input", function (e) {
  $(this).focus();
  // //console.log("focusing input");
});

$(".dinedatebox .global-booking-dropdown-desktop").click(function () {
  $("li.restaurant_dropdown .dropdown-toggle").dropdown("hide");
  $(".individualHotels_Dropdown-Menu.dropdown-menu.show").removeClass("show");
  $(".all_Hotel__dropdown.show").removeClass("show");
});
