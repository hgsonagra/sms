@extends('layout.main')
@section('My-Content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Student Registration</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Student Registration</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="container">
        <form action="/form-save" method="post">
            @csrf
            <div class="text-center">
                <img src="" alt="" id="">
            </div>
            <div class="mb-3">
                <label for="photo" class="form-label">Photo :</label>
                <input class="form-control" type="file" name="photo">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Student name :</label>
                <input type="text" class="form-control" name="name" placeholder="Full name" value="{{old('name')}}">

                <span class="text-danger">@error('name')
                    {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="mb-3">
                <label for="birthdate" class="form-label">Birth Date:</label>
                <input type="date" class="form-control" name="birthdate">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Father name :</label>
                <input type="text" class="form-control" name="fathername" placeholder="Full name"
                    value="{{old('name')}}">

                <span class="text-danger">@error('name')
                    {{ $message }}
                    @enderror
                </span>
            </div>

            <div class="mb-3">
                <label for="number" class="form-label">Number :</label>
                <input type="text" class="form-control" name="number" placeholder="Parent's Number"
                    value="{{old('number')}}">

                <span class="text-danger">@error('number')
                    {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="form-floating mb-3">
                <label for="address" class="form-label">Address :</label>
                <textarea class="form-control" placeholder="type your full address here" name="address"></textarea>
            </div>
            <div class="mb-3">
                <label for="gender" class="form-label">Gender :</label>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" name="gender" value="male">
                    <label class="form-check-label">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" name="gender" value="female">
                    <label class="form-check-label">Female</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" name="gender" value="other">
                    <label class="form-check-label">Other</label>
                </div>
                <span class="text-danger">@error('standard') {{ $message }} @enderror</span>
            </div>


            <div class="text-center">
                @if(isset($_GET['id']) && !empty($_GET['id']))
                <input type="submit" class="btn btn-warning" name="update" value="Update">
                <input type="hidden" name="id" value="{{$_GET['id']}}">
                @else
                <input type="submit" class="btn btn-success" name="save" value="Submit">
                @endif
            </div>
        </form>

    </div>
</div>

@endsection