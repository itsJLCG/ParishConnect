<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'class' => null,
    'options' => [],
    'option-label' => null,
    'option-value' => null,
    'placeholder' => null,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'class' => null,
    'options' => [],
    'option-label' => null,
    'option-value' => null,
    'placeholder' => null,
]); ?>
<?php foreach (array_filter(([
    'class' => null,
    'options' => [],
    'option-label' => null,
    'option-value' => null,
    'placeholder' => null,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<div>
    <div>class: <?php echo e($class); ?></div>
    <div>options: <?php echo e(json_encode($options)); ?></div>
    <div>option-label: <?php echo e($optionLabel); ?></div>
    <div>option-value: <?php echo e($optionValue); ?></div>
    <div>placeholder: <?php echo e($placeholder); ?></div>
</div>
<?php /**PATH C:\xamppss\laravel\WebDev_Project\resources\views\vendor\livewire-powergrid\tests\dynamic-select.blade.php ENDPATH**/ ?>