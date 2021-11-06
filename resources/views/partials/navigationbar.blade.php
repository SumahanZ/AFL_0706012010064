<nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <div class="container-fluid">
      <a class="navbar-brand me-5" href="/">
      <img src="{{ asset("img/zoo.png") }}" class="rounded" alt>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 fs-4">
          <li class="nav-item nav-pills">
            <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
          </li>

          <li class="nav-item nav-pills"> <!--Name of routes without "/" and * anything after that -->
            <a class="nav-link {{ Request:: is('habitats*') ? 'active' : '' }}"  href="/habitats">Habitats</a>
          </li>

          <li class="nav-item nav-pills">
            <a class="nav-link {{ Request:: is('animals*') ? 'active' : '' }}"  href="/animals">Animals</a>
          </li>
        </ul>
        <div class="d-flex">
          <!--Make Url of image, so it can be accessed at any page-->
          <a href="#"><img src="{{ asset("img/facebook.png") }}" class="img-fluid me-4"></a>
          <a href="#"><img src="{{ asset("img/youtube.png") }}" class="img-fluid me-4"></a>
          <a href="#"><img src="{{ asset("img/twitter.png") }}" class="img-fluid me-4"></a>
      </div>
    </div>
  </nav>