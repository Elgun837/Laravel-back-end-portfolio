@extends('site.layouts.layouts')


@section('page-content')


    <!-- Page Content -->
    <div class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>About Us</h1>
                    <span>{{$abouts->page_subtitle}}</span>
                </div>
            </div>
        </div>
    </div>

    <div class="more-info about-info">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="more-info-content">
                        <div class="row">
                            <div class="col-md-6 align-self-center">
                                <div class="right-content">
                                    <span>{{$abouts->about_subtitle}}</span>
                                    <h2>{{$abouts->about_title}}</h2>
                                    <p>{{$abouts->about_description}}</p>
                                    
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="left-image">
                                    <img src="{{asset($abouts->about_image)}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .fun-facts{
            background-image:url({{$abouts->about_background_image}});
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

    <div class="team">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Our team <em>members</em></h2>
                        <span>Suspendisse a ante in neque iaculis lacinia</span>
                    </div>
                </div>
                @foreach($teams as $team)
                <div class="col-md-4">
                    <div class="team-item">
                        <img src="{{ asset('storage/uploads/members/'.$team->team_member_image) }}" alt="">
                        <div class="down-content">
                            <h4>{{$team->team_member_name}}</h4>
                            <span>{{$team->team_member_duty}}</span>
                            <p>{{$team->team_member_about}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
<!-- 
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

                        <div class="testimonial-item">
                            <div class="inner-content">
                                <h4>George Walker</h4>
                                <span>Chief Financial Analyst</span>
                                <p>"Nulla ullamcorper, ipsum vel condimentum congue, mi odio vehicula tellus, sit amet malesuada justo sem sit amet quam. Pellentesque in sagittis lacus."</p>
                            </div>
                            <img src="http://placehold.it/60x60" alt="">
                        </div>

                        <div class="testimonial-item">
                            <div class="inner-content">
                                <h4>John Smith</h4>
                                <span>Market Specialist</span>
                                <p>"In eget leo ante. Sed nibh leo, laoreet accumsan euismod quis, scelerisque a nunc. Mauris accumsan, arcu id ornare malesuada, est nulla luctus nisi."</p>
                            </div>
                            <img src="http://placehold.it/60x60" alt="">
                        </div>

                        <div class="testimonial-item">
                            <div class="inner-content">
                                <h4>David Wood</h4>
                                <span>Chief Accountant</span>
                                <p>"Ut ultricies maximus turpis, in sollicitudin ligula posuere vel. Donec finibus maximus neque, vitae egestas quam imperdiet nec. Proin nec mauris eu tortor consectetur tristique."</p>
                            </div>
                            <img src="http://placehold.it/60x60" alt="">
                        </div>

                        <div class="testimonial-item">
                            <div class="inner-content">
                                <h4>Andrew Boom</h4>
                                <span>Marketing Head</span>
                                <p>"Curabitur sollicitudin, tortor at suscipit volutpat, nisi arcu aliquet dui, vitae semper sem turpis quis libero. Quisque vulputate lacinia nisl ac lobortis."</p>
                            </div>
                            <img src="http://placehold.it/60x60" alt="">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div> -->

@endsection()
