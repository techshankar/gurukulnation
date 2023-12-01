

$(document).ready(function () {
  

 
    $(".course-section").append('<div class="modal fade" id="myModal" role="dialog">' +
        '<div class="modal-dialog">' +

        '<div class="modal-content">' +
        /*'<div class="modal-header">' +*/
        '<button type="button" class="close" data-dismiss="modal" id="btn_close"  style="display: none;"><img src="/Biz/img/cancel2.png" ></button>' +
        '<h4 class="modal-title">Tutorial</h4>' +
        /*'</div>' +*/
        '<div class="modal-body">' +
        '<div class="embed-responsive embed-responsive-16by9"><iframe id="videoFrame" class="embed-responsive-item" style="border: none;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe></div>' +
        '</div>' +
        //'<div class="modal-footer">' +
        //'<button type="button" class="btn btn-default cls_class"  data-dismiss="modal">Close</button>' +
        '</div></div></div>');
    var src = $(".preview-span_nolead").attr("data");
    //if (localStorage.getItem(src) != "1") {
    //    $("#videoFrame").removeAttr("src");
    //    $("#videoFrame").attr("src", src);
    //    $("#myModal").modal({
    //        backdrop: 'static', keyboard: false
    //    });
    //}
    localStorage.setItem(src, "1")
    $(".preview-span_nolead").click(function () {
        $("#btn_close").show();
        $("#videoFrame").removeAttr("src");
        var src2 = $(this).attr("data");
        $("#videoFrame").attr("src", src2);
        $("#myModal").modal({
            backdrop: 'static', keyboard: false
        });
    });
});