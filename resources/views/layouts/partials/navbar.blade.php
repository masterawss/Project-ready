<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
  <li><a href="#!">Perfil</a></li>
  <li><a href="#!">Configuración</a></li>
  <li class="divider"></li>
  <li>
    <a href="{{ route('logout') }}"
      onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">Salir</a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
  </li>
</ul>

<nav class="brown">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo center">Logo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">JavaScript</a></li>
        <!-- Dropdown Trigger -->
        <li>
          <a class="dropdown-trigger" href="#!" data-target="dropdown1">{{ Auth::user()->name }}<i class="material-icons right">arrow_drop_down</i></a>
        </li>
      </ul>
    </div>
  </nav>
