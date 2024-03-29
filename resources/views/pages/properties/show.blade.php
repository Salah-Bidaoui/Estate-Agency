@extends('layouts.app')

@section('content')
   <!-- ======= Property Search Section ======= -->
   <div class="click-closed"></div>
   <!--/ Form Search Star /-->
   <div class="box-collapse">
      <div class="title-box-d">
         <h3 class="title-d">Search Property</h3>
      </div>
      <span class="close-box-collapse right-boxed bi bi-x"></span>
      <div class="box-collapse-wrap form">
         <form class="form-a">
            <div class="row">
               <div class="col-md-12 mb-2">
                  <div class="form-group">
                     <label class="pb-2"
                        for="Type">Keyword</label>
                     <input type="text"
                        class="form-control form-control-lg form-control-a"
                        placeholder="Keyword">
                  </div>
               </div>
               <div class="col-md-6 mb-2">
                  <div class="form-group mt-3">
                     <label class="pb-2"
                        for="Type">Type</label>
                     <select class="form-control form-select form-control-a"
                        id="Type">
                        <option>All Type</option>
                        <option>For Rent</option>
                        <option>For Sale</option>
                        <option>Open House</option>
                     </select>
                  </div>
               </div>
               <div class="col-md-6 mb-2">
                  <div class="form-group mt-3">
                     <label class="pb-2"
                        for="city">City</label>
                     <select class="form-control form-select form-control-a"
                        id="city">
                        <option>All City</option>
                        <option>Alabama</option>
                        <option>Arizona</option>
                        <option>California</option>
                        <option>Colorado</option>
                     </select>
                  </div>
               </div>
               <div class="col-md-6 mb-2">
                  <div class="form-group mt-3">
                     <label class="pb-2"
                        for="bedrooms">Bedrooms</label>
                     <select class="form-control form-select form-control-a"
                        id="bedrooms">
                        <option>Any</option>
                        <option>01</option>
                        <option>02</option>
                        <option>03</option>
                     </select>
                  </div>
               </div>
               <div class="col-md-6 mb-2">
                  <div class="form-group mt-3">
                     <label class="pb-2"
                        for="garages">Garages</label>
                     <select class="form-control form-select form-control-a"
                        id="garages">
                        <option>Any</option>
                        <option>01</option>
                        <option>02</option>
                        <option>03</option>
                        <option>04</option>
                     </select>
                  </div>
               </div>
               <div class="col-md-6 mb-2">
                  <div class="form-group mt-3">
                     <label class="pb-2"
                        for="bathrooms">Bathrooms</label>
                     <select class="form-control form-select form-control-a"
                        id="bathrooms">
                        <option>Any</option>
                        <option>01</option>
                        <option>02</option>
                        <option>03</option>
                     </select>
                  </div>
               </div>
               <div class="col-md-6 mb-2">
                  <div class="form-group mt-3">
                     <label class="pb-2"
                        for="price">Min Price</label>
                     <select class="form-control form-select form-control-a"
                        id="price">
                        <option>Unlimite</option>
                        <option>$50,000</option>
                        <option>$100,000</option>
                        <option>$150,000</option>
                        <option>$200,000</option>
                     </select>
                  </div>
               </div>
               <div class="col-md-12">
                  <button type="submit"
                     class="btn btn-b">Search Property</button>
               </div>
            </div>
         </form>
      </div>
   </div><!-- End Property Search Section -->>

   <main id="main">

      <!-- ======= Intro Single ======= -->
      <section class="intro-single">
         <div class="container">
            <div class="row">
               <div class="col-md-12 col-lg-8">
                  <div class="title-single-box">
                     <h1 class="title-single">{{ $property->title }}</h1>
                     <span class="color-text-a">{{ $property->address }}</span>
                  </div>
               </div>
               <div class="col-md-12 col-lg-4">
                  <nav aria-label="breadcrumb"
                     class="breadcrumb-box d-flex justify-content-lg-end">
                     <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                           <a href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                           <a href="property-grid.html">Properties</a>
                        </li>
                        <li class="breadcrumb-item active"
                           aria-current="page">
                           {{ $property->title }}
                        </li>
                     </ol>
                  </nav>
               </div>
            </div>
         </div>
      </section><!-- End Intro Single-->

      <!-- ======= Property Single ======= -->
      <section class="property-single nav-arrow-b">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-lg-8">
                  <div id="property-single-carousel"
                     class="swiper">
                     <div class="swiper-wrapper">
                        @foreach ($property->getMedia('images') as $media)
                           <div class="carousel-item-b swiper-slide content"
                              data-toggle="lightbox">
                              <a href="{{ asset($media->getUrl()) }}"
                                 data-toggle="lightbox"
                                 data-caption="This describes the image">
                                 <img src="{{ asset($media->getUrl()) }}"
                                    class="img-fluid">
                              </a>
                           </div>
                        @endforeach
                     </div>
                  </div>
                  <div class="property-single-carousel-pagination carousel-pagination"></div>
               </div>
            </div>

            <div class="row">
               <div class="col-sm-12">

                  <div class="row justify-content-between">
                     <div class="col-md-5 col-lg-4">
                        <div class="property-price d-flex justify-content-center foo">
                           <div class="card-header-c d-flex">
                              <div class="card-box-ico">
                                 <span class="bi bi-cash">$</span>
                              </div>
                              <div class="card-title-c align-self-center">
                                 <h5 class="title-c">{{ $property->price }}</h5>
                              </div>
                           </div>
                        </div>
                        <div class="property-summary">
                           <div class="row">
                              <div class="col-sm-12">
                                 <div class="title-box-d section-t4">
                                    <h3 class="title-d">Quick Summary</h3>
                                 </div>
                              </div>
                           </div>
                           <div class="summary-list">
                              <ul class="list">
                                 <li class="d-flex justify-content-between">
                                    <strong>Property ID:</strong>
                                    <span>{{ $property->id }}</span>
                                 </li>
                                 <li class="d-flex justify-content-between">
                                    <strong>Location:</strong>
                                    <span>{{ $property->city . ' ' . $property->addess }}</span>
                                 </li>
                                 <li class="d-flex justify-content-between">
                                    <strong>Property Type:</strong>
                                    <span>{{ $property->type }}</span>
                                 </li>
                                 <li class="d-flex justify-content-between">
                                    <strong>Status:</strong>
                                    <span>{{ $property->transaction_type }}</span>
                                 </li>
                                 <li class="d-flex justify-content-between">
                                    <strong>Area:</strong>
                                    <span>{{ $property->space }}m
                                       <sup>2</sup>
                                    </span>
                                 </li>
                                 <li class="d-flex justify-content-between">
                                    <strong>Beds:</strong>
                                    <span>{{ $property->bedrooms }}</span>
                                 </li>
                                 <li class="d-flex justify-content-between">
                                    <strong>Baths:</strong>
                                    <span>{{ $property->bathrooms }}</span>
                                 </li>
                                 <li class="d-flex justify-content-between">
                                    <strong>Garage:</strong>
                                    <span>{{ $property->garages }}</span>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-7 col-lg-7 section-md-t3">
                        <div class="row">
                           <div class="col-sm-12">
                              <div class="title-box-d">
                                 <h3 class="title-d">Property Description</h3>
                              </div>
                           </div>
                        </div>
                        <div class="property-description">
                           <p class="description color-text-a">
                              Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
                              cubilia Curae; Donec velit
                              neque, auctor sit amet
                              aliquam vel, ullamcorper sit amet ligula. Cras ultricies ligula sed magna
                              dictum porta.
                              Curabitur aliquet quam id dui posuere blandit. Mauris blandit aliquet
                              elit, eget tincidunt
                              nibh pulvinar quam id dui posuere blandit.
                           </p>
                           <p class="description color-text-a no-margin">
                              {{ $property->description }}
                           </p>
                        </div>
                        <div class="row section-t3">
                           <div class="col-sm-12">
                              <div class="title-box-d">
                                 <h3 class="title-d">Amenities</h3>
                              </div>
                           </div>
                        </div>
                        <div class="amenities-list color-text-a">
                           <ul class="list-a no-margin">
                              @foreach ($property->amenities as $amenity)
                                 <li>{{ $amenity->name }}</li>
                              @endforeach
                              <li>Outdoor Kitchen</li>
                              <li>Cable Tv</li>
                              <li>Deck</li>
                              <li>Tennis Courts</li>
                              <li>Internet</li>
                              <li>Parking</li>
                              <li>Sun Room</li>
                              <li>Concrete Flooring</li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-10 offset-md-1">
                  <ul class="nav nav-pills-a nav-pills mb-3 section-t3"
                     id="pills-tab"
                     role="tablist">
                     <li class="nav-item">
                        <a class="nav-link active"
                           id="pills-video-tab"
                           data-bs-toggle="pill"
                           href="#pills-video"
                           role="tab"
                           aria-controls="pills-video"
                           aria-selected="true">Video</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link"
                           id="pills-plans-tab"
                           data-bs-toggle="pill"
                           href="#pills-plans"
                           role="tab"
                           aria-controls="pills-plans"
                           aria-selected="false">Floor Plans</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link"
                           id="pills-map-tab"
                           data-bs-toggle="pill"
                           href="#pills-map"
                           role="tab"
                           aria-controls="pills-map"
                           aria-selected="false">Ubication</a>
                     </li>
                  </ul>
                  <div class="tab-content"
                     id="pills-tabContent">
                     <div class="tab-pane fade show active"
                        id="pills-video"
                        role="tabpanel"
                        aria-labelledby="pills-video-tab">
                        <iframe src="https://player.vimeo.com/video/73221098"
                           width="100%"
                           height="460"
                           frameborder="0"
                           webkitallowfullscreen
                           mozallowfullscreen
                           allowfullscreen></iframe>
                     </div>
                     <div class="tab-pane fade"
                        id="pills-plans"
                        role="tabpanel"
                        aria-labelledby="pills-plans-tab">
                        <img src="assets/img/plan2.jpg"
                           alt=""
                           class="img-fluid">
                     </div>
                     <div class="tab-pane fade"
                        id="pills-map"
                        role="tabpanel"
                        aria-labelledby="pills-map-tab">
                        <iframe
                           src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.1422937950147!2d-73.98731968482413!3d40.75889497932681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25855c6480299%3A0x55194ec5a1ae072e!2sTimes+Square!5e0!3m2!1ses-419!2sve!4v1510329142834"
                           width="100%"
                           height="460"
                           frameborder="0"
                           style="border:0"
                           allowfullscreen></iframe>
                     </div>
                  </div>
               </div>
             @include('partials.contact-agent')
            </div>
         </div>
      </section><!-- End Property Single-->

   </main><!-- End #main -->

   {{-- <div id="preloader"></div>
   <a href="#"
      class="back-to-top d-flex align-items-center justify-content-center"><i
         class="bi bi-arrow-up-short"></i></a> --}}
@endsection
