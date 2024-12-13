<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>new users</title>
</head>
<body>
    @if ($errors->any())
        <ul>
            @foreach ($errors as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    @if (session('success'))    
        <p>{{session('success')}}</p>   
    @endif
    <h1>Add New Users</h1>
    <form action="{{route('users.create')}}" method="POST">
        @csrf
        <input type="text" name="person_name" id="person_name">
        <input type="text" name="email" id="email">
        <input type="submit" value="Add user">
    </form>
</body>
</html>