<?php $__env->startSection('content'); ?>

<nav-builder
    title="<?php echo e($title); ?>"
    index-url="<?php echo e(Statamic\Statamic::pro() && Statamic\Facades\User::current()->can('manage preferences') ? cp_route('preferences.nav.index') : false); ?>"
    update-url="<?php echo e($updateUrl); ?>"
    destroy-url="<?php echo e($destroyUrl); ?>"
    :save-as-options="<?php echo e(json_encode($saveAsOptions)); ?>"
    :nav="<?php echo e(json_encode($nav)); ?>"
></nav-builder>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('statamic::layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/elias/Websites/stegreif_statamic_3/vendor/statamic/cms/src/Providers/../../resources/views/nav/edit.blade.php ENDPATH**/ ?>