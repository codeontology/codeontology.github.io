---
layout: standard
title: SPARQL Query
---

Run a query in this box. Check the [documentation](docs) for more information.

<textarea id="mirror" data-lang="sparql-query">
prefix owl:<http://www.w3.org/2002/07/owl#>
prefix rdf:<http://www.w3.org/1999/02/22-rdf-syntax-ns#>
prefix rdfs:<http://www.w3.org/2000/01/rdf-schema#>
prefix woc:<http://rdf.webofcode.org/woc/>
prefix dbpedia:<http://dbpedia.org/resource/>

SELECT ?s ?p ?o
WHERE {
  ?s ?p ?o
}
LIMIT 25
</textarea>

<div class="buttons">
	<a id="query" class="btn btn-primary">Query</a>
	<a id="clear" class="btn btn-info">Clear</a>
</div>

<div id="output"></div>


