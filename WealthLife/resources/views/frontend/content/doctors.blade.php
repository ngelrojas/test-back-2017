<section id="doctor" class="doctor-section"><!-- doctor section start -->
  <div class="container">
    <div class="row">
      <div class="col-md-offset-2 col-md-8 block-title">
        <h1>Meet the Wealth.life Specialists Doctors </h1>
        <p> Lorem ipsum dolor sit amet consectetur adipiscing elit uisquein.</p>
      </div>
    </div>

    <div class="row">

        <div class="list-doctors">
          
            @foreach($doctors as $doctor)
            
                <div class="col-md-4 doctor-profile"> <div class="bg-profile"> <img src="{{ url('/') }}/image/team-3.png" alt=""></div>
                    
                    <h3> <a href="{{ url('doctors')}}/{{ $doctor->id }}">Dr. {{ $doctor->name }}</a> </h3>
                    
                    <strong>{{ $doctor->speciality }}     |      {{ $doctor->telephone }} </strong>
                    
                    <p> {{ $doctor->description }} </p>
                    
                    <div class="social"> <a href="#"><i class="fa fa-facebook-square fa-size"> </i></a> <a href="#"><i class="fa fa-linkedin-square fa-size"> </i> </a> <a href="#"><i class="fa  fa-twitter-square fa-size"> </i> </a> </div>
            
                </div>
            
            @endforeach
            
            <div class="col-xs-12">
            
                {!! $doctors->links() !!}
                
            </div>

        </div>

      
      
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
        <div class="col-md-2"> <img src="{{ url('/') }}/image/men.jpg" class="img-circle client-circle" alt="pic-4"> </div>
        <div class="col-md-4">
          <p> “As a caretaker, I was unfamiliar with how Medicare works. The agent I spoke with helped me determine which plan would be best.” </p>
          <span> - Brandon Feil <a href="#"> ( Patient ) </a> </span>
        </div>

        <div class="col-md-2"> <img src="{{ url('/') }}/image/grl.jpg" class="img-circle client-circle" alt="pic-4"> </div>
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
        <div class="item col-md-3"><img src="{{ url('/') }}/image/logo-3.png" alt="client logo"></div>
        <div class="item col-md-3"><img src="{{ url('/') }}/image/logo-2.png" alt="client logo"></div>
        <div class="item col-md-3"><img src="{{ url('/') }}/image/logo-3.png" alt="client logo"></div>
        <div class="item col-md-3"><img src="{{ url('/') }}/image/logo-2.png" alt="client logo"></div>
        <div class="item col-md-3"><img src="{{ url('/') }}/image/logo-3.png" alt="client logo"></div>
        <div class="item col-md-3"><img src="{{ url('/') }}/image/logo-2.png" alt="client logo"></div>
      </div>
    </div>
  </div><!-- Client close -->
</section><!-- doctor section close -->