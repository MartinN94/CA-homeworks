<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ContactUs</title>
</head>
<body>
    <form action="/contact-us" method="post">
        @csrf
        <h1>Contact Us Form</h1>
        <label for="name">Enter your name</label> 
        <input type="text" name="name" id="name">
        <br>
        <br>
        <label for="email">Enter your email</label>
        <input type="email" name="email" id="email">
        <br>
        <br>
        <br>
        <button type="submit">Send data</button>
        <br>
        @if (session('message'))
            <p>{{session('message')}}</p>
        @endif
    </form>
</body>
</html>