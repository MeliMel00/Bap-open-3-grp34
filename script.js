$( ".burger-open" ).click(function() {
    $(".close").css("display","block")
  });
$( ".close-div" ).click(function() {
    $(".close").css("display","none")
});

$( ".histoire" ).click(function() {
    if($(".sub-title").is(":hidden")){
        $(".sub-title").css("display","block")
    }
   else{
        $(".sub-title").css("display","none")
   }
});