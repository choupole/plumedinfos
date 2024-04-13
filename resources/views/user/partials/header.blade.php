<!-- 
    - #EN-TÊTE
  -->

  <header class="header section" data-header>
    <div class="container">

      <a href="#" class="logo">
        <img src="{{asset('user/assets/images/logo.jpg' )}}" width="129" height="40" alt="Logo du blog">
      </a>

      <nav class="navbar" data-navbar>
        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="#" class="navbar-link hover:underline" data-nav-link>Accueil</a>
          </li>

          <li class="navbar-item">
            <a href="#" class="navbar-link hover:underline" data-nav-link>Articles récents</a>
          </li>

          <li class="navbar-item">
            <a href="#" class="navbar-link hover:underline" data-nav-link>Adhésion</a>
          </li>

        </ul>
      </nav>

      <div class="wrapper">

        <button class="search-btn" aria-label="rechercher" data-search-toggler>
          <ion-icon name="search-outline" aria-hidden="true"></ion-icon>

          <span class="span">Rechercher</span>
        </button>

        <button class="nav-toggle-btn" aria-label="basculer le menu" data-nav-toggler>
          <span class="span one"></span>
          <span class="span two"></span>
          <span class="span three"></span>
        </button>

        <a href="#" class="btn">Rejoindre</a>

      </div>

    </div>
  </header>





  <!-- 
    - #BARRE DE RECHERCHE
  -->

  <div class="search-bar" data-search-bar>

    <div class="input-wrapper">
      <input type="search" name="search" placeholder="Rechercher" class="input-field">

      <button class="search-close-btn" aria-label="fermer la barre de recherche" data-search-toggler>
        <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
      </button>

    </div>

    <p class="search-bar-text">Veuillez entrer au moins 3 caractères</p>

  </div>

  <div class="overlay" data-overlay data-search-toggler></div>