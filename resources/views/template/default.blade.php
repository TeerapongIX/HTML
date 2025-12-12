<!DOCTYPE html>
<html>
    <head>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;500;600&display=swap" rel="stylesheet">
        <title>HTML @yield('title')</title>
        <style>
            body {
                font-family: "Sarabun", sans-serif;
                font-weight: 500;
                font-style: normal;
                }

            input[type="text"],
            input[type="date"],
            input[type="number"],
            select, textarea {
                border: 1px solid #686767ff;
                border-radius: 3px;
            }

        </style>
        @stack('styles')

    </head>
    <body>
        <div class="container mt-4">
            <h1>File Default</h1>
            @yield('content')
        </div>
        @stack('scripts')
        

    </body>
</html>
