@extends('admin.admin')
@section('conteudo_admin')
<div class="container">
  <h2>Especialidades</h2>
  <p><a href="especialidades/cadastrar">Nova especialidade</a></p>            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Especialidade</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
     @foreach($especialidades as $especialidade)
     <tr>
      <td><a href="especialidades/editar/{{$especialidade->id}}">{{$especialidade->especialidade}}</a></td>
      <td><a href="javascript:void(0)"  class="excluir_especialidade" data-especialidade="{{$especialidade->id}}"><i class="fa fa-trash"></i></a></td>
    </tr>
     @endforeach
    </tbody>
  </table>
</div>
@endsection