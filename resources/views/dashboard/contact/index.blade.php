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
                <form action="{{route('admin-panel.contact-us.update')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                Tel number <span style="color: red">*</span>
                                <input type="number" name="tel_number"  placeholder="{{$contact->tel_number}}" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                Email <span style="color: red">*</span>
                                <input type="mail" name="email" value="{{$contact->email}}" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                Location <span style="color: red">*</span>
                                <input type="text" name="location" value="{{$contact->location}}" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                Map <span style="color: red">*</span>
                                <input type="text" name="map" value="{{$contact->map}}" class="form-control">
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
