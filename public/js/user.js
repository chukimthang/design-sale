$(function(){
  //Sự kiện khi chuột di chuyển vào menu tự hiện
  $(".dropdown").mouseenter(function() {
    $(".dropdown-menu").css("display", "block");
  });

  //Sự kiện di chuột ra khỏi li menu tự đóng
  $(".dropdown").mouseleave(function() {
    $(".dropdown-menu").css("display", "none");
  });

  //Sự kiện kich chuột vào show giỏ hàng kich lần nữa đóng
  $(".beta-select").on("click", function() {
    if($(".beta-dropdown").css("display") == "none") {   
      $(".beta-dropdown").animate({height: 'toggle', width: 'toggle'},
        {duration: 500}).show();
    } else {
      $(".beta-dropdown").fadeOut("slow");
    }
  });

  //Sự kiện khi chuột di chuyển vào chuyển màu chữ
  $(".single-item").mouseenter(function() {
    $(this).contents().find(".single-item-title").css("color", "#0066ff");
  });

  //Sự kiện di chuột ra khỏi tự động chuyển màu chữ
  $(".single-item").mouseleave(function() {
    $(this).contents().find(".single-item-title").css("color", "#000");
  });

  // Sự kiện chuột kich vào radio thanh toán thẻ
  $("#payment_method_cheque").on("click", function() {
    if("#payment_method_bacs:selected") {
      $(".payment_method_bacs_model").hide();
      $(".payment_method_cheque_model").show();
    }
  });

  // Sự kiện kich vào radio thanh toán tại nhà
  $("#payment_method_bacs").on("click", function() {
    if("#payment_method_cheque:selected") {
      $(".payment_method_bacs_model").show();
      $(".payment_method_cheque_model").hide();
    }
  });

  // Sự kiện thay đổi khi ấn của info
  $(".order-customer").on("click", function() {
    $(".info-customer").removeClass("active-info");
    $(".span-customer").hide();
    $(".order-customer").addClass("active-info");
    $(".order-detail-customer").show();
  });

  // Sự kiện thay đổi khi ấn của info
  $(".info-customer").on("click", function() {
    $(".order-customer").removeClass("active-info");
    $(".order-detail-customer").hide();
    $(".info-customer").addClass("active-info");
    $(".span-customer").show();
  });
});
