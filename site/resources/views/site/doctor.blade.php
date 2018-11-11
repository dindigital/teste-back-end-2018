@extends('site.layouts.principal')
@section('conteudo')
<section id="about" class="about-section"><!-- about start -->
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <img src="{{ url("storage/{$medico->foto}") }}"  width="200" class='img-responsive' alt="">
        <h1>{{$medico->nome}}</h1>
        <h1>{{$medico->especialidadeMedico->especialidade}}</h1>
        <p class="lead">{{$medico->descricao}}</p>      
      </div>
    </div>
  <h1><a href="/">Voltar</a></h1>
  </div>
</section>
@endsection