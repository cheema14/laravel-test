@extends('layout')

@section('content')
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Test App</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container py-4">
        <form method="POST" action="{{ route('form') }}">
            <div class="col-12">
                <div class="form-floating mb-3">
                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                        name="name" placeholder="{{ __('Name*') }}" value="{{ old('name') }}" required>
                    <label for="name">{{ __('Name*') }}</label>
                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-floating mb-3">
                    <input id="email" type="email"
                        class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email_field"
                        placeholder="{{ __('E-Mail**') }}" value="{{ old('email') }}" required>
                    <label for="email">{{ __('E-Mail*') }}</label>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-floating mb-3">
                    <textarea id="content" class="form-control{{ $errors->has('message') ? ' is-invalid' : '' }}" name="content"
                        style="min-height: 100px" placeholder="{{ __('Content*') }}">{{ old('content') }}</textarea>
                    <label for="description">{{ __('Content*') }}</label>
                    @if ($errors->has('message'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('message') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="col-12">
                <div class="form-check mb-3">
                    <input class="form-check-input" name="privacy" type="checkbox" value="" id="privacy" required>
                    <label class="form-check-label ps-2" for="privacy">
                        Accept TOS
                    </label>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary text-uppercase w-100">
                        {{ __('Submit') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
