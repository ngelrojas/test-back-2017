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
        <h3> Make an appointment today </h3>
        @include('frontend.content.partials.errors')
          <form role="form" action="{{ url('/patients') }}" method="POST">
              <input type="hidden" value="{{ csrf_token() }}" name="_token">
            <div class="form-group">
              <label for="exampleInputName">Name</label>
              <input type="text" class="form-control" name="app_name" id="app_name" placeholder="Name" required>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">E-mail</label>
              <input type="email" class="form-control" name="app_email" id="app_email" placeholder="E-mail" required>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Phone</label>
              <input type="text" class="form-control" name="app_phone" id="app_phone" placeholder="Phone" required>
            </div>
            <button type="submit" class="btn btn-block btn-orange btn-Submit">SUBMIT</button>
            <small id="mail_msg"></small>
          </form>
         
        </div>
      </div>
    </div>
  </div>
</section>