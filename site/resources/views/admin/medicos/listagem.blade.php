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
      </tr>
    </thead>
    <tbody>
      @foreach($medicos as $medico)
      <tr>
        <td><img src="{{ url("storage/{$medico->foto}") }}" class='img-thumbnail' width="90" alt="{{ $medico->nome }}"></td>
        <td>{{$medico->nome}}</td>
        <td>{{$medico->especialidadeMedico->especialidade}}</td>
      </tr>
     @endforeach
    </tbody>
  </table>
</div>
@endsection
