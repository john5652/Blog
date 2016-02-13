<!DOCTYPE html> 
<html>
<head>
	<title>Whack-a-Mole</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>
<body>

<link rel="stylesheet" type="text/css" href="/whack.css">

	<h1>Whack!</h1>

	<div id="board" class="container">
		<div id="0" class="first hole score"></div>
		<div id="1" class="second hole score"></div>
		<div id="2" class="third hole score"></div>
		<div id="3" class="fourth hole score"></div>
		<div id="4" class="fifth hole score"></div>
		<div id="5" class="sixth hole score"></div>
		<div id="6" class="seventh hole score"></div>
		<div id="7" class="eighth hole score"></div>
		<div id="8" class="ninth hole score"></div>
  	</div>

     <div id = "keepscore">
	  	 <p class="countdown"></p>
	  	 <p class="countdownn"></p>
		 <button type='button' id="start">Shall we play a game</button>
		 <button type='button' id="start2">You can play huh?</button>
		 <p id="score">Score: 0 </p>
		 <p id="highscore">High Score: 0 </p>
	 </div>

	<script src="/whack.js"></script>
</body>
</html>


		


