// fancy Box
Fancybox.bind('[data-fancybox="gallery"]', {
  // Custom options for the first gallery
});

// Popup Auto
$(window).ready(function () {
  setTimeout(function () {
    $("#popupModal").modal("show");
  }, 3000);
});
