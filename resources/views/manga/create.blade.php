@extends('layouts.main')


@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Create Manga</div>

                    <div class="card-body">
                        {!! Form::open(['action' => 'MangaController@store', 'method' => 'POST', 'files' => true]) !!}
                            <div class="form-group">
                                {{Form::label('title', 'Title')}}
                                {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}

                            </div>
                            <div class="form-group">
                                {{Form::label('author', 'Author')}}
                                {{Form::text('author', '', ['class' => 'form-control', 'placeholder' => 'Author'])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('genre', 'Genres (Comma-separated values)')}}
                                {{Form::text('genre', '', ['class' => 'form-control', 'placeholder' => 'Genre'])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('description', 'Description')}}
                                {{Form::textarea('description', '', ['class' => 'form-control', 'placeholder' => 'Description'])}}
                            </div>
                            <div class="form-group">
                                {!! Form::file('logo') !!}
                            </div>
                            <hr>
                            {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
                        {!! Form::close() !!}﻿
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
