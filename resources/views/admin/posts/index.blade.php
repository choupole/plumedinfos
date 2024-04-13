@extends('admin.layouts.app')
@section('content')

    <!-- Export Datatable start -->
    <div class="row">
        <div class="col-md-12">
            <div class="card-box mb-30">
                <div class="pd-20">
                    <h4 class="text-blue h4">Listes des Posts</h4>
                </div>
                <div class="pb-20">
                    <table class="table hover data-table-export nowrap">
                        <thead>
                            <tr>
                                <th class="table-plus datatable-nosort">Id</th>
                                <th>Image</th>
                                <th>Titre</th>
                                <th>Contenu</th>
                                <th>Catégorie</th>
                                <th class="datatable-nosort">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                            <tr>
                                <td class="table-plus"> {{$post->id}} </td>
                                <td>
                                    <img src="{{asset('assets/uploads/posts/'.$post->image )}}" width="100px" height="100px" alt="{{$post->title}}">
                                     
                                    
                                </td>
                                <td> {{$post->title}} </td>
                                <td>
                                  <textarea id="w3review" name="content" rows="4" cols="50" readonly>
                                    {{$post->content}}
                                  </textarea>
                                </td>
                                <td>
                                  @foreach ($categories as $category)
                                      @if ($post->categories->pluck('id')->contains($category->id))
                                        {{$category->name }}, 
                                      @else
                                          <span>Pas de Catégorie</span>
                                      @endif
                                  @endforeach                                  
                                  </td>
                                <td>
        
                                    <div>
                                        <a class="btn btn-pill btn-outline-primary" href="{{ route('posts.show', $post->id) }}"> Voir</a>
                                        @csrf
                                        @method('DELETE')
                                        <a class="btn btn-pill btn-outline-danger" href="{{ route('posts.destroy',$post->id) }}" onclick="supprimer(event)" item="Voulez-vous supprimer le post {{ $post->title }}" data-toggle="modal" data-target="#supprimer">
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
    </div>
    @include('admin.partials.delete')

@endsection

@section('scripts')
<script>
  function supprimer(event){
      event.preventDefault();
      a = event.target.closest('a');

      let deleteForm = document.getElementById('deleteForm');
      deleteForm.setAttribute('action', a.getAttribute('href'));

      let textDelete = document.getElementById('textDelete');
      textDelete.innerHTML = a.getAttribute('item') + " ?";

      let titleDelete = document.getElementById('titleDelete');
      titleDelete.innerHTML = "Suppression";           
      
  }
</script>
@endsection