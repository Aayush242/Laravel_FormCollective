@extends('layouts.app')
@section('content')
        <div class="container mt-2">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left mb-2">
                        <h2>Add Project Details</h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-success" href="{{ route('project.index') }}">Show all Records</a>
                    </div>
                </div>
            </div>
        
            @if(session('status'))
                <div class="alert alert-success mb-1 mt-1">
                    {{ session('status') }}
                </div>
            @endif
            
                {!!Form::open(['route' => 'project.store'] , ['method'=>'POST' , 'enctype'=>'multipart/form-data'])!!}
                @csrf
                @include('project.form')
                {!! Form::close() !!}
            
@endsection