<?php if (isset($component)) { $__componentOriginal69dc84650370d1d4dc1b42d016d7226b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal69dc84650370d1d4dc1b42d016d7226b = $attributes; } ?>
<?php $component = App\View\Components\GuestLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('guest-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\GuestLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>


<!-- step one section -->
<section id="menu" class="parallax-section">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-2 col-md-8 col-sm-12 text-center">
				<h1 class="heading">Make Reservation</h1>
				<hr>
			</div>
			<div class="container">
                <div class="row">
                    <div class="col-md-12 bg-white">
                        <div class="col-md-6 col-sm-6 wow fadeInUp bg-white" data-wow-delay="0.3s">
                            <img class="object-cover w-full h-full"
                                    src="https://cdn.pixabay.com/photo/2021/01/15/17/01/green-5919790__340.jpg" alt="img" />
                        </div>
                        <div class="col-md-6 col-sm-6 wow fadeInUp bg-white" data-wow-delay="0.6s">
                            <h2 class="mb-4 text-xl font-bold text-blue-600">Make Reservation</h2>

                                <div class="w-full bg-gray-200 rounded-full">
                                    <div
                                        class="w-40 p-1 text-xl font-medium leading-none text-center text-blue-100 bg-blue-600 rounded-full">
                                        Step1</div>
                                </div>

                                <form method="POST" action="<?php echo e(route('reservations.store.step.one')); ?>">
                                    <?php echo csrf_field(); ?>
                                    <div class="sm:col-span-6 mt-2">
                                        <label for="first_name" class="block text-xl font-medium text-gray-700"> First Name
                                        </label>
                                        <div class="mt-1">
                                            <input type="text" id="first_name" name="first_name"
                                                value="<?php echo e($reservation->first_name ?? ''); ?>"
                                                class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-xl sm:leading-5" />
                                        </div>
                                        <?php $__errorArgs = ['first_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <div class="text-xl text-red-400"><?php echo e($message); ?></div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="sm:col-span-6">
                                        <label for="last_name" class="block text-xl font-medium text-gray-700"> Last Name
                                        </label>
                                        <div class="mt-1">
                                            <input type="text" id="last_name" name="last_name"
                                                value="<?php echo e($reservation->last_name ?? ''); ?>"
                                                class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-xl sm:leading-5" />
                                        </div>
                                        <?php $__errorArgs = ['last_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <div class="text-xl text-red-400"><?php echo e($message); ?></div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="sm:col-span-6">
                                        <label for="email" class="block text-xl font-medium text-gray-700"> Email </label>
                                        <div class="mt-1">
                                            <input type="email" id="email" name="email"
                                                value="<?php echo e($reservation->email ?? ''); ?>"
                                                class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-xl sm:leading-5" />
                                        </div>
                                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <div class="text-xl text-red-400"><?php echo e($message); ?></div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="sm:col-span-6">
                                        <label for="tel_number" class="block text-xl font-medium text-gray-700"> Phone
                                            number
                                        </label>
                                        <div class="mt-1">
                                            <input type="text" id="tel_number" name="tel_number"
                                                value="<?php echo e($reservation->tel_number ?? ''); ?>"
                                                class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-xl sm:leading-5" />
                                        </div>
                                        <?php $__errorArgs = ['tel_number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <div class="text-xl text-red-400"><?php echo e($message); ?></div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="sm:col-span-6">
                                        <label for="res_date" class="block text-xl font-medium text-gray-700"> Reservation
                                            Date
                                        </label>
                                        <div class="mt-1">
                                            <input type="datetime-local" id="res_date" name="res_date"
                                                min="<?php echo e($min_date->format('Y-m-d\TH:i:s')); ?>"
                                                max="<?php echo e($max_date->format('Y-m-d\TH:i:s')); ?>"
                                                value="<?php echo e($reservation ? $reservation->res_date->format('Y-m-d\TH:i:s') : ''); ?>"
                                                class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-xl sm:leading-5" />
                                        </div>
                                        <span class="text-xl">Please choose the time between 17:00-23:00.</span>
                                        <?php $__errorArgs = ['res_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <div class="text-xl text-red-400"><?php echo e($message); ?></div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="sm:col-span-6">
                                        <label for="guest_number" class="block text-xl font-medium text-gray-700"> Guest
                                            Number
                                        </label>
                                        <div class="mt-1">
                                            <input type="number" id="guest_number" name="guest_number"
                                                value="<?php echo e($reservation->guest_number ?? ''); ?>"
                                                class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-xl sm:leading-5" />
                                        </div>
                                        <?php $__errorArgs = ['guest_number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <div class="text-xl text-red-400"><?php echo e($message); ?></div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="mt-6 p-4 flex justify-end">
                                        <button type="submit"
                                            class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white btn-lg">Next</button>
                                    </div>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</div>
</section>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal69dc84650370d1d4dc1b42d016d7226b)): ?>
<?php $attributes = $__attributesOriginal69dc84650370d1d4dc1b42d016d7226b; ?>
<?php unset($__attributesOriginal69dc84650370d1d4dc1b42d016d7226b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal69dc84650370d1d4dc1b42d016d7226b)): ?>
<?php $component = $__componentOriginal69dc84650370d1d4dc1b42d016d7226b; ?>
<?php unset($__componentOriginal69dc84650370d1d4dc1b42d016d7226b); ?>
<?php endif; ?>
<?php /**PATH /Users/apple/Desktop/Final/resources/views/reservations/step-one.blade.php ENDPATH**/ ?>