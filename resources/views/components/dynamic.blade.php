<x-app>
    <div class="container mt-5 pt-5 mt-md-0">
        <div class="row">
            <div class="col-12 d-md-flex justify-content-md-between">
                <!-- Sidebar-->
                @include('_partials._sidebar_nav')

                <!-- Main -->
                <div class="col-12 col-md-8 dynamic py-3">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
</x-app>
