<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div align="center">
   <h1>book list </h1><br>
    <table border="1">
        <thead border="1">
        <tr>
            <th><h3><strong>Book Name</strong></h3></th>
            <th><h3><strong>Author Name</strong></h3></th>
            <th><h3><strong>Author Email</strong></h3></th>
            <th><h3><strong>operation</strong></h3></th>
        </tr>
        </thead>
        <tbody>
        @foreach($allUsers as $users)
        <tr>
            <th>{{$users->name}}</th>
            <th>{{$users->password}}</th>
            <th>{{$users->email}}</th>
            <td>
                <form action="{{url('user/'.$users->id)}}" method="post">
                    {{csrf_field()}}
                    {{method_field('PUT')}}
                    <button type="submit" >up date</button>
                </form>
                <form action="{{url('user/'.$users->id)}}" method="post">
                {{csrf_field()}}
                    {{method_field('DELETE')}}
                    <button type="submit" >delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
        <tfoot></tfoot>
    </table>
    <form action="{{url('user/create')}}" method="get">
        {{csrf_field()}}
        <button type="submit" >creat new book</button> </form>
</div>
</body>
</html>
