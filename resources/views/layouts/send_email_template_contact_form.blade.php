<html>
    <head></head>
    <body style="background: black; color: white">
        <h1>{{ $data['name'] }}</h1>
        <p>Hello, this is <strong>{{ $data['name'] }}</strong>.</p>
        <p>I have some query like, {{ $data['message'] }}.</p>
        {{ $data['email'] }}
        <p>It would be appriciative, if you gone through this feedback.</p>

    </body>
</html>