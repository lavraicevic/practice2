@section('title', 'TechBlog')
<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
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