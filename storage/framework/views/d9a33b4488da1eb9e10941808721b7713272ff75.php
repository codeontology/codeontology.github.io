<?php $__env->startSection("header"); ?>
    <?php echo $__env->make("header", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("content"); ?>
<div id="content">
<h2>CodeOntology query</h2>

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