@extends('layouts.theme')

@section('title')
    Wealth.life | Medical Landing Page Template
@endsection

@section('content')

    @include('frontend.header.menu')

    <section id="about" class="about-section"><!-- about start -->
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <h1>Formulário encaminhado com sucesso</h1>
        <p class="lead"> Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Various versions have evolved over the years, sometimes on purpose </p>      
      </div>
      <div class="col-xs-12">
          <a href="{{ url('/') }}" class="btn btn-default">Wealth life</a>
      </div>
    </div>
  </div>
</section>

    @include('frontend.footer.footer')

@endsection

@section('javascript')
    <script>

        $("#owl-demo").owlCarousel({

            autoPlay: 3000, //Set AutoPlay to 3 seconds

            items : 4,

            itemsDesktop : [1199,3],
            
            itemsDesktopSmall : [979,3]
        });

    </script>

@endsection