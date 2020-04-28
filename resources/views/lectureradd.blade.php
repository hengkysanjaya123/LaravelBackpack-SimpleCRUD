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
<h1>Add New Lecturer</h1>
<br>
Hello {{ Session::get('lecturerid') }} <a href="logout">Logout</a>
<br><br>

{{Form::open(array('action'=> 'Admin\LecturerCrudController@lectureraddsave'))}}
{{Form::text('lecturer_id', "", array('placeholder'=> 'Lecturer ID', "required" => ""))}}
{{Form::text('name', "", array('placeholder'=> 'Name' ,"required"=>""))}}
<input type="submit" name="submit" value="Save">
</form>
</body>
</html>
