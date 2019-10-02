<?php $__env->startSection('titulo', 'opções'); ?>
<?php $__env->startSection('conteudo'); ?>
<div class="options">
    <ul>
    <li><a class="warning" href="<?php echo e(route('opcoes.index', ['opcao'=>1])); ?>">warning</a></li>
        <li><a class="info" href="<?php echo e(route('opcoes.index', ['opcao'=>2])); ?>">info</a></li>
        <li><a class="success" href="<?php echo e(route('opcoes.index', ['opcao'=>3])); ?>">success</a></li>
        <li><a class="error" href="<?php echo e(route('opcoes.index', ['opcao'=>4])); ?>">error</a></li>
    </ul>   
</div>
<?php if(isset($_GET['opcao'])): ?>
  <?php switch($_GET['opcao']):
      case (1): ?>            
            <?php $__env->startComponent('components.alerta', ['titulo' => 'Erro Fatal', 'tipo' => 'warning']); ?>
            <p><strong>Erro inesperado</strong></p>    
            <p>Ocorreu um erro inesperado</p>
            <?php echo $__env->renderComponent(); ?>          
          <?php break; ?>
      <?php case (2): ?>
            <?php $__env->startComponent('components.alerta', ['titulo' => 'Erro Fatal', 'tipo' => 'info']); ?>
            <p><strong>Erro inesperado</strong></p>    
            <p>Ocorreu um erro inesperado</p>
            <?php echo $__env->renderComponent(); ?>          
            <?php break; ?>
      <?php case (3): ?>
            <?php $__env->startComponent('components.alerta', ['titulo' => 'Erro Fatal', 'tipo' => 'success']); ?>
            <p><strong>Erro inesperado</strong></p>    
            <p>Ocorreu um erro inesperado</p>
            <?php echo $__env->renderComponent(); ?>          
            <?php break; ?>
      <?php case (4): ?>
            <?php $__env->startComponent('components.alerta', ['titulo' => 'Erro Fatal', 'tipo' => 'error']); ?>
            <p><strong>Erro inesperado</strong></p>    
            <p>Ocorreu um erro inesperado</p>
            <?php echo $__env->renderComponent(); ?>          
            <?php break; ?>                    
  <?php endswitch; ?>    
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.principal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/edson/projetos/teste/resources/views/opcoes/index.blade.php ENDPATH**/ ?>