@extends('admin.layouts.app')
@section('content')
    <!-- Formulaire de création de post -->
        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Champ du titre -->
            <div class="form-group">
                    <label for="title" class="form-label">Titre :</label>
                    <input type="text" name="title" class="form-control mb-2" id="title" placeholder="Entrez le titre" required>
            </div>

            <!-- Champ du contenu -->
            <div class="form-group">
                <label for="content" class="form-label">Contenu :</label>
                <textarea name="content" id="content" class="form-control mb-2" rows="6" cols="50" placeholder="Entrez votre Contenu" required></textarea>
            </div>

            <!-- Champ des images -->
            <div>
                <div class="form-group">
                    <label for="images" class="form-label">Image :</label>
                    <input type="file" name="image" class="form-control mb-2" id="images">
                </div>
            </div>

            <!-- Champ de la catégorie -->
            <div class="form-group">
                <label for="category_ids" class="form-label">Catégories :</label>
                <select name="category_ids[]" class="form-control" multiple id="category_ids" required>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Champ de l'utilisateur -->
           <!-- Bouton de soumission -->
            <button type="submit" class="btn btn-pill btn-outline-primary">Créer le post</button>                    
            <button type="button" class="btn btn-pill btn-outline-dark">Annuler</button>
        </form>
@endsection