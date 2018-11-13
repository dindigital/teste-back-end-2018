@extends('site.layouts.principal');
@section('conteudo')
<section id="intro" class="intro-section"><!-- intro start -->
  <div class="container">
    <div class="row">
      <div class="col-md-5 intro-caption">
        <h1 class="intro-title">{{$medicoAleatorio->nome}} <br>
           <span>{{$medicoAleatorio->especialidadeMedico->especialidade}}</span> </h1>
        <p>{{$medicoAleatorio->descricao}}</p>
        <div class="page-scroll"> <a class="btn btn-default btn-orange" href="#about">MAKE AN APPOINTMENT</a> </div>
        <br>
        <p>  </p>
        <h1 class="call-num"> {{$medicoAleatorio->telefone}}</h1>
      </div>
      <div class="col-md-7"> <img src="{{ url("storage/{$medicoAleatorio->foto}") }}" class="img-responsive" alt="doctor"> </div>
    </div>
  </div>
</section>
<!-- intro close -->
<section id="about" class="about-section"><!-- about start -->
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <h1>We offer a no obligation a free initial consultation</h1>
        <p class="lead"> Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Various versions have evolved over the years, sometimes on purpose </p>
        <div class="row block">
          <div class="col-md-6">
            <h3>Cardio Monitoring</h3>
            <p>Nullam mo  arcu ac molestie scelerisqu vulputate molestie mpus ipsum.</p>
          </div>
          <div class="col-md-6">
            <h3>Medical Treatment</h3>
            <p>Various versions have evolved over the years, sometimes by accident .</p>
          </div>
      </div>
      <div class="row">
          <div class="col-md-6">
            <h3>Qualified Doctors</h3>
            <p>Nullam mo  arcu ac molestie scelerisqu vulputate molestie mpus ipsum.</p>
          </div>
          <div class="col-md-6">
            <h3>Emergency Help</h3>
            <p><strong>1-800-700-6200 - </strong> Plestie scelerisqu vulputate molestie ligula gravida .</p>
          </div>
      </div>
      </div>
      
      
      <div class="col-md-offset-1 col-md-4">
        <div class="appoinment-form">
        <h3> Marque sua consulta </h3>
              <form role="form" method="POST" action="/contato">
              @csrf
            <div class="form-group">
              <label for="nome">Nome</label>
              <input type="text" class="form-control" name='nome' id="nome" placeholder="Nome" required>
            </div>
            <div class="form-group">
              <label for="email">E-mail</label>
              <input type="email" class="form-control" name='email'i d="email" placeholder="E-mail" required>
            </div>
            <div class="form-group">
              <label for="telefone">Telefone</label>
              <input type="text" class="form-control" name='telefone' id="telefone" placeholder="Telefone">
            </div>
            <button type="submit" class="btn btn-block btn-orange btn-Submit">Enviar</button>
            <small id="mail_msg"></small>
          </form>
         
        </div>
      </div>
    </div>
  </div>
</section>
<!-- about close -->
<section id="services" class="services-section"><!-- service start -->
  <div class="container">
    <div class="row">
      <div class="col-md-offset-2 col-md-8 block-title">
        <h1> Awesome landing page for Medical and Health</h1>
        <p>wealth.life was created to offer a perfect solution for medical  landing page.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6  block">
        <div class="row">
      <div class="col-md-4 box-icon"> <i class="fa fa-building-o fa-4x"> </i> </div>
      <div class="col-md-8 box-ct">
        <h3> Great Infrastructure </h3>
        <p> Lorem ipsum dolor sit ametconsectetur adipiscing elit. Suspendisse orci quam. </p></div>
      </div>
      </div>
      <div class="col-md-6 block">
        <div class="row">
      <div class="col-md-4 box-icon"> <i class="fa fa-heart fa-4x"> </i> </div>
      <div class="col-md-8 box-ct">
        <h3> No Extra Fees </h3>
        <p> Nullam mo  arcu ac molestie scelerisqu vulputate, molestie ligula gravida, tempus ipsum.</p> </div>
      </div>
      </div>
      </div>
      <div class="row">
      <div class="col-md-6 block">
        <div class="row">
      <div class="col-md-4 box-icon"> <i class="fa  fa-user-md  fa-4x"> </i> </div>
      <div class="col-md-8 box-ct">
        <h3> Health care solutions </h3>
        <p> Donec vitae enim nec augue eleifend tempor eget non ligula. </p> </div>
      </div>
      </div>
      <div class="col-md-6 block">
        <div class="row">
      <div class="col-md-4 box-icon"> <i class="fa fa-ambulance fa-4x"> </i> </div>
      <div class="col-md-8 box-ct">
        <h3> 24/7 Ambulance Services </h3>
        <p> <strong>1-800-700-6200 -</strong> Plestie scelerisqu vulputate, molestie ligula gravida,  </p> </div>
      </div>
      </div>
      </div>
  </div>
</section>
<!-- service close -->
<section id="doctor" class="doctor-section"><!-- doctor section start -->
  <div class="container">
    <div class="row">
      <div class="col-md-offset-2 col-md-8 block-title">
        <h1>Meet the Wealth.life Specialists Doctors </h1>
        <p> Lorem ipsum dolor sit amet consectetur adipiscing elit uisquein.</p>
      </div>
    </div>
    <div class="row">
      @if(count($medicos) > 0 )
      @foreach($medicos as $medico)
      <div class="col-md-4 doctor-profile">
      <div class="bg-profile"><a href="medico/{{$medico->id}}"><img src="{{ url("storage/{$medico->foto}") }}"  width="200" class='img-responsive' alt=""></a></div>
        <h3><a href="medico/{{$medico->id}}">{{ $medico->nome }}</a></h3>
        <strong>{{ $medico->especialidadeMedico->especialidade }}    |    {{$medico->celular}}</strong>
        <p> {{$medico->descricao}}</p>
            {{--     <div class="social"> <a href="#"><i class="fa fa-facebook-square fa-size"> </i></a> <a href="#"><i class="fa fa-linkedin-square fa-size"> </i> </a> <a href="#"><i class="fa  fa-twitter-square fa-size"> </i> </a> </div>
 --}}      </div>
     @endforeach
      @endif
      
    </div>
  </div>
  <div class="testimonials"><!-- Testimonials start -->
    <div class="container">
      <div class="row">
        <div class="col-md-offset-2 col-md-8 block-title">
          <h1> What Customers are Saying about wealth.life </h1>
          <p> Lorem ipsum dolor sit amet consectetur adipiscing elit </p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2"> <img src="image/men.jpg" class="img-circle client-circle" alt="pic-4"> </div>
        <div class="col-md-4">
          <p> “As a caretaker, I was unfamiliar with how Medicare works. The agent I spoke with helped me determine which plan would be best.” </p>
          <span> - Brandon Feil <a href="#"> ( Patient ) </a> </span>
        </div>
        <div class="col-md-2"> <img src="image/grl.jpg" class="img-circle client-circle" alt="pic-4"> </div>
        <div class="col-md-4">
          <p> “As a caretaker, I was unfamiliar with how Medicare works. The agent I spoke with helped me determine which plan would be best.”</p>
          <span> - Kiley Ellis <a href="#"> ( Patient ) </a> </span>
        </div>
      </div>
    </div>
  </div><!-- Testimonials close -->
  <div class="container client"><!-- Client start -->
    <div class="row text-center">
      <div class="col-md-offset-2 col-md-8">
        <h1> We trusted by thousand of client </h1>
        <p> Lorem ipsum dolor sit amet consectetur adipiscing elit </p>
      </div>
    </div>
    <div class="row">
      <div id="owl-demo" class="client-logo">
        <div class="item col-md-3"><img src="image/logo-3.png" alt="client logo"></div>
        <div class="item col-md-3"><img src="image/logo-2.png" alt="client logo"></div>
        <div class="item col-md-3"><img src="image/logo-3.png" alt="client logo"></div>
        <div class="item col-md-3"><img src="image/logo-2.png" alt="client logo"></div>
        <div class="item col-md-3"><img src="image/logo-3.png" alt="client logo"></div>
        <div class="item col-md-3"><img src="image/logo-2.png" alt="client logo"></div>
      </div>
    </div>
  </div><!-- Client close -->
</section><!-- doctor section close -->
<section id="contact" class="contact-section"><!-- contact section start -->
  <div class="contact">
    <div class="container">
      <div class="row">
        <div class="col-md-offset-2 col-md-8 text-center">
          <h1> We offer a no obligation a free initial consultation </h1>
          <p> Lorem ipsum dolor sit amet consectetur adipiscing elit uisque interdum ante eget faucibus mattistortor felis euismod nisl. </p>
          <div class="page-scroll"><a href="#about" class="btn btn-default btn-orange"> MAKE AN APPOINTMENT</a></div>
        </div>
      </div>
    </div>
    <div class="container ct-block text-center">
      <div class="row">
        <div class="col-md-4 green-icon"> <i class="fa fa-ambulance fa-4x"> </i>
          <h3> Fast Consultation &amp; Service </h3>
          <p> Lorem ipsum doloonsectetur adipiscing elit uisttistortor felis euismod nisl. </p>
        </div>
        <div class="col-md-4 green-icon"> <i class="fa fa-headphones fa-4x"> </i>
          <h3> Fast Consultation &amp; Service </h3>
          <p> Nulla rutrum nibh eu libero vestibulum, suscipit posuere ipsum cursus. </p>
        </div>
        <div class="col-md-4 green-icon"> <i class="fa fa-comments fa-4x"> </i>
          <h3> Fast Consultation  &amp; Service </h3>
          <p> Quisque sit amet augue tincidunt, volutpat nulla in, dapibus diam volutpat nulla in. </p>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row ct-info">
        <div class="col-md-4">
          <h3> 1-800-643-4500 </h3>
        </div>
        <div class="col-md-8">
          <h3> Opening Hours : Monday to Saturday - 8am to 9pm </h3>
        </div>
      </div>
    </div>
  </div>

</section><!-- contact section close -->
@endsection