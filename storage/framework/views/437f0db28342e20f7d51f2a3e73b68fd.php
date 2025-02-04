<?php use function Statamic\trans as __; ?>


<?php $__env->startSection('title', __('Configure Collection')); ?>

<?php $__env->startSection('content'); ?>

    <collection-edit-form
        :blueprint="<?php echo e(json_encode($blueprint)); ?>"
        :initial-values="<?php echo e(json_encode($values)); ?>"
        :meta="<?php echo e(json_encode($meta)); ?>"
        url="<?php echo e(cp_route('collections.update', $collection->handle())); ?>"
    ></collection-edit-form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('statamic::layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/elias/Websites/stegreif_statamic_3/vendor/statamic/cms/src/Providers/../../resources/views/collections/edit.blade.php ENDPATH**/ ?>