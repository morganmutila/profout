<x-app-layout title=" - Why Profout">

    @push('styles')
        <link rel="stylesheet" href="{{ asset('assets/css/header.css') }}">
    @endpush

    <main class="main">



        <h1>Why Profout?</h1>
        <p>This is the Why Profout? page.</p>

    </main>


    @push('scripts')
        <script src="{{ asset('assets/js/header.js') }}"></script>
    @endpush

</x-app-layout>
