<?php $__env->startSection('content'); ?>
    <h1>Top up account</h1>
    <p>My online shop test from Hybrid Holdings (Pty) Ltd</p>
    <?php if(count($top_ups)>0): ?>
        <?php $__currentLoopData = $top_ups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $top_up): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo Form::open(['action'=>['PurchasesController@update',$top_up->id],'method'=>'POST']); ?>

            <div class="form-group">
                Your credit is: <input type="text" id="credit" name="credit" value=" <?php echo e($top_up->credit); ?>">
                <?php echo e(Form::hidden('_method','PUT')); ?>

                <?php echo e(Form::submit('Save',['class'=>'btn btn-primary'])); ?>

            </div>
        <?php echo Form::close(); ?>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>