@extends('admin.admin')
@section('conteudo_admin')
<div class="col-12">
  <div class="card">
    <div class="card-header">Nova especialidade</div>
    <div class="card-body">


      <form method="POST" action="cadastrar" enctype="multipart/form-data"> 
        @csrf
        <div class="form-group row">
          <label for="especialidade" class="col-sm-4 col-form-label text-md-right">Especialidade</label>
          <div class="col-md-6">
            <input id="especialidade" type="text" class="form-control" name="especialidade" value="{{isset($especialidade) ? $especialidade : '' }}" required autofocus />
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
