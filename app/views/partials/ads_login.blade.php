      <head>
  <title>User Login</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/main.css">
</head>
<body>

      <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-md-offset-4">


                <div class="account-wall" id="login">
                  <h1 class="text-center login-title"> SIGN IN TO GO TO THE AUCTION </h1>
                    <img class="profile-img" src="/img/code_breaker.jpeg">
                    <form method="POST" class="form-signin">
                    <input type="text" class="form-control" name="email" placeholder="Email" required autofocus>
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">SIGN IN</button>
                   </form>
                <a href="{{action('ItemsController@userCreate')}}" class="text-center new-account">CREATE AN ACCOUNT</a>
                <a href="{{action('ItemsController@index')}}" class="text-center new-account">View site as Guest</a>
                </div>
            </div>
        </div>
    </div>

    <html>


