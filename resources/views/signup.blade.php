<!DOCTYPE html>

<head>
    <title>Signup</title>
    <link rel="stylesheet" type="text/css" href="signup.css">
    @include('include.head_link')
</head>

<body>
    @include('include.header')

    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->
            <h2 class="active"> Sign In </h2>


            <!-- Icon -->
            <div class="fadeIn first">
                <img src="img/iuc.jpeg" id="icon" alt="User Icon" />
            </div>

            <!-- Login Form -->
            <form method="post" action="/home">
                {{@csrf_field()}}

                <div class="form-group">
                    <input class="au-input au-input--full" placeholder="email" type="email" name="email">
                </div>

                <div class="form-group">
                    <input class="au-input au-input--full" placeholder="password" type="password" name="password">
                </div>

                <input type="submit" class="fadeIn fourth" value="Log In">
            </form>

            <!-- Remind Passowrd -->
            <div id="formFooter">
                <a class="underlineHover" href="#">Forgot Password?</a>
            </div>

        </div>
    </div>

    @include('include.footer')

    @include('include.foot_link')
</body>

</html>