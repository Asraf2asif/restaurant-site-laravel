<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('API Tokens')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('api.api-token-manager')->html();
} elseif ($_instance->childHasBeenRendered('AR8hXFz')) {
    $componentId = $_instance->getRenderedChildComponentId('AR8hXFz');
    $componentTag = $_instance->getRenderedChildComponentTagName('AR8hXFz');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('AR8hXFz');
} else {
    $response = \Livewire\Livewire::mount('api.api-token-manager');
    $html = $response->html();
    $_instance->logRenderedChild('AR8hXFz', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH E:\My Work\web\Resturent-Site\resources\views\api\index.blade.php ENDPATH**/ ?>