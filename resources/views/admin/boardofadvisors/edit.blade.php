@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Edit a boardofadvisor
@parent
@stop


@section('content')
<section class="content-header">
    <h1>Boardofadvisors</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li>boardofadvisors</li>
        <li class="active">Create New boardofadvisor</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-primary ">
                <div class="panel-heading">
                    <h4 class="panel-title"> <i class="livicon" data-name="edit" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                        Edit boardofadvisor
                    </h4>
                </div>
                <div class="panel-body">
                     @if ($errors->any())
                        <ul class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif

                    {!! Form::model($boardofadvisor, ['method' => 'PATCH', 'action' => ['BoardofadvisorsController@update', $boardofadvisor->id],'files'=>true]) !!}

                    <div class="form-group">
                        {!! Form::label('name', 'Name: ') !!}
                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('filePath', 'Filepath: ') !!}
                        <div>
                       
                        <img src="{{URL::to('uploads/crudfiles/'.$boardofadvisor['filePath'])}}" style="height: 100px;width: 100px;" alt="Image">
                        </div>
                        &nbsp; {!! Form::file('filePath_image', ['class' => 'form-control']) !!}

                    </div>

					<div class="form-group">
                        {!! Form::label('role', 'Role: ') !!}
                        {!! Form::text('role', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('address', 'Address: ') !!}
                        {!! Form::text('address', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('contact', 'Contact: ') !!}
                        {!! Form::text('contact', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('degree', 'Degree: ') !!}
                        {!! Form::textarea('degree', null, ['class' => 'form-control']) !!}
                    </div>

					

                    <div class="form-group">
                        {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
                    </div>
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</section>
@stop