<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regstrasi Page</title>
    <link rel="stylesheet" href="css/4.5.2-bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        /* Custom CSS to center the form */
        .centered-form {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .margin-top{
            margin-top: 150px;
        }

        /* Custom CSS for the side image */
        .side-image {
            background-size: cover;
            background-position: center;
            height: 100vh;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row margin-top">

            <div class="col-md-6 side-image">
                <img src="images/register.png" class="img-fluid" alt="login-image">
            </div>

            <div class="col-md-6">
                <div class="card custom-card">
                    <div class="card-header">
                        Register
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                        @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                <!-- <input type="text" class="form-control" id="name" placeholder="Enter your name"> -->
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input id="email" class="form-control" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                <!-- <input type="email" class="form-control" id="email" placeholder="Enter your email"> -->
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input id="password" class="form-control"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                <!-- <input type="password" class="form-control" id="password" placeholder="Enter your password"> -->
                            </div>
                            <div class="form-group">
                                <label for="confirm password">Confirm Password</label>
                                <input id="password_confirmation" class="form-control"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                <!-- <input type="password" class="form-control" id="confirm password" placeholder="Enter your confirm password"> -->
                            </div>

                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                            <div class="form-group mt-4">
                                <div class="text-center">
                                    <span>Already have an account?</span>
                                    <a href="#">Login Here</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    <script src="js/jquery-3.5.1.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>


</body>
</html>
