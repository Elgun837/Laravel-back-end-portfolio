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
    <form class="m-4 row flex justify-content-end" action="{{ route('admin-panel.services.store')}}" method="post">
                            @csrf
                            <button class="btn btn-sm btn-danger">Add new service</button>
      
                        </form>
     <div class="row flex">
    @foreach($services as $service)
 
        <div class="card shadow col-md-6 mb-4">
        <form class="m-4 row flex justify-content-end" action="{{ route('admin-panel.services.destroy', $service->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-sm btn-danger"><i class="fa fa-trash-alt"></i></button>
        </form>
  

        <div class="card shadow mb-4">

            <div class="card-body">
                <form action="{{ route('admin-panel.services.update', $service->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')

                    <div class="row">
                        <div class="col-md-12">Services 1
                            <div class="form-group">
                                    <img src="{{ asset($service->service_image)}}" width="250px" alt="">
                                    <input class="form-control-file border" type="file" multiple="false" name="service_image" src="{{ asset($service->service_image)}}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                Title <span style="color: red">*</span>
                                <input type="text" name="service_title" value="{{$service->service_title}}" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                Description <span style="color: red">*</span>
                                <textarea  name="service_description" value="{{$service->service_description}}" placeholder="{{$service->service_description}}" class="form-control" required></textarea>
                            </div>
                        </div>

                    </div>
                    <hr>
                    <div class="form-group row justify-content-center">
                        <button type="submit" class="col-4 m-4 btn btn-block btn-md btn-primary">Update</button>
                        
                    </div>
                </form>
                
            </div>
            
        </div>
     
        
    </div>
   
    @endforeach
    </div>
@endsection()
