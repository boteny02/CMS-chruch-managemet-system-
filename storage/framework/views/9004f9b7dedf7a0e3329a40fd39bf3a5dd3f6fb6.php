<?php $__env->startSection('content'); ?>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <div class="row">  
                </div>

                <div class="row">
                        <div class="col-lg-12 col-md-12">
                          <div class="card">
                            <div class="card-header card-header-success">
                              <h4 class="card-title">Members Stats</h4>
                              <p class="card-category">Recently Add Members</p>
                            </div>
                            <div class="card-body table-responsive">
                              <table class="table table-hover">
                                <thead class="text-success">
                                  <tr><th>ID</th>
                                  <th>Name</th>
                                  <th>Address and Zone</th>
                                  <th>Action</th>
                                </tr></thead>
                                <tbody>
                                        <?php $__currentLoopData = $members; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <tr>
                                    <td><?php echo e(++$i); ?></td>
                                    <td><?php echo e($member->firstname); ?> <?php echo e($member->middle); ?> <?php echo e($member->lastname); ?></td>
                                    <td><?php echo e($member->address); ?> <?php echo e($member->zone_id); ?></td>
                                    <td>
                                        
                                            <form action="<?php echo e(route('members.destroy',$member->id)); ?>" method="POST">
   
                                                    <a class="btn btn-info" href="<?php echo e(route('members.show',$member->id)); ?>">Show</a>
                                    
                                                    <a class="btn btn-primary" href="<?php echo e(route('members.edit',$member->id)); ?>">Edit</a>
                                   
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                      
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>

                                    </td>
                                  </tr>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                
<?php $__env->stopSection(); ?>

<?php echo $__env->make('tables', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\newcrud\resources\views/members/index.blade.php ENDPATH**/ ?>