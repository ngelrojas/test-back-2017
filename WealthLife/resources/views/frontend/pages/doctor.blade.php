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

                        <h1>{{ $adoctor->name }}</h1>

                        <h1>{{ $adoctor->speciality }}</h1>

                        <p class="lead">{{ $adoctor->description }}</p>    

                    </div>

                </div>

                <div class="col-xs-12">

                    <a href="{{ url('/') }}">Doctors</a>

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