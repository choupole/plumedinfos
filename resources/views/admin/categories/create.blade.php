@extends('admin.layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-6">
      <div class="card mb-grid">
        <div class="card-header">
          <div class="card-header-title">Création</div>
        </div>
        <div class="card-body">
          
            <form method="POST" action="{{ route('categories.store') }}">
                @csrf
                <div class="form-group">
                    <label class="form-label">Nom de la Catégorie</label>
                    <input class="form-control mb-2 input-credit-card" type="text" name="name" placeholder="Entrez le nom de la catégorie">
                </div>
                </div>
                <div class="card-footer">
                    <input type="submit" class="btn btn-pill btn-outline-primary">
                    <button type="button" class="btn btn-pill btn-outline-dark">Annuler</button>
                </div>
            </form>
      </div>
    </div>

    <div class="col-lg-6">
      <div class="card mb-grid">
        <div class="card-header">
          <div class="card-header-title">Plume d'infos</div>
        </div>

        <div class="card-footer">
            Bienvenue dans notre communauté numérique ! Nous encourageons un langage respectueux et inclusif entre tous nos membres. Veuillez éviter d'utiliser des mots ou des expressions insultants, discriminatoires ou offensants envers les individus ou les groupes. Nous croyons en la diversité et en l'ouverture d'esprit, et nous encourageons des discussions constructives et bienveillantes. Ensemble, créons un environnement numérique où chacun se sent respecté et valorisé <a href="#">Plume d'Infos</a>.
        </div>
      </div>
    </div>
  </div>
@endsection