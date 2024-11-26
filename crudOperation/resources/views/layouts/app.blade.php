<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>document</title>
        @include('libraries.style')
    </head>
    <body>
        @include('components.nav')
        @yield('content')

    @include('libraries.script')
    </body>
</html>
