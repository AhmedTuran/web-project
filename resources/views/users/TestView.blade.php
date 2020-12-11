<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>creat new account</title>
    <style>
        .all {
            margin: auto;
            width: 50%;
            border: 3px solid gray;
            padding: 10px;
        }
    </style>
</head>
<body class=" all">
<br><br>
<form action="{{url('co')}}" method="post">
    {{csrf_field()}}
    <div class="info">
    <p class="full_name">
        <label for="User name">User name: </label>
        <input type="text" id="User name" name="User name"><br><br>
        <label for="fname">First name: </label>
        <input type="text" id="fname" name="fname"><br><br>
        <label for="lname">Last name: </label>
        <input type="text" id="lname" name="lname"><br><br>
    </p>
    <p class="password">
        <label for="password">password: </label>
        <input type="password" id="password" name="password"><br><br>
        <label for="Re_write password">Re_write password: </label>
        <input type="password" id="Re_write password" name="Re_write password"><br><br>
    </p>
    <p class="E_mail">
        <label for="E_mail">E_mail: </label>
        <input type="email" id="E_mail" name="E_mail"><br><br>
    </p>
</div>
    <input type="submit">


</form>
</body>
</html>

