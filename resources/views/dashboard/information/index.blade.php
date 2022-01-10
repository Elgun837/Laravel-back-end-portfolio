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
                <form action="{{ route('admin-panel.information.updateInfo') }}" method="post" enctype="multipart/form-data">
                    @csrf


                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                Information background image
                                <input class="form-control-file border" type="file" multiple="false" name="info_image">
                            </div>
                        </div>
                        <div class="col-md-6">
                        <div class="col-md-12">
                            <div class="form-group">
                                Title <span style="color: red">*</span>
                                <input type="text" name="info_title" value="{{$info->info_title}}" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                Subtitle <span style="color: red">*</span>
                                <input type="text" name="info_subtitle" value="{{$info->info_subtitle}}" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                Description <span style="color: red">*</span>
                                <textarea  name="info_description" value="{{$info->info_description}}" class="form-control" required>{{$info->info_description}}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                    <button type="submit" class="btn btn-block btn-md btn-primary">Update</button>
                     </div>
                    </div>
                    </div>
                    <hr>
                </form>
            </div>
        </div>
        <div class="card shadow mb-4">

             <div class="card-body">
                    <form action="{{ route('admin-panel.information.updateAbout') }}" method="post" enctype="multipart/form-data">
                        @csrf


                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <input class="form-control-file border" type="file" multiple="false" name="info_section_image" accept="image/*" id=finput onchange="upload()">
                                </div>
                            </div>
                            <div class="col-md-6">
                            <div class="col-md-12">
                                <div class="form-group">
                                    Title <span style="color: red">*</span>
                                    <input type="text" name="info_section_title" value="{{$info->info_section_title}}" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    Subtitle <span style="color: red">*</span>
                                    <input type="text" name="info_section_subtitle" value="{{$info->info_section_subtitle}}" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    Description <span style="color: red">*</span>
                                    <textarea name="info_section_descriotion" value="{{$info->info_section_descriotion}}" class="form-control">{{$info->info_section_descriotion}}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-block btn-md btn-primary">Update</button>
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
            <div class="form-group">
                 <button type="submit" class="btn btn-block btn-md btn-primary">Update</button>
            </div>
        </div>
        </div>
        <hr>
    </form>
</div>
</div>

</div>
    





@endsection()
