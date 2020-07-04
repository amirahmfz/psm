@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                <center><h3>Selamat datang {{ Auth::user()->name }}</h3></center>
                </div>

                <div class="panel-body" style="color: #000; text-align: justify">
                
                  <p><h3> <strong> Anda tahu apa itu stres?</strong></h3></p>
                  <p>
                   </p>
                   
                   <p><center><img src="Stress-Liver-and-TCM-1.jpg" width="60%" height="250"></center></p>

                   <p> Menurut Kamus Dewan (2007) mentafsirkan stres sebagai keadaan resah, cemas, tegang dan sebagainya akibat tekanan mental atau fizikal.
                    Dengan kata lain, stres merupakan tindak balas fizikal yang biasa terhadap satu perkara atau peristiwa yang boleh menyebabkan ketidakseimbangan berlaku. </p>
                   <p> Menurut portal <a target="_blank" href="http://www.myhealth.gov.my/pengurusan-stres-2/"> MyHealth</a> Stres atau tekanan adalah tindak balas fizikal, emosi dan mental seseorang terhadap sebarang perubahan atau tuntutan. </p>

                   <p><strong>E-Profiling Pengurusan Stres</strong> merupakan satu laman web yang mengumpul maklumat pengguna untuk pengguna memantau tahap 
                    stres yang dialami dari semasa ke semasa dengan cara:</p>
                <p style="text-indent:50px" >1) Pengguna perlu menjawab soalan yang disediakan pada halaman <strong> Soalan </strong></p>
                <p style="text-indent:50px" > 2) Pengguna perlu klik butang <strong>'Tahap' </strong> untuk mengetahui tahap stres. </p>
                <p style="text-indent:50px" > 3) Pengguna boleh klik pada halaman <strong> Carta </strong> untuk melihat graph serta memantau tahap stres anda.</p>
                <p> Selain itu, anda boleh menonton video untuk mengurangkan stres semasa bekerja pada halaman <strong>Video</strong>.</p>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
