<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Capitals</title>
</head>
<body>
    <h1>Capitals</h1>
    <ul>
        @foreach($capitals as $capital)
            <li><a href="capitals/{{$capital->id}}">{{$capital->name}}, {{$capital->country}}</a></li>
        @endforeach
    </ul>
    <button><a href="{{ route('capitals.create') }}">Add</a></button>
</body>
</html>
