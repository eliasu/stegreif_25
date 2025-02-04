<?php use function Statamic\trans as __; ?>


<?php $__env->startSection('title', __('PHP Info')); ?>

<?php $__env->startSection('content'); ?>

    <header class="mb-6">
        <?php echo $__env->make('statamic::partials.breadcrumb', [
            'url' => cp_route('utilities.index'),
            'title' => __('Utilities')
        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <h1><?php echo e(__('PHP Info')); ?></h1>
    </header>

    <div class="card p-0" dir="ltr">
        <table class="data-table ltr:text-left">
            <tr>
                <th class="rtl:pr-4 ltr:pl-4 py-2 w-1/4"><?php echo e(__('PHP Version')); ?></th>
                <td><?php echo e(PHP_VERSION); ?></td>
            </tr>
        </table>
    </div>

    <?php $__currentLoopData = $phpinfo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $section => $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <h2 class="mt-8 mb-2 font-bold text-lg" dir="ltr"><?php echo e($section); ?></h2>
        <div class="card p-0" dir="ltr">
            <table class="data-table ltr:text-left">
                <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th class="rtl:pr-4 ltr:pl-4 py-2 w-1/4"><?php echo e($name); ?></th>
                    <td class="break-all"><?php echo e(is_array($value) ? join(', ', $value) : $value); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('statamic::layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/elias/Websites/stegreif_statamic_3/vendor/statamic/cms/src/Providers/../../resources/views/utilities/phpinfo.blade.php ENDPATH**/ ?>