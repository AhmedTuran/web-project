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
    <h1>insert data</h1>
<form action="{{url('user')}}" method="post">
    {{csrf_field()}}
    <label for="name">Book Name: </label>
    <input type="text" name="name" ><br>
    <label for="password">Author: </label>
    <input type="text" name="password" ><br>
    <label for="email">E_mail:</label>
    <input type="email" name="email" ><br>
    <input type="submit" value="save"><br>
</form>
    <form action="{{url('user')}}" method="get">
        {{csrf_field()}}
{{--        {{method_field('DELETE')}}--}}
        <button type="submit" >show the table</button>

</div>
</body>
</html>
