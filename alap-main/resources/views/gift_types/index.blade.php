<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gift types</title>
</head>
<body>
    <h1>Gift Types:</h1>
    @foreach ($types as $type)
        {{$type->type}}
    @endforeach
</body>
</html>