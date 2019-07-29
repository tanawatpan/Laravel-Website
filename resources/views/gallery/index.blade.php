@extends('layouts.main')


@section('content')

    <div class="jumbotron text-white text-center font-weight-bold" style = "background-color:#ce1f44;">
        <h1 class="display-4">Gallery</h1>
    </div>

    <div class="album py-3 box-content">

        <div class="container">
            @if(count($galleries) > 0)
                <div class="row">
                    @foreach($galleries as $gallery)

                        <div class="col-md-4">
                            <div class="card my-1 mx-1 box-shadow">
                                <a
                                    href="/gallery/{{$gallery->gid}}">
                                    <img class="card-img-top" src="/storage/gallery/{{$gallery->gid}}/{{basename($paths[$gallery->gid])}}"
                                         alt="Card image cap">
                                </a>
                                <div class="card-body">
                                    <p class="text-center text-secondary">{{$gallery->title}}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a
                                                href="/gallery/{{$gallery->gid}}">
                                                <button type="button" class="btn btn-sm btn btn-outline-secondary">View
                                                </button>
                                            </a>
                                            @if(!Auth::guest())
                                                <a
                                                    href="/gallery/{{$gallery->gid}}/edit">
                                                    <button type="button" class="btn btn-sm btn btn-outline-primary">
                                                        Edit
                                                    </button>
                                                </a>
                                                {!! Form::open(['action' => ['GalleryController@destroy', $gallery->gid], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                                {{Form::hidden('_method', 'DELETE')}}
                                                {{Form::submit('Delete', ['class' => 'btn btn-sm btn-outline-danger'])}}
                                                {!!Form::close()!!}
                                            @endif
                                        </div>
                                        <small class="text-muted">{{$gallery->updated_at}}</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                {{$galleries->links()}}

            @else
                <section class="jumbotron text-center">
                    <div class="container">
                        <h1 class="jumbotron-heading">No Gallery, Sorry T_T</h1>
                    </div>
                </section>
            @endif

        </div>

    </div>


@endsection
