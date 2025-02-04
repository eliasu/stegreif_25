<?php use function Statamic\trans as __; ?>


<?php $__env->startSection('title', __('Utilities')); ?>

<?php $__env->startSection('content'); ?>

    <header class="mb-6">
        <h1><?php echo e(__('Utilities')); ?></h1>
    </header>

    <div class="card p-4 content">
        <div class="flex flex-wrap">
        <?php $__currentLoopData = $utilities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $utility): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e($utility->url()); ?>" class="w-full lg:w-1/2 p-4 md:flex items-start hover:bg-gray-200 dark:hover:bg-dark-575 border border-transparent dark:hover:border-dark-400 rounded-md group">
                <div class="h-8 w-8 rtl:ml-4 ltr:mr-4 text-gray-800 dark:text-dark-175">
                    <?php echo $utility->icon(); ?>

                </div>
                <div class="text-blue flex-1 mb-4 md:mb-0 rtl:md:ml-6 ltr:md:mr-6">
                    <h3><?php echo e($utility->title()); ?></h3>
                    <p class="text-xs"><?php echo e($utility->description()); ?></p>
                </div>
            </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

    <?php echo $__env->make('statamic::partials.docs-callout', [
        'topic' => __('Utilities'),
        'url' => Statamic::docsUrl('extending/utilities')
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('statamic::layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/elias/Websites/stegreif_statamic_3/vendor/statamic/cms/src/Providers/../../resources/views/utilities/index.blade.php ENDPATH**/ ?>