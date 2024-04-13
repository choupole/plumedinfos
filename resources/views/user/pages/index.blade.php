@extends('user.layouts.app')
@section('content')
    
<article>

    <!-- 
      - #HERO
    -->

    <section class="section hero" aria-label="home">
        <div class="container">
      
          <h1 class="h1 hero-title">
            Bienvenue sur <strong class="strong">Plume d'Infos </strong> , votre source privilégiée d'informations sur
            la RDC.
          </h1>
      
          <div class="wrapper">
      
            <form action="" class="newsletter-form">
              <input type="email" name="email_address" placeholder="Votre adresse e-mail" class="email-field">
      
              <button type="submit" class="btn">S'abonner</button>
            </form>
      
            <p class="newsletter-text">
              Recevez la newsletter par e-mail et accédez à du contenu exclusif réservé aux membres et à des mises à jour.
            </p>
      
          </div>
      
        </div>
      </section>





    <!-- 
      - #FEATURED POST
    -->

    <section class="section featured" aria-label="featured post">
      <div class="container">

        <p class="section-subtitle">
          Commencez avec nos <strong class="strong">meilleures histoires</strong>
        </p>

        <ul class="has-scrollbar">

          @foreach ($posts as $post)
          <li class="scrollbar-item">
            <div class="blog-card">

              <figure class="card-banner img-holder" style="--width: 500; --height: 600;">
                <img src="{{asset('assets/uploads/posts/'.$post->image )}}" width="500" height="600" loading="lazy"
                  alt="New technology is not good or evil in and of itself" class="img-cover">

                <ul class="avatar-list absolute">
                  <li class="avatar-item">
                    <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                      <img src="{{ asset('user/assets/images/author-2.jpg') }}" width="100" height="100" loading="lazy" alt="Author"
                        class="img-cover">
                    </a>
                  </li>

                </ul>
              </figure>

              <div class="card-content">

                <ul class="card-meta-list">



                  @foreach ($categories as $category)
                    @if ($post->categories->pluck('id')->contains($category->id))
                      <li>
                        <a href="#" class="card-tag">{{$category->name }}</a>
                      </li>
                    @else
                        <span>Sans Catégorie</span>
                    @endif
                  @endforeach       
                </ul>

                <h3 class="h4">
                    <a href="{{ route('post') }}" class="card-title hover:underline">
                      {{$post->title}}
                    </a>
                  </h3>

                <p class="card-text">
                    {{$post->content}}
                </p>

              </div>

            </div>
          </li>
          @endforeach
        </ul>

      </div>
    </section>





    <!-- 
      - #RECENT POST
    -->

    <section class="section recent" aria-label="recent post">
      <div class="container">

        <div class="title-wrapper">

          <h2 class="h2 section-title">
            Découvrez ce que la plume d'infos a récemment <strong class="strong">écrit</strong>
          </h2>

          <div class="top-author">
            <ul class="avatar-list">

              <li class="avatar-item">
                <a href="#" class="avatar large img-holder" style="--width: 100; --height: 100;">
                  <img src="{{ asset('user/assets/images/author-1.jpg') }}" width="100" height="100" alt="top author" class="img-cover">
                </a>
              </li>

              <li class="avatar-item">
                <a href="#" class="avatar large img-holder" style="--width: 100; --height: 100;">
                  <img src="{{ asset('user/assets/images/author-2.jpg') }}" width="100" height="100" alt="top author" class="img-cover">
                </a>
              </li>

              <li class="avatar-item">
                <a href="#" class="avatar large img-holder" style="--width: 100; --height: 100;">
                  <img src="{{ asset('user/assets/images/author-3.jpg') }}" width="100" height="100" alt="top author" class="img-cover">
                </a>
              </li>

              <li class="avatar-item">
                <a href="#" class="avatar large img-holder" style="--width: 100; --height: 100;">
                  <img src="{{ asset('user/assets/images/author-4.jpg') }}" width="100" height="100" alt="top author" class="img-cover">
                </a>
              </li>

              <li class="avatar-item">
                <a href="#" class="avatar large img-holder" style="--width: 100; --height: 100;">
                  <img src="{{ asset('user/assets/images/author-5.jpg') }}" width="100" height="100" alt="top author" class="img-cover">
                </a>
              </li>

            </ul>

            <span class="span">Voir nos Plumeurs</span>
          </div>

        </div>

        <ul class="grid-list">
          <li class="scrollbar-item">
            <div class="blog-card">

              <figure class="card-banner img-holder" style="--width: 500; --height: 600;">
                <img src="{{ asset('user/assets/images/santé.jpg') }}" width="500" height="600" loading="lazy"
                  alt="Everyone has a different life story" class="img-cover">

                <ul class="avatar-list absolute">

                  <li class="avatar-item">
                    <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                      <img src="{{ asset('user/assets/images/author-5.jpg') }}" width="100" height="100" loading="lazy" alt="Author"
                        class="img-cover">
                    </a>
                  </li>

                </ul>
              </figure>

              <div class="card-content">

                <ul class="card-meta-list">

                  <li>
                    <a href="#" class="card-tag">Santé</a>
                  </li>

                  <li>
                    <a href="#" class="card-tag">Environnement</a>
                  </li>

                </ul>

                <h3 class="h4">
                  <a href="#" class="card-title hover:underline">
                    La santé à quel prix
                  </a>
                </h3>

                <p class="card-text">
                  Au fil du temps, le franc congolais a connu des fluctuations significatives par rapport au dollar américain. Des périodes de dépréciation et de volatilité ont été observées, ce qui a eu des répercussions sur l'économie congolaise dans son ensemble. La dépréciation du franc congolais peut entraîner une augmentation des prix des biens importés, rendant la vie plus difficile pour de nombreux ménages et entreprises qui dépendent de ces produits.
                </p>

              </div>

            </div>
          </li>
          <li class="scrollbar-item">
            <div class="blog-card">

              <figure class="card-banner img-holder" style="--width: 500; --height: 600;">
                <img src="{{ asset('user/assets/images/economie.jpg') }}" width="500" height="600" loading="lazy"
                  alt="Everyone has a different life story" class="img-cover">

                <ul class="avatar-list absolute">

                  <li class="avatar-item">
                    <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                      <img src="{{ asset('user/assets/images/author-5.jpg') }}" width="100" height="100" loading="lazy" alt="Author"
                        class="img-cover">
                    </a>
                  </li>

                </ul>
              </figure>

              <div class="card-content">

                <ul class="card-meta-list">

                  <li>
                    <a href="#" class="card-tag">Comptabilité</a>
                  </li>

                  <li>
                    <a href="#" class="card-tag">Finance</a>
                  </li>

                </ul>

                <h3 class="h4">
                  <a href="#" class="card-title hover:underline">
                    Le Taux d'agroissement dans le Monde à doublé depuis 2000
                  </a>
                </h3>

                <p class="card-text">
                  Au fil du temps, le franc congolais a connu des fluctuations significatives par rapport au dollar américain. Des périodes de dépréciation et de volatilité ont été observées, ce qui a eu des répercussions sur l'économie congolaise dans son ensemble. La dépréciation du franc congolais peut entraîner une augmentation des prix des biens importés, rendant la vie plus difficile pour de nombreux ménages et entreprises qui dépendent de ces produits.
                </p>

              </div>

            </div>
          </li>
          <li class="scrollbar-item">
            <div class="blog-card">

              <figure class="card-banner img-holder" style="--width: 500; --height: 600;">
                <img src="{{ asset('user/assets/images/portdematadi.jpg') }}" width="500" height="600" loading="lazy"
                  alt="Everyone has a different life story" class="img-cover">

                <ul class="avatar-list absolute">

                  <li class="avatar-item">
                    <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                      <img src="{{ asset('user/assets/images/author-5.jpg') }}" width="100" height="100" loading="lazy" alt="Author"
                        class="img-cover">
                    </a>
                  </li>

                </ul>
              </figure>

              <div class="card-content">

                <ul class="card-meta-list">

                  <li>
                    <a href="#" class="card-tag">Politique</a>
                  </li>

                  <li>
                    <a href="#" class="card-tag">Finance</a>
                  </li>

                </ul>

                <h3 class="h4">
                  <a href="#" class="card-title hover:underline">
                    Le port de Matadi est-il vivant ou mort ? 
                  </a>
                </h3>

                <p class="card-text">
                  Au fil du temps, le franc congolais a connu des fluctuations significatives par rapport au dollar américain. Des périodes de dépréciation et de volatilité ont été observées, ce qui a eu des répercussions sur l'économie congolaise dans son ensemble. La dépréciation du franc congolais peut entraîner une augmentation des prix des biens importés, rendant la vie plus difficile pour de nombreux ménages et entreprises qui dépendent de ces produits.
                </p>

              </div>

            </div>
          </li>
          <li class="scrollbar-item">
            <div class="blog-card">

              <figure class="card-banner img-holder" style="--width: 500; --height: 600;">
                <img src="{{ asset('user/assets/images/estDuPays.jpg') }}" width="500" height="600" loading="lazy"
                  alt="Everyone has a different life story" class="img-cover">

                <ul class="avatar-list absolute">

                  <li class="avatar-item">
                    <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                      <img src="{{ asset('user/assets/images/author-5.jpg') }}" width="100" height="100" loading="lazy" alt="Author"
                        class="img-cover">
                    </a>
                  </li>

                </ul>
              </figure>

              <div class="card-content">

                <ul class="card-meta-list">

                  <li>
                    <a href="#" class="card-tag">Conflit</a>
                  </li>

                  <li>
                    <a href="#" class="card-tag">Finance</a>
                  </li>

                </ul>

                <h3 class="h4">
                  <a href="#" class="card-title hover:underline">
                    Le M23 qui le finance ? 
                  </a>
                </h3>

                <p class="card-text">
                  Au fil du temps, le franc congolais a connu des fluctuations significatives par rapport au dollar américain. Des périodes de dépréciation et de volatilité ont été observées, ce qui a eu des répercussions sur l'économie congolaise dans son ensemble. La dépréciation du franc congolais peut entraîner une augmentation des prix des biens importés, rendant la vie plus difficile pour de nombreux ménages et entreprises qui dépendent de ces produits.
                </p>

              </div>

            </div>
          </li>
          <li class="scrollbar-item">
            <div class="blog-card">

              <figure class="card-banner img-holder" style="--width: 500; --height: 600;">
                <img src="{{ asset('user/assets/images/fruit.jpg') }}" width="500" height="600" loading="lazy"
                  alt="Everyone has a different life story" class="img-cover">

                <ul class="avatar-list absolute">

                  <li class="avatar-item">
                    <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                      <img src="{{ asset('user/assets/images/author-5.jpg') }}" width="100" height="100" loading="lazy" alt="Author"
                        class="img-cover">
                    </a>
                  </li>

                </ul>
              </figure>

              <div class="card-content">

                <ul class="card-meta-list">

                  <li>
                    <a href="#" class="card-tag">Santé</a>
                  </li>

                  <li>
                    <a href="#" class="card-tag">Bien être</a>
                  </li>

                </ul>

                <h3 class="h4">
                  <a href="#" class="card-title hover:underline">
                    Le legume sont-ils vraiment importants ? L'avis d'un expert de l'Unikin
                  </a>
                </h3>

                <p class="card-text">
                  Au fil du temps, le franc congolais a connu des fluctuations significatives par rapport au dollar américain. Des périodes de dépréciation et de volatilité ont été observées, ce qui a eu des répercussions sur l'économie congolaise dans son ensemble. La dépréciation du franc congolais peut entraîner une augmentation des prix des biens importés, rendant la vie plus difficile pour de nombreux ménages et entreprises qui dépendent de ces produits.
                </p>

              </div>

            </div>
          </li>
          <li class="scrollbar-item">
            <div class="blog-card">

              <figure class="card-banner img-holder" style="--width: 500; --height: 600;">
                <img src="{{ asset('user/assets/images/plante.jpg') }}" width="500" height="600" loading="lazy"
                  alt="Everyone has a different life story" class="img-cover">

                <ul class="avatar-list absolute">

                  <li class="avatar-item">
                    <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                      <img src="{{ asset('user/assets/images/author-5.jpg') }}" width="100" height="100" loading="lazy" alt="Author"
                        class="img-cover">
                    </a>
                  </li>

                </ul>
              </figure>

              <div class="card-content">

                <ul class="card-meta-list">

                  <li>
                    <a href="#" class="card-tag">Environnement</a>
                  </li>

                  <li>
                    <a href="#" class="card-tag">Etude</a>
                  </li>

                </ul>

                <h3 class="h4">
                  <a href="#" class="card-title hover:underline">
                    Les plantes la seul solution contre le réchaufement climatique
                  </a>
                </h3>

                <p class="card-text">
                  Au fil du temps, le franc congolais a connu des fluctuations significatives par rapport au dollar américain. Des périodes de dépréciation et de volatilité ont été observées, ce qui a eu des répercussions sur l'économie congolaise dans son ensemble. La dépréciation du franc congolais peut entraîner une augmentation des prix des biens importés, rendant la vie plus difficile pour de nombreux ménages et entreprises qui dépendent de ces produits.
                </p>

              </div>

            </div>
          </li>
          
        </ul>

        <button class="btn">Voir plus</button>

      </div>
    </section>





    <!-- 
      - #RECOMMENDED POST
    -->

    <section class="section recommended" aria-label="recommended post">
      <div class="container">

        <p class="section-subtitle">
          <strong class="strong">Recommander</strong>
        </p>

        <ul class="grid-list">

          <li>
            <div class="blog-card">

              <figure class="card-banner img-holder" style="--width: 300; --height: 360;">
                <img src="{{ asset('user/assets/images/kabila.jpeg') }}" width="300" height="360" loading="lazy"
                  alt="The trick to getting more done is to have the freedom to roam around " class="img-cover">

                <ul class="avatar-list absolute">

                  <li class="avatar-item">
                    <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                      <img src="{{ asset('user/assets/images/author-5.jpg') }}" width="100" height="100" loading="lazy" alt="Author"
                        class="img-cover">
                    </a>
                  </li>

                </ul>
              </figure>

              <div class="card-content">

                <h3 class="h5">
                  <a href="#" class="card-title hover:underline">
                    Le seul qui peut changé les choses selon l'avis de certains Kinois
                  </a>
                </h3>

              </div>

            </div>
          </li>
          <li>
            <div class="blog-card">

              <figure class="card-banner img-holder" style="--width: 300; --height: 360;">
                <img src="{{ asset('user/assets/images/comedie.jpg') }}" width="300" height="360" loading="lazy"
                  alt="The trick to getting more done is to have the freedom to roam around " class="img-cover">

                <ul class="avatar-list absolute">

                  <li class="avatar-item">
                    <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                      <img src="{{ asset('user/assets/images/author-1.jpg') }}" width="100" height="100" loading="lazy" alt="Author"
                        class="img-cover">
                    </a>
                  </li>

                </ul>
              </figure>

              <div class="card-content">

                <h3 class="h5">
                  <a href="#" class="card-title hover:underline">
                    Herman amisi a Paris
                  </a>
                </h3>

              </div>

            </div>
          </li>
          <li>
            <div class="blog-card">

              <figure class="card-banner img-holder" style="--width: 300; --height: 360;">
                <img src="{{ asset('user/assets/images/felix.jpeg') }}" width="300" height="360" loading="lazy"
                  alt="The trick to getting more done is to have the freedom to roam around " class="img-cover">

                <ul class="avatar-list absolute">

                  <li class="avatar-item">
                    <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                      <img src="{{ asset('user/assets/images/author-5.jpg') }}" width="100" height="100" loading="lazy" alt="Author"
                        class="img-cover">
                    </a>
                  </li>

                </ul>
              </figure>

              <div class="card-content">

                <h3 class="h5">
                  <a href="#" class="card-title hover:underline">
                    Un nouveau plan pour stopper le vol du Trésor public
                  </a>
                </h3>

              </div>

            </div>
          </li>
          <li>
            <div class="blog-card">

              <figure class="card-banner img-holder" style="--width: 300; --height: 360;">
                <img src="{{ asset('user/assets/images/m23.jpeg') }}" width="300" height="360" loading="lazy"
                  alt="The trick to getting more done is to have the freedom to roam around " class="img-cover">

                <ul class="avatar-list absolute">

                  <li class="avatar-item">
                    <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                      <img src="{{ asset('user/assets/images/author-5.jpg') }}" width="100" height="100" loading="lazy" alt="Author"
                        class="img-cover">
                    </a>
                  </li>

                </ul>
              </figure>

              <div class="card-content">

                <h3 class="h5">
                  <a href="#" class="card-title hover:underline">
                  600 Victimes la semaines derniers, Le M23 ne sont pas qu'a 23.
                  </a>
                </h3>

              </div>

            </div>
          </li>
          <li>
            <div class="blog-card">

              <figure class="card-banner img-holder" style="--width: 300; --height: 360;">
                <img src="{{ asset('user/assets/images/rebelle.jpg') }}" width="300" height="360" loading="lazy"
                  alt="The trick to getting more done is to have the freedom to roam around " class="img-cover">

                <ul class="avatar-list absolute">

                  <li class="avatar-item">
                    <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                      <img src="{{ asset('user/assets/images/author-3.jpg') }}" width="100" height="100" loading="lazy" alt="Author"
                        class="img-cover">
                    </a>
                  </li>

                </ul>
              </figure>

              <div class="card-content">

                <h3 class="h5">
                  <a href="#" class="card-title hover:underline">
                    Nos frotières plein de rebelles, où sont les FARDC ? 
                  </a>
                </h3>

              </div>

            </div>
          </li>
          <li>
            <div class="blog-card">

              <figure class="card-banner img-holder" style="--width: 300; --height: 360;">
                <img src="{{ asset('user/assets/images/recommended-6.jpg') }}" width="300" height="360" loading="lazy"
                  alt="The trick to getting more done is to have the freedom to roam around " class="img-cover">

                <ul class="avatar-list absolute">

                  <li class="avatar-item">
                    <a href="#" class="avatar img-holder" style="--width: 100; --height: 100;">
                      <img src="{{ asset('user/assets/images/author-5.jpg') }}" width="100" height="100" loading="lazy" alt="Author"
                        class="img-cover">
                    </a>
                  </li>

                </ul>
              </figure>

              <div class="card-content">

                <h3 class="h5">
                  <a href="#" class="card-title hover:underline">
                    L'informatisation des nos firmes
                  </a>
                </h3>

              </div>

            </div>
          </li>



        </ul>

      </div>
    </section>





    <!-- 
      - #NEWSLETTER
    -->

    <section class="section newsletter">

      <h2 class="h2 section-title">
        Abonnez-vous aux <strong class="strong">nouveaux articles</strong>
      </h2>
    
      <form action="" class="newsletter-form">
        <input type="email" name="email_address" placeholder="Votre adresse e-mail" required class="email-field">
    
        <button type="submit" class="btn">S'abonner</button>
      </form>

    </section>

  </article>
@endsection