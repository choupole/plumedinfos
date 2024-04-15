@extends('admin.layouts.app')
@section('styles')
<style>
    .fade-in {
        transition: opacity 0.3s;
        opacity: 1;
        border: 1px solid red;
    }
</style>
@endsection
@section('content')
<div class="pd-20 card-box mb-30">
    <div class="clearfix">
        <h4 class="text h4">A propos du Post :  {{$post->title}} </h4>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label>Titre du post:</label>
                <input type="text" class="form-control" value="{{ $post->title }}" readonly id="titleInput">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Catégorie</label>
                <select class="custom-select2 form-control" style="width: 100%;" name="category_ids[]" multiple disabled id="categorySelect">
                    @foreach ($post->categories as $category)
                    <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Content:</label>
                <textarea name="content" class="form-control" cols="30" rows="10" readonly id="contentTextarea">{{ $post->content }}</textarea>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Nouvelle Image:</label><br>
                <input type="file" class="form-control" id="imageInput" style="display: none;">
                <button class="btn btn-secondary" onclick="addImageInput()">Ajouter une image</button>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Image:</label><br>
                <img width="250px" height="250px" id="imagePreview" src="{{asset('assets/uploads/posts/'.$post->image )}}" alt="oeuvre Image">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <button class="btn btn-primary" onclick="toggleReadOnly()">Modifier</button>
                <button class="btn btn-danger" onclick="cancelChanges()">Annuler</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    function toggleReadOnly() {
        document.getElementById('titleInput').readOnly = false;
        document.getElementById('categorySelect').disabled = false;
        document.getElementById('contentTextarea').readOnly = false;
    }

    function cancelChanges() {
        document.getElementById('titleInput').readOnly = true;
        document.getElementById('categorySelect').disabled = true;
        document.getElementById('contentTextarea').readOnly = true;
    }

    function addImageInput() {
        var imageInput = document.getElementById('imageInput');
        imageInput.style.display = 'block';
        imageInput.classList.add('fade-in');
        setTimeout(function() {
            imageInput.classList.remove('fade-in');
        }, 300);
    }
</script>

<script>
                    // Récupérer les éléments du formulaire
                    const imageInput = document.getElementById('imageInput');
                const imagePreview = document.getElementById('imagePreview');
            
                // Écouter l'événement de changement de fichier
                imageInput.addEventListener('change', function() {
                    const file = this.files[0];
                    
                    // Vérifier si un fichier est sélectionné
                    if (file) {
                        // Créer un objet FileReader
                        const reader = new FileReader();
                        
                        // Lorsque le chargement du fichier est terminé
                        reader.onload = function(e) {
                            // Mettre à jour l'aperçu de l'image avec la source de données
                            imagePreview.src = e.target.result;
                        }
                        
                        // Lire le fichier en tant que URL de données
                        reader.readAsDataURL(file);
                    } else {
                        // Réinitialiser l'aperçu de l'image si aucun fichier n'est sélectionné
                        imagePreview.src = '';
                    }
                });
</script>
@endsection