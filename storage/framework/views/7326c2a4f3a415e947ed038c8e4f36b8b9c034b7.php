<div>
    <?php if($paginator->hasPages()): ?>
        <nav role="navigation" aria-label="Pagination Navigation" class="flex justify-between">
            <span>
                
                <?php if($paginator->onFirstPage()): ?>
                    <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md select-none">
                        <?php echo __('pagination.previous'); ?>

                    </span>
                <?php else: ?>
                    <?php if(method_exists($paginator,'getCursorName')): ?>
                        <button type="button" dusk="previousPage" wire:click="setPage('<?php echo e($paginator->previousCursor()->encode()); ?>','<?php echo e($paginator->getCursorName()); ?>')" wire:loading.attr="disabled" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                                <?php echo __('pagination.previous'); ?>

                        </button>
                    <?php else: ?>
                        <button type="button" wire:click="previousPage('<?php echo e($paginator->getPageName()); ?>')" wire:loading.attr="disabled" dusk="previousPage<?php echo e($paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName()); ?>" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                                <?php echo __('pagination.previous'); ?>

                        </button>
                    <?php endif; ?>
                <?php endif; ?>
            </span>

            <span>
                
                <?php if($paginator->hasMorePages()): ?>
                    <?php if(method_exists($paginator,'getCursorName')): ?>
                        <button type="button" dusk="nextPage" wire:click="setPage('<?php echo e($paginator->nextCursor()->encode()); ?>','<?php echo e($paginator->getCursorName()); ?>')" wire:loading.attr="disabled" class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                                <?php echo __('pagination.next'); ?>

                        </button>
                    <?php else: ?>
                        <button type="button" wire:click="nextPage('<?php echo e($paginator->getPageName()); ?>')" wire:loading.attr="disabled" dusk="nextPage<?php echo e($paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName()); ?>" class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                                <?php echo __('pagination.next'); ?>

                        </button>
                    <?php endif; ?>
                <?php else: ?>
                    <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md select-none">
                        <?php echo __('pagination.next'); ?>

                    </span>
                <?php endif; ?>
            </span>
        </nav>
    <?php endif; ?>
</div>
<?php /**PATH E:\My Work\web\Resturent-Site\vendor\livewire\livewire\src\views\pagination\simple-tailwind.blade.php ENDPATH**/ ?>