@section('title', 'TechBlog')
<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
     @vite('resources/css/main.css')
</head>
<body>
    @include('partials.nav')
    <section>
        <h1>Begininng</h1>
    </section>

    

    <div class="content">
        @yield('content')
    </div>
</body>
</html>