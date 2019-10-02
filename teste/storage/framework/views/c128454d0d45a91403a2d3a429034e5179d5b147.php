<?php $__env->startSection('titulo', 'editar clientes'); ?>
<?php $__env->startSection('conteudo'); ?>
<h3>Editar Cliente</h3>
<form action="<?php echo e(route('clientes.update', $cliente['id'])); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <input type="text" name="nome" value="<?php echo e($cliente['nome']); ?>">
    <input type="submit" value="salvar">
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.principal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/edson/projetos/teste/resources/views/clientes/edit.blade.php ENDPATH**/ ?>