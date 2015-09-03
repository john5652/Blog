<style>

  body {
    background-image: url("/img/login.jpg");
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-size:cover;

  }

 #login {
    background-color: #A3DAA3;
  }

.account-wall {
  border-radius: 10%;
}

  .container{
    opacity: .8;
  }

  h1.text-center.login-title {
    color: #0029A3;
    font-weight: bolder;
  }


</style>


  {{ Form::open(array('action' => 'ItemsController@doLogin', ))}}

    @include('partials.ads_login')

  {{ Form::close() }} 

