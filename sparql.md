---
layout: standard
title: SPARQL Query
---
<div id="query-container">
<div id="div-instructions">
Run a query in this box. <br/>
Check the <a href="{{ site.baseurl }}/docs">documentation</a> and the <a href="{{ site.baseurl }}/examples">examples</a> for more details.
</div>

<textarea id="mirror" data-lang="sparql-query">
PREFIX owl:<http://www.w3.org/2002/07/owl#>
PREFIX rdf:<http://www.w3.org/1999/02/22-rdf-syntax-ns#>
PREFIX rdfs:<http://www.w3.org/2000/01/rdf-schema#>
PREFIX woc:<http://rdf.webofcode.org/woc/>
PREFIX dbr:<http://dbpedia.org/resource/>
PREFIX dul: <http://www.ontologydesignpatterns.org/ont/dul/DUL.owl#>


# Get all methods in OpenJDK 8 computing the cube root of a parameter of type double
SELECT ?method
WHERE {
  ?method a woc:Method ;
          woc:hasParameter/woc:hasType woc:Double ; 
          dul:associatedWith dbr:Cube_root .
}
</textarea>

<div class="buttons">
	<a id="query" class="btn btn-primary">Query</a>
	<a id="clear" class="btn btn-info">Clear</a>
</div>

<div id="output"></div>
</div>


