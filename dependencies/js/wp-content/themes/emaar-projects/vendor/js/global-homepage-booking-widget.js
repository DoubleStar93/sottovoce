document.addEventListener('DOMContentLoaded', function () {
  const hotelPopup = document.querySelector('.hotel-popup');
  const hotelMobilePopup = document.querySelector('.mobile-hotel-selector');
  const hotelMobilePopupClose = hotelMobilePopup.querySelector('.close-mobile-popup');
  const hotelSelector = document.querySelector('.hotel-selector');
  const widget = document.querySelector('.new-booking-widget');
  const widgetUI = document.querySelector('.widget-ui');
  const hotelListItems = document.querySelectorAll('.hotel_list_item');
  const datePopup = document.querySelector('.date-popup');
  const dateSelector = document.querySelector('.date-selector');
  const dateMobilePopup = document.querySelector('.mobile-date-selector');
  const dateMobilePopupClose = dateMobilePopup.querySelector('.close-mobile-popup');
  const selectedDatebutton = dateMobilePopup.querySelector('.select-date-button');
  const paxPopup = document.querySelector('.pax-popup');
  const paxMobilePopup = document.querySelector('.mobile-guest-selector');
  const paxSelector = document.querySelector('.guest-selector');
  const guestRooms = document.querySelector('.pax-popup .rooms');
  const addRoom = document.querySelectorAll('.addroom');
  const paxMobilePopupClose = paxMobilePopup.querySelector('.close-mobile-popup');
  const guestClearBtn = paxMobilePopup.querySelector('.guest-clear-btn');
  const mobileGuestRooms = paxMobilePopup.querySelector('.mobile-guest-selector .rooms');
  const codePopup = document.querySelector('.code-popup');
  const codeMobilePopup = document.querySelector('.mobile-code-selector');
  const codeMobilePopupClose = codeMobilePopup.querySelector('.close-mobile-popup');
  const codeSelector = document.querySelector('.code-selector');
  const findrooms = document.querySelectorAll('.findrooms');
  const stayCalendar = document.querySelectorAll('.stayCalendar');
  const IATACodeCheckbox = document.querySelectorAll('.chkPassportIATA_widget');
  const IATACodeInput = document.querySelectorAll('.iatacode_input_widget');
  const CorporateCodeCheckbox = document.querySelectorAll('.chkPassportCorporate_widget');
  const CorporateCodeInput = document.querySelectorAll('.corporatecode_input_widget');
  const GroupCodeCheckbox = document.querySelectorAll('.chkPassportGroup_widget');
  const GroupCodeInput = document.querySelectorAll('.groupcode_input_widget');
  const PromocodeCheckbox = document.querySelectorAll('.chkPassportPromo_widget');
  const PromocodeInput = document.querySelectorAll('.promocode_input_widget');
  const apply_btns = document.querySelectorAll('.widget_apply_btn');
  const book_for_someone_else_label = document.querySelectorAll('.book_for_someone_else_label');
  var mobileBookingwidget = document.querySelector('.mobile-bookingwidget-selector');
  var hotelwidget = document.querySelector('.hotel-selection');
  var datewidget = document.querySelector('.date-selection');
  var guestwidget = document.querySelector('.guest-selection');
  var codewidget = document.querySelector('.code-input-selection');
  var isMobile = window.innerWidth < 1199 ? true : false;
  var isTab = window.innerWidth < 699 ? true : false;
  var currencyCode = "AED";

  var hotelname = "";
  var hotelid = "";
  var adult_count = 1;
  var child_count = 0;
  var no_of_rooms = 1;
  var code_type = "";
  var code_value = "";
  var selected_codetype = "";
  var selected_codevalue = "";
  var start_date = "";
  var end_date = "";
  var rate_plan_code = "";
  var prices = {};
  var status = {};
  var minlength = {};
  let displayedMonths = new Set();
  var offset;
  var iata_code = "";
  var promo_code = "";
  var corporate_code = "";
  var group_code = "";
  var book_for_someone_else = "";
  let currentDate;
  function checkResolution() {
    isMobile = window.innerWidth < 1199 ? true : false;
    isTab = window.innerWidth < 699 ? true : false;
    if (start_date == "" && end_date == "") {
      if (isMobile)
        document.querySelector('.selected-date').textContent = checkinmobile_text;
      else
        document.querySelector('.selected-date').textContent = checkin_text;
    }
  }

  // Run on page load
  checkResolution();

  if (preset_hotel_id.length != 0 && preset_hotel_id != 0) {
    var offset_data = hotel_timezone_offset.filter(obj => { return obj.IbuId == preset_hotel_id });
    if (offset_data != "") {
      offset = offset_data[0]["timezone_offset"];
    }
  } else {
    offset = minimun_timezone_offset;
  }
  currentDate = new Date(moment().utcOffset(offset).format("YYYY/MM/DD"));

  // This will return the current date adjusted for the UTC offset
  // Listen to the window resize event and update isMobile
  window.addEventListener('resize', checkResolution);
  let date_picker_elements = document.querySelectorAll('.datepicker');

  let datepickers = Array.from(date_picker_elements).map(date_picker_element => {
    return new easepick.create({
      element: date_picker_element,
      css: [
        'https://cdn.jsdelivr.net/npm/@easepick/bundle@1.2.1/dist/index.css',
        '/wp-content/themes/emaar-projects/css/lib/easepick.css'
      ],
      inline: true,
      alwaysOpen: true,
      calendars: 2,
      grid: isTab ? 1 : 2,
      format: 'DD MMM YYYY',
      plugins: ['RangePlugin', 'LockPlugin'],
      RangePlugin: {
        tooltip: false,
        locale: {
          one: "night",
          other: "nights",
        },
      },
      lang: ICL,
      LockPlugin: {
        minDate: currentDate,
        maxDate: moment().add(2, 'year').toDate(),
      },
      setup(picker) {
        // Set initial dates if present
        // if (start_date && end_date) {
        //
        // }
        picker.on("select", (e) => {

          let start, end;
          if (e.detail.date) {
            start = e.detail.date.toLocaleDateString("en-US", { day: "2-digit", month: "2-digit", year: "numeric" });
            end = e.detail.date.toLocaleDateString("en-US", { day: "2-digit", month: "2-digit", year: "numeric" });
          } else {
            start = e.detail.start.toLocaleDateString("en-US", { day: "2-digit", month: "2-digit", year: "numeric" });
            end = e.detail.end.toLocaleDateString("en-US", { day: "2-digit", month: "2-digit", year: "numeric" });
          }


          // Convert start and end to Moment objects for formatting
          let startMoment = moment(start, 'MM/DD/YYYY');
          let endMoment = moment(end, 'MM/DD/YYYY');
          datepickers.forEach(p => {
            p.setStartDate(startMoment.toDate()); // Set the start date
            p.setEndDate(endMoment.toDate());     // Set the end date
          });
          if (e.detail.start && !e.detail.end) {
            console.log("start date alone");
          }

          document.querySelector('.selected-date').textContent =
            `${startMoment.format('DD/MM/YYYY')} - ${endMoment ? endMoment.format('DD/MM/YYYY') : 'Check Out'}`;
          document.querySelector('.selected-date').classList.add('visible-date');
          document.querySelectorAll('.mobile-popup-wrapper .date-selector-title-text').forEach(selectedDate => {
            selectedDate.textContent =
              `${startMoment.format('DD/MM/YYYY')} - ${endMoment ? endMoment.format('DD/MM/YYYY') : 'Check Out'}`;
          })
          start_date = startMoment.format('YYYY-MM-DD');
          end_date = endMoment.format('YYYY-MM-DD');
          const nightDifference = endMoment.diff(startMoment, 'days'); // Calculate the difference in nights
          var var_night = nightDifference > 1 ? nightsVar : nightVar;
          document.querySelectorAll('.night_var_widget').forEach(nightcount => {
            nightcount.classList.remove('d-none');
            nightcount.innerText = nightDifference + var_night;
          });
          document.querySelector('.date-clear-btn').classList.remove('d-none');
          checkDateValidity(start_date, end_date);

        });
        picker.on('view', (evt) => {
          if (isTab) {
            const calendars = picker.ui.container.querySelectorAll('.calendar');
            count = 0;
            calendars.forEach(calendar => {
              const displayedTitle = calendar.querySelector('.month-name')?.textContent;

              let calendarMonth, calendarYear;
              if (calendar.dataset.month && calendar.dataset.year) {
                calendarMonth = parseInt(calendar.dataset.month);
                calendarYear = parseInt(calendar.dataset.year);
              }
              else {
                // Store current locale
                const currentLocale = moment.locale();

                // Try different approaches
                // 1. First try parsing with current locale
                let parsedDate = moment(displayedTitle, 'MMMM YYYY');

                // 2. If that fails, try with English
                if (!parsedDate.isValid()) {
                  moment.locale('en');
                  parsedDate = moment(displayedTitle, 'MMMM YYYY');
                }

                // 3. If that fails, try to get the date from the calendar DOM structure
                if (!parsedDate.isValid()) {
                  // Get month data from easepick's internal structure if possible
                  const dateCell = calendar.querySelector('.day:not(.day-locked):not(.day-hidden)');
                  if (dateCell && dateCell.dataset.time) {
                    parsedDate = moment(parseInt(dateCell.dataset.time));
                  }
                }
                if (parsedDate.isValid()) {
                  calendarMonth = parsedDate.month();
                  calendarYear = parsedDate.year();

                  // Reset locale to what it was
                  moment.locale(currentLocale);
                } else {
                  console.error("Could not determine month/year for calendar:", displayedTitle);
                  // Default behavior - don't hide the calendar
                  calendar.style.display = '';
                  count++;
                  return;
                }
              }

              const englishMonthName = moment().locale('en').month(calendarMonth).format('MMMM');
              console.log("Calendar month in English:", englishMonthName, calendarYear);
              const calendarStartDate = new Date(calendarYear, calendarMonth, 1);
              const maxDatePlusOne = new Date(picker.options.LockPlugin.maxDate);
              maxDatePlusOne.setDate(maxDatePlusOne.getDate() + 1); // to include the last month

              // Perform your visibility check
              if (calendarStartDate > maxDatePlusOne) {
                calendar.style.display = 'none';
              } else {
                calendar.style.display = '';
                count++;
              }
            });
            if (count == 1) {
              const firstCalendar = calendars[0];
              if (firstCalendar) {
                const nextButton = firstCalendar.querySelector('.next-button');
                if (nextButton) {
                  nextButton.style.visibility = 'hidden';
                }
              }
            }

          }
          if (dateSelector.classList.contains('errorbox'))
            dateSelector.classList.remove('errorbox');
          updateprice(evt.detail, 'staypicker');
          if (start_date && end_date) {
            var difference_in_days = moment(end_date).diff(moment(start_date), 'days');
            if (start_date === end_date && status[start_date] === "Only-Check-out") {
              showCalendarError(checkin_unavail);
            } else if (start_date === end_date) {
              showCalendarError(minLength_error_message + " 1 " + nights_stay_var);


              // showCalendarError(calendar_minerror);
            } else if (status[end_date] === "Only-Check-in") {
              showCalendarError(checkout_unavail);
            } else if (status[start_date] === "Only-Check-out") {
              showCalendarError(checkin_unavail);
            } else if (difference_in_days < minlength[start_date]) {
              showCalendarError(minLength_error_message + " " + minlength[start_date] + " " + nights_stay_var);
            }
          }
        });
      },
    });
  });



  // Hotel Popup functions
  window.addEventListener('scroll', function () {
    var scrollThreshold = 200;
    if (isMobile) {
      scrollThreshold = 20;
      if (window.scrollY) {
        widget.classList.add('active-scroll', 'fixed-scroll');
      } else {
        widget.classList.remove('active-scroll', 'fixed-scroll');
      }

    }
  });

  window.addEventListener('scroll', function () {
    if (window.scrollY > 0 && window.scrollX > 0)
      hotelPopup.classList.add('d-none');

    const scrollThreshold = window.innerHeight;
    if (!isMobile) {
      const scrollThreshold = widget.getBoundingClientRect().top;
      if (scrollThreshold <= 0 && window.scrollY > window.innerHeight * 0.8) {
        widget.classList.add('fixed-scroll', 'active-scroll');
        const topPosition = widgetUI.getBoundingClientRect().bottom;
        hotelPopup.style.top = topPosition + 2 + 'px';
        hotelPopup.style.position = 'fixed';
      } else {
        widget.classList.remove('fixed-scroll', 'active-scroll');
        hotelPopup.style.position = 'absolute';
        hotelPopup.style.top = 'unset';
      }
    }
  });
  window.addEventListener('scroll', function () {
    if (isMobile) {
      if (window.innerHeight + window.scrollY >= document.documentElement.scrollHeight) {
        let height = widget.offsetHeight;
        document.querySelector('.footer').style.paddingBottom = height + 'px';
      }
    }
  });

  hotelSelector.addEventListener('click', function () {
    if (isMobile)
      hotelMobilePopup.classList.toggle('d-none')
    else {
      hotelPopup.classList.toggle('d-none');

      if (window.scrollY < window.innerHeight * 0.8) {
        window.scrollTo(0, 0);
      } else {
        if (widget.classList.contains('active-scroll')) {
          const topPosition = widgetUI.getBoundingClientRect().bottom;
          hotelPopup.style.top = topPosition + 2 + 'px';
          hotelPopup.style.position = 'fixed';
        } else {
          hotelPopup.style.position = 'absolute';
          hotelPopup.style.top = 'unset';
        }
      }

    }
  });

  document.addEventListener('click', function (event) {
    if (!hotelPopup.contains(event.target) && !hotelSelector.contains(event.target)) {
      hotelPopup.classList.add('d-none');
    }
  });
  hotelMobilePopupClose.addEventListener('click', function (event) {
    hotelMobilePopup.classList.add('d-none');
  });

  hotelListItems.forEach(item => {
    item.addEventListener('click', function () {
      let hotelId = item.getAttribute('data-id');
      hotelSelector.setAttribute('data-id', hotelId);
      hotelPopup.classList.add('d-none');
      hotelSelector.querySelector('.selected-hotel').textContent = item.textContent;
      hotelMobilePopup.querySelector('.hotel-selector-title-text').textContent = item.textContent;
      document.querySelector('.mobile-bookingwidget-selector .hotel-selector-title-text').textContent = item.textContent;
      hotelname = item.textContent.trim();
      hotelid = hotelId;
      if (hotelid != 'all' && hotelid != 0) {
        var offset_data = hotel_timezone_offset.filter(obj => { return obj.IbuId == hotelid });
        if (offset_data != "") {
          offset = offset_data[0]["timezone_offset"];
        }
      } else {
        offset = minimun_timezone_offset;
      }
      currentDate = new Date(moment().utcOffset(offset).format("YYYY/MM/DD"));


      initaiatecalendar();
      if (isMobile) {
        hotelMobilePopup.classList.add('d-none');
        dateMobilePopup.classList.remove('d-none');
      }
      if (hotelid == 'all')
        datepickers.forEach(picker => {
          picker.renderAll();
        });

    });
  });
  if (preset_hotel_id.length != 0 && preset_hotel_id != 0) {
    hotelid = preset_hotel_id;
    hotelname = preset_hotel_name;
    document.querySelector('.mobile-bookingwidget-selector .hotel-selector-title-text').textContent = hotelname;
    document.querySelector('.hotel-selection').classList.add('disabled');

    initaiatecalendar();
  }
  function initaiatecalendar() {
    prices = {};
    status = {};
    minlength = {};
    // clear the displayed months
    displayedMonths = new Set();
    stayCalendar.forEach(calenar => {
      if (!calenar.classList.contains('d-none'))
        calenar.classList.add('d-none');
    });
    generateFirstMonthData();
  }

  // Date Popup functions
  function generateFirstMonthData() {
    var pricestext = document.querySelector('.prices-text');
    var pricestextmobile = document.querySelector('.currency-text');
    if (hotelid != null && hotelid != "all" && hotelid != "") {
      const from_date = moment(currentDate).format('YYYY-MM-DD');
      const to_date = moment(currentDate).endOf('month').format("YYYY-MM-DD");

      call_ajax_method(hotelid, adult_count, child_count, no_of_rooms, code_type, code_value, from_date, to_date, rate_plan_code).then((result) => {
        currencyCode = result.currencyCode;
        console.log(currencyCode);
        pricestext.textContent = price_var + " " + currencyCode;
        pricestextmobile.textContent = price_var + " " + currencyCode;
        if (pricestext.classList.contains('d-none'))
          document.querySelector('.prices-text').classList.remove('d-none');
        if (pricestextmobile.classList.contains('d-none'))
          pricestextmobile.classList.remove('d-none');

        Object.keys(result).forEach((key) => {
          status[key] = result[key].Status;
          minlength[key] = result[key].MinLength;
          if (result[key].Status == "Sold-Out")
            prices[key] = 'N/A';
          else if (result[key].Status == "Only-Check-out")
            prices[key] = 'Chk-out';
          else if (result[key].Status == "Only-Check-in")
            prices[key] = 'Chk-in';
          else if (result[key].ShowRate == true)
            prices[key] = result[key].Rate;
          else
            prices[key] = '';
        });

        datepickers.forEach(picker => {
          picker.renderAll();
        });
      });
    } else {
      if (!pricestext.classList.contains('d-none'))
        document.querySelector('.prices-text').classList.add('d-none');
      if (!pricestextmobile.classList.contains('d-none'))
        pricestextmobile.classList.add('d-none');
    }
  }

  dateSelector.addEventListener('click', function () {
    if (isMobile) {
      dateMobilePopup.classList.toggle('d-none');
      datepickers.forEach(picker => {
        picker.renderAll();
      });
    }
    else {
      datePopup.classList.toggle('d-none');
      if (window.scrollY < window.innerHeight * 0.8) {
        window.scrollTo(0, 0);
      }
    }
  });

  document.addEventListener('click', function (event) {
    if (!datePopup.contains(event.target) && !dateSelector.contains(event.target)) {
      datePopup.classList.add('d-none');
    }

  });
  dateMobilePopupClose.addEventListener('click', function (event) {
    dateMobilePopup.classList.add('d-none');
  });


  function updateprice(details, picker) {
    const { view, date, target } = details;
    const d = date ? date.format('YYYY-MM-DD') : null;
    const maxDate = moment().add(2, 'years').toDate();
    if (date) {
      // Get the year and month in YYYY-MM format
      const monthKey = `${date.getFullYear()}-${date.getMonth() + 1}`; // Months are 0-based

      if (date <= maxDate && date >= currentDate) {
        if (!displayedMonths.has(monthKey)) {
          displayedMonths.add(monthKey);
          if (hotelid != null && hotelid != "all" && hotelid != "") {

            const displayMonth = date.getMonth();
            const displayYear = date.getFullYear();
            const now = currentDate;
            const currentMonth = now.getMonth(); // 0-based month (0 for January, 1 for February, etc.)
            const currentYear = now.getFullYear();
            // check if the date is in the current month
            if (currentMonth === displayMonth && currentYear === displayYear) {
              from_date = moment(currentDate).utcOffset(offset).startOf('day').format('YYYY-MM-DD');
              to_date = moment(currentDate).utcOffset(offset).endOf('month').format('YYYY-MM-DD');
              // do nothing
            } else {
              from_date = moment(date).startOf('month').format('YYYY-MM-DD');
              to_date = moment(date).add(1, 'months').startOf('month').subtract(1, 'days').format('YYYY-MM-DD');
            }

            call_ajax_method(hotelid, adult_count, child_count, no_of_rooms, code_type, code_value, from_date, to_date, rate_plan_code).then((result) => {

              currencyCode = result.currencyCode;
              Object.keys(result).forEach((key) => {
                status[key] = result[key].Status;
                minlength[key] = result[key].MinLength;
                if (result[key].Status == "Sold-Out")
                  prices[key] = 'N/A';
                else if (result[key].Status == "Only-Check-out")
                  prices[key] = 'Chk-out';
                else if (result[key].Status == "Only-Check-in")
                  prices[key] = 'Chk-in';
                else if (result[key].ShowRate == true)
                  prices[key] = result[key].Rate;
                else
                  prices[key] = '';

              });

              if (picker == 'staypicker')
                datepickers.forEach(picker => {
                  picker.renderAll();
                });
            });
          }
        }
      }
    }
    if (view === 'CalendarDay' && prices[d] && date <= maxDate) {
      let span = target.querySelector('.day-price') || document.createElement('span');
      span.className = 'day-price';
      span.innerHTML = `${prices[d]}`; // Use updated prices if needed
      target.append(span);
      if (prices[d] == 'N/A') {
        target.classList.add('not-available');

        if (target.classList.contains('today')) {
          target.classList.remove('today');
        }
      }
    }
  }
  function checkDateValidity(start, end) {
    var difference_in_days = moment(end).diff(moment(start), 'days');
    if (start === end && status[start] === "Only-Check-out") {
      showCalendarError(checkin_unavail);
    } else if (start === end) {
      showCalendarError(minLength_error_message + " 1 " + nights_stay_var);

      // showCalendarError(calendar_minerror);
    } else if (status[end] === "Only-Check-in") {
      showCalendarError(checkout_unavail);
    } else if (status[start] === "Only-Check-out") {
      showCalendarError(checkin_unavail);
    } else if (difference_in_days < minlength[start]) {
      showCalendarError(minLength_error_message + " " + minlength[start] + " " + nights_stay_var);
    } else {
      hideCalendarError();
    }
  }

  function showCalendarError(message) {
    stayCalendar.forEach(calenar => {
      calenar.classList.remove('d-none');
      calenar.innerHTML = `
    <div class="calendar-error-msg mb-0" role="alert">
      <p>
      <i class="fal fa-exclamation-triangle px-1"></i>
      <span class="error-message">${message}</span>
      </p>
    </div>`;
    });
    findrooms.forEach(findRoom => {
      findRoom.classList.add('disabled');
      findRoom.setAttribute('disabled', 'disabled');
    });
    dateSelector.classList.add('errorbox');
    selectedDatebutton.classList.add('d-none');
    // selectedDatebutton.setAttribute('disabled', 'disabled');
  }

  function hideCalendarError() {
    stayCalendar.forEach(calenar => {
      calenar.classList.add('d-none');
    });
    findrooms.forEach(findRoom => {
      findRoom.classList.remove('disabled');
      findRoom.removeAttribute('disabled');
    });
    selectedDatebutton.classList.remove('d-none');
    document.querySelector('.date-popup').classList.add('d-none');
    if (dateSelector.classList.contains('errorbox'))
      dateSelector.classList.remove('errorbox');
  }
  function clearDatePicker() {
    datepickers.forEach(picker => {
      picker.clear(); // Clear the selected date
    });
    // Reset the displayed date text
    if (isMobile)
      document.querySelector('.selected-date').textContent = checkinmobile_text;
    else
      document.querySelector('.selected-date').textContent = checkin_text;
    document.querySelector('.selected-date').classList.remove('visible-date');
    document.querySelectorAll('.mobile-popup-wrapper .date-selector-title-text').forEach(selectedDate => {
      selectedDate.textContent = checkin_text;
    })
    document.querySelectorAll('.night_var_widget').forEach(nightcount => {
      nightcount.classList.add('d-none');
    });
    document.querySelector('.date-clear-btn').classList.add('d-none');

    start_date = "";
    end_date = "";
    stayCalendar.forEach(calenar => {
      if (!calenar.classList.contains('d-none'))
        calenar.classList.add('d-none');
    });
    selectedDatebutton.classList.add('d-none');
  }

  document.querySelector('.date-clear-btn').addEventListener('click', function () {
    clearDatePicker();
  });

  selectedDatebutton.addEventListener('click', function () {
    dateMobilePopup.classList.add('d-none');
    mobileBookingwidget.classList.remove('d-none');
  });
  // Pax Popup functions
  paxSelector.addEventListener('click', function () {
    if (isMobile)
      paxMobilePopup.classList.toggle('d-none');
    else {
      paxPopup.classList.toggle('d-none');
      if (window.scrollY < window.innerHeight * 0.8) {
        window.scrollTo(0, 0);
      }
    }
  });

  document.addEventListener('click', function (event) {
    if (!paxPopup.contains(event.target) && !paxSelector.contains(event.target) && !event.target.closest('.btn-remove-room')) {
      paxPopup.classList.add('d-none');
    }
  });
  paxMobilePopupClose.addEventListener('click', function () {
    paxMobilePopup.classList.add('d-none');
  });

  addRoom.forEach(addRoombtn => {
    addRoombtn.addEventListener('click', function () {
      if (window.scrollY < window.innerHeight * 0.8) {
        window.scrollTo(0, 0);
      }
      if (no_of_rooms == 1) {
        [guestRooms, mobileGuestRooms].forEach(container => {
          const dropdownDiv = container.querySelector('.room:first-child .room-header');
          dropdownDiv.classList.remove('d-none');
          dropdownDiv.classList.add('d-flex');
        });
      }

      if (no_of_rooms < 9) {
        const newRoomNumber = no_of_rooms + 1;
        addnewroom(newRoomNumber);
        addnewroomMobile(newRoomNumber);
        if (addRoombtn.classList.contains('desktop'))
          updatechildadultcount('desktop');
        else
          updatechildadultcount('mobile');

        // Scroll to the bottom of the room lists
        [guestRooms, mobileGuestRooms].forEach(container => {
          container.scrollTo({
            top: paxPopup.scrollHeight,
            behavior: 'smooth'
          });
        });
        paxPopup.scrollTop = paxPopup.scrollHeight;
        paxMobilePopup.querySelector('.overflow-wrapper').scrollTop = paxMobilePopup.querySelector('.overflow-wrapper').scrollHeight;
      }

      if (no_of_rooms == 8) {
        addRoom.forEach(addRoombtn => {
          addRoombtn.parentElement.classList.add('d-none');
        });
      }
      no_of_rooms++;
    });
  });

  function addnewroom(newRoomNumber) {
    const newRoom = document.createElement('div');
    newRoom.classList.add('room');
    newRoom.setAttribute('data-room', newRoomNumber);

    newRoom.innerHTML = `
      <div class="room-header d-flex align-items-center mt-3">
        <div class="room-title">${room_var} ${newRoomNumber}</div>
        <span class="btn-remove-room" aria-label="Remove room">
          <i class="fal fa-trash-alt trash_widget"></i>
        </span>
      </div>
      <div class="guest-counter d-flex justify-content-between align-items-center py-1 my-3">
        <label class="guest-label mb-0">${adult_text} (12+)</label>
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
        <label class="guest-label mb-0">${children_text} (4-11)</label>
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
    `;

    guestRooms.appendChild(newRoom);
  }
  function addnewroomMobile(newRoomNumber) {
    const newRoom = document.createElement('div');
    newRoom.classList.add('room', 'mb-2', 'bg-grey', 'rounded-8px', 'py-2');
    newRoom.setAttribute('data-room', newRoomNumber);

    newRoom.innerHTML = `
      <div class="px-4 room-header align-items-center d-flex mt-2">
                  <div class="room-title">${room_var} ${newRoomNumber}</div>
                  <span class="btn-remove-room" aria-label="Remove room">
                    <i class="fal fa-trash-alt trash_widget"></i>
                  </span>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="guest-counter w-100 py-1">
                    <label class="guest-label mb-2 px-4">${adult_text} (12+)</label>
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
                    <label class="guest-label mb-2 px-4">${children_text} (4-11)</label>
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
    `;

    mobileGuestRooms.appendChild(newRoom);
  }

  function updatechildadultcount(resolution) {
    let adult_counters;
    let child_counters;
    if (resolution == 'desktop') {
      adult_counters = guestRooms.querySelectorAll('.adult-counter');
      child_counters = guestRooms.querySelectorAll('.child-counter');
    }
    else {
      adult_counters = mobileGuestRooms.querySelectorAll('.adult-counter');
      child_counters = mobileGuestRooms.querySelectorAll('.child-counter');
    }
    let adult_totalcount = 0;
    let child_totalcount = 0;

    adult_counters.forEach(function (item) {
      adult_totalcount += parseInt(item.innerText);
    });
    child_counters.forEach(function (item) {
      child_totalcount += parseInt(item.innerText);
    });

    adult_count = adult_totalcount;
    child_count = child_totalcount;
    paxSelector.querySelector('.selected-guest').textContent = `${adult_totalcount} ${adult_text}, ${child_totalcount} ${child_text}`;
    document.querySelectorAll('.guest-selected-title-text').forEach(guest => {
      guest.textContent = `${adult_totalcount} ${adult_text}, ${child_totalcount} ${child_text}`;
    });

  }

  // Desktop
  guestRooms.addEventListener('click', function (event) {
    const target = event.target;
    // find the data-room attribute value
    cuurentroomnumber = target.closest('.room').getAttribute('data-room');
    const counterBox = target.closest('.counter-box');
    const mobileRoom = mobileGuestRooms.querySelector(`.room[data-room="${cuurentroomnumber}"]`);


    if (counterBox) {
      const counter = counterBox.querySelector('.count');
      const isAdult = counter.classList.contains('adult-counter');
      const isPlus = target.closest('[data-action="plus"]');
      const isMinus = target.closest('[data-action="minus"]');

      if (isAdult)
        mobileCounter = mobileRoom.querySelector('.counter-box .adult-counter');
      else
        mobileCounter = mobileRoom.querySelector('.counter-box .child-counter');

      const mobileMinBtn = mobileCounter.closest('.counter-box').querySelector('[data-action="minus"]');
      const mobilePlusBtn = mobileCounter.closest('.counter-box').querySelector('[data-action="plus"]');

      if (isPlus || isMinus) {
        let count = parseInt(counter.innerText);
        const minBtn = counterBox.querySelector('[data-action="minus"]');
        const plusBtn = counterBox.querySelector('[data-action="plus"]');

        if (isPlus) {
          count++;
          counter.innerText = count;
          minBtn.classList.remove('disabled');
          mobileCounter.innerText = count;
          mobileMinBtn.classList.remove('disabled');
          if (count == 10) {
            plusBtn.classList.add('disabled');
            mobilePlusBtn.classList.add('disabled');
          }
        } else if (isMinus && count > (isAdult ? 1 : 0)) {
          count--;
          counter.innerText = count;
          mobileCounter.innerText = count;
          if (count === (isAdult ? 1 : 0)) {
            minBtn.classList.add('disabled');
            mobileMinBtn.classList.add('disabled');
          }
          if (count < 10) {
            if (plusBtn.classList.contains('disabled'))
              plusBtn.classList.remove('disabled');
            if (mobilePlusBtn.classList.contains('disabled'))
              mobilePlusBtn.classList.remove('disabled');
          }


        }

        updatechildadultcount('desktop');
      }
    }

    if (target.closest('.btn-remove-room')) {
      event.stopPropagation(); // Add this line to prevent event bubbling
      const room = target.closest('.room');
      const mobileroom = mobileGuestRooms.querySelector(`.room[data-room="${cuurentroomnumber}"]`); //
      if (mobileroom && room && guestRooms.children.length > 1) {
        room.remove();
        mobileroom.remove(); // Remove the room
        updatechildadultcount('desktop');
        no_of_rooms--;
        addRoom.forEach(addRoombtn => {
          if (addRoombtn.parentElement.classList.contains('d-none'))
            addRoombtn.parentElement.classList.remove('d-none');
        });
        // Renumber the  desktop rooms
        renumberroom();
      }
    }
  });
  // Mobile
  mobileGuestRooms.addEventListener('click', function (event) {
    const target = event.target;
    cuurentroomnumber = target.closest('.room').getAttribute('data-room');
    const counterBox = target.closest('.counter-box');
    const desktopRoom = guestRooms.querySelector(`.room[data-room="${cuurentroomnumber}"]`);

    if (counterBox) {
      const counter = counterBox.querySelector('.count');
      const isAdult = counter.classList.contains('adult-counter');
      const isPlus = target.closest('[data-action="plus"]');
      const isMinus = target.closest('[data-action="minus"]');
      let desktopCounter;
      if (isAdult)
        desktopCounter = desktopRoom.querySelector('.counter-box .adult-counter');
      else
        desktopCounter = desktopRoom.querySelector('.counter-box .child-counter');

      const desktopMinBtn = desktopCounter.closest('.counter-box').querySelector('[data-action="minus"]');

      const desktopPlusBtn = desktopCounter.closest('.counter-box').querySelector('[data-action="plus"]');
      if (isPlus || isMinus) {
        let count = parseInt(counter.innerText);
        const minBtn = counterBox.querySelector('[data-action="minus"]');
        const plusBtn = counterBox.querySelector('[data-action="plus"]');

        if (isPlus) {
          count++;
          counter.innerText = count;
          minBtn.classList.remove('disabled');
          desktopCounter.innerText = count;
          desktopMinBtn.classList.remove('disabled');
          if (count == 10) {
            plusBtn.classList.add('disabled');
            desktopPlusBtn.classList.add('disabled');
          }
        } else if (isMinus && count > (isAdult ? 1 : 0)) {
          count--;
          counter.innerText = count;
          desktopCounter.innerText = count;
          if (count === (isAdult ? 1 : 0)) {
            minBtn.classList.add('disabled');
            desktopMinBtn.classList.add('disabled');
          }
          if (count < 10) {
            if (plusBtn.classList.contains('disabled'))
              plusBtn.classList.remove('disabled');
            if (desktopPlusBtn.classList.contains('disabled'))
              desktopPlusBtn.classList.remove('disabled');
          }
        }

        updatechildadultcount('mobile'); // Update the total count for desktop
      }
    }

    if (target.closest('.btn-remove-room')) {
      event.stopPropagation(); // Prevent event bubbling
      const room = target.closest('.room');
      const desktoproom = guestRooms.querySelector(`.room[data-room="${cuurentroomnumber}"]`); //
      if (desktoproom && room && mobileGuestRooms.children.length > 1) {
        room.remove();
        desktoproom.remove(); // Remove the room
        updatechildadultcount('mobile'); // Update the total count for desktop
        no_of_rooms--;
        addRoom.forEach(addRoombtn => {
          if (addRoombtn.parentElement.classList.contains('d-none'))
            addRoombtn.parentElement.classList.remove('d-none');
        });
        renumberroom();
      }
    }
  });
  function renumberroom() {
    // Renumber the rooms for both desktop and mobile
    [guestRooms, mobileGuestRooms].forEach(container => {
      const rooms = container.querySelectorAll('.room');
      rooms.forEach((room, index) => {
        const roomNumber = index + 1;
        room.setAttribute('data-room', roomNumber);
        room.querySelector('.room-title').textContent = `${room_var} ${roomNumber}`;
      });
      // If only one room is left, add 'd-none' to the room-header
      if (rooms.length === 1) {
        const firstRoomHeader = rooms[0].querySelector('.room-header');
        firstRoomHeader.classList.add('d-none');
        firstRoomHeader.classList.remove('d-flex');
      }
    });
  }
  guestClearBtn.addEventListener('click', function (event) {
    clearpaxdata();
  });
  function clearpaxdata() {
    // Clear all rooms except the first one
    no_of_rooms = 1;
    [guestRooms, mobileGuestRooms].forEach(container => {
      const rooms = container.querySelectorAll('.room');

      // Remove all rooms except the first
      for (let i = 1; i < rooms.length; i++) {
        if (rooms.length > 1) {
          rooms[i].remove();
        }
      }
      // Set the first room to have 1 adult and 0 children
      const firstRoom = rooms[0];
      const firstRoomHeader = rooms[0].querySelector('.room-header');
      firstRoomHeader.classList.add('d-none');
      firstRoomHeader.classList.remove('d-flex');
      firstRoom.querySelector('.adult-counter').innerText = '1';
      const adultCounterMinusBtn = firstRoom.querySelector('.adult-counter').closest('.counter-box').querySelector('[data-action="minus"]');
      if (adultCounterMinusBtn) {
        adultCounterMinusBtn.classList.add('disabled');
      }
      firstRoom.querySelector('.child-counter').innerText = '0';
      const childCounterMinusBtn = firstRoom.querySelector('.child-counter').closest('.counter-box').querySelector('[data-action="minus"]');
      if (childCounterMinusBtn) {
        childCounterMinusBtn.classList.add('disabled');
      }
      updatechildadultcount('mobile');
    });
    addRoom.forEach(addRoombtn => {
      if (addRoombtn.parentElement.classList.contains('d-none'))
        addRoombtn.parentElement.classList.remove('d-none');
    });
  }
  book_for_someone_else_label.forEach(bfse => {
    bfse.addEventListener('click', function (e) {
      e.stopPropagation();
      const isChecked = $(this).find('input[name="book_for_someone_else_checkbox"]').is(":checked");
      book_for_someone_else = isChecked ? 1 : 0;
      book_for_someone_else_label.forEach(label => {
        label.querySelector('input[name="book_for_someone_else_checkbox"]').checked = isChecked;
      });
    });
  });
  document.querySelector('.mobile-guest-selector-done').addEventListener('click', function () {
    paxMobilePopup.classList.add('d-none');
    mobileBookingwidget.classList.remove('d-none');
  });
  document.querySelector('.backtoguestwidget').addEventListener('click', function () {
    paxMobilePopup.classList.add('d-none');
    mobileBookingwidget.classList.remove('d-none');
  });


  // Code Popup functions
  codeSelector.addEventListener('click', function () {

    if (start_date === "" || end_date === "") {
      dateSelector.classList.add('errorbox');
    }
    else {
      if (window.scrollY < window.innerHeight * 0.8) {
        window.scrollTo(0, 0);
      }
      codePopup.classList.toggle('d-none');
    }
  });

  document.addEventListener('click', function (event) {
    if (!codePopup.contains(event.target) && !codeSelector.contains(event.target)) {
      codePopup.classList.add('d-none');
    }
  });
  codeMobilePopupClose.addEventListener('click', function (event) {
    codeMobilePopup.classList.add('d-none');

  });
  var iataChecked = false;
  var promoChecked = false;
  var corporateChecked = false;
  var groupChecked = false;
  IATACodeCheckbox.forEach(IATAcode => {
    IATAcode.addEventListener('click', function () { // Changed 'change' to 'click'
      const anyChecked = this.checked;
      iataChecked = this.checked;
      if (check_checkbox()) { // Check before changing the checkbox state
        IATACodeCheckbox.forEach(checkbox => {
          checkbox.checked = anyChecked; // Check or uncheck all based on any checked
        });

        // Loop through IATACodeInput and show/hide based on any checked
        IATACodeInput.forEach(input => {
          input.style.display = anyChecked ? 'block' : 'none';
        });
      } else {
        this.checked = false; // Uncheck if check_checkbox() returns false
        iataChecked = false;
      }
    });
  });
  CorporateCodeCheckbox.forEach(Corporatecode => {
    Corporatecode.addEventListener('click', function () { // Changed 'change' to 'click'
      const anyChecked = this.checked;
      corporateChecked = this.checked;
      if (check_checkbox()) { // Check before changing the checkbox state
        CorporateCodeCheckbox.forEach(checkbox => {
          checkbox.checked = anyChecked; // Check or uncheck all based on any checked
        });
        CorporateCodeInput.forEach(input => {
          input.style.display = anyChecked ? 'block' : 'none';
        });
      } else {
        this.checked = false; // Uncheck if check_checkbox() returns false
        corporateChecked = false;
      }
    });
  });
  GroupCodeCheckbox.forEach(Groupcode => {
    Groupcode.addEventListener('click', function () { // Changed 'change' to 'click'
      const anyChecked = this.checked;
      groupChecked = this.checked;
      if (check_checkbox()) { // Check before changing the checkbox state
        GroupCodeCheckbox.forEach(checkbox => {
          checkbox.checked = anyChecked; // Check or uncheck all based on any checked
        });
        GroupCodeInput.forEach(input => {
          input.style.display = anyChecked ? 'block' : 'none';
        });
      } else {
        this.checked = false; // Uncheck if check_checkbox() returns false
        groupChecked = false;
      }
    });
  });
  PromocodeCheckbox.forEach(promocode => {
    promocode.addEventListener('click', function () { // Changed 'change' to 'click'
      const anyChecked = this.checked;
      promoChecked = this.checked;
      if (check_checkbox()) { // Check before changing the checkbox state
        PromocodeCheckbox.forEach(checkbox => {
          checkbox.checked = anyChecked; // Check or uncheck all based on any checked
        });
        PromocodeInput.forEach(input => {
          input.style.display = anyChecked ? 'block' : 'none';
        });
      } else {
        this.checked = false; // Uncheck if check_checkbox() returns false
        promoChecked = false;
      }
    });
  });
  function check_checkbox() {
    var checkedCount = [iataChecked, promoChecked, corporateChecked, groupChecked].filter(Boolean).length;
    // Case 3: This combination is not valid
    if (groupChecked && checkedCount > 1) {
      document.querySelectorAll('.group_error_widget').forEach(grouperror => {
        if (grouperror.classList.contains('d-none'))
          grouperror.classList.remove('d-none');
      });

    }
    // Case 1: You can't apply two codes without IATA code combination
    else if ((promoChecked || corporateChecked || groupChecked) && !iataChecked && checkedCount > 1) {
      document.querySelectorAll('.iata_error_widget').forEach(iataerror => {
        if (iataerror.classList.contains('d-none'))
          iataerror.classList.remove('d-none');
      });
    }

    // Case 2: You can't apply more than two codes
    else if (checkedCount > 2) {
      document.querySelectorAll('.click_error_widget').forEach(clickerror => {
        if (clickerror.classList.contains('d-none'))
          clickerror.classList.remove('d-none');
      });
    }
    else {
      document.querySelectorAll('.error_label').forEach(function (item) {
        if (!item.classList.contains('d-none')) {
          item.classList.add('d-none');
        }
      });
      return true;
    }
    return false;
  }
  document.querySelectorAll('.inputfield_widget').forEach(input => {
    input.addEventListener('input', function () {
      if (this.value.trim() !== '') {
        this.nextElementSibling.removeAttribute('disabled');
      } else {
        this.nextElementSibling.setAttribute('disabled', 'disabled');
      }
    });
  });
  apply_btns.forEach(function (item) {
    item.addEventListener('click', function () {
      pop_up = item.parentElement;
      pop_up.querySelector('.button-loader').classList.remove('d-none');
      var code;
      if (item.previousElementSibling.value !== "") {
        code = item.previousElementSibling.value;
        if (item.parentElement.classList.contains('iatacode_input_widget')) {
          iata_code = code;
          // code_type = "IATA";
          // code_value = iata_code;
          selected_codetype = "IATA";
          selected_codevalue = iata_code;
        }
        else if (item.parentElement.classList.contains('promocode_input_widget')) {
          promo_code = code;
          code_type = "pcode";
          code_value = promo_code;
          selected_codetype = "Promo";
          selected_codevalue = code;
        }
        else if (item.parentElement.classList.contains('corporatecode_input_widget')) {
          corporate_code = code;
          code_type = "ccode";
          code_value = corporate_code;
          selected_codetype = "Corporate";
          selected_codevalue = code;
        }
        else if (item.parentElement.classList.contains('groupcode_input_widget')) {
          group_code = code;
          code_type = "gcode";
          code_value = group_code;
          selected_codetype = "Group";
          selected_codevalue = code;
        }
        verify_code_widget(item.parentElement);

      }
      else {
        //  add error
      }

    });
  });

  function verify_code_widget(item) {
    if (hotelid != undefined && hotelid !== "all" && hotelid != "") {
      var siteUrl = "/wp-json/reservation/v1/hotels/verify_promo_code";
      var details = {
        IbuId: hotelid,
        cid: start_date,
        cod: end_date,
        rooms: no_of_rooms,
        adult: adult_count,
        child: child_count,
      }
    } else {
      var siteUrl = "/wp-json/reservation/v1/find/hotels_verify_code";
      var details = {
        ICL: ICL,
        cid: start_date,
        cod: end_date,
        rooms: no_of_rooms,
        adult: adult_count,
        child: child_count,
      }
    }
    if (selected_codetype != "" && selected_codevalue != "") {
      if (selected_codetype == "IATA") {
        details['icode'] = selected_codevalue;
      }
      else if (selected_codetype == "Promo") {
        details['pcode'] = selected_codevalue;
      }
      else if (selected_codetype == "Corporate") {
        details['ccode'] = selected_codevalue;
      }
      else if (selected_codetype == "Group") {
        details['gcode'] = selected_codevalue;
      }
    }

    fetch(siteUrl, {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
      },
      body: JSON.stringify(details),
    })
      .then(response => response.json())
      .then(data => {
        item.querySelector('.button-loader').classList.add('d-none');
        let items;
        if (item.classList.contains('iatacode_input_widget'))
          items = document.querySelectorAll('.iatacode_input_widget');
        else if (item.classList.contains('corporatecode_input_widget'))
          items = document.querySelectorAll('.corporatecode_input_widget');
        else if (item.classList.contains('promocode_input_widget'))
          items = document.querySelectorAll('.promocode_input_widget');
        else if (item.classList.contains('groupcode_input_widget'))
          items = document.querySelectorAll('.groupcode_input_widget');

        if (data.success == true) {
          items.forEach(item => {
            item.querySelector('.widget_apply_btn').classList.toggle('d-none');
            item.querySelector('.trash_widget').classList.toggle('d-none');
            item.querySelector('.valid_widget').classList.toggle('d-none');
            item.querySelector('.inputfield_widget').classList.toggle('icon-space');
            item.querySelector('.inputfield_widget').value = selected_codevalue;
          });
          document.querySelector('.selected-code').innerText = codes_applied_var;
          document.querySelectorAll('.code-selected-title-text').forEach(selectedcode => {
            selectedcode.innerText = codes_applied_var;
          });
        }
        else {
          var error_message = arraySearchForErrorMessage(ICL, data.error.details);
          items.forEach(item => {
            if (error_message)
              item.nextElementSibling.innerText = error_message["TextContent"];
            else
              item.nextElementSibling.innerText = data.error.message;

            item.nextElementSibling.classList.toggle('d-none');
            item.querySelector('.widget_apply_btn').classList.toggle('d-none');
            item.querySelector('.trash_widget').classList.toggle('d-none');
            item.querySelector('.inputfield_widget').classList.toggle('errorbox');
            item.querySelector('.inputfield_widget').classList.toggle('icon-space');
            item.querySelector('.invalid_widget ').classList.toggle('d-none');
            item.querySelector('.inputfield_widget').value = selected_codevalue;
          });
        }
      })
      .catch((error) => {
        console.log('Error:', error);
      });

  }
  document.querySelectorAll('.promocode-input-code-box .trash_widget').forEach(function (item) {
    item.addEventListener('click', function () {
      let items;
      if (item.parentElement.classList.contains('iatacode_input_widget'))
        items = document.querySelectorAll('.iatacode_input_widget');
      else if (item.parentElement.classList.contains('corporatecode_input_widget'))
        items = document.querySelectorAll('.corporatecode_input_widget');
      else if (item.parentElement.classList.contains('promocode_input_widget'))
        items = document.querySelectorAll('.promocode_input_widget');
      else if (item.parentElement.classList.contains('groupcode_input_widget'))
        items = document.querySelectorAll('.groupcode_input_widget');
      items.forEach(item => {
        item.querySelector('.inputfield_widget').value = "";
        item.querySelector('.trash_widget').classList.toggle('d-none');
        item.querySelector('.inputfield_widget').classList.remove('errorbox');
        item.querySelector('.valid_widget').classList.add('d-none');
        item.querySelector('.invalid_widget').classList.add('d-none');
        item.querySelector('.widget_apply_btn').classList.toggle('d-none');
        item.querySelector('.inputfield_widget').classList.toggle('icon-space');
        if (!item.nextElementSibling.classList.contains('d-none'))
          item.nextElementSibling.classList.add('d-none');
      });
      document.querySelector('.selected-code').innerText = enter_code_var;
      document.querySelectorAll('.code-selected-title-text').forEach(selectedcode => {
        selectedcode.innerText = enter_code_var;
      });
    });

  });
  document.querySelector('.code-clear-btn').addEventListener('click', function () {
    clearcodedata();
  });
  function clearcodedata() {
    document.querySelector('.selected-code').innerText = enter_code_var;
    document.querySelectorAll('.code-selected-title-text').forEach(selectedcode => {
      selectedcode.innerText = enter_code_var;
    });
    code_type = "";
    code_value = "";
    selected_codetype = "";
    selected_codevalue = "";
    iata_code = "";
    iataChecked = false;
    promoChecked = false;
    corporateChecked = false;
    groupChecked = false;
    // remove individual error messae
    document.querySelectorAll('.promocode-invalid-message').forEach(invalidmsg => {
      if (!invalidmsg.classList.contains('d-none'))
        invalidmsg.classList.add('d-none');
    });
    // remove global error message
    document.querySelectorAll('.error_label').forEach(item => {
      if (!item.classList.contains('d-none')) {
        item.classList.add('d-none');
      }
    });
    // uncheck all check boxes
    document.querySelectorAll('.Checkbox-input').forEach(input => {
      input.checked = false;
    });
    // remove contents in input field
    document.querySelectorAll('.promocode-input-code-box').forEach(item => {
      const inputField = item.querySelector('.inputfield_widget');
      if (inputField) {
        inputField.value = "";
        if (!item.querySelector('.trash_widget').classList.contains('d-none'))
          item.querySelector('.trash_widget').classList.toggle('d-none');
        if (inputField.classList.contains('errorbox'))
          inputField.classList.remove('errorbox');
        if (!item.querySelector('.valid_widget').classList.contains('d-none'))
          item.querySelector('.valid_widget').classList.add('d-none');
        if (!item.querySelector('.invalid_widget').classList.contains('d-none'))
          item.querySelector('.invalid_widget').classList.add('d-none');
        if (!item.querySelector('.widget_apply_btn').classList.contains('d-none'))
          item.querySelector('.widget_apply_btn').classList.toggle('d-none');
        if (!inputField.classList.contains('icon-space'))
          inputField.classList.toggle('icon-space');
        item.style.display = 'none';
      }
    });
  }
  document.querySelector('.selected-code-done').addEventListener('click', function () {
    mobileBookingwidget.classList.remove('d-none');
    codeMobilePopup.classList.add('d-none');
  });
  document.querySelector('.backtocodewidget').addEventListener('click', function () {
    mobileBookingwidget.classList.remove('d-none');
    codeMobilePopup.classList.add('d-none');
  });
  document.querySelectorAll('.promocode-box-info-icon').forEach(icon => {
    icon.addEventListener('click', function () {
      icon.nextElementSibling.classList.toggle('d-none');
    });
  });

  // Mobile Booking Widget
  hotelwidget.addEventListener('click', function () {
    mobileBookingwidget.classList.add('d-none');
    hotelMobilePopup.classList.remove('d-none');
  });
  datewidget.addEventListener('click', function () {
    mobileBookingwidget.classList.add('d-none');
    dateMobilePopup.classList.remove('d-none');
  });
  guestwidget.addEventListener('click', function () {
    mobileBookingwidget.classList.add('d-none');
    paxMobilePopup.classList.remove('d-none');
  });
  codewidget.addEventListener('click', function () {
    mobileBookingwidget.classList.add('d-none');
    codeMobilePopup.classList.remove('d-none');
  });
  mobileBookingwidget.querySelector('.close-mobile-popup').addEventListener('click', function () {
    mobileBookingwidget.classList.add('d-none');
  });
  mobileBookingwidget.querySelector('.widget-clear-btn').addEventListener('click', function () {
    // clear hotels
    if (!mobileBookingwidget.querySelector('.hotel-selection').classList.contains('disabled')) {
      hotelid = "all";
      hotelname = all_hotels_var;
      hotelSelector.querySelector('.selected-hotel').textContent = hotelname;
      hotelMobilePopup.querySelector('.hotel-selector-title-text').textContent = hotelname;
      document.querySelector('.mobile-bookingwidget-selector .hotel-selector-title-text').textContent = hotelname;
    }
    // clear Dates
    clearDatePicker();
    if (preset_hotel_id.length == 0 || preset_hotel_id == 0) {
      var pricestext = document.querySelector('.prices-text');
      var pricestextmobile = document.querySelector('.currency-text');
      if (!pricestext.classList.contains('d-none'))
        document.querySelector('.prices-text').classList.add('d-none');
      if (!pricestextmobile.classList.contains('d-none'))
        pricestextmobile.classList.add('d-none');
      prices = {};
      status = {};
      datepickers.forEach(picker => {
        picker.renderAll();
      });
    }
    // clear pax
    clearpaxdata();
    // clear code
    clearcodedata();

  });



  // Findrooms popup
  findrooms.forEach(findRoom => {
    findRoom.addEventListener('click', function () {
      if (start_date == "" || end_date == "") {
        dateSelector.classList.add('errorbox');
      } else if (adult_count == 0) {
        paxSelector.classList.add('errorbox');
      } else {
        findRoom.setAttribute('disabled', 'disabled');
        findRoom.querySelector('.button-loader').classList.remove('d-none');
        if (hotelid == "" || hotelid == "all") {
          hotelid = "all";
          hotelname = "All Hotels";
        }
        new_start = moment(start_date).format('DD/MM/YY');
        new_end = moment(end_date).format('DD/MM/YY');
        // difference in days
        var diff = moment(end_date).diff(moment(start_date), 'days');

        // book_for_someone_else = "";
        var adultChildArray = [];
        var rooms;
        if (findRoom.classList.contains('.mobile-findrooms'))
          rooms = document.querySelectorAll('.mobile-guest-selector .room');
        else
          rooms = document.querySelectorAll('.pax-popup .room');

        rooms.forEach(function (room) {
          var adult = room.querySelector('.adult-counter').innerText;
          var child = room.querySelector('.child-counter').innerText;
          adultChildArray.push({ 'id': hotelid, 'adult': adult, 'child': child });
        });
        urlparams =
          'id=' + hotelid +
          '&hotelname=' + encodeURIComponent(hotelname) +
          '&cid=' + new_start +
          '&cod=' + new_end +
          '&rooms=' + no_of_rooms +
          '&adult=' + adult_count +
          '&child=' + child_count +
          '&type=' + code_type +
          '&code=' + code_value +
          '&bfse=' + book_for_someone_else +
          '&iata=' + iata_code +
          '&rateplancode=' + rate_plan_code +
          '&roomtypeid=&prodid=&nights=' + diff;

        if (hotelid == "all" || hotelid == "" || hotelname == "All Hotels") {
          searchPage = "/" + ICL + "/find/hotels/?"
        } else {
          searchPage = "/" + ICL + "/find/rooms?";
        }
        finalURL = searchPage + urlparams;
        setTransientData(adultChildArray).then(function (data) {
          window.location.href = finalURL;
        }).catch(function (err) {
          // //console.log(err)
        });




      }
    });
  });
  const popupWrapper = document.querySelector('.mobile-popup-wrapper');

  // Function to check if any immediate child div inside `mobile-popup-wrapper` is visible
  function checkPopupVisibility() {
    let isPopupVisible = false;
    popupWrapper.querySelectorAll(':scope > div').forEach(div => {
      if (!div.classList.contains('d-none')) {
        isPopupVisible = true;
      }
    });
    document.body.style.overflow = isPopupVisible ? 'hidden' : '';
  }
  const observer = new MutationObserver(checkPopupVisibility);
  popupWrapper.querySelectorAll(':scope > div').forEach(div => {
    observer.observe(div, { attributes: true, attributeFilter: ['class'] });
  });

  checkPopupVisibility();





});


