@foreach($doctors as $doctor)

    <div class="col-md-4 doctor-profile"> <div class="bg-profile"> <img src="{{ url('/') }}/image/team-3.png" alt=""></div>
        
        <h3> <a href="{{ url('/')}}/{{ $doctor->id }}">Dr. {{ $doctor->name }}</a> </h3>
        
        <strong>{{ $doctor->speciality }}     |      {{ $docotr->telephone }} </strong>
        
        <p> {{ $doctor->description }} </p>
        
        <div class="social"> <a href="#"><i class="fa fa-facebook-square fa-size"> </i></a> <a href="#"><i class="fa fa-linkedin-square fa-size"> </i> </a> <a href="#"><i class="fa  fa-twitter-square fa-size"> </i> </a> </div>
   
    </div>

@endforeach

<div class="col-xs-12">

    {!! $doctors->links() !!}
    
</div>