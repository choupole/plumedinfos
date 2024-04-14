@extends('user.layouts.app')
@section('content')
<section class="section hero" aria-label="home">
    <div class="container">

        <div class="row oneArticle">
          <div class="col-8 SectionPostImage">
            <div class="blog-card">
            <figure class="card-banner img-holder" style="--width: 500; --height: 300;">
              <img src="{{asset('assets/uploads/posts/'.$post->image )}}" width="100" height="200" loading="lazy"
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
          </div>
        </div>
          <div class="col-4 otherSubject">
            <h1>choupole</h1>
          </div>
        </div>

        <div class="row">
          <h1> {{$post->title}} </h1>
          <div class="content">
            <?php echo str_replace('.', '.<br>', $post->content); ?>
          </div>
        </div>


  

  
    </div>
  </section>
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
  <section class="section newsletter">

    <h2 class="h2 section-title">
      Abonnez-vous aux <strong class="strong">nouveaux articles</strong>
    </h2>
  
    <form action="" class="newsletter-form">
      <input type="email" name="email_address" placeholder="Votre adresse e-mail" required class="email-field">
  
      <button type="submit" class="btn">S'abonner</button>
    </form>

  </section>
@endsection