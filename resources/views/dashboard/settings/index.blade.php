@extends("dashboard.layouts.layout1")

@section('content')



    <div class="card shadow mb-4">
    
        <div class="card-body">
            <form action="{{ route('admin-panel.settings.update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            Title <span style="color: red">*</span>
                            <input type="text" name="title" value="{{ $settings->title }}" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            Subtitle
                            <input type="text" value="{{ $settings->subtitle}}" name="subtitle" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">

                            <div class="admin-img-box">
                                <img src="{{ asset($settings->logo) }}"  width="125px" alt="logo">
                            </div>

                            <p>
                                Logo (125x42)
                            <input class="form-control-file border" type="file" multiple="false" name="logo" accept="image/*" id=finput onchange="upload()">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="admin-img-box">
                                <img src="{{asset($settings->favicon)}}" width="125px"  alt="logo">
                            </div>
                            <p>
                            Favicon
                            <input class="form-control-file border" type="file" multiple="false" name="favicon" accept="image/*" id=favinput onchange="upload_2()">
                        </div>
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            Description <span style="color: red">*</span>
                            <input type="text" name="description" value="{{ $settings->description}}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            Keywords
                            <input type="text" value="{{ $settings->keywords}}" name="keywords" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            Author <span style="color: red">*</span>
                            <input type="text" name="author" value="{{ $settings->author}}" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            Copyright
                            <input type="text" value="{{ $settings->copyright}}" name="copyright" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-block btn-md btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>

    </div>


@endsection()
