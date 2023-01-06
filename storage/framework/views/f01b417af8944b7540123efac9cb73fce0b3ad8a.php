<div>
    <?php if($paginator->hasPages()): ?>
        <?php (isset($this->numberOfPaginatorsRendered[$paginator->getPageName()]) ? $this->numberOfPaginatorsRendered[$paginator->getPageName()]++ : $this->numberOfPaginatorsRendered[$paginator->getPageName()] = 1); ?>
        
        <nav>
            <ul class="pagination">
                
                <?php if($paginator->onFirstPage()): ?>
                    <li class="page-item disabled" aria-disabled="true" aria-label="<?php echo app('translator')->get('pagination.previous'); ?>">
                        <span class="page-link" aria-hidden="true">&lsaquo;</span>
                    </li>
                <?php else: ?>
                    <li class="page-item">
                        <button type="button" dusk="previousPage<?php echo e($paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName()); ?>" class="page-link" wire:click="previousPage('<?php echo e($paginator->getPageName()); ?>')" wire:loading.attr="disabled" rel="prev" aria-label="<?php echo app('translator')->get('pagination.previous'); ?>">&lsaquo;</button>
                    </li>
                <?php endif; ?>

                
                <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                    <?php if(is_string($element)): ?>
                        <li class="page-item disabled" aria-disabled="true"><span class="page-link"><?php echo e($element); ?></span></li>
                    <?php endif; ?>

                    
                    <?php if(is_array($element)): ?>
                        <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($page == $paginator->currentPage()): ?>
                                <li class="page-item active" wire:key="paginator-<?php echo e($paginator->getPageName()); ?>-<?php echo e($this->numberOfPaginatorsRendered[$paginator->getPageName()]); ?>-page-<?php echo e($page); ?>" aria-current="page"><span class="page-link"><?php echo e($page); ?></span></li>
                            <?php else: ?>
                                <li class="page-item" wire:key="paginator-<?php echo e($paginator->getPageName()); ?>-<?php echo e($this->numberOfPaginatorsRendered[$paginator->getPageName()]); ?>-page-<?php echo e($page); ?>"><button type="button" class="page-link" wire:click="gotoPage(<?php echo e($page); ?>, '<?php echo e($paginator->getPageName()); ?>')"><?php echo e($page); ?></button></li>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                
                <?php if($paginator->hasMorePages()): ?>
                    <li class="page-item">
                        <button type="button" dusk="nextPage<?php echo e($paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName()); ?>" class="page-link" wire:click="nextPage('<?php echo e($paginator->getPageName()); ?>')" wire:loading.attr="disabled" rel="next" aria-label="<?php echo app('translator')->get('pagination.next'); ?>">&rsaquo;</button>
                    </li>
                <?php else: ?>
                    <li class="page-item disabled" aria-disabled="true" aria-label="<?php echo app('translator')->get('pagination.next'); ?>">
                        <span class="page-link" aria-hidden="true">&rsaquo;</span>
                    </li>
                <?php endif; ?>
            </ul>
        </nav>
    <?php endif; ?>
</div>
<?php /**PATH E:\My Work\web\Resturent-Site\vendor\livewire\livewire\src\views\pagination\bootstrap.blade.php ENDPATH**/ ?>