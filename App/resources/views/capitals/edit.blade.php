<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Capitals</title>
</head>
<body>
<h1>Edit capital</h1>
<form action="/capitals/{{$capital->id}}" method="post" enctype="multipart/form-data">
    @method('PATCH')
    <div>
        <div>
            <label for="name">Name</label>
        </div>
        <input id="name" name="name" type="text" placeholder="Name" required="required" data-error="Name" value="{{$capital->name}}">
    </div>
    <div>
        <div>
            <label for="country">Country</label>
        </div>
        <input id="country" name="country" type="text" placeholder="Country" required="required" data-error="Country" value="{{$capital->country}}">
    </div>
    <div>
        <div>
            <label for="population">Population</label>
        </div>
        <input id="population" name="population" type="number" placeholder="Population" required="required" data-error="Population" value="{{$capital->population}}">
    </div>
    <div>
        <div>
            <label for="photo">Photo</label>
        </div>
        <input id="photo" name="file" type="file" placeholder="photo" required="required" data-error="Photo" accept="image/jpeg,image/png,image/jpg">
    </div>
    @csrf

    <button type="submit">Save</button>
</form>
</body>
</html>

