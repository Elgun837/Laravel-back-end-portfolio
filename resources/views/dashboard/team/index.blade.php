@extends("dashboard.layouts.layout1")

@section('content')

    <div class="container-fluid">

        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Team</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="text-white-50"></i>Add Team member</a>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> Go back to site</a>
        </div>


        <div class="row">
        <div class="card shadow mb-4 col-lg-8">
            <div class="card-body">
            <table class="table">


                <caption>List of member</caption>

                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Name</th>
                    <th scope="col">Name</th>
                    <th scope="col">About</th>
                </tr>
                </thead>
                <tbody>
                @foreach($teams as $team)

                <tr>
                    <th scope="row"></th>
                    <td><img src="{{ asset('storage/uploads/members/'.$team->team_member_image) }}" width="75px"></td>
                    <td>{{$team->team_member_name}}</td>
                    <td>{{$team->team_member_duty}}</td>
                    <td>{{$team->team_member_about}}</td>
                    <td>
                        <form action="{{ route('admin-panel.team.destroy',$team->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger"><i class="fa fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
                </tbody>
                @endforeach
            </table>
            </div>
        </div>
        <div class="card shadow mb-4 col-lg-4">

            <div class="card-body">
                <form action="{{ route('admin-panel.team.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-md-12">Member
                            <div class="form-group">

                                <canvas id= "canv1" ></canvas>

                                <p>
                                    Photo
                                    <input class="form-control-file border" type="file" multiple="false" name="team_member_image" accept="image/*">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                Name <span style="color: red">*</span>
                                <input type="text" name="team_member_name" value="" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                Duty <span style="color: red">*</span>
                                <input type="text" name="team_member_duty" value="" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                Information <span style="color: red">*</span>
                                <input type="text" name="team_member_about" value="" class="form-control" required>
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


    </div>



@endsection()
