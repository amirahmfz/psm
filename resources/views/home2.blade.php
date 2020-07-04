@extends('layouts.app')

@section('content')
<style>
.panel-body{
    color: #000;
}
</style>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                <center><h3>Selamat datang {{ Auth::user()->name }}</center></h3>
                </div>

                <div class="panel-body" style="color: #000; text-align: justify">
                    <p><strong>Laman web ini akan menerangkan mengenai E- Profiling Pengurusan Stres kepada Admin.</strong></p>

                    <p><strong>1)</strong> Laman web ini adalah bertujuan untuk mengumpul data pengguna-pengguna yang menggunakan E-Profiling Pengurusan Stres.</p>
                    <p><strong>2)</strong> Admin mempunyai akses, kemaskini, padam, serta melihat carta setiap pengguna yang menggunakan laman web ini.</p>
                    <p><strong>3)</strong> Admin mempunyai akses untuk melihat purata stres pengguna E-Profiling Pengurusan Stres pada halaman <strong>Carta</strong>.</p>
                    <p><strong>4)</strong> Untuk melihat cara mengemaskini maklumat pengguna sila klik <a target="_blank" href="{{ route('admin.download.manual') }}"> Manual Pengguna </a></p>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection