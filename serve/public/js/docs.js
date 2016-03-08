$(document).ready(function() {
    // Hide docs
    $(".docs #package").hide();
    $(".docs #class").hide();
    $(".docs #interface").hide();
    $(".docs #method").hide();
    $(".docs #field").hide();
    $(".docs #var").hide();
    $(".docs #lambda").hide();
    $(".docs #parameter").hide();

    // Listeners
    $(".btn.btn-default.package").on("click", docs);
    $(".btn.btn-default.class").on("click", docs);
    $(".btn.btn-default.interface").on("click", docs);
    $(".btn.btn-default.method").on("click", docs);
    $(".btn.btn-default.field").on("click", docs);
    $(".btn.btn-default.var").on("click", docs);
    $(".btn.btn-default.lambda").on("click", docs);
    $(".btn.btn-default.parameter").on("click", docs);
});

// Toggle visibility of docs
var docs = function(e) {
    var target = e.currentTarget.classList[0];
    $(".docs #" + target).toggle();
}
