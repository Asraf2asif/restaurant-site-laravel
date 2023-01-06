<?php $attributes = $attributes->exceptProps(['on']); ?>
<?php foreach (array_filter((['on']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div x-data="{ shown: false, timeout: null }"
    x-init="window.livewire.find('<?php echo e($_instance->id); ?>').on('<?php echo e($on); ?>', () => { clearTimeout(timeout); shown = true; timeout = setTimeout(() => { shown = false }, 2000);  })"
    x-show.transition.out.opacity.duration.1500ms="shown"
    x-transition:leave.opacity.duration.1500ms
    style="display: none;"
    <?php echo e($attributes->merge(['class' => 'text-sm text-gray-600'])); ?>>
    <?php echo e($slot->isEmpty() ? 'Saved.' : $slot); ?>

</div>
<?php /**PATH E:\My Work\web\Resturent-Site\vendor\laravel\jetstream\resources\views\components\action-message.blade.php ENDPATH**/ ?>