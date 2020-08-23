<x-dynamic>
    @include('_partials._heading', [
        'heading' => 'Account Information'
    ])

    {{-- @include('_partials._inventory_navs') --}}

    <div class="row mt-3">

        <div class="col-9">
            <div class="card border-0">
                <div class="card-body">
                    <h5 class="card-title">Member Name</h5>
                    <p class="card-text">
                        <strong>
                            About:
                        </strong>
                        Member Bio This card has supporting text below as a natural lead-in to additional content.
                    </p>
                    <p class="card-text">
                        <strong>
                            Member Since:
                        </strong>
                        January 10, 2020
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

    <div class="row mt-3">
        <div class="col-12">
            <div class="card text-center">
                <div class="card-header">
                    <ul class="nav nav-pills card-header-pills">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Active</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
</x-dynamic>
