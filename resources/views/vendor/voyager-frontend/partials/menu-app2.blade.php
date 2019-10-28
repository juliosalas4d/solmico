@foreach($items as $menu_item)
    @if(count($menu_item->children) <= 0)
    	<li class="nav-item active">
	        <a class="nav-link" href="{{ $menu_item->link() }}">{{ $menu_item->title }}</a>
	@else
		<li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" href="{{ $menu_item->link() }}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ $menu_item->title }}</a>
 			@if(count($menu_item->children) > 0)
	                @foreach($menu_item->children as $menu_item_4)
	                    @if (count($menu_item_4->children) > 0)
	                        @include('voyager-frontend::partials.menu-app2', ['items' => $menu_item_4->children])
	                    @else
	                    	<div class="dropdown-menu" aria-labelledby="navbarDropdown">
	                            <a class="dropdown-item" href="{{ $menu_item_4->link() }}">{{ $menu_item_4->title }}</a>
	                    	</div>
	                    @endif
	                @endforeach
	            </li>
	        @endif
    @endif
@endforeach
</li>

