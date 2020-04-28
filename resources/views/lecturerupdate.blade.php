<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Update Lecturer</h1>
<br>
Hello {{ Session::get('lecturerid') }} <a href="logout">Logout</a>
<br><br>
<form action="{{ url('/lecturerupdatesave', ['id' => $lecturer->id]) }}" method="post">
    @method('PUT')
    @csrf
    <div class="form-group">

        <label for="lecturer_id">Lecturer Id:</label>
        <input type="text" class="form-control" name="lecturer_id" value={{ $lecturer->lecturer_id }} />
    </div>

    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" name="name" value={{ $lecturer->name }} />
    </div>
    <input type="submit" name="submit" value="Save">
</form>
</form>
</body>
</html>
