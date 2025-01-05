<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Link to the CSS file -->
    <link rel="stylesheet" href="{{ asset('css/loginpage.css') }}">
</head>
<body>

    <!-- Login Container -->
    <div class="login-container">
        <div class="login-card">
            <!-- Logo Section -->
            <div class="login-logo">
                <img src="{{ asset('images/logo.jpg') }}" alt="Logo" class="logo-img">
            </div>

            <!-- Validation Errors Section -->
            <x-validation-errors class="mb-4" />

            <!-- Status Message Section -->
            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <!-- Login Form -->
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Field -->
                <div class="form-group">
                    <label for="email" class="form-label">{{ __('Email') }}</label>
                    <input id="email" type="email" class="form-input" name="email" :value="old('email')" required autofocus autocomplete="username">
                </div>

                <!-- Password Field -->
                <div class="form-group">
                    <label for="password" class="form-label">{{ __('Password') }}</label>
                    <input id="password" type="password" class="form-input" name="password" required autocomplete="current-password">
                </div>

                <!-- Remember Me Checkbox -->
                <div class="form-group remember-me">
                    <label for="remember_me" class="remember-me-label">
                        <input type="checkbox" id="remember_me" name="remember" class="remember-me-checkbox">
                        {{ __('Remember me') }}
                    </label>
                </div>

                <!-- Forgot Password Link -->
                <div class="form-group">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="forgot-password-link">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                </div>

                <!-- Submit Button -->
                <div class="form-group">
                    <button type="submit" class="btn-primary">{{ __('Log in') }}</button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
