<?php $__env->startSection('content'); ?>
<div class="wrapper create-pizza">
  <h1>Create a New Pizza</h1>
  <form action="<?php echo e(route('pizzas.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <label for="name">Your name:</label>
    <input type="text" name="name" id="name" required>
    <label for="type">Choose type of pizza:</label>
    <select name="type" id="type">
      <option value="margarita">Margarita</option>
      <option value="hawaiian">Hawaiian</option>
      <option value="veg supreme">Veg Supreme</option>
      <option value="volcano">Volcano</option>
    </select>
    <label for="base">Choose crust:</label>
    <select name="base" id="base">
      <option value="thick">Thick</option>
      <option value="thin & crispy">Thin & Crispy</option>
      <option value="cheese crust">Cheese Crust</option>
      <option value="garlic crust">Garlic Crust</option>
    </select>
    <fieldset>
      <label>Extra toppings:</label>
      <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms<br />
      <input type="checkbox" name="toppings[]" value="peppers">Peppers<br />
      <input type="checkbox" name="toppings[]" value="garlic">Garlic<br />
      <input type="checkbox" name="toppings[]" value="olives">Olives<br />
    </fieldset>
    <input type="submit" value="Order Pizza">
  </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\{}{}{}{}{}{}{}{}{}\LESSONSS\Courses + Projects\Learn Courses\Laravel\laravel-beginners-tutorial-lesson-29\pizzahouse\resources\views/pizzas/create.blade.php ENDPATH**/ ?>