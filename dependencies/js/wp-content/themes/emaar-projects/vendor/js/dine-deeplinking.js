document.addEventListener('DOMContentLoaded', function () {

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

  // Get the value of the 'restaurantID' parameter from the URL
  const urlParams = new URLSearchParams(window.location.search);
  const restaurantID = urlParams.get('id');
  const dateParam = urlParams.get('date');
  const timeParam = urlParams.get('time');
  const paxParam = urlParams.get('pax');

  // Check if the 'restaurantID' parameter is not empty
  if (restaurantID || restaurantID == '' || timeParam || timeParam == '' || dateParam || dateParam == '' || paxParam || paxParam == '') {

    // Find the button with matching data-id
    const buttons = document.querySelectorAll('.selected-restaurant');
    buttons.forEach(button => {
      const dataId = button.getAttribute('data-id');
      if (dataId && dataId === restaurantID) {
        // Trigger a click event on the button
        const restaurantId = button.getAttribute('data-id');
        const resturantName = button.getAttribute("data-restaurant");
        const hotelName = button.getAttribute("data-hotel");
        const contactEmail = button.getAttribute("data-email");
        const contactPhone = button.getAttribute("data-phone");
        const opensAt = button.getAttribute("data-OpensAt");
        const ClosesAt = button.getAttribute("data-ClosesAt");
        const MaxPartySize = button.getAttribute("data-MaxPartySize");
        const confirmationNumber = button.getAttribute("data-confirmation") || "";
        const modify = button.getAttribute("data-modify") || "";
        select_restaurant_event(restaurantId, resturantName, hotelName, contactEmail, contactPhone, opensAt, ClosesAt, MaxPartySize, confirmationNumber, modify);


      }
    });

    //select the date code in dinebooking.js

    // Format the time parameter to match the data-value format in the dropdown
    var formattedTimeParam = timeParam.replace('-', ':');

    // Find the dropdown item with the corresponding data-value and trigger a click event
    var dropdownItems = document.querySelectorAll('#timeDropdownId .time-value');
    dropdownItems.forEach(function (item) {
      if (item.getAttribute('data-value') === formattedTimeParam) {
        const selectedTimeSpan = document.querySelector('.global-booking-dropdown-desktop .fa-clock + span');
        const selectedTimeSpanMobile = document.querySelector('.global-booking-dropdown-mobile .fa-clock + span');

        if (selectedTimeSpan || selectedTimeSpanMobile) {
          selectedTimeSpan.textContent = item.textContent;
          selectedTimeSpanMobile.textContent = item.textContent;
          document.getElementById("timerangeboxtxt").value = item.textContent;
        }
      }
    });



    // Find the dropdown item with the corresponding data-value and trigger a click event
    var dropdownItemsText = document.querySelectorAll('#peopleDropdown .people-value');
    dropdownItemsText.forEach(function (item) {

      if (item.getAttribute('data-value') == paxParam) {


        const numberOfPeopleSpan = document.querySelector('.global-booking-dropdown-desktop.getAltAttrDine .fa-user-friends + span');
        const numberOfPeopleSpanMobile = document.querySelector('.global-booking-dropdown-mobile.getAltAttrDine .fa-user-friends + span');
        if (numberOfPeopleSpan || numberOfPeopleSpanMobile) {
          numberOfPeopleSpanMobile.textContent = item.textContent;
          numberOfPeopleSpan.textContent = item.textContent;
          document.getElementById("pax").value = paxParam;

        }

      }
    });
    const topBookNowButton = document.getElementById('topbooknow');
    topBookNowButton.click();
  }

});
