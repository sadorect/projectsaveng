<x-frontend-layout>

    <!-- Carousel Start -->
    <div class="carousel">
      <div class="container-fluid">
          <div class="owl-carousel">
              <div class="carousel-item">
                  <div class="carousel-img">
                      <img src="{{ asset('frontend/img/carousel-1.jpg')}}" alt="Image">
                  </div>
                  <div class="carousel-text">
                      <h1>Let's be kind for children</h1>
                      <p>
                          Lorem ipsum dolor sit amet elit. Phasellus ut mollis mauris. Vivamus egestas eleifend dui ac consequat at lectus in malesuada
                      </p>
                      <div class="carousel-btn">
                          <a class="btn btn-custom" href="">Donate Now</a>
                          <a class="btn btn-custom btn-play" data-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">Watch Video</a>
                      </div>
                  </div>
              </div>
              <div class="carousel-item">
                  <div class="carousel-img">
                      <img src="{{ asset('frontend/img/carousel-2.jpg')}}" alt="Image">
                  </div>
                  <div class="carousel-text">
                      <h1>Get Involved with helping hand</h1>
                      <p>
                          Morbi sagittis turpis id suscipit feugiat. Suspendisse eu augue urna. Morbi sagittis, orci sodales varius fermentum, tortor
                      </p>
                      <div class="carousel-btn">
                          <a class="btn btn-custom" href="">Donate Now</a>
                          <a class="btn btn-custom btn-play" data-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">Watch Video</a>
                      </div>
                  </div>
              </div>
              <div class="carousel-item">
                  <div class="carousel-img">
                      <img src="{{ asset('frontend/img/carousel-3.jpg')}}" alt="Image">
                  </div>
                  <div class="carousel-text">
                      <h1>Bringing smiles to millions</h1>
                      <p>
                          Sed ultrices, est eget feugiat accumsan, dui nibh egestas tortor, ut rhoncus nibh ligula euismod quam. Proin pellentesque odio
                      </p>
                      <div class="carousel-btn">
                          <a class="btn btn-custom" href="">Donate Now</a>
                          <a class="btn btn-custom btn-play" data-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">Watch Video</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Carousel End -->
  
  <!-- Video Modal Start-->
  <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-body">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>        
                  <!-- 16:9 aspect ratio -->
                  <div class="embed-responsive embed-responsive-16by9">
                      <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                  </div>
              </div>
          </div>
      </div>
  </div> 
  <!-- Video Modal End -->
  
  
  <!-- About Start -->
  @include('livewire.frontend.partials.aboutSummary')
  <!-- About End -->
  
  
  <!-- Service Start -->
  <div class="service">
      <div class="container">
          <div class="section-header text-center">
              <p>What We Do?</p>
              <h2>We believe that we can save more lifes with you</h2>
          </div>
          <div class="row">
              <div class="col-lg-4 col-md-6">
                  <div class="service-item">
                      <div class="service-icon">
                          <i class="flaticon-diet"></i>
                      </div>
                      <div class="service-text">
                          <h3>Healthy Food</h3>
                          <p>Lorem ipsum dolor sit amet elit. Phase nec preti facils ornare velit non metus tortor</p>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6">
                  <div class="service-item">
                      <div class="service-icon">
                          <i class="flaticon-water"></i>
                      </div>
                      <div class="service-text">
                          <h3>Pure Water</h3>
                          <p>Lorem ipsum dolor sit amet elit. Phase nec preti facils ornare velit non metus tortor</p>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6">
                  <div class="service-item">
                      <div class="service-icon">
                          <i class="flaticon-healthcare"></i>
                      </div>
                      <div class="service-text">
                          <h3>Health Care</h3>
                          <p>Lorem ipsum dolor sit amet elit. Phase nec preti facils ornare velit non metus tortor</p>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6">
                  <div class="service-item">
                      <div class="service-icon">
                          <i class="flaticon-education"></i>
                      </div>
                      <div class="service-text">
                          <h3>Primary Education</h3>
                          <p>Lorem ipsum dolor sit amet elit. Phase nec preti facils ornare velit non metus tortor</p>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6">
                  <div class="service-item">
                      <div class="service-icon">
                          <i class="flaticon-home"></i>
                      </div>
                      <div class="service-text">
                          <h3>Residence Facilities</h3>
                          <p>Lorem ipsum dolor sit amet elit. Phase nec preti facils ornare velit non metus tortor</p>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6">
                  <div class="service-item">
                      <div class="service-icon">
                          <i class="flaticon-social-care"></i>
                      </div>
                      <div class="service-text">
                          <h3>Social Care</h3>
                          <p>Lorem ipsum dolor sit amet elit. Phase nec preti facils ornare velit non metus tortor</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Service End -->
  
  
  <!-- Facts Start -->
  @include('livewire.frontend.partials.facts')
  <!-- Facts End -->
  
  
  <!-- Causes Start -->
  @include('livewire.frontend.partials.causes')
  <!-- Causes End -->
  
  
  <!-- Donate Start -->
  @include('livewire.frontend.partials.donate')
  
  <!-- Donate End -->
  
  
  <!-- Event Start -->
  @include('livewire.frontend.partials.events')
  
  <!-- Event End -->
  
  
  <!-- Team Start -->
  <div class="team">
      <div class="container">
          <div class="section-header text-center">
              <p>Meet Our Team</p>
              <h2>Awesome guys behind our charity activities</h2>
          </div>
          <div class="row">
              <div class="col-lg-3 col-md-6">
                  <div class="team-item">
                      <div class="team-img">
                          <img src="{{ asset('frontend/img/team-1.jpg')}}" alt="Team Image">
                      </div>
                      <div class="team-text">
                          <h2>Donald John</h2>
                          <p>Founder & CEO</p>
                          <div class="team-social">
                              <a href=""><i class="fab fa-twitter"></i></a>
                              <a href=""><i class="fab fa-facebook-f"></i></a>
                              <a href=""><i class="fab fa-linkedin-in"></i></a>
                              <a href=""><i class="fab fa-instagram"></i></a>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6">
                  <div class="team-item">
                      <div class="team-img">
                          <img src="{{ asset('frontend/img/team-2.jpg')}}" alt="Team Image">
                      </div>
                      <div class="team-text">
                          <h2>Adam Phillips</h2>
                          <p>Chef Executive</p>
                          <div class="team-social">
                              <a href=""><i class="fab fa-twitter"></i></a>
                              <a href=""><i class="fab fa-facebook-f"></i></a>
                              <a href=""><i class="fab fa-linkedin-in"></i></a>
                              <a href=""><i class="fab fa-instagram"></i></a>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6">
                  <div class="team-item">
                      <div class="team-img">
                          <img src="{{ asset('frontend/img/team-3.jpg')}}" alt="Team Image">
                      </div>
                      <div class="team-text">
                          <h2>Thomas Olsen</h2>
                          <p>Chef Advisor</p>
                          <div class="team-social">
                              <a href=""><i class="fab fa-twitter"></i></a>
                              <a href=""><i class="fab fa-facebook-f"></i></a>
                              <a href=""><i class="fab fa-linkedin-in"></i></a>
                              <a href=""><i class="fab fa-instagram"></i></a>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6">
                  <div class="team-item">
                      <div class="team-img">
                          <img src="{{ asset('frontend/img/team-4.jpg')}}" alt="Team Image">
                      </div>
                      <div class="team-text">
                          <h2>James Alien</h2>
                          <p>Advisor</p>
                          <div class="team-social">
                              <a href=""><i class="fab fa-twitter"></i></a>
                              <a href=""><i class="fab fa-facebook-f"></i></a>
                              <a href=""><i class="fab fa-linkedin-in"></i></a>
                              <a href=""><i class="fab fa-instagram"></i></a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Team End -->
  
  
  <!-- Volunteer Start -->
  <div class="volunteer" data-parallax="scroll" data-image-src="{{ asset('frontend/img/volunteer.jpg')}}">
      <div class="container">
          <div class="row align-items-center">
              <div class="col-lg-5">
                  <div class="volunteer-form">
                      <form>
                          <div class="control-group">
                              <input type="text" class="form-control" placeholder="Name" required="required" />
                          </div>
                          <div class="control-group">
                              <input type="email" class="form-control" placeholder="Email" required="required" />
                          </div>
                          <div class="control-group">
                              <textarea class="form-control" placeholder="Why you want to become a volunteer?" required="required"></textarea>
                          </div>
                          <div>
                              <button class="btn btn-custom" type="submit">Become a volunteer</button>
                          </div>
                      </form>
                  </div>
              </div>
              <div class="col-lg-7">
                  <div class="volunteer-content">
                      <div class="section-header">
                          <p>Become A Volunteer</p>
                          <h2>Let’s make a difference in the lives of others</h2>
                      </div>
                      <div class="volunteer-text">
                          <p>
                              Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non. Aliquam metus tortor, auctor id gravida, viverra quis sem. Curabitur non nisl nec nisi maximus. Aenean convallis porttitor. Aliquam interdum at lacus non blandit.
                          </p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Volunteer End -->
  
  
  <!-- Testimonial Start -->
  <div class="testimonial">
      <div class="container">
          <div class="section-header text-center">
              <p>Testimonial</p>
              <h2>What people are talking about our charity activities</h2>
          </div>
          <div class="owl-carousel testimonials-carousel">
              <div class="testimonial-item">
                  <div class="testimonial-profile">
                      <img src="{{ asset('frontend/img/testimonial-1.jpg')}}" alt="Image">
                      <div class="testimonial-name">
                          <h3>Person Name</h3>
                          <p>Profession</p>
                      </div>
                  </div>
                  <div class="testimonial-text">
                      <p>
                          Lorem ipsum dolor sit amet elit. Phasel preti mi facilis ornare velit non vulputa. Aliqu metus tortor, auctor id gravid vivera quis
                      </p>
                  </div>
              </div>
              <div class="testimonial-item">
                  <div class="testimonial-profile">
                      <img src="{{ asset('frontend/img/testimonial-2.jpg')}}" alt="Image">
                      <div class="testimonial-name">
                          <h3>Person Name</h3>
                          <p>Profession</p>
                      </div>
                  </div>
                  <div class="testimonial-text">
                      <p>
                          Lorem ipsum dolor sit amet elit. Phasel preti mi facilis ornare velit non vulputa. Aliqu metus tortor, auctor id gravid vivera quis
                      </p>
                  </div>
              </div>
              <div class="testimonial-item">
                  <div class="testimonial-profile">
                      <img src="{{ asset('frontend/img/testimonial-3.jpg')}}" alt="Image">
                      <div class="testimonial-name">
                          <h3>Person Name</h3>
                          <p>Profession</p>
                      </div>
                  </div>
                  <div class="testimonial-text">
                      <p>
                          Lorem ipsum dolor sit amet elit. Phasel preti mi facilis ornare velit non vulputa. Aliqu metus tortor, auctor id gravid vivera quis
                      </p>
                  </div>
              </div>
              <div class="testimonial-item">
                  <div class="testimonial-profile">
                      <img src="{{ asset('frontend/img/testimonial-4.jpg')}}" alt="Image">
                      <div class="testimonial-name">
                          <h3>Person Name</h3>
                          <p>Profession</p>
                      </div>
                  </div>
                  <div class="testimonial-text">
                      <p>
                          Lorem ipsum dolor sit amet elit. Phasel preti mi facilis ornare velit non vulputa. Aliqu metus tortor, auctor id gravid vivera quis
                      </p>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Testimonial End -->
  
  
  <!-- Contact Start -->
  <div class="contact">
      <div class="container">
          <div class="section-header text-center">
              <p>Get In Touch</p>
              <h2>Contact for any query</h2>
          </div>
          <div class="contact-img">
              <img src="{{ asset('frontend/img/contact.jpg')}}" alt="Image">
          </div>
          <div class="contact-form">
                  <div id="success"></div>
                  <form name="sentMessage" id="contactForm" novalidate="novalidate">
                      <div class="control-group">
                          <input type="text" class="form-control" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                          <p class="help-block text-danger"></p>
                      </div>
                      <div class="control-group">
                          <input type="email" class="form-control" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                          <p class="help-block text-danger"></p>
                      </div>
                      <div class="control-group">
                          <input type="text" class="form-control" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                          <p class="help-block text-danger"></p>
                      </div>
                      <div class="control-group">
                          <textarea class="form-control" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                          <p class="help-block text-danger"></p>
                      </div>
                      <div>
                          <button class="btn btn-custom" type="submit" id="sendMessageButton">Send Message</button>
                      </div>
                  </form>
              </div>
      </div>
  </div>
  <!-- Contact End -->
  
  
  <!-- Blog Start -->
  <div class="blog">
      <div class="container">
          <div class="section-header text-center">
              <p>Our Blog</p>
              <h2>Latest news & articles directly from our blog</h2>
          </div>
          <div class="row">
              <div class="col-lg-4">
                  <div class="blog-item">
                      <div class="blog-img">
                          <img src="{{ asset('frontend/img/blog-1.jpg')}}" alt="Image">
                      </div>
                      <div class="blog-text">
                          <h3><a href="#">Lorem ipsum dolor sit</a></h3>
                          <p>
                              Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor
                          </p>
                      </div>
                      <div class="blog-meta">
                          <p><i class="fa fa-user"></i><a href="">Admin</a></p>
                          <p><i class="fa fa-comments"></i><a href="">15 Comments</a></p>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4">
                  <div class="blog-item">
                      <div class="blog-img">
                          <img src="{{ asset('frontend/img/blog-2.jpg')}}" alt="Image">
                      </div>
                      <div class="blog-text">
                          <h3><a href="#">Lorem ipsum dolor sit</a></h3>
                          <p>
                              Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor
                          </p>
                      </div>
                      <div class="blog-meta">
                          <p><i class="fa fa-user"></i><a href="">Admin</a></p>
                          <p><i class="fa fa-comments"></i><a href="">15 Comments</a></p>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4">
                  <div class="blog-item">
                      <div class="blog-img">
                          <img src="{{ asset('frontend/img/blog-3.jpg')}}" alt="Image">
                      </div>
                      <div class="blog-text">
                          <h3><a href="#">Lorem ipsum dolor sit</a></h3>
                          <p>
                              Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor
                          </p>
                      </div>
                      <div class="blog-meta">
                          <p><i class="fa fa-user"></i><a href="">Admin</a></p>
                          <p><i class="fa fa-comments"></i><a href="">15 Comments</a></p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Blog End -->
  
  </x-frontend-layout>