<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{action('ItemsController@showLogin')}}">HOME</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{action('ItemsController@index')}}">Auction Items <span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="{{action('ItemsController@create')}}">Create Auction Item</a></li>
      </ul>
     
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{action('ItemsController@create')}}">Create Auction Item</a></li>
            <li><a href="{{action('ItemsController@characterCreate')}}">Create Character</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="http://www.wowhead.com/">WoW Head</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="{{action('ItemsController@doLogout')}}">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>


      <?php if ($_SERVER['REQUEST_URI'] ==  '/index.php'): ?>
      <div class="wow wow-fixed-top">
      <img src="/img/WoW.jpg" width="100%" height="150" alt="logo">
      <?php endif; ?>
      </div>
  </div>
</nav>

