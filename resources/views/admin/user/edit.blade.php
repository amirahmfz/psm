@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Kemaskini Pengguna</div>

                <div class="panel-body">


                    <form class="form-horizontal mt-5" style="margin-top: 30px" method="POST" action="{{ route('admin.users.update', $user) }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nama</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name', $user->name) }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('weight') ? ' has-error' : '' }}">
                            <label for="weight" class="col-md-4 control-label">Berat (kg)</label>

                            <div class="col-md-6">
                                <input id="weight" type="text" class="form-control" name="weight" value="{{ old('weight', $user->weight) }}" required>

                                @if ($errors->has('weight'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('weight') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('height') ? ' has-error' : '' }}">
                            <label for="height" class="col-md-4 control-label">Tinggi (cm)</label>

                            <div class="col-md-6">
                                <input id="height" type="text" class="form-control" name="height" value="{{ old('height', $user->height) }}" required>

                                @if ($errors->has('height'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('height') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('blood_type') ? ' has-error' : '' }}">
                            <label for="blood_type" class="col-md-4 control-label">Jenis Darah</label>

                            <div class="col-md-6">
                                <select class="form-control" name="blood_type" id="gender">
                                    @foreach([
                                    'A+',
                                    'A-',
                                    'B+',
                                    'B-',
                                    'O+',
                                    'O-',
                                    'AB+',
                                    'AB-'
                                    ] as $blood)
                                    <option value="{{ $blood }}" {{ $user->blood_type == $blood ? 'selected' : ''}}>{{ $blood }}</option>
                                    @endforeach
                                  </select>

                                @if ($errors->has('blood_type'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('blood_type') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                            <label for="gender" class="col-md-4 control-label">Gender</label>

                            <div class="col-md-6">
                                  <select class="form-control" name="gender" id="gender">
                                    <option value="Lelaki" {{ $user->gender == 'Lelaki' ? 'selected' : ''}}>Lelaki</option>
                                    <option value="Perempuan" {{ $user->gender == 'Perempuan' ? 'selected' : ''}}>Perempuan</option>
                                  </select>

                                @if ($errors->has('gender'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email', $user->email) }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Kata Kunci</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Simpan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection