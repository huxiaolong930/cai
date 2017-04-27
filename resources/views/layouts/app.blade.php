<!DOCTYPE html>
<html lang="en">

@section('htmlheader')
    @include('layouts.partials.htmlheader')
@show

<body class="bg">

<!-- Main content -->
<section class="content">
    <!-- Your Page Content Here -->
    @include('layouts.partials.menu')

    @if(isset($is_login) && $is_login)
        @include('layouts.partials.user')
    @else
        @include('layouts.partials.login')
    @endif

    @yield('main-content')
</section><!-- /.content -->

@include('layouts.partials.footer')

@section('scripts')
    @include('layouts.partials.scripts')
@show

</body>
</html>
