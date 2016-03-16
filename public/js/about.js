$(document).ready(function() {
    window.odometerOptions = {
      auto: false,
      duration: 10000000,
      animation: 'count'
    };

    $(".infos").hover(counters, function(){});

});

var counters = function() {
    count("repositories", 134);
    count("datasets", 134);
    count("lloc", 15000000);
    count("triples", 17000000);
}

var count = function(what, howMuch) {
    $(".info #" + what).html(howMuch);
}
