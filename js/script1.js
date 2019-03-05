function headingRepeat(){
$(document).ready(function(){
  $(".heading-linux").addClass("bounceInLeft");
  $("#two-buttons-first").addClass("bounceInRight");
  $("#two-buttons-second").addClass("bounceInLeft");
});
}
var mobmenu=1;
function mobilemenu(){
        if (mobmenu===1)
        {
            $(".menu-mobile-content").css("visibility","visible");
            mobmenu=2;
         }
      else if (mobmenu===2)
      {
              $(".menu-mobile-content").css("visibility","hidden");
              mobmenu=1;

      }
      }



if(screen.width>=800){

  $(document).ready(function(){
    headingRepeat();
  });

}
else if(screen.width<=800){

  $(document).ready(function(){
    headingRepeat();
    $(".menu-mobile-btn").click(function(){
      mobilemenu();
      });

    });

}
