<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="{{ app() -> getLocale() === 'ar' ? 'rtl' : 'ltr'}}">
<head>
<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>
<body>
    <livewire:chatuser />
</body>
</html>
