@extends('site.layouts.layouts')
@section('page-content')

    <!-- Page Content -->
    <div class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Contact Us</h1>
                    <span>feel free to send us a message now!</span>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-information">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="contact-item">
                        <i class="fa fa-phone"></i>
                        <h4>Phone</h4>
                        <p>Vivamus ut tellus mi. Nulla nec cursus elit, id vulputate nec cursus augue.</p>
                        <a href="#">{{$contact->tel_number}}</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-item">
                        <i class="fa fa-envelope"></i>
                        <h4>Email</h4>
                        <p>Vivamus ut tellus mi. Nulla nec cursus elit, id vulputate nec cursus augue.</p>
                        <a href="#">{{$contact->email}}</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-item">
                        <i class="fa fa-map-marker"></i>
                        <h4>Location</h4>
                        <p>{{$contact->location}}</p>
                        <a href="#">View on Google Maps</a>
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

    <div id="map" value="{{$contact->map}}">
        
    </div>
   
    <script>
       var elem = $( "#map" ).attr( "value" );
       $("#map").html(elem);

    </script>
    <div class="partners contact-partners">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-partners owl-carousel">
                        <div class="partner-item">
                            <img src="assets/images/client-01.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
