@extends('layouts.main')


@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create Chapter [ {{$manga->title}} ]</div>

                    <div class="card-body">
                        {!! Form::open(['action' => ['ChapterController@store', $mid], 'method' => 'POST', 'files' => true]) !!}
                            <div class="form-group">
                                {!! Form::file('images[]', ['multiple' => 'multiple']) !!}
                            </div>
                            <div class="form-group">
                                {{Form::label('no', 'No')}}
                                {{Form::text('no', '', ['class' => 'form-control', 'placeholder' => 'No'])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('title', 'Title')}}
                                {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
                            </div>
                            <hr>
                            {{Form::hidden('mid', $manga->mid)}}
                            {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
                        {!! Form::close() !!}﻿
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
