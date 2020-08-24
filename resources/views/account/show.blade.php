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

    <div class="row mt-3">
        <div class="col-12">
            <div class="card text-center">
                <div class="card-header">
                    <ul class="nav nav-pills card-header-pills">
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Requests</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active rounded-0" href="#">All</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead class="thead-light">
                            <tr>
                                <td>Code</td>
                                <td>Date</td>
                                <td>Status</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach(range(1, 5) as $item)
                                <tr>
                                    <td>Code</td>
                                    <td>Date</td>
                                    <td>Action</td>
                                    <td>
                                        <a
                                            href="">
                                            View
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-dynamic>
