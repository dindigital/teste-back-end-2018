@extends('admin.admin')
@section('conteudo_admin')
<div class="container">
  <h2>Lista de médicos</h2>
  <p><a href="medicos/cadastrar">Novo médico</a></p>            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Foto</th>
        <th>Nome</th>
        <th>Especialidade</th>
        <th>#</th>
      </tr>
    </thead>
    <tbody>
      @foreach($medicos as $medico)
      <tr>
        <td><a href="medicos/editar/{{$medico->id}}"><img src="{{ url("storage/{$medico->foto}") }}" class='img-thumbnail' width="90" alt="{{ $medico->nome }}"></a></td>
        <td>{{$medico->nome}}</td>
        <td>{{$medico->especialidadeMedico->especialidade}}</td>
        <td><a href="javascript:void(0)"  class="excluir_medico" data-medico="{{$medico->id}}"><i class="fa fa-trash"></i></a></td>
      </tr>
     @endforeach
    </tbody>
  </table>
</div>
@endsection
