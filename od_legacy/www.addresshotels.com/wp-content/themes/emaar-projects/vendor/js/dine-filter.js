var cur = 0;
var next = -1;
var curr_exp = 'all';
var curr_hotel = 'all';
var totalPosts;
var visiblePosts = 0;
$(document).ready(function () {
   //hide select hotel filter
   // console.log(hotel);
   //  if(hotel != 'global'){
   //     console.log("inside hide consition")
   //    $(".filterbox .hotel_select").hide();
   // }

   // reset filter to default value
   if (hotel == 'global') {
      $(".hotel_select").prop('selectedIndex', 0);
   }
   $(".exp_filter").prop('selectedIndex', 0);
   $(".cuisine_filter").prop('selectedIndex', 0);

   $('.restaurant-card').hide();
   loadMore();
   $('.selectpicker').selectpicker('render')
});

// load cards
function loadMore() {
   var selector = ('.restaurant-card');
    expSection = $('.exp_filter').selectpicker('val');
   if (hotel == 'global') {
      hotel_name = $('.hotel_select').selectpicker('val');
   } else {
      hotel_name = hotel;
   }
   cuisineSection = $('.cuisine_filter').selectpicker('val');

   // console.log(hotel + "---------------------" + expSection + "-------------------" + cuisineSection)

   if (expSection !== 'all') {
      selector = selector + '.exp-' + `${expSection}`;
      // console.log(selector);
   }
   if (hotel_name !== 'all') {
      selector = selector + '[data-hotel=' + hotel_name + "]";
      // console.log(selector);
   }
   if (cuisineSection !== 'all') {
      selector = selector + '[data-cuisine=' + cuisineSection + "]";
      // console.log(selector);
   }
   if ($(selector).length > 6)
      $(selector).slice(cur, cur + next).show();
   else
      $(selector).show();
   cur++;
}

// on scroll 
/* $(window).scroll(function () {
   if ($(window).scrollTop() + $(window).height() > $(document).height() - 2500) {
      loadMore();
   }
}); */

let isLoading = false;

/* jQuery(window).on('scroll', function() {
  if (isLoading) return;
    console.log('ScrollTop '+ jQuery(window).scrollTop());
    console.log('Inner Height '+ jQuery(window).innerHeight());
    console.log('Actual Height ' + jQuery(document).height())
    console.log('Total Scroll '+ jQuery(window).scrollTop() + jQuery(window).innerHeight() +2800 );  
  if (jQuery(window).scrollTop() + jQuery(window).innerHeight() +2800 >= jQuery(document).height()) {
    isLoading = true;
    loadMore();
    setTimeout(() => { isLoading = false; }, 1000);
  }
}); */


$(document).ready(function(){
   $('.restaurant-card').show();
   /* let isLoading = false;
   if(window.matchMedia("(max-width: 767px)").matches){
      // The viewport is less than 768 pixels wide
      //alert("This is a mobile device.");
      jQuery(window).on('scroll', function() {      
         if (isLoading) return;
            console.log('ScrollTop '+ jQuery(window).scrollTop());
            console.log('Inner Height '+ jQuery(window).innerHeight());  
         if (jQuery(window).scrollTop() + jQuery(window).innerHeight() +4000 >= jQuery(document).height()) {
            isLoading = true;
            loadMore();
            setTimeout(() => { isLoading = false; }, 1000);
         }
      });
   } else{
      //alert("This is a desktop device.");
      jQuery(window).on('scroll', function() {      
         if (isLoading) return;
            console.log('ScrollTop '+ jQuery(window).scrollTop());
            console.log('Inner Height '+ jQuery(window).innerHeight());  
         if (jQuery(window).scrollTop() + jQuery(window).innerHeight() +2800 >= jQuery(document).height()) {
            isLoading = true;
            loadMore();
            setTimeout(() => { isLoading = false; }, 1000);
         }
      });
   } */
});

// event on filter selection
$('.selectpicker.exp_filter, .selectpicker.hotel_select, .selectpicker.cuisine_filter').on('changed.bs.select', function () {
   //console.log("on change detected-------------------------")
   cur = 0;
   next = -1;
   $('.restaurant-card').hide();
   loadMore();
});
