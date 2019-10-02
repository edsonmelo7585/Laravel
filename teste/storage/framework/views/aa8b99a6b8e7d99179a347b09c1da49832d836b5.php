<h3>Clientes:</h3>
<ol>
    <?php $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($c['nome']); ?></li>        
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ol> <?php /**PATH /home/edson/projetos/teste/resources/views/Clientes/index.blade.php ENDPATH**/ ?>