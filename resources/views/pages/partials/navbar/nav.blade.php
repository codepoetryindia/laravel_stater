@inject('menuBuilder', App\Http\Controllers\Helpers\MenuBuilderHelper)

<nav class="navbar navbar-expand-lg navbar-light bg-light">
   <div class="container">
    <a class="navbar-brand" href="{{config('adminlte.frontend.brand_link')}}">{{config('adminlte.frontend.name')}}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav  {{config('adminlte.frontend.layout_nav_item_possion')}}">
          @foreach (config('adminlte.frontend.menu', []) as $item)
          @if (isset($item['submenu']))
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              {{$item['text']}}
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                @foreach ($item['submenu'] as $submenu)
                <a class="dropdown-item" href="{{$submenu['url']}}">{{$submenu['text']}}</a>
                @endforeach             
            </div>
          </li>
          @else
          <li class="nav-item active">
            <a class="nav-link" href="{{$item['url']}}">{{$item['text']}} <span class="sr-only">(current)</span></a>
          </li>
          @endif
          @endforeach        
      </ul>
      {{-- <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form> --}}
    </div>
   </div>
  </nav>