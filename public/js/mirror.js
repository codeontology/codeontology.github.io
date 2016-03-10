$(document).ready(function() {
    var box = document.getElementById("mirror");

    /*
    var mirror = CodeMirror.fromTextArea(box, {
        mode: "application/sparql-query",
        value: "prefix",
        matchBrackets: true,
        indentUnit: 4,
    });
    */
});

var query = function(query) {}
var clear = function() {
    var box = $("#mirror");

    // box.html("prefix owl: <http://www.w3.org/2002/07/owl#>\n
    //     prefix rdf: <http://www.w3.org/1999/02/22-rdf-syntax-ns#>\n
    //     prefix rdfs: <http://www.w3.org/2000/01/rdf-schema#>\n
    //     prefix woc: <http://rdf.webofcode.org/woc/>\n
    //     prefix dbpedia: <http://dbpedia.org/resource/>\n
    //     \n
    //     SELECT ?s ?p ?o\n
    //     WHERE {\n
    //       ?s ?p ?o\n
    //     }\n
    //     LIMIT 25");
}
