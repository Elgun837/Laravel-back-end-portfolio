@extends("dashboard.layouts.layout1")

@section('content')

    <div class="container-fluid">

        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Information</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> Go back to site</a>
        </div>

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
                        <button type="submit" class="col-4 m-4 btn btn-block btn-md btn-primary">Update</button>
                        <button type="submit" class="col-4 m-4 btn btn-block btn-md btn-danger">Delete</button>
                    </div>
                </form>
            </div>
        </div>
        <h2> Logo slider </h2>
        <div class="card shadow mb-4">

            <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">
                    @csrf


                    <div class="row">
                        <div class="col-md-4">Logo 1
                            <div class="form-group">

                                <canvas id= "canv1" ></canvas>

                                <p>
                                    Logo (125x42)
                                    <input class="form-control-file border" type="file" multiple="false" name="logo" accept="image/*" id=finput onchange="upload()">
                            </div>
                        </div>
                        <div class="col-md-4">Logo 2
                            <div class="form-group">

                                <canvas id= "canv1" ></canvas>

                                <p>
                                    Logo (125x42)
                                    <input class="form-control-file border" type="file" multiple="false" name="logo" accept="image/*" id=finput onchange="upload()">
                            </div>
                        </div>
                        <div class="col-md-4">Logo 3
                            <div class="form-group">

                                <canvas id= "canv1" ></canvas>

                                <p>
                                    Logo (125x42)
                                    <input class="form-control-file border" type="file" multiple="false" name="logo" accept="image/*" id=finput onchange="upload()">
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-4">Logo 4
                            <div class="form-group">

                                <canvas id= "canv1" ></canvas>

                                <p>
                                    Logo (125x42)
                                    <input class="form-control-file border" type="file" multiple="false" name="logo" accept="image/*" id=finput onchange="upload()">
                            </div>
                        </div>
                        <div class="col-md-4">Logo 5
                            <div class="form-group">

                                <canvas id= "canv1" ></canvas>

                                <p>
                                    Logo (125x42)
                                    <input class="form-control-file border" type="file" multiple="false" name="logo" accept="image/*" id=finput onchange="upload()">
                            </div>
                        </div>
                        <div class="col-md-4">Logo 6
                            <div class="form-group">

                                <canvas id= "canv1" ></canvas>

                                <p>
                                    Logo (125x42)
                                    <input class="form-control-file border" type="file" multiple="false" name="logo" accept="image/*" id=finput onchange="upload()">
                            </div>
                        </div>

                    </div>

                    <div class="row">
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
