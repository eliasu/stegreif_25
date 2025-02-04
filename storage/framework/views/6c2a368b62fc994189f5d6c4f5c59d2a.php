<?php use Statamic\Facades\Site; ?>

<div class="card p-0 overflow-hidden h-full flex flex-col">
    <div class="flex justify-between items-center p-4 border-b dark:bg-dark-650 dark:border-b dark:border-dark-900">
        <h2>
            <a class="flex items-center" href="<?php echo e($collection->showUrl()); ?>">
                <div class="h-6 w-6 rtl:ml-2 ltr:mr-2 text-gray-800 dark:text-dark-200">
                    <?php echo Statamic::svg('icons/light/content-writing') ?>
                </div>
                <span v-pre><?php echo e(__($title)); ?></span>
            </a>
        </h2>
        <?php if($canCreate): ?>
        <create-entry-button
            button-class="btn-primary"
            url="<?php echo e($collection->createEntryUrl(Site::selected())); ?>"
            :blueprints="<?php echo e($blueprints->toJson()); ?>"
            text="<?php echo e($button); ?>"></create-entry-button>
        <?php endif; ?>
    </div>
    <collection-widget
        collection="<?php echo e($collection->handle()); ?>"
        :additional-columns="<?php echo e($columns->toJson()); ?>"
        :filters="<?php echo e($filters->toJson()); ?>"
        initial-sort-column="<?php echo e($sortColumn); ?>"
        initial-sort-direction="<?php echo e($sortDirection); ?>"
        :initial-per-page="<?php echo e($limit); ?>"
    ></collection-widget>
</div>
<?php /**PATH /Users/elias/Websites/stegreif_statamic_3/vendor/statamic/cms/src/Providers/../../resources/views/widgets/collection.blade.php ENDPATH**/ ?>