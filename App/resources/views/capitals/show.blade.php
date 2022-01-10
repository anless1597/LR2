<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Capitals</title>
</head>
<body>
<div>
    <h1>{{$capital->name}}</h1>
    <h2>Country: {{$capital->country}}</h2>
    <h2>Population: {{$capital->population}}</h2>
    <img src="{{asset($capital->photo_url)}}" alt="{{$capital->photo_url}}" style="width: 400px; height: 400px;">
</div>
    <div >
        <button><a href="/capitals/{{ $capital->id }}/edit" >Edit</a></button>
        <form action="/capitals/{{ $capital->id }}" method="POST">
            @method('DELETE')
            @csrf
            <button type="submit" >Delete</button>
        </form>

    </div>
</body>
</html>
