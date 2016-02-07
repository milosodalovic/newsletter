@extends('layout')

@section('content')

    @include('errors/list')
    <form data-parsley-validate method="post" action="/newsletters/signup">
        {{csrf_field()}}

                <!--Reg Block-->
        <div class="reg-block">
            <div class="reg-block-header">
                <h2>Sign Up</h2>
                <ul class="social-icons text-center">
                    <li><a class="rounded-x social_facebook" data-original-title="Facebook" href="#"></a></li>
                    <li><a class="rounded-x social_twitter" data-original-title="Twitter" href="#"></a></li>
                    <li><a class="rounded-x social_googleplus" data-original-title="Google Plus" href="#"></a></li>
                    <li><a class="rounded-x social_linkedin" data-original-title="Linkedin" href="#"></a></li>
                </ul>
                <p>Already Signed Up? Click <a class="color-green" href="#">Sign In</a> to login your account.</p>
            </div>

            <div class="input-group margin-bottom-20">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" name="name" placeholder="First Name" value="{{old('name')}}" data-parsley-pattern="^[A-Za-z]*$" data-parsley-length ="[2,50]" data-parsley-required-message="Name is missing" pattern="^[A-Za-z]*$" required>

            </div>
            <div class="input-group margin-bottom-20">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" name="surname" placeholder="Last Name" value="{{old('surname')}}" data-parsley-pattern="^[A-Za-z]*$" data-parsley-length="[2,50]" data-parsley-required-message="Last name is missing" pattern="^[A-Za-z]*$" required>
            </div>
            <div class="input-group margin-bottom-20">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input type="text" class="form-control" name="email" placeholder="Email" value="{{old('email')}}" required>
            </div>
            <hr>

            <div class="checkbox">
                <label>
                    <input type="checkbox">
                    I read <a target="_blank" href="page_terms.html">Terms and Conditions</a>
                </label>
            </div>

            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <button type="submit" class="btn-u btn-block">Register</button>
                </div>
            </div>
        </div>
        <!--End Reg Block-->
    </form>


@endsection