<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<link rel="stylesheet" href="<?php echo e(asset('css/principal.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('css/estilo.css')); ?>">
<title>Sistema Laravel - <?php echo $__env->yieldContent('titulo'); ?></title>
</head>
<body>
    <div class="row">
        <div class="col1">
            <div class="menu">            
                <ul>
                    <li><a class="<?php echo e(request()->routeIs('clientes.*') ? 'active' : ''); ?>" href="<?php echo e(route('clientes.index')); ?>">Clientes</a></li>
                    <li><a class="<?php echo e(request()->routeIs('produtos.*') ? 'active' : ''); ?>" href="<?php echo e(route('produtos.index')); ?>">Produtos</a></li>
                    <li><a class="<?php echo e(request()->routeIs('deptos.*') ? 'active' : ''); ?>" href="<?php echo e(route('deptos.index')); ?>">Departamentos</a></li>                                        
                    <li><a class="<?php echo e(request()->routeIs('opcoes.*') ? 'active' : ''); ?>" href="<?php echo e(route('opcoes.index')); ?>">Opções</a></li>
                </ul>
            </div>
        </div>
        <div class="col2">
            <?php echo $__env->yieldContent('conteudo'); ?>
        </div>
    </div>    
</body>
</html><?php /**PATH /home/edson/projetos/teste/resources/views/layouts/principal.blade.php ENDPATH**/ ?>