<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <center style="margin-top: 20%">
        <b style="font-size: larger">Hi, {{ Auth::user()->name }}!</b><br>
        <span>Click </span>
        <a href="{{url('logout')}}">here</a>
        <span> to Logout</span>
    </center>
</body>
</html>