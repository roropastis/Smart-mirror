<html>
<head>
	<title>Magic Mirror</title>
	<style type="text/css">
		<?php include('css/main.css') ?>
	</style>
	<audio id="audio">
    <source src="http://audio.scdn.arkena.com/11006/franceinfo-midfi128.mp3" type="audio/mpeg" />
</audio>
<audio id="audio2">
	<source src="http://bfmbusiness.scdn.arkena.com/bfmbusiness.mp3" type="audio/mpeg" />
</audio>
	<link rel="stylesheet" type="text/css" href="css/weather-icons.css">
	<script type="text/javascript">
		var gitHash = '<?php echo trim(`git rev-parse HEAD`) ?>';
	</script>
	<meta name="google" value="notranslate" />
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
</head>
<body>

	<div class="top left"><div class="date small dimmed"></div><div class="time"></div><div class="calendar xxsmall"></div></div>
	<div class="top right"><div class="windsun small dimmed"></div><div class="temp"></div><div class="forecast small dimmed"></div></div>
	<div class="center-ver center-hor"><!-- <div class="dishwasher light">Vaatwasser is klaar!</div> --></div>
	<div class="lower-third center-hor"><div class="compliment light"></div></div>
	<div class="bottom center-hor"><div class="news medium"></div></div>

</div>

<script src="js/jquery.js"></script>
<script src="js/jquery.feedToJSON.js"></script>
<script src="js/ical_parser.js"></script>
<script src="js/moment-with-locales.min.js"></script>
<script src="js/config.js"></script>
<script src="js/rrule.js"></script>
<script src="js/version/version.js" type="text/javascript"></script>
<script src="js/calendar/calendar.js" type="text/javascript"></script>
<script src="js/compliments/compliments.js" type="text/javascript"></script>
<script src="js/weather/weather.js" type="text/javascript"></script>
<script src="js/time/time.js" type="text/javascript"></script>
<script src="js/news/news.js" type="text/javascript"></script>
<script src="js/main.js?nocache=<?php echo md5(microtime()) ?>"></script>
<!-- <script src="js/socket.io.min.js"></script> -->
<script src="js/annyang.js"></script>

<script>
var audio = document.getElementById('audio');
var audio2 = document.getElementById('audio2');

if (annyang) {

  var commands = {
    'info': function() { audio.play(); console.debug("Lecture france Info");}, //lance la lecture france info
		'Radio': function() { audio2.play(); console.debug("Lecture BFM");}, //lance la lecture BFM
		'Stop' : function() { audio.pause(); audio2.pause(); console.debug("Arret lecture");} // coupe la diffusion des radios
  };

  // Add our commands to annyang
  annyang.addCommands(commands);

  // Start listening.
  annyang.start({continuous:true});
}
</script>
</body>
</html>