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
    <form class="m-4 row flex justify-content-end" action="{{ route('admin-panel.slide.store')}}" method="post">
                            @csrf
                            <button class="btn btn-sm btn-danger">Add new slide</button>
        </form>
    @foreach($slides as $slide)
        
        <div class="card shadow mb-4">
        <form class="m-4 row flex justify-content-end" action="{{ route('admin-panel.slide.destroy', $slide->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-sm btn-danger"><i class="fa fa-trash-alt"></i></button>
        </form>
                        
            <div class="card-body">
                <form action="{{ route('admin-panel.slide.update', $slide->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')

                    <div class="row">
                        <div class="col-md-6">Slide
                            <div class="form-group">

                            <div class="slider-img-box">
                                <img id="slider-image" src="{{ asset($slide->slide_image)}}"  width="400px" alt="slide_image">
                            </div>
                                    
                                    <input id="file-input" class="form-control-file border" type="file" src="{{ asset($slide->slide_image)}}" multiple="false" name="slide_image">
                            </div>
                        </div>
                        <div class="col-md-6">
                        <div class="col-md-12">
                            <div class="form-group">
                                Subtitle <span style="color: red">*</span>
                                <input type="text" name="subtitle" value="{{ $slide->subtitle}}" class="form-control" >
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                Title <span style="color: red">*</span>
                                <input type="text" name="title" value="{{ $slide->title}}" class="form-control" >
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                Description <span style="color: red">*</span>
                                <input type="text" name="description" value="{{ $slide->description}}" class="form-control">
                            </div>
                        </div>
                      <div class="row col-md-12">
                        <div class="col-md-6">
                            <div class="form-group">
                                Button <span style="color: red">*</span>
                                <input type="text" name="button" value="{{ $slide->button}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                Button link
                                <input type="text" value="{{ $slide->button_link}}" name="button_link" class="form-control">
                            </div>
                        </div>
                        </div>
                    </div>
                    
        </div>

                    
                    <hr>
                    <div class="form-group row justify-content-center">
                        
                    
                        <button type="submit" class="col-3 m-4 btn btn-block btn-md btn-success">Update</button>
                       
                        
                        
                    </div>
                </form>
            </div>
        </div>
@endforeach()
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            $("#file-input").change(function(){
                let img = URL.createObjectURL(event.target.files[0]);
                $('#slider-image').attr('src', img);
            });
        });
        </script>
 
@endsection()
