/// <reference path="../../content/bower_components/jquery/js/jquery.min.js" />

function validateOTP(otp) {
    var val = false;
    $.ajax({
        type: "POST",
        url: "/biz/UploadResume.aspx/ValidateOTP",
        contentType: "application/json",
        data: '{"userOTP":"' + otp + '"}',
        dataType: "json",
        async: false,
        success: function (data) {
            if (data.d == "1") {
                val = true;
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {

            var obj = jQuery.parseJSON(xhr.responseText);
            alert(obj.Message);
        },

        complete: function () {
        }


    });
    return val;

}


$("#btn_verify").click(function () {
    var mobile = $("#txtphone").val();
    if (mobile.length < 10 || mobile.length > 10) {
        alert("Invalid Mobile No.!")
        return false;
    }
    //$("#showButionpop").show();
    //$("#showButionpop").modal();
    $("#dv_otp").show();
    var btnText = $(this).text();
    if (btnText == "Get OTP") {
        genrateOTP(mobile);
        $("#hdnmobile").val(mobile);
        $("#btn_verify").text("Verify");
    }
    else {
        var otp = $("#tbotp").val();
        if ($("#tbotp").val().length == 0) {
            alert("Enter Otp");
        }
        else if (validateOTP(otp)) {
           /* alert("Mobile No. verified");*/
      
            /*$("#divphone").hide();*/
            $("#dv_otp").hide();
            $("#btn_verify").hide();
        }
        else {
            alert("Please Enter Correct Otp");
 
        }

    }
})
function genrateOTP(mobileNo) {

    $.ajax({
        type: "POST",
        url: "/biz/UploadResume.aspx/genrateOTP",
        contentType: "application/json",
        data: '{"mobileNo":"' + mobileNo + '"}',
        dataType: "json",
        success: function (data) {
            /*  alert("ok");*/
        },
        error: function (xhr, ajaxOptions, thrownError) {

            var obj = jQuery.parseJSON(xhr.responseText);
            alert(obj.Message);
        },

        complete: function () {

        }


    });

}