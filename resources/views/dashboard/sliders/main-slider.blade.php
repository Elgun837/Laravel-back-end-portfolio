@extends("dashboard.layouts.layout1")

@section('content')

    
    @foreach($slides as $slide)

        <div class="card shadow mb-4">

            <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">
                    @csrf


                    <div class="row">
                        <div class="col-md-6">Slide 1
                            <div class="form-group">

                                <p>
                                    Logo (125x42)
                                    <input class="form-control-file border" type="file" multiple="false" name="logo" accept="image/*" id=finput onchange="upload()">
                            </div>
                        </div>
                        <div class="col-md-6">
                        <div class="col-md-12">
                            <div class="form-group">
                                Subtitle <span style="color: red">*</span>
                                <input type="text" name="subtitle" value="" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                Title <span style="color: red">*</span>
                                <input type="text" name="title" value="" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                Description <span style="color: red">*</span>
                                <input type="text" name="description" value="{{ $slide->description}}" class="form-control" required>
                            </div>
                        </div>
                      
                        <div class="col-md-6">
                            <div class="form-group">
                                Button <span style="color: red">*</span>
                                <input type="text" name="author" value="" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                Button link
                                <input type="text" value="" name="copyright" class="form-control">
                            </div>
                        </div>
                    
                    </div>
                    
        </div>

                    
                    <hr>
                    <div class="form-group row justify-content-center">
                        <button type="submit" class="col-3 m-4 btn btn-block btn-md btn-success">Update</button>
                        <button type="submit" class="col-3 m-4 btn btn-block btn-md btn-danger">Delete</button>
                        
                    </div>
                </form>
            </div>
        </div>
@endforeach()

 
@endsection()
