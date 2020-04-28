<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
Hello {{ Session::get('lecturerid') }} <a href="logout">Logout</a>
<br><br>

<a href="lectureradd">+ Lecturer</a>
<br><br>

<table border="1">
    <tr>
        <th>Lecturer ID</th>
        <th>Name</th>
        <th colspan="2">Action</th>
    </tr>
    @foreach ($lecturers as $key => $lecturer)
        <tr>
            <td>{{ $lecturer->lecturer_id }}</td>
            <td>{{ $lecturer->name}}</td>
            <td>
                <form action="{{ url('/lecturerdelete', ['id' => $lecturer->id]) }}" method="post">
                    <input class="btn btn-default" type="submit" value="Delete"/>
                    @method('delete')
                    @csrf
                </form>


            </td>
            <td>
                <a href="/lecturerupdate/{{$lecturer->id}}">Update</a>
            </td>
        </tr>
    @endforeach
</table>
</body>
</html>
