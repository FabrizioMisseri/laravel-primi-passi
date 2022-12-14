<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>
        HOMEPAGE
    </h1>

    <h3 style="color: green"> {{ $helloWorld }} </h3>

    <ul style="color: red">
        @foreach ($greetingArray as $item)
            <li>
                {{ $item }}
            </li>
        @endforeach
    </ul>
</body>

</html>
