<?php $__env->startSection('content'); ?>
    <h1>View Transactions</h1>
    <p>All my Transactions</p>
     <table class="table table-striped table-inverse">
     <tr>
        <th>Product name</th>
        <th>Price</th>
        <th>Discount</th>
        <th>Final Price</th>
        <th>Notes</th>
        <th>Purchased by</th>
        <th>Date purchased</th>
        <th>Action</th>
     <tr>
    <?php if(count($purchases)>0): ?>
        <?php $__currentLoopData = $purchases; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $purchase): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($purchase->price>=50 && $purchase->price<=100): ?>
                <?php echo e($discount=0); ?>

                <?php elseif($purchase->price>=112 && $purchase->price<=115): ?>
                <?php echo e($discount=0.25); ?>

                <?php elseif($purchase->price>=120): ?>
                <?php echo e($discount=0.50); ?>

                <?php else: ?>
                <?php echo e($discount=0.0); ?>

            <?php endif; ?>
            <tr>
                <td><?php echo e($purchase->product_name); ?></td>
                <td><?php echo e($purchase->price); ?></td>
                <td><?php echo e($discount); ?></td>
                <td><?php echo e($purchase->price-$discount); ?></td>
                <td><?php echo e($purchase->notes); ?></td>
                <td><?php echo e(Auth::user()->name); ?></td>
                <td><?php echo e($purchase->created_at); ?></td>
                <td><a href="/update" class="btn btn-success">Confirm Order</a></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php else: ?>
        <p>No transactions found</p>
    <?php endif; ?>
    </table>     
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>