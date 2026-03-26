
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
  // dine_booking_active = "";
  dine_booking_active = 0;
  templateName = "templates/individual-home-custom-template.php";
  //for timezone
  hotel_timezone_offset = [{"IbuId":"61","timezone_offset":240},{"IbuId":"54","timezone_offset":240},{"IbuId":"52","timezone_offset":240},{"IbuId":"51","timezone_offset":240},{"IbuId":"42","timezone_offset":240},{"IbuId":"50","timezone_offset":240},{"IbuId":"","timezone_offset":240},{"IbuId":"40","timezone_offset":240},{"IbuId":"38","timezone_offset":180},{"IbuId":"35","timezone_offset":240},{"IbuId":"29","timezone_offset":240},{"IbuId":"4","timezone_offset":240},{"IbuId":"31","timezone_offset":120},{"IbuId":"18","timezone_offset":240},{"IbuId":"17","timezone_offset":240},{"IbuId":"2","timezone_offset":240},{"IbuId":"5","timezone_offset":240},{"IbuId":"3","timezone_offset":240},{"IbuId":"10","timezone_offset":240},{"IbuId":"1","timezone_offset":240}];
  minimun_timezone_offset = 120;
  // console.log(hotel_timezone_offset);
  // console.log(minimun_timezone_offset);
</script>




<div class="modal fade bookingmodal booking-modal-global p-0" id="bookingModalGlobal">
  <div class="modal-dialog ">
    <div class="modal-content pt-0 container px-xxl-0">
      <!-- Modal Header -->
      <div class="modal-header pl-0 pr-0">
        <a href="/dependencies/vendor/en.bin">
          <!-- <img class="booking-modal_logo" src="" alt="Address Hotels + Resorts"> -->
          <div class="booking-modal_logo d-inline-block" id="" alt="Address Hotels + Resorts">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="205px" height="40px" viewbox="0 0 205 40" version="1.1">
    <g id="Error-Pages" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="error-404---1364" transform="translate(-24.000000, -24.000000)" fill="#25282D">
            <g id="component/header/transparent/1364">
                <g id="address-HR-logo@SVG" transform="translate(24.000000, 24.000000)">
                    <polygon id="Fill-17" points="61.1886272 31.7821994 57.6037909 31.7821994 57.6037909 28.95 55.8086124 28.95 55.8086124 36.0088235 57.6037909 36.0088235 57.6037909 33.1504335 61.1886272 33.1504335 61.1886272 36.0088235 62.9856459 36.0088235 62.9856459 28.95 61.1886272 28.95"></polygon>
                    <path d="M71.3688446,34.5768279 C70.1725389,34.5768279 69.3824803,33.7429632 69.3824803,32.4807311 C69.3824803,31.21674 70.1725389,30.3793568 71.3688446,30.3793568 C72.5531313,30.3793568 73.3439912,31.21674 73.3439912,32.4807311 C73.3439912,33.7429632 72.5531313,34.5768279 71.3688446,34.5768279 M71.3688446,28.95 C69.0066816,28.95 67.7751196,30.8130016 67.7751196,32.4807311 C67.7751196,34.2337823 69.0691812,36.0088235 71.3688446,36.0088235 C73.6196303,36.0088235 74.9521531,34.2469764 74.9521531,32.4807311 C74.9521531,30.8253161 73.7262001,28.95 71.3688446,28.95" id="Fill-20"></path>
                    <polygon id="Fill-22" points="79.7416268 30.237856 82.4132246 30.237856 82.4132246 36.0088235 84.2489469 36.0088235 84.2489469 30.237856 86.9186603 30.237856 86.9186603 28.95 79.7416268 28.95"></polygon>
                    <polygon id="Fill-24" points="93.3259727 33.0203836 96.2838556 33.0203836 96.2838556 31.7253025 93.3259727 31.7253025 93.3259727 30.237856 96.4239959 30.237856 96.4239959 28.95 91.708134 28.95 91.708134 36.0088235 96.492823 36.0088235 96.492823 34.7137426 93.3259727 34.7137426"></polygon>
                    <polygon id="Fill-26" points="102.84751 28.95 101.282297 28.95 101.282297 36.0088235 106.066986 36.0088235 106.066986 34.7144801 102.84751 34.7144801"></polygon>
                    <path d="M112.462804,30.7742991 C112.462804,30.4312535 112.818262,30.207834 113.379005,30.207834 C113.911791,30.207834 114.449369,30.3793568 115.356783,30.8261958 L115.356783,29.4830402 C114.569186,29.1083288 113.937352,28.95 113.241614,28.95 C111.793428,28.95 110.856459,29.7354865 110.856459,30.9255911 C110.856459,33.3937603 114.038797,32.9829852 114.038797,34.1115174 C114.038797,34.5152556 113.718486,34.7483508 113.120999,34.7483508 C112.434048,34.7483508 111.884489,34.5152556 110.988258,33.8590709 L110.988258,35.3429632 C111.611306,35.6956845 112.152878,36.0088235 113.241614,36.0088235 C114.633089,36.0088235 115.641148,35.2426883 115.641148,33.923282 C115.641148,31.5184442 112.462804,31.812232 112.462804,30.7742991" id="Fill-28"></path>
                    <path d="M135.52008,31.8484984 L134.435155,31.8484984 L134.435155,30.2380207 L135.469862,30.2380207 C136.235691,30.2380207 136.631161,30.5107994 136.631161,31.0410014 C136.631161,31.6425596 136.077713,31.8484984 135.52008,31.8484984 M137.32794,32.7056734 C138.262209,32.3335384 138.735098,31.7554646 138.735098,30.9750649 C138.735098,29.9227899 137.734917,28.95 136.054696,28.95 L132.397129,28.95 L132.397129,36.0088235 L134.435155,36.0088235 L134.435155,33.1446483 L135.027313,33.1446483 C136.127931,33.1446483 136.451211,34.5022186 137.32794,36.0088235 L139.574163,36.0088235 C138.420188,33.9404031 138.165958,33.0678729 137.32794,32.7056734" id="Fill-30"></path>
                    <polygon id="Fill-32" points="145.983146 33.0203836 148.940909 33.0203836 148.940909 31.7253025 145.983146 31.7253025 145.983146 30.237856 149.085271 30.237856 149.085271 28.95 144.363636 28.95 144.363636 36.0088235 149.148325 36.0088235 149.148325 34.7137426 145.983146 34.7137426"></polygon>
                    <path d="M155.540426,30.7742991 C155.540426,30.4312535 155.901897,30.207834 156.457698,30.207834 C156.987108,30.207834 157.530914,30.3793568 158.439389,30.8261958 L158.439389,29.4830402 C157.651671,29.1083288 157.016698,28.95 156.323346,28.95 C154.873464,28.95 153.937799,29.7354865 153.937799,30.9255911 C153.937799,33.3937603 157.116662,32.9829852 157.116662,34.1115174 C157.116662,34.5152556 156.795977,34.7483508 156.20179,34.7483508 C155.514035,34.7483508 154.963833,34.5152556 154.064154,33.8590709 L154.064154,35.3429632 C154.687931,35.6956845 155.226138,36.0088235 156.323346,36.0088235 C157.71085,36.0088235 158.722488,35.2426883 158.722488,33.923282 C158.722488,31.5184442 155.540426,31.812232 155.540426,30.7742991" id="Fill-34"></path>
                    <path d="M167.103684,34.5768279 C165.91045,34.5768279 165.117097,33.7429632 165.117097,32.4807311 C165.117097,31.21674 165.91045,30.3793568 167.103684,30.3793568 C168.290506,30.3793568 169.083058,31.21674 169.083058,32.4807311 C169.083058,33.7429632 168.290506,34.5768279 167.103684,34.5768279 M167.103684,28.95 C164.738052,28.95 163.511962,30.8130016 163.511962,32.4807311 C163.511962,34.2337823 164.805366,36.0088235 167.103684,36.0088235 C169.354721,36.0088235 170.688995,34.2469764 170.688995,32.4807311 C170.688995,30.8253161 169.462905,28.95 167.103684,28.95" id="Fill-36"></path>
                    <path d="M178.603783,31.8484984 L177.523672,31.8484984 L177.523672,30.2380207 L178.553594,30.2380207 C179.318977,30.2380207 179.714216,30.5107994 179.714216,31.0410014 C179.714216,31.6425596 179.165273,31.8484984 178.603783,31.8484984 M180.413725,32.7056734 C181.348496,32.3335384 181.816927,31.7554646 181.816927,30.9750649 C181.816927,29.9227899 180.821511,28.95 179.146452,28.95 L175.478469,28.95 L175.478469,36.0088235 L177.523672,36.0088235 L177.523672,33.1446483 L178.10712,33.1446483 C179.215462,33.1446483 179.541691,34.5022186 180.413725,36.0088235 L182.655502,36.0088235 C181.5022,33.9404031 181.256483,33.0678729 180.413725,32.7056734" id="Fill-38"></path>
                    <polygon id="Fill-40" points="187.444976 30.237856 190.112104 30.237856 190.112104 36.0088235 191.951113 36.0088235 191.951113 30.237856 194.62201 30.237856 194.62201 28.95 187.444976 28.95"></polygon>
                    <path d="M201.014099,30.7742991 C201.014099,30.4312535 201.375026,30.207834 201.933187,30.207834 C202.464198,30.207834 203.004791,30.3793568 203.911902,30.8261958 L203.911902,29.4830402 C203.125366,29.1083288 202.494542,28.95 201.792649,28.95 C200.348139,28.95 199.411483,29.7354865 199.411483,30.9255911 C199.411483,33.3937603 202.591161,32.9829852 202.591161,34.1115174 C202.591161,34.5152556 202.273353,34.7483508 201.677663,34.7483508 C200.987748,34.7483508 200.438371,34.5152556 199.543238,33.8590709 L199.543238,35.3429632 C200.168474,35.6956845 200.705872,36.0088235 201.792649,36.0088235 C203.190046,36.0088235 204.196172,35.2426883 204.196172,33.923282 C204.196172,31.5184442 201.014099,31.812232 201.014099,30.7742991" id="Fill-42"></path>
                    <polygon id="Fill-44" points="124.861465 28.95 123.336322 28.95 123.184275 28.95 123.184275 31.5618265 120.430622 31.5618265 120.430622 31.7111496 120.430622 33.0073436 120.430622 33.1540158 123.184275 33.1540158 123.184275 36.0088235 124.706619 36.0088235 124.861465 36.0088235 124.861465 33.1504815 127.607656 33.1540158 127.607656 31.7111496 127.607656 31.5618265 124.861465 31.5618265"></polygon>
                    <polygon id="Combined-Shape" points="62.971531 4.70588235 63.3220846 5.32999343 70.1626794 18.8235294 68.8888584 18.8235294 66.8487148 14.7916602 66.3846581 13.8702258 62.9745443 7.13536195 59.5885374 13.8702258 59.1244807 14.7916602 57.0852917 18.8235294 55.8086124 18.8235294"></polygon>
                    <path d="M77.4673905,17.9106669 L73.6173449,17.9106669 L73.6173449,5.61698254 L77.4075047,5.61698254 C81.114345,5.61698254 83.6590553,8.14057145 83.6590553,11.7629436 C83.6590553,15.7404158 80.7541627,17.9106669 77.4673905,17.9106669 M77.3467511,4.70588235 L72.5550239,4.70588235 L72.5550239,18.8235294 L77.5255404,18.8235294 C82.9386907,18.8235294 84.8038281,15.0355027 84.8038281,11.7629436 C84.8038281,8.66044486 83.1617431,4.70588235 77.3467511,4.70588235" id="Fill-2"></path>
                    <path d="M94.2115497,17.9106669 L90.3616031,17.9106669 L90.3616031,5.61698253 L94.1516391,5.61698253 C97.8600563,5.61698253 100.407585,8.14057141 100.407585,11.7629436 C100.407585,15.7404157 97.5014571,17.9106669 94.2115497,17.9106669 M101.55024,11.7629436 C101.55024,8.66044482 99.9065883,4.70588235 94.0891228,4.70588235 L89.3014354,4.70588235 L89.3014354,18.8235294 L94.2714611,18.8235294 C99.6869145,18.8235294 101.55024,15.0355026 101.55024,11.7629436" id="Fill-4"></path>
                    <path d="M110.185971,11.1422184 L107.564732,11.1422184 L107.564732,5.61692567 L110.135774,5.61692567 C113.035099,5.61692567 114.311083,6.77643535 114.311083,8.3694395 C114.311083,10.068174 112.967836,11.1422184 110.185971,11.1422184 M112.618472,11.7854114 C114.636353,11.1228344 115.634251,9.98358978 115.634251,8.34917451 C115.634251,6.46453077 114.265907,4.70588235 110.393782,4.70588235 L106.334928,4.70588235 L106.334928,18.8235294 L107.564732,18.8235294 L107.564732,12.0559049 L109.699068,12.0559049 C111.598487,12.0559049 112.199836,12.2823441 114.101264,14.9520359 L116.86004,18.8235294 L118.296651,18.8235294 L114.725702,13.9379054 C113.986816,12.9431589 113.36037,12.1352027 112.618472,11.7854114" id="Fill-6"></path>
                    <polygon id="Fill-8" points="123.794431 12.0594292 129.669523 12.0594292 129.669523 11.1466238 123.794431 11.1466238 123.794431 5.61692567 129.819998 5.61692567 129.819998 4.70588235 122.794258 4.70588235 122.794258 18.8235294 129.971292 18.8235294 129.971292 17.9107239 123.794431 17.9107239"></polygon>
                    <path d="M136.11551,8.31723763 C136.11551,6.82273573 137.279395,5.69391895 138.821427,5.69391895 C139.701702,5.69391895 140.379731,5.93685061 141.693945,6.74290306 L141.693945,5.57116549 C140.698211,4.98830116 139.72185,4.70588235 138.727665,4.70588235 C136.696678,4.70588235 135.043062,6.3214209 135.043062,8.35586632 C135.043062,12.8934523 141.149972,11.1800543 141.149972,15.0909968 C141.149972,16.643871 139.96749,17.8353521 138.445605,17.8353521 C137.449096,17.8353521 136.640886,17.469667 135.215088,16.363169 L135.215088,17.6113056 C136.340229,18.4199332 137.449096,18.8216718 138.500623,18.8216718 C140.586627,18.8216718 142.220096,17.1700799 142.220096,15.0506512 C142.220096,10.2315049 136.11551,11.9878237 136.11551,8.31723763" id="Fill-10"></path>
                    <path d="M148.075567,8.31723763 C148.075567,6.82273573 149.241651,5.69391895 150.780417,5.69391895 C151.664472,5.69391895 152.340103,5.93685061 153.655724,6.74290306 L153.655724,5.57116549 C152.660872,4.98830116 151.684616,4.70588235 150.68744,4.70588235 C148.657447,4.70588235 147.004785,6.3214209 147.004785,8.35586632 C147.004785,12.8934523 153.111035,11.1800543 153.111035,15.0909968 C153.111035,16.643871 151.92713,17.8353521 150.40696,17.8353521 C149.409784,17.8353521 148.600886,17.469667 147.172918,16.363169 L147.172918,17.6113056 C148.301036,18.4199332 149.409784,18.8216718 150.461972,18.8216718 C152.549301,18.8216718 154.181818,17.1700799 154.181818,15.0506512 C154.181818,10.2315049 148.075567,11.9878237 148.075567,8.31723763" id="Fill-12"></path>
                    <path d="M26.3651478,28.4551341 L19.9932597,15.0926812 L13.6378479,28.4551341 L11.6666667,28.4551341 L19.9827747,11.0638298 L28.3333333,28.4551341 L26.3651478,28.4551341 Z M0,40 L40,40 L40,0 L0,0 L0,40 Z" id="Fill-14"></path>
                </g>
            </g>
        </g>
    </g>
</svg>          </div>
        </a>

        <button type="button" class="close" data-dismiss="modal" id="modelclosesignGlobal"><i class="fal fa-times"></i></button>
      </div>
      <!-- Modal body -->
      <div class="modal-body container-fluid">

        <div class="row " id="modal_toggle">
          <div class="col-lg-12 d-flex justify-content-lg-end justify-content-center">
            <ul class="nav greytabs" id="tabs">
              <li class="nav-item">
                <a class="nav-link blacklink active body-4 stay-tab" id="pills-Stay-tab " data-toggle="pill" href="#pills-Stay" role="tab" aria-controls="pills-Stay" aria-selected="true"><i class="fal fa-hotel pr-2"></i>Stay</a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link blacklink body-4 dine-tab" id="pills-profile-tab" data-toggle="pill" href="#pills-Dine" role="tab" aria-controls="pills-Dine" aria-selected="false"><i class="fal fa-utensils-alt pr-2"></i>Dine</a>
              </li> -->
              <!-- spa booking changes -->
              <!-- <li class="nav-item">
                <a class="nav-link blacklink body-4 spa-tab" id="pills-spa-tab" data-toggle="pill" href="#pills-Spa" role="tab" aria-controls="pills-Spa" aria-selected="false"><i class="fal fa-spa pr-2"></i></a>
              </li> -->
            </ul>
          </div>
        </div>
        <div class="container m-auto py-lg-3 px-0">
          <div class="row no-gutters tab-content" id="pills-tabContent">




            <!-- ------------------------------Stay booking Modal Goes Here------------------------------ -->


            <div class="col-lg-12 tab-pane fade show active  staymodifyform" id="pills-Stay" role="tabpanel" aria-labelledby="pills-Stay-tab">
              <div class="container m-auto px-0">
                <h2 class="modal-title-stay">Select a hotel and check availability                </h2>

                <hr>

                <p class="py-2 mb-sm-0 mb-md-0 d-none" id="hname"><i class="fal  fa-map-marker-alt pr-2"></i><span class="hotelName body-4"></span></p>
                <p class="body-3 secondary-semibold d-none" id="offer_name">Offer: <span class="body-3 secondary-regular offerName"></span></p>
                <div class="row modal_dropdowns">

                  <nav class="navbar navbar-expand-lg  w-100">
                    <div class=" navbar-collapse" id="navbarContent">
                      <ul class="navbar-nav w-100 h-100  align-items-center">
                        <!--hotels-->
                        <li class="nav-item dropdown hoteldropdownModal px-2 " alt="Select a hotel and check availability">
                          <a class="nav-link blacklink dropdown-toggle detect-selected-modal hotel-dropdown-fullscreen getAltAttr" href="#" id="navbarDropdownXL" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img width="12" height="16" src="/dependencies/img/wp-content/themes/emaar-projects/img/location.svg" alt="" class="booking-icon mr-1">
                            <span class="w-100"> All Hotels</span>
                          </a>
                          <a class="nav-link blacklink dropdown-toggle w-100 hotel-dropdown-mobile d-lg-none d-flex align-items-center h-72 pl-3 getAltAttr" href="#" id="" role="button" aria-haspopup="true" aria-expanded="false" data-target="#hotel_dropdown" data-toggle="modal" type="">
                            <img width="12" height="16" src="/dependencies/img/wp-content/themes/emaar-projects/img/location.svg" alt="" class="booking-icon mr-1">
                            <span class="body-4 w-100"> All Hotels</span>
                          </a>

                          <!-- dropdown-desktop-modal -->
                          <div class="allHotels_Dropdown-Menu dropdown-menu all_Hotel__dropdown stay_all_hotel_list" aria-labelledby="navbarDropdownHotel">
                            <a class="dropdown-item  hotel-highlight-cta pl-0" href="#" rel="all">All Hotels</a>
                            <section class="booking-flow-hotel-list">
                                                               <div>
                                  <div class="body-3 secondary-semibold countryName_heading">
                                    United Arab Emirates                                  </div>
                                  <div class="row no-gutters">
                                                                          <div class="individual_hotel_restaurant mb-0">
                                                                                  <div class="body-3 secondary-semibold countryName_subheading">
                                            Dubai                                          </div>
                                                                                                                          <a class="dropdown-item hotel_list_item px-lg-0" href="javascript:void(0);" value="1" rel="1">
                                            Address Downtown                                          </a>
                                                                                  <a class="dropdown-item hotel_list_item px-lg-0" href="javascript:void(0);" value="2" rel="2">
                                            Palace Downtown                                          </a>
                                                                                  <a class="dropdown-item hotel_list_item px-lg-0" href="javascript:void(0);" value="4" rel="4">
                                            Address Montgomerie                                          </a>
                                                                                  <a class="dropdown-item hotel_list_item px-lg-0" href="javascript:void(0);" value="17" rel="17">
                                            Address Dubai Mall                                          </a>
                                                                                  <a class="dropdown-item hotel_list_item px-lg-0" href="javascript:void(0);" value="42" rel="42">
                                            Address Creek Harbour                                          </a>
                                                                                  <a class="dropdown-item hotel_list_item px-lg-0" href="javascript:void(0);" value="18" rel="18">
                                            Address Sky View, Downtown Dubai                                          </a>
                                                                                  <a class="dropdown-item hotel_list_item px-lg-0" href="javascript:void(0);" value="29" rel="29">
                                            Address Beach Resort                                          </a>
                                                                                  <a class="dropdown-item hotel_list_item px-lg-0" href="javascript:void(0);" value="54" rel="54">
                                            Palace Dubai Creek Harbour                                          </a>
                                                                              </div>
                                                                          <div class="individual_hotel_restaurant mb-0">
                                                                                  <div class="body-3 secondary-semibold countryName_subheading">
                                            Fujairah                                          </div>
                                                                                                                          <a class="dropdown-item hotel_list_item px-lg-0" href="javascript:void(0);" value="40" rel="40">
                                            Palace Beach Resort Fujairah                                          </a>
                                                                                  <a class="dropdown-item hotel_list_item px-lg-0" href="javascript:void(0);" value="35" rel="35">
                                            Address Beach Resort Fujairah                                          </a>
                                                                              </div>
                                                                      </div>
                                </div>
                                                              <div>
                                  <div class="body-3 secondary-semibold countryName_heading">
                                    Bahrain                                  </div>
                                  <div class="row no-gutters">
                                                                          <div class="individual_hotel_restaurant mb-0">
                                                                                                                          <a class="dropdown-item hotel_list_item px-lg-0" href="javascript:void(0);" value="50" rel="50">
                                            Address Beach Resort Bahrain                                          </a>
                                                                              </div>
                                                                      </div>
                                </div>
                                                              <div>
                                  <div class="body-3 secondary-semibold countryName_heading">
                                    Egypt                                  </div>
                                  <div class="row no-gutters">
                                                                          <div class="individual_hotel_restaurant mb-0">
                                                                                                                          <a class="dropdown-item hotel_list_item px-lg-0" href="javascript:void(0);" value="31" rel="31">
                                            Address Marassi Golf Resort                                          </a>
                                                                                  <a class="dropdown-item hotel_list_item px-lg-0" href="javascript:void(0);" value="52" rel="52">
                                            Address Beach Resort Marassi                                          </a>
                                                                                  <a class="dropdown-item hotel_list_item px-lg-0" href="javascript:void(0);" value="61" rel="61">
                                            Palace Beach Resort                                          </a>
                                                                              </div>
                                                                      </div>
                                </div>
                                                              <div>
                                  <div class="body-3 secondary-semibold countryName_heading">
                                    Saudi Arabia                                  </div>
                                  <div class="row no-gutters">
                                                                          <div class="individual_hotel_restaurant mb-0">
                                                                                                                          <a class="dropdown-item hotel_list_item px-lg-0" href="javascript:void(0);" value="51" rel="51">
                                            Address Jabal Omar Makkah                                          </a>
                                                                              </div>
                                                                      </div>
                                </div>
                                                              <div>
                                  <div class="body-3 secondary-semibold countryName_heading">
                                    Turkey                                  </div>
                                  <div class="row no-gutters">
                                                                          <div class="individual_hotel_restaurant mb-0">
                                                                                                                          <a class="dropdown-item hotel_list_item px-lg-0" href="javascript:void(0);" value="38" rel="38">
                                            Address Istanbul                                          </a>
                                                                              </div>
                                                                      </div>
                                </div>
                                                          </section>
                          </div>

                          <!-- modal-mobile-modal -->
                          <div class="modal fade bd-example-modal-sm" id="hotel_dropdown" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-sm">
                              <div class="modal-content">
                                <div class="dropdown hotel-mobile-dropdown">

                                  <a class="global-booking-modal-back-btn"><i class="fas fa-chevron-left"></i></a>

                                  <a class="dropdown-toggle d-flex align-items-center" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img width="12" height="16" src="/dependencies/img/wp-content/themes/emaar-projects/img/location.svg" alt="" class="booking-icon mr-1">
                                    <span class="body-4 w-100"> All Hotels</span>
                                  </a>
                                  <div class="dropdown-menu show  w-100 mobile_hotel_dropdown" aria-labelledby="navbarDropdownXL">
                                    <a class="dropdown-item  hotel-highlight-cta pl-lg-0" href="#" rel="all">All Hotels</a>
                                                                           <div class="width-75">
                                        <div class="body-3 secondary-semibold countryName_heading mr-0 mb-2">
                                          United Arab Emirates                                        </div>
                                        <div class="row">
                                                                                      <div class="individual_hotel_restaurant pr-3">
                                                                                              <div class="body-3 secondary-semibold pl-4">
                                                  Dubai                                                </div>
                                                                                                                                            <a class="dropdown-item hotel_list_item" href="javascript:void(0);" value="1" rel="1">
                                                  Address Downtown                                                </a>
                                                                                              <a class="dropdown-item hotel_list_item" href="javascript:void(0);" value="2" rel="2">
                                                  Palace Downtown                                                </a>
                                                                                              <a class="dropdown-item hotel_list_item" href="javascript:void(0);" value="4" rel="4">
                                                  Address Montgomerie                                                </a>
                                                                                              <a class="dropdown-item hotel_list_item" href="javascript:void(0);" value="17" rel="17">
                                                  Address Dubai Mall                                                </a>
                                                                                              <a class="dropdown-item hotel_list_item" href="javascript:void(0);" value="42" rel="42">
                                                  Address Creek Harbour                                                </a>
                                                                                              <a class="dropdown-item hotel_list_item" href="javascript:void(0);" value="18" rel="18">
                                                  Address Sky View, Downtown Dubai                                                </a>
                                                                                              <a class="dropdown-item hotel_list_item" href="javascript:void(0);" value="29" rel="29">
                                                  Address Beach Resort                                                </a>
                                                                                              <a class="dropdown-item hotel_list_item" href="javascript:void(0);" value="54" rel="54">
                                                  Palace Dubai Creek Harbour                                                </a>
                                                                                          </div>
                                                                                      <div class="individual_hotel_restaurant pr-3">
                                                                                              <div class="body-3 secondary-semibold pl-4">
                                                  Fujairah                                                </div>
                                                                                                                                            <a class="dropdown-item hotel_list_item" href="javascript:void(0);" value="40" rel="40">
                                                  Palace Beach Resort Fujairah                                                </a>
                                                                                              <a class="dropdown-item hotel_list_item" href="javascript:void(0);" value="35" rel="35">
                                                  Address Beach Resort Fujairah                                                </a>
                                                                                          </div>
                                                                                  </div>
                                      </div>
                                                                          <div class="width-75">
                                        <div class="body-3 secondary-semibold countryName_heading mr-0 mb-2">
                                          Bahrain                                        </div>
                                        <div class="row">
                                                                                      <div class="individual_hotel_restaurant pr-3">
                                                                                                                                            <a class="dropdown-item hotel_list_item" href="javascript:void(0);" value="50" rel="50">
                                                  Address Beach Resort Bahrain                                                </a>
                                                                                          </div>
                                                                                  </div>
                                      </div>
                                                                          <div class="width-75">
                                        <div class="body-3 secondary-semibold countryName_heading mr-0 mb-2">
                                          Egypt                                        </div>
                                        <div class="row">
                                                                                      <div class="individual_hotel_restaurant pr-3">
                                                                                                                                            <a class="dropdown-item hotel_list_item" href="javascript:void(0);" value="31" rel="31">
                                                  Address Marassi Golf Resort                                                </a>
                                                                                              <a class="dropdown-item hotel_list_item" href="javascript:void(0);" value="52" rel="52">
                                                  Address Beach Resort Marassi                                                </a>
                                                                                              <a class="dropdown-item hotel_list_item" href="javascript:void(0);" value="61" rel="61">
                                                  Palace Beach Resort                                                </a>
                                                                                          </div>
                                                                                  </div>
                                      </div>
                                                                          <div class="width-75">
                                        <div class="body-3 secondary-semibold countryName_heading mr-0 mb-2">
                                          Saudi Arabia                                        </div>
                                        <div class="row">
                                                                                      <div class="individual_hotel_restaurant pr-3">
                                                                                                                                            <a class="dropdown-item hotel_list_item" href="javascript:void(0);" value="51" rel="51">
                                                  Address Jabal Omar Makkah                                                </a>
                                                                                          </div>
                                                                                  </div>
                                      </div>
                                                                          <div class="width-75">
                                        <div class="body-3 secondary-semibold countryName_heading mr-0 mb-2">
                                          Turkey                                        </div>
                                        <div class="row">
                                                                                      <div class="individual_hotel_restaurant pr-3">
                                                                                                                                            <a class="dropdown-item hotel_list_item" href="javascript:void(0);" value="38" rel="38">
                                                  Address Istanbul                                                </a>
                                                                                          </div>
                                                                                  </div>
                                      </div>
                                                                      </div>

                                </div>
                              </div>

                            </div>
                          </div>
                        </li>

                        <li class="nav-item datebox d-flex datebox-fullscreen p-0 px-2 " id="datefield_modal_stay" alt="Select your check-in & check-out dates">

                          <!-- dropdown-desktop -->

                          <a href="javascript:void(0)" class="selectdate  d-flex w-100 h-72 global-booking-dropdown-desktop getAltAttr" id="datefieldStayModal" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img width="16" height="16" src="/dependencies/img/wp-content/themes/emaar-projects/img/calendar.svg" alt="" class="payment-icon">
                            <input id="datepick_modal_stay" class="w-100 datepick-input h-100 px-2" onkeydown="return false" name="" value="Check In - Check Out" autocomplete="off">
                            <span class="blacklink night_var nowrap"></span>
                          </a>

                          <!-- dropdown-mobile -->
                          <a href="javascript:void(0)" class="selectdate  d-flex w-100 global-booking-dropdown-mobile h-72 px-0 pl-3 getAltAttr" aria-haspopup="true" aria-expanded="false" data-target="#stay_calender_dropdown" data-toggle="modal">
                            <img width="16" height="16" src="/dependencies/img/wp-content/themes/emaar-projects/img/calendar.svg" alt="" class="payment-icon mr-1">
                            <input id="datepick-modal-mobile-dropdown" class="w-100 datepick-input h-100" name="" value="Check In - Check Out" autocomplete="off" readonly="">
                            <span class="blacklink night_var nowrap"></span>
                          </a>

                          <div class="modal fade bd-example-modal-sm global-booking-dropdown-mobile" id="stay_calender_dropdown" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-sm">
                              <div class="modal-content">
                                <div class="global-calender-clear-back-btns">
                                  <a class="global-booking-modal-back-btn"><i class="fas fa-chevron-left"></i></a>
                                  <a href="javascript:void(0);" class="global-calender-clear-btn">
                                    <p>Clear</p>
                                  </a>
                                </div>
                                <div class="datefield-mobile datebox d-flex datebox-fullscreen" alt="Select your check-in & check-out dates ">
                                  <a class="selectdate d-flex w-100 " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img width="16" height="16" src="/dependencies/img/wp-content/themes/emaar-projects/img/calendar.svg" alt="" class="payment-icon mr-1">
                                    <input id="datepick_modal_stay_mobile" class="w-100 datepick-input" onkeydown="return false" name="" value="Check In - Check Out" autocomplete="off">
                                    <span class="night_var nowrap" class="blacklink"></span>
                                  </a>
                                </div>
                                <div class="" aria-labelledby="dropdownMenuButton">
                                  <div id="datepick_modal_stay_inside"></div>
                                </div>
                              </div>
                              <div class="global-calender-select-date-btn-box">
                                <!-- <a class="price" href="javascript:void(0);">
                                                   <p class="global-calender-all-price-text"></p>
                                                </a> -->
                                <a href="javascript:void(0);" class="global-calender-select-date-btn btn primary-btn"></a>
                              </div>
                            </div>
                          </div>


                        </li>


                        <!--rooms-->
                        <li class="nav-item dropdown add_rooms_nav_dropdown p-0 px-2 " alt="Select number of guests & rooms">

                          <!-- Dropdown-Toggle-Mobile -->
                          <a class="nav-link blacklink dropdown-toggle page_booking_cta_mobile w-100 dropdown_toggle_mobile h-72 py-0 d-flex d-lg-none align-items-center pl-3 getAltAttr" href="#" id="navbarDropdownAddRoomsMobile" role="button" aria-haspopup="true" aria-expanded="false" data-target="#guest_dropdown" data-toggle="modal" type="">


                            <img width="16" height="16" src="/dependencies/img/wp-content/themes/emaar-projects/img/guests.svg" alt="" class="booking-icon mr-1">

                            <span class="count-adult-child body-4 w-100">1 Adult, 0 Child                              <span>


                          </span></span></a>

                          <!-- Dropdown-toggle-Desktop -->
                          <a class="nav-link blacklink dropdown-toggle page_booking_cta w-100 dropdown_toggle_desktop h-72 py-0 d-lg-flex d-none align-items-center getAltAttr" href="#" id="navbarDropdownAddRooms" role="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" type="">


                            <img width="16" height="16" src="/dependencies/img/wp-content/themes/emaar-projects/img/guests.svg" alt="" class="booking-icon mr-1">
                            <span class="count-adult-child body-4 w-100">1 Adult, 0 Child</span>


                          </a>

                          <!-- Dropdown-Desktop -->
                          <div class="dropdown-menu  w-100" aria-labelledby="navbarDropdownAddRooms">
                            <div class="addRoomsDropdownModal">
                              <input type="hidden" name="no_of_rooms" id="no_of_rooms" value="1">

                              <!-- multiroom change -->
                              <div id="table_modal_container" class="table_modal_container"></div>
                              <div class="addRoomModal">
                                <div class="roomcircle addroom">
                                  <i class="fas fa-plus"></i>
                                  <span>Add a room</span>
                                </div>
                              </div>

                              <div class="book_for_someone_else_row" style="display:none;">
                                <div colspan="4">
                                  <form class="go-bottom">
                                    <label class="checkbox book_for_someone_else_label">
                                      I am booking for someone else.                                      <input type="checkbox" name="book_for_someone_else_checkbox" id="book_for_someone_else_checkbox">
                                      <span name="agree" class="geekmark mandatory"></span>
                                    </label>
                                  </form>
                                </div>
                              </div>
                              <!-- multiroom change -->

                            </div>
                          </div>


                          <!-- Dropdown Mobile -->
                          <div class="modal fade bd-example-modal-sm" id="guest_dropdown" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-sm">
                              <div class="modal-content">
                                <a class="global-booking-modal-back-btn"><i class="fas fa-chevron-left"></i></a>
                                <div class="addRoomsDropdownModal mobile-persons-select">
                                  <div class="py-3 pop_up_guest">
                                    <a class="nav-link blacklink dropdown-toggle page_booking_cta w-100 pl-3" href="#" id="navbarDropdownAddRooms" role="button" aria-haspopup="true" aria-expanded="false" data-target="#guest_dropdown" data-toggle="modal" type="">
                                      <img width="16" height="16" src="/dependencies/img/wp-content/themes/emaar-projects/img/guests.svg" alt="" class="booking-icon mr-1">
                                      <span class="count-adult-child body-4">1 Adult, 0 Child</span>
                                    </a>
                                  </div>
                                  <input type="hidden" name="no_of_rooms" id="no_of_rooms" value="1">
                                  <div class="table_modal_container_mobile_main px-3">
                                    <div id="table_modal_container_mobile" class="table_modal_container"></div>
                                    <div class="addRoomModal">
                                      <div class="roomcircle addroom">
                                        <i class="fas fa-plus"></i>
                                        <span>Add a room</span>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="done_btn w-100">
                                    <button type="button" class="primary-btn h-100 w-100">Done</button>
                                  </div>
                                </div>

                              </div>
                            </div>


                        </div></li>

                        <!--promocode -->
                        <li class="nav-item dropdown codebox px-2 " alt="Select & enter your code">

                          <!--promocode Desktop -->
                          <a class="nav-link blacklink dropdown-toggle page_booking_cta w-100 global-booking-dropdown-desktop d-lg-block d-none getAltAttr" href="#" id="navbarDropdownPromoCode" role="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" type="">
                            <!-- <button type="button" id="dropdownMenu2" class=" promobtn btn  dropdown-toggle p-0">Enter Code <span class="caret"></span></button> -->
                            <!-- <span><i class="fal fa-trash-alt delete-promo-code d-none"></i></span> -->
                            <span class="promobtn btn  dropdown-toggle p-0">Enter Code</span>
                          </a>

                          <!--promocode Mobile -->
                          <a class="nav-link dropdown-toggle page_booking_cta w-100 pl-3 d-block d-lg-none getAltAttr" href="#" id="navbarDropdownPromoCode" role="button" aria-haspopup="true" aria-expanded="false" data-target="#promocode_dropdown" data-toggle="modal" type="">
                            <!-- <button type="button" id="dropdownMenu2" class="promobtn btn  dropdown-toggle p-0">Enter Code <span class="caret"></span></button> -->
                            <!-- <span><i class="fal fa-trash-alt delete-promo-code d-none"></i></span> -->
                            <span class="promobtn btn  dropdown-toggle p-0">Enter Code</span>
                          </a>


                          <!--promocode Desktop-box -->
                          <div class="desktop-promocode-box promocode-box dropdown-menu dropdown-menu-right promo-desktop promocodedropdown">
                            <div class="promocode-info-box-main">
                              <p class="mb-0">Enter Code</p>
                              <i class="fal fa-info-circle promocode-box-info-icon"></i>

                            </div>
                            <div class="promocode-info-box" style="display: none;">
                              <p>You can apply upto two codes at a time as below combination. e.g.</p>
                              <br>
                              <p>IATA +Promo Code </p>
                              <p>IATA + Corporate Code</p>
                            </div>
                            <p class="promocode-invalid-message d-none click_error" id="">You can't apply more than two codes.</p>
                            <p class="promocode-code-warning d-none iata_error" id="">You can't apply two codes without IATA code combination.</p>
                            <p class="promocode-code-warning d-none group_error" id="">This combination is not valid.</p>
                            <hr>
                            <ul>
                              <!---------------IATA Code desktop--------------------->
                              <label class="checkbox IATACheckbox">
                                <input type="checkbox" id="chkPassportIATA" class="Checkbox-input I_Checkbox" autocomplete="off">
                                <span class="geekmark">
                                </span>IATA code                              </label>

                              <div class="promocode-input-code-box promocode-input-code-box-desktop iatacode_input">
                                <i class="fas fa-check-circle promocode-validation-icon promocode-valid-icon valid iatacode_valid d-none"></i>
                                <i class="fas fa-times-circle promocode-validation-icon promocode-invalid-icon invalid iatacode_invalid d-none"></i>
                                <input type="text" placeholder="Enter IATA code" class="iatacode inputfield" autocomplete="off">
                                <button class="btn promocode-apply-btn modal_apply_btn" id="" disabled="">
                                  <svg class="button-loader" style="display: none;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="200px" height="200px" viewbox="0 0 100 100" preserveaspectratio="xMidYMid">
                                    <circle cx="50" cy="50" fill="none" stroke="#ffffff" stroke-width="10" r="35" stroke-dasharray="164.93361431346415 56.97787143782138" transform="rotate(132.222 50 50)">
                                      <animatetransform attributename="transform" type="rotate" repeatcount="indefinite" dur="1s" values="0 50 50;360 50 50" keytimes="0;1"></animatetransform>
                                    </circle>
                                  </svg>
                                  Apply                                </button>
                                <i class="fal fa-trash-alt promocode-trash-icon trash iatacode_trash d-none"></i>
                              </div>
                              <p class="promocode-invalid-message iatacode_error error d-none"></p>

                              <!---------------Corporate Code--------------------->
                              <label class="checkbox corporateCheckbox">
                                <input type="checkbox" id="chkPassportCorporate" class="Checkbox-input C_Checkbox" autocomplete="off">
                                <span class="geekmark"></span>Corporate code                              </label>

                              <div class="promocode-input-code-box promocode-input-code-box-desktop corporatecode_input">
                                <i class="fas fa-check-circle promocode-validation-icon promocode-valid-icon corporatecode_valid valid d-none"></i>
                                <i class="fas fa-times-circle promocode-validation-icon promocode-invalid-icon corporatecode_invalid invalid d-none"></i>
                                <input type="text" placeholder="Enter corporate code" class="corporatecode inputfield" autocomplete="off">
                                <button class="btn promocode-apply-btn modal_apply_btn" disabled="">
                                  <svg class="button-loader" style="display: none;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="200px" height="200px" viewbox="0 0 100 100" preserveaspectratio="xMidYMid">
                                    <circle cx="50" cy="50" fill="none" stroke="#ffffff" stroke-width="10" r="35" stroke-dasharray="164.93361431346415 56.97787143782138" transform="rotate(132.222 50 50)">
                                      <animatetransform attributename="transform" type="rotate" repeatcount="indefinite" dur="1s" values="0 50 50;360 50 50" keytimes="0;1"></animatetransform>
                                    </circle>
                                  </svg>
                                  Apply                                </button>
                                <i class="fal fa-trash-alt promocode-trash-icon corporatecode_trash trash d-none"></i>
                              </div>
                              <p class="promocode-invalid-message corporatecode_error error d-none"></p>
                              <!---------------Promo Code--------------------->
                              <label class="checkbox promocodeCheckbox">
                                <input type="checkbox" id="chkPassportPromo" class="Checkbox-input P_Checkbox" autocomplete="off">
                                <span class="geekmark"></span>Promo code                              </label>

                              <div class="promocode-input-code-box promocode-input-code-box-desktop promocode_input">
                                <i class="fas fa-check-circle promocode-validation-icon promocode-valid-icon  valid d-none"></i>
                                <i class="fas fa-times-circle promocode-validation-icon promocode-invalid-icon promocode_invalid invalid d-none"></i>
                                <input type="text" placeholder="Enter promo code" class="promocode inputfield" autocomplete="off">
                                <button class="btn promocode-apply-btn modal_apply_btn" disabled="">
                                  <svg class="button-loader" style="display: none;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="200px" height="200px" viewbox="0 0 100 100" preserveaspectratio="xMidYMid">
                                    <circle cx="50" cy="50" fill="none" stroke="#ffffff" stroke-width="10" r="35" stroke-dasharray="164.93361431346415 56.97787143782138" transform="rotate(132.222 50 50)">
                                      <animatetransform attributename="transform" type="rotate" repeatcount="indefinite" dur="1s" values="0 50 50;360 50 50" keytimes="0;1"></animatetransform>
                                    </circle>
                                  </svg>
                                  Apply                                </button>
                                <i class="fal fa-trash-alt promocode-trash-icon promocode_trash trash d-none"></i>
                              </div>
                              <p class="promocode-invalid-message promocode_error error d-none"></p>

                              <!---------------Group Code--------------------->
                              <label class="checkbox groupCheckbox">
                                <input type="checkbox" id="chkPassportGroup" class="Checkbox-input G_Checkbox" autocomplete="off">
                                <span class="geekmark"></span>Group code                              </label>

                              <div class="promocode-input-code-box promocode-input-code-box-desktop groupcode_input">
                                <i class="fas fa-check-circle promocode-validation-icon promocode-valid-icon groupcode_valid valid d-none"></i>
                                <i class="fas fa-times-circle promocode-validation-icon promocode-invalid-icon groupcode_invalid invalid d-none" id=""></i>
                                <input type="text" placeholder="Enter group code" class="groupcode inputfield" autocomplete="off">
                                <button class="btn promocode-apply-btn modal_apply_btn" disabled="">
                                  <svg class="button-loader" style="display: none;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="200px" height="200px" viewbox="0 0 100 100" preserveaspectratio="xMidYMid">
                                    <circle cx="50" cy="50" fill="none" stroke="#ffffff" stroke-width="10" r="35" stroke-dasharray="164.93361431346415 56.97787143782138" transform="rotate(132.222 50 50)">
                                      <animatetransform attributename="transform" type="rotate" repeatcount="indefinite" dur="1s" values="0 50 50;360 50 50" keytimes="0;1"></animatetransform>
                                    </circle>
                                  </svg>
                                  Apply                                </button>
                                <i class="fal fa-trash-alt promocode-trash-icon groupcode_trash trash d-none" id=""></i>
                              </div>
                              <p class="promocode-invalid-message groupcode_error error d-none" id=""></p>
                            </ul>
                          </div>
                        </li>


                        <!--promocode Mobile-box -->
                        <div class="modal fade bd-example-modal-sm" id="promocode_dropdown" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                              <a class="global-booking-modal-back-btn"><i class="fas fa-chevron-left"></i></a>
                              <div class="desktop-promocode-box promocode-box dropdown-menu dropdown-menu-right promo-mobile promocodedropdown show d-block">
                                <div class="promocode-info-box-main">
                                  <p class="mb-0">Enter Code</p>
                                  <i class="fal fa-info-circle promocode-box-info-icon"></i>

                                </div>
                                <div class="promocode-info-box" style="display: none;">
                                  <p>You can apply upto two codes at a time as below combination. e.g.</p>
                                  <br>
                                  <p>IATA +Promo Code </p>
                                  <p>IATA + Corporate Code</p>
                                </div>
                                <p class="promocode-code-warning d-none click_error" id="">You can't apply more than two codes.</p>
                                <p class="promocode-code-warning d-none iata_error" id="">You can't apply two codes without IATA code combination.</p>
                                <p class="promocode-code-warning d-none group_error" id="">This combination is not valid.</p>
                                <hr>

                                <ul>

                                  <!-------------------------mobile IATA code--------------------------->
                                  <label class="checkbox">
                                    <input type="checkbox" id="chkPassportIATA_mobile" class="Checkbox-input I_Checkbox" autocomplete="off">
                                    <span class="geekmark"></span>IATA code                                  </label>
                                  <div class="promocode-input-code-box promocode-input-code-box-mobile iatacode_input">
                                    <i class="fas fa-check-circle promocode-validation-icon promocode-valid-icon d-none valid iatacode_valid"></i>
                                    <i class="fas fa-times-circle promocode-validation-icon promocode-invalid-icon d-none invalid iatacode_invalid"></i>
                                    <input type="text" placeholder="Enter IATA code" class="iatacode inputfield" autocomplete="off">
                                    <button class="btn promocode-apply-btn modal_apply_btn" id="" disabled="">
                                      <svg class="button-loader" style="display: none;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="200px" height="200px" viewbox="0 0 100 100" preserveaspectratio="xMidYMid">
                                        <circle cx="50" cy="50" fill="none" stroke="#ffffff" stroke-width="10" r="35" stroke-dasharray="164.93361431346415 56.97787143782138" transform="rotate(132.222 50 50)">
                                          <animatetransform attributename="transform" type="rotate" repeatcount="indefinite" dur="1s" values="0 50 50;360 50 50" keytimes="0;1"></animatetransform>
                                        </circle>
                                      </svg>
                                      Apply                                    </button>
                                    <i class="fal fa-trash-alt promocode-trash-icon iatacode_trash trash d-none"></i>
                                  </div>
                                  <p class="promocode-invalid-message iatacode_error error d-none" id=""></p>
                                  <!-------------------------mobile corporate code--------------------------->
                                  <label class="checkbox">
                                    <input type="checkbox" id="chkPassportCorporate_mobile" class="Checkbox-input C_Checkbox" autocomplete="off">
                                    <span class="geekmark"></span>Corporate code                                  </label>

                                  <div class="promocode-input-code-box promocode-input-code-box-mobile corporatecode_input">
                                    <i class="fas fa-check-circle promocode-validation-icon promocode-valid-icon corporatecode_valid valid d-none"></i>
                                    <i class="fas fa-times-circle promocode-validation-icon promocode-invalid-icon corporatecode_invalid invalid d-none"></i>
                                    <input type="text" placeholder="Enter corporate code" class="corporatecode inputfield" autocomplete="off">
                                    <button class="btn promocode-apply-btn modal_apply_btn" id="" disabled="">
                                      <svg class="button-loader" style="display: none;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="200px" height="200px" viewbox="0 0 100 100" preserveaspectratio="xMidYMid">
                                        <circle cx="50" cy="50" fill="none" stroke="#ffffff" stroke-width="10" r="35" stroke-dasharray="164.93361431346415 56.97787143782138" transform="rotate(132.222 50 50)">
                                          <animatetransform attributename="transform" type="rotate" repeatcount="indefinite" dur="1s" values="0 50 50;360 50 50" keytimes="0;1"></animatetransform>
                                        </circle>
                                      </svg>
                                      Apply                                    </button>
                                    <i class="fal fa-trash-alt promocode-trash-icon corporatecode_trash trash d-none"></i>
                                  </div>
                                  <p class="promocode-invalid-message corporatecode_error error d-none"></p>
                                  <!------------------------mobile promo  code--------------------------->
                                  <label class="checkbox">
                                    <input type="checkbox" id="chkPassportPromo_mobile" class="Checkbox-input P_Checkbox" autocomplete="off">
                                    <span class="geekmark"></span>Promo code                                  </label>

                                  <div class="promocode-input-code-box promocode-input-code-box-mobile promocode_input">
                                    <i class="fas fa-check-circle promocode-validation-icon promocode-valid-icon promocode_valid valid d-none"></i>
                                    <i class="fas fa-times-circle promocode-validation-icon promocode-invalid-icon promocode_invalid invalid d-none"></i>
                                    <input type="text" placeholder="Enter promo code" class="promocode inputfield" autocomplete="off">
                                    <button class="btn promocode-apply-btn modal_apply_btn" disabled="">
                                      <svg class="button-loader" style="display: none;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="200px" height="200px" viewbox="0 0 100 100" preserveaspectratio="xMidYMid">
                                        <circle cx="50" cy="50" fill="none" stroke="#ffffff" stroke-width="10" r="35" stroke-dasharray="164.93361431346415 56.97787143782138" transform="rotate(132.222 50 50)">
                                          <animatetransform attributename="transform" type="rotate" repeatcount="indefinite" dur="1s" values="0 50 50;360 50 50" keytimes="0;1"></animatetransform>
                                        </circle>
                                      </svg>
                                      Apply                                    </button>
                                    <i class="fal fa-trash-alt promocode-trash-icon promocode_trash trash d-none"></i>
                                  </div>
                                  <p class="promocode-invalid-message promocode_error error d-none"></p>
                                  <!------------------------mobile Group  code--------------------------->
                                  <label class="checkbox">
                                    <input type="checkbox" id="chkPassportGroup_mobile" class="Checkbox-input G_Checkbox" autocomplete="off">
                                    <span class="geekmark"></span>Group code                                  </label>

                                  <div class="promocode-input-code-box promocode-input-code-box-mobile groupcode_input ">
                                    <i class="fas fa-check-circle promocode-validation-icon promocode-valid-icon groupcode_valid valid d-none"></i>
                                    <i class="fas fa-times-circle promocode-validation-icon promocode-invalid-icon groupcode_invalid invalid d-none"></i>
                                    <input type="text" placeholder="Enter group code" class="groupcode inputfield" autocomplete="off">
                                    <button class="btn promocode-apply-btn modal_apply_btn" disabled="">
                                      <svg class="button-loader" style="display: none;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="200px" height="200px" viewbox="0 0 100 100" preserveaspectratio="xMidYMid">
                                        <circle cx="50" cy="50" fill="none" stroke="#ffffff" stroke-width="10" r="35" stroke-dasharray="164.93361431346415 56.97787143782138" transform="rotate(132.222 50 50)">
                                          <animatetransform attributename="transform" type="rotate" repeatcount="indefinite" dur="1s" values="0 50 50;360 50 50" keytimes="0;1"></animatetransform>
                                        </circle>
                                      </svg>
                                      Apply                                    </button>
                                    <i class="fal fa-trash-alt promocode-trash-icon groupcode_trash trash d-none"></i>
                                  </div>
                                  <p class="promocode-invalid-message groupcode_error error d-none"></p>

                                </ul>
                              </div>

                              <div class="done_btn w-100">
                                <button type="button" class="primary-btn h-100 w-100 mobile_done_button">Done</button>
                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- poromocode Mobile -->
                        <li class="nav-item p-2 find_room_btn primary__cta">
                          <button class="btn blackfull2btn primary-btn h-100" id="findRoomModalBtn" type="submit">
                            <svg class="button-loader" style="display: none;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="200px" height="200px" viewbox="0 0 100 100" preserveaspectratio="xMidYMid">
                              <circle cx="50" cy="50" fill="none" stroke="#ffffff" stroke-width="10" r="35" stroke-dasharray="164.93361431346415 56.97787143782138" transform="rotate(132.222 50 50)">
                                <animatetransform attributename="transform" type="rotate" repeatcount="indefinite" dur="1s" values="0 50 50;360 50 50" keytimes="0;1"></animatetransform>
                              </circle>
                            </svg>
                            Find Rooms                          </button>
                          <!--end -->
                        </li>
                      </ul>
                    </div>
                  </nav>
                </div>
              </div>
            </div>
            <!-- ------------------------------Spa booking Modal Goes Here------------------------------ -->
            <!-- <div class="col-lg-12 tab-pane fade" id="pills-Spa" role="tabpanel" aria-labelledby="pills-Spa-tab">
                          </div> -->
            <!-- ------------------------------Dine booking Modal Goes Here------------------------------ -->

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

<!-- ""; --><script>
   var personlg = "person";
   var personslg = "persons";
   var msglg = "Booking not avaialable for this restaurant";
   var selectrestaurantlg = "Please select restaurant";
   var selectdatelg = "Please select date";
   var serverErrorText = "Server Error: ";
   var tryAgainLater = "Please try again later, or email";
   var selecttimelg = "Please select time";
   var selectpeoplelg = "Please select number of people";
   var servererror1lg = "Server Error: Please try again later, or email";
   var servererror2lg = "or call";
   var fnamelg = "Invalid first name";
   var lnamelg = "Invalid Last name";
   var remoblg = "Invalid mobile number";
   var updatetitlelg = "Update your information";
</script>

<!-- <div class="col-lg-12 tab-pane fade " id="pills-Dine" role="tabpanel" aria-labelledby="pills-Dine-tab"> -->
<div class="col-lg-12 tab-pane fade dinemodifyform" id="pills-Dine" role="tabpanel" aria-labelledby="pills-Dine-tab">

   <div class="container m-auto px-0">
      <h2 class="modal-title-dine">Dining Reservation</h2>
      <hr>
      <div class="row body-4 information d-none">
         <div class="col-12 col-lg-6">
            <h5 class="meduimtext mb-0"><span class="dineresname">The Restaurant</span></h5>
            <p class="py-2 m-0 d-none">Global Bistronomy</p>
            <p class="py-2 mb-sm-0 mb-md-0"><i class="fal  fa-map-marker-alt pr-2"></i><span class="dinereslocation body-4">Address Dubai Mall</span></p>
         </div>
         <div class="col-12 col-lg-6 text-lg-right contact-details mt-0">
            <p class="m-0 dineresphone  d-flex align-items-center justify-content-start justify-content-lg-end "></p>
            <p class="py-2 dineresemail d-flex align-items-center justify-content-start justify-content-lg-end"></p>
         </div>
      </div>

      <div class="row block">
         <form name="checkAvailibilityForm" id="checkAvailibilityForm" class="checkAvailibilityForm" style="width: 100%;">

            <div class="col-12 modal_dropdowns px-0">
               <nav class="navbar navbar-expand-lg navbar-dark w-100">

                  <div class=" navbar-collapse h-100" id="dineBookingModal">
                     <ul class="navbar-nav w-100 h-100  align-items-center">
                        <li class="nav-item  restaurant_dropdown dropdown p-0 px-2" alt="Select Restaurant">

                           <input id="bookingresid" name="bookingresid" type="hidden" value="">
                           <!-- dropdown-desktop  -->
                           <a class="nav-link blacklink dropdown-toggle pr-0 global-booking-dropdown-desktop  d-lg-flex  align-items-center h-72 py-0 getAltAttrDine" href="javascript:void(0)" id="" data-toggle="dropdown">
                              <i class="fal fa-map-marker-alt pr-2"></i>
                              <span class="w-100 h-100 d-lg-flex d-none align-items-center dineresname">Select Restaurant</span>
                           </a>

                           <!-- dropdown-mobile  -->
                           <a class="nav-link blacklink dropdown-toggle pr-0 global-booking-dropdown-mobile  h-72 py-0 d-lg-none d-flex align-items-center pl-3 getAltAttrDine" href="javascript:void(0)" id="" aria-haspopup="true" aria-expanded="false" data-target="#dine_hotel_restaurant" data-toggle="modal">
                              <i class="fal fa-map-marker-alt pr-2"></i>
                              <span class="w-100 h-100 d-lg-none d-flex align-items-center dineresname">Select Restaurant</span>
                           </a>

                           <!---desktop  -->
                           <div class="global-booking-dropdown-desktop">
                                                                                                                     <div class="individualHotels_Dropdown-Menu dropdown-menu">
                                                <div class="individual_hotelPage_restaurant"><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Sky View" data-id="78" data-restaurant="The Restaurant At Address Sky Views" data-email="dineatskyview@addresshotels.com" data-phone="+97148738889" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">The Restaurant At Address Sky Views</a></div><div class="individual_hotelPage_restaurant"><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Sky View" data-id="90" data-restaurant="DeckToo at Address Sky View" data-email="dineatskyview@addresshotels.com" data-phone="+97148738889" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">DeckToo at Address Sky View</a></div><div class="individual_hotelPage_restaurant"><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Sky View" data-id="83" data-restaurant="The Patisserie" data-email="dineatskyview@addresshotels.com" data-phone="+97142458888" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">The Patisserie</a></div>                                                <a href="#" class=" show_all_restaurant px-3  w-100 d-inline-flex justify-content-end font-14 ">Show All</a>
                                             </div>
                                                                                    <div class="allHotels_Dropdown-Menu dropdown-menu all_Hotel__dropdown ">
                                             <div class="individual_hotel_restaurant"><div class="body-3 secondary-semibold ">Palace Downtown</div><a class="body-4 dropdown-item selected-restaurant" data-hotel="Palace Downtown" data-id="2" data-restaurant="Al Bayt at Palace Downtown" data-email="dineatpalacedowntown@addresshotels.com" data-phone="+97144287961" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">Al Bayt at Palace Downtown</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Palace Downtown" data-id="7" data-restaurant="Buhayra Lounge at Palace Downtown" data-email="dineatpalacedowntown@addresshotels.com" data-phone="+97144287961" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">Buhayra Lounge at Palace Downtown</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Palace Downtown" data-id="10" data-restaurant="Ewaan at Palace Downtown" data-email="dineatpalacedowntown@addresshotels.com" data-phone="+97144287961" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">Ewaan at Palace Downtown</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Palace Downtown" data-id="38" data-restaurant="Thiptara" data-email="dineatpalacedowntown@addresshotels.com" data-phone="+97144287961" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">Thiptara</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Palace Downtown" data-id="165" data-restaurant="Royale Ballroom at Palace Downtown" data-email="events@palacehotels.com" data-phone="+97144287888" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="7">Royale Ballroom at Palace Downtown</a></div><div class="individual_hotel_restaurant"><div class="body-3 secondary-semibold ">Address Downtown</div><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Downtown" data-id="8" data-restaurant="Cigar Lounge" data-email="dineatdowntown@addresshotels.com" data-phone="+97144368888" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">Cigar Lounge</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Downtown" data-id="35" data-restaurant="Lounge at Address Downtown" data-email="dineatdowntown@addresshotels.com" data-phone="+97144368888" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">Lounge at Address Downtown</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Downtown" data-id="37" data-restaurant="Cetara" data-email="dineatdowntown@addresshotels.com" data-phone="+97144368888" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">Cetara</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Downtown" data-id="40" data-restaurant="Pool Lounge" data-email="dineatdowntown@addresshotels.com" data-phone="+97144368888" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">Pool Lounge</a></div><div class="individual_hotel_restaurant"><div class="body-3 secondary-semibold ">Address Montgomerie </div><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Montgomerie " data-id="23" data-restaurant="Bahu" data-email="dineatmontgomerie@addresshotels.com" data-phone="+97143631275" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">Bahu</a></div><div class="individual_hotel_restaurant"><div class="body-3 secondary-semibold ">Address Dubai Mall</div><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Dubai Mall" data-id="76" data-restaurant="The Tea Lounge at Address Dubai Mall" data-email="dineatdubaimall@addresshotels.com" data-phone="+97142458888" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">The Tea Lounge at Address Dubai Mall</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Dubai Mall" data-id="77" data-restaurant="Solara" data-email="Therestaurant.adm@addresshotels.com" data-phone="+97142458888" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">Solara</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Dubai Mall" data-id="167" data-restaurant="In Room Dining" data-email="dineatdubaimall@addresshotels.com" data-phone="+97142458888" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="7">In Room Dining</a></div><div class="individual_hotel_restaurant"><div class="body-3 secondary-semibold ">Address Sky View</div><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Sky View" data-id="78" data-restaurant="The Restaurant At Address Sky Views" data-email="dineatskyview@addresshotels.com" data-phone="+97148738889" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">The Restaurant At Address Sky Views</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Sky View" data-id="90" data-restaurant="DeckToo at Address Sky View" data-email="dineatskyview@addresshotels.com" data-phone="+97148738889" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">DeckToo at Address Sky View</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Sky View" data-id="83" data-restaurant="The Patisserie" data-email="dineatskyview@addresshotels.com" data-phone="+97142458888" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">The Patisserie</a></div><div class="individual_hotel_restaurant"><div class="body-3 secondary-semibold ">Address Beach Resort</div><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Beach Resort" data-id="84" data-restaurant="Lounge at Address Beach Resort" data-email="dineatbeachresort@addresshotels.com" data-phone="+97148798866" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">Lounge at Address Beach Resort</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Beach Resort" data-id="87" data-restaurant="Beach Grill" data-email="dineatbeachresort@addresshotels.com" data-phone="+97148798866" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">Beach Grill</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Beach Resort" data-id="88" data-restaurant="The Restaurant at Address Beach Resort" data-email="dineatbeachresort@addresshotels.com" data-phone="+97148798866" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">The Restaurant at Address Beach Resort</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Beach Resort" data-id="89" data-restaurant="Zeta Seventy Seven" data-email="dineatbeachresort@addresshotels.com" data-phone="+97148798866" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">Zeta Seventy Seven</a></div><div class="individual_hotel_restaurant"><div class="body-3 secondary-semibold ">Address Beach Resort Fujairah</div><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Beach Resort Fujairah" data-id="105" data-restaurant="The Restaurant at Address Fujairah" data-email="irdadfuh@addresshotels.com" data-phone="+97192047777" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">The Restaurant at Address Fujairah</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Beach Resort Fujairah" data-id="126" data-restaurant="SALiA at Address Fujairah" data-email="tradfuh@addresshotels.com" data-phone="+97192047777" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">SALiA at Address Fujairah</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Beach Resort Fujairah" data-id="104" data-restaurant="The Lobby Lounge at Address Fujairah" data-email="dineatbeachresortfuj@addresshotels.com" data-phone="+97192047777" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">The Lobby Lounge at Address Fujairah</a></div><div class="individual_hotel_restaurant"><div class="body-3 secondary-semibold ">Address Marrassi Golf Resort</div><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Marrassi Golf Resort" data-id="106" data-restaurant="The Restaurant at Address Marassi" data-email="therestaurant.admgr@addresshotels.com" data-phone="+20464681666" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">The Restaurant at Address Marassi</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Marrassi Golf Resort" data-id="107" data-restaurant="SoCal at Address Marassi" data-email="therestaurant.admgr@addresshotels.com" data-phone="+20464681666" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">SoCal at Address Marassi</a></div><div class="individual_hotel_restaurant"><div class="body-3 secondary-semibold ">Address Istanbul</div><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Istanbul" data-id="108" data-restaurant="The Restaurant at Address Istanbul" data-email="fb.adish@addresshotels.com" data-phone="+902162851111" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">The Restaurant at Address Istanbul</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Istanbul" data-id="109" data-restaurant="The Lounge at Address Istanbul" data-email="fb.adish@addresshotels.com" data-phone="+902162851111" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">The Lounge at Address Istanbul</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Istanbul" data-id="184" data-restaurant="In Room Dining" data-email="" data-phone="" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="7">In Room Dining</a></div><div class="individual_hotel_restaurant"><div class="body-3 secondary-semibold ">Palace Beach Resort Fujairah</div><a class="body-4 dropdown-item selected-restaurant" data-hotel="Palace Beach Resort Fujairah" data-id="114" data-restaurant="Ewaan at Palace Beach Resort Fujairah" data-email="dine.pafuh@palacehotels.com" data-phone="+97192038892" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">Ewaan at Palace Beach Resort Fujairah</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Palace Beach Resort Fujairah" data-id="115" data-restaurant="Al Bayt at Palace Beach Resort Fujairah" data-email="dine.pafuh@palacehotels.com" data-phone="+97192038892" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">Al Bayt at Palace Beach Resort Fujairah</a></div><div class="individual_hotel_restaurant"><div class="body-3 secondary-semibold ">Address Beach Resort Bahrain</div><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Beach Resort Bahrain" data-id="120" data-restaurant="The Restaurant at Address Bahrain" data-email="dineatbeachresortbah@addresshotels.com" data-phone="+97377998888" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">The Restaurant at Address Bahrain</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Beach Resort Bahrain" data-id="121" data-restaurant="The Lounge at Address Bahrain" data-email="dineatbeachresortbah@addresshotels.com" data-phone="+97377998888" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">The Lounge at Address Bahrain</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Beach Resort Bahrain" data-id="122" data-restaurant="The Garden at Address Bahrain" data-email="dineatbeachresortbah@addresshotels.com" data-phone="+97377998888" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">The Garden at Address Bahrain</a></div><div class="individual_hotel_restaurant"><div class="body-3 secondary-semibold ">Address Creek Harbour</div><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Creek Harbour" data-id="123" data-restaurant="The Restaurant at Address Creek Harbour" data-email="dineatcreek@addresshotels.com" data-phone="+97142758833" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">The Restaurant at Address Creek Harbour</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Creek Harbour" data-id="124" data-restaurant="The Patisserie at Address Creek Harbour" data-email="dineatcreek@addresshotels.com" data-phone="+97142758833" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">The Patisserie at Address Creek Harbour</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Creek Harbour" data-id="125" data-restaurant="Luma Pool Lounge at Address Creek Harbour" data-email="dineatcreek@addresshotels.com" data-phone="+97142758833" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">Luma Pool Lounge at Address Creek Harbour</a></div><div class="individual_hotel_restaurant"><div class="body-3 secondary-semibold ">Palace Dubai Creek Harbour</div><a class="body-4 dropdown-item selected-restaurant" data-hotel="Palace Dubai Creek Harbour" data-id="151" data-restaurant="Orme Osteria at Palace Dubai Creek Harbour" data-email="Ewaan.PADCH@palacehotels.com" data-phone="+97145598874" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="7">Orme Osteria at Palace Dubai Creek Harbour</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Palace Dubai Creek Harbour" data-id="152" data-restaurant="Al Bayt at Palace Dubai Creek Harbour" data-email="Albayt.PADCH@palacehotels.com" data-phone="+97145598871" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="7">Al Bayt at Palace Dubai Creek Harbour</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Palace Dubai Creek Harbour" data-id="153" data-restaurant="Fai Lounge" data-email="Fai.PADCH@palacehotels.com" data-phone="+97145598875" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="7">Fai Lounge</a></div>                                             <a href="#" class="show_less_restaurant px-3  w-100 d-inline-flex justify-content-end font-14 ">Show Less</a>
                                          </div>
                                                         </div>

                           <!-- mobile view  -->
                           <div class="modal fade bd-example-modal-sm global-booking-dropdown-mobile" id="dine_hotel_restaurant" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-sm">
                                 <div class="modal-content">
                                    <a class="global-booking-modal-back-btn"><i class="fas fa-chevron-left"></i></a>
                                    <div class="datefield-mobile restaurant_dropdown dropdown" alt="Select Restaurant">
                                       <a class="dropdown-toggle pr-0" href="javascript:void(0)" id="" data-toggle="dropdown">
                                          <i class="fal fa-calendar pr-2"></i>
                                          <span>Select Restaurant</span>
                                       </a>
                                    </div>
                                    <div class="global-booking-dropdown-mobile">
                                                                                                                                                <div id="mobile-restaurants" class="individualHotels_Dropdown-Menu dropdown-menu show">
                                                         <div class="individual_hotelPage_restaurant"><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Sky View" data-id="78" data-restaurant="The Restaurant At Address Sky Views" data-email="dineatskyview@addresshotels.com" data-phone="+97148738889" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">The Restaurant At Address Sky Views</a></div><div class="individual_hotelPage_restaurant"><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Sky View" data-id="90" data-restaurant="DeckToo at Address Sky View" data-email="dineatskyview@addresshotels.com" data-phone="+97148738889" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">DeckToo at Address Sky View</a></div><div class="individual_hotelPage_restaurant"><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Sky View" data-id="83" data-restaurant="The Patisserie" data-email="dineatskyview@addresshotels.com" data-phone="+97142458888" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">The Patisserie</a></div>                                                         <a href="#" class=" show_all_restaurant px-3  w-100 d-inline-flex justify-content-end font-14 ">Show All</a>
                                                      </div>
                                                   
                                                   <div class=" dropdown-menu all_Hotel__dropdown p-3  ">
                                                      <div class="individual_hotel_restaurant"><div class="body-3 secondary-semibold ">Palace Downtown</div><a class="body-4 dropdown-item selected-restaurant" data-hotel="Palace Downtown" data-id="2" data-restaurant="Al Bayt at Palace Downtown" data-email="dineatpalacedowntown@addresshotels.com" data-phone="+97144287961" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">Al Bayt at Palace Downtown</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Palace Downtown" data-id="7" data-restaurant="Buhayra Lounge at Palace Downtown" data-email="dineatpalacedowntown@addresshotels.com" data-phone="+97144287961" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">Buhayra Lounge at Palace Downtown</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Palace Downtown" data-id="10" data-restaurant="Ewaan at Palace Downtown" data-email="dineatpalacedowntown@addresshotels.com" data-phone="+97144287961" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">Ewaan at Palace Downtown</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Palace Downtown" data-id="38" data-restaurant="Thiptara" data-email="dineatpalacedowntown@addresshotels.com" data-phone="+97144287961" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">Thiptara</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Palace Downtown" data-id="165" data-restaurant="Royale Ballroom at Palace Downtown" data-email="events@palacehotels.com" data-phone="+97144287888" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="7">Royale Ballroom at Palace Downtown</a></div><div class="individual_hotel_restaurant"><div class="body-3 secondary-semibold ">Address Downtown</div><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Downtown" data-id="8" data-restaurant="Cigar Lounge" data-email="dineatdowntown@addresshotels.com" data-phone="+97144368888" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">Cigar Lounge</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Downtown" data-id="35" data-restaurant="Lounge at Address Downtown" data-email="dineatdowntown@addresshotels.com" data-phone="+97144368888" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">Lounge at Address Downtown</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Downtown" data-id="37" data-restaurant="Cetara" data-email="dineatdowntown@addresshotels.com" data-phone="+97144368888" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">Cetara</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Downtown" data-id="40" data-restaurant="Pool Lounge" data-email="dineatdowntown@addresshotels.com" data-phone="+97144368888" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">Pool Lounge</a></div><div class="individual_hotel_restaurant"><div class="body-3 secondary-semibold ">Address Montgomerie </div><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Montgomerie " data-id="23" data-restaurant="Bahu" data-email="dineatmontgomerie@addresshotels.com" data-phone="+97143631275" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">Bahu</a></div><div class="individual_hotel_restaurant"><div class="body-3 secondary-semibold ">Address Dubai Mall</div><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Dubai Mall" data-id="76" data-restaurant="The Tea Lounge at Address Dubai Mall" data-email="dineatdubaimall@addresshotels.com" data-phone="+97142458888" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">The Tea Lounge at Address Dubai Mall</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Dubai Mall" data-id="77" data-restaurant="Solara" data-email="Therestaurant.adm@addresshotels.com" data-phone="+97142458888" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">Solara</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Dubai Mall" data-id="167" data-restaurant="In Room Dining" data-email="dineatdubaimall@addresshotels.com" data-phone="+97142458888" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="7">In Room Dining</a></div><div class="individual_hotel_restaurant"><div class="body-3 secondary-semibold ">Address Sky View</div><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Sky View" data-id="78" data-restaurant="The Restaurant At Address Sky Views" data-email="dineatskyview@addresshotels.com" data-phone="+97148738889" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">The Restaurant At Address Sky Views</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Sky View" data-id="90" data-restaurant="DeckToo at Address Sky View" data-email="dineatskyview@addresshotels.com" data-phone="+97148738889" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">DeckToo at Address Sky View</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Sky View" data-id="83" data-restaurant="The Patisserie" data-email="dineatskyview@addresshotels.com" data-phone="+97142458888" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">The Patisserie</a></div><div class="individual_hotel_restaurant"><div class="body-3 secondary-semibold ">Address Beach Resort</div><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Beach Resort" data-id="84" data-restaurant="Lounge at Address Beach Resort" data-email="dineatbeachresort@addresshotels.com" data-phone="+97148798866" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">Lounge at Address Beach Resort</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Beach Resort" data-id="87" data-restaurant="Beach Grill" data-email="dineatbeachresort@addresshotels.com" data-phone="+97148798866" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">Beach Grill</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Beach Resort" data-id="88" data-restaurant="The Restaurant at Address Beach Resort" data-email="dineatbeachresort@addresshotels.com" data-phone="+97148798866" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">The Restaurant at Address Beach Resort</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Beach Resort" data-id="89" data-restaurant="Zeta Seventy Seven" data-email="dineatbeachresort@addresshotels.com" data-phone="+97148798866" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">Zeta Seventy Seven</a></div><div class="individual_hotel_restaurant"><div class="body-3 secondary-semibold ">Address Beach Resort Fujairah</div><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Beach Resort Fujairah" data-id="105" data-restaurant="The Restaurant at Address Fujairah" data-email="irdadfuh@addresshotels.com" data-phone="+97192047777" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">The Restaurant at Address Fujairah</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Beach Resort Fujairah" data-id="126" data-restaurant="SALiA at Address Fujairah" data-email="tradfuh@addresshotels.com" data-phone="+97192047777" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">SALiA at Address Fujairah</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Beach Resort Fujairah" data-id="104" data-restaurant="The Lobby Lounge at Address Fujairah" data-email="dineatbeachresortfuj@addresshotels.com" data-phone="+97192047777" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">The Lobby Lounge at Address Fujairah</a></div><div class="individual_hotel_restaurant"><div class="body-3 secondary-semibold ">Address Marrassi Golf Resort</div><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Marrassi Golf Resort" data-id="106" data-restaurant="The Restaurant at Address Marassi" data-email="therestaurant.admgr@addresshotels.com" data-phone="+20464681666" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">The Restaurant at Address Marassi</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Marrassi Golf Resort" data-id="107" data-restaurant="SoCal at Address Marassi" data-email="therestaurant.admgr@addresshotels.com" data-phone="+20464681666" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">SoCal at Address Marassi</a></div><div class="individual_hotel_restaurant"><div class="body-3 secondary-semibold ">Address Istanbul</div><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Istanbul" data-id="108" data-restaurant="The Restaurant at Address Istanbul" data-email="fb.adish@addresshotels.com" data-phone="+902162851111" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">The Restaurant at Address Istanbul</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Istanbul" data-id="109" data-restaurant="The Lounge at Address Istanbul" data-email="fb.adish@addresshotels.com" data-phone="+902162851111" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">The Lounge at Address Istanbul</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Istanbul" data-id="184" data-restaurant="In Room Dining" data-email="" data-phone="" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="7">In Room Dining</a></div><div class="individual_hotel_restaurant"><div class="body-3 secondary-semibold ">Palace Beach Resort Fujairah</div><a class="body-4 dropdown-item selected-restaurant" data-hotel="Palace Beach Resort Fujairah" data-id="114" data-restaurant="Ewaan at Palace Beach Resort Fujairah" data-email="dine.pafuh@palacehotels.com" data-phone="+97192038892" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">Ewaan at Palace Beach Resort Fujairah</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Palace Beach Resort Fujairah" data-id="115" data-restaurant="Al Bayt at Palace Beach Resort Fujairah" data-email="dine.pafuh@palacehotels.com" data-phone="+97192038892" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">Al Bayt at Palace Beach Resort Fujairah</a></div><div class="individual_hotel_restaurant"><div class="body-3 secondary-semibold ">Address Beach Resort Bahrain</div><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Beach Resort Bahrain" data-id="120" data-restaurant="The Restaurant at Address Bahrain" data-email="dineatbeachresortbah@addresshotels.com" data-phone="+97377998888" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">The Restaurant at Address Bahrain</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Beach Resort Bahrain" data-id="121" data-restaurant="The Lounge at Address Bahrain" data-email="dineatbeachresortbah@addresshotels.com" data-phone="+97377998888" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">The Lounge at Address Bahrain</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Beach Resort Bahrain" data-id="122" data-restaurant="The Garden at Address Bahrain" data-email="dineatbeachresortbah@addresshotels.com" data-phone="+97377998888" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">The Garden at Address Bahrain</a></div><div class="individual_hotel_restaurant"><div class="body-3 secondary-semibold ">Address Creek Harbour</div><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Creek Harbour" data-id="123" data-restaurant="The Restaurant at Address Creek Harbour" data-email="dineatcreek@addresshotels.com" data-phone="+97142758833" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">The Restaurant at Address Creek Harbour</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Creek Harbour" data-id="124" data-restaurant="The Patisserie at Address Creek Harbour" data-email="dineatcreek@addresshotels.com" data-phone="+97142758833" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">The Patisserie at Address Creek Harbour</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Address Creek Harbour" data-id="125" data-restaurant="Luma Pool Lounge at Address Creek Harbour" data-email="dineatcreek@addresshotels.com" data-phone="+97142758833" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="10">Luma Pool Lounge at Address Creek Harbour</a></div><div class="individual_hotel_restaurant"><div class="body-3 secondary-semibold ">Palace Dubai Creek Harbour</div><a class="body-4 dropdown-item selected-restaurant" data-hotel="Palace Dubai Creek Harbour" data-id="151" data-restaurant="Orme Osteria at Palace Dubai Creek Harbour" data-email="Ewaan.PADCH@palacehotels.com" data-phone="+97145598874" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="7">Orme Osteria at Palace Dubai Creek Harbour</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Palace Dubai Creek Harbour" data-id="152" data-restaurant="Al Bayt at Palace Dubai Creek Harbour" data-email="Albayt.PADCH@palacehotels.com" data-phone="+97145598871" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="7">Al Bayt at Palace Dubai Creek Harbour</a><a class="body-4 dropdown-item selected-restaurant" data-hotel="Palace Dubai Creek Harbour" data-id="153" data-restaurant="Fai Lounge" data-email="Fai.PADCH@palacehotels.com" data-phone="+97145598875" data-opensat="07:00" data-closesat="23:00" data-maxpartysize="7">Fai Lounge</a></div>                                                      <a href="#" class="show_less_restaurant px-3  w-100 d-inline-flex justify-content-end font-14 ">Show Less</a>
                                                   </div>
                                                                           </div>
                                 </div>
                              </div>
                           </div>
                        </li>

                        <!-- date -->
                        <li class="nav-item dinedatebox dropdown p-0 px-2 " alt="Select date & time">
                           <input id="daterangeboxtxt" name="daterangeboxtxt" type="hidden" value="">

                           <!-- -desktop  -->
                           <a class="nav-link blacklink d-block pr-0 dropdown-toggle global-booking-dropdown-desktop getAltAttrDine" id="datepick_modal_dine_desktop" type="" data-toggle="dropdown" href="javascript:void(0)">
                              <i class="fal fa-calendar"></i>
                              <span class="w-100 h-100">Date</span>
                           </a>

                           <!-- -mobile  -->
                           <a class="nav-link blacklink d-lg-none d-flex align-items-center h-72 pr-0 dropdown-toggle global-booking-dropdown- pl-3 getAltAttrDine" id="datepick_modal_dine_mobile123" type="" aria-haspopup="true" aria-expanded="false" data-target="#dine_hotel_datebox" data-toggle="modal" href="javascript:void(0)">
                              <i class="fal fa-calendar"></i>
                              <input id="datepick_modal_dine_mobile" class="w-100 datepick-input h-100" onkeydown="return false" name="" value="Date" autocomplete="off">
                              <!-- <span class="d-flex align-items-center h-100 w-100"></span> -->
                           </a>

                           <!-- -mobile modal -->
                           <div class="modal  fade bd-example-modal-sm global-booking-dropdown-mobile" id="dine_hotel_datebox" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-sm">
                                 <div class="modal-content">
                                    <a class="global-booking-modal-back-btn"><i class="fas fa-chevron-left"></i></a>
                                    <div class="datebox datefield-mobile" alt="Date">
                                       <a class="nav-link blacklink d-block pr-0" data-toggle="dropdown" href="javascript:void(0)">
                                          <i class="fal fa-calendar pr-2"></i>
                                          <span>Date</span>
                                       </a>
                                    </div>
                                    <div class="" aria-labelledby="dropdownMenuButton">
                                       <div id="datepick_modal_dine_inside"></div>
                                    </div>
                                 </div>

                              </div>
                           </div>

                        </li>

                        <!--time-->
                        <li class="nav-item dropdown timedropdown p-0 px-2 " alt="Select date & time">

                           <input id="timerangeboxtxt" name="timerangeboxtxt" type="hidden" value="">
                           <!-- dropdown-desktop  -->
                           <a class="nav-link blacklink dropdown-toggle pr-0 global-booking-dropdown-desktop d-none d-lg-flex align-items-center h-72 getAltAttrDine" id="navbarDropdownTime" href="javascript:void(0)" data-toggle="dropdown">
                              <i class="fal fa-clock pr-2"></i>
                              <span class="">Time</span>
                           </a>
                           <!-- dropdown-mobile  -->
                           <a class="nav-link blacklink dropdown-toggle pr-0 global-booking-dropdown-mobile d-lg-none d-flex align-items-center h-72 pl-3 getAltAttrDine" href="javascript:void(0)" aria-expanded="false" data-target="#time_dine_dropdown" data-toggle="modal">
                              <i class="fal fa-clock pr-2"></i>
                              <span class="d-flex h-100 w-100 align-items-center">Time</span>
                           </a>

                           <!-- content of dropdown-desktop  -->
                           <div class="global-booking-dropdown-desktop">
                              <div id="timeDropdownId" class="dropdown-menu longdropdown navbarDropdownTime w-100 d-none" aria-labelledby="navbarDropdownTime">
                              </div>
                           </div>

                           <!-- content of dropdown-mobile modal  -->
                           <div class="modal fade bd-example-modal-sm global-booking-dropdown-mobile navbarDropdownTime-mobile d-none" id="time_dine_dropdown" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-sm">
                                 <div class="modal-content">
                                    <a class="global-booking-modal-back-btn"><i class="fas fa-chevron-left"></i></a>
                                    <div class="datefield-mobile timedropdown dropdown p-0 ">
                                       <a class="nav-link blacklink dropdown-toggle detect-selected w-100 d-flex align-items-center h-72 pl-3" href="#" data-toggle="dropdown">
                                          <i class="fal fa-clock pr-2"></i>
                                          <span>Time</span>
                                       </a>
                                       <div id="timeDropdownId" class="dropdown-menu longdropdown navbarDropdownTime w-100 show" aria-labelledby="navbarDropdownTime">
                                       </div>
                                    </div>

                                 </div>
                              </div>
                           </div>
                        </li>

                        <!--number of peaple -->
                        <li class="nav-item dropdown nopdropdown p-0 px-2 " alt="Select number of guests">
                           <input id="pax" name="pax" type="hidden" value="">
                           <!-- dropdown-desktop  -->
                           <a class="nav-link blacklink dropdown-toggle detect-selected w-100 global-booking-dropdown-desktop d-lg-flex d-none align-items-center h-72 getAltAttrDine" href="#" id="navbarDropdownXL" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fal fa-user-friends pr-2"></i>
                              <span>Number of people</span>
                           </a>

                           <!-- dropdown-mobile  -->
                           <a class="nav-link blacklink dropdown-toggle detect-selected w-100 global-booking-dropdown-mobile d-lg-none d-flex align-items-center h-72 pl-3 getAltAttrDine" href="#" id="navbarDropdownXL" role="button" aria-expanded="false" data-target="#dine_hotel_numberofpeople" data-toggle="modal">
                              <i class="fal fa-user-friends pr-2"></i>
                              <span>Number of people</span>
                           </a>

                           <!-- content-desktop  -->
                           <div class="global-booking-dropdown-desktop">
                              <div class="dropdown-menu w-100  longdropdown peopleDropdown d-none" id="peopleDropdown" aria-labelledby="navbarDropdownXL">
                                 <a class="dropdown-item large-party-option" data-value="0" href="javascript:void(0)" rel="all"> Large Party</a>
                              </div>
                           </div>

                           <!-- content-mobile  -->
                           <div class="modal fade bd-example-modal-sm global-booking-dropdown-mobile peopleDropdown-mobile d-none" id="dine_hotel_numberofpeople" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-sm">
                                 <div class="modal-content">
                                    <a class="global-booking-modal-back-btn"><i class="fas fa-chevron-left"></i></a>
                                    <div class="datefield-mobile nopdropdown dropdown" alt="Number of People">
                                       <a class="nav-link blacklink dropdown-toggle detect-selected w-100 " href="#" data-toggle="dropdown">
                                          <i class="fal fa-user-friends pr-2"></i><span>Number of people</span>
                                       </a>
                                    </div>
                                    <div class="dropdown-menu w-100  longdropdown peopleDropdown" id="peopleDropdown" aria-labelledby="navbarDropdownXL">
                                       <a class="dropdown-item large-party-option" data-value="0" href="javascript:void(0)" rel="all"> Large Party</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </li>

                        <li class="nav-item p-2 modalCheckAvailibilitybtn primary__cta show-desktop" id="modalCheckAvailibilitybtn_1">
                           <button class="btn primary-btn h-100 w-100 blackfull2btn bookingdinebtn modalAvailibilitybtn" type="submit">
                              <svg class="button-loader" style="display: none;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="200px" height="200px" viewbox="0 0 100 100" preserveaspectratio="xMidYMid">
                                 <circle cx="50" cy="50" fill="none" stroke="#ffffff" stroke-width="10" r="35" stroke-dasharray="164.93361431346415 56.97787143782138" transform="rotate(132.222 50 50)">
                                    <animatetransform attributename="transform" type="rotate" repeatcount="indefinite" dur="1s" values="0 50 50;360 50 50" keytimes="0;1"></animatetransform>
                                 </circle>
                              </svg>
                              Check Availability
                           </button>
                        </li>


                     </ul>
                     <div class="row select_time_dine_mobile">
                        <div class="col-12 timerangebox">
                           <h5 class="col-12 select_time_header meduimtext py-3">Select a time</h5>
                        </div>
                     </div>
                     <div class="p-2 modalCheckAvailibilitybtn show-mobile w-100" id="modalCheckAvailibilitybtn_1">
                        <button class="btn primary-btn h-100  blackfull2btn bookingdinebtn modalAvailibilitybtn" type="submit">
                           <svg class="button-loader" style="display: none;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="200px" height="200px" viewbox="0 0 100 100" preserveaspectratio="xMidYMid">
                              <circle cx="50" cy="50" fill="none" stroke="#ffffff" stroke-width="10" r="35" stroke-dasharray="164.93361431346415 56.97787143782138" transform="rotate(132.222 50 50)">
                                 <animatetransform attributename="transform" type="rotate" repeatcount="indefinite" dur="1s" values="0 50 50;360 50 50" keytimes="0;1"></animatetransform>
                              </circle>
                           </svg>
                           Check Availability                        </button>
                     </div>
                  </div>
               </nav>
            </div>
            <div class="col-md-12 col-ms-12 input-fields">
               <input id="tabletyperangetetxt" name="tabletyperangetetxt" type="hidden" value="">
               <input id="modifybooking" name="modifybooking" type="hidden" value="">
               <input id="modifyconfirmationNumber" name="modifyconfirmationNumber" type="hidden" value="">
               <input id="modifySeating" name="modifySeating" type="hidden" value="">
            </div>
            <div class="col-md-12 col-ms-12 api-error hide"></div>

            <div class="col-md-12 col-ms-12 large-party-msg d-none">
               <div class="col-md-6 offset-md-3 text-center mb-5 mt-5">
                  <dl>
                     <dd>
                        <h2>Looking to Make a Group Booking?</h2>
                     </dd>
                     <dd>Contact our group reservations team at</dd>
                     <dd></dd>
                     <dd><i class="fal fa-phone-alt pr-2"></i>&nbsp;Telephone:<span id="wp_block-phone" class="dir-ltr"></span></dd>
                     <dd><i class="fal fa-envelope pr-2"></i>&nbsp;Email:<span id="wp_block-email" class="dir-ltr"></span></dd>
                  </dl>
               </div>
         </div></form>

      </div>
      <div class="container">
         <div class="row select_time_dine_desktop d-none">
            <div class="col-12 py-3 timerangebox ">
               <h5 class="meduimtext pb-3">Select a time</h5>
            </div>
         </div>
      </div>


      <div class="row">
         <div class="col-12 py-3 tabletyperange d-none">
            <h5 class="meduimtext pb-3">Select a table type</h5>
            <a href="#" data-value="0" data-name="Standard" class="tabletypebox">Standard Seating</a>
            <a href="#" data-value="1" data-name="Window" class="tabletypebox">Window Seating</a>
            <a href="#" data-value="2" data-name="Hightop" class="tabletypebox">Hightop Seating</a>
            <a href="#" data-value="3" data-name="Bar" class="tabletypebox">Bar Seating</a>
            <a href="#" data-value="4" data-name="Counter" class="tabletypebox">Counter Seating</a>
            <a href="#" data-value="5" data-name="Outdoor" class="tabletypebox">Outdoor Seating</a>
         </div>
      </div>
   </div>
</div>


<script>
   var hotelNameStatus = "18"
   $('#dine_hotel_restaurant .modal-content .dropdown-menu .dropdown-item').click(function() {
      $('#dineBookingModal .restaurant_dropdown .global-booking-dropdown-mobile  span').text($(this).text());
      $('#dine_hotel_restaurant').modal('hide');
   });

   $('#time_dine_dropdown .modal-content .dropdown-menu').on('click', '.dropdown-item', function() {
      $('#dineBookingModal .timedropdown .global-booking-dropdown-mobile  span').text($(this).text());
      $('#time_dine_dropdown').modal('hide');
   });

   $('#dine_hotel_numberofpeople .modal-content .dropdown-menu').on('click', '.dropdown-item', function() {
      $('#dineBookingModal .nopdropdown .global-booking-dropdown-mobile  span').text($(this).text());
      $('#dine_hotel_numberofpeople').modal('hide');
   });


   $(document).ready(function() {
      // ----------------Modal Hide Functionality---------------------
      $('.global-booking-modal-back-btn').click(function() {
         $('#time_dine_dropdown').modal('hide');
      });

      $('.global-booking-modal-back-btn').click(function() {
         $('#dine_hotel_restaurant').modal('hide');
      });

      $('.global-booking-modal-back-btn').click(function() {
         $('#dine_hotel_datebox').modal('hide');
      });
      $('.global-booking-modal-back-btn').click(function() {
         $('#dine_hotel_numberofpeople').modal('hide');
      });
   });

   if (hotelNameStatus != "") {
      $('#dine_hotel_restaurant').on('show.bs.modal', function() {
         $('#mobile-restaurants').addClass('show')
      })
      $('#dine_hotel_restaurant').on('hidden.bs.modal', function() {
         $('.all_Hotel__dropdown.show').removeClass('show')
      })

      $('.show_all_restaurant').click(function() {
         $('.individualHotels_Dropdown-Menu.show').removeClass('show');
         $('.all_Hotel__dropdown').addClass('show');
         // $('#mobile-restaurants.show').removeClass('show');
      })

      $('.individual_hotelPage_restaurant .dropdown-item, .all_Hotel__dropdown .individual_hotel_restaurant .dropdown-item').click(function() {
         $('.individualHotels_Dropdown-Menu.show').removeClass('show')
         $('.allHotels_Dropdown-Menu.show').removeClass('show')
      })


      $('.show_less_restaurant').click(function() {
         $('.individualHotels_Dropdown-Menu').addClass('show');
         $('.all_Hotel__dropdown').removeClass('show')
      })
   } else {
      $('.global-booking-dropdown-mobile .all_Hotel__dropdown').addClass('show');
      $('.show_all_restaurant').removeClass('d-inline-flex').hide();
      $('.show_less_restaurant').removeClass('d-inline-flex').hide();
   }

   </script>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>


<div class="modal fade bookingmodal p-0 bookingdineModal " id="bookingconfirmdineModal">
  <div class="modal-dialog">

    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header pl-0 pr-0 container">
                <a href="/dependencies/vendor/en.bin">

          <!-- <img class="booking-modal_logo" style="height:40px;" src="" alt="Address Hotels + Resorts"> -->

          <div class="booking-modal_logo d-inline-block" style="height:40px;" id="" alt="Address Hotels + Resorts">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="205px" height="40px" viewbox="0 0 205 40" version="1.1">
    <g id="Error-Pages" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="error-404---1364" transform="translate(-24.000000, -24.000000)" fill="#25282D">
            <g id="component/header/transparent/1364">
                <g id="address-HR-logo@SVG" transform="translate(24.000000, 24.000000)">
                    <polygon id="Fill-17" points="61.1886272 31.7821994 57.6037909 31.7821994 57.6037909 28.95 55.8086124 28.95 55.8086124 36.0088235 57.6037909 36.0088235 57.6037909 33.1504335 61.1886272 33.1504335 61.1886272 36.0088235 62.9856459 36.0088235 62.9856459 28.95 61.1886272 28.95"></polygon>
                    <path d="M71.3688446,34.5768279 C70.1725389,34.5768279 69.3824803,33.7429632 69.3824803,32.4807311 C69.3824803,31.21674 70.1725389,30.3793568 71.3688446,30.3793568 C72.5531313,30.3793568 73.3439912,31.21674 73.3439912,32.4807311 C73.3439912,33.7429632 72.5531313,34.5768279 71.3688446,34.5768279 M71.3688446,28.95 C69.0066816,28.95 67.7751196,30.8130016 67.7751196,32.4807311 C67.7751196,34.2337823 69.0691812,36.0088235 71.3688446,36.0088235 C73.6196303,36.0088235 74.9521531,34.2469764 74.9521531,32.4807311 C74.9521531,30.8253161 73.7262001,28.95 71.3688446,28.95" id="Fill-20"></path>
                    <polygon id="Fill-22" points="79.7416268 30.237856 82.4132246 30.237856 82.4132246 36.0088235 84.2489469 36.0088235 84.2489469 30.237856 86.9186603 30.237856 86.9186603 28.95 79.7416268 28.95"></polygon>
                    <polygon id="Fill-24" points="93.3259727 33.0203836 96.2838556 33.0203836 96.2838556 31.7253025 93.3259727 31.7253025 93.3259727 30.237856 96.4239959 30.237856 96.4239959 28.95 91.708134 28.95 91.708134 36.0088235 96.492823 36.0088235 96.492823 34.7137426 93.3259727 34.7137426"></polygon>
                    <polygon id="Fill-26" points="102.84751 28.95 101.282297 28.95 101.282297 36.0088235 106.066986 36.0088235 106.066986 34.7144801 102.84751 34.7144801"></polygon>
                    <path d="M112.462804,30.7742991 C112.462804,30.4312535 112.818262,30.207834 113.379005,30.207834 C113.911791,30.207834 114.449369,30.3793568 115.356783,30.8261958 L115.356783,29.4830402 C114.569186,29.1083288 113.937352,28.95 113.241614,28.95 C111.793428,28.95 110.856459,29.7354865 110.856459,30.9255911 C110.856459,33.3937603 114.038797,32.9829852 114.038797,34.1115174 C114.038797,34.5152556 113.718486,34.7483508 113.120999,34.7483508 C112.434048,34.7483508 111.884489,34.5152556 110.988258,33.8590709 L110.988258,35.3429632 C111.611306,35.6956845 112.152878,36.0088235 113.241614,36.0088235 C114.633089,36.0088235 115.641148,35.2426883 115.641148,33.923282 C115.641148,31.5184442 112.462804,31.812232 112.462804,30.7742991" id="Fill-28"></path>
                    <path d="M135.52008,31.8484984 L134.435155,31.8484984 L134.435155,30.2380207 L135.469862,30.2380207 C136.235691,30.2380207 136.631161,30.5107994 136.631161,31.0410014 C136.631161,31.6425596 136.077713,31.8484984 135.52008,31.8484984 M137.32794,32.7056734 C138.262209,32.3335384 138.735098,31.7554646 138.735098,30.9750649 C138.735098,29.9227899 137.734917,28.95 136.054696,28.95 L132.397129,28.95 L132.397129,36.0088235 L134.435155,36.0088235 L134.435155,33.1446483 L135.027313,33.1446483 C136.127931,33.1446483 136.451211,34.5022186 137.32794,36.0088235 L139.574163,36.0088235 C138.420188,33.9404031 138.165958,33.0678729 137.32794,32.7056734" id="Fill-30"></path>
                    <polygon id="Fill-32" points="145.983146 33.0203836 148.940909 33.0203836 148.940909 31.7253025 145.983146 31.7253025 145.983146 30.237856 149.085271 30.237856 149.085271 28.95 144.363636 28.95 144.363636 36.0088235 149.148325 36.0088235 149.148325 34.7137426 145.983146 34.7137426"></polygon>
                    <path d="M155.540426,30.7742991 C155.540426,30.4312535 155.901897,30.207834 156.457698,30.207834 C156.987108,30.207834 157.530914,30.3793568 158.439389,30.8261958 L158.439389,29.4830402 C157.651671,29.1083288 157.016698,28.95 156.323346,28.95 C154.873464,28.95 153.937799,29.7354865 153.937799,30.9255911 C153.937799,33.3937603 157.116662,32.9829852 157.116662,34.1115174 C157.116662,34.5152556 156.795977,34.7483508 156.20179,34.7483508 C155.514035,34.7483508 154.963833,34.5152556 154.064154,33.8590709 L154.064154,35.3429632 C154.687931,35.6956845 155.226138,36.0088235 156.323346,36.0088235 C157.71085,36.0088235 158.722488,35.2426883 158.722488,33.923282 C158.722488,31.5184442 155.540426,31.812232 155.540426,30.7742991" id="Fill-34"></path>
                    <path d="M167.103684,34.5768279 C165.91045,34.5768279 165.117097,33.7429632 165.117097,32.4807311 C165.117097,31.21674 165.91045,30.3793568 167.103684,30.3793568 C168.290506,30.3793568 169.083058,31.21674 169.083058,32.4807311 C169.083058,33.7429632 168.290506,34.5768279 167.103684,34.5768279 M167.103684,28.95 C164.738052,28.95 163.511962,30.8130016 163.511962,32.4807311 C163.511962,34.2337823 164.805366,36.0088235 167.103684,36.0088235 C169.354721,36.0088235 170.688995,34.2469764 170.688995,32.4807311 C170.688995,30.8253161 169.462905,28.95 167.103684,28.95" id="Fill-36"></path>
                    <path d="M178.603783,31.8484984 L177.523672,31.8484984 L177.523672,30.2380207 L178.553594,30.2380207 C179.318977,30.2380207 179.714216,30.5107994 179.714216,31.0410014 C179.714216,31.6425596 179.165273,31.8484984 178.603783,31.8484984 M180.413725,32.7056734 C181.348496,32.3335384 181.816927,31.7554646 181.816927,30.9750649 C181.816927,29.9227899 180.821511,28.95 179.146452,28.95 L175.478469,28.95 L175.478469,36.0088235 L177.523672,36.0088235 L177.523672,33.1446483 L178.10712,33.1446483 C179.215462,33.1446483 179.541691,34.5022186 180.413725,36.0088235 L182.655502,36.0088235 C181.5022,33.9404031 181.256483,33.0678729 180.413725,32.7056734" id="Fill-38"></path>
                    <polygon id="Fill-40" points="187.444976 30.237856 190.112104 30.237856 190.112104 36.0088235 191.951113 36.0088235 191.951113 30.237856 194.62201 30.237856 194.62201 28.95 187.444976 28.95"></polygon>
                    <path d="M201.014099,30.7742991 C201.014099,30.4312535 201.375026,30.207834 201.933187,30.207834 C202.464198,30.207834 203.004791,30.3793568 203.911902,30.8261958 L203.911902,29.4830402 C203.125366,29.1083288 202.494542,28.95 201.792649,28.95 C200.348139,28.95 199.411483,29.7354865 199.411483,30.9255911 C199.411483,33.3937603 202.591161,32.9829852 202.591161,34.1115174 C202.591161,34.5152556 202.273353,34.7483508 201.677663,34.7483508 C200.987748,34.7483508 200.438371,34.5152556 199.543238,33.8590709 L199.543238,35.3429632 C200.168474,35.6956845 200.705872,36.0088235 201.792649,36.0088235 C203.190046,36.0088235 204.196172,35.2426883 204.196172,33.923282 C204.196172,31.5184442 201.014099,31.812232 201.014099,30.7742991" id="Fill-42"></path>
                    <polygon id="Fill-44" points="124.861465 28.95 123.336322 28.95 123.184275 28.95 123.184275 31.5618265 120.430622 31.5618265 120.430622 31.7111496 120.430622 33.0073436 120.430622 33.1540158 123.184275 33.1540158 123.184275 36.0088235 124.706619 36.0088235 124.861465 36.0088235 124.861465 33.1504815 127.607656 33.1540158 127.607656 31.7111496 127.607656 31.5618265 124.861465 31.5618265"></polygon>
                    <polygon id="Combined-Shape" points="62.971531 4.70588235 63.3220846 5.32999343 70.1626794 18.8235294 68.8888584 18.8235294 66.8487148 14.7916602 66.3846581 13.8702258 62.9745443 7.13536195 59.5885374 13.8702258 59.1244807 14.7916602 57.0852917 18.8235294 55.8086124 18.8235294"></polygon>
                    <path d="M77.4673905,17.9106669 L73.6173449,17.9106669 L73.6173449,5.61698254 L77.4075047,5.61698254 C81.114345,5.61698254 83.6590553,8.14057145 83.6590553,11.7629436 C83.6590553,15.7404158 80.7541627,17.9106669 77.4673905,17.9106669 M77.3467511,4.70588235 L72.5550239,4.70588235 L72.5550239,18.8235294 L77.5255404,18.8235294 C82.9386907,18.8235294 84.8038281,15.0355027 84.8038281,11.7629436 C84.8038281,8.66044486 83.1617431,4.70588235 77.3467511,4.70588235" id="Fill-2"></path>
                    <path d="M94.2115497,17.9106669 L90.3616031,17.9106669 L90.3616031,5.61698253 L94.1516391,5.61698253 C97.8600563,5.61698253 100.407585,8.14057141 100.407585,11.7629436 C100.407585,15.7404157 97.5014571,17.9106669 94.2115497,17.9106669 M101.55024,11.7629436 C101.55024,8.66044482 99.9065883,4.70588235 94.0891228,4.70588235 L89.3014354,4.70588235 L89.3014354,18.8235294 L94.2714611,18.8235294 C99.6869145,18.8235294 101.55024,15.0355026 101.55024,11.7629436" id="Fill-4"></path>
                    <path d="M110.185971,11.1422184 L107.564732,11.1422184 L107.564732,5.61692567 L110.135774,5.61692567 C113.035099,5.61692567 114.311083,6.77643535 114.311083,8.3694395 C114.311083,10.068174 112.967836,11.1422184 110.185971,11.1422184 M112.618472,11.7854114 C114.636353,11.1228344 115.634251,9.98358978 115.634251,8.34917451 C115.634251,6.46453077 114.265907,4.70588235 110.393782,4.70588235 L106.334928,4.70588235 L106.334928,18.8235294 L107.564732,18.8235294 L107.564732,12.0559049 L109.699068,12.0559049 C111.598487,12.0559049 112.199836,12.2823441 114.101264,14.9520359 L116.86004,18.8235294 L118.296651,18.8235294 L114.725702,13.9379054 C113.986816,12.9431589 113.36037,12.1352027 112.618472,11.7854114" id="Fill-6"></path>
                    <polygon id="Fill-8" points="123.794431 12.0594292 129.669523 12.0594292 129.669523 11.1466238 123.794431 11.1466238 123.794431 5.61692567 129.819998 5.61692567 129.819998 4.70588235 122.794258 4.70588235 122.794258 18.8235294 129.971292 18.8235294 129.971292 17.9107239 123.794431 17.9107239"></polygon>
                    <path d="M136.11551,8.31723763 C136.11551,6.82273573 137.279395,5.69391895 138.821427,5.69391895 C139.701702,5.69391895 140.379731,5.93685061 141.693945,6.74290306 L141.693945,5.57116549 C140.698211,4.98830116 139.72185,4.70588235 138.727665,4.70588235 C136.696678,4.70588235 135.043062,6.3214209 135.043062,8.35586632 C135.043062,12.8934523 141.149972,11.1800543 141.149972,15.0909968 C141.149972,16.643871 139.96749,17.8353521 138.445605,17.8353521 C137.449096,17.8353521 136.640886,17.469667 135.215088,16.363169 L135.215088,17.6113056 C136.340229,18.4199332 137.449096,18.8216718 138.500623,18.8216718 C140.586627,18.8216718 142.220096,17.1700799 142.220096,15.0506512 C142.220096,10.2315049 136.11551,11.9878237 136.11551,8.31723763" id="Fill-10"></path>
                    <path d="M148.075567,8.31723763 C148.075567,6.82273573 149.241651,5.69391895 150.780417,5.69391895 C151.664472,5.69391895 152.340103,5.93685061 153.655724,6.74290306 L153.655724,5.57116549 C152.660872,4.98830116 151.684616,4.70588235 150.68744,4.70588235 C148.657447,4.70588235 147.004785,6.3214209 147.004785,8.35586632 C147.004785,12.8934523 153.111035,11.1800543 153.111035,15.0909968 C153.111035,16.643871 151.92713,17.8353521 150.40696,17.8353521 C149.409784,17.8353521 148.600886,17.469667 147.172918,16.363169 L147.172918,17.6113056 C148.301036,18.4199332 149.409784,18.8216718 150.461972,18.8216718 C152.549301,18.8216718 154.181818,17.1700799 154.181818,15.0506512 C154.181818,10.2315049 148.075567,11.9878237 148.075567,8.31723763" id="Fill-12"></path>
                    <path d="M26.3651478,28.4551341 L19.9932597,15.0926812 L13.6378479,28.4551341 L11.6666667,28.4551341 L19.9827747,11.0638298 L28.3333333,28.4551341 L26.3651478,28.4551341 Z M0,40 L40,40 L40,0 L0,0 L0,40 Z" id="Fill-14"></path>
                </g>
            </g>
        </g>
    </g>
</svg>          </div>
        </a>
        <button type="button" class="close" data-dismiss="modal" id=""><i class="fal fa-times"></i></button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
        <div class="container pt-3  mb-0 pl-0 pr-0 ">
          <!-- <h2 class="modal-title"> Your reservation is confirmed.</h2> -->
          <h2 class="modal-title"> Restaurant Reservation</h2>
          <p class="ConfirmationMessage"></p>

          <div class="row  justify-content-center  h-100   block ">

            <div class="col-lg-12">
              <hr class="pb-0 mb-0">
              <div class="container-fluid whitebox2 p-40">
                <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-12 pl-4 pt-0 pb-3 confirmationNumber">
                    Booking Reference #436
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-4 pl-4">

                    <table class="table table-borderless bookingConfirm">
                      <thead>
                        <tr>
                          <th class="pb-2 px-0 meduimtext"> Booking Details </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class=" py-1 px-0"><span class="dineresname">The Restaurant</span></td>
                        </tr>
                        <tr>
                          <td class="py-1 px-0"><i class="fal  fa-map-marker-alt pr-2"></i><span class="dinereslocation">Address Dubai Mall</span></td>
                        </tr>
                        <tr>
                          <td class="py-1 px-0 dineresemail"></td>
                        </tr>
                        <tr>
                          <td class="py-1 px-0 dineresphone"></td>
                        </tr>
                        <tr>
                          <td colspan="Separator">
                            <hr>
                          </td>
                        </tr>
                        <tr>
                          <td class="py-1 px-0"><i class="fal  fa-calendar pr-2"></i><span class="date"></span></td>
                        </tr>
                        <tr>
                          <td class="py-1 px-0"><i class="fal  fa-clock pr-2"></i><span class="time"></span></td>
                        </tr>
                        <tr>
                          <td class="py-1 px-0"><i class="fal  fa-user-friends  pr-2"></i><span class="people"></span>
                          </td>
                        </tr>
                        <tr>
                          <td class="py-1 px-0"><i class="fal  fa-chair pr-2"></i><span class="seating"></span></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="col-sm-12 col-md-12 col-lg-3 border-left pl-lg-5 pl-4">
                    <table class="table table-borderless bookingGuest">
                      <thead>
                        <tr>
                          <th class="pb-2 px-0 meduimtext">Guest Information</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="py-1 px-0 name">John Smith</td>
                        </tr>
                        <tr>
                          <td class="py-1 px-0 email">john.smith@xyzmail.com</td>
                        </tr>
                        <tr>
                          <td class="py-1 px-0 phone">05122354234</td>

                      </tr></tbody>
                    </table>

                  </div>
                  <div class="col-sm-12 col-md-12 col-lg-5 border-left pl-lg-5 pl-4">
                    <table class="table table-borderless">
                      <thead>
                        <tr>
                          <th class="pb-2 px-0 meduimtext">Special Instructions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="py-1 px-0 bookingSpecialInstructions">allergic to nuts</td>
                        </tr>

                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 mr-auto py-5 bookingdineconfirm-btn-div">
              <form name="bookingdineconfirm" id="bookingdineconfirmform">
                <button class="btn blackfullbtn donebtn primary-btn">Done</button>
              </form>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
<div class="modal fade bookingmodal p-0 bookingdineModal" id="bookinginfodineModal">
  <div class="modal-dialog">

    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header pl-0 pr-0 container">
                <a href="/dependencies/vendor/en.bin">
          <!-- <img class="booking-modal_logo" style="height:40px;" src="" alt="Address Hotels + Resorts"> -->

          <div class="booking-modal_logo d-inline-block" style="height:40px;" id="" alt="Address Hotels + Resorts">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="205px" height="40px" viewbox="0 0 205 40" version="1.1">
    <g id="Error-Pages" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="error-404---1364" transform="translate(-24.000000, -24.000000)" fill="#25282D">
            <g id="component/header/transparent/1364">
                <g id="address-HR-logo@SVG" transform="translate(24.000000, 24.000000)">
                    <polygon id="Fill-17" points="61.1886272 31.7821994 57.6037909 31.7821994 57.6037909 28.95 55.8086124 28.95 55.8086124 36.0088235 57.6037909 36.0088235 57.6037909 33.1504335 61.1886272 33.1504335 61.1886272 36.0088235 62.9856459 36.0088235 62.9856459 28.95 61.1886272 28.95"></polygon>
                    <path d="M71.3688446,34.5768279 C70.1725389,34.5768279 69.3824803,33.7429632 69.3824803,32.4807311 C69.3824803,31.21674 70.1725389,30.3793568 71.3688446,30.3793568 C72.5531313,30.3793568 73.3439912,31.21674 73.3439912,32.4807311 C73.3439912,33.7429632 72.5531313,34.5768279 71.3688446,34.5768279 M71.3688446,28.95 C69.0066816,28.95 67.7751196,30.8130016 67.7751196,32.4807311 C67.7751196,34.2337823 69.0691812,36.0088235 71.3688446,36.0088235 C73.6196303,36.0088235 74.9521531,34.2469764 74.9521531,32.4807311 C74.9521531,30.8253161 73.7262001,28.95 71.3688446,28.95" id="Fill-20"></path>
                    <polygon id="Fill-22" points="79.7416268 30.237856 82.4132246 30.237856 82.4132246 36.0088235 84.2489469 36.0088235 84.2489469 30.237856 86.9186603 30.237856 86.9186603 28.95 79.7416268 28.95"></polygon>
                    <polygon id="Fill-24" points="93.3259727 33.0203836 96.2838556 33.0203836 96.2838556 31.7253025 93.3259727 31.7253025 93.3259727 30.237856 96.4239959 30.237856 96.4239959 28.95 91.708134 28.95 91.708134 36.0088235 96.492823 36.0088235 96.492823 34.7137426 93.3259727 34.7137426"></polygon>
                    <polygon id="Fill-26" points="102.84751 28.95 101.282297 28.95 101.282297 36.0088235 106.066986 36.0088235 106.066986 34.7144801 102.84751 34.7144801"></polygon>
                    <path d="M112.462804,30.7742991 C112.462804,30.4312535 112.818262,30.207834 113.379005,30.207834 C113.911791,30.207834 114.449369,30.3793568 115.356783,30.8261958 L115.356783,29.4830402 C114.569186,29.1083288 113.937352,28.95 113.241614,28.95 C111.793428,28.95 110.856459,29.7354865 110.856459,30.9255911 C110.856459,33.3937603 114.038797,32.9829852 114.038797,34.1115174 C114.038797,34.5152556 113.718486,34.7483508 113.120999,34.7483508 C112.434048,34.7483508 111.884489,34.5152556 110.988258,33.8590709 L110.988258,35.3429632 C111.611306,35.6956845 112.152878,36.0088235 113.241614,36.0088235 C114.633089,36.0088235 115.641148,35.2426883 115.641148,33.923282 C115.641148,31.5184442 112.462804,31.812232 112.462804,30.7742991" id="Fill-28"></path>
                    <path d="M135.52008,31.8484984 L134.435155,31.8484984 L134.435155,30.2380207 L135.469862,30.2380207 C136.235691,30.2380207 136.631161,30.5107994 136.631161,31.0410014 C136.631161,31.6425596 136.077713,31.8484984 135.52008,31.8484984 M137.32794,32.7056734 C138.262209,32.3335384 138.735098,31.7554646 138.735098,30.9750649 C138.735098,29.9227899 137.734917,28.95 136.054696,28.95 L132.397129,28.95 L132.397129,36.0088235 L134.435155,36.0088235 L134.435155,33.1446483 L135.027313,33.1446483 C136.127931,33.1446483 136.451211,34.5022186 137.32794,36.0088235 L139.574163,36.0088235 C138.420188,33.9404031 138.165958,33.0678729 137.32794,32.7056734" id="Fill-30"></path>
                    <polygon id="Fill-32" points="145.983146 33.0203836 148.940909 33.0203836 148.940909 31.7253025 145.983146 31.7253025 145.983146 30.237856 149.085271 30.237856 149.085271 28.95 144.363636 28.95 144.363636 36.0088235 149.148325 36.0088235 149.148325 34.7137426 145.983146 34.7137426"></polygon>
                    <path d="M155.540426,30.7742991 C155.540426,30.4312535 155.901897,30.207834 156.457698,30.207834 C156.987108,30.207834 157.530914,30.3793568 158.439389,30.8261958 L158.439389,29.4830402 C157.651671,29.1083288 157.016698,28.95 156.323346,28.95 C154.873464,28.95 153.937799,29.7354865 153.937799,30.9255911 C153.937799,33.3937603 157.116662,32.9829852 157.116662,34.1115174 C157.116662,34.5152556 156.795977,34.7483508 156.20179,34.7483508 C155.514035,34.7483508 154.963833,34.5152556 154.064154,33.8590709 L154.064154,35.3429632 C154.687931,35.6956845 155.226138,36.0088235 156.323346,36.0088235 C157.71085,36.0088235 158.722488,35.2426883 158.722488,33.923282 C158.722488,31.5184442 155.540426,31.812232 155.540426,30.7742991" id="Fill-34"></path>
                    <path d="M167.103684,34.5768279 C165.91045,34.5768279 165.117097,33.7429632 165.117097,32.4807311 C165.117097,31.21674 165.91045,30.3793568 167.103684,30.3793568 C168.290506,30.3793568 169.083058,31.21674 169.083058,32.4807311 C169.083058,33.7429632 168.290506,34.5768279 167.103684,34.5768279 M167.103684,28.95 C164.738052,28.95 163.511962,30.8130016 163.511962,32.4807311 C163.511962,34.2337823 164.805366,36.0088235 167.103684,36.0088235 C169.354721,36.0088235 170.688995,34.2469764 170.688995,32.4807311 C170.688995,30.8253161 169.462905,28.95 167.103684,28.95" id="Fill-36"></path>
                    <path d="M178.603783,31.8484984 L177.523672,31.8484984 L177.523672,30.2380207 L178.553594,30.2380207 C179.318977,30.2380207 179.714216,30.5107994 179.714216,31.0410014 C179.714216,31.6425596 179.165273,31.8484984 178.603783,31.8484984 M180.413725,32.7056734 C181.348496,32.3335384 181.816927,31.7554646 181.816927,30.9750649 C181.816927,29.9227899 180.821511,28.95 179.146452,28.95 L175.478469,28.95 L175.478469,36.0088235 L177.523672,36.0088235 L177.523672,33.1446483 L178.10712,33.1446483 C179.215462,33.1446483 179.541691,34.5022186 180.413725,36.0088235 L182.655502,36.0088235 C181.5022,33.9404031 181.256483,33.0678729 180.413725,32.7056734" id="Fill-38"></path>
                    <polygon id="Fill-40" points="187.444976 30.237856 190.112104 30.237856 190.112104 36.0088235 191.951113 36.0088235 191.951113 30.237856 194.62201 30.237856 194.62201 28.95 187.444976 28.95"></polygon>
                    <path d="M201.014099,30.7742991 C201.014099,30.4312535 201.375026,30.207834 201.933187,30.207834 C202.464198,30.207834 203.004791,30.3793568 203.911902,30.8261958 L203.911902,29.4830402 C203.125366,29.1083288 202.494542,28.95 201.792649,28.95 C200.348139,28.95 199.411483,29.7354865 199.411483,30.9255911 C199.411483,33.3937603 202.591161,32.9829852 202.591161,34.1115174 C202.591161,34.5152556 202.273353,34.7483508 201.677663,34.7483508 C200.987748,34.7483508 200.438371,34.5152556 199.543238,33.8590709 L199.543238,35.3429632 C200.168474,35.6956845 200.705872,36.0088235 201.792649,36.0088235 C203.190046,36.0088235 204.196172,35.2426883 204.196172,33.923282 C204.196172,31.5184442 201.014099,31.812232 201.014099,30.7742991" id="Fill-42"></path>
                    <polygon id="Fill-44" points="124.861465 28.95 123.336322 28.95 123.184275 28.95 123.184275 31.5618265 120.430622 31.5618265 120.430622 31.7111496 120.430622 33.0073436 120.430622 33.1540158 123.184275 33.1540158 123.184275 36.0088235 124.706619 36.0088235 124.861465 36.0088235 124.861465 33.1504815 127.607656 33.1540158 127.607656 31.7111496 127.607656 31.5618265 124.861465 31.5618265"></polygon>
                    <polygon id="Combined-Shape" points="62.971531 4.70588235 63.3220846 5.32999343 70.1626794 18.8235294 68.8888584 18.8235294 66.8487148 14.7916602 66.3846581 13.8702258 62.9745443 7.13536195 59.5885374 13.8702258 59.1244807 14.7916602 57.0852917 18.8235294 55.8086124 18.8235294"></polygon>
                    <path d="M77.4673905,17.9106669 L73.6173449,17.9106669 L73.6173449,5.61698254 L77.4075047,5.61698254 C81.114345,5.61698254 83.6590553,8.14057145 83.6590553,11.7629436 C83.6590553,15.7404158 80.7541627,17.9106669 77.4673905,17.9106669 M77.3467511,4.70588235 L72.5550239,4.70588235 L72.5550239,18.8235294 L77.5255404,18.8235294 C82.9386907,18.8235294 84.8038281,15.0355027 84.8038281,11.7629436 C84.8038281,8.66044486 83.1617431,4.70588235 77.3467511,4.70588235" id="Fill-2"></path>
                    <path d="M94.2115497,17.9106669 L90.3616031,17.9106669 L90.3616031,5.61698253 L94.1516391,5.61698253 C97.8600563,5.61698253 100.407585,8.14057141 100.407585,11.7629436 C100.407585,15.7404157 97.5014571,17.9106669 94.2115497,17.9106669 M101.55024,11.7629436 C101.55024,8.66044482 99.9065883,4.70588235 94.0891228,4.70588235 L89.3014354,4.70588235 L89.3014354,18.8235294 L94.2714611,18.8235294 C99.6869145,18.8235294 101.55024,15.0355026 101.55024,11.7629436" id="Fill-4"></path>
                    <path d="M110.185971,11.1422184 L107.564732,11.1422184 L107.564732,5.61692567 L110.135774,5.61692567 C113.035099,5.61692567 114.311083,6.77643535 114.311083,8.3694395 C114.311083,10.068174 112.967836,11.1422184 110.185971,11.1422184 M112.618472,11.7854114 C114.636353,11.1228344 115.634251,9.98358978 115.634251,8.34917451 C115.634251,6.46453077 114.265907,4.70588235 110.393782,4.70588235 L106.334928,4.70588235 L106.334928,18.8235294 L107.564732,18.8235294 L107.564732,12.0559049 L109.699068,12.0559049 C111.598487,12.0559049 112.199836,12.2823441 114.101264,14.9520359 L116.86004,18.8235294 L118.296651,18.8235294 L114.725702,13.9379054 C113.986816,12.9431589 113.36037,12.1352027 112.618472,11.7854114" id="Fill-6"></path>
                    <polygon id="Fill-8" points="123.794431 12.0594292 129.669523 12.0594292 129.669523 11.1466238 123.794431 11.1466238 123.794431 5.61692567 129.819998 5.61692567 129.819998 4.70588235 122.794258 4.70588235 122.794258 18.8235294 129.971292 18.8235294 129.971292 17.9107239 123.794431 17.9107239"></polygon>
                    <path d="M136.11551,8.31723763 C136.11551,6.82273573 137.279395,5.69391895 138.821427,5.69391895 C139.701702,5.69391895 140.379731,5.93685061 141.693945,6.74290306 L141.693945,5.57116549 C140.698211,4.98830116 139.72185,4.70588235 138.727665,4.70588235 C136.696678,4.70588235 135.043062,6.3214209 135.043062,8.35586632 C135.043062,12.8934523 141.149972,11.1800543 141.149972,15.0909968 C141.149972,16.643871 139.96749,17.8353521 138.445605,17.8353521 C137.449096,17.8353521 136.640886,17.469667 135.215088,16.363169 L135.215088,17.6113056 C136.340229,18.4199332 137.449096,18.8216718 138.500623,18.8216718 C140.586627,18.8216718 142.220096,17.1700799 142.220096,15.0506512 C142.220096,10.2315049 136.11551,11.9878237 136.11551,8.31723763" id="Fill-10"></path>
                    <path d="M148.075567,8.31723763 C148.075567,6.82273573 149.241651,5.69391895 150.780417,5.69391895 C151.664472,5.69391895 152.340103,5.93685061 153.655724,6.74290306 L153.655724,5.57116549 C152.660872,4.98830116 151.684616,4.70588235 150.68744,4.70588235 C148.657447,4.70588235 147.004785,6.3214209 147.004785,8.35586632 C147.004785,12.8934523 153.111035,11.1800543 153.111035,15.0909968 C153.111035,16.643871 151.92713,17.8353521 150.40696,17.8353521 C149.409784,17.8353521 148.600886,17.469667 147.172918,16.363169 L147.172918,17.6113056 C148.301036,18.4199332 149.409784,18.8216718 150.461972,18.8216718 C152.549301,18.8216718 154.181818,17.1700799 154.181818,15.0506512 C154.181818,10.2315049 148.075567,11.9878237 148.075567,8.31723763" id="Fill-12"></path>
                    <path d="M26.3651478,28.4551341 L19.9932597,15.0926812 L13.6378479,28.4551341 L11.6666667,28.4551341 L19.9827747,11.0638298 L28.3333333,28.4551341 L26.3651478,28.4551341 Z M0,40 L40,40 L40,0 L0,0 L0,40 Z" id="Fill-14"></path>
                </g>
            </g>
        </g>
    </g>
</svg>          </div>
        </a>
        <button type="button" class="close" data-dismiss="modal" id="" onclick="hideMesg()"><i class="fal fa-times"></i></button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
        <div class="container pt-3  mb-0 pl-0 pr-0 ">
          <h2 class="modal-title">Dining Reservation</h2>



          <div class="row  justify-content-center h-100 block ">

            <div class="col-lg-12">
              <hr class="pb-0 mb-0">
              <div class="container ">

                <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-4 pl-lg-0 pr-lg-4 booking-info-container">
                    <table class="table table-borderless bookingInfo body-4">
                      <thead>
                        <tr>
                          <th class="pb-0 px-0 pt-3 meduimtext"><span class="dineresname">The Restaurant</span></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="d-none">
                          <td class=" pb-3 pt-0 px-0">Global Bistronomy</td>
                        </tr>

                        <tr>
                          <td class="py-1 px-0"><i class="fal  fa-map-marker-alt pr-2"></i><span class="dinereslocation">Address Dubai Mall</span></td>
                        </tr>
                        <tr>
                          <td class="py-1 px-0 dineresphone"></td>
                        </tr>
                        <tr>
                          <td class="py-1 px-0 dineresemail"></td>
                        </tr>
                        <tr>
                          <td colspan="Separator">
                            <hr>
                          </td>
                        </tr>
                        <tr>
                          <td class="py-1 px-0"><i class="fal  fa-calendar pr-2"></i><span class="date"></span></td>
                        </tr>
                        <tr>
                          <td class="py-1 px-0"><i class="fal  fa-clock pr-2"></i><span class="time"></span></td>
                        </tr>
                        <tr>
                          <td class="py-1 px-0"><i class="fal  fa-user-friends  pr-2"></i><span class="people"></span>
                          </td>
                        </tr>
                        <tr>
                          <td class="py-1 px-0"><i class="fal  fa-chair pr-2"></i><span class="seating"></span></td>
                        </tr>
                      </tbody>
                    </table>

                    <button class="btn whitefullbtn modifybutton my-3">Modify</button>
                  </div>

                  <div class="col-sm-12 col-md-12 col-lg-8 pl-lg-4 whitebox2 p-40 booking-form-container">
                    <!--form-->
                    <div class="container form-fluid-container">
                      <div class="row no-gutters">
                        <!-- Changes -->
                        <div class="col-lg-12  col-md-12 col-sm-12 pl-34 pl-sm-0 booking-form-title">
                          <h5 class="meduimtext pb-3">Guest information</h5>
                        </div>
                        <div class="col-lg-12  col-md-12 col-sm-12 pl-34 pl-sm-0 new-booking-container">
                          <div class="container-fluid form-container">
                            <form class="go-bottom needs-validation bookingForm" method="Post" action="#" id="bookinginfodineform" name="dineuserinfo">

                              <div class="row">
                                <div class="col-md-6 col-sm-12   dine-booking-fname">
                                  <input id="fname" name="fname" type="text" maxlength="50" class="form-control22" required="">
                                  <label for="fname" class="formtitle">First Name</label>
                                </div>
                                <div class="col-md-6 col-sm-12  dine-booking-lname">
                                  <input type="text" class="form-control22" maxlength="50" name="lname" id="lname" required="">
                                  <label for="lname" class="formtitle">Last Name</label>
                                </div>
                              </div>

                              <div class="row">
                                <div class="col-md-12 col-ms-12 px-0">

                                  <input type="text" class="form-control22" maxlength="50" name="email" id="email" required="">
                                  <label for="email" class="formtitle">Email</label>
                                </div>
                              </div>

                              <!-- Mobile Phone -->
                              <div class="row">
                                <div class="col-md-3  col-4 box codelist pr-3 pl-0 pr-mobile-10">
                                                                        <select name="phonecode" title="" class="my-image-selectpicker flagdrop" data-container="body" data-val="true" data-size="5" data-width='100%' data-container="body" data-show-subtext="true" data-live-search="true" id="flagdrop">
                                        <option value="AF" data-value="93" data-content="">+93 (Afghanistan)</option><option value="AX" data-value="358" data-content="">+358 (Åland Islands)</option><option value="AL" data-value="355" data-content="">+355 (Albania)</option><option value="DZ" data-value="213" data-content="">+213 (Algeria)</option><option value="AS" data-value="1" data-content="">+1 (American Samoa)</option><option value="AD" data-value="376" data-content="">+376 (Andorra)</option><option value="AO" data-value="244" data-content="">+244 (Angola)</option><option value="AI" data-value="1" data-content="">+1 (Anguilla)</option><option value="AQ" data-value="672" data-content="">+672 (Antarctica)</option><option value="AG" data-value="1" data-content="">+1 (Antigua and Barbuda)</option><option value="AR" data-value="54" data-content="">+54 (Argentina)</option><option value="AM" data-value="374" data-content="">+374 (Armenia)</option><option value="AW" data-value="297" data-content="">+297 (Aruba)</option><option value="AU" data-value="61" data-content="">+61 (Australia)</option><option value="AT" data-value="43" data-content="">+43 (Austria)</option><option value="AZ" data-value="994" data-content="">+994 (Azerbaijan)</option><option value="BS" data-value="1" data-content="">+1 (Bahamas)</option><option value="BH" data-value="973" data-content="">+973 (Bahrain)</option><option value="BD" data-value="880" data-content="">+880 (Bangladesh)</option><option value="BB" data-value="1" data-content="">+1 (Barbados)</option><option value="BY" data-value="375" data-content="">+375 (Belarus)</option><option value="BE" data-value="32" data-content="">+32 (Belgium)</option><option value="BZ" data-value="501" data-content="">+501 (Belize)</option><option value="BJ" data-value="229" data-content="">+229 (Benin)</option><option value="BM" data-value="1" data-content="">+1 (Bermuda)</option><option value="BT" data-value="975" data-content="">+975 (Bhutan)</option><option value="BO" data-value="591" data-content="">+591 (Bolivia (Plurinational State of))</option><option value="BQ" data-value="599" data-content="">+599 (Bonaire, Sint Eustatius and Saba)</option><option value="BA" data-value="387" data-content="">+387 (Bosnia and Herzegovina)</option><option value="BW" data-value="267" data-content="">+267 (Botswana)</option><option value="BV" data-value="47" data-content="">+47 (Bouvet Island)</option><option value="BR" data-value="55" data-content="">+55 (Brazil)</option><option value="IO" data-value="246" data-content="">+246 (British Indian Ocean Territory)</option><option value="BN" data-value="673" data-content="">+673 (Brunei Darussalam)</option><option value="BG" data-value="359" data-content="">+359 (Bulgaria)</option><option value="BF" data-value="226" data-content="">+226 (Burkina Faso)</option><option value="BI" data-value="257" data-content="">+257 (Burundi)</option><option value="CV" data-value="238" data-content="">+238 (Cabo Verde)</option><option value="KH" data-value="855" data-content="">+855 (Cambodia)</option><option value="CM" data-value="237" data-content="">+237 (Cameroon)</option><option value="CA" data-value="1" data-content="">+1 (Canada)</option><option value="KY" data-value="1" data-content="">+1 (Cayman Islands)</option><option value="CF" data-value="236" data-content="">+236 (Central African Republic)</option><option value="TD" data-value="235" data-content="">+235 (Chad)</option><option value="CL" data-value="56" data-content="">+56 (Chile)</option><option value="CN" data-value="86" data-content="">+86 (China)</option><option value="CX" data-value="61" data-content="">+61 (Christmas Island)</option><option value="CC" data-value="61" data-content="">+61 (Cocos (Keeling) Islands)</option><option value="CO" data-value="57" data-content="">+57 (Colombia)</option><option value="KM" data-value="269" data-content="">+269 (Comoros)</option><option value="CG" data-value="242" data-content="">+242 (Congo)</option><option value="CD" data-value="243" data-content="">+243 (Congo (Democratic Republic of the))</option><option value="CK" data-value="682" data-content="">+682 (Cook Islands)</option><option value="CR" data-value="506" data-content="">+506 (Costa Rica)</option><option value="HR" data-value="385" data-content="">+385 (Croatia)</option><option value="CU" data-value="53" data-content="">+53 (Cuba)</option><option value="CW" data-value="599" data-content="">+599 (Curaçao)</option><option value="CY" data-value="357" data-content="">+357 (Cyprus)</option><option value="CZ" data-value="420" data-content="">+420 (Czech Republic)</option><option value="DK" data-value="45" data-content="">+45 (Denmark)</option><option value="DJ" data-value="253" data-content="">+253 (Djibouti)</option><option value="DM" data-value="1" data-content="">+1 (Dominica)</option><option value="DO" data-value="1" data-content="">+1 (Dominican Republic)</option><option value="EC" data-value="593" data-content="">+593 (Ecuador)</option><option value="EG" data-value="20" data-content="">+20 (Egypt)</option><option value="SV" data-value="503" data-content="">+503 (El Salvador)</option><option value="GQ" data-value="240" data-content="">+240 (Equatorial Guinea)</option><option value="ER" data-value="291" data-content="">+291 (Eritrea)</option><option value="EE" data-value="372" data-content="">+372 (Estonia)</option><option value="ET" data-value="251" data-content="">+251 (Ethiopia)</option><option value="FK" data-value="500" data-content="">+500 (Falkland Islands (Malvinas))</option><option value="FO" data-value="298" data-content="">+298 (Faroe Islands)</option><option value="FJ" data-value="679" data-content="">+679 (Fiji)</option><option value="FI" data-value="358" data-content="">+358 (Finland)</option><option value="FR" data-value="33" data-content="">+33 (France)</option><option value="GF" data-value="594" data-content="">+594 (French Guiana)</option><option value="PF" data-value="689" data-content="">+689 (French Polynesia)</option><option value="TF" data-value="262" data-content="">+262 (French Southern Territories)</option><option value="GA" data-value="241" data-content="">+241 (Gabon)</option><option value="GM" data-value="220" data-content="">+220 (Gambia)</option><option value="GE" data-value="995" data-content="">+995 (Georgia)</option><option value="DE" data-value="49" data-content="">+49 (Germany)</option><option value="GH" data-value="233" data-content="">+233 (Ghana)</option><option value="GI" data-value="350" data-content="">+350 (Gibraltar)</option><option value="GR" data-value="30" data-content="">+30 (Greece)</option><option value="GL" data-value="299" data-content="">+299 (Greenland)</option><option value="GD" data-value="1" data-content="">+1 (Grenada)</option><option value="GP" data-value="590" data-content="">+590 (Guadeloupe)</option><option value="GU" data-value="1" data-content="">+1 (Guam)</option><option value="GT" data-value="502" data-content="">+502 (Guatemala)</option><option value="GG" data-value="44" data-content="">+44 (Guernsey)</option><option value="GN" data-value="224" data-content="">+224 (Guinea)</option><option value="GW" data-value="245" data-content="">+245 (Guinea-Bissau)</option><option value="GY" data-value="592" data-content="">+592 (Guyana)</option><option value="HT" data-value="509" data-content="">+509 (Haiti)</option><option value="HM" data-value="672" data-content="">+672 (Heard Island and McDonald Islands)</option><option value="HN" data-value="504" data-content="">+504 (Honduras)</option><option value="HK" data-value="852" data-content="">+852 (Hong Kong)</option><option value="HU" data-value="36" data-content="">+36 (Hungary)</option><option value="IS" data-value="354" data-content="">+354 (Iceland)</option><option value="IN" data-value="91" data-content="">+91 (India)</option><option value="ID" data-value="62" data-content="">+62 (Indonesia)</option><option value="IR" data-value="98" data-content="">+98 (Iran (Islamic Republic of))</option><option value="IQ" data-value="964" data-content="">+964 (Iraq)</option><option value="IE" data-value="353" data-content="">+353 (Ireland)</option><option value="IM" data-value="44" data-content="">+44 (Isle of Man)</option><option value="IL" data-value="972" data-content="">+972 (Israel)</option><option value="IT" data-value="39" data-content="">+39 (Italy)</option><option value="CI" data-value="225" data-content="">+225 (Ivory Coast)</option><option value="JM" data-value="1" data-content="">+1 (Jamaica)</option><option value="JP" data-value="81" data-content="">+81 (Japan)</option><option value="JE" data-value="44" data-content="">+44 (Jersey)</option><option value="JO" data-value="962" data-content="">+962 (Jordan)</option><option value="KZ" data-value="76" data-content="">+76 (Kazakhstan)</option><option value="KE" data-value="254" data-content="">+254 (Kenya)</option><option value="KI" data-value="686" data-content="">+686 (Kiribati)</option><option value="KP" data-value="850" data-content="">+850 (Korea (Democratic People's Republic of))</option><option value="KR" data-value="82" data-content="">+82 (Korea (Republic of))</option><option value="KW" data-value="965" data-content="">+965 (Kuwait)</option><option value="KG" data-value="996" data-content="">+996 (Kyrgyzstan)</option><option value="LA" data-value="856" data-content="">+856 (Lao People's Democratic Republic)</option><option value="LV" data-value="371" data-content="">+371 (Latvia)</option><option value="LB" data-value="961" data-content="">+961 (Lebanon)</option><option value="LS" data-value="266" data-content="">+266 (Lesotho)</option><option value="LR" data-value="231" data-content="">+231 (Liberia)</option><option value="LY" data-value="218" data-content="">+218 (Libya)</option><option value="LI" data-value="423" data-content="">+423 (Liechtenstein)</option><option value="LT" data-value="370" data-content="">+370 (Lithuania)</option><option value="LU" data-value="352" data-content="">+352 (Luxembourg)</option><option value="MO" data-value="853" data-content="">+853 (Macao)</option><option value="MG" data-value="261" data-content="">+261 (Madagascar)</option><option value="MW" data-value="265" data-content="">+265 (Malawi)</option><option value="MY" data-value="60" data-content="">+60 (Malaysia)</option><option value="MV" data-value="960" data-content="">+960 (Maldives)</option><option value="ML" data-value="223" data-content="">+223 (Mali)</option><option value="MT" data-value="356" data-content="">+356 (Malta)</option><option value="MH" data-value="692" data-content="">+692 (Marshall Islands)</option><option value="MQ" data-value="596" data-content="">+596 (Martinique)</option><option value="MR" data-value="222" data-content="">+222 (Mauritania)</option><option value="MU" data-value="230" data-content="">+230 (Mauritius)</option><option value="YT" data-value="262" data-content="">+262 (Mayotte)</option><option value="MX" data-value="52" data-content="">+52 (Mexico)</option><option value="FM" data-value="691" data-content="">+691 (Micronesia (Federated States of))</option><option value="MD" data-value="373" data-content="">+373 (Moldova (Republic of))</option><option value="MC" data-value="377" data-content="">+377 (Monaco)</option><option value="MN" data-value="976" data-content="">+976 (Mongolia)</option><option value="ME" data-value="382" data-content="">+382 (Montenegro)</option><option value="MS" data-value="1" data-content="">+1 (Montserrat)</option><option value="MA" data-value="212" data-content="">+212 (Morocco)</option><option value="MZ" data-value="258" data-content="">+258 (Mozambique)</option><option value="MM" data-value="95" data-content="">+95 (Myanmar)</option><option value="NA" data-value="264" data-content="">+264 (Namibia)</option><option value="NR" data-value="674" data-content="">+674 (Nauru)</option><option value="NP" data-value="977" data-content="">+977 (Nepal)</option><option value="NL" data-value="31" data-content="">+31 (Netherlands)</option><option value="NC" data-value="687" data-content="">+687 (New Caledonia)</option><option value="NZ" data-value="64" data-content="">+64 (New Zealand)</option><option value="NI" data-value="505" data-content="">+505 (Nicaragua)</option><option value="NE" data-value="227" data-content="">+227 (Niger)</option><option value="NG" data-value="234" data-content="">+234 (Nigeria)</option><option value="NU" data-value="683" data-content="">+683 (Niue)</option><option value="NF" data-value="672" data-content="">+672 (Norfolk Island)</option><option value="MK" data-value="389" data-content="">+389 (North Macedonia)</option><option value="MP" data-value="1" data-content="">+1 (Northern Mariana Islands)</option><option value="NO" data-value="47" data-content="">+47 (Norway)</option><option value="OM" data-value="968" data-content="">+968 (Oman)</option><option value="PK" data-value="92" data-content="">+92 (Pakistan)</option><option value="PW" data-value="680" data-content="">+680 (Palau)</option><option value="PS" data-value="970" data-content="">+970 (Palestine, State of)</option><option value="PA" data-value="507" data-content="">+507 (Panama)</option><option value="PG" data-value="675" data-content="">+675 (Papua New Guinea)</option><option value="PY" data-value="595" data-content="">+595 (Paraguay)</option><option value="PE" data-value="51" data-content="">+51 (Peru)</option><option value="PH" data-value="63" data-content="">+63 (Philippines)</option><option value="PN" data-value="64" data-content="">+64 (Pitcairn)</option><option value="PL" data-value="48" data-content="">+48 (Poland)</option><option value="PT" data-value="351" data-content="">+351 (Portugal)</option><option value="PR" data-value="1" data-content="">+1 (Puerto Rico)</option><option value="QA" data-value="974" data-content="">+974 (Qatar)</option><option value="XK" data-value="383" data-content="">+383 (Republic of Kosovo)</option><option value="RE" data-value="262" data-content="">+262 (Réunion)</option><option value="RO" data-value="40" data-content="">+40 (Romania)</option><option value="RU" data-value="7" data-content="">+7 (Russian Federation)</option><option value="RW" data-value="250" data-content="">+250 (Rwanda)</option><option value="BL" data-value="590" data-content="">+590 (Saint Barthélemy)</option><option value="SH" data-value="290" data-content="">+290 (Saint Helena, Ascension and Tristan da Cunha)</option><option value="KN" data-value="1" data-content="">+1 (Saint Kitts and Nevis)</option><option value="LC" data-value="1" data-content="">+1 (Saint Lucia)</option><option value="MF" data-value="590" data-content="">+590 (Saint Martin (French part))</option><option value="PM" data-value="508" data-content="">+508 (Saint Pierre and Miquelon)</option><option value="VC" data-value="1" data-content="">+1 (Saint Vincent and the Grenadines)</option><option value="WS" data-value="685" data-content="">+685 (Samoa)</option><option value="SM" data-value="378" data-content="">+378 (San Marino)</option><option value="ST" data-value="239" data-content="">+239 (Sao Tome and Principe)</option><option value="SA" data-value="966" data-content="">+966 (Saudi Arabia)</option><option value="SN" data-value="221" data-content="">+221 (Senegal)</option><option value="RS" data-value="381" data-content="">+381 (Serbia)</option><option value="SC" data-value="248" data-content="">+248 (Seychelles)</option><option value="SL" data-value="232" data-content="">+232 (Sierra Leone)</option><option value="SG" data-value="65" data-content="">+65 (Singapore)</option><option value="SX" data-value="1" data-content="">+1 (Sint Maarten (Dutch part))</option><option value="SK" data-value="421" data-content="">+421 (Slovakia)</option><option value="SI" data-value="386" data-content="">+386 (Slovenia)</option><option value="SB" data-value="677" data-content="">+677 (Solomon Islands)</option><option value="SO" data-value="252" data-content="">+252 (Somalia)</option><option value="ZA" data-value="27" data-content="">+27 (South Africa)</option><option value="GS" data-value="500" data-content="">+500 (SGSSI)</option><option value="SS" data-value="211" data-content="">+211 (South Sudan)</option><option value="ES" data-value="34" data-content="">+34 (Spain)</option><option value="LK" data-value="94" data-content="">+94 (Sri Lanka)</option><option value="SD" data-value="249" data-content="">+249 (Sudan)</option><option value="SR" data-value="597" data-content="">+597 (Suriname)</option><option value="SJ" data-value="47" data-content="">+47 (Svalbard and Jan Mayen)</option><option value="SZ" data-value="268" data-content="">+268 (Swaziland)</option><option value="SE" data-value="46" data-content="">+46 (Sweden)</option><option value="CH" data-value="41" data-content="">+41 (Switzerland)</option><option value="SY" data-value="963" data-content="">+963 (Syrian Arab Republic)</option><option value="TW" data-value="886" data-content="">+886 (Taiwan)</option><option value="TJ" data-value="992" data-content="">+992 (Tajikistan)</option><option value="TZ" data-value="255" data-content="">+255 (Tanzania, United Republic of)</option><option value="TH" data-value="66" data-content="">+66 (Thailand)</option><option value="TL" data-value="670" data-content="">+670 (Timor-Leste)</option><option value="TG" data-value="228" data-content="">+228 (Togo)</option><option value="TK" data-value="690" data-content="">+690 (Tokelau)</option><option value="TO" data-value="676" data-content="">+676 (Tonga)</option><option value="TT" data-value="1" data-content="">+1 (Trinidad and Tobago)</option><option value="TN" data-value="216" data-content="">+216 (Tunisia)</option><option value="TR" data-value="90" data-content="">+90 (Turkey)</option><option value="TM" data-value="993" data-content="">+993 (Turkmenistan)</option><option value="TC" data-value="1" data-content="">+1 (Turks and Caicos Islands)</option><option value="TV" data-value="688" data-content="">+688 (Tuvalu)</option><option value="UG" data-value="256" data-content="">+256 (Uganda)</option><option value="UA" data-value="380" data-content="">+380 (Ukraine)</option><option value="AE" data-value="971" data-content="">+971 (United Arab Emirates)</option><option value="GB" data-value="44" data-content="">+44 (United Kingdom of Great Britain and Northern Ireland)</option><option value="UM" data-value="246" data-content="">+246 (United States Minor Outlying Islands)</option><option value="US" data-value="1" data-content="">+1 (United States of America)</option><option value="UY" data-value="598" data-content="">+598 (Uruguay)</option><option value="UZ" data-value="998" data-content="">+998 (Uzbekistan)</option><option value="VU" data-value="678" data-content="">+678 (Vanuatu)</option><option value="VA" data-value="379" data-content="">+379 (Vatican City)</option><option value="VE" data-value="58" data-content="">+58 (Venezuela (Bolivarian Republic of))</option><option value="VN" data-value="84" data-content="">+84 (Vietnam)</option><option value="VG" data-value="1" data-content="">+1 (Virgin Islands (British))</option><option value="VI" data-value="1 340" data-content="">+1 340 (Virgin Islands (U.S.))</option><option value="WF" data-value="681" data-content="">+681 (Wallis and Futuna)</option><option value="EH" data-value="212" data-content="">+212 (Western Sahara)</option><option value="YE" data-value="967" data-content="">+967 (Yemen)</option><option value="ZM" data-value="260" data-content="">+260 (Zambia)</option><option value="ZW" data-value="263" data-content="">+263 (Zimbabwe)</option>                                      </select>
                                                                  </div>
                                <div class="col-md-9 col-8 px-0 pt-1">


                                  <input type="tel" id="mobile" maxlength="25" name="mobile" required="">
                                  <label for="mobile" class="formtitle">Mobile Phone</label>
                                </div>
                              </div>



                              <div class="row">
                                <div class="col-md-12 col-sm-12 px-0 pt-1">
                                  <textarea id="specialRequest" name="specialRequest" type="text" maxlength="500" onkeypress="return blockSpecialChar(event)"></textarea>
                                  <label for="fname" class="formtitle">Special Request</label>
                                </div>

                              </div>
                              <div class="row">

                                <div class="col-md-12 small-text px-1 pt-lg-3">
                                  Powered by Eat App. By completing this reservation, you agree to Eat App's <a class="bluelink small-text" rel="nofollow" href="/dependencies/external/restaurant.eatapp.co/terms.bin" target="_blank">Terms of Use</a> and <a class="bluelink small-text" href="/dependencies/external/restaurant.eatapp.co/privacy.bin" rel="nofollow" target="_blank">Privacy Policy </a>
                                </div>
                                <div class="col-md-12 small-text px-1">Please visit our <a target="_blank" class="bluelink small-text" href="/dependencies/external/www.emaarhospitality.com/en/gdpr/privacypolicy.bin">Privacy Policy</a>
                                  to understand how we handle your personal data.
                                </div>

                              </div>

                              <div class="row">
                                <div class="col-lg-5 mr-auto py-4 px-0">
                                  <button class="btn blackfullbtn bookinginfodinebtn primary-btn w-100" data-backdrop="static">
                                    <svg class="button-loader" style="display: none;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="200px" height="200px" viewbox="0 0 100 100" preserveaspectratio="xMidYMid">
                                      <circle cx="50" cy="50" fill="none" stroke="#ffffff" stroke-width="10" r="35" stroke-dasharray="164.93361431346415 56.97787143782138" transform="rotate(132.222 50 50)">
                                        <animatetransform attributename="transform" type="rotate" repeatcount="indefinite" dur="1s" values="0 50 50;360 50 50" keytimes="0;1">
                                        </animatetransform>
                                      </circle>
                                    </svg>
                                    Book Now                                  </button>
                                </div>

                                <div class="col-md-12 col-ms-12 api-error hide" id="ApiError"></div>
                                <!-- <div class="col-md-12 col-ms-12 errormsg hide">
                                                   <h4><i class="fal fa-exclamation-circle pr-2"></i>Invalid Details                                                   </h4>
                                                   .
                                                </div> -->

                              </div>
                            </form>
                            <!--end form -->
                          </div>

                        </div>

                        <div class="col-lg-12  col-md-12 col-ms-12 pl-3 modify-booking-info" style="display: none;">
                        </div>
                        <div class="col-lg-12  col-md-12 col-ms-12 pl-3 modify-booking-container" style="display: none;">
                          <div class="col-lg-5 mr-auto py-4">
                            <button class="btn blackfullbtn updatebookingbtn primary-btn">
                              <svg class="button-loader" style="display: none;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="200px" height="200px" viewbox="0 0 100 100" preserveaspectratio="xMidYMid">
                                <circle cx="50" cy="50" fill="none" stroke="#ffffff" stroke-width="10" r="35" stroke-dasharray="164.93361431346415 56.97787143782138" transform="rotate(132.222 50 50)">
                                  <animatetransform attributename="transform" type="rotate" repeatcount="indefinite" dur="1s" values="0 50 50;360 50 50" keytimes="0;1"></animatetransform>
                                </circle>
                              </svg>
                              Book Now                            </button>
                          </div>
                          <div class="col-md-12 col-ms-12 api-error hide" style="display: none;"></div>
                          <!-- <div class="col-md-12 col-ms-12 errormsg hide">
                                          <h4><i class="fal fa-exclamation-circle pr-2"></i>                                          </h4>
                                          .
                                       </div> -->
                        </div>

                      </div>

                      <!-- personal info -->



                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<!--2-->

<form action="/en/find/rooms/" method="GET" id="book_now_form" name="book_now_form" type="submit">
  <input type="hidden" name="id" id="hotel_id" value="all">
  <input type="hidden" name="hotelname" id="hotel_name" value="All Hotels">
  <input type="hidden" name="cid" id="check_in_date" value="">
  <input type="hidden" name="cod" id="check_out_date" value="">
  <input type="hidden" name="bfse" id="bfse" value="0">
  <input type="hidden" name="adult" id="total_adults" value="1">
  <input type="hidden" name="child" id="total_childs" value="0">
  <input type="hidden" name="rooms" id="room_count" value="1">
  <input type="hidden" name="type" id="code_type" value="">
  <input type="hidden" name="code" id="code_value" value="">
  <input type="hidden" name="offer" id="offer" value="">
  <input type="hidden" name="offercode" id="offer_code" value="">
  <input type="hidden" name="offerstart" id="offer_start_date" value="">
  <input type="hidden" name="offerend" id="offer_end_date" value="">
  <input type="hidden" name="offerid" id="offerid" value="">

  <input type="hidden" name="roomtypecode" id="room_type_code" value="">
  <input type="hidden" name="rateplancode" id="rate_plan_code" value="">
  <!-- for packages -->
  <input type="hidden" name="rateplantype" id="rate_plan_type" value="">
  <input type="hidden" id="hotelDetails" name="hotelDetails" value="">
  <input type="hidden" name="iata" id="iata_value" value="">
</form>
<script>
  $(document).ready(function() {

    $("#findRoomModalBtn").click(function() {
      window.dataLayer = window.dataLayer || [];
      const urlParams = new URLSearchParams(window.location.search);
      dataLayer.push({
        "event": "select_promotion",
        "ecommerce": {
          "promotions": [{
            "hotel_name": urlParams.get('hotel'),
            "promotion_name": urlParams.get('experience') + " offers",
            "page_url": window.location.href,
            "experience": urlParams.get('experience')
          }]
        }
      });

    });
  });
</script>
<style>
  @media (max-width: 600px) {
    .staymodifyform .individual_hotel_restaurant .dropdown-item.hotel_list_item {
        white-space: normal;
    }
}
  </style><!-- Instagram Feed JS -->
<script type="text/javascript">
var sbiajaxurl = "/internal/admin-ajax-disabled";
</script>
<link rel='stylesheet' id='individual-pages-css-css' href='/dependencies/css/wp-content/themes/emaar-projects/vendor/css/individual-pages.css?ver=1707315139' type='text/css' media='all'>
<link rel='stylesheet' id='individual-home-css-css' href='/dependencies/css/wp-content/themes/emaar-projects/vendor/css/individual-home.css?ver=1707315139' type='text/css' media='all'>
<link rel='stylesheet' id='custom-block-css-css' href='/dependencies/css/wp-content/themes/emaar-projects/vendor/css/custom-block.css?ver=1707315139' type='text/css' media='all'>
<link rel='stylesheet' id='individual-homepage-widget-video-text-content-css-css' href='/dependencies/css/wp-content/themes/emaar-projects/template-parts/dynamic-blocks/assets/css/individual-homepage-widget-video-text-content.css?ver=1737511380' type='text/css' media='all'>
<link rel='stylesheet' id='global-homepage-booking-widget-css-css' href='/dependencies/css/wp-content/themes/emaar-projects/vendor/css/global-homepage-booking-widget.css?ver=1728894359' type='text/css' media='all'>
<link rel='stylesheet' id='global-booking-widget-css' href='/dependencies/css/wp-content/themes/emaar-projects/vendor/css/global-booking-widget.css?ver=1714113413' type='text/css' media='all'>
<link rel='stylesheet' id='subtitle-title-description-section-css-css' href='/dependencies/external/www-addresshotels-com.azureedge.net/wp-content/themes/emaar-projects/template-parts/dynamic-blocks/assets/css/subtitle-title-description-section-ver-6-6-4.css' type='text/css' media='all'>
<link rel='stylesheet' id='individual-homepage-featured-offer-css-css' href='/dependencies/css/wp-content/themes/emaar-projects/template-parts/dynamic-blocks/assets/css/individual-homepage-featured-offer.css?ver=1737511379' type='text/css' media='all'>
<link rel='stylesheet' id='flickity-css-css' href='/dependencies/css/wp-content/themes/emaar-projects/vendor/css/flickity.min.css?ver=1707315139' type='text/css' media='all'>
<link rel='stylesheet' id='individual-homepage-explore-accommodations-css-css' href='/dependencies/css/wp-content/themes/emaar-projects/template-parts/dynamic-blocks/assets/css/individual-homepage-explore-accommodations.css?ver=1737511379' type='text/css' media='all'>
<link rel='stylesheet' id='individual-homepage-hotel-highlights-section-css-css' href='/dependencies/css/wp-content/themes/emaar-projects/template-parts/dynamic-blocks/assets/css/individual-homepage-hotel-highlights-section.css?ver=1760339637' type='text/css' media='all'>
<link rel='stylesheet' id='individual-homepage-corporate-section-css-css' href='/dependencies/css/wp-content/themes/emaar-projects/template-parts/dynamic-blocks/assets/css/individual-homepage-corporate-section-1.css?ver=1737511378' type='text/css' media='all'>
<link rel='stylesheet' id='individual-homepage-contact-map-css-css' href='/dependencies/css/wp-content/themes/emaar-projects/template-parts/dynamic-blocks/assets/css/individual-homepage-contact-map.css?ver=1737511378' type='text/css' media='all'>
<link rel='stylesheet' id='global-hotel-landing-faq-section-css' href='/dependencies/css/wp-content/themes/emaar-projects/template-parts/dynamic-blocks/assets/css/global-hotel-landing-faq-section.css?ver=1737511375' type='text/css' media='all'>
<link rel='stylesheet' id='footer-css-css' href='/dependencies/css/wp-content/themes/emaar-projects/vendor/css/footer.css?ver=1740064444' type='text/css' media='all'>
<link rel='stylesheet' id='dinebooking-css' href='/dependencies/css/wp-content/themes/emaar-projects/vendor/css/dinebooking.css?ver=1707315139' type='text/css' media='all'>
<link rel='stylesheet' id='jquery.datepick-css' href='/dependencies/css/wp-content/themes/emaar-projects/vendor/css/jquery.datepick.css?ver=1707315139' type='text/css' media='all'>
<link rel='stylesheet' id='global-booking-modal-css' href='/dependencies/css/wp-content/themes/emaar-projects/vendor/css/global-booking-modal.css?ver=1714125067' type='text/css' media='all'>
<link rel='stylesheet' id='spabooking-modal-css' href='/dependencies/css/wp-content/themes/emaar-projects/vendor/css/spabooking.css?ver=1707315139' type='text/css' media='all'>
<script type="text/javascript" id="dynamic-calendar-ajax-js-extra">
/* <![CDATA[ */
var dynamic_ajax_call_obj = {"ajax_url":"/internal/admin-ajax-disabled"};
/* ]]> */
</script>

<script type="text/javascript" src="/dependencies/js/wp-content/themes/emaar-projects/js/lib/bootstrap.bundle.min.js?ver=20151215" id="bootstrap-js"></script>
<script type="text/javascript" src="/dependencies/js/wp-content/themes/emaar-projects/vendor/js/jquery.validate.min.js?ver=1.19.5" id="jquery-validate-min-js-js"></script>
<script type="text/javascript" id="window-onload-js-before">
/* <![CDATA[ */
const site_constants = {"gtm_key":"GTM-T5Q9VQ"}
/* ]]> */
</script>


<script type="text/javascript" src="/dependencies/js/wp-includes/js/dist/vendor/moment.min.js?ver=2.29.4" id="moment-js"></script>
<script type="text/javascript" id="moment-js-after">
/* <![CDATA[ */
moment.updateLocale( 'en', {"months":["January","February","March","April","May","June","July","August","September","October","November","December"],"monthsShort":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"weekdays":["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"weekdaysShort":["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],"week":{"dow":0},"longDateFormat":{"LT":"g:i A","LTS":null,"L":null,"LL":"F j, Y","LLL":"F j, Y g:i a","LLLL":null}} );
/* ]]> */
</script>



<script type="text/javascript" src="/dependencies/js/wp-content/themes/emaar-projects/js/lib/easepick.js?ver=1728893068" id="easepick-js-js"></script>
<script type="text/javascript" src="/dependencies/js/wp-content/themes/emaar-projects/vendor/js/flickity.pkgd.min.js?ver=1707315139" id="flickity-js-js"></script>
<script type="text/javascript" src="/dependencies/js/wp-content/themes/emaar-projects/vendor/js/jquery.plugin.min.js?ver=1707315139" id="jquery-plugin-min-js"></script>
<script type="text/javascript" src="/dependencies/js/wp-content/themes/emaar-projects/vendor/js/jquery.datepick.js?ver=1740461485" id="jquery-datepick-js"></script>



<script>window.lazyLoadOptions={elements_selector:"iframe[data-lazy-src]",data_src:"lazy-src",data_srcset:"lazy-srcset",data_sizes:"lazy-sizes",class_loading:"lazyloading",class_loaded:"lazyloaded",threshold:300,callback_loaded:function(element){if(element.tagName==="IFRAME"&&element.dataset.rocketLazyload=="fitvidscompatible"){if(element.classList.contains("lazyloaded")){if(typeof window.jQuery!="undefined"){if(jQuery.fn.fitVids){jQuery(element).parent().fitVids()}}}}}};window.addEventListener('LazyLoad::Initialized',function(e){var lazyLoadInstance=e.detail.instance;if(window.MutationObserver){var observer=new MutationObserver(function(mutations){var image_count=0;var iframe_count=0;var rocketlazy_count=0;mutations.forEach(function(mutation){for(var i=0;i<mutation.addedNodes.length;i++){if(typeof mutation.addedNodes[i].getElementsByTagName!=='function'){continue}
if(typeof mutation.addedNodes[i].getElementsByClassName!=='function'){continue}
images=mutation.addedNodes[i].getElementsByTagName('img');is_image=mutation.addedNodes[i].tagName=="IMG";iframes=mutation.addedNodes[i].getElementsByTagName('iframe');is_iframe=mutation.addedNodes[i].tagName=="IFRAME";rocket_lazy=mutation.addedNodes[i].getElementsByClassName('rocket-lazyload');image_count+=images.length;iframe_count+=iframes.length;rocketlazy_count+=rocket_lazy.length;if(is_image){image_count+=1}
if(is_iframe){iframe_count+=1}}});if(image_count>0||iframe_count>0||rocketlazy_count>0){lazyLoadInstance.update()}});var b=document.getElementsByTagName("body")[0];var config={childList:!0,subtree:!0};observer.observe(b,config)}},!1)</script><script data-no-minify="1" async="" src="/dependencies/js/wp-content/plugins/wp-rocket/assets/js/lazyload/17.8.3/lazyload.min.js"></script><script>function lazyLoadThumb(e,alt,l){var t='<img src="/dependencies/external/i.ytimg.com/vi_webp/ID/hqdefault.webp" alt="" width="480" height="360">',a='<button class="play" aria-label="play Youtube video"></button>';if(l){t=t.replace('data-lazy-','');t=t.replace('loading="lazy"','');t=t.replace(/<noscript>.*?<\/noscript>/g,'');}t=t.replace('alt=""','alt="'+alt+'"');return t.replace("ID",e)+a}function lazyLoadYoutubeIframe(){var e=document.createElement("iframe"),t="ID?autoplay=1";t+=0===this.parentNode.dataset.query.length?"":"&"+this.parentNode.dataset.query;e.setAttribute("src",t.replace("ID",this.parentNode.dataset.src)),e.setAttribute("frameborder","0"),e.setAttribute("allowfullscreen","1"),e.setAttribute("allow","accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"),this.parentNode.parentNode.replaceChild(e,this.parentNode)}document.addEventListener("DOMContentLoaded",function(){var exclusions=["wpml-ls-flag"];var e,t,p,u,l,a=document.getElementsByClassName("rll-youtube-player");for(t=0;t<a.length;t++)(e=document.createElement("div")),(u='https://i.ytimg.com/vi_webp/ID/hqdefault.webp'),(u=u.replace('ID',a[t].dataset.id)),(l=exclusions.some(exclusion=>u.includes(exclusion))),e.setAttribute("data-id",a[t].dataset.id),e.setAttribute("data-query",a[t].dataset.query),e.setAttribute("data-src",a[t].dataset.src),(e.innerHTML=lazyLoadThumb(a[t].dataset.id,a[t].dataset.alt,l)),a[t].appendChild(e),(p=e.querySelector(".play")),(p.onclick=lazyLoadYoutubeIframe)});</script>
<style>
  .color-inherit {
    color: inherit !important;
  }

  .translatey2 {
    transform: translateY(-2px)
  }

  @media (max-width: 1200px) {
    .translatey2 {
      transform: translateY(-1px)
    }

  }
</style>
<script>
  $(document).ready(function() {
    $(".ft-dropdown").click(function() {
      $(".ft-menu").slideToggle(0);
      $(".ft-dropdown i").toggleClass("fa-caret-up fa-caret-down");
      setTimeout(function() {
        $(document).scrollTop($(document).height());
      }, 400);
    });
  });
</script>

</div>