<?php $__env->startSection('titulo', 'lista de clientes'); ?>
<?php $__env->startSection('conteudo'); ?>
<h3>Informações do Cliente</h3>
<p>ID: <?php echo e($cliente['id']); ?></p>
<p>Nome: <?php echo e($cliente['nome']); ?></p>
<br>

<a href="<?php echo e(route('clientes.index')); ?>">Voltar</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.principal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/edson/projetos/teste/resources/views/clientes/info.blade.php ENDPATH**/ ?>