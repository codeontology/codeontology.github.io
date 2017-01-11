var mirror;


$(document).ready(function() {
    var box = document.getElementById("mirror");
	if(!box) return; // skip if not found

    mirror = CodeMirror.fromTextArea(box, {
        mode: "application/sparql-query",
        value: "prefix",
        matchBrackets: true,
        indentUnit: 4,
        indentWithTabs: true,
        lineNumbers: true,
        autofocus: true
    });

    // Listeners
    $("#query").on("click", query);
    $("#clear").on("click", clear);

});

var query = function() {
    var url = "http://swipe.unica.it/fuseki/codeontology/query";
    var query = mirror.getValue();

    // Wait for search...
    wait();

    var request = $.ajax({
        url: url,
        type: 'GET',
        crossDomain: true,
        dataType: 'jsonp',
        data: {query: query}
    });
    request.success(function(data, textStatus, jqXHR) {
        var res = data;
        if (res.results.bindings[0] === undefined) {
            emptyResults();
            return;
        }

        if (res.head.vars.length > 0) {
            var columns = [res.head.vars];
            var bindings = res.results.bindings;
            var lines = [];
            for (i = 0; i < bindings.length; i++) {
                var line = [];

                for (var res in bindings[i]) line.push(bindings[i][res].value);

                lines.push(line);
            }
        }

        populateTable(columns[0], lines);
        restore();
    });
    request.fail(function(jqXHR, textStatus, errorThrown) {
        err = jqXHR;
    });
};

var wait = function() {
    $("#query").attr("disabled", true);
    $("#query").html("Searching...");
}

var restore = function() {
    $("#query").attr("disabled", false);
    $("#query").html("Query");
}

var clear = function() {
    $("#output").html("");
}

var emptyResults = function() {
    var warning = "<div class='alert alert-dismissible alert-warning'>" +
      "<button type='button' class='close' data-dismiss='alert'>X</button>" +
      "<h4>Exception thrown at org.codeontology.NoResultsException...</h4>" +
      "<p>Your search provided no results: try something different!</p>" +
      "</div>";
    $("#output").html(warning);
    restore();
}

var populateTable = function(head, data) {
    var width = 100 / head.length;
    var open = "<table class='table table-striped table-hover' style=\"width:100%\">";
    var close = "</table>";
    var openHead = "<thead>";
    var closeHead = "</thead>";
    var openLine = "<tr>";
    var closeLine = "</tr>";
    var openElement = "<td style=\"width: " + width + "%\">";
    var closeElement = "</td>";

    var table = "";

    table = table + open + '\n' + openHead + '\n' + openLine;

    for (i = 0; i < head.length; i++) {
        var column = head[i][0];
        table = table + openElement + column + closeElement;
    }
    table = table + closeLine + '\n' + closeHead;
    table = table + openLine + '\n';

    for (i = 0; i < data.length; i++) {
        var line = data[i];
        for (j = 0; j < line.length; j++) {
            var element = line[j];
            table = table + openElement + element + closeElement;
        }
        table = table + closeLine + '\n';
    }

    table = table + close;
    $("#output").html(table);
}
