<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8">
    <title>livewire</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>

<body>
    {{-- @livewireStyles
    <livewire:home>
    @livewireScripts --}}
    <div>
    <iframe src="{{ url('/Header') }}" name="header" id="header">header</iframe>
    </div>
    <div id="body">
        <iframe src="{{ url('/Menu') }}" name="menu" id="menu"></iframe>
        <iframe src="{{ url('/Main') }}" name="main" id="main"></iframe>
    </div>
    <div>
    <iframe src="{{ url('/Footer') }}" name="footer" id="footer">footer</iframe>
    </div>
</body>

</html>