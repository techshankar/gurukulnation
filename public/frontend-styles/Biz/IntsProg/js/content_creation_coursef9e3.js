/// <reference path="../../../content/bower_components/jquery/js/jquery.min.js" />

$(document).ready(function () {
    $(document.body).on('click', '#btn_submit_book', function (e) {
        if ($('#txtname').val().length == 0) {
            alert("Name should not be empty");
            return false;
        }
        else if ($('#txtemail').val().length == 0) {
            alert("Email should not be empty");
            return false;
        }
        else if ($('#txtphone').val().length == 0) {
            alert("Mobile no. should not be empty");
            return false;
        }
        else if ($('#txtdate').val().length == 0) {
            alert(" Date should not be empty");
            return false;
        }
        else if ($('#ddlcc').val().length == 0) {
            alert(" Field should not be empty");
            return false;
        }
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        if (!emailReg.test($("#txtemail").val())) {
            alert("Please enter valid Email id");
            return false;
        }

        var mobile = $("#txtphone").val();
        if (mobile.length < 10 || mobile.length > 10) {
            alert("Invalid Mobile no.!");
            return false;
        }

        var option_question = new Array();
        var option_answer = new Array();
        var option_ques = ""
        var option_ans = ""
        $('.lblques').each(function () {
            option_ques = $(this).text();
            option_question.push(option_ques);
        });
        $('.submitform').each(function () {
            option_ans = $(this).val();
            option_answer.push(option_ans);
        });

        $.ajax({
            type: "POST",
            url: "/Biz/Intsprog/CCMDemoSession.aspx/Insertlead",
            contentType: "application/json",
            data: JSON.stringify({ option_question: option_question, option_answer: option_answer }),
            dataType: "json",
            success: function (data) {
                /*alert("Record Inserted Successfully!")*/
                window.location = "https://www.instamojo.com/@BizgurukulPayments/l6896cd0969eb478ea05e9d01aaf494cb/";
            },
            error: function (xhr, ajaxOptions, thrownError) {

                var obj = jQuery.parseJSON(xhr.responseText);
                alert(obj.Message);
            },
            complete: function () {


            }
        });
    });
});