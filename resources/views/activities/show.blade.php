@extends('activities.layout')


@section('content')

     <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Activity</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('activities.index') }}"> Back</a>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                    {{ $activity->title }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Descrption:</strong>
                {{ $activity->description }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Time spent doing activity(min):</strong>
                {{ $activity->time_spent }}
            </div>
        </div>
    </div>

@endsection