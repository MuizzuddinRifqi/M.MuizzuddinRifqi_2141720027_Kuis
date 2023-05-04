<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta name="description" content="Blast fast website blog with new laravel cms blog using lava web apps.">
    <meta name="author" content="https://lavapos.vercel.app/">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <title>New Laravel Blog CMS with LAVA web apps</title>
    <link rel="icon" href="https://mesinkasironline.web.app/img/createwebsitelaravel.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.6/dist/css/uikit.min.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    <script src="https://unpkg.com/vue/dist/vue.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet">
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/clean-blog.min.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container-fluid lead">
        <div class="row">
            <div class="col-12 col-md-12 p-3 p-md-5 text-center"><img
                    src="{{ URL::asset('/uploads/the-new-artisan-blog.png') }}"
                    class="img-fluid animate__animated animate__bounceInDown">
                <h1 class="display-4 animate__animated animate__lightSpeedInLeft">Be artisan with Lava Blog.</h1>
            </div>
            <div class="col-12 col-md-4 p-3 p-md-5 text-center text-white">
                <div class="bg-danger p-3 p-md-5 shadow rounded animate__animated animate__backInDown repeat: true">
                    <h3 class="text-white">Modern</h3><svg width="5em" height="5em" viewBox="0 0 16 16"
                        class="bi bi-award" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M9.669.864L8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68L9.669.864zm1.196 1.193l-1.51-.229L8 1.126l-1.355.702-1.51.229-.684 1.365-1.086 1.072L3.614 6l-.25 1.506 1.087 1.072.684 1.365 1.51.229L8 10.874l1.356-.702 1.509-.229.684-1.365 1.086-1.072L12.387 6l.248-1.506-1.086-1.072-.684-1.365z" />
                        <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z" />
                    </svg>
                    <p>Modern website technology.</p>
                </div>
            </div>
            <div class="col-12 col-md-4 p-3 p-md-5 text-center text-white">
                <div class="bg-danger p-3 p-md-5 shadow rounded animate__animated animate__backInDown">
                    <h3 class="text-white">Blast</h3><svg xmlns="http://www.w3.org/2000/svg" width="86"
                        height="86" fill="currentColor" class="bi bi-lightning-charge" viewBox="0 0 16 16">
                        <path
                            d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09zM4.157 8.5H7a.5.5 0 0 1 .478.647L6.11 13.59l5.732-6.09H9a.5.5 0 0 1-.478-.647L9.89 2.41 4.157 8.5z" />
                    </svg>
                    <p>Super Fast with the Laravel.</p>
                </div>
            </div>
            <div class="col-12 col-md-4 p-3 p-md-5 text-center text-white">
                <div class="bg-danger p-3 p-md-5 shadow rounded animate__animated animate__backInDown">
                    <h3 class="text-white">Easy</h3><svg width="5em" height="5em" viewBox="0 0 16 16"
                        class="bi bi-controller" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M11.119 2.693c.904.19 1.75.495 2.235.98.407.408.779 1.05 1.094 1.772.32.733.599 1.591.805 2.466.206.875.34 1.78.364 2.606.024.815-.059 1.602-.328 2.21a1.42 1.42 0 0 1-1.445.83c-.636-.067-1.115-.394-1.513-.773a11.307 11.307 0 0 1-.739-.809c-.126-.147-.25-.291-.368-.422-.728-.804-1.597-1.527-3.224-1.527-1.627 0-2.496.723-3.224 1.527-.119.131-.242.275-.368.422-.243.283-.494.576-.739.81-.398.378-.877.705-1.513.772a1.42 1.42 0 0 1-1.445-.83c-.27-.608-.352-1.395-.329-2.21.024-.826.16-1.73.365-2.606.206-.875.486-1.733.805-2.466.315-.722.687-1.364 1.094-1.772.486-.485 1.331-.79 2.235-.98.932-.196 2.03-.292 3.119-.292 1.089 0 2.187.096 3.119.292zm-6.032.979c-.877.185-1.469.443-1.733.708-.276.276-.587.783-.885 1.465a13.748 13.748 0 0 0-.748 2.295 12.351 12.351 0 0 0-.339 2.406c-.022.755.062 1.368.243 1.776a.42.42 0 0 0 .426.24c.327-.034.61-.199.929-.502.212-.202.4-.423.615-.674.133-.156.276-.323.44-.505C4.861 9.97 5.978 9.026 8 9.026s3.139.943 3.965 1.855c.164.182.307.35.44.505.214.25.403.472.615.674.318.303.601.468.929.503a.42.42 0 0 0 .426-.241c.18-.408.265-1.02.243-1.776a12.354 12.354 0 0 0-.339-2.406 13.753 13.753 0 0 0-.748-2.295c-.298-.682-.61-1.19-.885-1.465-.264-.265-.856-.523-1.733-.708-.85-.179-1.877-.27-2.913-.27-1.036 0-2.063.091-2.913.27z" />
                        <path
                            d="M11.5 6.026a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-1 1a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm2 0a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-1 1a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-7-2.5h1v3h-1v-3z" />
                        <path
                            d="M3.5 6.526h3v1h-3v-1zM3.051 3.26a.5.5 0 0 1 .354-.613l1.932-.518a.5.5 0 0 1 .258.966l-1.932.518a.5.5 0 0 1-.612-.354zm9.976 0a.5.5 0 0 0-.353-.613l-1.932-.518a.5.5 0 1 0-.259.966l1.932.518a.5.5 0 0 0 .612-.354z" />
                    </svg>
                    <p>Easy and simple blog cms.</p>
                </div>
            </div>
            <div class="col-12 col-md-12 p-3 p-md-5 text-center text-white">
                <div class="uk-child-width-1-2@m uk-grid-match" uk-grid>
                    <div>
                        <div class="uk-card uk-card-default uk-card-body shadow rounded bg-dark text-white"
                            uk-scrollspy="cls: uk-animation-slide-left; repeat: true">
                            <h3 class="uk-card-title text-white">The Artisan</h3>
                            <hr class="bg-white"><i class="fab fa-laravel text-white fa-6x"></i>
                            <p>Simple blog content management system develope using laravel for build new modern website
                                fast and powerfull.</p>
                            <p>php artisan serve - and your site is live now.</p>
                        </div>
                    </div>
                    <div>
                        <div class="" uk-scrollspy="cls: uk-animation-slide-right; repeat: true"><video
                                width="1200" src="{{ asset('img/laras.mp4') }}" loop muted playsinline
                                uk-video="autoplay: inview"></video></div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 p-3 p-md-5 text-center text-white">
                <div class="uk-child-width-1@m" uk-grid
                    uk-scrollspy="cls: uk-animation-slide-bottom; target: .uk-card; delay: 300; repeat: true">
                    <div>
                        <div class="bg-danger p-3 p-md-5 shadow rounded"
                            uk-scrollspy="cls:uk-animation-slide-top; repeat: true">
                            <h3 class="text-white">LAVA Web Apps</h3>
                            <p class="border p-3">This is a open source code project present by LAVA Web apps , visit
                                lava web app if you need develope website and application using laravel ,<a
                                    href="https://lavapos.vercel.app/" class="text-white border p-1"
                                    target="_blank">Visit Lava →</a></p>
                            <p>Lava blog cms is a new generation for build modern website apps using laravel framework,
                                simple and easy to learn , very fast for develope your site. for blog demo you can login
                                using email : admin@admin.com / password : 12345678</p><a href="/blog"
                                class="btn btn-light border border-danger">Visit Blog</a><a href="/login"
                                class=" border border-danger btn btn-light">Login Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-12 text-center">
            <footer>
                <div class="container my-auto">
                    <div class="copyright text-center my-auto" style="font-size:1em"><strong>Copyright &copy;
                            @php echo date('Y'); @endphp<a href="https://lavapos.vercel.app/"
                                class="text-danger">LAVA</a>.</strong>All rights reserved.</div>
                </div>
            </footer>
        </div>
    </div>
    <div class="col-12 text-center border-top"> developed by zuddin technology</div>
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src='https://mesinkasir.github.io/larapos/pos/gallerya.js'></script>
    <script src="{{ asset('js/clean-blog.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.9.4/dist/js/uikit.min.js"></script>
</body>

</html>
