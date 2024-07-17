@extends('admin.admin')
@section('content')

<form class="mx-1 mx-md-4" action="{{ url('/Product') }}" method="post" enctype="multipart/form-data">@csrf
    <div class="d-flex flex-row align-items-center ">
        <input type="text" name="name" id="" placeholder="Enter Name" class="form-control" />

    </div>
    <div class="d-flex flex-row align-items-center mt-4">
        <input type="file" name="image" id="" placeholder="Enter image" class="form-control" />

    </div>
    <div class="d-flex flex-row align-items-center mt-4">
        <input type="number" name="price" id="" placeholder="Enter Price" class="form-control" />

    </div>
    <div class="d-flex justify-content-center mt-4 mx-4 mb-lg-4">
        <button type="submit" id="" class="btn btn-primary btn-lg mx-3">Save</button>
    </div>
</form>
@endsection
