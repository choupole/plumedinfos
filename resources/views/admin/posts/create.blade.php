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
                <textarea name="content" id="summernote" class="form-control mb-2" rows="6" cols="50" placeholder="Entrez votre Contenu" required></textarea>
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

@section('scripts')
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script>
    $('#summernote').summernote({
      placeholder: 'Hello stand alone ui',
      tabsize: 2,
      height: 120,
      toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'underline', 'clear']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['table', ['table']],
        ['insert', ['link', 'picture', 'video']],
        ['view', ['fullscreen', 'codeview', 'help']]
      ]
    });
  </script>
@endsection