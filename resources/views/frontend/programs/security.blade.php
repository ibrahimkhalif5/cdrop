@extends('layouts.main')
@section('content')

<main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background position-relative" data-aos="fade" style="background-image:url(assets/img/slider/wash1.png);">
      <div class="container position-relative">
        <h1>Peace, Security and Governance</h1>

        <nav class="breadcrumbs">
          <ol>
            <li><a href="/">Home</a></li>
            <li class="current">Peace, Security and Governance</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- About 3 Section -->
    <section id="about-3" class="about-3 section">

      <div class="container">

        <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-5">
            <img src="{{asset('assets/img/slider/wash.png')}}"class="img-fluid" alt="">
          </div>
          <div class="col-lg-7" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h3>Peace, Security and Governance</h3>
              <p>CDROP facilitates conflict resolution through community dialogues, training, and inclusive peace forums. 
                We aim to reduce violence and promote cohesion in fragile, conflict-prone regions.
                    </p>
              <div><br></div>
              <div>Services:-<br></div>
              <p></p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> <span>Conflict mediation and transformation through structured forums.</span></li>
                <li><i class="bi bi-check-circle-fill"></i> <span>Awareness campaigns against hate speech and incitement.</span></li>
                <li><i class="bi bi-check-circle-fill"></i> <span>Capacity building for peace ambassadors and local leaders.</span></li>
                 </ul>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /About 3 Section -->

  <!-- Gallery 2 Section -->
<section id="gallery-2" class="gallery-2 section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Project Images</h2>

  </div><!-- End Section Title -->

  <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-4 justify-content-center">
    @foreach($dept as $row )
      <div class="col-xl-3 col-lg-4 col-md-6">
        <div class="gallery-item h-100">
          <img src="{{ Storage::url($row->photo) }}" class="img-fluid" alt="">
          <div class="gallery-links d-flex align-items-center justify-content-center">
            <a href="{{ Storage::url($row->photo) }}" title="{{$row->description}}" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
             </div>
        </div>
      </div><!-- End Gallery Item -->
@endforeach
     
      

    </div>

  </div>

</section><!-- /Gallery 2 Section -->



  </main>


@endsection