// $(function(){
//     $('.message').hide();
// });

$(document).ready(function() {
    $(".message").hide();

    $("#contact").click(function() {
        $(".message").show();
    })

    $("#send").click(function() {
        $(".message").hide();
    })
})