<div class="off-canvas position-right" id="offCanvas" data-off-canvas data-transition="push">
  
    <a href="#" class="close-button off-canvas-menu-icon-close" data-close="offCanvas">
        <span aria-hidden="true">&times;</span>
    </a>

    <hr />   

    <ul class="vertical menu">
        @include('voyager-frontend::partials.menu-right')
    </ul>

    <hr />

    <ul class="menu social-icons align-center">
        {{ menu('social', 'voyager-frontend::partials.social') }}
    </ul>
</div>

<div class="off-canvas-content" data-off-canvas-content>
    <div class="header-site-search" data-toggle-search>
        <div class="grid-container">
            <div class="grid-x">
                <div class="cell medium-8 medium-offset-2">
                    @include('voyager-frontend::partials.search-box')
                </div> <!-- /.cell -->
            </div> <!-- /.grid -->
        </div> <!-- /.container -->
    </div> <!-- /.header-site-search -->

    <div class="top-bar">
        <div class="top-bar-left">
            <a href="#" class="off-canvas-menu-icon float-right hide-for-medium" data-open="offCanvas">
                <i class="fas fa-bars"></i> <span>Menú</span>
            </a>

            <a href="#" class="search-icon-mobile float-right hide-for-medium" data-toggle-search-trigger>
                <i class="fas fa-search"></i>
            </a>

            @if (Auth::guest()) 
	            <div class="header-logo float-left">
	                <a href="{{ url('/') }}">
	                    <img src="{{ url('/') }}/images/Logo.png" alt="{{ setting('site.title') }}" title="{{ setting('site.title') }}" />
	                </a>
	            </div> <!-- /.header-logo -->
				
				<!-- Menú para Usuario Invitado -->
                <ul class="menu show-for-medium">
                    {{ menu('primary', 'voyager-frontend::partials.menu-left') }}
                </ul>
            @else 
	            <div class="header-logo float-left">
	                <a href="{{ url('/') }}">
	                    <img src="{{ url('/') }}/images/SOLMICO.png" alt="{{ setting('site.title') }}" title="{{ setting('site.title') }}" />
	                </a>
	            </div> <!-- /.header-logo -->

                <!-- Menú para Usuario Registrado -->
                <ul class="menu show-for-medium">
                    {{ menu('adc', 'voyager-frontend::partials.menu-app') }}
                </ul>

            @endif

        </div> <!-- /.top-bar-left -->

        <div class="top-bar-right show-for-medium">
            <ul class="menu">
                @include('voyager-frontend::partials.menu-right')
            </ul> <!-- /.menu -->
        </div> <!-- /.top-bar-right -->
    </div> <!-- /.top-bar -->
