/*==============================================================*/
// Contact Form  JS
/*==============================================================*/
(function ($) {
    "use strict"; // Start of use strict
    $("#contactForm")
        .validator()
        .on("submit", function (event) {
            if (event.isDefaultPrevented()) {
                // handle the invalid form...
                formError();
                submitMSG(false, "Did you fill in the form properly?");
            } else {
                // everything looks good!
                event.preventDefault();
                submitForm();
            }
        });

    function submitForm() {
        // Initiate Variables With Form Content
        var name = $("#name").val();
        var email = $("#email").val();
        var phone_number = $("#phone_number").val();
        var program = $("#program").val();
        var subjects = $("#subjects").val();
        var message = $("#message").val();

        $.ajax({
            type: "POST",
            url: "/inquiries",
            data: {
                _token: $('meta[name="csrf-token"]').attr("content"),
                name: name,
                email: email,
                phone_number: phone_number,
                program: program,
                subjects: subjects,
                message: message,
            },
            success: function (response) {
                console.log("response", response);
                if (response.success) {
                    formSuccess();
                } else {
                    formError();
                    submitMSG(false, response.error);
                }
            },
            error: function (response) {
                formError();
                submitMSG(false, "An error occurred. Please try again.");
            },
        });
    }

    function formSuccess() {
        $("#contactForm")[0].reset();
        submitMSG(true, "Message Submitted!");
    }

    function formError() {
        $("#contactForm")
            .removeClass()
            .addClass("shake animated")
            .one(
                "webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend",
                function () {
                    $(this).removeClass();
                }
            );
    }

    function submitMSG(valid, msg) {
        var msgClasses = valid
            ? "h4 tada animated text-success"
            : "h4 text-danger";
        $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
    }
})(jQuery); // End of use strict
