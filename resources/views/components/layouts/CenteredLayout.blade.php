<html>
    <x-head/>
    <body class="h-[100vh] absolute top-0 w-[100vw]">
        <x-header/>
        <main class="h-[95vh] flex-container justify-center">
            @yield('content')
        </main>
        <x-footer/>
    </body>
</html>
