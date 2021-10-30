<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
            <title>Producto: <?php echo e($products->name); ?></title>
        </head>

        <body>

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <br />
                        <a href="<?php echo e(url('products')); ?>" class="btn btn-warning">Ir al inicio</a>
                        <div class="table-responsive">
                            <table class="table table-striped mt-3">
                                <tr>
                                    <th>NOMBRE</th>
                                    <td><?php echo e($products->name); ?></td>
                                </tr>
                                <tr>
                                    <th>DESCRIPCIÓN</th>
                                    <td><?php echo e($products->description); ?></td>
                                </tr>
                                <tr>
                                    <th>PRECIO</th>
                                    <td><?php echo e($products->price); ?></td>
                                </tr>
                                <tr>
                                    <th>IMAGEN</th>
                                    <td>
                                        <img src="<?php echo e(asset('uploads/products/'.$products->image)); ?>" width="120px" alt="...">
                                    </td>
                                </tr>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </body>

        </html>
     <?php $__env->endSlot(); ?>


 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\actividad01\resources\views/products/show.blade.php ENDPATH**/ ?>