@extends('layout.app', ["current" => "categorias"])

@section('body')
<div class="card border">
    <div class="card-body">
        <h5 class="card-title">Cadastro de Categorias</h5>
        <table class="table table-ordered table-hover" id="tabelaCategorias">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        <button class="btn btn-sm btn-primary" role="button" onClick="novaCategoria()">Nova Categoria</a>
    </div>
</div>
<div class="modal" tabindex="-1" role="dialog" id="dlgCategorias">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form class="form-horizontal" id="formCategoria">
                <div class="modal-header">
                    <h5 class="modal-title">Novo Categoria</h5>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="id" class="form-control">
                    <div class="form-group">
                        <label for="nomeCategoria" class="control-label">Nome do Categoria</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="nomeCategoria" placeholder="Nome do Categoria">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                    <button type="cancel" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('javascript')
<script type="text/javascript">
    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN': "{{csrf_token()}}"
        }
    })
    function novaCategoria() {
        $('#id').val('');
        $('#nomeCategoria').val('');
        // $('#dlgCategorias').modal('show');
        $('#dlgCategorias').show();
    }

    // function buscarCategoria(id){
    //     var nome = '';
    //     $.getJSON('/api/categorias', function(data) {
    //         for(i=0;i<data.length;i++) {
    //             nome = data[i].nome;
    //         }
    //     });
    //     return nome;
    // }

    function montarLinha(c) {
        var linha = "<tr>" +
            "<td>" + c.id + "</td>" +
            "<td>" + c.nome + "</td>" +
            "<td>" +
              '<button class="btn btn-sm btn-primary" onclick="editar(' + c.id + ')"> Editar </button> ' +
              '<button class="btn btn-sm btn-danger" onclick="remover(' + c.id + ')"> Apagar </button> ' +
            "</td>" +
            "</tr>";
        return linha;
    }

    function editar(id) {
        $.getJSON('/api/categorias/'+id, function(data) {
            console.log(data);
            $('#id').val(data.id);
            $('#nomeCategoria').val(data.nome);
            $('#dlgCategorias').show();
        });
    }

    function remover(id) {
        $.ajax({
            type: "DELETE",
            url: "/api/categorias/" + id,
            context: this,
            success: function() {
                console.log('Apagou OK');
                linhas = $("#tabelaCategorias>tbody>tr");
                e = linhas.filter( function(i, elemento) {
                    return elemento.cells[0].textContent == id;
                });
                if (e)
                    e.remove();
            },
            error: function(error) {
                console.log(error);
            }
        });
    }

    function carregarCategorias() {
        $.getJSON('/api/categorias', function(categorias) {
            for(i=0;i<categorias.length;i++) {
                linha = montarLinha(categorias[i]);
                $('#tabelaCategorias>tbody').append(linha);
            }
        });
    }

    function criarCategoria() {
        cat = {
            nome: $("#nomeCategoria").val()
        };
        $.post("/api/categorias", cat, function(data) {
            console.log(data);
            categoria = JSON.parse(data);
            linha = montarLinha(categoria);
            $('#tabelaCategorias>tbody').append(linha);
        });
    }
    function salvarCategoria() {
        categoria = {
            id : $("#id").val(),
            nome: $("#nomeCategoria").val()
        };
        $.ajax({
            type: "PUT",
            url: "/api/categorias/" + categoria.id,
            context: this,
            data: categoria,
            success: function(data) {
                categoria = JSON.parse(data);
                linhas = $("#tabelaCategorias>tbody>tr");
                e = linhas.filter( function(i, e) {
                    return ( e.cells[0].textContent == categoria.id );
                });
                if (e) {
                    e[0].cells[0].textContent = categoria.id;
                    e[0].cells[1].textContent = categoria.nome;
                }
            },
            error: function(error) {
                console.log(error);
            }
        });
    }

    $("#formCategoria").submit( function(event){
        event.preventDefault();
        if ($("#id").val() != '')
            salvarCategoria();
        else
            criarCategoria();

        $("#dlgCategorias").hide();
    });

    $(function(){
        carregarCategorias();
    })

</script>
@endsection
