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
prefix woc:<http://rdf.webofcode.org/woc/>

# Get all methods in JDK8 with the keyword "math" in their description (javadoc)
SELECT *
FROM <http://data.codeontology.org/graph/jdk8>
WHERE {
 ?class a  woc:Class.
  ?method woc:declaredBy ?class.
  ?method a woc:Method.
  ?method rdfs:comment ?description.
  filter( regex(str(?description), "math"))
}
LIMIT 10
</textarea>

<div class="buttons">
	<a id="query" class="btn btn-primary">Query</a>
	<a id="clear" class="btn btn-info">Clear</a>
</div>

<div id="output"></div>

## Query examples
In the following a list of SPARQL queries.

### Recursion
Example of Recursion

```
SELECT ...
```



