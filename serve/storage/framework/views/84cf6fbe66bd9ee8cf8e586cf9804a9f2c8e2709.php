<?php $__env->startSection("title", "Codeontology Query"); ?>

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
<h2>CodeOntology query</h2>

<p>Run a query in this box. Check the <a href="<?php echo e($config["url"]); ?>/docs">documentation</a> for more information.</p>

<div class="form-group">
<input class="form-control" id="focusedInput" type="text" value="SELECT * LIMIT 10">
</div>

<div class="results">
</div>

</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("footer"); ?>
    <?php echo $__env->make("footer", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("body", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>