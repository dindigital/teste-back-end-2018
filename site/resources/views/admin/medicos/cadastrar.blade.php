@extends('admin.admin')
@section('conteudo_admin')
<div class="col-12">
  <div class="card">
    <div class="card-header">Novo médico</div>
    <div class="card-body">


      <form method="POST" action="cadastrar" enctype="multipart/form-data"> 
        @csrf
        <div class="form-group row">
          <label for="nome" class="col-sm-4 col-form-label text-md-right">Nome</label>
          <div class="col-md-6">
            <input id="nome" type="text" class="form-control" name="nome" value="{{ old('nome') }}" required autofocus />
          </div>
        </div>

        <div class="form-group row">
          <label for="celular" class="col-sm-4 col-form-label text-md-right">Celular</label>
          <div class="col-md-6">
            <input id="celular" type="text" class="form-control" name="celular" value="{{ old('celular') }}" required />
          </div>
        </div>

        <div class="form-group row">
          <label for="celular" class="col-sm-4 col-form-label text-md-right">Descrição</label>
          <div class="col-md-6">
            <textarea name='descricao' required>{{ old('descricao') }}</textarea>
          </div>
        </div>


        <div class="form-group row">
          <label for="price" class="col-md-4 col-form-label text-md-right">Especialidade</label>
          <div class="col-md-6">

           <select name="especialidade" class="form-control" required>
            <option value="">--Escolha--</option>
            @foreach($especialidades as $esp)
            <option value="{{$esp->id}}" {{ old('especialidade')  == $esp->id ? 'selected' : ''}}>{{$esp->especialidade}}</option>
            @endforeach
          </select>

        </div>
      </div>
      <div class="form-group row">
        <label for="price" class="col-md-4 col-form-label text-md-right">Foto do médico</label>
        <div class="col-md-6">
         <input type="file" name="image">
       </div>
     </div>
          @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

     <div class="form-group row mb-0">
      <div class="col-md-8 offset-md-4">
        <button type="submit" class="btn btn-primary">
         Salvar
       </button>
     </div>
   </div>
 </form>
</div>
</div>

</div>
@endsection
