<?php $__env->startSection('titulo', 'produtos'); ?>
<?php $__env->startSection('conteudo'); ?>
<h3>Produtos</h3>
<ul>
    <?php for($i=0;$i<4;$i++): ?>
        <li><?php echo e($i); ?></li>
    <?php endfor; ?>
    <li>PC</li>
    <li>Mouse</li>
    <li>Notebook</li>
    <li>Camisa Polo</li>
</ul>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.principal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/edson/projetos/teste/resources/views/produtos/index.blade.php ENDPATH**/ ?>