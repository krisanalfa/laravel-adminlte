{{-- Push all 'head.meta' items to the stack --}}
@push('head.meta')
@include('__includes.backend.head.meta')
@endpush

{{-- The 'head' meta.
    You may use @push to append your meta to 'head.meta' stack --}}
@stack('head.meta')

<title>@yield('title', 'Awesome App')</title>

{{-- Push all 'head.styles' items to the stack --}}
@push('head.styles')
@include('__includes.backend.head.styles')
@endpush

{{-- The 'head' styles.
    You may use @push to append your styles to 'head.styles' stack --}}
@stack('head.styles')

{{-- Push all 'head.scripts' items to the stack --}}
@push('head.scripts')
@include('__includes.backend.head.scripts')
@endpush

{{-- The 'head' scripts.
    You may use @push to append your scripts to 'head.scripts' stack --}}
@stack('head.scripts')

{{-- Custom content of your 'head' --}}
@yield('head.content')
