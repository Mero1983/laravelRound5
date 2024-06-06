@extends('layouts.main')
@section('menu')
<li><a href="/">Homebage</a></li>

@endsection
@push('submenu')
<li><a href="/">testpage</a></li>

@endpush

@prepend('submenu')
<li><a href="/">testpage2</a></li>
@endprepend
