<?php $__env->startSection('title', __('Categoria Productos')); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md">
                <h1><?php echo $__env->yieldContent('title'); ?></h1>
            </div>
            <div class="col-md-auto mb-3 mb-md-0">
                <a href="<?php echo e(route('categoria_productos.create')); ?>" class="btn btn-primary"><?php echo e(__('Create Categoria Producto')); ?></a>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <?php echo $html->table(); ?>

                <?php echo $html->scripts(); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/jtrevino/UPV/1730169-TAW-42/almacen/resources/views/categoria_productos/index.blade.php ENDPATH**/ ?>