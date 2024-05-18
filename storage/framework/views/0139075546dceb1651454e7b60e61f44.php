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

    <!-- home section -->
<section id="home" class="parallax-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<h1>RESTO</h1>
				<h2>CLEAN &amp; SIMPLE DESIGN</h2>
				<a href="#gallery" class="smoothScroll btn btn-default">LEARN MORE</a>
			</div>
		</div>
	</div>
</section>


<!-- gallery section -->
<section id="gallery" class="parallax-section">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-2 col-md-8 col-sm-12 text-center">
				<h1 class="heading">Food Gallery</h1>
				<hr>
			</div>
			<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.3s">
				<a href="<?php echo e(asset('zendo_assets/images/gallery-img1.jpg')); ?>" data-lightbox-gallery="zenda-gallery"><img src="<?php echo e(asset('zendo_assets/images/gallery-img1.jpg')); ?>" alt="gallery img"></a>
				<div>
					<h3>Lemon-Rosemary Prawn</h3>
					<span>Seafood / Shrimp / Lemon</span>
				</div>
				<a href="<?php echo e(asset('zendo_assets/images/gallery-img2.jpg')); ?>" data-lightbox-gallery="zenda-gallery"><img src="<?php echo e(asset('zendo_assets/images/gallery-img2.jpg')); ?>" alt="gallery img"></a>
				<div>
					<h3>Lemon-Rosemary Vegetables</h3>
					<span>Tomato / Rosemary / Lemon</span>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
				<a href="<?php echo e(asset('zendo_assets/images/gallery-img3.jpg')); ?>" data-lightbox-gallery="zenda-gallery"><img src="<?php echo e(asset('zendo_assets/images/gallery-img3.jpg')); ?>" alt="gallery img"></a>
				<div>
					<h3>Lemon-Rosemary Bakery</h3>
					<span>Bread / Rosemary / Orange</span>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.9s">
				<a href="<?php echo e(asset('zendo_assets/images/gallery-img4.jpg')); ?>" data-lightbox-gallery="zenda-gallery"><img src="<?php echo e(asset('zendo_assets/images/gallery-img4.jpg')); ?>" alt="gallery img"></a>
				<div>
					<h3>Lemon-Rosemary Salad</h3>
					<span>Chicken / Rosemary / Green</span>
				</div>
				<a href="<?php echo e(asset('zendo_assets/images/gallery-img5.jpg')); ?>" data-lightbox-gallery="zenda-gallery"><img src="<?php echo e(asset('zendo_assets/images/gallery-img5.jpg')); ?>" alt="gallery img"></a>
				<div>
					<h3>Lemon-Rosemary Pizza</h3>
					<span>Pasta / Rosemary / Green</span>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- menu section -->
<section id="menu" class="parallax-section">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-2 col-md-8 col-sm-12 text-center">
				<h1 class="heading">Special Menu</h1>
				<hr>
			</div>

            <?php $__currentLoopData = $specials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <div class="col-md-4 col-sm-4 mt-4 mb-4">
                    <img class="h-48" src="<?php echo e(Storage::url($menu->image)); ?>" alt="Image" />
                    <h4 class="uppercase"><?php echo e($menu->name); ?> ................ <span>$<?php echo e($menu->price); ?></span></h4>
                    <h5><?php echo e($menu->description); ?></h5>
                </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

			

		</div>
	</div>
</section>


<!-- team section -->
<section id="team" class="parallax-section">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-2 col-md-8 col-sm-12 text-center">
				<h1 class="heading">Meet Zentro chefs</h1>
				<hr>
			</div>
			<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.3s">
				<img src="<?php echo e(asset('zendo_assets/images/team11.jpg')); ?>" class="img-responsive center-block" alt="team img">
				<h4>Thanya</h4>
				<h3>Main Chef</h3>
			</div>
			<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
				<img src="<?php echo e(asset('zendo_assets/images/team22.jpg')); ?>" class="img-responsive center-block" alt="team img">
				<h4>Lynda</h4>
				<h3>Pizza Specialist</h3>
			</div>
			<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.9s">
				<img src="<?php echo e(asset('zendo_assets/images/team33.jpg')); ?>" class="img-responsive center-block" alt="team img">
				<h4>Jenny Ko</h4>
				<h3>New Baker</h3>
			</div>
		</div>
	</div>
</section>


<!-- contact section -->
<section id="contact" class="parallax-section">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-1 col-md-10 col-sm-12 text-center">
				<h1 class="heading">Contact Us</h1>
				<hr>
			</div>
			<div class="col-md-offset-1 col-md-10 col-sm-12 wow fadeIn" data-wow-delay="0.9s">
                <?php if(Session::has('success')): ?>
                    <div class="alert alert-secondary ml-4 mr-4">
                    <?php echo e(Session::get('success')); ?>

                    </div>
                <?php endif; ?>
				<form action="<?php echo e(route('save.contact')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
					<div class="col-md-6 col-sm-6">
						<input name="name" type="text" class="form-control" id="name" placeholder="Name">
                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
				  </div>
					<div class="col-md-6 col-sm-6">
						<input name="email" type="email" class="form-control" id="email" placeholder="Email">
                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
				  </div>
					<div class="col-md-12 col-sm-12">
						<textarea name="message" rows="8" class="form-control" id="message" placeholder="Message"></textarea>
                        <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
					</div>
					<div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6">
						<input name="submit" type="submit" class="form-control" id="submit" value="make a reservation">
					</div>
				</form>
			</div>
			<div class="col-md-2 col-sm-1"></div>
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
<?php /**PATH /Users/apple/Desktop/RESTO-master/resources/views/zendo-welcome.blade.php ENDPATH**/ ?>