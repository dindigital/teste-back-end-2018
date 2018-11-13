@extends('admin.admin')
@section('conteudo_admin')
<div class="col-12">
  <div class="card">
    <div class="card-header">Novo médico</div>
    <div class="card-body">


      <form method="POST" action="{{isset($medico->id) ? '/admin/medicos/editar': 'cadastrar'}}" enctype="multipart/form-data"> 
      
    {{ csrf_field() }}
        @if(isset($medico->id))
 {{ method_field('PUT') }}
        <input type="hidden" name='id' value="{{$medico->id}}"/>
        @endif
        <div class="form-group row">
          <label for="nome" class="col-sm-4 col-form-label text-md-right">Nome</label>
          <div class="col-md-6">
            <input id="nome" type="text" class="form-control" name="nome" value="{{ old('nome' , $medico->nome) }}" required autofocus />
          </div>
        </div>

        <div class="form-group row">
          <label for="celular" class="col-sm-4 col-form-label text-md-right">Celular</label>
          <div class="col-md-6">
            <input id="celular" type="text" class="form-control" name="celular" value="{{ old('celular' , $medico->celular) }}" required />
          </div>
        </div>

        <div class="form-group row">
          <label for="celular" class="col-sm-4 col-form-label text-md-right">Descrição</label>
          <div class="col-md-6">
            <textarea name='descricao' required>{{ old('descricao' , $medico->descricao) }}</textarea>
          </div>
        </div>


        <div class="form-group row">
          <label for="price" class="col-md-4 col-form-label text-md-right">Especialidade</label>
          <div class="col-md-6">

           <select name="especialidade" class="form-control" required>
            <option value="">--Escolha--</option>
            @foreach($especialidades as $esp)
            <option value="{{$esp->id}}" {{ old('especialidade', $medico->especialidade)  == $esp->id ? 'selected' : ''}}>{{$esp->especialidade}}</option>
            @endforeach
          </select>

        </div>
      </div>
      <div class="form-group row">
        <label for="price" class="col-md-4 col-form-label text-md-right">Foto do médico</label>
        <div class="col-md-6">
         <input type="file" name="image" value="{{$medico->foto}}">
         @if(isset($medico->foto))
         <img src="{{ url("storage/{$medico->foto}") }}" class='img-thumbnail' width="90" alt="{{ $medico->nome }}">
         @endif
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
 
    @if(isset($erroFoto))
    
      <div class="alert alert-danger">
          {{$erroFoto}}        </div>
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
