@extends('layout.main')

@section('content')

<!-- contact -->
<div class="appointment py-5">
  <div class="py-xl-5 py-lg-3">
    <div class="w3ls-titles text-center mb-5">
      <h3 class="title">Appointment</h3>
      <span>
        <i class="fas fa-user-md"></i>
      </span>
      <p class="mt-2">You can also contact us directly by calling +254 702 617 960</p>
    </div>
    <div class="d-flex">
      <div class="appoint-img">

      </div>
      <div class="contact-right-w3l appoint-form">
        <h5 class="title-w3 text-center mb-5">Fill your appointment form</h5>
        @include('inc.messages')
        <form action="/appointment" method="post">
          {{csrf_field()}}
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Your Name</label>
            <input type="text" class="form-control" placeholder="Your Name " name="name" id="recipient-name" required="">
          </div>
          <div class="form-group">
            <label for="recipient-phone" class="col-form-label">Your Email</label>
            <input type="email" class="form-control" placeholder="Your Email" name="email" id="recipient-phone" required="">
          </div>

          <div class="form-group">
            <label for="datepicker" class="col-form-label">Select appointment date</label>
            <input placeholder="Date" class="date form-control" name="tarehe" id="datepicker" type="text" value="" onfocus="this.value = '';"
                onblur="if (this.value == '') {this.value = '';}" required="" />
          </div>
          <div class="form-group">
            <label for="datepicker" class="col-form-label">Select appointment time</label>
            <select name="time" required="" class="form-control">
              <option value="">Select Time</option>
              <option value="1">08:00-11:30</option>
              <option value="2">14:30-15:30</option>

            </select>
          </div>

          <div class="form-group">
            <label for="datepicker" class="col-form-label">Select Speciality</label>
            <select name="speciality" required="" class="form-control">
              <option value="">Select Speciality</option>
              <option value="1">Therapy</option>
              <option value="2">Other</option>
            </select>
          </div>
          <input type="submit" value="Book Appointment" class="btn_apt">
        </form>
      </div>
      <div class="clerafix"></div>
    </div>
  </div>
</div>
<!-- //contact -->

@endsection
