@extends('activities.layout')


@section('content')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12b">
            <div>
                <h2><strong>Activities</strong></h2>
            </div>
            <br>
            <div class="text-right">
                <a class="btn btn-primary" href="{{ route('activities.create') }}"> Add New Activity </a>
            </div>
            <br>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Success</strong>! {{ $message }}
        </div>
    @endif


    <table class="table table-bordered">
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Time spent(min)</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>

        @if(empty($activities))
            <tr></tr>
        @else
    	    @foreach ($activities as $activity)
    	    <tr>
    	        <td>{{ $activity->title }}</td>
    	        <td>{{ $activity->description }}</td>
    	        <td>{{ $activity->time_spent }}</td>
    	        <td><a class="btn btn-primary" href="{{ route('activities.edit', $activity->id) }}">Edit</a></td>
                <td>
                    <form action="{{ route('activities.destroy',$activity->id) }}" method="POST">                    

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>

                    </form>
    	        </td>
    	    </tr>

    	    @endforeach
        @endif

    </table>


@endsection