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
                        <li class="breadcrumb-item active" aria-current="page"> {{$category->name}} </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

        <div class="pd-20 card-box mb-30 clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 mb-30">
                    <h5 class="h4 text-blue mb-20">{{$category->name}} </h5>
                    <div class="tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active text-blue" data-toggle="tab" href="#home" role="tab" aria-selected="true">Categorie</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-blue" data-toggle="tab" href="#profile" role="tab" aria-selected="false">Articles</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="home" role="tabpanel">
                                <div class="pd-20">
                                    <p> {{$category->name}} </p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel">
                                <div class="pd-20">
                                    <table id="example1" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Titre</th>
                                            <th>Content</th>
                                            <th>Image</th>
                                            <th>Catégorie</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($postsByCategories as $post)
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
                    </div>
            </div>
        </div>

</div>
@endsection

@section('scripts')
<script>
    
    document.getElementById('submitFormLink').addEventListener('click', function() {
        document.getElementById('myForm').submit();
    });
</script>
<script src={{asset('AdminADP/vendors/scripts/process.js')}}></script>
<script src={{asset('AdminADP/src/plugins/jquery-steps/jquery.steps.js')}}></script>
<script src={{asset('AdminADP/vendors/scripts/steps-setting.js')}}></script>
@endsection