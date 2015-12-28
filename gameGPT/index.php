<!doctype html> 
<html lang="en"> 
<head> 
	<meta charset="UTF-8"/>
	<title>gameGpt</title>

	<script type="text/javascript" src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>

    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<div class="game-container">
		<div class="overlay">
			<div class="opening-overlay-text">Welcome to Get Paid To's Ready Aim Fire! Here's how it works. Push the start game or space bar and the gun site will move horizontally. When the site is in a position you like, push the Set Aim button or space bar and the site will then move vertically. Press the Fire Button or space bar when the site is over one of the three targets.  If you hit all three you win!!!</div>
			<div class="good-luck">Good Luck!</div>
 			<input type="image" src="assets/images/btnStartGame.png"  class="btn-start"  id="startGame" />
 		</div>

		<div id="gptGame"></div>

		<div class="end-game-overlay hide-this">
			<div class="overlay-text timed-out hide-this">Timed Out</div>
			<div class="overlay-text winner hide-this">Winner!  Nice Shootin Tex!</div>
			<div class="overlay-text zero-hits hide-this">Zero Hits...Do you need Glasses?</div>
			<div class="overlay-text one-hit hide-this">One Hit...Ones ok, I guess</div>
			<div class="overlay-text two-hits hide-this">Two Hits...Close but no cigar.</div>
			<div class="overlay-text">Banner</div>
		</div>
 		
 	</div>


	<script type="text/javascript" src="js/phaser.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
</body>
</html>
