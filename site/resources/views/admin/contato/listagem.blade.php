@extends('admin.admin')
@section('conteudo_admin')
<div class="container">
  <h2>Lista de contatos</h2>
  <p><a href="medicos/cadastrar">Novo médico</a></p>            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Telefone</th>
      </tr>
    </thead>
    <tbody>
      @foreach($contatos as $contato)
      <tr>
        <td>{{$contato->nome}}</td>
        <td>{{$contato->email}}</td>
        <td>{{$contato->telefone}}</td>
      </tr>
     @endforeach
    </tbody>
  </table>
</div>
@endsection
