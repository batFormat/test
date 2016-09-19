'use strict';
var point;
var request;
$(document).ready(function() {
    $('#street').hide();
    $('#street_result').hide();
    $('.blockquote').hide();
    // Get all city list
    $('#city').ready(function() {
        $.ajax({
            type: 'GET',
            url: '/city/all',
            success: function(html) {
                $('#selectCity').html(html);
            }
        });
    });
    // Select city by id, get all the street
    $('#selectCity').on('change', function() {
        var cityID = $(this).val();
        if (cityID) {
            $.ajax({
                type: 'POST',
                url: '/city/street',
                data: 'cityId=' + cityID,
                success: function(html) {
                    $('#selectStreet').html(html);
                },
                beforeSend: function() {
                    $('#street_result').show();
                },
                complete: function() {
                    $('#street').show();
                    $('#street_result').hide();
                },
            });
        }
    });
    /**
     * Send a request for yandex geocoder via ajax
     */
    $('#selectStreet').on('change', function() {
        // get selected element
        var optionSelected = $("option:selected", this);
        // value selected
        var valueSelected = optionSelected[0]['value']
            // label selected == street
        var street = optionSelected[0]['label'];
        if (valueSelected == 1) {
            var city = 'Вологда';
        } else if (valueSelected == 2) {
            var city = 'Череповец';
        } else if (valueSelected == 3) {
            var city = 'Великий-устюг';
        }
        if (street !== 'Выберите улицу' || city) {
            var address = city + ' ' + street;
            // response show in yandex map
            $.ajax({
                url: 'https://geocode-maps.yandex.ru/1.x/?format=json&geocode=' + address,
                dataType: 'json',
                complete: function(data) {
                    var geoObject = data.responseJSON.response['GeoObjectCollection']['featureMember']['0']['GeoObject'];
                    point = data.responseJSON.response['GeoObjectCollection']['featureMember']['0']['GeoObject']['Point']['pos'];
                    point = point.split(' ')
                    var myPlacemark = new ymaps.Placemark([point[1], point[0]], {
                        hintContent: geoObject.name,
                        balloonContent: geoObject.name + '<br>' + geoObject.description
                    });
                    var result = ymaps.geoQuery(myPlacemark).addToMap(myMap).applyBoundsToMap(myMap, {
                        checkZoomRange: true
                    });
                },
            });
        }
    });
    // Get city description 
    $('.city-link').click(function(res) {
        var cityId = $(this).attr("id");
        if (cityId) {
            $.ajax({
                type: 'POST',
                url: '/city/info',
                data: 'cityId=' + cityId,
                success: function(html) {
                    $('.blockquote').show();
                    $('#city_info_result').html(html);
                },
                beforeSend: function() {
                    $('#city_info_result').html('<img src="/public/images/ajax-loader.gif">');
                }
            });
        }
    });
});