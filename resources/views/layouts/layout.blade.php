@include('components.head')
@include('components.header')
<section id="main" class="ml-64">
    @include('components.sidebar')
    @yield('content')
</section>
{{-- @include('components.footer')   --}}
</body>

</html>
