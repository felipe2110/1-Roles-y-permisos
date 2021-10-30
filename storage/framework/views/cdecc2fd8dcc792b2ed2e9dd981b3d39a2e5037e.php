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
            <title>Document</title>
        </head>

        <body>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <br />
                        <?php if(auth()->check() && auth()->user()->hasRole('admin')): ?>
                        <a href="<?php echo e(url('products/create')); ?>" class="btn btn-primary">Crear nuevo producto</a>
                        <?php endif; ?>
                        <?php if(session('status')): ?>
                        <div class="alert alert-success mt-3">
                            <?php echo e(session('status')); ?>

                        </div>
                        <?php endif; ?>
                        <figure class="text-center">
                            <h1>PRODUCTOS</h1>
                        </figure>
                        <div class="table-responsive">
                            <table class="table table-striped mt-1">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>NOMBRE</th>
                                        <th>DESCRIPCIÓN</th>
                                        <th>PRECIO</th>
                                        <th>FECHA DE CREACIÓN</th>
                                        <th>FECHA DE ACTUALIZACIÓN</th>
                                        <th>IMAGEN</th>
                                        <th>ACCIONES</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($product -> id); ?></td>
                                        <td><?php echo e($product -> name); ?></td>
                                        <td><?php echo e($product -> description); ?></td>
                                        <td><?php echo e($product -> price); ?></td>
                                        <td><?php echo e($product -> created_at); ?></td>
                                        <td><?php echo e($product -> updated_at); ?></td>
                                        <td> <img src="<?php echo e(asset('uploads/products/'.$product->image)); ?>" width="120px" alt="..."></td>
                                        <td>
                                            <form action="<?php echo e(route('products.destroy',$product->id)); ?>" method="post">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>
                                                <?php if(auth()->check() && auth()->user()->hasRole('employe')): ?>
                                                <a href="<?php echo e(route('products.show',$product->id)); ?>" class="btn btn-sm btn-info">Detalles</a>
                                                <?php endif; ?>
                                                <?php if(auth()->check() && auth()->user()->hasRole('admin')): ?>
                                                <a href="<?php echo e(route('products.edit',$product->id)); ?>" class="btn btn-sm btn-warning">Editar</a>
                                                <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                                <?php endif; ?>
                                            </form>
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                        <?php echo e($products-> links()); ?>

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
<?php /**PATH C:\xampp\htdocs\actividad01\resources\views/products/index.blade.php ENDPATH**/ ?>