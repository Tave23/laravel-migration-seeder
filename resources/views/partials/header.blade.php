<header class="container my-3">

   <ul class="nav nav-pills nav-fill">
      <li class="nav-item">
         <a class="nav-link {{ (Route::currentRouteName() === 'home') ? 'active' : '' }}" aria-current="page" href="{{ route('home') }}">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ (Route::currentRouteName() === 'holidays') ? 'active' : '' }}" href="{{ route('holidays') }}">Scegli la tua vacanza</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ (Route::currentRouteName() === 'about') ? 'active' : '' }}" href="{{ route('about') }}">Chi siamo</a>
      </li>
    </ul>

</header>