@extends("dashboard.layouts.layout1")

@section('content')

    <div class="container-fluid">

        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Sliders</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="text-white-50"></i>Add new slide</a>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> Go back to site</a>
        </div>
    @foreach($slides as $slide)

        <div class="card shadow mb-4">

            <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">
                    @csrf


                    <div class="row">
                        <div class="col-md-12">Slide 1
                            <div class="form-group">

                                

                                <p>
                                    Logo (125x42)
                                    <input class="form-control-file border" type="file" multiple="false" name="logo" accept="image/*" id=finput onchange="upload()">
                            </div>
                        </div>
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

</div>

                    <div class="row">
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
