@extends("dashboard.layouts.layout1")

@section('content')
@if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <div class="card shadow mb-4">
       
            <div class="card-body">
                <form action="{{route('admin-panel.about-us.update')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="row">
                        <div class="col-md-12">
                           
                            <div class="form-group">
                                Page Subtitle <span style="color: red">*</span>
                                <input type="text" name="page_subtitle" value="{{ $abouts->page_subtitle }}" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-12">About  image
                            <div class="form-group">
                            <img src="{{asset($abouts->about_image)}}" alt="about_image" width="500px">
                                <input class="form-control-file border" type="file" src="{{asset($abouts->about_image)}}" multiple="false" name="about_image" accept="image/*">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                About us section title <span style="color: red">*</span>
                                <input type="text" name="about_title" value="{{$abouts->about_title}}" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                About us section subtitle <span style="color: red">*</span>
                                <input type="text" name="about_subtitle" value="{{$abouts->about_subtitle}}" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                About us section description <span style="color: red">*</span>
                                <textarea name="about_description" value="{{$abouts->about_description}}" placeholder="{{$abouts->about_description}}" class="form-control">{{$abouts->about_description}}</textarea>
                            </div>
                        </div>
                        

                        
                   
                    </div>
                    <hr>
                    <div class="form-group">
                        <button type="submit" class="btn btn-block btn-md btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>

   

    </div>

@endsection()
