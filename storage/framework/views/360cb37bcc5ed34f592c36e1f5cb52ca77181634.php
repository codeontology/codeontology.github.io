<?php $__env->startSection("title", "Codeontology"); ?>

<?php $__env->startSection("css"); ?>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo e($config["url"]); ?>/css/bootstrap.min.css">

    <!-- Container -->
    <link rel="stylesheet" href="<?php echo e($config["url"]); ?>/css/codeontology.css">

<?php $__env->stopSection(); ?>

<?php $__env->startSection("js"); ?>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>

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
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
    <small><cite title="CodeOntology">Abstract</cite></small>
</blockquote>

<p>Nullam quis risus eget <a href="#">urna mollis ornare</a> vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.</p>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("footer"); ?>
    <?php echo $__env->make("footer", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("body", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>