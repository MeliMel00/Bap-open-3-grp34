$( ".burger-open" ).click(function() {
    $( ".close" ).animate({
        opacity: 1,
        display: "block",
        height: "toggle",
        width: "50%"
      }, "slow", function() {
      });
  });

$( ".close-div" ).click(function() {
   $( ".close" ).animate({
        opacity: 0,
        display: "none",
        height: "toggle",
        width:"0"
      }, "slow", function() {
      });
});

$( ".conférence" ).click(function() {
    if($(".sub-title").is(":hidden")){
        $( ".sub-title" ).animate({
            display: "block",
            height: "toggle",
            opacity: 1,
          }, "slow", function() {
          });
    }
   else{
    $( ".sub-title" ).animate({
        display: "none",
        height: "toggle",
        opacity: 0,
      }, "slow", function() {
      });
   }
});