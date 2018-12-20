$(document).ready(function() {
    // SET: Advanced Filter - Init Select2
    $("#merchant-select").select2({});

    // CHECK: On Click Submit Filter
    $("#advanced-filter-submit").on("click", function(event){
        event.preventDefault();
        var merchantSelect = $("#merchant-select option:selected").val();
        var merchantLink = $("#merchant-select option:selected").data('merchant-link');
        // Nếu chọn merchant sẽ redirect
        // Nếu không chọn merchant sẽ báo lỗi
        if(merchantSelect != 'false'){
            window.location.href = merchantLink;
        }else{
            toastr.options = {
                "closeButton": true,
                "debug": false,
                "newestOnTop": false,
                "progressBar": true,
                "positionClass": "toast-bottom-center",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
            toastr["error"]("Vui lòng chọn nhà cung cấp", "Lỗi");
        }
    });

    // CHECK: On Click Aff Link
    $(".click-aff-link").on("click", function(event){
        event.preventDefault();
        var affLink = $(this).find("a").data("aff-link");
        window.open(affLink, '_blank');
    });

    // CHECK: On Click Get Coupon
    $(".click-get-coupon").on("click", function(event){
        event.preventDefault();
        var affLink = $(this).find("a").data("aff-link");
        var redirectLink = $(this).find("a").data("redirect-link");
        window.location.replace(affLink);
        window.open(redirectLink, '_blank');
        // $("#couponModal").modal();
    });

    // CHECK: On Click Copy Coupon
    $("#couponModal .btn-copy-coupon").on('click', function(event){
        event.preventDefault();
        var couponCode = $("#couponModal .code-text");
        couponCode.select();
        document.execCommand("copy");
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-bottom-center",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
        toastr["success"]("Mã đã được sao chép vào khay nhớ tạm", "Thành công");

    });

    // SET: Tooltip bootstrap
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
});