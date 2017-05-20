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
            <li><a class="relevant" href="#ontology">Ontology</a></li>
            <li><a class="relevant" href="#parser">Parser</a></li>
            <li><a class="relevant" href="#datasets">Datasets</a></li>
        </ul>
    </p>

    <h3 id="ontology">The Ontology</h3>
    <p>The ontology is designed to model the domain of object-oriented programming languages. It is written in OWL 2 and is mainly focused towards the Java programming language, but it can be easily reused to represent more languages.
    The modelling process underlying the creation of the ontology has
    been guided by common competency questions that usually arise during software
    process and has been inspired by a re-engineering of the Java abstract syntax.
    The ontology is available on <a class="relevant" href="https://doi.org/10.5281/zenodo.577939">Zenodo</a> under <a class="relevant" href="https://creativecommons.org/licenses/by/4.0/">CC BY 4.0</a> license.
    </p>

    <h3 id="parser">The Parser</h3>
    <p>The parser analyzes Java code to serialize it into RDF triples. It is able  to  extract  structural  information common to all object-oriented programming languages, like class hierarchy, methods and constructors. Optionally, it can also serialize into RDF triples all the  statements  and  expressions,  thereby  providing  a  complete  RDF-ization  of source code.
    <br/>
    CodeOntology  currently  supports natively both  Maven  and  Gradle  projects.
    The RDF serialization of a Java project acts in three steps: first the project is analyzed to download all of its dependencies and load them in class path, then an abstract syntax tree of the source code and its dependencies is built and processed to extract a set of RDF triples.
    <br/>
    The parser, along with a tutorial on how to use it to extract a knowledge base from any Java project, is available on <a class="relevant" href="https://github.com/codeontology/parser">GitHub</a>.
    </p>

    <h3 id="datasets">Datasets</h3>
    <p>We are currently applying the parser to analyze repositories from GitHub, retrieved automatically through the GitHub API. We have also applied the parser to extract RDF triples from the <a class="relevant" href="http://openjdk.java.net/">OpenJDK 8</a> source code. The resulting dataset is available for download on <a class="relevant" href="http://doi.org/10.5281/zenodo.579977">Zenodo</a> and can be queried through our remote <a class="relevant" href="{{ site.baseurl }}/query">SPARQL endpoint</a>.</p>

<!--
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
-->

<div class="container people">
	{% include people.html %}
</div>
</div>
</div>

<script src="public/js/scroller.js"></script>