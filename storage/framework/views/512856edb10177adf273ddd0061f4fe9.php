<?php use function Statamic\trans as __; ?>


<?php $__env->startSection('title', __('Rebuild Search')); ?>

<?php $__env->startSection('content'); ?>

    <header class="mb-6">
        <?php echo $__env->make('statamic::partials.breadcrumb', [
            'url' => cp_route('utilities.index'),
            'title' => __('Utilities')
        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="flex items-center justify-between">
            <h1><?php echo e(__('Search Indexes')); ?></h1>

            <form method="POST" action="<?php echo e(cp_route('utilities.search', 'all')); ?>">
                <?php echo csrf_field(); ?>
                <?php $__currentLoopData = \Statamic\Facades\Search::indexes(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <input type="hidden" name="indexes[]" value="<?php echo e($index->name()); ?>::<?php echo e($index->locale()); ?>">
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <button class="btn-primary"><?php echo e(__('Update All')); ?></button>
            </form>
        </div>
    </header>

    <div class="card p-0">
        <?php if($errors->has('indexes')): ?>
            <p class="p-4"><small class="help-block text-red-500"><?php echo e($errors->first()); ?></small></p>
        <?php endif; ?>

        <table class="data-table">
            <thead>
                <tr>
                    <th><?php echo e(__('Index')); ?></th>
                    <th><?php echo e(__('Driver')); ?></th>
                    <th><?php echo e(__('Searchables')); ?></th>
                    <th><?php echo e(__('Fields')); ?></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = \Statamic\Facades\Search::indexes(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="align-top">
                        <td>
                            <div class="flex items-start">
                                <?php echo Statamic::svg('search-drivers/' . $index->config()['driver'], 'flex w-6 h-6 rtl:ml-2 ltr:mr-2 -mt-0.5 shrink-0', 'search-drivers/local') ?>
                                <span class="text-gray-800 dark:text-dark-150"><?php echo e($index->title()); ?></span>
                            </div>
                        </td>
                        <td>
                            <?php echo e(ucwords($index->config()['driver'])); ?>

                        </td>
                        <td>
                            <?php if(is_string($index->config()['searchables'])): ?>
                                <div class="text-sm text-gray flex flex-wrap">
                                    <span class="badge-pill-sm"><?php echo e($index->config()['searchables']); ?></span>
                                </div>
                            <?php else: ?>
                                <div class="text-sm text-gray flex flex-wrap gap-1">
                                    <?php $__currentLoopData = $index->config()['searchables']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $searchable): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="badge-pill-sm">
                                            <?php echo e($searchable); ?>

                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            <?php endif; ?>
                        </td>
                        <td>
                            <div class="text-sm text-gray flex flex-wrap gap-1">
                                <?php $__currentLoopData = $index->config()['fields']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="badge-pill-sm">
                                        <?php echo e($field); ?>

                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </td>
                        <td class="rtl:text-left ltr:text-right">
                            <form method="POST" action="<?php echo e(cp_route('utilities.search')); ?>">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="indexes[]" value="<?php echo e($index->name()); ?>::<?php echo e($index->locale()); ?>">
                                <button type="submit" class="btn btn-xs -my-1"><?php echo e(__('Update')); ?></button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
        </table>
    </div>

    <?php echo $__env->make('statamic::partials.docs-callout', [
        'topic' => __('Search Indexes'),
        'url' => Statamic::docsUrl('search#indexes')
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('statamic::layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/elias/Websites/stegreif_25/vendor/statamic/cms/src/Providers/../../resources/views/utilities/search.blade.php ENDPATH**/ ?>