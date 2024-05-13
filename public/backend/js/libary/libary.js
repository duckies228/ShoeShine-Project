(function ($) {
    var HT = {};
    var document = $(document)

    HT.select2 = () => {
        $('.setupSelect2').select2();
    }
    document.ready(function () {
        HT.select2();
    })
})(jQuery);