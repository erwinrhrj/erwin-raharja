$(document).ready(function(){
    var APP_URL = {!! json_encode(url('/')) !!}
    console.log(APP_URL);
    // $.getJSON("http://jsonip.com/?callback=?", function (data) {
    //     console.log(data);
    //     alert(data.ip);

    //     $.post( "api/test.html", function( data ) {
    //         $( ".result" ).html( data );
    //     });
    // });
});