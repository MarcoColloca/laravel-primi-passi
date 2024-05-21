<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello Laravel</title>
    <link rel="stylesheet" href="/style/style.css">
</head>
<body>
    <header>
        <nav>
            <ul class="navbar">
                <li>
                    <a href="{{url('/duck')}}">Duck</a>
                </li>
                <li>
                    <a href="{{route('fly')}}">Flayer</a>
                </li>
            </ul>
        </nav>
    </header>


    <main>
        <div class="title-box">
            <h1 class="title">
                Hello World!
            </h1>
        </div>        
    </main>
</body>

<style>
    /* body{
        background-color: blueviolet;
    } */
</style>
</html>