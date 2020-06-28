@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content_header_back_button')
<a href="{{url('admissions')}}" class="btn btn-sm btn-primary float-sm-right ml-2">All admissions</a>
@endsection

@section('bradcum')
<ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active">Dashboard v2</li>
  </ol>
@endsection

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
@stop
@section('plugins.Toast', true)
@section('css')
    @livewireStyles
    <link rel="stylesheet" href="{{asset('css/admin_custom.css')}}">
@stop

@section('js')
    @livewireScripts
    <script> console.log('Hi!'); </script>
    @include('includes.flash-message')
@stop