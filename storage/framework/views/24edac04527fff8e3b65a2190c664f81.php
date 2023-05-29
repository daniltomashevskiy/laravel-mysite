<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<section class="section__1">
    <div class="container">
        <div class="section__header">
            <h3>Стільці</h3>
        </div>
        <div class="chair">
            <?php $__currentLoopData = $chairs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chair): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a class="chair__item" href="<?php echo e($chair['url']); ?>">
                    <div class="<?php echo e($chair['image']); ?>"></div>
                    <div class="chair__title"><?php echo e($chair['title']); ?></div>
                    <div class="chair__price"><?php echo e($chair['price']); ?></div>
                    <div class="chair__status"><?php echo e($chair['status']); ?></div>
                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>

<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\xampp\php\mysite\resources\views/chairs.blade.php ENDPATH**/ ?>