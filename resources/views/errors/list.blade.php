@if($errors->any())
    <ul class="alert alert-danger">
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    {{--@if($errors->has('email', '<p>:The email has already been taken.</p>'))--}}
       {{----}}
    {{--@endif--}}
@endif