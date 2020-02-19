<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    <div class="btn btn-danger" width="20px" height="20px" style="bgcolor:#e83e8c"> <?php echo e($cnt); ?></div>
                        <div class="btn btn-danger"><small>you have Created of Products</small></div>
                        <a href="<?php echo e(route ('questionnaires.create')); ?>" class="btn btn-success">Create Questionnaire</a>
                        <a href="<?php echo e(route ('products.create')); ?>" class="btn btn-success">Add products</a>
                </div>

                <div class="row">
                        <div class="col-lg-12 margin-tb">
                            <div class="pull-left">
                                <h2> Show Product</h2>
                            </div>
                            <div class="pull-right">
                                <a class="btn btn-primary" href="<?php echo e(route('products.index')); ?>"> Back</a>
                            </div>
                        </div>
                    </div>
                   
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Name:</strong>
                                <?php echo e($product->name); ?>

                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Details:</strong>
                                <?php echo e($product->description); ?>

                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\newcrud\resources\views/products/show.blade.php ENDPATH**/ ?>