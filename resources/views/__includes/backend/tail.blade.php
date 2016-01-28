{{-- Custom 'tail' content. --}}
@yield('tail.content')

{{-- Lets push our base javascript assets here. --}}
@push('scripts')
@include('__includes.backend.tail.scripts')
@endpush

{{-- The 'tail' scripts.
    You may use @push to append your script to 'scripts' stack. --}}
@stack('scripts')
