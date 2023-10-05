@extends('layouts.front-layout')
@section('content')
@push('styles')
    <style>
        .login-header {
            margin-bottom: 20px;
        }

        .login-header h3 {
            font-size: 18px;
            margin-bottom: 3px;
        }

        .login-header h3 a {
            color: #13C5DD;
            float: right;
            font-size: 15px;
            margin-top: 2px;
        }

        .register-form {
            background: transparent;
            border: 3px solid #354f8e;
            border-radius: 5px;
            padding: 15px 20px;
            margin-bottom: 15px;
            width: 100%;
            color: #000000;
            font-size: 14px;
        }

        .input-wrap {
            display: inline-block;
            position: relative;
            width: 100%;
        }

        .input-wrap label {
            position: absolute;
            font-size: 14px;
            color: #354f8e;
            top: 19px;
            left: 15px;
            z-index: 2;
            background: #FFF;
            padding: 0 5px;
            -webkit-transition: all 300ms ease;
            -moz-transition: all 300ms ease;
            -ms-transition: all 300ms ease;
            -o-transition: all 300ms ease;
            transition: all 300ms ease;
        }

        .input-wrap label.active {
            top: -5px;
        }

        .input-wrap label.hidden {
            opacity: 0;
            z-index: 2;
        }

        .input-wrap.hidden {
            opacity: 0;
            z-index: -1;
        }

        .btn-login{
            width: 100%;
        }
    </style>
@endpush
<div class="container-fluid my-5">
    <div class="row">
        <div class="account-content">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-7 col-lg-5 mx-2 login-left">
                    <img src="{{ asset('assets/img/poster/login-banner.png') }}" class="img-fluid" alt="Login Banner">
                </div>
                <div class="col-md-12 col-lg-5 mx-2 login-right">
                    <div class="login-header">
                        <h3>Doctor Register <a href="/vuejs/template/register" style="font-size: 20px">Not a Doctor?</a></h3>
                    </div>
                    <form method="POST" action="{{ route('dentist.login.store') }}">
                        @csrf <!-- CSRF token for security -->
                        <div class="form-group">
                            <input class="register-form @error('phone_number') is-invalid @enderror" type="tel" name="phone_number" data-placeholder="Phone" required>
                            @error('phone_number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input class="register-form @error('password') is-invalid @enderror" type="password" name="password" data-placeholder="Enter Password" required>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <button class="btn btn-primary btn-login" type="submit">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@push('script')
    <script>
        $('.register-form').each(function() {
            var labelText = $(this).attr('data-placeholder'), // Get input placeholder value
                labelFor = $(this).attr('name'); // Get input name value

            // Wrap the input in a div and label
            $(this)
                .wrap('<div class="input-wrap"></div>')
                .before('<label for="'+ labelFor +'">'+ labelText +'</label>');
        });

        $('.register-form').focus(function() {
            var inputName = $(this).attr('name');
            $('label[for="'+ inputName +'"]').addClass('active');
        });

        $('.register-form').blur(function() {
            if ($(this).val() != '') {
                $('label.active').addClass('hidden').removeClass('active');
            } else {
                $('label.active').removeClass('hidden active');
            }
        });
    </script>

@endpush
