@extends('user.layouts.app')
@section('content')
    
<article>
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
                      <a href="{{ route('postsByCategories', ['id' => $category->id]) }}" class="card-tag">{{$category->name }}</a>
                    </li>
                  @endif
                  @endforeach  
                </ul>

                <h3 class="h4">
                  <a href="{{ route('post', ['id' => $recentsPost->id]) }}" class="card-title hover:underline">
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

        <button class="btn">Voir plus</button>

      </div>
    </section>





    <!-- 
      - #RECOMMENDED POST
    -->

    <section class="section recommended recent" aria-label="recent recommended post">
      <div class="container">
 
        <p class="section-subtitle">
          <strong class="strong">Recommander</strong>
        </p>
  
        <ul class="grid-list" id="postList">
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
        <button class="btn" id="loadMoreBtn">Voir plus</button>
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
        document.addEventListener('DOMContentLoaded', function() {
  // Récupération des éléments de la liste et du bouton
  var postList = document.getElementById('postList');
  var loadMoreBtn = document.getElementById('loadMoreBtn');
  var itemsToShow = 6; // Nombre d'éléments à afficher à la fois
  var visibleCount = 0; // Compteur d'éléments visibles

  // Masquer tous les éléments de la liste
  var listItems = Array.from(postList.getElementsByClassName('scrollbar-item'));
  listItems.forEach(function(item) {
    item.style.display = 'none';
  });

  // Afficher les premiers éléments
  showItems();

  // Fonction de gestionnaire d'événement pour le clic sur le bouton "Voir plus"
  loadMoreBtn.addEventListener('click', function() {
    // Afficher les éléments suivants dans la liste
    showItems();
  });

  function showItems() {
    var endIndex = Math.min(visibleCount + itemsToShow, listItems.length);
    for (var i = visibleCount; i < endIndex; i++) {
      listItems[i].style.display = 'block';
    }

    visibleCount += itemsToShow;

    // Masquer le bouton "Voir plus" s'il n'y a plus d'éléments à afficher
    if (visibleCount >= listItems.length) {
      loadMoreBtn.style.display = 'none';
    }
  }
});
    </script>
@endsection
