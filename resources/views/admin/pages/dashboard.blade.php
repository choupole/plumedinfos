@extends('admin.layouts.app')
@section('content')
<div class="row">
    <div class="col-md-6 col-lg-3 d-flex">
      <div class="card mb-grid w-100">
        <div class="card-body d-flex flex-column">
          <div class="d-flex justify-content-between mb-3">
            <h5 class="card-title mb-0">
              Mes Articles
            </h5>

            <div class="card-title-sub">
              753
            </div>
          </div>

          <div class="progress mt-auto">
            <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">3/4</div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-lg-3 d-flex">
      <div class="card mb-grid w-100">
        <div class="card-body d-flex flex-column">
          <div class="d-flex justify-content-between mb-3">
            <h5 class="card-title mb-0">
              Mes Catégories
            </h5>

            <div class="card-title-sub">
              18/140
            </div>
          </div>

          <div class="progress mt-auto">
            <div class="progress-bar" role="progressbar" style="width: 16%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-lg-3 d-flex">
      <div class="card border-0 bg-primary text-white text-center mb-grid w-100">
        <div class="d-flex flex-row align-items-center h-100">
          <div class="card-icon d-flex align-items-center h-100 justify-content-center">
            <i data-feather="shopping-cart"></i>
          </div>
          <div class="card-body">
            <div class="card-info-title">Catégorie</div>
            <h3 class="card-title mb-0">
              7,485
            </h3>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-lg-3 d-flex">
      <div class="card border-0 bg-success text-white text-center mb-grid w-100">
        <div class="d-flex flex-row align-items-center h-100">
          <div class="card-icon d-flex align-items-center h-100 justify-content-center">
            <i data-feather="users"></i>
          </div>
          <div class="card-body">
            <div class="card-info-title">Articles</div>
            <h3 class="card-title mb-0">
              1,258
            </h3>
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection