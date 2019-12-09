$(document).ready(function() {
    var arrResearch = [];
    var arrAir = [];
    $(document).on('click', '#showResearchParamsBtn', function () {
        var buttonId = $(this).attr("data-id");
        var url = $(location).attr('origin') + '/airQualityApp/dataResearchParams/' + buttonId;
        researchParams(url, buttonId, arrResearch);
    });

    $(document).on('click', '#showQuantityAirBtn', function () {
        var buttonId = $(this).attr("data-id");
        var url = $(location).attr('origin') + '/airQualityApp/dataAirQuality/' + buttonId;
        qualityAir(url, buttonId, arrAir);
    });
});
