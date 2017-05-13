---
layout: standard
title: About
---


<div id="about" class="about">
<div class="jumbotron about">
    <h1>CodeOntology</h1>
    <p>CodeOntology is a building block of the Web of Code, an attempt to leverage code in a semantic framework.</p>
    <p>Our framework is composed of three actors:
        <ul>
            <li><a class="relevant">Ontology</a></li>
            <li><a class="relevant">Extraction framework</a></li>
            <li><a class="relevant">Datasets</a></li>
        </ul>
    </p>
    <h3 id="ontology">Ontology</h3>
    <p>We started with one goal in mind: create the DBPedia of source code. We have built our ontology on four layers.
        <figure class="left">
        <img alt="Architectural structure" src="public/img/stack.png" style="max-width: 180px;">
        <figcaption>Architectural structure.</figcaption>
        </figure>
    </p>
    <p>As the ontology expands to the Java layer, more domain-specific concepts are defined. The core layer defines concepts such as
    function and identifier, shared by every language; the language layer introduces variables and types; the object-oriented and Java
    layer finally define methods, objects, prototypes, etc.</p>
    <p>An hyerarchical structure leverages great flexibility, as it is easy to use its bottom layers to extend it to other languages,
    depending on the similarity with Java. For instance, a <a class="relevant">C</a> layer could be built on top of <i>language</i>,
    as it does not support the OO paradigm.</p>

    <h3 id="ontology">Extraction Tool</h3>
    <p>Our extraction tool crawls Java code provided it can be compiled: we currently support natively Gradle and Maven repositories,
    and more can be analysed if a valid classpath is given.</p>
    <p>We are currently analyzing repositories from Github, retrieved automatically through the Github API.</p>

    <h3 id="datasets">Datasets</h3>
    <p>Our extraction tool crawls Java code provided it can be compiled: we currently support natively Gradle and Maven repositories,
    and more can be analysed if a valid classpath is given.</p>

    <h3 id="dbpedia">DBPedia Spotlight</h3>
    <p><a href="http://wiki.dbpedia.org">DBPedia</a> offers an entity annotation REST service,
    <a href="https://github.com/dbpedia-spotlight/dbpedia-spotlight"> Spotlight</a>: we exploited the unstructured information in source
    code by semantically tagging the Javadoc found in the repositories, providing one more abstraction layer to query.</p>

<div class="container">
<div class="infos row">
    <div class="info col-md-3">
        <a id="repositories" class="relevant odometer">0</a>
		<h3>Repositories</h3>
    </div>
    <div class="info col-md-3">
        <a id="datasets" class="relevant odometer">0</a>
		<h3>Datasets</h3>
    </div>
    <div class="info col-md-3">
        <a id="lloc" class="relevant odometer">0</a>
		<h3>LLOCs</h3>
    </div>
    <div class="info col-md-3">
        <a id="triples" class="relevant odometer">0</a>
		<h3>Triples</h3>
    </div>
</div>
</div>

<div class="container people">
	{% include people.html %}
</div>
</div>
</div>