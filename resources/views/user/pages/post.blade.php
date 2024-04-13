@extends('user.layouts.app')
@section('content')
<section class="section hero" aria-label="home">
    <div class="container">

        <div class="row">
          <div class="col-8 SectionPostImage">
            <div class="blog-card">
            <figure class="card-banner img-holder" style="--width: 500; --height: 600;">
              <img src="{{ asset('user/assets/images/rebelle.jpg') }}" width="100" height="200" loading="lazy"
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
          <div class="col-4">
            <h1>choupole</h1>
          </div>
        </div>


  

  
    </div>
  </section>
@endsection