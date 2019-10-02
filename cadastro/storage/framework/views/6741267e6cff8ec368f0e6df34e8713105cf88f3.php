<?php $__env->startSection('body'); ?>
<div class="container">
    <div class="card-deck mb-3 text-center">
        <div class="card mb-4 shadow-sm">
        <div class="card-header">
            <h4 class="my-0 font-weight-normal">Cadastro de produtos</h4>
        </div>
        <div class="card-body">
            
            <p class="card-text">Aqui você cadastra todos os seus produtos.
                Só não esqueça de cadastrar previamente as categorias.
            </p>
            <button type="button" class="btn btn-lg btn-block btn-primary">Cadastre seus produtos</button>
        </div>
        </div>    
        <div class="card mb-4 shadow-sm">
        <div class="card-header">
            <h4 class="my-0 font-weight-normal">Cadastro de Categorias</h4>
        </div>
        <div class="card-body">
            
            <p class="card-text">Cadastre as categorias dos seus produtos.
            </p>
            <button type="button" class="btn btn-lg btn-block btn-primary">Cadastre seus categorias</button>
        </div>
        </div>
    </div>    
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/edson/projetos/cadastro/resources/views/index.blade.php ENDPATH**/ ?>