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
                        <a href="{{ route('postsByCategories', ['id' => $category->id]) }}" class="card-tag">{{$category->name }}</a>
                      </li>
                    @endif
                  @endforeach       
                </ul>

                <h3 class="h4">
                    <a href="{{ route('post', ['id' => $post->id]) }}" class="card-title hover:underline">
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
          @foreach ($recentsPosts as $recentsPost)
          <li class="scrollbar-item">
            <div class="blog-card">

              <figure class="card-banner img-holder" style="--width: 500; --height: 600;">
                <img src="{{asset('assets/uploads/posts/'.$recentsPost->image )}}" width="500" height="600" loading="lazy"
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
                  @foreach ($categories as $category)
                  @if ($recentsPost->categories->pluck('id')->contains($category->id))
                    <li>
                      <a href="{{ route('post', ['id' => $category->id]) }}" class="card-tag">{{$category->name }}</a>
                    </li>
                  @endif
                  @endforeach  
                </ul>

                <h3 class="h4">
                  <a href="#" class="card-title hover:underline">
                    {{$recentsPost->title}}
                  </a>
                </h3>

                <p class="card-text">
                  {{$recentsPost->title}}
                </p>

              </div>

            </div>
          </li> 
          @endforeach        
        </ul>

        <button class="btn"> <a href="{{ route('recentsPosts') }}">Voir plus</a></button>

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
          @foreach ($randomPosts as $randomPost)
          <li>
            <div class="blog-card">
  
              <figure class="card-banner img-holder" style="--width: 300; --height: 360;">
                <img src="{{asset('assets/uploads/posts/'.$randomPost->image )}}" width="300" height="360" loading="lazy"
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
                  <a href="{{ route('post', ['id' => $randomPost->id]) }}" class="card-title hover:underline">
                    {{$randomPost->title}}
                  </a>
                </h3>
  
              </div>
  
            </div>
          </li> 
          @endforeach
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

@section('scripts')
  <script>
          // Récupération des éléments de la liste
      var listItems = document.querySelectorAll('.grid-list .scrollbar-item');

      // Masquer les éléments supplémentaires
      for (var i = 3; i < listItems.length; i++) {
        listItems[i].style.display = 'none';
      }

      // Fonction de gestionnaire d'événement pour le clic sur le bouton "Voir plus"
      document.querySelector('.btn').addEventListener('click', function() {
        // Afficher les éléments supplémentaires
        for (var i = 3; i < listItems.length; i++) {
          listItems[i].style.display = 'block';
        }

        // Masquer le bouton "Voir plus"
        this.style.display = 'none';
      });
  </script>
@endsection