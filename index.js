// $(function(){
//     $('.message').hide();
// });

$(document).ready(function() {
    $(".message").hide();

    $("#contact").click(function() {
        $(".message").show();
    })

    $("#send").click(function() {

        var name = $("#name").val();
        var email = $("#email").val();
        var message = $("#message").val();

        if (name == '' || email == '' || message == '') {
            alert("Please fill out all fields")
            return false;
        } else {
            $.post("contact_form.php", {
                from_name: name,
                from_email: email,
                email_message: message
            }, function(data) {
                if (data) {
                    $("#data").append(data);
                    console.log(data);
                    // $(".message").hide();
                    // $("#form")[0].reset();
                    return false;
                }
            })
        }

    })
})