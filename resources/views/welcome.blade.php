<x-app-layout>
    <div class="container-fluid hero-container">
      <div class="row align-items-end">
        <div class="col-md-12 ps-5 pb-5" id="hero-content">
          <div class="anchor d-flex gap-4">
            <a class="text-white text-decoration-none" href="#">Home</a>
            <a class="text-white text-decoration-none" href="about.html">About us</a>
          </div>
          <h1 class="display-3 text-white fw-3">VETERINARIAN</h1>
        </div>
      </div>
    </div>
    <!-- Three cards section -->
    
    <!-- Advices section  -->
    <div class="advice-section">
      <div class="container">
          <div class="row">
            <div class="col-md-5 d-flex justify-content-center align-items-center">
              <img src="asset/images/about-1.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-md-6 d-flex align-items-center">
              <div class="row">
                <h1 class="text-center my-4 fs-2 text-center">Why Choose Us?</h1>
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-md-3">
                      <div class="icon d-flex justify-content-center align-items-center">
                        <img src="asset/icons/stethoscope-medical-tool.png" class="img-fluid" alt="">
                      </div>
                    </div>
                    <div class="col-md-9">
                      <div class="card-body" >
                        <h4>Care Advices</h4>
                        <p>Far far away, behind the word mountains, far from the countries.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-md-3">
                      <div class="icon d-flex justify-content-center align-items-center">
                        <img src="asset/icons/customer-service (1).png" class="img-fluid" alt="">
                      </div>
                    </div>
                    <div class="col-md-9">
                      <div class="card-body">
                        <h4>Customer Supports</h4>
                        <p>Far far away, behind the word mountains, far from the countries.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-md-3">
                      <div class="icon d-flex justify-content-center align-items-center">
                        <img src="asset/icons/emergency-call (1).png" class="img-fluid" alt="">
                      </div>
                    </div>
                    <div class="col-md-9">
                      <div class="card-body">
                        <h4>Emergency Services</h4>
                        <p>Far far away, behind the word mountains, far from the countries.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-md-3">
                      <div class="icon d-flex justify-content-center align-items-center">
                        <img src="asset/icons/veterinarian.png" class="img-fluid" alt="">
                      </div>
                    </div>
                    <div class="col-md-9">
                      <div class="card-body">
                        <h4>Veterinary Help</h4>
                        <p>Far far away, behind the word mountains, far from the countries.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>  
          </div>
      </div>
    </div>
    <!-- counter-section -->
    <x-counter/>

    <!-- FAQ-section Accordion-->
    <x-accordion />

    <!-- Swiper-section starts   -->
    <x-swiper />

    <!-- Packages section -->
    <x-package />

    <!-- gallery section -->
    <x-gallery />
    <!-- blog section -->
    <x-blog />
    <!-- form section -->
      <x-form />
    <!-- footer -->
     <x-footer />



      
    

</x-app-layout>