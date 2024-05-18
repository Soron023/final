<?php if (isset($component)) { $__componentOriginal91fdd17964e43374ae18c674f95cdaa3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal91fdd17964e43374ae18c674f95cdaa3 = $attributes; } ?>
<?php $component = App\View\Components\AdminLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AdminLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Dashboard')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="flex justify-end m-2 p-2">
                <a href="<?php echo e(route('admin.menus.create')); ?>" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Add New Menu</a>
            </div>

            <div class="flex flex-col">
                <div class="p-6 bg-white ">
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                        <th scope="col" class="px-6 py-3">
                        Menu Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                        Description
                        </th>
                        <th scope="col" class="px-6 py-3">
                        Image
                        </th>
                        <th scope="col" class="px-6 py-3">
                        Price
                        </th>
                        <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Edit</span>
                        </th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                        <?php echo e($menu->name); ?>

                        </th>
                        <td class="px-6 py-4">
                            <?php echo e($menu->description); ?>

                        </td>
                        <td class="px-6 py-4">
                            <img src="<?php echo e(Storage::url( $menu->image )); ?>" class="w-16 h-16 rounded">
                        </td>
                        <td class="px-6 py-4">
                        <?php echo e($menu->price); ?>

                        </td>
                        <td class="px-6 py-4 text-right">
                            <div class="flex space-x-2">
                                <a href="<?php echo e(route('admin.menus.edit', $menu->id)); ?>" class="font-medium text-white hover:underline bg-green-500 hover:bg-green-700 rounded-lg px-4 py-2">Edit</a>
                                <form class="px-4 py-2 bg-red-500 hover:bg-red-700 rounded-lg text-white"
                                    action="<?php echo e(route('admin.menus.destroy', $menu->id)); ?>"
                                    method="post"
                                    onsubmit="return confirm('Are you sure?');">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit">Delete</button>
                                </form>
                            </div>
                        </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal91fdd17964e43374ae18c674f95cdaa3)): ?>
<?php $attributes = $__attributesOriginal91fdd17964e43374ae18c674f95cdaa3; ?>
<?php unset($__attributesOriginal91fdd17964e43374ae18c674f95cdaa3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal91fdd17964e43374ae18c674f95cdaa3)): ?>
<?php $component = $__componentOriginal91fdd17964e43374ae18c674f95cdaa3; ?>
<?php unset($__componentOriginal91fdd17964e43374ae18c674f95cdaa3); ?>
<?php endif; ?>
<?php /**PATH /Users/apple/Desktop/Final/resources/views/admin/menus/index.blade.php ENDPATH**/ ?>