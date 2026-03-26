var allRoomsData;
var staticDataURL;
var genericImageURL = "/wp-content/uploads/2020/10/generic-rns-image.png";
var staticDataURL = "https://static.travelclick.com";
const roomsAPIEndpoint = "/wp-json/reservation/v1/hotels/rooms?hotelId=" + hotel_id;
var hotel_name;
var bedfilters;
var roomfilters;
var viewfilters;
function showloadingRooms(roomNumber, showCount) {
  var commoncard_div = document.getElementById("common_card");
  var parentContainer = document.getElementById("misha_posts_wrap");
  for (roomNumber; roomNumber < showCount; roomNumber++) {
    var clonedDiv = commoncard_div.cloneNode(true);
    clonedDiv.id = "room_" + roomNumber;
    clonedDiv.classList.remove("d-none");
    clonedDiv.classList.add("whitebox");

    var carouselControls1 = clonedDiv.querySelector("#carouselControls1");
    var carouselControls2 = clonedDiv.querySelector("#carouselControls2");
    var galleryitem1 = clonedDiv.querySelector("#galleryitem1");
    var galleryitem2 = clonedDiv.querySelector("#galleryitem2");
    var commoncardrow = clonedDiv.querySelector(".common-card-row");
    if (carouselControls1 && carouselControls2) {
      carouselControls1.id = "carouselControls-" + (roomNumber + 1);
      carouselControls2.id = "carouselControls-" + (roomNumber + 1) + "-z";
    }
    if (galleryitem1) {
      galleryitem1.name = "galleryroom_" + (roomNumber + 1);
    }
    if (galleryitem2) {
      galleryitem2.id = "galleryroom_" + (roomNumber + 1);
    }
    if (commoncardrow) {
      commoncardrow.classList.add("whitebox3");
      commoncardrow.classList.add("rnsbox");
    }
    var virtualtourItem = document.getElementById("iframe-container4");
    if (virtualtourItem) {
        virtualtourItem.id = "iframe-container_" + (roomNumber + 1);
    }
    parentContainer.appendChild(clonedDiv);
  }
}

document.addEventListener("DOMContentLoaded", function () {
  var roomNumber = 0;
  var showCount = 5;
  fetch(roomsAPIEndpoint + "&languageCode=" + ICL)
    .then((response) => {
      if (!response.ok) {
        throw new Error("Network response was not ok");
      }
      return response.json();
    })
    .then((response) => {
      if (response["success"]) {
        if (!response.data ||
          !response.data.ResponseData ||
          Object.keys(response.data.ResponseData).length === 0
        ) {
          document.getElementById("noRoomsFoundInResponse").classList.remove("d-none");
        } else if (
          !response.data.ResponseData.GuestRooms ||
          response.data.ResponseData.GuestRooms.length === 0
        ) {
          document.getElementById("noRoomsFoundInResponse").classList.remove("d-none");
        }
        else {
          allRoomsData = response["data"]["ResponseData"];
          allRoomsData["GuestRooms"] = allRoomsData["GuestRooms"].sort(GetSortOrder("SortOrder"));
          allRoomsData["GuestRooms"] = allRoomsData["GuestRooms"].filter(function (room) {
            return room["IsActive"] == true;
          });
          var showCount = allRoomsData["GuestRooms"].length < 5 ? allRoomsData["GuestRooms"].length : 5;

          if (allRoomsData["GuestRooms"].length == 0) {
            document.getElementById("noRoomsFoundInResponse").classList.remove("d-none");
            return;
          }
          const hasRoom = allRoomsData.GuestRooms.some((room) => room.RoomTypeName.includes("room"));
          const hasResidance = allRoomsData.GuestRooms.some((room) => room.RoomTypeName.includes("Residence"));
          const hasSuite = allRoomsData.GuestRooms.some((room) => room.RoomTypeName.includes("Suite"));
          const hasVilla = allRoomsData.GuestRooms.some((room) => room.RoomTypeName.includes("Villa"));

          !hasResidance ? (document.querySelector('.roomfilter[value="Residence"]').parentElement.style.display = "none") : "";
          !hasSuite
            ? (document.querySelector('.roomfilter:is([value="SUITE"], [value="suite"], [value="套房"], [value="Suite"], [value="جناح"])').style.display = "none")
            : "";
          const villaFilter = document.querySelector('.roomfilter:is([value="Villa"])');
          if (villaFilter) {
            !hasVilla ? (villaFilter.parentElement.style.display = "none") : "";
          }

          if (ICL == "en") {
            showloadingRooms(roomNumber, showCount);
            showRooms(allRoomsData);
            filtersloading(allRoomsData);
          } else {
            if (ICL != "en") {
              fetch(roomsAPIEndpoint + "&languageCode=en")
                .then((response) => {
                  if (!response.ok) {
                    throw new Error("Network response was not ok");
                  }
                  return response.json();
                })
                .then((response) => {
                  if (response["success"]) {
                    if (!response.data ||
                      !response.data.ResponseData ||
                      Object.keys(response.data.ResponseData).length === 0
                    ) {
                      document.getElementById("noRoomsFoundInResponse").classList.remove("d-none");
                    } else if (
                      !response.data.ResponseData.GuestRooms ||
                      response.data.ResponseData.GuestRooms.length === 0
                    ) {
                      document.getElementById("noRoomsFoundInResponse").classList.remove("d-none");
                    }
                    else {
                      allRoomsData_en = response["data"]["ResponseData"];
                      allRoomsData_en["GuestRooms"] = allRoomsData_en["GuestRooms"].sort(GetSortOrder("SortOrder"));
                      allRoomsData_en["GuestRooms"] = allRoomsData_en["GuestRooms"].filter(function (room) {
                        return room["IsActive"] == true;
                      });
                      if (allRoomsData_en["GuestRooms"].length == 0) {
                        document.getElementById("noRoomsFoundInResponse").classList.remove("d-none");
                        return;
                      }

                      for (i = 0; i <= allRoomsData.GuestRooms.length - 1; i++) {
                        if (allRoomsData.GuestRooms[i].Id == allRoomsData_en.GuestRooms[i].Id) {
                          allRoomsData.GuestRooms[i].RoomSlug = allRoomsData_en.GuestRooms[i].RoomTypeName;
                        }
                      }
                      showloadingRooms(roomNumber, showCount);

                      showRooms(allRoomsData);
                      filtersloading(allRoomsData);
                    }
                  }
                  else {
                    document.getElementById("api-error").classList.remove("d-none");

                  }
                })
                .catch(() => {
                  document.getElementById("api-error").classList.remove("d-none");
                });
            }
          }



        }
      } else {
        document.getElementById("api-error").classList.remove("d-none");
      }
    })
    .catch(() => {
      document.getElementById("api-error").classList.remove("d-none");
    });
  // showloadingRooms(roomNumber, showCount);
});

// ----------------------------Loading filters
function filtersloading(allRoomsData) {
  console.log(allRoomsData);
  const allAmenitiesWithAb = allRoomsData["GuestRooms"]
    .map((room) => room.Amenities.map((amenity) => amenity.AmenityName))
    .reduce((accumulator, currentAmenities) => {
      const amenitiesWithAb = currentAmenities.filter((amenity) => /view|فيو|Vue|View|海景|园景|منظراس|景观|blick|景|Вид|إطلالة/i.test(amenity));
      return accumulator.concat(amenitiesWithAb);
    }, []);
  const RoomViewList = [...new Set(allAmenitiesWithAb)];
  createFilterElement(RoomViewList, ".roomViewFilterList", "bedfil", "roomviewfilter");

  const amenitiesWithTypeAorB = allRoomsData["GuestRooms"]
    .map((room) => {
      const amenitiesA = room.RoomFeatures.filter((amenity) => amenity.Type === "Beds");

      if (amenitiesA.length > 0) {
        return amenitiesA.map((amenity) => amenity.AmenityName);
      } else {
        const amenitiesB = room.RoomFeatures.find((amenity) => amenity.Type === "Size");
        if (amenitiesB) {
          return amenitiesB.AmenityName;
        }
        return null;


      }
    })
    .filter((amenityNames) => amenityNames !== null);
  const BedTypeList = [...new Set(amenitiesWithTypeAorB.flat())];
  createFilterElement(BedTypeList, ".bedTypefilterList", "bedfil", "bedfilter");
  const checkboxes = document.querySelectorAll('input[type="checkbox"]');
  checkboxes.forEach((checkbox) => {
    checkbox.addEventListener("change", (event) => {
      const label = event.target.closest("label.filter_label");
      if (event.target.checked) {
        label.classList.add("active");
      } else {
        label.classList.remove("active");
      }
    });
  });
  bedfilters = document.querySelectorAll(".bedfilter");
  roomfilters = document.querySelectorAll(".roomfilter");
  viewfilters = document.querySelectorAll(".roomviewfilter");
  bedfilters.forEach((filter) => {
    filter.addEventListener("change", applyFilters);
  });
  viewfilters.forEach((filter) => {
    filter.addEventListener("change", applyFilters);
  });
  roomfilters.forEach((filter) => {
    filter.addEventListener("change", applyFilters);
  });
  $(".btn-light").click(function () {
    var textElement = document.getElementById("filterText");
    var newText = textElement.innerHTML == "Hide Filter" ? "Show Filter" : "Hide Filter";
    textElement.innerHTML = newText;
  });

  if (screen.width > 768) {
    $("#openFilter").click();
  }

}
// ----------------------------End Loading filters

function getAmenities(Alist) {
  reAr = Alist.Amenities.map((amenity) => amenity.AmenityName).filter((amenityName) =>
    /view|Vue|View|海景|园景|منظراس|景观|blick|景|فيو|Вид|إطلالة/i.test(amenityName)
  );
  return reAr.join(", ");
}
function getFilteredValues(filters, category) {
  return filters.filter((filter) => filter.classList.contains(category) && filter.checked).map((filter) => filter.value);
}
function createFilterElement(TypeList, ParentSpan, CommonComponent, filterClass) {

  var bedfilter = document.querySelector(ParentSpan);
  var cbedfil = document.getElementById(CommonComponent);
  TypeList.forEach((element) => {
    var clonedlb = cbedfil.cloneNode(true);
    clonedlb.id = "";
    clonedlb.classList.remove("d-none");
    clonedlb.querySelector("#bedtypelabel").innerHTML = element;
    clonedlb.querySelector("#clonebed").value = element;
    clonedlb.querySelector("#clonebed").classList.add(filterClass);
    bedfilter.appendChild(clonedlb);
  });


}
function arraySearchAmenityName(nameKey, myArray) {
  for (var i = 0; i < myArray.length; i++) {
    if (myArray[i]["AmenityName"] == nameKey) {
      return myArray[i];
    }
  }
}
function arraySearchType(nameKey, myArray) {
  for (var i = 0; i < myArray.length; i++) {
    if (myArray[i]["Type"] == nameKey) {
      return myArray[i];
    }
  }
}
function arraySearchTypeDual(nameKey, myArray) {
  var text = "";
  for (var i = 0; i < myArray.length; i++) {
    if (myArray[i]["Type"] == nameKey && myArray[i]["Quantity"] != 0) {
      if (text != "") text += ", ";
      text += myArray[i]["Quantity"] + " " + myArray[i]["AmenityName"];
    }
  }
  return text;
}
var modalTemplate = $('#figmaModal');//360
function renderRoomsData(roomNumber, showCount, allRoomsData) {
  for (roomNumber; roomNumber < showCount; roomNumber++) {
    var roomData = allRoomsData["GuestRooms"][roomNumber];
    var iframeUrl = roomData['VirtualTourLink']; //360
    var roomId = roomData["Id"];
    var roomFeatures = roomData["RoomFeatures"];
    var roomMedia = roomData["Media"];
    var roomOccupancy = arraySearchType("Occupancy", roomFeatures);
    var roomBeds = arraySearchTypeDual("Beds", roomFeatures);
    var roomSize = arraySearchType("Size", roomFeatures);
    var room = $(".whitebox3.rnsbox:eq(" + roomNumber + ")");
    var roomdiv = $("#room_" + roomNumber);
    var roomCard = $(".whitebox3.rnsbox:eq(" + roomNumber + ")");
    var tourIcon = roomCard.find("#virtual-tour-room"); // 360 icon wrapper
    room.attr("style", "position:relative;z-index:" + (allRoomsData["GuestRooms"].length - roomNumber) + ";");

    room.find(".room-info-link").attr("data-roomNumber", roomNumber);
    room.find(".room-info-link").attr("data-roomId", roomId);
    if (ICL != "en") {
      room.find(".room-info-link").attr("data-title", roomData["RoomSlug"]);
      room.find(".room-info-link").attr("href", room.find(".room-info-link").attr("href") + encodeURIComponent(convertTitleToSlug(roomData["RoomSlug"])));
      roomTypeStr = roomData["RoomSlug"].includes("Room")
        ? "Room"
        : roomData["RoomSlug"].includes("Suite")
          ? "Suite"
          : roomData["RoomSlug"].includes("Residence")
            ? "Residence"
            : roomData["RoomSlug"].includes("Villa")
              ? "Villa"
              : "";
    } else {
      room.find(".room-info-link").attr("data-title", roomData["RoomTypeName"]);
      room.find(".room-info-link").attr("href", room.find(".room-info-link").attr("href") + encodeURIComponent(convertTitleToSlug(roomData["RoomTypeName"])));
      roomTypeStr = roomData["RoomTypeName"].includes("Room")
        ? "Room"
        : roomData["RoomTypeName"].includes("Suite")
          ? "Suite"
          : roomData["RoomTypeName"].includes("Residence")
            ? "Residence"
            : roomData["RoomTypeName"].includes("Villa")
              ? "Villa"
              : "";
    }

    roomdiv.attr("data-roomType", roomTypeStr);
    roomdiv.attr("data-bedType", roomBeds);
    roomdiv.attr("data-roomView", getAmenities(roomData));
    room.find(".room-title").html(roomData["RoomTypeName"]);

    room.find(".room-description").html(roomData["Description"]);

    $(".room-description strong").addClass("font-semi-bold");

    room.find(".room-book-link").attr({
      "data-roomtypecode": roomData["Id"],
    });
    if (roomOccupancy) room.find(".room-occupancy").html('<i class="fal fa-user-alt pr-2"></i>' + roomOccupancy["Quantity"] + " " + peoplelg);
    if (roomBeds) room.find(".room-bed").html('<i class="fal fa-bed pr-2"></i>' + roomBeds);

    if (roomSize)
      room
        .find(".room-size")
        .html('<i class="fal fa-ruler-combined pr-2"></i><span class="dir-ltr">' + roomSize["Quantity"] + " " + roomSize["AmenityName"] + "</span>");

    $carouselIndicators = room.find(".carousel-indicators");
    $carouselItems = room.find(".carousel-inner");
    $roomGallery = $("#galleryroom_" + (roomNumber + 1));
    $galleryCarouselIndicators = $roomGallery.find(".carousel-indicators");
    $galleryCarouselItems = $roomGallery.find(".carousel-inner");
// 360 

if (iframeUrl) {
        // Clone modal
        var modalClone = modalTemplate.clone();
        var modalId = "figmaModal_" + (roomNumber + 1);
        var iframeId = "iframe-container_" + (roomNumber + 1);

        modalClone.attr("id", modalId);
        modalClone.find("#iframe-container").attr("id", iframeId);

        // Insert iframe
        modalClone.find("#" + iframeId).html(
            '<iframe src="' + iframeUrl + '" frameborder="0" allowfullscreen allow="xr-spatial-tracking" style="width:100%; height:100%;"></iframe>'
        );

        // Append modal in DOM
        $("body").append(modalClone);

        // Attach this modal to room’s trigger button
        $(".whitebox3.rnsbox:eq(" + roomNumber + ") .figma-logo-overlay").attr("data-target", "#" + modalId);
    }
 else {
      
      tourIcon.remove();
    }
// end 360
    roomMedia.forEach(function (imageObject, index) {
      if (roomMedia.length != 1) {
        $carouselIndicators.append(
          '<li data-target="#carouselControls-' +
          (roomNumber + 1) +
          '" data-slide-to="' +
          index +
          '" ' +
          (index == 0 ? 'class="room-image-indicator active"' : 'class="room-image-indicator"') +
          "></li>"
        );
      }

      $carouselItems.append(
        "<div " +
        (index == 0 ? 'class="carousel-item active"' : 'class="carousel-item"') +
        '><img class="rnsimg room-image" src="' +
        staticDataURL +
        imageObject["Source"] +
        '" alt="Room image"></div>'
      );

      $galleryCarouselIndicators.append(
        '<li data-target="#carouselControls-' +
        (roomNumber + 1) +
        '-z" data-slide-to="' +
        index +
        '" ' +
        (index == 0 ? 'class="room-image-indicator active"' : 'class="room-image-indicator"') +
        "></li>"
      );

      $galleryCarouselItems.append(
        "<div " +
        (index == 0 ? 'class="carousel-item active"' : 'class="carousel-item"') +
        '><img src="' +
        staticDataURL +
        imageObject["Source"] +
        '" alt="Room Image" class="modal-content room-image"></div>'
      );
    });
  }
  $("#view-more-rooms").attr("data-count", showCount);
  $(".countbox.showing").html(showCount);
  $(".rnsbox.room-loading").removeClass("room-loading");
}

function showRooms(allRoomsData) {
  var totalRooms = allRoomsData["GuestRooms"].length;
  var showCount = totalRooms >= 5 ? 5 : totalRooms;
  $("#view-more-rooms").attr("data-total", totalRooms);
  $(".countbox.total").html(totalRooms);
  $(".countbox.showing").html(showCount);
  if (totalRooms < 5) {
    $(".common-card-shadow").slice(totalRooms, 5).remove();
  }
  renderRoomsData(0, showCount, allRoomsData);
  if (totalRooms > showCount) {
    $(".view-more-button").removeClass("hide");
    $(".view-all").removeClass("invisible");
  }
  $(".rooms-count").removeClass("invisible");
}

function GetSortOrder(prop) {
  return function (a, b) {
    if (a[prop] > b[prop]) {
      return 1;
    } else if (a[prop] < b[prop]) {
      return -1;
    }
    return 0;
  };
}

function loadMoreRooms(showCount, totalRooms) {
  if (totalRooms - showCount <= 5) {
    var newShowCount = totalRooms;
    $("#view-more-rooms").remove();
  } else {
    var newShowCount = showCount + 5;
    $("#view-more-rooms").attr("data-count", newShowCount);
  }
  showloadingRooms(showCount, newShowCount);
  renderRoomsData(showCount, newShowCount, allRoomsData);
   initializeCarouselSwipe();
  $("#view-more-rooms").removeAttr("disabled");
  $("#view-more-rooms").find(".button-loader").css("display", "none");
}

$(document).on("click", "#view-more-rooms", function () {
  $(this).attr("disabled", "true");
  $(this).find(".button-loader").css("display", "inline-block");
  var showCount = parseInt($("#view-more-rooms").attr("data-count"));
  var totalRooms = parseInt($("#view-more-rooms").attr("data-total"));
  loadMoreRooms(showCount, totalRooms);
});

function loadAllRooms(showCount, totalRooms) {
  showloadingRooms(showCount, totalRooms);
  renderRoomsData(showCount, totalRooms, allRoomsData);
  $("#view-all-rooms").find(".button-loader").css("display", "none");
  $("#view-more-rooms").remove();
  $("#view-all-rooms").css("opacity", "0.5");
}

$(document).on("click", "#view-all-rooms", function () {
  if ($(this).attr("disabled")) return;
  $(this).attr("disabled", "true");
  $(this).find(".button-loader").css("display", "inline-block");
  var showCount = parseInt($("#view-more-rooms").attr("data-count"));
  var totalRooms = parseInt($("#view-more-rooms").attr("data-total"));
  loadAllRooms(showCount, totalRooms);
});

function convertTitleToSlug(Text) {
  Text = Text.toLowerCase()
    .replace("-", " ")
    .replace(/\s\s+/g, " ")
    .replace(/ /g, "-")
    .replace(/[^\w-]+/g, "");

  return Text.replace("--", "-");
}

$(document).on("click", ".showgal", function (event) {
  currentmodalgal = document.getElementById(this.name);
  totalitems = $("#" + this.name).find(".carousel-item").length;
  currentmodalgal.style.display = "block";
  $("#" + this.name)
    .find(".num")
    .html("1 Of " + totalitems + "");
});

$(document).on("click", ".closegal", function (event) {
  $(".gallerymodal").hide();
});

const clearBtn = document.getElementById("clearFilter");
clearBtn.addEventListener("click", () => {
  const activeLabels = document.querySelectorAll(".active");
  activeLabels.forEach((label) => {
    label.click();
  });
});

function applyFilters() {
  if (!document.getElementById("view-all-rooms").disabled) {
    document.getElementById("view-all-rooms").click();
  }
  const items = document.querySelectorAll(".whitebox");

  const bedFilters = Array.from(bedfilters)
    .filter((filter) => filter.classList.contains("bedfilter") && filter.checked)
    .map((filter) => filter.value);
  const roomFilters = Array.from(roomfilters)
    .filter((filter) => filter.classList.contains("roomfilter") && filter.checked)
    .map((filter) => filter.value);
  const viewFilters = Array.from(viewfilters)
    .filter((filter) => filter.classList.contains("roomviewfilter") && filter.checked)
    .map((filter) => filter.value);

  var i = 0;
  items.forEach((item) => {
    const itemRoomType = item.getAttribute("data-roomType");
    const itemBedType = item.getAttribute("data-bedType");
    const itemViewType = item.getAttribute("data-roomView");
    let shouldShow = true;
    if (roomFilters.length > 0) {
      if (roomFilters[0] == "Room" && roomFilters.length == 1) {
        if (itemRoomType.includes("Suite") || itemRoomType.includes("Residence")) {
          shouldShow = false;
        }
      } else {
        shouldShow = shouldShow && roomFilters.some((filter) => itemRoomType.includes(filter));
      }
    }

    if (bedFilters.length > 0) {
      shouldShow = shouldShow && bedFilters.some((filter) => itemBedType.includes(filter));
    }

    if (viewFilters.length > 0) {
      shouldShow = shouldShow && itemViewType.includes(viewFilters);
    }

    if (shouldShow) {
      item.classList.remove("d-none");
      i++;
    } else {
      item.classList.add("d-none");
    }
  });

  if (i == 0) {
    $("#noRoomsFound").removeClass("d-none");
    const filterToggle = document.querySelector(".filter-toggle");
    filterToggle.style.borderBottom = "1px solid #19282d29";
  } else {
    $("#noRoomsFound").addClass("d-none");
    const filterToggle = document.querySelector(".filter-toggle");
    filterToggle.style.borderBottom = "";
  }
  $(".countbox.showing").html(document.querySelectorAll(".whitebox:not(.d-none)").length);
}
$(document).ready(function () {
    $(".carousel").carousel({ interval: false });
    initializeCarouselSwipe();
});

function initializeCarouselSwipe() {
    $(document).off("touchstart touchmove touchend", ".carousel");

    $(document).on("touchstart", ".carousel", function (e) {
        this.touchStartX = e.originalEvent.touches[0].pageX;
    });

    $(document).on("touchmove", ".carousel", function (e) {
        this.touchEndX = e.originalEvent.touches[0].pageX;
    });

    $(document).on("touchend", ".carousel", function () {
        var touchStartX = this.touchStartX || 0;
        var touchEndX = this.touchEndX || 0;
        var minSwipeDistance = 50;
        var horizontalDistance = touchEndX - touchStartX;

        if (Math.abs(horizontalDistance) > minSwipeDistance) {
            $(this).carousel(horizontalDistance < 0 ? "next" : "prev");
        }
    });
}
