@inject('menuItemHelper', App\Http\Controllers\Helpers\MenuItemHelper)

@if ($menuItemHelper->isSearchBar($item))

    {{-- Search form --}}
    @include('pages.partials.navbar.menu-item-search-form')

@elseif ($menuItemHelper->isSubmenu($item))

    {{-- Dropdown menu --}}
    @include('pages.partials.navbar.menu-item-dropdown-menu')

@elseif ($menuItemHelper->isLink($item))

    {{-- Link --}}
    @include('pages.partials.navbar.menu-item-link')

@endif
