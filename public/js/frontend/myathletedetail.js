$(document).ready(function(){
    doOnClickAthlete();
    changeReceiveEth(price);
});

doOnClickAthlete = function() {
console.log(athlete_id, price, athlete_price);
    var _min = athlete_price*1/2;
    var _max = athlete_price*1*2;
    $('input[name="athlete_id"]').val(athlete_id);
    $('#input_price').val(price);
    $('#lbl_sell_price').html(price);
    $('#min_price').html(_min);
    $('#max_price').html(_max);
    $('#slider_price').attr('min', _min);
    $('#slider_price').attr('max', _max);
    $('#slider_price').val(price);
}
showVal = function(value) {
    $('#input_price').val(value);
    $('#lbl_sell_price').html(value);
    $('#a_price').html(value);
    changeReceiveEth(value);
}
changeReceiveEth = function(_price) {
    var new_price = _price*(1-(send_fee+site_fee)/100);
    $('#span_receive_eth').html(Math.round(new_price*100000)/100000);
}