@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
  <div class="col-3">
      
     <div class="list-group">
   
    <a href="/admin/especialidades" class="list-group-item "><i class="fa fa-key"></i> <span>Especialidades</span></a>
    <a href="/admin/medicos" class="list-group-item "><i class="fa fa-key"></i> <span>Cadastro de médicos</span></a>
    <a href="/admin/contato" class="list-group-item"><i class="fa fa-credit-card"></i> <span>Contatos</span></a>
  
  </div>


  </div>
  <div class="col-9">
      @yield('conteudo_admin')
  </div>
</div>

  
</div>
@endsection
