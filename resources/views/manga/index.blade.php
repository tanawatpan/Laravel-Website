@extends('layouts.main')


@section('content')

    <div class="jumbotron text-white text-center font-weight-bold" style = "background-color:#a4c6e0;">
        <h1 class="display-4">Comics</h1>
    </div>

    <div class="container my-3">
        <div class="row justify-content-center">
            @foreach( $genres as $genre )
                <a class="mx-1 mb-1"
                   href="/manga/genres/{{$genre}}">
                    <button type="button" class="btn btn-primary btn-lg">{{ucfirst($genre)}}</button>
                </a>
            @endforeach
        </div>
    </div>

    <div class="album py-3 box-content">

        <div class="container">
            @if(count($mangas) > 0)
                <div class="row">
                    @foreach($mangas as $manga)

                        <div class="col-md-4">
                            <div class="card my-1 mx-1 box-shadow">
                                <a
                                    href="/manga/{{$manga->mid}}">
                                    <img class="card-img-top" src="/{{$paths[$manga->mid]}}"
                                         style="width:100%; height: auto;" alt="Card image cap">
                                </a>
                                <div class="top-left row">
                                    @foreach(explode(',', str_replace(' ','',$manga->genre)) as $genre)
                                        <a class="mx-1 mb-1"
                                            href="/manga/genres/{{$genre}}">
                                            <button type="button" class="btn btn-primary btn-sm">{{strtolower($genre)}}</button>
                                        </a>
                                    @endforeach
                                </div>
                                <div class="card-body">
                                    <p class="text-center text-secondary">{{$manga->title}}</p>
                                    <p class="card-text small">{{$manga->description}}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a
                                                href="/manga/{{$manga->mid}}">
                                                <button type="button" class="btn btn-sm btn btn-outline-secondary">View
                                                </button>
                                            </a>
                                            @if(!Auth::guest())
                                                <a
                                                    href="/manga/{{$manga->mid}}/edit">
                                                    <button type="button" class="btn btn-sm btn btn-outline-primary">
                                                        Edit
                                                    </button>
                                                </a>
                                                {!! Form::open(['action' => ['MangaController@destroy', $manga->mid], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                                    {{Form::hidden('_method', 'DELETE')}}
                                                    {{Form::submit('Delete', ['class' => 'btn btn-sm btn-outline-danger'])}}
                                                {!!Form::close()!!}
                                            @endif
                                        </div>
                                        <small class="text-muted">{{$manga->updated_at}}</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                {{$mangas->links()}}

            @else
                <section class="jumbotron text-center">
                    <div class="container">
                        <h1 class="jumbotron-heading">No Manga, Sorry T_T</h1>
                    </div>
                </section>
            @endif

        </div>

    </div>


@endsection
