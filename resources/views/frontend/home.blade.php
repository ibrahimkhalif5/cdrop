@extends('layouts.main')
@section('content')

<main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="3000">
      @foreach($gal as $index => $row )
            <div class="carousel-item  {{ $loop->first ? 'active' : '' }}">
                <img src="{{ Storage::url($row->image) }}" alt="">
            </div><!-- End Carousel Item -->
      <!-- <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-3">
            <p class="text-white fs-5">{{ $row->description }}</p>
          </div> -->
        @endforeach
       
        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

        <ol class="carousel-indicators"></ol>

      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section" >

      <div class="container" data-aos="fade-up">
        <div class="row gx-0">

          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">

              <h2>
                <span style="color: black;">Welcome</span>&nbsp;
                <span style="color: green;">Note</span>
              </h2>
              <p>Welcome to the Community Development Resilience Organization Programme (CDROP) official website.</p> 
              <p>At CDROP, we believe that real and lasting change begins at the community level.
                 Since our inception, we have been dedicated to empowering 
                 vulnerable and marginalized communities, particularly in the arid and semi-arid
                  regions of Northern Kenya. Our goal is to build resilience, promote inclusive development,
                   and create opportunities that improve livelihoods and restore dignity.
As you explore our platform, you will discover the various programs
 and interventions we are implementing in areas such as water and sanitation,
  education, gender equality, youth empowerment, environmental conservation, 
  and peacebuilding. Each initiative is guided by our values of integrity,
   inclusivity, and sustainability and driven by the voices and 
   priorities of the communities we serve.</p>  
            </div>
          </div>

          <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="{{asset('assets/img/slider/welcome.png')}}" class="img-fluid" alt="">
          </div>

        </div>
      </div>

    </section><!-- /About Section -->

    <!-- Slider Section -->
    <section id="slider" class="slider section accent-background" style="background-color: #0073A6;>
      <div class="container section-title" data-aos="fade-up">
        <h2>
          <span style="color: yellow;">Thematic &</span>&nbsp;
          <span style="color: purple;">Areas of Focus</span>
        </h2>
      </div>
      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 1
                }
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url({{asset('assets/img/slider/h2.png')}})">

              <div class="price align-self-start">Water, Sanitation, and Hygiene (WASH)</div>
              <p class="description">
          Drilling boreholes, promoting hygiene, and implementing gender-sensitive water programs.
            </p>
            </div><!-- End Event item -->

            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url({{asset('assets/img/slider/wash.png')}})">

              <div class="price align-self-start">Education  &amp; Development</div>
              <p class="description">
            School support, literacy development, feeding programs, and life skills training.
            </p>
            </div><!-- End Event item -->

            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url({{asset('assets/img/slider/wash.png')}})">

                <div class="price align-self-start">Youth & Women  &amp; Empowerment</div>
                <p class="description">
               Safe spaces, skills training, poverty alleviation, and literacy for marginalized youth and women.

            </p>
                </div><!-- End Event item -->

            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url({{asset('assets/img/slider/food.png')}})">

              <div class="price align-self-start"> Health  &amp; Nutrition   </div>
              <p class="description">
                Community-based health programs focused on maternal and child health and nutrition.
              </p>
              </div><!-- End Event item -->

              <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url({{asset('assets/img/slider/food.png')}})">

              <div class="price align-self-start"> Humanitarian  Emergencies   </div>
              <p class="description">
                Crisis response: food, shelter, WASH, healthcare for conflict-affected and disaster-prone areas.
                  </p>
              </div><!-- End Event item -->

              <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url({{asset('assets/img/slider/gender.png')}})">

              <div class="price align-self-start"> Gender-Based Violence Advocacy   </div>
              <p class="description">
                Safe spaces, outreach, psychosocial support, and holistic GBV response services.
                     </p>
              </div><!-- End Event item -->

            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url({{asset('assets/img/slider/peace.png')}})">

              <div class="price align-self-start">Peace   &amp; Conflict Resolution</div>
              <p class="description">
                Dialogue forums, roundtables, and conflict transformation approaches in fragile zones.
          </p>
            </div><!-- End Event item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Slider Section -->

    <!-- Stats 2 Section -->
    <section id="stats-2" class="stats-2 section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-house color-blue flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="500" data-purecounter-duration="1" class="purecounter"></span>
                <p>Households Reached</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-person-hearts color-orange flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="700" data-purecounter-duration="1" class="purecounter"></span>
                <p> Girls Empowered Through Education</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-geo-alt color-green flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="200" data-purecounter-duration="1" class="purecounter"></span>
                <p>Peace Dialogues Conducted</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-people color-pink flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="300" data-purecounter-duration="1" class="purecounter"></span>
                <p>Women Empowerment Projects</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>

    </section><!-- /Stats 2 Section -->

    <!-- Testimonials 3 Section -->
     
    
    <!-- /Testimonials 3 Section -->

 
<!-- Slider 2 Section -->
<section id="slider-2" class="slider-2 section">
  <div class="container section-title" data-aos="fade-up">
    <h2>
      <span style="color: yellow;">News</span>&nbsp;
      <span style="color: black;">&</span>&nbsp;
      <span style="color: purple;">Events</span>
    </h2>
  </div>
  <img class="slider-bg" src="{{asset('assets/img/slider/wash1.png')}}" alt="" data-aos="fade-in">

  <div class="container">
    <div class="swiper init-swiper" data-aos="fade-up" data-aos-delay="100">
      <script type="application/json" class="swiper-config">
        {
          "loop": true,
          "speed": 600,
          "autoplay": {
            "delay": 5000
          },
          "slidesPerView": "auto",
          "pagination": {
            "el": ".swiper-pagination",
            "type": "bullets",
            "clickable": true
          }
        }
      </script>

      <div class="swiper-wrapper">
        @foreach($event as $row)
        <div class="swiper-slide">
          <div class="row gy-4 event-item">
            <div class="col-lg-6">
              <img src="{{ Storage::url($row->image) }}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content">
              <div class="price">
                <p><span>{{ $row->title }}</span></p>
              </div>
              <p class="fst-italic">{{ $row->description }}</p>
            </div>
          </div>
        </div>
        @endforeach
      </div>

      <!-- Add Pagination -->
      <div class="swiper-pagination"></div>

    </div>
  </div>
</section>
<!-- /Slider 2 Section -->








   
  <!-- Testimonials Section -->
  <section id="testimonials" class="testimonials section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Our Partners</h2>

  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="swiper init-swiper">
      <script type="application/json" class="swiper-config">
      {
          "loop": true,
          "speed": 600,
          "autoplay": {
            "delay": 5000
          },
          "slidesPerView": 1, // Ensure only one image slides at a time
          "pagination": {
            "el": ".swiper-pagination",
            "type": "bullets",
            "clickable": true
          }
        }
      </script>
      <div class="swiper-wrapper">
      
        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="{{ asset('assets/img/slider/undp.png') }}" class="testimonial-img" alt="">
            <img src="{{ asset('assets/img/slider/unicef.png ')}}" class="testimonial-img" alt="">
            <img src="{{ asset('assets/img/slider/unicef-ken.png ')}}" class="testimonial-img" alt="">
            <img src="{{ asset('assets/img/slider/world.png ')}}" class="testimonial-img" alt="">
          
    
          </div>
        </div><!-- End testimonial item -->


      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>

  </section><!-- /Testimonials Section -->
    

  </main>


@endsection