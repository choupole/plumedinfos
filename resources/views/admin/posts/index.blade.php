@extends('admin.layouts.app')
@section('content')
<div class="min-height-200px">
    <div class="page-header">
        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong><p>{{ $message }}</p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Posts</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Export Datatable start -->
    <div class="card-box mb-30">
        <div class="pd-20">
            <h4 class="text-blue h4">Listes des posts</h4>
        </div>
        <div class="pb-20">
            <div class="table-responsive">
                <table class="table hover data-table-export nowrap">
                    <thead>
                        <tr>
                            <th class="table-plus datatable-nosort">Id</th>
                            <th>Titre du post</th>
                            <th>Contenu</th>
                            <th>Image</th>
                            <th>Catégorie</th>
                            <th class="datatable-nosort">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post) 
                        <tr>
                            <td class="table-plus">{{$post->id }}</td>
                            <td>{{$post->title }}</td>
                            <td>{{ Illuminate\Support\Str::limit($post->content, 100) }}</td>
                            <td>{{$post->image }}</td>
                            <td>
                                @foreach ($categories as $category)
                                @if ($post->categories->pluck('id')->contains($category->id))
                                <a href="{{ route('postsByCategories', ['id' => $category->id]) }}" class="card-tag">{{$category->name }}</a>
                                @endif
                                @endforeach                              
                            </td>
                            <td>
                                <div class="dropdown">
                                    <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                        <i class="dw dw-more"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                        <a class="dropdown-item" href="{{ route('posts.show', $post->id) }}"><i class="dw dw-eye"></i> Voir</a>
                                        @csrf
                                        @method('DELETE')
                                        <a class="dropdown-item" href="{{ route('posts.destroy',$post->id) }}" onclick="supprimer(event)" item="Voulez-vous supprimer le post {{ $post->matricule }}" data-toggle="modal" data-target="#supprimer">
                                            <i class="dw dw-delete-3"></i> Supprimer					
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>    
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Export Datatable End -->
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
	<!-- buttons for Export datatable -->
	<script src={{asset('AdminArtisan/src/plugins/datatables/js/dataTables.buttons.min.js')}}></script>
	<script src={{asset('AdminArtisan/src/plugins/datatables/js/buttons.bootstrap4.min.js')}}></script>
	<script src={{asset('AdminArtisan/src/plugins/datatables/js/buttons.print.min.js')}}></script>
	<script src={{asset('AdminArtisan/src/plugins/datatables/js/buttons.html5.min.js')}}></script>
	<script src={{asset('AdminArtisan/src/plugins/datatables/js/buttons.flash.min.js')}}></script>
	<script src={{asset('AdminArtisan/src/plugins/datatables/js/pdfmake.min.js')}}></script>
	<script src={{asset('AdminArtisan/src/plugins/datatables/js/vfs_fonts.js')}}></script>
				<!-- Datatable Setting js -->
	<script src={{asset('AdminArtisan/vendors/scripts/datatable-setting.js')}}></script>
@endsection