@extends('site.layouts.layouts')

@section('page-content')

    <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
        @foreach($slides as $slide)
          <!-- Item -->
          <div class="item">
            <div class="img-fill">
              <img src="{{ asset($slide->slide_image) }}" alt="">
                <div class="text-content">
                  <h6>{{$slide->subtitle}}</h6>
                  <h4>{{$slide->title}}</h4>
                  <p>{{$slide->description}}</p>
                  <a href="{{$slide->button_link}}" class="filled-button">{{$slide->button}}</a>
                </div>
            </div>
          </div>

          @endforeach
          
        
        </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="request-form">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <h4>Request a call back right now ?</h4>
            <span>Mauris ut dapibus velit cras interdum nisl ac urna tempor mollis.</span>
          </div>
          <div class="col-md-4">
            <a href="{{route('contact-us')}}" class="border-button">Contact Us</a>
          </div>
        </div>
      </div>
    </div>

    <div class="services">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Financial <em>Services</em></h2>
              <span>Aliquam id urna imperdiet libero mollis hendrerit</span>
            </div>
          </div>
          <?php $num = 0; ?>
          @foreach($services as $service)
          <div class="col-md-4">
            <div class="service-item">
              <img src="{{ asset($service->service_image) }}" alt="">
              <div class="down-content">
                <h4>{{$service->service_title}}</h4>
                <p>{{$service->service_description}}</p>
                <a href="/services/#tabs-{{$num = $num+1}}" class="filled-button">Read More</a>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
    <style>
        .fun-facts{
            background-image:url({{$info->info_image}});
        }
    </style>
    <div class="fun-facts">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="left-content">
              <span>{{$info->info_subtitle}}</span>
              <h2>{{$info->info_title}}</h2>
              <p>{{$info->info_description}}</p>
              <a href="{{route('about-us')}}" class="filled-button">Read More</a>
            </div>
          </div>
          <div class="col-md-6 align-self-center">
            <div class="row">
              <div class="col-md-6">
                <div class="count-area-content">
                  <div class="count-digit">945</div>
                  <div class="count-title">Work Hours</div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="count-area-content">
                  <div class="count-digit">1280</div>
                  <div class="count-title">Great Reviews</div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="count-area-content">
                  <div class="count-digit">578</div>
                  <div class="count-title">Projects Done</div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="count-area-content">
                  <div class="count-digit">26</div>
                  <div class="count-title">Awards Won</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="more-info">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="more-info-content">
              <div class="row">
                <div class="col-md-6">
                  <div class="left-image">
                    <img src="{{ asset($info->info_section_image)}}" alt="">
                  </div>
                </div>
                <div class="col-md-6 align-self-center">
                  <div class="right-content">
                    <span>{{$info->info_section_subtitle}}</span>
                    <h2>{{$info->info_section_title}}</h2>
                    <p>{{$info->info_section_descriotion}}</p>
                    <a href="#" class="filled-button">Read More</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="testimonials">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>What they say <em>about us</em></h2>
              <span>testimonials from our greatest clients</span>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-testimonials owl-carousel">
            @foreach($teams as $team)
              <div class="testimonial-item">
                <div class="inner-content">
                  <h4>{{$team->team_member_name}}</h4>
                  <span>{{$team->team_member_duty}}</span>
                  <p>{{$team->team_member_about}}</p>
                </div>
                <img src="{{ asset('storage/uploads/members/'.$team->team_member_image) }}" alt="member-photo">
              </div>

              
          @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="callback-form mb-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Request a <em>call back</em></h2>
              <span>Etiam suscipit ante a odio consequat</span>
            </div>
          </div>
          <div class="col-md-12">
            <div class="contact-form">
              <form id="" method="POST" action="">
                @csrf
                <div class="row">
                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="title" type="text" class="form-control" id="title" placeholder="Full Name" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-6 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="body" rows="6" class="form-control" id="body" placeholder="Your Message" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="button" id="send-message" class="border-button">Send Message</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script>
        $(document).ready ( function () {
            $(document).on ("click", "#send-message", function () {
                    $.ajax({
                        url: "{{ route('api-message') }}",
                        type: 'POST',
                        data: {
                            "_token": "{{ csrf_token() }}",
                            body: $('#body').val(),
                            email: $('#email').val(),
                            title: $('#title').val(),

                        },
                        success: function( data ){
                          Swal.fire(
                                      'Your message succesfully send!',
                                      'Thank you for your attention',
                                      
                                    )
                            // if(data.status === 200){
                            //     Swal.fire(
                            //         'Success!',
                            //         response.message,
                            //         'success'
                            //     );
                            // }
                           
                            // else if(status === 422){
                            //     Swal.fire({
                            //         icon: 'error',
                            //         title: 'Oops...',
                            //         text: response.message,
                            //         footer: '<a href>Server Error!</a>'
                            //     });
                            // }
                        },
                        error : (error) => {
                          Swal.fire(
                                      'Something went wrong',
                                      'Please fill all labels',
                                      
                                    )
                        }
                    });
            });
        });
      </script>
      
    <!-- <div class="partners">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="owl-partners owl-carousel">

              <div class="partner-item">
                <img src="{{ asset('front/assets/images/client-01.png')}}" title="1" alt="">
              </div>

              <div class="partner-item">
                <img src="{{ asset('front/assets/images/client-01.png')}}" title="2" alt="">
              </div>

              <div class="partner-item">
                <img src="{{ asset('front/assets/images/client-01.png')}}" title="3" alt="">
              </div>

              <div class="partner-item">
                <img src="{{ asset('front/assets/images/client-01.png')}}" title="4" alt="">
              </div>

              <div class="partner-item">
                <img src="{{ asset('front/assets/images/client-01.png')}}" title="5" alt="">
              </div>

            </div>
          </div>
        </div>
      </div>
    </div> -->

@endsection
