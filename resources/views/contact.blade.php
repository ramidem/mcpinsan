<x-app>
    <div class="content container pb-5 mt-5">
        <div class="row mb-5">
            <div class="col-10 mt-5 mt-md-0 mx-auto col-md-5 mx-md-0 mb-5">
                <h2 class="text-center mb-3">Get in touch</h2>
                <form>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control form-control-lg" id="name"
                                                                                aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control form-control-lg" id="email"
                                                                                 aria-describedby="emailHelp">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with
                            anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="help">How can we help?</label>
                        <select class="form-control">
                            <option>Just saying hello</option>
                            <option>Inquiring about your coffee</option>
                            <option>More info on workspaces</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message" rows="3"></textarea>
                    </div>
                    <div class="form-group form-check pt-2 pb-4">
                        <input type="checkbox" class="form-check-input" id="subcription">
                        <label class="form-check-label" for="subcription">Never miss our promotions. Subscribe
                            to
                            mailing list.</label>
                    </div>
                    <button type="submit" class="btn btn-dark btn-block btn-lg">Submit</button>
                </form>
            </div>
            <div class="col-10 mx-auto col-md-6 mx-md-0 ml-md-auto">
                <h2 class="text-center mb-5">Come visit us</h2>
                <div class="mapouter">
                    <div class="gmap_canvas"><iframe id="gmap_canvas"
                                                     src="https://maps.google.com/maps?q=jolo%2C%20sulu&t=&z=15&ie=UTF8&iwloc=&output=embed"
                                                     frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    </div>
                </div>

                <ul class="list-group list-group-flush contact-details">
                    <li class="list-group-item"><i class="fas fa-map-marker-alt"></i> Some St., Jolo, Sulu. PH
                    </li>
                    <li class="list-group-item"><i class="fas fa-envelope-open-text"></i> hey@mcpinsan.ml</li>
                    <li class="list-group-item"><i class="fas fa-phone"></i> +63 992 000 1111</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Content -->
</x-app>
