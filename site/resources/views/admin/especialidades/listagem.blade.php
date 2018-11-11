@extends('admin.admin')
@section('conteudo_admin')
<div class="container">
  <h2>Especialidades</h2>
  <p><a href="especialidades/cadastrar">Nova especialidade</a></p>            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Especialidade</th>
      </tr>
    </thead>
    <tbody>
     @foreach($especialidades as $especialidade)
     <tr>
      <td>{{$especialidade->especialidade}}</td>
    </tr>
     @endforeach
    </tbody>
  </table>
</div>
@endsection
