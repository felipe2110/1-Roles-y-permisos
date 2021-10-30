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
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
            <title>Crear producto</title>
        </head>

        <body>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <form action="<?php echo e(route('products.store')); ?>" enctype="multipart/form-data" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label for="">Nombre</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                            <div class="form-group">
                                <label for="">Descripcion</label>
                                <input class="form-control" id="description" name="description" rows="3"></input>
                            </div>
                            <div class="form-group">
                                <label for="">Precio</label>
                                <input type="number" class="form-control" name="price">
                            </div>
                            <div class="form-group">
                                <label for="">Imagen</label>
                                <input class="form-control" type="file" id="formFile" name="fileImage">
                            </div>
                            <hr>
                            <div class="form-group">
                                <button class="btn btn-primary">Crear nuevo producto</button>
                                <a href="<?php echo e(url('products')); ?>" class="btn btn-dark">Cancelar</a>
                            </div>
                        </form>
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
<?php /**PATH C:\xampp\htdocs\actividad01\resources\views/products/create.blade.php ENDPATH**/ ?>