<nav class="navbar navbar-expand navbar-light bg-white">
    <div class="container">
        <ul class="navbar-nav ml-auto">
            @if (Session::has('basket'))
                <a
                    href="{{ route('basket.index') }}"
                    class="btn btn-outline-secondary mr-3">
                    @include('_partials.basket-icon')
                    <span class="badge badge-light ml-2">
                        {{ count(session('basket')) }}
                    </span>
                </a>
            @endif
            <li class="nav-item dropdown">

                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ auth()->user()->username }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a
                        class="dropdown-item"
                        href="{{ route('account.show', auth()->user()->username) }}">
                        Account
                    </a>

                    <a
                        class="dropdown-item"
                        href="/inventory">
                        Inventory
                    </a>

                    <a
                        class="dropdown-item"
                        href="/transactions">
                        Transactions
                    </a>

                    <div class="dropdown-divider"></div>

                    <a
                        class="dropdown-item"
                        href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form
                        id="logout-form"
                        action="{{ route('logout') }}"
                        method="POST"
                        style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
    </div>
</nav>
