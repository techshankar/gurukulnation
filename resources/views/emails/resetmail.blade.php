<!DOCTYPE html>
<html>
<head>
    <title>Gurukul Nation</title>
</head>
<body>
    <h1>{{ $mailData['title'] }}</h1>
    <p>{{ $mailData['body'] }}</p>

    <form action="{{ URL::to('reset-your-password') }}" method="get">
        <input type="hidden" name="id" value="{{ $mailData['id'] }}">
        <input type="hidden" name="email" value="{{ $mailData['email'] }}">
        <input type="submit" class="btn btn-success" value="Reset Password">
    </form>
  
     
    <p>Thank you</p>
    <p>Gurukul Nation</p>
    <a href="{{ URL::to('/') }}">Gurukulnation.com</a>
</body>
</html>