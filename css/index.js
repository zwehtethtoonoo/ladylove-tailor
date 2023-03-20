// (function() {
//     var calculateHeight;
  
//     calculateHeight = function() {
//       var $content, contentHeight, finalHeight, windowHeight;
//       $content = $('#overlay-content');
//       contentHeight = parseInt($content.height()) + parseInt($content.css('margin-top')) + parseInt($content.css('margin-bottom'));
//       windowHeight = $(window).height();
//       finalHeight = windowHeight > contentHeight ? windowHeight : contentHeight;
//       return finalHeight;
//     };
  
//     $(document).ready(function() {
//       $(window).resize(function() {
//         if ($(window).height() < 560 && $(window).width() > 600) {
//           $('#overlay').addClass('short');
//         } else {
//           $('#overlay').removeClass('short');
//         }
//         return $('#overlay-background').height(calculateHeight());
//       });
//       $(window).trigger('resize');
      
//       // open
//       $('#popup-trigger').click(function() {
//         return $('#overlay').addClass('open');
//         // return $('#overlay').addClass('open').find('.signup-form input:first').select();
//       });
      
//       // close
//       return $('#overlay-background,#overlay-close').click(function() {
//         return $('#overlay').removeClass('open');
//       });
//     });
  
//   }).call(this);


  function showPopup(){
    var overlay = document.getElementById('overlay');
    var overlayContent = document.getElementById('overlay-content');
    var overlayBackground = document.getElementById('overlay-background');
        overlay.style.display = "block";
        overlayContent.style.display = "block";
        overlayBackground.style.display = "block";
  };
  function closePopup() {
    var overlay = document.getElementById('overlay');
    var overlayContent = document.getElementById('overlay-content');
    var overlayBackground = document.getElementById('overlay-background');
            overlay.style.display = "none";
            overlayContent.style.display = "none";
            overlayBackground.style.display = "none";
          };
