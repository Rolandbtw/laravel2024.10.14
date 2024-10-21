<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content ="{{ csrf_token() }}">
    <link rel="stylesheet" href="style.css">
    <title>{{config('app.name','Carlog')}}</title>
</head>
<body>
    <div>
        <div>

            <div class="menucontainer">
                <div class="menuleft">
                    <a href="{{route("home")}}"><img src="home.png" alt=""></a>
                </div>
                <div class="menuright">
                    <a href="{{route("makers")}}">Gyártók</a>
                    <a href="{{route("fuels")}}">Üzemanyagok</a>
                </div>
            </div>

            <main class="py-4">
                
                @yield('content')
            </main>
        </div>
        <footer class="text-center">
            
        </footer>
    </div>
</body>
</html>