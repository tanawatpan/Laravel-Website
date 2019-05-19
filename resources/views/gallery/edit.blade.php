@extends('layouts.main')


@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Edit Gallery</div>

                    <div class="card-body">
                        {!! Form::open(['action' => ['GalleryController@update', $gallery->gid], 'method' => 'POST', 'files' => true]) !!}
                            <div class="form-group">
                                {{Form::label('title', 'Title')}}
                                {{Form::text('title', $gallery->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}

                            </div>
                            <div class="form-group">
                                {{Form::label('author', 'Author')}}
                                {{Form::text('author', $gallery->author, ['class' => 'form-control', 'placeholder' => 'Author'])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('description', 'Description')}}
                                {{Form::textarea('description', $gallery->description, ['class' => 'form-control', 'placeholder' => 'Description'])}}
                            </div>
                            <div class="form-group">
                                {!! Form::file('images[]', ['multiple' => 'multiple']) !!}
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
