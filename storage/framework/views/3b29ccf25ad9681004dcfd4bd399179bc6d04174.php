<?php $__env->startSection('content'); ?>
    <h1>Welcome <?php echo e(Auth::user()->name); ?> - Make a purchase</h1>
    
    <p>Products in a stock</p>
    <?php if(count($products)>0): ?>
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="well">
                <h3>
                <?php echo Form::open(['action'=>'PurchasesController@store','method'=>'POST']); ?>

                    <div class="form-group">
                        <?php echo e($product->product_name); ?> - R <?php echo e($product->price); ?>

                        <input type="hidden" id="product_id" name="product_id" value="<?php echo e($product->id); ?>">
                        <input type="hidden" id="user_id" name="user_id" value="<?php echo e(Auth::user()->id); ?>">
                        <input type="text" id="notes" name="notes" placeholder="Notes/Comments">
                        <?php echo e(Form::submit('Add to cart',['class'=>'btn btn-primary'])); ?>

                    </div>
                <?php echo Form::close(); ?>

                </h3>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php else: ?>
        <p>No products found</p>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>