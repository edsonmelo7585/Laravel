<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/">Base Software</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#textoNavbar" aria-controls="textoNavbar" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="textoNavbar">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(Página atual)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('produtos.index')); ?>">Produtos</a>                                
                
            </li>
            <li class="nav-item">                
                <a class="nav-link" href="<?php echo e(route('categorias.index')); ?>">Categorias</a>                
                
            </li>
            </ul>
            <span class="navbar-text">
            Texto navbar com um elemento inline
            </span>
        </div>
    </nav>
</header><?php /**PATH /home/edson/projetos/cadastro/resources/views/components/componente_navbar.blade.php ENDPATH**/ ?>