<?php date_default_timezone_set('America/Los_Angeles');?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="./lib/fixed-positioning.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="./wingfall.css">
        <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="./wingfall.js"></script>
    </head>
    <body>
    	<div id="bg1" data-0="background-position:0px 0px;" data-2500="background-position:0px -1000px;"></div>
    	<div id="bg3" data-0="background-position:0px 0px;" data-2500="background-position:0px -3000x;"></div>

<div id="logo"><img src="./img/logo.png" /></div>
    <div id="cta"><a href="https://itunes.apple.com/us/app/wingfall/id858347376?ls=1&mt=8"><img src="./img/dlbadge.png" /></a></div>
    <div id="stage">
        <div id="dude"><img src="./img/dude.png" /></div>
        <div id="section1" class="section">

            <div class="description">Wingfall is a physics simulation game
                 based around the aerodynamic drag force
                 of free falling!</div>

        </div>
        <div id="section2" class="section">
            <div class="description">Tilt side to side to  achieve the perfect angle. </div>
            <div class="sub">Balance your speed and don't lose control!</div>
            <div class="caption">Time is on your side, but the sky is not.</div>
        </div>

        <div id="section3" class="section">
            <div class="sub">The further you fall, the higher your score.
</div>

            <div class="caption">Based on real life aerodynamics</div>
            <div class="description">Crashing into a cloud means game over.
                 The same goes for flying out of bounds.</div>
         </div>
        <div id="section4" class="section">
           <div class="description"> lose to your friends in Game Center (because they don't have a life)</div>
        </div>

        <div id="section5" class="section"></div>
    </div>


    <div id="footer">
        <a href="http://hexperimental.com"><img class="footer-logo" src="./img/hexLogo.png" />
        <div>&copy; <?php print date('Y');?> Hexperimental Media Inc </div></a>
    </div>
    <script type="text/javascript" src="./lib/skrollr.min.js"></script>

	<!--[if lt IE 9]>
	<script type="text/javascript" src="../skrollr-ie/dist/skrollr.ie.min.js"></script>
	<![endif]-->

	<script type="text/javascript">
	var s = skrollr.init({
		edgeStrategy: 'set',
        forceHeight:false,
		easing: {
			WTF: Math.random,
			inverted: function(p) {
				return 1-p;
			}
		}
	});
	</script>
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', '', 'auto');
          ga('send', 'pageview');

        </script>
    </body>
</html>

<!--
Wingfall The further you fall, the higher your score. Wingfall is a physics simulation game based around the aerodynamic drag force of free falling!
What is your freefalling strategy? Slow and steady or drop it like it’s hot? Tilt your freefaller side to side and back to front achieve the perfect angle. Balance your speed and don't lose control!
Time is on your side, but the sky is not. Crashing into a cloud means game over. The same goes for flying out of bounds.
Happy falling!
Features:

   * easy to play, hard to master
   * based on real life aerodynamics
   * record your stats and top score
   * lose to your friends in Game Center (because they don't have a life)

Keywords: freefall, fall, physics, simulation, sim, flying, sky, diving, skydive, down, parachute, jump, jumper, drop
-->
