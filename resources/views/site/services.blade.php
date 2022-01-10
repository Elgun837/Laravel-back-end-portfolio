@extends('site.layouts.layouts')
@section('page-content')
    <!-- Page Content -->
    <div class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Our Services</h1>
                    <span>We are over 20 years of experience</span>
                </div>
            </div>
        </div>
    </div>
    <?php $num = 0; ?>
    <div class="single-services">
        <div class="container">
            <div class="row" id="tabs">
                <div class="col-md-4">
                    <ul>
                    @foreach($services as $service)
                        
                        <li><a href='#tabs-{{$num = $num+1}}'> {{$service->service_title}} <i class="fa fa-angle-right"></i></a></li>
                       @endforeach
                    </ul>
                </div>
                <div class="col-md-8">
                    <section class='tabs-content'>
                    <?php $num2 = 0; ?>
                    @foreach($services as $service)
                    
                        <article id='tabs-{{$num2 = $num2 +1}}'>
                            <img src="{{asset($service->service_image)}}" alt="">
                            <h4>{{$service->service_title}}</h4>
                            <p>{{$service->service_description}}</p>
                        </article>
                    @endforeach
                    </section>
                </div>
            </div>
        </div>
    </div>

    <div class="partners">
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
