<div>
    <?php if($paginator->hasPages()): ?>
        <nav>
            <ul class="pagination">
                
                <?php if($paginator->onFirstPage()): ?>
                    <li class="page-item disabled" aria-disabled="true">
                        <span class="page-link"><?php echo app('translator')->get('pagination.previous'); ?></span>
                    </li>
                <?php else: ?>
                    <?php if(method_exists($paginator,'getCursorName')): ?>
                        <li class="page-item">
                            <button dusk="previousPage" type="button" class="page-link" wire:click="setPage('<?php echo e($paginator->previousCursor()->encode()); ?>','<?php echo e($paginator->getCursorName()); ?>')" wire:loading.attr="disabled" rel="prev"><?php echo app('translator')->get('pagination.previous'); ?></button>
                        </li>
                    <?php else: ?>
                        <li class="page-item">
                            <button type="button" dusk="previousPage<?php echo e($paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName()); ?>" class="page-link" wire:click="previousPage('<?php echo e($paginator->getPageName()); ?>')" wire:loading.attr="disabled" rel="prev"><?php echo app('translator')->get('pagination.previous'); ?></button>
                        </li>
                    <?php endif; ?>
                <?php endif; ?>

                
                <?php if($paginator->hasMorePages()): ?>
                    <?php if(method_exists($paginator,'getCursorName')): ?>
                        <li class="page-item">
                            <button dusk="nextPage" type="button" class="page-link" wire:click="setPage('<?php echo e($paginator->nextCursor()->encode()); ?>','<?php echo e($paginator->getCursorName()); ?>')" wire:loading.attr="disabled" rel="next"><?php echo app('translator')->get('pagination.next'); ?></button>
                        </li>
                    <?php else: ?>
                        <li class="page-item">
                            <button type="button" dusk="nextPage<?php echo e($paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName()); ?>" class="page-link" wire:click="nextPage('<?php echo e($paginator->getPageName()); ?>')" wire:loading.attr="disabled" rel="next"><?php echo app('translator')->get('pagination.next'); ?></button>
                        </li>
                    <?php endif; ?>
                <?php else: ?>
                    <li class="page-item disabled" aria-disabled="true">
                        <span class="page-link"><?php echo app('translator')->get('pagination.next'); ?></span>
                    </li>
                <?php endif; ?>
            </ul>
        </nav>
    <?php endif; ?>
</div>
<?php /**PATH E:\My Work\web\Resturent-Site\vendor\livewire\livewire\src\views\pagination\simple-bootstrap.blade.php ENDPATH**/ ?>