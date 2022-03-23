<?php $__env->startSection('content'); ?>
<div class="wrapper pizza-details">
  <h1>Order for <?php echo e($pizza->name); ?></h1>
  <p class="type">Type - <?php echo e($pizza->type); ?></p>
  <p class="base">Base - <?php echo e($pizza->base); ?></p>
  <p class="toppings">Extra toppings:</p>
  <ul>
    <?php $__currentLoopData = $pizza->toppings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $topping): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <li><?php echo e($topping); ?></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </ul>
  <form action="<?php echo e(route('pizzas.destroy', $pizza->id)); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('DELETE'); ?>
    <button>Complete Order</button>
  </form>
</div>
<a href="<?php echo e(route('pizzas.index')); ?>" class="back"><- Back to all pizzas</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\{}{}{}{}{}{}{}{}{}\LESSONSS\Courses + Projects\Learn Courses\Laravel\laravel-beginners-tutorial-lesson-29\pizzahouse\resources\views/pizzas/show.blade.php ENDPATH**/ ?>