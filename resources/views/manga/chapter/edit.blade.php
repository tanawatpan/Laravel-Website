@extends('layouts.main')


@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit [ {{$manga->title}} ] , No. {{$chapter->no}}</div>

                    <div class="card-body">
                        {!! Form::open(['action' => ['ChapterController@update', $chapter->cid], 'method' => 'POST', 'files' => true]) !!}
                            <div class="form-group">
                                {!! Form::file('images[]', ['multiple' => 'multiple']) !!}
                            </div>
                            <div class="form-group">
                                {{Form::label('no', 'No')}}
                                {{Form::text('no', $chapter->no, ['class' => 'form-control', 'placeholder' => 'No'])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('title', 'Title')}}
                                {{Form::text('title', $chapter->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
                            </div>
                            <hr>

                            {{Form::hidden('_method', 'PUT')}}

                            {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
                        {!! Form::close() !!}﻿
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
