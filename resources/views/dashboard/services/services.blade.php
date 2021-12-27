@extends("dashboard.layouts.layout1")

@section('content')

  

        <div class="card shadow mb-4">

            <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">
                    @csrf


                    <div class="row">
                        <div class="col-md-12">Services 1
                            <div class="form-group">
                                    <input class="form-control-file border" type="file" multiple="false" name="logo" accept="image/*" id=finput onchange="upload()">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                Title <span style="color: red">*</span>
                                <input type="text" name="subtitle" value="" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                Description <span style="color: red">*</span>
                                <input type="text" name="description" value="" class="form-control" required>
                            </div>
                        </div>

                    </div>
                    <hr>
                    <div class="form-group row justify-content-center">
                        <button type="submit" class="col-4 m-4 btn btn-block btn-md btn-primary">Add</button>
                        
                    </div>
                </form>
            </div>
        </div>


    </div>

@endsection()
