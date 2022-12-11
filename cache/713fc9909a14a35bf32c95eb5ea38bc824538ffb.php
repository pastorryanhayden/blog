<?php $__env->startSection('body'); ?>
    <h1>Blog</h1>

    <hr class="border-b my-6">

    <?php $__currentLoopData = $pagination->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo $__env->make('_components.post-preview-inline', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php if($post != $pagination->items->last()): ?>
            <hr class="border-b my-6">
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php if($pagination->pages->count() > 1): ?>
        <nav class="flex text-base my-8">
            <?php if($previous = $pagination->previous): ?>
                <a
                    href="<?php echo e($previous); ?>"
                    title="Previous Page"
                    class="bg-gray-200 hover:bg-gray-400 rounded mr-3 px-5 py-3"
                >&LeftArrow;</a>
            <?php endif; ?>

            <?php $__currentLoopData = $pagination->pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pageNumber => $path): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a
                    href="<?php echo e($path); ?>"
                    title="Go to Page <?php echo e($pageNumber); ?>"
                    class="bg-gray-200 hover:bg-gray-400 rounded mr-3 px-5 py-3 <?php echo e($pagination->currentPage == $pageNumber ? 'text-blue-600' : 'text-blue-700'); ?>"
                ><?php echo e($pageNumber); ?></a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <?php if($next = $pagination->next): ?>
                <a
                    href="<?php echo e($next); ?>"
                    title="Next Page"
                    class="bg-gray-200 hover:bg-gray-400 rounded mr-3 px-5 py-3"
                >&RightArrow;</a>
            <?php endif; ?>
        </nav>
    <?php endif; ?>
    <?php echo $__env->make('_components.newsletter-signup', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('_layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ryanhayden/code/newblog/cache/64bc7dc0275f48571555cd019c1fc4a708e51428.blade.php ENDPATH**/ ?>