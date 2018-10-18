<!DOCTYPE html>
<html>

<head>
    @include('layouts.head',['title'=>'Welcome'])
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="/css/welcome.css">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>

<body>

<div class="containerhome">
    <div class="form">

        <ul class="tab-group">
            <li class="tab active"><a href="#login">Log In</a></li>
            <li class="tab"><a href="#signup">Sign Up</a></li>
        </ul>

        <div class="tab-content">
            <div id="login">
                <h1>Hello Please Login</h1>

                <form action="/" method="post">

                    <div class="field-wrap">
                        <label>
                            Email Address<span class="req">*</span>
                        </label>
                        <input type="email" name="email" autocomplete="off" required>
                    </div>

                    <div class="field-wrap">
                        <label>
                            Password<span class="req">*</span>
                        </label>
                        <input type="password" name="password" autocomplete="off" required>
                    </div>

                    <p class="forgot"><a href="#">Forgot Password?</a></p>

                    <button class="button button-block" type="submit">Log In</button>

                </form>

            </div>

            <div id="signup">
                <h1>Create Account</h1>

                <form action="/" method="post">

                    <div class="top-row">
                        <div class="field-wrap">
                            <label>
                                First Name<span class="req">*</span>
                            </label>
                            <input type="text" name="first_name" autocomplete="off" required>
                        </div>

                        <div class="field-wrap">
                            <label>
                                Last Name<span class="req">*</span>
                            </label>
                            <input type="text" name="last_name" required="" autocomplete="off">
                        </div>
                    </div>

                    <div class="top-row">

                    <div class="field-wrap">
                        <label>
                            Phone Number<span class="req">*</span>
                        </label>
                        <input type="phone" required="" autocomplete="off">
                    </div>

                    <div class="field-wrap">
                        <label>
                            Email Address<span class="req">*</span>
                        </label>
                        <input type="email" required="" autocomplete="off">
                    </div>
                    </div>

                    <div class="top-row">

                    <div class="field-wrap">
                        <label>
                            Password<span class="req">*</span>
                        </label>
                        <input type="password" required="" autocomplete="off">
                    </div>

                    <div class="field-wrap">
                        <label>
                            Confirm Password<span class="req">*</span>
                        </label>
                        <input type="password" name="password_confirmation" required="" autocomplete="off">
                    </div>
                    </div>

                    <button type="submit" class="button button-block">Get Started</button>

                </form>

            </div>

        </div><!-- tab-content -->

    </div> <!-- /form -->
    <script src="/js/index.js"></script>

</div>

</body>

</html>