<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeroen Bollen</title>
    <link rel="stylesheet" href="{{ asset('public/css/app.css') }}" />
    
</head>
<body class="bg-grey-700 text-white">
    <header > 
        Header 
    </header>
    <main> 
        @yield('page-content')
    </main>
    <footer>
        footer
    </footer>
</body>
</html>