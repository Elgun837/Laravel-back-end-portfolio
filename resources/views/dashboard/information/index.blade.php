@extends("dashboard.layouts.layout1")

@section('content')

   
        <div class="card shadow mb-4">

            <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">
                    @csrf


                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <input class="form-control-file border" type="file" multiple="false" name="logo" accept="image/*" id=finput onchange="upload()">
                            </div>
                        </div>
                        <div class="col-md-6">
                        <div class="col-md-12">
                            <div class="form-group">
                                Title <span style="color: red">*</span>
                                <input type="text" name="title" value="" class="form-control" required>
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
                                Description <span style="color: red">*</span>
                                <input type="text" name="description" value="" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    </div>
                    <hr>
                </form>
            </div>
        </div>
        <div class="card shadow mb-4">

<div class="card-body">
    <form action="" method="post" enctype="multipart/form-data">
        @csrf


        <div class="row">
            <div class="col-md-5">
                <div class="form-group">
                    <input class="form-control-file border" type="file" multiple="false" name="logo" accept="image/*" id=finput onchange="upload()">
                </div>
            </div>
            <div class="col-md-6">
            <div class="col-md-12">
                <div class="form-group">
                    Title <span style="color: red">*</span>
                    <input type="text" name="title" value="" class="form-control" required>
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
                    Description <span style="color: red">*</span>
                    <input type="text" name="description" value="" class="form-control" required>
                </div>
            </div>
        </div>
        </div>
        <hr>
    </form>
</div>
</div>
    
        <div class="card shadow mb-4">

<div class="card-body">
    <form action="" method="post" enctype="multipart/form-data">
        @csrf

        Social links
        <div class="row">
            <div class="col-md-5">
            <div class="col-md-12">
                <div class="form-group">
                    Facebook <span style="color: red">*</span>
                    <input type="text" name="facebook" value="" class="form-control" required>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    Youtube <span style="color: red">*</span>
                    <input type="text" name="youtube" value="" class="form-control" required>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    Twitter <span style="color: red">*</span>
                    <input type="text" name="twitter" value="" class="form-control" required>
                </div>
            </div>
            </div>
            <div class="col-md-6">
            <div class="col-md-12">
                <div class="form-group">
                    Instagram <span style="color: red">*</span>
                    <input type="text" name="instagram" value="" class="form-control" required>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    Behance <span style="color: red">*</span>
                    <input type="text" name="behance" value="" class="form-control" required>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    Github <span style="color: red">*</span>
                    <input type="text" name="github" value="" class="form-control" required>
                </div>
            </div>
        </div>
        </div>
        <hr>
    </form>
</div>
</div>


    </div>
    





@endsection()
