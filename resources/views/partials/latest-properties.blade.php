<section class="section-property section-t8">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
               <div class="title-box">
                  <h2 class="title-a">Latest Properties</h2>
               </div>
               <div class="title-link">
                  <a href="{{ route('properties.index') }}">All Property
                     <span class="bi bi-chevron-right"></span>
                  </a>
               </div>
            </div>
         </div>
      </div>

      <div id="property-carousel"
         class="swiper">
         <div class="swiper-wrapper">

            @foreach ($latestProperties as $property)
               <div class="carousel-item-b swiper-slide">
                  <div class="card-box-a card-shadow">
                     <div class="img-box-a">
                        <img src="{{ $property->getFirstMediaUrl('images', 'grid') }}"
                           alt="{{ $property->title }}"
                           class="img-a img-fluid">
                     </div>
                     <div class="card-overlay">
                        <div class="card-overlay-a-content">
                           <div class="card-header-a">
                              <h2 class="card-title-a">
                                 <a href="property-single.html">{{ $property->price }} Mount
                                    <br /> {{ $property->title }}</a>
                              </h2>
                           </div>
                           <div class="card-body-a">
                              <div class="price-box d-flex">
                                 <span class="price-a">rent | $ 12.000</span>
                              </div>
                              <a href="{{ route('properties.show', $property) }}"
                                 class="link-a">Click here to view
                                 <span class="bi bi-chevron-right"></span>
                              </a>
                           </div>
                           <div class="card-footer-a">
                              <ul class="card-info d-flex justify-content-around">
                                 <li>
                                    <h4 class="card-info-title">Area</h4>
                                    <span>{{ $property->space }}m
                                       <sup>2</sup>
                                    </span>
                                 </li>
                                 <li>
                                    <h4 class="card-info-title">Beds</h4>
                                    <span>{{ $property->bedrooms }}</span>
                                 </li>
                                 <li>
                                    <h4 class="card-info-title">Baths</h4>
                                    <span>{{ $property->bathrooms }}</span>
                                 </li>
                                 <li>
                                    <h4 class="card-info-title">Garages</h4>
                                    <span>{{ $property->garages }}</span>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div><!-- End carousel item -->
            @endforeach

         </div>
      </div>
      <div class="propery-carousel-pagination carousel-pagination"></div>

   </div>
</section>
