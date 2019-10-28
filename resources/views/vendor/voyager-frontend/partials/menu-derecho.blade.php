@if (Auth::guest())
    <li><a href="{{ route('login') }}">Login</a></li>
    <li><a href="{{ route('register') }}">Registro</a></li>
@endif

@if (!Auth::guest())
            <a a class="nav-link dropdown-toggle" href="#" id="cuenta" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mi Cuenta</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('voyager-frontend.account') }}">Actualizar</a>

                @if (Session::has('original_user.id'))
                    <a class="dropdown-item" href="#"
                       onclick="event.preventDefault();document.getElementById('impersonate-form').submit();">
                        Switch back to {{ Session::get('original_user.name') }}</a>

                    <form id="impersonate-form"
                          action="{{ route('voyager-frontend.account.impersonate', Session::get('original_user.id')) }}"
                          method="POST"
                          style="display: none;">
                        {{ csrf_field() }}
                    </form>
                @else
                    <a class="dropdown-item" href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Cerrar sesión</a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                @endif
            </div> <!-- /.menu -->
@endif
