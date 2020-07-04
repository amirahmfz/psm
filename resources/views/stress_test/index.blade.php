@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="text-align:justify;" style= "font-weight:bold;"><h4><b>
                Sila baca setiap kenyataan dan pilih jawapan antara A, B, C, atau D yang menggambarkan keadaan anda SEMINGGU YANG LEPAS. Tidak ada jawapan betul atau salah. JANGAN guna terlalu banyak masa untuk mana-mana kenyataan.</h4></div>

                <form action="{{ route('tests.store') }}" class="panel-body" method="POST">
                    {{ csrf_field() }}
                    
                    @foreach ($questions as $question)
                    <div class="form-group" >
                        <label for="">{{ $question }}</label>

                        <div class="form-check">
                            <label class="form-check-label">
                            <input required type="radio" class="form-check-input" name="answer[{{ $loop->index }}]" id="" value="0">
                            Tidak Pernah
                          </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                            <input required type="radio" class="form-check-input" name="answer[{{ $loop->index }}]" id="" value="1">
                            Jarang
                          </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                            <input required type="radio" class="form-check-input" name="answer[{{ $loop->index }}]" id="" value="2">
                            Kerap
                          </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                            <input required type="radio" class="form-check-input" name="answer[{{ $loop->index }}]" id="" value="3">
                            Sangat Kerap
                          </label>
                        </div>
                        
                      </div>
                    @endforeach

                   <center> <button type="submit" class="btn btn-primary" >Tahap Stres</button> 
                   
                   <span style="font-size: 24px;">{{ session('level', '') }} </span>
                   
                   </center>

                </form>
            </div>

        </div>
    </div>
</div>
@endsection
