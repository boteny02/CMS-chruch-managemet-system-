<?php $__env->startSection('content'); ?>


                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    
                    <form action="/products" method="POST">
                        <?php echo csrf_field(); ?>
                            <div class="form-group">

                                
                                    <input type="hidden" name="user_id" value="<?php echo e(auth()->user()->id); ?>">
                           
                            
                            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <small class="warning" >Kindly Provide the Product name</small> <br>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        
                              <label for="name">Product Name</label>
                              <input type="text" name="name" class="form-control" id="name" placeholder="Product Name">
                            </div>
                            
                            <div class="form-group">
                                    <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <small>Kindly Provide the Product Description</small> <br>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            <label for="description">Product description</label>
                              <input type="text" name="description" class="form-control" id="description" >
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>
                </div>
         
<?php $__env->stopSection(); ?>

<?php echo $__env->make('tables', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\newcrud\resources\views/products/create.blade.php ENDPATH**/ ?>