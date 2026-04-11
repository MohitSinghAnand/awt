jQuery(document).ready(function ($) {
    $("#bookSection").on("click", function (event) {
        $("#Modalpopup").css("display", "block");
    });
    var contents = $("#contents");
    $("#packageView").on("click", function (event) {
        var target = $("#package_div_section");
        if (target.length) {
            event.preventDefault();
            $("html, body").stop().animate(
                {
                    scrollTop: target.offset().top,
                },
                1000
            );
        }
    });
     $("#viewTourPack").on("click", function (event) {
        var target = $("#gt_all_packages");
        if (target.length) {
            event.preventDefault();
            $("html, body").stop().animate(
                {
                    scrollTop: target.offset().top,
                },
                1000
            );
        }
    });
    $(".readmoreBtn button").click(function () {
        $("#readmoreLayer").slideToggle(500);
        $(".readmoreBtn").hide();
    });
    $(".readlessBTN button").click(function () {
        $("#readmoreLayer").slideToggle(500);
        $(".readmoreBtn").show();
    });
    $(".gt-viewmore-package button").click(function () {
        $("#gt-more-packages").toggle();
        $(".gt-viewmore-package").hide();
    });
    $(".gt-viewless-package button").click(function () {
        $("#gt-more-packages").toggle();
        $(".gt-viewmore-package").show();
    });
    $("#gt-booking").on("click", function (event) {
        $("#Modalpopup").css("display", "block");
    });
     $("#ctaenqury").on("click", function (event) {
        $("#Modalpopup").css("display", "block");
    });

    //ajax for read more packages
    var loadNumber = 0;
    $("#more_package").on("click",function(){ // When btn is pressed.
       // var category =this.className;
       // var cat = category.split('split'); 
        loadNumber++;
            $.ajax({  
            url:  gt_localize.ajaxurl,
            type:'POST',  
            data: { 
                'tag_id':"98",
                'ppp':"8",
                'offset':8*loadNumber,
                'action':'gt_packagelistajax_by_category',
              },   
            success: function (data) {               
                //jQuery(".gt-all-package-container").append(data);
                var $data = $(data);
                if($data.length){
                    console.log(loadNumber);
                    if(loadNumber<3){
                        $(".gt-all-package-container").append($data);
                    }
                    else{
                        window.location.href = "/packages/?location_name=Europe&location_id=8786&start=&end=&date=10%2F01%2F2024+12%3A00+am-11%2F01%2F2024+11%3A59+pm&price_range=0%3B500&taxonomy%5Bst_tour_type%5D=";
                    }
                } else{                    
                    $('#more_package').css('display','none');
                    //$('#less_package').css('display','block');
                    loadNumber=0;
                }                
              },
          });
    
       });
      // $("#less_package").click(function(){
       // $(".gt-all-package-container").empty();
       // $('#more_package').css('display','block');
       // $('#less_package').css('display','none');
      //});
        
});
//script for onscroll popup 
// need to convert to jquery later
/*document.addEventListener("DOMContentLoaded", () => {
window.onscroll = function() {getScrollPercent()};
function getScrollPercent() {  
    var popup_expire = 0; 
    var popup_form = document.getElementById("Modalpopup");
    var h = document.documentElement, 
        b = document.body,
        st = 'scrollTop',
        sh = 'scrollHeight';
    var percent = (h[st]||b[st]) / ((h[sh]||b[sh]) - h.clientHeight) * 100; 
var percentroundoff = Math.round(percent);
if (percentroundoff==0){
localStorage.setItem(popup_expire, 0 );
}

var nextPopup = localStorage.getItem(popup_expire);

if(nextPopup ==0){
if(percentroundoff==50){
   popup_form.style.display = "block";    
   document.body.classList.add("modal-open");
   localStorage.setItem(popup_expire, 1 );
}
}
}
});*/