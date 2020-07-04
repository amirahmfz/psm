@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Cara Mengurangkan Stres</div>

                <div class="panel-body">
                <video width="100%" height="400" controls>
  <source src="{{ asset('Video_pengurusan_stres.mp4') }}" type="video/mp4">
  
Your browser does not support the video tag.
</video>

           </div>
            </div>
        </div>
    </div>
</div>
@endsection
