$( ".burger-open" ).click(function() {
    $( ".close" ).animate({
        opacity: 1,
        display: "block",
        height: "toggle"
      }, "slow", function() {
      });
  });

$( ".close-div" ).click(function() {
   $( ".close" ).animate({
        opacity: 0,
        display: "none",
        height: "toggle"
      }, "slow", function() {
      });
});

$( ".conférence" ).click(function() {
    if($(".sub-title").is(":hidden")){
        $( ".sub-title" ).animate({
            display: "block",
            height: "toggle"
          }, "slow", function() {
          });
    }
   else{
    $( ".sub-title" ).animate({
        display: "none",
        height: "toggle"
      }, "slow", function() {
      });
   }
});