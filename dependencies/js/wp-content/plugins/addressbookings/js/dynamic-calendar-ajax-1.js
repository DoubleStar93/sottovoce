// fetch price according to date
///jQuery(document).ready( function(){
function call_ajax_method(hotelId, adult_count = 1, child_count = 0, no_of_rooms, code_type, code_value, start_date, end_date, rate_plan_code, rate_plan_type, cookieinfo = null, roomIndex = null) {
  //   $('#daterangepickerfeildup').click(function(){
  return new Promise((resolve, reject) => {

    if (!start_date) start_date = moment(new Date()).format("YYYY-MM-DD");
    if (!end_date) end_date = moment().add(2, 'months').endOf("month").format("YYYY-MM-DD");
    if (!adult_count) adult_count = 1;
    if (!child_count) child_count = 0;
    if (!code_type || !code_value) { code_type = ""; code_value = ""; }

    if (hotelId == null || hotelId == "all" || hotelId == "" || hotelId == " ") {
      return 0;
    }
    else {

      $.ajax({
        type: "POST",
        // nonce: dynamic_ajax_call_obj.dynamic_calendar_price_nonce,
        url: dynamic_ajax_call_obj.ajax_url,
        //dataType:'json',
        data: {
          action: 'dynamic_calendar_price_fetch',
          dataType: 'json',
          hotel_id: hotelId,
          start_date: start_date,
          end_date: end_date,
          adult_count: adult_count,
          child_count: child_count,
          code_type: code_type,
          code_value: code_value,
          method_call: 1,
          rate_plan_code: rate_plan_code,
          rate_plan_type: rate_plan_type,
          no_of_rooms: no_of_rooms,
          roomIndex: roomIndex,
          cookieinfo: cookieinfo
        },
        success: function (data) {

          var result = $.parseJSON(data);
          if (result == null) {
            result = {};
          }
          resolve(result);
        },
        error: function (jqXHR, textStatus, errorThrown) {
          //console.log(jqXHR + " " + textStatus + " " + errorThrown);
          reject(jqXHR + " " + textStatus + " " + errorThrown)
          return 0;
        }
      });

    }
  })
}
