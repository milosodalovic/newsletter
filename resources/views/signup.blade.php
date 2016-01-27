@extends('layout')

@section('content')

    @include('errors/list')
    <form data-parsley-validate method="post" action="/newsletters/signup">
        {{csrf_field()}}

        <div class="col-md-4 col-md-offset-4 text-center ">
            <div class="form-group">
                <label for="name">First Name:</label>
                <input type="text" name="name" class="form-control" placeholder="Your Name..." value="{{old('name')}}" data-parsley-pattern="^[A-Za-z]*$" data-parsley-length ="[2,50]" data-parsley-required-message="Name is missing" pattern="^[A-Za-z]*$" required>
            </div>

            <!-- Text field for inserting city -->
            <div class="form-group">
                <label for="surname">Last Name:</label>
                <input type="text"  name="surname" class="form-control" placeholder="Last Name..." value="{{old('surname')}}" data-parsley-pattern="^[A-Za-z]*$" data-parsley-length="[2,50]" data-parsley-required-message="Last name is missing" pattern="^[A-Za-z]*$" required>
            </div>

            <!-- Text field for inserting zip -->
            <div class="form-group">
                <label for="email">E-mail address:</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Type your email..." value="{{old('email')}}" required>
            </div>
        </div>

        <div class="col-md-12 text-center">
            <hr>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>


@endsection