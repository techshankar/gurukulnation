/// <reference path="../../../content/bower_components/jquery/js/jquery.min.js" />

$(document).ready(function () {

    if ($('#hdn_uservalid').val().length == 0) {

        $("#divratstar").show();
    }
    else {
        $("#divyn").show();

    }

    $(".cls_rating").click(function () {
        var rating = $(this).val();
        insertRating(rating);

    })
    function insertRating(rating) {

        $.ajax({
            type: "POST",
            url: "userhelpdet.aspx/insertRating",
            contentType: "application/json",
            data: '{"rating":"' + rating + '"}',
            dataType: "json",
            success: function (data) {
                //Swal.fire({
                //    toast: true,
                //    icon: 'success',
                //    title: 'Thanks for your Feedback!',
                //    animation: true,
                //    position: 'center',
                //    showConfirmButton: false,
                //    timer: 2000,
                //    timerProgressBar: true,
                //    didOpen: (toast) => {
                //        toast.addEventListener('mouseenter', Swal.stopTimer)
                //        toast.addEventListener('mouseleave', Swal.resumeTimer)
                //    }
                //});
                $("#divyn").hide();
                $("#dv_feedback").show();

            },

            error: function (xhr, ajaxOptions, thrownError) {

                var obj = jQuery.parseJSON(xhr.responseText);
                alert(obj.Message);
            },
            complete: function () {



            }
        });

    }

    $(".classyes").click(function () {

        $("#divratstar").show();
        $("#divyn").hide();
    })
    $(".classno").click(function () {
        $("#btticket").show();
        $("#divyn").hide();
    })
})