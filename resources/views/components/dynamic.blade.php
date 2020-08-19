<x-app>
    <div class="container mt-5 pt-5 mt-md-0">
        <div class="row">
            <div class="col-12 d-md-flex justify-content-md-between">
                <!-- Sidebar-->
                <div class="col-md-3 mb-3 mt-5">
                    @include('_partials._sidebar_nav')
                </div>

                <!-- Main -->
                <div class="col-12 col-md-9 dynamic py-3">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
</x-app>
