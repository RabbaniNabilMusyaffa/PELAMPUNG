@extends('layouts.auth')

@section('login')
<div class="login-box">

    <!-- /.login-logo -->
    <div class="login-box-body mb-5">
          <div class="login-logo">
           <h1> Register</h1>
        </div>

        <form action="{{ route('send-register') }}" method="post" class="form-login">
            @csrf
            <label for="nama" class="control-label">Nama</label>
            <div class="form-group has-feedback @error('name') has-error @enderror">
                <input type="name" name="name" class="form-control" placeholder="name" required
                    value="{{ old('name') }}" autofocus>
                <span class="form-control-feedback"></span>
                @error('name')
                <span class="help-block">{{ $message }}</span>
                @else
                <span class="help-block with-errors"></span>
                @enderror
            </div>
            <label for="nama" class="control-label">Email</label>
            <div class="form-group has-feedback @error('email') has-error @enderror">
                <input type="email" name="email" class="form-control" placeholder="Email" required
                    value="{{ old('email') }}" autofocus>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                @error('email')
                <span class="help-block">{{ $message }}</span>
                @else
                <span class="help-block with-errors"></span>
                @enderror
            </div>
            <label for="nama" class="control-label">Password</label>
            <div class="form-group has-feedback @error('password') has-error @enderror">
                <input type="password" name="password" class="form-control" placeholder="Password" required>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                @error('password')
                <span class="help-block">{{ $message }}</span>
                @else
                <span class="help-block with-errors"></span>
                @enderror
            </div>
            <input type="hidden" name="role_id" value="3">
            <div class="row">
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-success btn-block btn-flat">Simpan</button>
                </div>
                <!-- /.col -->
            </div>
    </div>
    </form>

</div>
<!-- /.login-box -->
@endsection
