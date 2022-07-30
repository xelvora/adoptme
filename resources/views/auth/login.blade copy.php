<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>Login | Adoptme - Find your pet here</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- Font Icon -->
        <link rel="stylesheet" href="{{asset('backend/assets/fonts/material-icon/css/material-design-iconic-font.min.css')}}">

        <!-- Main css -->
        <link rel="stylesheet" href="{{asset('backend/assets/css2/style.css')}}">
        <!-- JAVASCRIPT -->
        <script src="{{asset('backend/assets/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('backend/assets/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{asset('backend/assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('backend/assets/libs/node-waves/waves.min.js')}}"></script>

        <script src="{{asset('backend/assets/js/app.js')}}"></script>

    </head>

    <body class="auth-body-bg">
        <div class="bg-overlay"></div>
        <div class="wrapper-page">
            <div class="container-fluid p-0">
                <div class="card">
                    <div class="card-body">

                            <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Login</h2>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <label for="email"><i class="zmdi zmdi-email"></i></label>
                                        <input class="form-control" type="email" required="" name="email" placeholder="Email">
                                    </div>
                                </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input class="form-control" type="password" name="password" required="" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Login"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="{{asset('backend/assets/images/logo.png')}}" alt="sing up image"></figure>
                        <a href="{{ route('register') }}" class="signup-image-link">Create an Account</a>
                    </div>
                </div>
            </div>
        </section>
                            </form>
                            <!-- end form -->
                        </div>
                    </div>
                    <!-- end cardbody -->
                </div>
                <!-- end card -->
            </div>
            <!-- end container -->
        </div>
        <!-- end -->




    </body>
</html>