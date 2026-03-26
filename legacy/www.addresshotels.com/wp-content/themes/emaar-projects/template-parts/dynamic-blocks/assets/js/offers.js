var cur;
var next;
var curr_exp = 'all';
var curr_hotel = 'all';
var totalPosts;
var visiblePosts = 0;
$('.offer-card').hide();
$(document).ready(function () {
  console.log($('.offer-card:visible').length);
  setTimeout(function () {
    $(".loading").addClass("d-none");
    $(".container-fluid").removeClass("d-none");
  }, 1000);
  $('.offer-card').show();
  // reset filter to default value
  categorynames = sessionStorage.getItem("categoryname");
  hotelnames = sessionStorage.getItem("hotelname");
  flag = sessionStorage.getItem("flag");

  if (!flag && !categorynames) {

    if (hotel == 'global') {
      $(".hotel_select").prop('selectedIndex', 0);
    }
    //get url parameters
    var uri = window.location.href;
    var url = new URL(uri);
    var expParam = url.searchParams.get("experience");
    var hotelParam = url.searchParams.get("hotel");
    var countryParam = url.searchParams.get("country");
    var cityParam = url.searchParams.get("city"); 

    if (expParam != null) {
      if (ICL == 'en') {
        if (expParam.indexOf('-ar') != -1) { // if string contains -
          expParam = expParam.substring(0, expParam.indexOf("-"));
        }
      } else {
        if (expParam.indexOf('-ar') == -1) {
          expParam = expParam + "-" + ICL;
        }
      }
      $('.exp_filter').selectpicker('val', expParam);
    } else {
      $(".exp_filter").prop('selectedIndex', 0);
    }
    
    if (countryParam != null) {
      var $countryoption = $('.hotel_country option').filter(function() {
        return $(this).data('slug') === countryParam;
      });
      if ($countryoption.length) {
        var optionValue = $countryoption.val();
        $('.hotel_country').selectpicker('val', optionValue);
      }
    } else {
      $(".hotel_country").prop('selectedIndex', 0);
      
    }

    if (cityParam != null) {
      $(".hotel_city").removeClass("disabled").next('.dropdown-toggle').removeClass("disabled");
      $(".hotel_city").removeAttr("disabled");
      var $cityoption = $('.hotel_city option').filter(function() {
        return $(this).data('slug') === cityParam;
      });
      if ($cityoption.length) {
        var optionValue = $cityoption.val();
        $('.hotel_city').selectpicker('val', optionValue);
      }
    } else {
      $(".hotel_city").prop('selectedIndex', 0);
    }
    if (hotelParam != null) {
      if (ICL == 'en') {
        if (hotelParam.indexOf('-ar') != -1) { // if string contains -
          hotelParam = hotelParam.substring(0, hotelParam.indexOf("-"));
        }
      } else {
        if (hotelParam.indexOf('-ar') == -1) {
          hotelParam = hotelParam + "-" + ICL;
        }
      }


      hotelParam = hotelParam.toLowerCase().replace(/[^a-z0-9]+/g, '-');
      $(".hotel_select").removeClass("disabled").next('.dropdown-toggle').removeClass("disabled");
      $('.hotel_select').selectpicker('val', hotelParam);
    } else {
      $(".hotel_select").prop('selectedIndex', 0);
    }

    // check if filter is set if not set it to default
    expSection = $('.exp_filter').selectpicker('val');
    hotelSection = $('.hotel_select').selectpicker('val');
    hotelCountry = $('.hotel_country').selectpicker('val');
    hotelCity = $('.hotel_city').selectpicker('val');
    if (expSection == null)
      $(".exp_filter").prop('selectedIndex', 0);
    if (hotelSection == null)
      $(".hotel_select").prop('selectedIndex', 0);
      if (hotelCountry == null)
      $(".hotel_country").prop('selectedIndex', 0);
    if (hotelCity == null)
      $(".hotel_city").prop('selectedIndex', 0);
    cur = 0;
    next = 4;
    $('.offer-card').hide();
    loadMore();
    $('.selectpicker').selectpicker('render');
  }
  else {
    if (categorynames) {
      sessionStorage.removeItem("categoryname");
    }
    if (hotelnames) {
      sessionStorage.removeItem("hotelname");

    }

    cur = 0;
    next = 4;
    $('.offer-card').hide();
    loadMore();

  }
});


// display count of visible post
function countPosts(total, visible) {
  $('#countbox').text(visible + ' ' + countbox_of + ' ' + total);
}

// load cards
function loadMore() {
  var selector = ('.offer-card');

  if (hotel === "global") {
      hotelCountry = $('.hotel_country').selectpicker('val');
      hotelCity = $('.hotel_city').selectpicker('val');
  }else{
    hotelCountry = hotelCity = 'all';
  }

  expSection = $('.exp_filter').selectpicker('val');

  if (hotel == 'global') {
    hotel_name = $('.hotel_select').selectpicker('val');
  } else {
    if (ICL == 'en') {
      hotel_name = hotel;
    } else {
      hotel_name = hotel + '-' + ICL;
    }
  }

  if (hotelCountry !== 'all') {
    selector = selector + '[data-country*=' + hotelCountry + "]";
  }
console.log(selector);
console.log($(selector).length);
  if (hotelCity !== 'all') {  
    selector = selector + '[data-city*=' + hotelCity + "]";  
  }

  if (expSection !== 'all') {
    if (expSection == 'ramadan-dine') {
      selector = selector + '[data-ramadanDine=' + expSection + "]";
    }
    else {
      selector = selector + '[data-experience*=' + expSection + "]";
    }

  }
  if (hotel_name !== 'all') {
    selector = selector + `.${hotel_name}`
  }
  if ($(selector).length > 4) {
    $(selector).slice(cur, cur + next).show();
  } else {
    $(selector).show();
  }
  if (cur <= $(selector).length)
    cur++;
  totalPosts = $(selector).length;
  // Filter .offer-card elements based on their initial visibility
  var visiblePosts = $('.offer-card').filter(function () {
    return $(this).css('display') !== 'none';
  }).length;

  // Update the count
  countPosts(totalPosts, visiblePosts);
  if(totalPosts == "0" && visiblePosts == "0"){
    $(".no-offer-available-error-msg").removeClass('d-none');
  }else{
    $(".no-offer-available-error-msg").addClass('d-none');
  }
}

// on scroll
$(window).scroll(function () {
  if ($(window).scrollTop() + $(window).height() > $(document).height() - 1700) {
    loadMore();
  }
});

// event on filter selection
$('.selectpicker.exp_filter, .selectpicker.hotel_select').on('changed.bs.select', function () {
  cur = 0;
  next = 4;
  $('.offer-card').hide();
  loadMore();
  flag = sessionStorage.getItem("flag");

  if (flag) {
    sessionStorage.removeItem("flag");


  }
});
$('.selectpicker.hotel_country, .selectpicker.hotel_city, .selectpicker.hotel_select').on('show.bs.select', function () {
  var dropdownMenu = $(this).siblings('.dropdown-menu');
  if (dropdownMenu.length > 0) {
      var visibleOptions = $(this).find('option').filter(function () {
          return $(this).css('display') !== 'none';
      });
      var optionHeight = 30; 
      var maxHeight = (visibleOptions.length + 1) * optionHeight;
      maxHeight = Math.min(maxHeight, 200);
      dropdownMenu.css({
          'max-height': maxHeight + 'px',
          'min-height': maxHeight + 'px'
      });
  } 
});
// Handle change in country dropdown
$('.selectpicker.hotel_country').on('changed.bs.select', function () {
  var selectedCountry = $(this).val();  
  var citySelect = $('.selectpicker.hotel_city'); 
  var hotelSelect = $('.selectpicker.hotel_select'); 
  citySelect.val('all').selectpicker('refresh');  
  hotelSelect.val('all').selectpicker('refresh');
    if (selectedCountry === 'all') {
      citySelect.prop('disabled', true);
      hotelSelect.prop('disabled', true);
    } else {
          citySelect.prop('disabled', false);
          hotelSelect.prop('disabled', false);

            citySelect.find('option').each(function() {
                var cityCountryCode = $(this).data('country');
                if (cityCountryCode !== selectedCountry && cityCountryCode !== 'all') {
                    $(this).hide();  
                } else {
                    $(this).show(); 
                }
            });

            hotelSelect.find('option').each(function() {
                var hotelCountryCode = $(this).data('country');
                if (hotelCountryCode !== selectedCountry && hotelCountryCode !== 'all') {
                    $(this).hide(); 
                } else {
                    $(this).show(); 
                }
            });
        }
        citySelect.selectpicker('refresh');
        hotelSelect.selectpicker('refresh');
        cur = 0;
        next = 4;
        $('.offer-card').hide();
        loadMore();
        flag = sessionStorage.getItem("flag");

        if (flag) {
          sessionStorage.removeItem("flag");
      
        }
        
    });

// Handle change in city dropdown
$('.selectpicker.hotel_city').on('changed.bs.select', function () {
  var selectedCity = $(this).val();  
  var hotelSelect = $('.selectpicker.hotel_select');
  var selectedCountry = $('.selectpicker.hotel_country').val();
  hotelSelect.val('all').selectpicker('refresh');
        hotelSelect.find('option').each(function() {
          var hotelCityCode = $(this).data('city');
          var hotelCountryCode = $(this).data('country');
          if (selectedCity === 'all') {
            if (hotelCountryCode === selectedCountry || hotelCountryCode === 'all') {
                $(this).show();
            } else {
                $(this).hide();
            }
        }
        else {
            if (hotelCityCode === selectedCity || hotelCountryCode === 'all') {
                $(this).show(); 
            } else {
                $(this).hide(); 
            }
        }
        });
        hotelSelect.selectpicker('refresh');
        cur = 0;
        next = 4;
        $('.offer-card').hide();
        loadMore();
        flag = sessionStorage.getItem("flag");

        if (flag) {
          sessionStorage.removeItem("flag");
      
        }
});

if ($(window).width() < 1024) {
  $('.multiple__location').click(function () {
    $(this).find('.multipleLocationsTooltip').toggleClass('d-flex flex-column')
  })
}

$(document).on("click", ".offer-terms a", function () {
  $(this).parents('.offer-card').find('.common-card-row').hide();
  $(this).parents('.offer-card').find('.offerT_and_C').show();
  $(this).parents('.common-card').addClass('border16');
  let parents = ($(this).parentsUntil(':eq(5)'));
  var offset = $(this).parents('.offer-card').offset().top;
  $(parents).animate({
    scrollTop: offset - 150
  });

})
$(document).on("click", ".offerbox-tnc-close", function () {
  $(this).parents('.offer-card').find('.common-card-row').show();
  $(this).parents('.common-card').removeClass('border16');
  $(this).parents('.offer-card').find('.offerT_and_C').hide();

})
