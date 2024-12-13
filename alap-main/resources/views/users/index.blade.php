<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users adataik</title>
</head>
<body>
    <h1>Users data:</h1>

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
    <h1>User data:</h1>
    @foreach ($types as $type)
        {{$type->type}} <br>
    @endforeach
</body>
</html>