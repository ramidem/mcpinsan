<x-app>
    <div class="d-md-none container mt-5">
        &nbsp;
    </div>
    <div class=" container-fluid pb-5 mt-5 about-fluid">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 p-5 mcp-about">
                        <img
                            src="/images/mcpinsan-header.svg"
                            alt="McPinsan Cafe & Workspaces"
                            class="img-fluid">
                        <span>
                            <h1>McPinsan</h1>
                            <h2>Cafe & Workspaces</h2>
                        </span>
                    </div>

                    <div class="col-10 mx-auto col-md-6 p-5 mt-5 about-wrapper">
                        <h2 class="text-center mb-3">
                            Login
                        </h2>

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group">
                                <label for="email">{{ __('E-Mail Address') }}</label>

                                <input
                                    id="email"
                                    type="email"
                                    class="form-control form-control-lg @error('email') is-invalid @enderror"
                                    name="email"
                                    value="{{ old('email') }}"
                                    required
                                    autocomplete="email"
                                    autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>

                            <div class="form-group">
                                <label for="password">{{ __('Password') }}</label>

                                <input
                                    id="password"
                                    type="password"
                                    class="form-control form-control-lg @error('password') is-invalid @enderror"
                                    name="password"
                                    required
                                    autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>

                            <div class="form-group">
                                <div class="form-check">
                                    <input
                                        class="form-check-input"
                                        type="checkbox"
                                        name="remember"
                                        id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </form>

                        <small>
                            Not yet a member?
                            <a href="#">Register Here</a>
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app>
