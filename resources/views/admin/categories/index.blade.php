@extends('admin.layouts.app')
@section('content')

    <!-- Export Datatable start -->
    <div class="row">
        <div class="col-md-6">
            <div class="card-box mb-30">
                <div class="pd-20">
                    <h4 class="text-blue h4">Listes des categories</h4>
                </div>
                <div class="pb-20">
                    <table class="table hover data-table-export nowrap">
                        <thead>
                            <tr>
                                <th class="table-plus datatable-nosort">Id</th>
                                <th>Nom</th>
                                <th class="datatable-nosort">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                            <tr>
                                <td class="table-plus"> {{$category->id}} </td>
                                <td> {{$category->name}} </td>
                                <td>
        
                                    <div>
                                        <a class="btn btn-pill btn-outline-primary" href="{{ route('categories.show', $category->id) }}"> Voir</a>
                                        @csrf
                                        @method('DELETE')
                                        <a class="btn btn-pill btn-outline-danger" href="{{ route('categories.destroy',$category->id) }}" onclick="supprimer(event)" item="Voulez-vous supprimer la category {{ $category->name }}" data-toggle="modal" data-target="#supprimer">
                                             Supprimer					
                                        </a>
                                       
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
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