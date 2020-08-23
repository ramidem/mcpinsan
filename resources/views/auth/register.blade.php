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
                            Register
                        </h2>

                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group">
                                <label for="username">{{ __('Username') }}</label>

                                <input
                                    id="username"
                                    type="text"
                                    class="form-control form-control-lg @error('username') is-invalid @enderror"
                                    name="username"
                                    value="{{ old('username') }}"
                                    {{-- required --}}
                                    autocomplete="username"
                                    autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="name">{{ __('Name') }}</label>

                                <input
                                    id="name"
                                    type="text"
                                    class="form-control form-control-lg @error('name') is-invalid @enderror"
                                    name="name"
                                    value="{{ old('name') }}"
                                    {{-- required --}}
                                    autocomplete="name"
                                    autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="email">{{ __('Email') }}</label>

                                <input
                                    id="email"
                                    type="email"
                                    class="form-control form-control-lg @error('email') is-invalid @enderror"
                                    name="email"
                                    value="{{ old('email') }}"
                                    {{-- required --}}
                                    autocomplete="email">

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
                                    {{-- required --}}
                                    autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                <input
                                    id="password-confirm"
                                    type="password"
                                    class="form-control"
                                    name="password_confirmation"
                                    {{-- required --}}
                                    autocomplete="new-password">
                            </div>

                            <button
                                type="submit"
                                class="btn btn-dark btn-block btn-lg mb-3">
                                {{ __('Register') }}
                            </button>
                        </form>
                        <small>
                            Already a member?
                            <a href="#">Login Here</a>
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Content -->
    {{-- <div class="content d-none d-md-block container mt-5 pb-5"> --}}
        {{--     <div class="row spacer"> --}}
            {{--         &nbsp; --}}
            {{--     </div> --}}
        {{-- </div> --}}
</x-app>
