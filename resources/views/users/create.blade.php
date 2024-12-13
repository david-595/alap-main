<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('user.store')}}" method="POST">
        @csrf
        User name <input type="text" name="person_name">
        User email <input type="text" name="email">
        <input type="submit" value="send">
    </form>
</body>
</html>