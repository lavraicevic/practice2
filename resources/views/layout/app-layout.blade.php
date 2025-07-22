@section('title', 'TechBlog')
<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
     @vite('resources/css/main.css')
     @yield('styles')
</head>
<body>
    <header>  
        @include('partials.nav')
    </header>

    @yield('content')
    

    @include('partials.footer')
</body>
</html>