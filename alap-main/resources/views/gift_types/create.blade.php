<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New gift type</title>
</head>
<body>
    <form action="{{route('gift_types.create')}}" method="POST">
        @csrf
         <input type="text" name="type" id="type">
        <input type="submit" value="New gift type">
    </form>
</body>
</html>