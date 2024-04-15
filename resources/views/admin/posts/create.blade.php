@extends('admin.layouts.app')
@section('content')
<div class="min-height-200px">
    <div class="page-header">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="title">
                    {{-- <h4>Form Wizards</h4> --}}
                </div>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Création d'un Post</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="pd-20 card-box mb-30">
        <div class="clearfix">
            <h4 class="text-blue h4">Création</h4>
            <p class="mb-30">Ajout d'une nouvelle Post</p>
        </div>
        <div class="wizard-content">
            <form id="myForm" class="tab-wizard wizard-circle wizard" action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <h5>Information de l'post</h5>
                <section>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">Titre du Post :</label>
                                <input type="text" class="form-control" name="title">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="image">Image du Post :</label>
                                <input type="file" name="image" class="form-control" id="imageInput">
                            </div>
                    
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Catégorie</label>
                                <select class="custom-select2 form-control" style="width: 100%;" name="category_ids[]" multiple>
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="content">Contenu :</label>
                                <textarea name="content" id="summernote" class="form-control"></textarea>
                            </div>
                            
                            
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="aperçu">Aperçu de l'image envoyée :</label><br>
                                <img src="" id="imagePreview" name="aperçu" style="max-width: 100%; max-height: 150px;" alt="Aperçu de l'image" />   
                            </div>
                        </div>
                    </div>
                    
                    <button class="btn btn-primary" type="submit">Envoyer</button>
                </section>
                <!-- Step 4 -->
            </form>
        </div>
    </div>
    <!-- success Popup html Start -->
    <div class="modal fade" id="success-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body text-center font-18">
                    <h3 class="mb-20">Formulaire Soumis!</h3>
                    <div class="mb-30 text-center"><img src="{{asset ('AdminADP/vendors/images/success.png')}}"></div>
                    L'post est enregistré avec succés 
                </div>
                <div class="modal-footer justify-content-center">
                    <a href="javascript:void(0)" id="submitFormLink" class="btn btn-primary" data-dismiss="modal">OK</a>
                </div>
            </div>
        </div>
    </div>
    <!-- success Popup html End -->
</div>
@endsection

@section('scripts')

<script>
    $('#summernote').summernote({
      placeholder: 'Hello Bootstrap 5',
      tabsize: 2,
      height: 100
    });
  </script>
<script>
    
    document.getElementById('submitFormLink').addEventListener('click', function() {
        document.getElementById('myForm').submit();
    });
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
<script src={{asset('AdminADP/vendors/scripts/process.js')}}></script>
<script src={{asset('AdminADP/src/plugins/jquery-steps/jquery.steps.js')}}></script>
<script src={{asset('AdminADP/vendors/scripts/steps-setting.js')}}></script>
@endsection