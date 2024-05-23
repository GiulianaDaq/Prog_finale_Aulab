<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
   

    <title>{{$title ?? 'D^3F Solutions'}}</title>
    <link rel="icon" href="/img/favicon.png" type="image/x-icon">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="overflow-custom ">
    <x-navbar/>
            

        <div class="min-vh-100 ">
             {{ $slot }}
        </div>
    <x-footer/>
</body>
</html>