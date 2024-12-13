<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gift types</title>
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
    <h1>Gift Types:</h1>
    @foreach ($types as $type)
        {{$type->type}} <br>
    @endforeach
</body>
</html>