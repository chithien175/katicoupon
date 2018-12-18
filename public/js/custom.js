$(document).ready(function() {
    // Advanced Filter - Init Select2
    $("#merchant-select").select2({
    });

    // On Click Submit Filter
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
});