<!DOCTYPE html>
<html>
    <head>
        {{-- A head. --}}
        @section('head')
        @include('__includes.backend.head')
        @show
    </head>

    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            {{-- A header. --}}
            @section('header')
            @include('__includes.backend.header')
            @show

            {{-- A sidebar. --}}
            @section('sidebar')
            @include('__includes.backend.sidebar')
            @show

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    {{-- Titling your content. --}}
                    <h1>@yield('title', 'Awesome App')</h1>

                    {{-- Breadcrumb. --}}
                    @section('breadcrumb')
                    @include('__includes.backend.breadcrumb')
                    @show
                </section>

                <!-- Main content -->
                <section class="content">
                    {{-- As it said, here's the main content. --}}
                    @yield('content')
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

            {{-- A footer. --}}
            @section('footer')
            @include('__includes.backend.footer')
            @show
        </div>
        <!-- ./wrapper -->

        {{-- Tail usually contents scripts file. But you may fill something 'different' here. --}}
        @section('tail')
        @include('__includes.backend.tail')
        @show
    </body>
</html>
