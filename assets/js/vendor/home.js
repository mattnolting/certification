// $(document).ready(function($) {
//     var t, n;
//     $(".map-slides, .handle").css("opacity", 0);
//     $("#preload-image").waitForImages(function () {
//         clearInterval(n);
//         $("#spinner").fadeOut(600).remove();
//         return $(".handle, .map-slides").animate({ opacity: 1 }, 3e3, "linear");
//     });

//     t = !1;
//     n = setInterval(function () {
//         if (t) {
//             $(".map-slides, .handle").remove();
//             return clearInterval(n);
//         }
//     }, 100);
//     return $("#spinner a").live("click", function (n) {
//         n.preventDefault();
//         t = !0;
//         $("#spinner").fadeOut().remove();
//         $("#prev-arrow, #next-arrow").remove();
//         return $("#staticImage").fadeIn("slow");
//     });
// });
