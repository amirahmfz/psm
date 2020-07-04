@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"></div>

                <div class="panel-body">

                    <table class="table">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Jantina</th>
                                <th>Berat (kg)</th>
                                <th>Tinggi (cm)</th>
                                <th>Jenis Darah</th>
                                <th>Taraf</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $user)
                            <tr>
                                <td scope="row">{{ $loop->iteration }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->gender }}</td>
                                <td>{{ $user->weight }}</td>
                                <td>{{ $user->height }}</td>
                                <td>{{ $user->blood_type }}</td>
                                <td>{{ $user->is_admin ? 'Admin' : 'Biasa' }}</td>
                                <td>
                                    <a href="{{ route('admin.users.edit', $user) }}">Kemaskini</a> |
                                    <a href="{{ route('admin.users.userChart', $user) }}">Carta</a> |
                                    <a style="color:red" href="{{ route('admin.users.delete', $user) }}">Padam</a>
                                </td>
                            </tr>
                            @empty
                                Tiada pengguna                                
                            @endforelse
                            
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection