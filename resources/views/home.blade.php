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

    <nav style="background-color: orange; color: red;">
        <ul style="list-style: none; text-align: center;">
            @foreach ($navbar as $link)
                <li style="display: inline-block; margin-right: 1.5rem;">
                    <a href=" {{ route(<?php $string = "$link";
                    echo $string; ?>) }} "
                        style="text-decoration: none; color: inherit; font-size: 2rem;">
                        {{ $link }}
                    </a>
                </li>
            @endforeach

        </ul>
    </nav>
</body>

</html>
