<?php $__env->startComponent('mail::message'); ?>
<?php echo e(__('You have been invited to join the :team team!', ['team' => $invitation->team->name])); ?>


<?php if(Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::registration())): ?>
<?php echo e(__('If you do not have an account, you may create one by clicking the button below. After creating an account, you may click the invitation acceptance button in this email to accept the team invitation:')); ?>


<?php $__env->startComponent('mail::button', ['url' => route('register')]); ?>
<?php echo e(__('Create Account')); ?>

<?php echo $__env->renderComponent(); ?>

<?php echo e(__('If you already have an account, you may accept this invitation by clicking the button below:')); ?>


<?php else: ?>
<?php echo e(__('You may accept this invitation by clicking the button below:')); ?>

<?php endif; ?>


<?php $__env->startComponent('mail::button', ['url' => $acceptUrl]); ?>
<?php echo e(__('Accept Invitation')); ?>

<?php echo $__env->renderComponent(); ?>

<?php echo e(__('If you did not expect to receive an invitation to this team, you may discard this email.')); ?>

<?php echo $__env->renderComponent(); ?>
<?php /**PATH E:\My Work\web\Resturent-Site\vendor\laravel\jetstream\resources\views\mail\team-invitation.blade.php ENDPATH**/ ?>