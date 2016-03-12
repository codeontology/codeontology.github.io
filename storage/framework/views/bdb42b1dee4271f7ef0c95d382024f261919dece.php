<?php $__env->startSection("header"); ?>
<nav class="navbar navbar-default">
<div class="container-fluid">
<div class="navbar-header">

<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="<?php echo URL::to('/'); ?>">CodeOntology</a>
</div>

<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<ul class="nav navbar-nav">
    <li><a href="<?php echo URL::to('/query')?>">Query</a></li>
    <li><a href="<?php echo URL::to('/docs')?>">Docs</a></li>
</ul>

</div>
</div>
</nav>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("body", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>