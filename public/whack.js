var score = 0;
var fade = $('.fade');
var holes = $('.hole');
var sec = 10
var change
var timer
var highscore = 0;

// this function will continually change the class of fade to a random id in the div on the board and call the function to add 1
function changeUp() {
 change =	setInterval(function(){
		var rand = Math.floor((Math.random()*9));
		var selected = $(holes[rand]);
		var nomole = holes.not(selected)
		selected.addClass('fade').removeClass('faded')
		nomole.removeClass('fade').addClass('faded')
		selected.one('mousedown', scoreIS);
	}, 800);
}

function changeUp2() {
 change =	setInterval(function(){
		var rand = Math.floor((Math.random()*9));
		var selected = $(holes[rand]);
		var nomole = holes.not(selected)
		selected.addClass('fade').removeClass('faded')
		nomole.removeClass('fade').addClass('faded')
		selected.one('mousedown', scoreIS);
	}, 50);
}

// button function to call forth the changeUp function 
$('#start').one('mousedown', changeUp);
$('#start2').one('mousedown', changeUp2);

// button function to call forth time function
$('#start').one('mousedown', countDown);
$('#start2').one('mousedown', countDownn);



//whenever the id has the class of fade add to score
function scoreIS() {
	score++;
	$('#score').text("Score: " + score);
	console.log(score);
	// if high score is higher then score add to highscore
	if (score > highscore) {
		highscore++;
		$('#highscore').text("High Score: " + highscore);
	} 
}

// timer function 
function countDown() {
   	timer = setInterval(function() {
   	 	$('.countdown').text(sec--);
	   	 	if (sec == -1) {
   		$('.countdown').fadeOut('slow');
   	 	clearInterval(change);
    	
   	 		// alerts game over and allows to either refresh page or continue playing to beat highscore
       	 	var conf = confirm("Game over. Click to play again.");
    			if(conf) {
    			score = 0 // resets score to 0 but not highscore
    			$('#score').text("Score: " + score);
    			sec = 10 // resets timer 
    			$('.countdown').text(sec--);
    			$('.countdown').fadeIn('slow');
        		changeUp();
    			} else { 
    			location.reload(true);
    		}
			}
		}, 1000);
   }

   	function countDownn() {
   	timer = setInterval(function() {
   	 	$('.countdownn').text(sec--);
	   	 	if (sec == -1) {
   		$('.countdownn').fadeOut('slow');
   	 	clearInterval(change);
    	
   	 		// alerts game over and allows to either refresh page or continue playing to beat highscore
       	 	var conf = confirm("Game over. Click to play again.");
    			if(conf) {
    			score = 0 // resets score to 0 but not highscore
    			$('#score').text("Score: " + score);
    			sec = 10 // resets timer 
    			$('.countdownn').text(sec--);
    			$('.countdownn').fadeIn('slow');
        		changeUp2();
    			} else { 
    			location.reload(true);
    		}
			}
		}, 1000);
   }

