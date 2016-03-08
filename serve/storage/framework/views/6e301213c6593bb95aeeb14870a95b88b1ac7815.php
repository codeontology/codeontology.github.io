<?php $__env->startSection("title", "Codeontology"); ?>

<?php $__env->startSection("css"); ?>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo e($config["url"]); ?>/css/bootstrap.min.css">

    <!-- Container -->
    <link rel="stylesheet" href="<?php echo e($config["url"]); ?>/css/codeontology.css">

<?php $__env->stopSection(); ?>

<?php $__env->startSection("js"); ?>
    <!-- jQuery -->
    <script src="<?php echo e($config["url"]); ?>/js/jquery-1.10.2.min.js"></script>

    <!-- Bootstrap -->
    <script src="<?php echo e($config["url"]); ?>/js/bootstrap.min.js"></script>

    <!-- Custom -->
    <script src="<?php echo e($config["url"]); ?>/js/custom.js"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("header"); ?>
    <?php echo $__env->make("header", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("content"); ?>
<div id="content" class="container">
<h2>CodeOntology</h2>

<blockquote>
    <p>CodeOntology reaches the gap between source code and semantic web.<br/>
    Developed at <a href="http://corsi.unica.it/informatica">Math/CS department</a> at <a href="https://unica.it">UniCA</a>,
    it parses and analyses Java source code, generating rdf-compliant datasets over source code.</p>
    <small>Abstract, <cite title="CodeOntology">CodeOntology</cite></small>
</blockquote>

<section class="workflow">
    <h3>Workflow</h3>
    <p>CodeOntology analyses Java repositories, provided they are syntatically and semantically correct.
    We support native Gradle and Maven build tools, and other build tools, provided valid classpaths are provided.</p>

    <figure>
    <img alt="CodeOntology workflow" src="<?php echo e($config["url"]); ?>/images/workflow.svg" />
    <br/>
    <figcaption>CodeOntology workflow</figcaption>
    </figure>

    <p>The tool generates rdf-compliant datasets in a N-TRIPLE format.</p>
</section>

<section class="datasets">
    <h3>Datasets</h3>
    <p>We have analysed 700+ repositories on Github, for a total of 15+ million LLOC.
    Our dataset compromise more than 17 million triples.
    Find out more of our ontology, or dive in the query interface.</p>

    <a href="<?php echo e($config["url"]); ?>/docs" class="btn btn-primary">Documentation</a>
    <a href="<?php echo e($config["url"]); ?>/query" class="btn btn-primary">Query</a>
</section>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("footer"); ?>
    <?php echo $__env->make("footer", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("body", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>