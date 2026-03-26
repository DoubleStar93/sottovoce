jQuery(document).on("click", ".btn-reserve-unique", function (e) {
    // e.preventDefault();
    var $this = jQuery(this);

    let href = $this.attr("href") || "";
    let params = new URLSearchParams(href.split('?')[1]); 
    let hotel = params.get('hotel') || "address-downtown";

    let formattedHotel = hotel
        .split('-')
        .map(word => word.charAt(0).toUpperCase() + word.slice(1))
        .join(' ');

    // console.log(formattedHotel); 
    // alert ("Test");
    window.dataLayer = window.dataLayer || [];
    window.dataLayer.push({
        event: "reservation_cta_click",
        reservation: {
            type: "spa",
            brand: window.RESERVATION_BRAND || "Address",
            hotel_name: formattedHotel,
            hotel_location: "Dubai, UAE",
            venue_name: $this.attr("data-name") || "",
            cta_text: $this.text().trim(),
            cta_position: $this.attr("data-position") || "section",
            destination_url: href,
            provider: "Book4Time",
            language: document.documentElement.lang || "en",
            site_scope: window.SITE_SCOPE || "property",
            page_url: window.location.href,
            page_title: document.title
        }
    });
});
