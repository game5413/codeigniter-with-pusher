<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Pusher Test</title>

	<!--
	This example view uses the Pusher Javascript SDK to subscribe
	on new events. https://github.com/pusher/pusher-js
	-->

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" type="text/javascript"></script>
	<script src="https://js.pusher.com/4.2/pusher.min.js" type="text/javascript"></script>
</head>
<body>

	<script type="text/javascript">
		// Enable pusher logging - don't include this in production
		Pusher.log = function(message) {
			if (window.console && window.console.log) {
				window.console.log(message);
			}
		};

		var pusher = new Pusher('6ace5daedebbde288aaf', {
	      cluster: 'us2',
	      encrypted: true
	    });

	    var channel = pusher.subscribe('aw');
	    channel.bind('ew', function(data) {
	      alert('An event was triggered with message: ' + data);
	    });
	</script>

	<p id="event">Waiting on event...</p>
	<p>Go to <strong><a href="<?php echo site_url('welcome/trigger_event'); ?>" target="_blank">/example/trigger_event</a></strong> in a new tab to trigger event.</p>

</body>
</html>
