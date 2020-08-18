<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>McPinsan</title>

        <!-- Font Google -->
        <link
            href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Merriweather:ital,wght@0,400;0,700;1,400&display=swap"
            rel="stylesheet">

        <!-- Favicons -->
        <link rel="apple-touch-icon" sizes="57x57" href="/images/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/images/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/images/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/images/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/images/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/images/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/images/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/images/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/images/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192" href="/images/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/images/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon/favicon-16x16.png">
        <link rel="manifest" href="/images/favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/images/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">

        <!-- font awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
                               integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <style>
img.bg-img {
    min-height: 100%;
    min-width: 1024px;

    /* proportionate scaling */
    width: 100%;
    height: auto;

    /* positioning */
    position: fixed;
    top: 0;
    left: 0;
    z-index: -3;
}

            .md-navlinks li.logo {
                background: url(../images/mcp-logo-white.svg) center no-repeat;
            }

            .md-navlinks li a {
                color: white;
            }
            .md-navlinks li a:hover {
                color: whitesmoke;
                border-top: 3px solid whitesmoke;
                text-shadow: none;
            }

            /* Mobile Nav Arrow */
            .open-menu {
                color: white;
            }

            .open-menu:hover {
                color: #2c454f;
            }

            /* Text Shadows */
            h3.mb-3,
            p.mb-5 {
                text-shadow: 0px 1px 2px rgba(0, 0, 0, 0.3);
            }

            h3.mb-3 {
                font-weight: normal;
            }

            /* Content */
            /* === */
            .mcp-heading span {
                display: none;
                text-indent: -9999px;
                font-family: "Libre Baskerville", serif;
            }

            .full-cta {
                font-family: "Libre Baskerville", serif;
            }

            .full-cta p {
                font-size: 1.2rem;
            }

            @media (max-width: 767px) {
                h3.mb-3 {
                    font-size: 1.2rem;
                }

                .full-cta p {
                    font-size: 1rem;
                }
            }

            @media (max-width: 991px) {
                h3.mb-3 {
                    font-size: 1.3rem;
                }

                .full-cta p {
                    font-size: 1rem;
                }
            }
        </style>
    </head>

    <body>
        <!-- Background Image -->
        <img src="/images/cafebg2x.png" alt="cafe" class="bg-img">

        <div class="wrapper">
            @include('_partials._navs')
            <!-- Start Content -->
            <div class="container full-cta pt-5 mt-5">
                <div class="row d-md-flex align-items-center pt-md-0 mt-5">
                    <div class="mcp-heading col-12 p-5 p-md-0 mb-5 mb-md-0 col-md-6">
                        <img src="/images/mcpinsan-header.svg" alt="McPinsan Cafe & Workspaces"
                                                               class="img-fluid">
                        <span>
                            <h1>McPinsan</h1>
                            <h2>Cafe & Workspaces</h2>
                        </span>
                    </div>

                    <div class="col-12 col-md-6 text-white text-center pl-md-5">
                        <h3 class="px-3 mb-3">We pride ourselves in supporting locally sourced products.</h3>
                        <h3 class="px-3 mb-3">Our brewed coffee comes from the finest 100% arabica beans of Jolo, Sulu.</h3>
                    </div>

                </div>
                <div class="row">
                    <div class="col-12 text-white text-center my-5 pt-md-5 mx-auto">
                        <div class="col-12 col-md-9 mx-auto text-left">
                            <p class="px-3 mb-5">Book a room for up to 20 people for meetings or a single-person room if you value personal space.</p>
                        </div>
                        <a href="/workspaces" class="mb-3 mb-md-0 col-8 col-md-3 btn btn-light">Workspaces</a>
                        <a href="/register" class="mb-3 mb-md-0 ml-md-3 col-8 col-md-5 btn btn-dark">Become a Member</a>
                    </div>
                </div>
            </div>
            <!-- End Content -->
        <!-- Footer -->
        <div class="footer">
            <span>
                &copy; 2020 &mdash; <a href="http://ramidem.me" target="_blank" rel="noopener noreferrer">Med
                    Aduh</a>
            </span>
        </div>
        <!-- Footer -->
        </div>

        <!-- Mobile Navigation -->
        <script src="/js/menuOverlay.js"></script>
    </body>
</html>

