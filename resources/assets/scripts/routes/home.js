export default {
  init() {
    // JavaScript to be fired on the home page
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
    /* eslint-disable */
    let jssor_1_slider_init = function() {

         var jssor_1_options = {
           $AutoPlay: 1,
           $Idle: 0,
           $SlideDuration: 5000,
           $SlideEasing: $Jease$.$Linear,
           $PauseOnHover: 0,
           $SlideWidth: 300,
           $Align: 0
         };

         var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

         /*#region responsive code begin*/
         /*remove responsive code if you don't want the slider scales while window resizing*/
         function ScaleSlider() {
             var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
             if (refSize) {
                 refSize = Math.min(refSize, 1200);
                 jssor_1_slider.$ScaleWidth(refSize);
             }
             else {
                 window.setTimeout(ScaleSlider, 30);
             }
         }
         ScaleSlider();
         $Jssor$.$AddEvent(window, "load", ScaleSlider);
         $Jssor$.$AddEvent(window, "resize", ScaleSlider);
         $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
         /*#endregion responsive code end*/
     };
     jssor_1_slider_init();
    /* eslint-enable */
  },
};
