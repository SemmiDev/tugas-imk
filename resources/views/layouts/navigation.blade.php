<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">sammidev</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">

            <li class="nav-item">
            <a class="nav-link {{ request()->is('/') ? ' active' : '' }}" href="/">Home <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
            <a class="nav-link {{ request()->is('about') ? ' active' : '' }}" href="/about">About</a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->is('contact') ? ' active' : '' }}" href="/contact">Contact</a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->is('posts') ? ' active' : '' }}" href="/posts">Family</a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->is('login') ? ' active' : '' }}" href="/login">Login</a>
            </li>
      </ul>
    </div>
</nav>
