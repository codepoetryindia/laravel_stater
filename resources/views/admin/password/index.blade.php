@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Channge your password</h1>
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
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Password reset</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
            class="fas fa-minus"></i></button>
        {{-- <button type="button" class="btn btn-tool" data-card-widget="remove"><i
            class="fas fa-times"></i></button> --}}
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        @livewire('admin.admin-password-change')
    </div>
</div>
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