@extends("dashboard.layouts.layout1")

@section('content')


        <div class="card shadow mb-4">

            <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">
                    @csrf


                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                Tel number <span style="color: red">*</span>
                                <input type="number" name="number" value="" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                Email <span style="color: red">*</span>
                                <input type="mail" name="email" value="" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                Location <span style="color: red">*</span>
                                <input type="text" name="location" value="" class="form-control" required>
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
