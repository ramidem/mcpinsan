<x-app>
    <!-- Personal Rooms -->
    <div class="container mt-5 pt-5 mt-md-0">
        <div class="row">
            <div class="col-12 d-md-flex justify-content-md-between">
                <!-- Day Pass -->
                <div class="col-md-3 mb-3 mt-5">
                    <h3>Account</h3>
                    <hr>
                    <ul class="nav nav-pills flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Inventory</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Members</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Requests</a>
                        </li>
                    </ul>
                </div>
                <!-- Day Pass -->
                <!-- Hourly -->
                <div class="col-12 col-md-8 dynamic py-3">
                    {{ $slot }}
                </div>
                <!-- End Hourly -->
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <!-- Meeting Rooms -->
    <div class="container-fluid meeting-rooms pt-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-10 mx-auto col-md-4">
                    <h4>Small</h4>
                    <p class="small italic">Ideal for 8 to 10 persons</p>
                    <table class="table table-striped meeting-table">
                        <tbody>
                            <tr>
                                <th scope="row"><span class="small">php</span> 360</th>
                                <td>Per Hour</td>
                            </tr>
                            <tr>
                                <th scope="row"><span class="small">php</span> 900</th>
                                <td>3 Hours</td>
                            </tr>
                            <tr>
                                <th scope="row"><span class="small">php</span> 2,160</th>
                                <td>Whole Day (8 Hours)</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <hr class="d-md-none">

                <div class="col-10 mx-auto col-md-4">
                    <h4>Medium</h4>
                    <p class="small italic">Ideal for 12 to 20 persons</p>
                    <table class="table table-striped meeting-table">
                        <tbody>
                            <tr>
                                <th scope="row"><span class="small">php</span> 500</th>
                                <td>Per Hour</td>
                            </tr>
                            <tr>
                                <th scope="row"><span class="small">php</span> 1,250</th>
                                <td>3 Hours</td>
                            </tr>
                            <tr>
                                <th scope="row"><span class="small">php</span> 3,000</th>
                                <td>Whole Day (8 Hours)</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <hr class="d-md-none">

                <div class="col-10 mx-auto col-md-4">
                    <h4>Grande</h4>
                    <p class="small italic">Ideal for 12 to 20 persons</p>
                    <table class="table table-striped meeting-table">
                        <tbody>
                            <tr>
                                <th scope="row"><span class="small">php</span> 900</th>
                                <td>Per Hour</td>
                            </tr>
                            <tr>
                                <th scope="row"><span class="small">php</span> 2,250</th>
                                <td>3 Hours</td>
                            </tr>
                            <tr>
                                <th scope="row"><span class="small">php</span> 5,400</th>
                                <td>Whole Day (8 Hours)</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="col-10 col-md-6 mx-auto mt-5">
                    <p class="inclusion small text-center">For educational purposes only.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Content -->
</x-app>
