@extends('activities.layout')

@section('content')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="text-left">
                <h2><b>Update Activity</b></h2>
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


    <form action="/activities/{{ $activity->id }}" method="POST">

    	@csrf
        @method('PUT')


         <div class="row">
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="control">
		            <strong>Title:</strong>
		            <input type="text" name="title" value="{{ $activity->title }}" class="form-control" placeholder="Title">
		        </div>
		    </div>

		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="control">
		            <strong>Desription:</strong>
		            <textarea class="form-control" name="description" placeholder="Desription">{{ $activity->description }}</textarea>
		        </div>
		    </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="control">
                    <strong>Time spent in minutes:</strong>
                    <input type="text" name="time_spent" value="{{ $activity->time_spent }}" class="form-control" placeholder="Time spent">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
		      <button type="submit" class="btn btn-primary">Update</button>
		    </div>
		</div>  
    </form>


@endsection