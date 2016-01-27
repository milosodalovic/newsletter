<!DOCTYPE html>
<html>

<head>
    <title>Sign Up Confirmation</title>
</head>

<body>

    <h1>Thanks for signing up!</h1>

    <p>
        We just need you to <a href='{{ url("newsletters/signup/confirm/{$subscription->token}") }}' > confirm your email address</a> very quick!
    </p>

</body>
</html>
