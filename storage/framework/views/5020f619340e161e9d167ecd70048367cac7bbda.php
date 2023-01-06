<?php $attributes = $attributes->exceptProps(['submit']); ?>
<?php foreach (array_filter((['submit']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div <?php echo e($attributes->merge(['class' => 'md:grid md:grid-cols-3 md:gap-6'])); ?>>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.section-title','data' => []]); ?>
<?php $component->withName('jet-section-title'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
         <?php $__env->slot('title', null, []); ?> <?php echo e($title); ?> <?php $__env->endSlot(); ?>
         <?php $__env->slot('description', null, []); ?> <?php echo e($description); ?> <?php $__env->endSlot(); ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

    <div class="mt-5 md:mt-0 md:col-span-2">
        <form wire:submit.prevent="<?php echo e($submit); ?>">
            <div class="px-4 py-5 bg-white sm:p-6 shadow <?php echo e(isset($actions) ? 'sm:rounded-tl-md sm:rounded-tr-md' : 'sm:rounded-md'); ?>">
                <div class="grid grid-cols-6 gap-6">
                    <?php echo e($form); ?>

                </div>
            </div>

            <?php if(isset($actions)): ?>
                <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                    <?php echo e($actions); ?>

                </div>
            <?php endif; ?>
        </form>
    </div>
</div>
<?php /**PATH E:\My Work\web\Resturent-Site\vendor\laravel\jetstream\resources\views\components\form-section.blade.php ENDPATH**/ ?>