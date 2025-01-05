<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/registerpage.css') }}">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <!-- Logo Section -->
            <div class="login-logo">
                <img src="{{ asset('images/logo.jpg') }}" alt="Logo" class="logo-img">
            </div>
                        <h4>Register</h4>
                        
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <!-- Name -->
                            <div class="mb-3">
                                <label for="name" class="form-label">{{ __('Name') }}</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autofocus autocomplete="name">
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Email -->
                            <div class="mb-3">
                                <label for="email" class="form-label">{{ __('Email') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Password -->
                            <div class="mb-3">
                                <label for="password" class="form-label">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Confirm Password -->
                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">{{ __('Confirm Password') }}</label>
                                <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>

                            <!-- Terms and Privacy -->
                            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                <div class="mb-3 form-check">
                                    <input type="checkbox" name="terms" id="terms" class="form-check-input" required>
                                    <label for="terms" class="form-check-label">
                                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                            'terms_of_service' => '<a href="'.route('terms.show').'" class="text-decoration-none" target="_blank">'.__('Terms of Service').'</a>',
                                            'privacy_policy' => '<a href="'.route('policy.show').'" class="text-decoration-none" target="_blank">'.__('Privacy Policy').'</a>',
                                        ]) !!}
                                    </label>
                                </div>
                            @endif

                            <!-- Buttons -->
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('login') }}" class="text-decoration-none text-sm text-muted">
                                    {{ __('Already registered?') }}
                                </a>
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
