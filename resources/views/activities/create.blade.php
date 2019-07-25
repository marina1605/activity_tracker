@extends('activities.layout')


@section('content')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="text-left">
                <h2><b>Add New Activity</b></h2>
            </div>
            <div class="text-right">
                <a class="btn btn-primary" href="{{ route('activities.index') }}">Back</a>
            </div>
        </div>
    </div>


    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="{{ route('activities.store') }}" method="POST">

    	@csrf

         <div class="row">
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Title:</strong>
		            <input type="text" name="title" class="form-control" placeholder="Title" value={{ old('title') }}>
		        </div>
		    </div>
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Description:</strong>
		            <textarea name="description" class="form-control" placeholder="Description">{{ old('description') }}</textarea>
		        </div>
		    </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Time spent in minutes:</strong>
                    <input type="text" name="time_spent" class="form-control" placeholder="Time spent in minutes" value = "{{ old('time_spent') }}">
                </div>
            </div>

		    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
		            <button type="submit" class="btn btn-primary">Create</button>
		    </div>

		</div>


    </form>


@endsection