@extends('layouts.main')


@section('content')

    <div class="container">
        <div class="card card-body bg-light﻿">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <img style="width:100%; height: auto;" class="rounded"
                         src="/{{$logo}}">
                </div>
                <div class="col-md-8 col-sm-8">
                    <h3><i class="text-secondary font-weight-bold">{{$manga->title}}
                            @if(!Auth::guest())
                                <a
                                    href="/ch/{{$manga->mid}}/create">
                                    <button type="button" class="btn btn-sm btn btn-outline-primary">
                                        Add Chapter
                                    </button>
                                </a>
                            @endif
                        </i>
                    </h3><hr>
                    <p class="card-text mb-auto font-weight-bold text-muted">
                        <i class="fa fa-user fa-lg" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                        <i class="text-info">Author</i>&emsp;&emsp;&emsp;&emsp;:&emsp;&nbsp;{{$manga->author}}
                    </p>
                    <p class="card-text mb-auto font-weight-bold text-muted">
                        <i class="fa fa-database fa-lg" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;
                        <i class="text-info">Release Date</i>&emsp;&nbsp;:&emsp;&nbsp;{{$manga->created_at}}
                    </p>
                    <p class="card-text mb-auto font-weight-bold text-muted">
                        <i class="fa fa-retweet fa-lg" aria-hidden="true"></i>&nbsp;&nbsp;
                        <i class="text-info">Last Update</i>&emsp;&nbsp;&nbsp;&nbsp;:&emsp;&nbsp;{{$manga->updated_at}}
                    </p>
                    <p class="card-text mb-auto font-weight-bold text-muted">
                        <i class="fa fa-tags fa-lg" aria-hidden="true"></i>&nbsp;&nbsp;
                        <i class="text-info">Genre</i>&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;:&emsp;
                        @foreach(explode(',', $manga->genre) as $genre)

                            <a
                                href="/manga/genres/{{$genre}}">
                                <button type="button" class="btn btn-primary btn-sm">{{strtolower($genre)}}</button>
                            </a>
                        @endforeach
                    </p>
                    <hr>
                    <p class="card-text mb-auto small">{{$manga->description}}</p>
                </div>
            </div>
        </div>
    </div>


    <div class="container mt-3 mb-5">
        <div class="card card-body bg-light﻿">
            <div>
                <h5 class="text-secondary font-weight-bold">Chapters</h5>
            </div>
            @if(count($chapters) > 0)
                @foreach($chapters as $chapter)
                    <hr><div class="row">
                        <div class="col-4"><a href="/manga/{{$manga->mid}}/{{$chapter->cid}}" class="text-primary">CH.{{$chapter->no}}</a></div>
                        <div class="col-4 font-weight-bold text-muted"><a href="/manga/{{$manga->mid}}/{{$chapter->cid}}" class="text-primary">{{$chapter->title}}</a></div>
                        <div class="col-4 text-right font-weight-bold text-muted">
                            {{$chapter->updated_at}}
                            @if(!Auth::guest())
                                <a
                                    href="/ch/edit/{{$chapter->cid}}">
                                    <button type="button" class="btn btn-sm btn btn-outline-primary">
                                        Edit
                                    </button>
                                </a>
                                {!! Form::open(['action' => ['ChapterController@destroy', $chapter->cid], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete', ['class' => 'btn btn-sm btn-outline-danger'])}}
                                {!!Form::close()!!}
                            @endif
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>

@endsection
