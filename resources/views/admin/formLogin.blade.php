<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="utf-8" />
    <title>Log In</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <link rel="stylesheet" href="{{ asset('css/app.min.css')}}">
</head>
<body>
    <div class="account-pages mt-5 mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="card">

                        <div class="card-body p-4">
                            <div class="text-center w-75 m-auto">
                                <h4 class="text-dark-50 text-center mt-0 font-weight-bold">Entrar</h4>
                                <!-- <p class="text-muted mb-4">Enter your email address and password to access admin panel.</p> -->
                            </div>
                            <div class="info-create"></div>
                            <form action="{{ route('admin.login.do') }}" method="POST" >
                                @csrf

                                @if ($errors->all())
                                <div class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        {{$error}}
                                    @endforeach
                                </div>
                                @endif
                                <div class="form-group">
                                    <label for="emailaddress">E-mail</label>
                                    <input class="form-control" type="text" name = "email" id="emailaddress" placeholder="Ensira o seu email" required>
                                </div>

                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <div class="input-group input-group-merge">
                                        <input type="password" id="password" name = "password" class="form-control" placeholder="Ensira a sua password">
                                        <div class="input-group-append" data-password="false">
                                            <div class="input-group-text">
                                                <span class="password-eye"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div style="clear: both;"></div>

                                <div class="form-group mt-3 mb-0 text-center">
                                    <button class="btn btn-primary" type="submit" id="btn-ent"> Login </button>
                                </div>
                                <!-- end row -->
                            </form>
                        </div> <!-- end card-body -->
                    </div>
                    <!-- end card -->

                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->


        <footer class="footer footer-alt">
            2021 © Hyper - Dumilson
        </footer>
</body>
</html>