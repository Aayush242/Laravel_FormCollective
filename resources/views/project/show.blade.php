@extends('layouts.app')
@section('content')
<div class="container mt-2">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Details</h2>
                        <a class="btn btn-primary" href="{{ route('project.index') }}">Back</a>
                    </div>
                    <div class="pull-right">
                        <!-- <a class="btn btn-primary" href="{{ route('project.index') }}" enctype="multipart/form-data">Show all records</a> -->
                    </div>
                </div>
            </div>
            @if(session('status'))
                <div class="alert alert-success mb-1 mt-1">
                    {{ session('status') }}
                </div>
            @endif
           
            {!!Form::model($project,['route' => ['project.update' , $project->id] ] , ['method'=>'POST' , 'enctype'=>'multipart/form-data'])!!}
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Name: {{$project->f_name}}</strong>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Assigning Date: {{$project->as_date}}</strong>
                        </div>
                    </div>

                    
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Deadline: {{$project->deadline}}</strong>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Email: {{$project->email}}</strong>
                        </div>
                    </div>
                </div>
            </form>
            <form action="{{ route('project.destroy',$project->id) }}" method="Post">
                           
                            <a class="btn btn-warning" href="{{ route('project.edit',$project->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
             </form>
                  
        </div>
@endsection