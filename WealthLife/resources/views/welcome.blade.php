@extends('layouts.theme')

@section('title')
    Wealth.life | Medical Landing Page Template
@endsection

@section('content')

    @include('frontend.header.menu')

    @include('frontend.header.slider')

    @include('frontend.content.about')

    @include('frontend.content.services')

    @include('frontend.content.doctors')

    @include('frontend.content.contacts')

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

        $('.pagination li a').click(function(e){

            e.preventDefault();

            var page = $(this).attr('href').split('page=')[1];

            var route = $(this).attr('href');

            $.ajax({

                url:route,

                data:{page:page},

                type:'GET',

                dataType:'json',

                success: function(data){

                    $('.list-doctors').html(data);
                }
            })

        });
    </script>

@endsection