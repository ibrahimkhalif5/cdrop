@extends('layouts.main')
@section('content')
@if(session('success'))
<div class="alert alert-danger">
    <span>&#10004;</span> {{ session('success') }}
</div>
@endif
<main class="main">

<!-- Page Title -->
<div class="page-title dark-background" data-aos="fade" style="background-image: url({{asset('assets/img/slider/wash1.png')}});">
  
</div><!-- End Page Title -->

<!-- Contact Section -->
<section id="contact" class="contact section">

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="mb-4" data-aos="fade-up" data-aos-delay="200">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.768140541374!2d36.81375807368786!3d-1.3146266356550653!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f11b2620fbc1f%3A0x69537967ff81bb49!2sKogo%20Star%20Plaza%20Limited!5e0!3m2!1sen!2ske!4v1754080062499!5m2!1sen!2ske" width="100%" height="400px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div><!-- End Google Maps -->

    <div class="row gy-4">

      <div class="col-lg-4">
        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
          <i class="bi bi-geo-alt flex-shrink-0"></i>
          <div>
            <h3>Address</h3>
            <p>CDROP Head Office

Kago Star Plaza Suite 22, Off Mai Mahiu Road. Nairobi West Kenya</p>
          </div>
        </div><!-- End Info Item -->

        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
          <i class="bi bi-telephone flex-shrink-0"></i>
          <div>
            <h3>Call Us</h3>
            <p>+254 722166441 /
+252 770854769/+252615656330/
020 200 8989</p>
          </div>
        </div><!-- End Info Item -->

        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
          <i class="bi bi-envelope flex-shrink-0"></i>
          <div>
            <h3>Email Us</h3>
            <p>hadi.adan@cdrop.org/
info@cdrop.org</p>
          </div>
        </div><!-- End Info Item -->

      </div>


      <div class="col-lg-8">
    <form  method="POST" action="{{route('contact_us')}}" data-aos="fade-up" data-aos-delay="200">
              @csrf
        <div class="row gy-4">
                <div class="col-md-6">
                <input type="text" name="fullname" class="form-control" placeholder="Your Name" required="">
                </div>

                <div class="col-md-6 ">
                <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                </div>

                <div class="col-md-12">
                <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                </div>

                <div class="col-md-12">
                <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                
                </div>
                
                <button type="submit">Send Message</button>
            </div>
                <!-- Loading, Success, and Error Messages -->
                <!-- <div class="loading">Loading...</div>  
                <div class="error-message"></div>      
                <div class="sent-message">Your message has been sent. Thank you!</div>  
           -->
        </form>
        
      </div><!-- End Contact Form -->

    </div>

  </div>

</section><!-- /Contact Section -->

</main>

@endsection