@extends('layout.app', ["current" => "produtos"])

@section('body')
<div >
<form>
    <hr>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="nomeProduto">Nome Produto</label>
            <input type="text" class="form-control" id="nomeProduto" placeholder="Produto">
          </div>
         <div class="form-group col-md-2">
                <label for="Preco">Preço</label>
                <input type="text" class="form-control" id="Preco" placeholder="R$">
          </div>
        <div class="form-group col-md-2">
                    <label for="Quantidade">Quantidade</label>
                    <input type="text" class="form-control" id="Quantidade" placeholder="QTD">
        </div>
         <div class="form-group col-md-4">
            <label for="inputEstado">Categoria:</label>
                @if(count($cats) > 0)
                  <div class="col-auto my-1">
                  <select class="custom-select mr-sm-2" id="cate">
                   <option selected>Categorias</option>
                    @foreach($cats as $cat)
                         <option value={{$cat->id}}>{{$cat->nome}}</option>
                    @endforeach
                </select>
                  </div>
            </div>
                @endif
          </div>
          <div>
              <a href="/produtos" class="btn btn-sm btn-primary" role="button">Salvar</a>
         </div>
     </div>
    </div>
    <hr>
</form>
</div>
@endsection