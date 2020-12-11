<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>create data</title>
    <style>
    .error{
    border-width:5px;
    border-style:solid;
    width: 25%;
    }</style>
</head>
<body>


<div align="center">
    <h1>Edit data</h1>
    <form action="{{url('user/'.$one_user->id.'/edit')}}" method="get">
        {{csrf_field()}}
    <label for="name">Book Name: </label>
    <input type="text" name="name" value="{{$one_user->name}}"><br>
    <label for="password">Author: </label>
    <input type="text" name="password" value="{{$one_user->password}}" ><br>
    <label for="email">E_mail:</label>
    <input type="email" name="email" value="{{$one_user->email}}"><br>
    <input type="submit" value="save"><br>
</form>

</div>
</body>
</html>
