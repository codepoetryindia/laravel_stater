@extends('pages.partials.master')

@inject('layoutHelper', App\Http\Controllers\Helpers\LayoutHelper)


@section('adminlte_css')
    @stack('css')
    @yield('css')
@stop

@section('classes_body', '')

@section('body_data', '')

@section('body')
    <div class="wrapper">

        {{-- Top Navbar --}}
        @if($layoutHelper->isLayoutTopnavEnabled())        
            @include('pages.partials.navbar.top-nav')
            @include('pages.partials.navbar.nav')
        @else
            @include('pages.partials.navbar.nav')
        @endif
      
        {{-- Content Wrapper --}}
        <div class="content-wrapper {{ config('adminlte.frontend.classes_content_wrapper') ?? '' }}">

            {{-- Content Header --}}
            {{-- <div class="content-header">
                <div class="{{ config('adminlte.frontend.classes_content_header') }}">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            @yield('content_header')
                        </div>
                        <div class="col-sm-6">        
                            @if(config('adminlte.frontend.header_right'))                  
                                @yield('content_header_back_button')                                
                            @endif
                          @if(config('adminlte.frontend.bradcum'))
                          @yield('bradcum')
                          @endif                          
                        </div>
                      </div>
                </div>
            </div> --}}

            {{-- Main Content --}}
            <div class="content">
                <div class="{{ config('adminlte.frontend.classes_content') }}">
                    @yield('content')
                </div>
            </div>

        </div>

        {{-- Footer --}}
        @hasSection('footer')
            @include('pages.partials.footer.footer')
        @endif        

    </div>
@stop

@section('adminlte.frontend_js')
    <script src="{{ asset('js/custom.js') }}"></script>
    @stack('js')
    @yield('js')
@stop
