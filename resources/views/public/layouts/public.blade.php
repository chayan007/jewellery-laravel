<!doctype html>
<html lang="en">

@include('public.includes.head')

<body>
@include('public.includes.header')

@yield('content')

@include('public.includes.subscription')

@include('public.includes.footer')

@include('public.includes.foot')
</body>

</html>