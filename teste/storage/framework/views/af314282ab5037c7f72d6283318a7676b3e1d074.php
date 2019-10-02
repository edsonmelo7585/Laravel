<?php $__env->startSection('titulo', 'departamentos'); ?>
<?php $__env->startSection('conteudo'); ?>
<h3>Departamentos</h3>
<ul>
    <li>Computadores</li>
    <li>Eletrônicos</li>
    <li>Acessórios</li>
    <li>Roupas</li>
</ul>

<?php $__env->startComponent('components.alerta', ['titulo' => 'Erro Fatal', 'tipo' => 'info']); ?>
<p><strong>Erro inesperado</strong></p>    
<p>Ocorreu um erro inesperado</p>
<?php echo $__env->renderComponent(); ?>
<?php $__env->startComponent('components.alerta', ['titulo' => 'Erro Fatal', 'tipo' => 'error']); ?>
<p><strong>Erro inesperado</strong></p>    
<p>Ocorreu um erro inesperado</p>
<?php echo $__env->renderComponent(); ?>
<?php $__env->startComponent('components.alerta', ['titulo' => 'Erro Fatal', 'tipo' => 'success']); ?>
<p><strong>Erro inesperado</strong></p>    
<p>Ocorreu um erro inesperado</p>
<?php echo $__env->renderComponent(); ?>
<?php $__env->startComponent('components.alerta', ['titulo' => 'Erro Fatal', 'tipo' => 'warning']); ?>
<p><strong>Erro inesperado</strong></p>    
<p>Ocorreu um erro inesperado</p>
<?php echo $__env->renderComponent(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.principal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/edson/projetos/teste/resources/views/deptos/index.blade.php ENDPATH**/ ?>