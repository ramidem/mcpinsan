<x-dynamic>
    @include('_partials._heading', [
        'heading' => 'Account Information'
    ])

    {{-- @include('_partials._inventory_navs') --}}

    <div class="row mt-3">

        <div class="col-9">
            <div class="card border-0">
                <div class="card-body">
                    <h5 class="card-title">{{ $user->name }}</h5>
                    <p class="card-text">
                        <small class="text-uppercase">
                            About:
                        </small>
                        <br/>
                        Member Bio This card has supporting text below as a natural lead-in to additional content.
                    </p>
                    <p class="card-text">
                        <small class="text-uppercase">
                            Member Since:
                        </small>
                        <br/>
                        {{ date("F Y", strtotime($user->created_at)) }}
                    </p>
                    <p class="card-text">
                        <small class="text-muted">
                            Last updated 3 mins ago
                        </small>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-3">
            <div class="card">
                <img src="https://via.placeholder.com/300" class="card-img-top" alt="...">
            </div>
        </div>

    </div>
</x-dynamic>
