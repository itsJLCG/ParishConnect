<div class="items-center justify-between sm:flex" wire:loading.class="blur-[2px]" wire:target="loadMore">
    <div class="items-center justify-between w-full sm:flex-1 sm:flex">
        <?php if($recordCount === 'full'): ?>
            <div>
                <div
                    class="mr-2 leading-5 text-center text-pg-primary-700 text-md dark:text-pg-primary-300 sm:text-right">
                    <?php echo e(trans('livewire-powergrid::datatable.pagination.showing')); ?>

                    <span class="font-semibold firstItem"><?php echo e($paginator->firstItem()); ?></span>
                    <?php echo e(trans('livewire-powergrid::datatable.pagination.to')); ?>

                    <span class="font-semibold lastItem"><?php echo e($paginator->lastItem()); ?></span>
                    <?php echo e(trans('livewire-powergrid::datatable.pagination.of')); ?>

                    <span class="font-semibold total"><?php echo e($paginator->total()); ?></span>
                    <?php echo e(trans('livewire-powergrid::datatable.pagination.results')); ?>

                </div>
            </div>
        <?php elseif($recordCount === 'short'): ?>
            <div>
                <p class="mr-2 leading-5 text-center text-pg-primary-700 text-md dark:text-pg-primary-300">
                    <span class="font-semibold firstItem"> <?php echo e($paginator->firstItem()); ?></span>
                    -
                    <span class="font-semibold lastItem"> <?php echo e($paginator->lastItem()); ?></span>
                    |
                    <span class="font-semibold total"> <?php echo e($paginator->total()); ?></span>

                </p>
            </div>
        <?php elseif($recordCount === 'min'): ?>
            <div>
                <p class="mr-2 leading-5 text-center text-pg-primary-700 text-md dark:text-pg-primary-300">
                    <span class="font-semibold firstItem"> <?php echo e($paginator->firstItem()); ?></span>
                    -
                    <span class="font-semibold lastItem"> <?php echo e($paginator->lastItem()); ?></span>
                </p>
            </div>
        <?php endif; ?>

        <?php if($paginator->hasPages() && $recordCount != 'min'): ?>
            <nav
                role="navigation"
                aria-label="Pagination Navigation"
                class="items-center justify-between sm:flex"
            >
                <div class="flex justify-center mt-2 md:flex-none md:justify-end sm:mt-0">

                    <?php if(!$paginator->onFirstPage()): ?>
                        <a
                            class="px-2 py-1 pt-2 m-1 text-center text-white bg-pg-primary-600 border-pg-primary-400 rounded cursor-pointer border-1 hover:bg-pg-primary-600 hover:border-pg-primary-800 dark:text-pg-primary-300"
                            wire:click="gotoPage(1, '<?php echo e($paginator->getPageName()); ?>')"
                        >
                            <?php if (isset($component)) { $__componentOriginalc6a8cf21d0b4896a079313b58895d0fe = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc6a8cf21d0b4896a079313b58895d0fe = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'livewire-powergrid::components.icons.chevron-double-left','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('livewire-powergrid::icons.chevron-double-left'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc6a8cf21d0b4896a079313b58895d0fe)): ?>
<?php $attributes = $__attributesOriginalc6a8cf21d0b4896a079313b58895d0fe; ?>
<?php unset($__attributesOriginalc6a8cf21d0b4896a079313b58895d0fe); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc6a8cf21d0b4896a079313b58895d0fe)): ?>
<?php $component = $__componentOriginalc6a8cf21d0b4896a079313b58895d0fe; ?>
<?php unset($__componentOriginalc6a8cf21d0b4896a079313b58895d0fe); ?>
<?php endif; ?>
                        </a>

                        <a
                            class="px-2 py-1 pt-2 m-1 text-center text-white bg-pg-primary-600 border-pg-primary-400 rounded cursor-pointer border-1 hover:bg-pg-primary-600 hover:border-pg-primary-800 dark:text-pg-primary-300"
                            wire:click="previousPage"
                            rel="next"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="16"
                                height="16"
                                fill="currentColor"
                                class="bi bi-chevron-compact-left"
                                viewBox="0 0 16 16"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223z"
                                />
                            </svg>
                        </a>
                    <?php endif; ?>

                    <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if(is_array($element)): ?>
                            <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($paginator->currentPage() > 3 && $page === 2): ?>
                                    <div class="mx-1 mt-1 text-pg-primary-800 dark:text-pg-primary-300">
                                        <span class="font-bold">.</span>
                                        <span class="font-bold">.</span>
                                        <span class="font-bold">.</span>
                                    </div>
                                <?php endif; ?>

                                <?php if($page == $paginator->currentPage()): ?>
                                    <span
                                        class="px-2 py-1 m-1 text-center border-pg-primary-400 rounded cursor-pointer border-1 dark:bg-pg-primary-800 dark:text-white dark:text-pg-primary-300"
                                    ><?php echo e($page); ?></span>
                                <?php elseif(
                                    $page === $paginator->currentPage() + 1 ||
                                        $page === $paginator->currentPage() + 2 ||
                                        $page === $paginator->currentPage() - 1 ||
                                        $page === $paginator->currentPage() - 2): ?>
                                    <a
                                        class="px-2 py-1 m-1 text-center text-white bg-pg-primary-600 border-pg-primary-400 rounded cursor-pointer border-1 hover:bg-pg-primary-600 hover:border-pg-primary-800 dark:text-pg-primary-300"
                                        wire:click="gotoPage(<?php echo e($page); ?>, '<?php echo e($paginator->getPageName()); ?>')"
                                    ><?php echo e($page); ?></a>
                                <?php endif; ?>

                                <?php if($paginator->currentPage() < $paginator->lastPage() - 2 && $page === $paginator->lastPage() - 1): ?>
                                    <div class="mx-1 mt-1 text-pg-primary-600 dark:text-pg-primary-300">
                                        <span>.</span>
                                        <span>.</span>
                                        <span>.</span>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <?php if($paginator->hasMorePages()): ?>
                        <?php if($paginator->lastPage() - $paginator->currentPage() >= 2): ?>
                            <a
                                class="px-2 py-1 pt-2 m-1 text-center text-white bg-pg-primary-600 border-pg-primary-400 rounded cursor-pointer border-1 hover:bg-pg-primary-600 hover:border-pg-primary-800 dark:text-pg-primary-300"
                                wire:click="nextPage"
                                rel="next"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="16"
                                    height="16"
                                    fill="currentColor"
                                    class="bi bi-chevron-compact-right"
                                    viewBox="0 0 16 16"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M6.776 1.553a.5.5 0 0 1 .671.223l3 6a.5.5 0 0 1 0 .448l-3 6a.5.5 0 1 1-.894-.448L9.44 8 6.553 2.224a.5.5 0 0 1 .223-.671z"
                                    />
                                </svg>
                            </a>
                        <?php endif; ?>
                        <a
                            class="px-2 py-1 pt-2 m-1 text-center text-white bg-pg-primary-600 border-pg-primary-400 rounded cursor-pointer border-1 hover:bg-pg-primary-600 hover:border-pg-primary-800 dark:text-pg-primary-300"
                            wire:click="gotoPage(<?php echo e($paginator->lastPage()); ?>, '<?php echo e($paginator->getPageName()); ?>')"
                        >
                            <?php if (isset($component)) { $__componentOriginalc79088b9e0fc07d0e87feb6b1978310d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc79088b9e0fc07d0e87feb6b1978310d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'livewire-powergrid::components.icons.chevron-double-right','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('livewire-powergrid::icons.chevron-double-right'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc79088b9e0fc07d0e87feb6b1978310d)): ?>
<?php $attributes = $__attributesOriginalc79088b9e0fc07d0e87feb6b1978310d; ?>
<?php unset($__attributesOriginalc79088b9e0fc07d0e87feb6b1978310d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc79088b9e0fc07d0e87feb6b1978310d)): ?>
<?php $component = $__componentOriginalc79088b9e0fc07d0e87feb6b1978310d; ?>
<?php unset($__componentOriginalc79088b9e0fc07d0e87feb6b1978310d); ?>
<?php endif; ?>
                        </a>
                    <?php endif; ?>
                </div>
            </nav>
        <?php endif; ?>

        <div>
            <?php if($paginator->hasPages() && $recordCount == 'min'): ?>
                <nav
                    role="navigation"
                    aria-label="Pagination Navigation"
                    class="items-center justify-between sm:flex"
                >
                    <div class="flex justify-center mt-2 md:flex-none md:justify-end sm:mt-0">
                        <span>
                            
                            <?php if($paginator->onFirstPage()): ?>
                                <button
                                    disabled
                                    class="p-2 m-1 text-center text-pg-primary-400 bg-pg-primary-200 border-pg-primary-400 rounded border-1 dark:text-pg-primary-300"
                                >
                                    <?php if (isset($component)) { $__componentOriginalc6a8cf21d0b4896a079313b58895d0fe = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc6a8cf21d0b4896a079313b58895d0fe = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'livewire-powergrid::components.icons.chevron-double-left','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('livewire-powergrid::icons.chevron-double-left'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc6a8cf21d0b4896a079313b58895d0fe)): ?>
<?php $attributes = $__attributesOriginalc6a8cf21d0b4896a079313b58895d0fe; ?>
<?php unset($__attributesOriginalc6a8cf21d0b4896a079313b58895d0fe); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc6a8cf21d0b4896a079313b58895d0fe)): ?>
<?php $component = $__componentOriginalc6a8cf21d0b4896a079313b58895d0fe; ?>
<?php unset($__componentOriginalc6a8cf21d0b4896a079313b58895d0fe); ?>
<?php endif; ?>
                                </button>
                            <?php else: ?>
                                <?php if(method_exists($paginator, 'getCursorName')): ?>
                                    <button
                                        wire:click="setPage('<?php echo e($paginator->previousCursor()->encode()); ?>','<?php echo e($paginator->getCursorName()); ?>')"
                                        wire:loading.attr="disabled"
                                        class="p-2 m-1 text-center text-white bg-pg-primary-600 border-pg-primary-400 rounded cursor-pointer border-1 hover:bg-pg-primary-600 hover:border-pg-primary-800 dark:text-pg-primary-300"
                                    >
                                        <?php if (isset($component)) { $__componentOriginalc6a8cf21d0b4896a079313b58895d0fe = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc6a8cf21d0b4896a079313b58895d0fe = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'livewire-powergrid::components.icons.chevron-double-left','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('livewire-powergrid::icons.chevron-double-left'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc6a8cf21d0b4896a079313b58895d0fe)): ?>
<?php $attributes = $__attributesOriginalc6a8cf21d0b4896a079313b58895d0fe; ?>
<?php unset($__attributesOriginalc6a8cf21d0b4896a079313b58895d0fe); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc6a8cf21d0b4896a079313b58895d0fe)): ?>
<?php $component = $__componentOriginalc6a8cf21d0b4896a079313b58895d0fe; ?>
<?php unset($__componentOriginalc6a8cf21d0b4896a079313b58895d0fe); ?>
<?php endif; ?>
                                    </button>
                                <?php else: ?>
                                    <button
                                        wire:click="previousPage('<?php echo e($paginator->getPageName()); ?>')"
                                        wire:loading.attr="disabled"
                                        class="p-2 m-1 text-center text-white bg-pg-primary-600 border-pg-primary-400 rounded cursor-pointer border-1 hover:bg-pg-primary-600 hover:border-pg-primary-800 dark:text-pg-primary-300"
                                    >
                                        <?php if (isset($component)) { $__componentOriginalc6a8cf21d0b4896a079313b58895d0fe = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc6a8cf21d0b4896a079313b58895d0fe = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'livewire-powergrid::components.icons.chevron-double-left','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('livewire-powergrid::icons.chevron-double-left'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc6a8cf21d0b4896a079313b58895d0fe)): ?>
<?php $attributes = $__attributesOriginalc6a8cf21d0b4896a079313b58895d0fe; ?>
<?php unset($__attributesOriginalc6a8cf21d0b4896a079313b58895d0fe); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc6a8cf21d0b4896a079313b58895d0fe)): ?>
<?php $component = $__componentOriginalc6a8cf21d0b4896a079313b58895d0fe; ?>
<?php unset($__componentOriginalc6a8cf21d0b4896a079313b58895d0fe); ?>
<?php endif; ?>
                                    </button>
                                <?php endif; ?>
                            <?php endif; ?>
                        </span>

                        <span>
                            
                            <?php if($paginator->hasMorePages()): ?>
                                <?php if(method_exists($paginator, 'getCursorName')): ?>
                                    <button
                                        wire:click="setPage('<?php echo e($paginator->nextCursor()->encode()); ?>','<?php echo e($paginator->getCursorName()); ?>')"
                                        wire:loading.attr="disabled"
                                        class="p-2 m-1 text-center text-white bg-pg-primary-600 border-pg-primary-400 rounded cursor-pointer border-1 hover:bg-pg-primary-600 hover:border-pg-primary-800 dark:text-pg-primary-300"
                                    >
                                        <?php if (isset($component)) { $__componentOriginalc79088b9e0fc07d0e87feb6b1978310d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc79088b9e0fc07d0e87feb6b1978310d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'livewire-powergrid::components.icons.chevron-double-right','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('livewire-powergrid::icons.chevron-double-right'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc79088b9e0fc07d0e87feb6b1978310d)): ?>
<?php $attributes = $__attributesOriginalc79088b9e0fc07d0e87feb6b1978310d; ?>
<?php unset($__attributesOriginalc79088b9e0fc07d0e87feb6b1978310d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc79088b9e0fc07d0e87feb6b1978310d)): ?>
<?php $component = $__componentOriginalc79088b9e0fc07d0e87feb6b1978310d; ?>
<?php unset($__componentOriginalc79088b9e0fc07d0e87feb6b1978310d); ?>
<?php endif; ?>
                                    </button>
                                <?php else: ?>
                                    <button
                                        wire:click="nextPage('<?php echo e($paginator->getPageName()); ?>')"
                                        wire:loading.attr="disabled"
                                        class="p-2 m-1 text-center text-white bg-pg-primary-600 border-pg-primary-400 rounded cursor-pointer border-1 hover:bg-pg-primary-600 hover:border-pg-primary-800 dark:text-pg-primary-300"
                                    >
                                        <?php if (isset($component)) { $__componentOriginalc79088b9e0fc07d0e87feb6b1978310d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc79088b9e0fc07d0e87feb6b1978310d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'livewire-powergrid::components.icons.chevron-double-right','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('livewire-powergrid::icons.chevron-double-right'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc79088b9e0fc07d0e87feb6b1978310d)): ?>
<?php $attributes = $__attributesOriginalc79088b9e0fc07d0e87feb6b1978310d; ?>
<?php unset($__attributesOriginalc79088b9e0fc07d0e87feb6b1978310d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc79088b9e0fc07d0e87feb6b1978310d)): ?>
<?php $component = $__componentOriginalc79088b9e0fc07d0e87feb6b1978310d; ?>
<?php unset($__componentOriginalc79088b9e0fc07d0e87feb6b1978310d); ?>
<?php endif; ?>
                                    </button>
                                <?php endif; ?>
                            <?php else: ?>
                                <button
                                    disabled
                                    class="p-2 m-1 text-center text-pg-primary-400 bg-pg-primary-200 border-pg-primary-400 rounded border-1 dark:text-pg-primary-300"
                                >
                                    <?php if (isset($component)) { $__componentOriginalc79088b9e0fc07d0e87feb6b1978310d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc79088b9e0fc07d0e87feb6b1978310d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'livewire-powergrid::components.icons.chevron-double-right','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('livewire-powergrid::icons.chevron-double-right'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc79088b9e0fc07d0e87feb6b1978310d)): ?>
<?php $attributes = $__attributesOriginalc79088b9e0fc07d0e87feb6b1978310d; ?>
<?php unset($__attributesOriginalc79088b9e0fc07d0e87feb6b1978310d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc79088b9e0fc07d0e87feb6b1978310d)): ?>
<?php $component = $__componentOriginalc79088b9e0fc07d0e87feb6b1978310d; ?>
<?php unset($__componentOriginalc79088b9e0fc07d0e87feb6b1978310d); ?>
<?php endif; ?>
                                </button>
                            <?php endif; ?>
                        </span>
                    </div>
                </nav>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php /**PATH C:\xamppss\laravel\WebDev_Project\resources\views\vendor\livewire-powergrid\components\frameworks\tailwind\pagination.blade.php ENDPATH**/ ?>