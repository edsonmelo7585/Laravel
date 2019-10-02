<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('css/estilo    .css')); ?>">
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<title>Cadastro de Produtos</title>
</head>
<body>        
    <div class="container">
        <?php $__env->startComponent('components.componente_navbar'); ?>        
        <?php echo $__env->renderComponent(); ?>                    
        <main role="main">
            <?php if (! empty(trim($__env->yieldContent('body')))): ?>                       
                <?php echo $__env->yieldContent('body'); ?>
            <?php endif; ?>
        </main>
    </div>
    <script src="<?php echo e(asset('js/app.js')); ?>" type="text/javascript"></script>
</body>
</html><?php /**PATH /home/edson/projetos/cadastro/resources/views/layouts/app.blade.php ENDPATH**/ ?>