<?php $attributes = $attributes->exceptProps(['team', 'component' => 'jet-dropdown-link']); ?>
<?php foreach (array_filter((['team', 'component' => 'jet-dropdown-link']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<form method="POST" action="<?php echo e(route('current-team.update')); ?>" x-data>
    <?php echo method_field('PUT'); ?>
    <?php echo csrf_field(); ?>

    <!-- Hidden Team ID -->
    <input type="hidden" name="team_id" value="<?php echo e($team->id); ?>">

    <?php if (isset($component)) { $__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\DynamicComponent::class, ['component' => $component]); ?>
<?php $component->withName('dynamic-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => '#','x-on:click.prevent' => '$root.submit();']); ?>
        <div class="flex items-center">
            <?php if(Auth::user()->isCurrentTeam($team)): ?>
                <svg class="mr-2 h-5 w-5 text-green-400" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            <?php endif; ?>

            <div class="truncate"><?php echo e($team->name); ?></div>
        </div>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9)): ?>
<?php $component = $__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9; ?>
<?php unset($__componentOriginal3bf0a20793be3eca9a779778cf74145887b021b9); ?>
<?php endif; ?>
</form>
<?php /**PATH E:\My Work\web\Resturent-Site\vendor\laravel\jetstream\resources\views\components\switchable-team.blade.php ENDPATH**/ ?>