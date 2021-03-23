@extends('layouts.mainLayouts.masterPage')
@section('content')
<!-- Register Section Begin -->
<div class="register-login-section spad">


    <div class="container">

        @include('flash::message')
        @include('adminlte-templates::common.errors')
        {{-- @php
        $msg=session('errorMsg')
        @endphp --}}

        {{-- @include('layouts.modal') --}}

        {{-- @if(session('errorMsg'))
        <script>
            $(window).load(function() {
                $('#exampleModalCenter').modal('show');
            });
        </script>
        @endif --}}
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="register-form">
                    <h2>Change Password</h2>
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <div class="group-input">
                            <label for="password">Old Password *</label>
                            <input id="oldpassword" type="text"
                                class="form-control @error('oldpassword') is-invalid @enderror" name="oldpassword"
                                value="{{ old('name') }}" required autocomplete="oldpassword" autofocus>

                            @error('oldpassword')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>


                        <div class="group-input">
                            <label for="pass">Password *</label>
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="new-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="group-input">
                            <label for="con-pass">Confirm Password *</label>
                            <input id="password-confirm" type="password" class="form-control"
                                name="password_confirmation" required autocomplete="new-password">
                        </div>
                        <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                            Launch demo modal
                        </button> -->
                        <button type="submit" class="site-btn register-btn">{{ __('Update') }}</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
