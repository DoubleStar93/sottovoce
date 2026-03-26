$(document).ready(function () {
  var urlParams = new URLSearchParams(window.location.search);

  $(".select_treatment_input").removeClass("disabled");
  // Get the value of the "id" parameter
  var idValue = urlParams.get("id");

  if (idValue != null) {
    if (window.innerWidth <= 768) {
      fetchTreatmentCategoriesMobile(idValue);
    }
    $("#hotelid").val(idValue);
    $("#hotel_Name").val(urlParams.get("hotel"));
    $("#spa_persons").val(urlParams.get("pax"));
    $("#treatmentCategoryId").val(urlParams.get("category"));
    $("#CategoryName").val(urlParams.get("categoryName"));
    $("#daterangeboxtxtSpa").val(urlParams.get("date"));
    $(".select_treatment_widget").removeClass("d-none");
  } else {
    $(".treatment-spa").text("Select Treatment");
  }
  $(".stay_all_hotel_list").click(function () {
    // Get the value of the hidden input field with ID hotelid
    $(".treatment-spa").text("Select Treatment");

    var ibuidValue = $("#hotelid").val();
    var list = $("#ul_modal_treatment");

    // Make AJAX call with the IBUID as data
    if (window.innerWidth >= 768) {
      $.ajax({
        url: "/wp-json/booking/spa/v1/category",
        type: "GET",
        data: { IBUID: ibuidValue }, // Pass IBUID as data
        beforeSend: function () {
          // Disable the link before the request is sent
          $(".select_treatment_input").addClass("disabled");
        },
        success: function (data) {
          list.empty();

          if (data.data.ResponseData && data.data.ResponseData.length > 0) {
            for (var i = 0; i < data.data.ResponseData.length; i++) {
              // Create a new list item with the treatmentValue class
              var listItem = $('<li class="treatmentValue"></li>');

              // Create a span with the treatment_value class and set its attributes
              var span = $(
                '<span class="treatment_value" data-treatmentcategoryid=' +
                  data.data.ResponseData[i]["TreatmentCategoryId"] +
                  ">" +
                  data.data.ResponseData[i]["CategoryName"] +
                  "</span>"
              );

              // Append the span to the list item
              listItem.append(span);

              // Append the list item to the main list
              list.append(listItem);
            }
          } else {
            // If no data is present, return an empty list or handle it as needed
            list.html('<li> <span class="treatment_value">No data available</span></li>');
          }
        },
        error: function (xhr, status, error) {
          // Handle the error response here
        },
        complete: function () {
          // Disable the link before the request is sent
          $(".select_treatment_input").removeClass("disabled");
        },
      });
    } else {
      fetchTreatmentCategoriesMobile(ibuidValue);
    }
  });
});

//Date picker for mobile
var prevIcon = '<i class="fal fa-angle-left calender-icons calender-prev-icon"></i>';
var nextIcon = '<i class="fal fa-angle-right calender-icons calender-next-icon"></i>';
var isValid;

if (ICL == "ar") {
  tDays = ["أ", "إ", "ث", "أ", "خ", "ج", "س"];
  // moNames = ["يناير", "فبراير", "مارس", "ابريل", "مايو", "يونيو", "يوليو", "اغسطس", "سبتمبر", "اكتوبر", "نوفمبر", "ديسمبر"]
  isValid = true;
  prevIcon = '<i class="fal fa-angle-right calender-icons calender-next-icon"></i>';
  nextIcon = '<i class="fal fa-angle-left calender-icons calender-prev-icon"></i>';
} else if (ICL == "tr") {
  tDays = ["Pz", "Pt", "Sa", "Ça", "Pe", "Cu", "Ct"];
  // moNames = ["Ocak", "Şubat", "Mart", "Nisan", "Mayıs", "Haziran", "Temmuz", "Ağustos", "Eylül", "Ekim", "Kasım", "Aralık"]
  isValid = false;
  // prevIcon = '<i class="fal fa-angle-right calender-icons calender-next-icon"></i>'
  // nextIcon = '<i class="fal fa-angle-left calender-icons calender-prev-icon"></i>'
} else if (ICL == "de") {
  tDays = ["So.", "Mo.", "Di.", "Mi.", "Do.", "Fr.", "Sa."];
  // moNames = ['Januar', 'Februar', 'März', 'April', 'Mai', 'Juni', 'Juli', 'August', 'September', 'Oktober', 'November', 'Dezember']
  isValid = false;
  prevIcon = '<i class="fal fa-angle-left calender-icons calender-prev-icon"></i>';
  nextIcon = '<i class="fal fa-angle-right calender-icons calender-next-icon"></i>';
} else if (ICL == "fr") {
  tDays = ["Dim", "Lun", "Mar", "Mer", "Jeu", "Ven", "Sam"];
  // moNames = ['janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre']
  isValid = false;
  prevIcon = '<i class="fal fa-angle-left calender-icons calender-prev-icon"></i>';
  nextIcon = '<i class="fal fa-angle-right calender-icons calender-next-icon"></i>';
} else if (ICL == "zh-hans") {
  tDays = ["周日", "周一", "周二", "周三", "周四", "周五", "周六"];
  // moNames = ['janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre']
  isValid = false;
  prevIcon = '<i class="fal fa-angle-left calender-icons calender-prev-icon"></i>';
  nextIcon = '<i class="fal fa-angle-right calender-icons calender-next-icon"></i>';
} else if (ICL == "ru") {
  tDays = ["вс", "пн", "вт", "ср", "чт", "пт", "сб"];
  // moNames = ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь']
  isValid = false;
  prevIcon = '<i class="fal fa-angle-left calender-icons calender-prev-icon"></i>';
  nextIcon = '<i class="fal fa-angle-right calender-icons calender-next-icon"></i>';
} else {
  tDays = ["S", "M", "T", "W", "T", "F", "S"];
  // moNames = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December']
  isValid = false;
  prevIcon = '<i class="fal fa-angle-left calender-icons calender-prev-icon"></i>';
  nextIcon = '<i class="fal fa-angle-right calender-icons calender-next-icon"></i>';
}

moNames = [
  month_january,
  month_february,
  month_march,
  month_april,
  month_may,
  month_june,
  month_july,
  month_August,
  month_september,
  month_october,
  month_november,
  month_december,
];
$("#datepick_modal_Spa_mobile").datepick({
  rangeSelect: false,
  minDate: new Date(),
  alignment: "bottomLeft",
  maxDate: "+12m",
  monthsToShow: 1,
  prevText: prevIcon,
  todayText: "",
  nextText: nextIcon,
  isRTL: isValid,
  dayNamesMin: tDays,
  useMouseWheel: false,
  monthNames: moNames,
  firstDay: 1,
  popupContainer: "#datepick_modal_Spa_inside",
  dateFormat: "dd/mm/yyyy",
  changeMonth: false,
  onSelect: function (dates) {
    cbSpa(dates);
  },
});

$("#datepick_modal_Spa_desktop").datepick({
  rangeSelect: false,
  minDate: new Date(),
  alignment: "bottomLeft",
  maxDate: "+12m",
  monthsToShow: 1,
  prevText: prevIcon,
  // todayText: '',
  useMouseWheel: false,
  isRTL: isValid,
  dayNamesMin: tDays,
  monthNames: moNames,
  firstDay: 1,
  nextText: nextIcon,
  popupContainer: "#SpaBookingModal",
  dateFormat: "dd/mm/yyyy",
  changeMonth: false,
  onSelect: function (dates) {
    cbSpa(dates);
  },
});

//dafter selcting date
function cbSpa(start, end, selector) {
  var dt = moment(new Date(start)).format("DD/MM/YYYY");
  var eventDate1 = moment(dt, "DD/MM/YYYY").format("YYYY-MM-DD");
  var date1 = new Date(eventDate1 + "T10:00:00Z"); //To avoid timezone issues
  var weekday = ["Su", "Mo", "Tu", "We", "Th", "Fr", "Sa"];
  var weekday2 = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];
  var day1 = weekday[date1.getDay()];
  var day2 = weekday2[date1.getDay()];
  if ($(".timerangebox, .tabletyperange").is(":visible") && $("#daterangeboxtxtSpa").val() != moment(dt, "DD/MM/YYYY").format("YYYY-MM-DD")) {
    $(".timerangebox, .tabletyperange").hide();
  }
  // $("#datepick_modal_Spa_desktop span").html(day2 + ', ' + moment(dt, 'DD/MM/YYYY').format('DD/MM/YY'));
  // Akshay | 12-08-22
  $("#datepick_modal_Spa_desktop span").html(new Date(start).toLocaleDateString(ICL, { weekday: "short", day: "2-digit", month: "2-digit", year: "2-digit" }));
  $("#daterangeboxtxtSpa").val(moment(dt, "DD/MM/YYYY").format("YYYY-MM-DD"));

  $("#datepick_modal_Spa_mobile span").html(day2 + ". " + moment(dt, "DD/MM/YYYY").format("DD MMM YYYY"));
  $("#Spa_hotel_datebox").modal("hide");
  // $(".bookingInfo .date").html(day2 + ', ' + moment(dt, 'DD/MM/YYYY').format('DD MMM YYYY'));
  // Akshay | 04-08-22
  $(".bookingInfo .date").html(new Date(start).toLocaleDateString(ICL, { weekday: "short", year: "numeric", month: "short", day: "numeric" }));
}

$(".addRoomsDropdownModalSpa").on("click", "div.adult_minus_modal", function (e) {
  e.stopPropagation();
  e.preventDefault();
  parent_table_id = $(this).closest("table").attr("id");
  val = parseInt(
    $("#" + parent_table_id)
      .find("span.count_adult")
      .text()
  );
  if (val > 1) {
    updateAdultChildCountOnModal(false, true);
    $("#totrm").val(string_total_count);
    $("#" + parent_table_id)
      .find("span.count_adult")
      .text(val - 1);
  }
  if (val - 1 > 1) {
    $("#" + parent_table_id)
      .find(".adult_minus_modal")
      .removeClass("disabled");
    $("#" + parent_table_id)
      .find(".adult_plus_modal")
      .removeClass("disabled"); // CHG 3761 by Anubhav Gogoi
  } else {
    $("#" + parent_table_id)
      .find(".adult_minus_modal")
      .addClass("disabled");
  }
});

$(document).on("click", ".addRoomsDropdownModalSpa div.adult_plus_modal", function (e) {
  e.stopPropagation();
  e.preventDefault();
  parent_table_id = $(this).closest("table").attr("id");
  val = parseInt(
    $("#" + parent_table_id)
      .find("span.count_adult")
      .text()
  );
  if (val < 4) {
    updateAdultChildCountOnModal(true);
    $("#" + parent_table_id)
      .find("span.count_adult")
      .text(val + 1);
  }
  if (val + 1 > 1) {
    $("#" + parent_table_id)
      .find(".adult_minus_modal")
      .removeClass("disabled");
  } else {
    $("#" + parent_table_id)
      .find(".adult_minus_modal")
      .addClass("disabled");
  }

  if (val + 1 >= 4) {
    $("#" + parent_table_id)
      .find(".adult_plus_modal")
      .addClass("disabled"); // CHG 3761 by Anubhav Gogoi
  }
});

var tcount_adult = 0;
function updateAdultChildCountOnModal(adultPlus = null, adultMinus = null, childPlus = null, childMinus = null) {
  $(tableClass + " table").each(function () {
    tcount_adult = parseInt($(this).find(".count_adult.adult-ct-check1").text());
  });
  if (adultPlus) tcount_adult = tcount_adult + 1;
  if (adultMinus) tcount_adult = tcount_adult - 1;

  if (tcount_adult > 1) {
    adult_text = "Persons";
  } else {
    adult_text = "Person";
  }
  if (tcount_adult > 1) {
    $(this).parents(".addRoomsDropdownModalSpa").find(".adult_minus_modal").removeClass("disabled");
    string_total_count = tcount_adult + " " + adult_text + "";
  } else {
    $(this).parents(".addRoomsDropdownModalSpa").find(".adult_minus_modal").addClass("disabled");
    string_total_count = tcount_adult + " " + adult_text + "";
  }

  $(".count_adult.adult-ct-check1").text(tcount_adult);
  $("#spa_persons").val(tcount_adult);
  $("span.count-adult-child-spa").text(string_total_count);
}

$(".dropdown_toggle_desktop_spa_guest").on("click", function () {
  $(".minusSign").addClass("disabled");

  if (tcount_adult == 0) {
    $("span.count-adult-child-spa").text("1 person");
    $("#spa_persons").val(1);
  }
});

$(".dropdown_toggle_mobile_spa_guests").on("click", function () {
  $(".minusSign").addClass("disabled");

  if (tcount_adult == 0) {
    $("span.count-adult-child-spa").text("1 person");
    $("#spa_persons").val(1);
  }
});

$(".done_btn_spa .primary-btn").click(function () {
  $("#guest_dropdown_Spa").modal("hide");
});
$(".done_btn_treatment .primary-btn").click(function () {
  $("#select_treatment_dropdown_Spa").modal("hide");
});
$(".datefield-mobile").click(function () {
  $("#Spa_hotel_datebox").modal("hide");
});

$(".select_treatment_input").on("click", function () {
  if ($("#hotelid").val().length === 0 || $("#hotelid").val() == "all") {
    $(".hoteldropdownModalSpa").addClass("errorbox");
  } else {
    $(".select_treatment_mobile").removeClass("d-none");
  }
});

$(document).on("click", ".treatment_value", function () {
  var selectedValue = $(this).text();
  var treatmentCategoryId = $(this).data("treatmentcategoryid");
  $("#treatmentCategoryId").val(treatmentCategoryId);
  $(".treatment-spa").text(selectedValue);
  $("#CategoryName").val(selectedValue);
  $("#select_treatment_dropdown_Spa").modal("hide");
});

$(".getAltAttreatment").click(function () {
  justify = $(this).closest(".nav-item[alt]").attr("alt");
  $("#pills-Spa .modal-title-Spa").text(justify);
});

$(".getAlthotels").click(function () {
  justify = $(this).closest(".nav-item[alt]").attr("alt");
  $("#pills-Spa .modal-title-Spa").text(justify);
});

$(".getAltPersons").click(function () {
  justify = $(this).closest(".nav-item[alt]").attr("alt");
  $("#pills-Spa .modal-title-Spa").text(justify);
});

$(".bookingSpabtn").on("click", function () {
  if (bookingvldcheck($(this))) {
    var hotelID = $("#hotelid").val();
    var hotelname = $("#hotel_name").val() ? $("#hotel_name").val() : "All Hotels";
    var treatmentCategoryId = $("#treatmentCategoryId").val();
    var categoryName = $("#CategoryName").val();
    var date = $("#daterangeboxtxtSpa").val();
    var persons = $("#spa_persons").val();

    $(".bookingSpabtn .button-loader").css("display", "block");
    var baseUrl = window.location.protocol + "//" + window.location.host;
    window.location.href =
      baseUrl +
      "/" +
      ICL +
      "/wellness/spa-treatment/?id=" +
      hotelID +
      "&hotel=" +
      hotelname +
      "&category=" +
      treatmentCategoryId +
      "&categoryName=" +
      categoryName +
      "&date=" +
      date +
      "&pax=" +
      persons;
  }
});

function bookingvldcheck(formid) {
  var list_mobile = $("#ul_modal_treatment_mobile");
  var error = 0;
  /****/
  if ($("#hotelid").val() === "" || $("#treatmentCategoryId").val() === "" || $("#daterangeboxtxtSpa").val() == "" || $("#spa_persons").val() === "") {
    error = error + 1;
  }

  if ($("#hotelid").val() === "") {
    $(".hoteldropdownModalSpa").addClass("errorbox");
  }
  if ($("#treatmentCategoryId").val() === "") {
    $(".selectTreatment").addClass("errorbox");
  }
  if ($("#daterangeboxtxtSpa").val() == "") {
    $(".Spadatebox").addClass("errorbox");
  }
  if ($("#spa_persons").val() === "") {
    $(".spaGuests").addClass("errorbox");
  }

  if (error > 0) return false;
  else return true;
}

function fetchTreatmentCategoriesMobile(ibuidValue) {
  var list_mobile = $("#ul_modal_treatment_mobile");
  $.ajax({
    url: "/wp-json/booking/spa/v1/category",
    type: "GET",
    data: { IBUID: ibuidValue }, // Pass IBUID as data
    beforeSend: function () {
      // Disable the link before the request is sent
      $(".select_treatment_input").addClass("disabled");
    },
    success: function (data) {
      list_mobile.empty();

      if (data.data.ResponseData && data.data.ResponseData.length > 0) {
        for (var i = 0; i < data.data.ResponseData.length; i++) {
          // Check if it's the start of a new group (every three elements)
          // Create a new list item with the treatmentValue class
          var listItem = $('<li class="treatmentValue"></li>');

          // Create a span with the treatment_value class and set its attributes
          var span = $(
            '<span class="treatment_value" data-treatmentcategoryid=' +
              data.data.ResponseData[i]["TreatmentCategoryId"] +
              ">" +
              data.data.ResponseData[i]["CategoryName"] +
              "</span>"
          );

          // Append the span to the list item
          listItem.append(span);

          // Append the list item to the main list
          list_mobile.append(listItem);
        }
      } else {
        // If no data is present, return an empty list or handle it as needed
        list_mobile.html('<li> <span class="treatment_value">No data available</span></li>');
      }
    },
    error: function (xhr, status, error) {
      // Handle the error response here
    },
    complete: function () {
      // Disable the link before the request is sent
      $(".select_treatment_input").removeClass("disabled");
    },
  });
}
