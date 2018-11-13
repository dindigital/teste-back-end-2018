@extends('admin.admin')
@section('conteudo_admin')
<div class="col-12">
  <div class="card">
    <div class="card-header">Nova especialidade</div>
    <div class="card-body">


      <form method="POST" action="{{isset($especialidade->id) ? '/admin/especialidades/editar': 'cadastrar'}}" enctype="multipart/form-data"> 
          {{ csrf_field() }}
        @if(isset($especialidade->id))
        {{ method_field('PUT') }}
        <input type="hidden" name='id' value="{{$especialidade->id}}"/>
        @endif
        <div class="form-group row">
          <label for="especialidade" class="col-sm-4 col-form-label text-md-right">Especialidade</label>
          <div class="col-md-6">
            <input id="especialidade" type="text" class="form-control" name="especialidade" value="{{ old('especialidade' , $especialidade->especialidade)}}" required autofocus />
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
