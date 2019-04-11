@extends('layout.main')

@section('content')

<!-- contact -->
<div class="agileits-contact py-5">
  <div class="py-xl-5 py-lg-3">
    <div class="w3ls-titles text-center mb-5">
      <h3 class="title">Contact Us</h3>
      <span>
        <i class="fas fa-user-md"></i>
      </span>
      <p class="mt-2"></p>
    </div>
    <div class="d-flex">
      <div class="col-lg-5 w3_agileits-contact-left">
      </div>
      <div class="col-lg-7 contact-right-w3l">
        <h5 class="title-w3 text-center mb-5">Get In Touch</h5>
        @include('inc.messages')
        <form action="/contact/info" method="post">
          {{csrf_field()}}
          <div class="d-flex space-d-flex">
            <div class="form-group grid-inputs">
              <input type="text" class="name form-control" name="firstname" placeholder="First Name" required="">
            </div>
            <div class="form-group grid-inputs">
              <input type="text" class="name form-control" name="secondname" placeholder="Last Name" required="">
            </div>
          </div>
          <div class="form-group">
            <input type="email" class="name form-control" name="Email" placeholder="Email" required="">
          </div>
          <div class="form-group">
            <input type="text" class="name form-control" name="Subject" placeholder="Subject" required="">
          </div>

          <div class="form-group">
            <textarea placeholder="Your Message" name="Message" required="" class="form-control"></textarea>
          </div>
          <div class="form-group">
            <input type="submit" value="Send Message">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- //contact -->

<!-- Map -->

<!-- //Map -->

@endsection
