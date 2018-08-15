// Enable pusher logging - don't include this in production
Pusher.logToConsole = true;

var pusher = new Pusher('03e9b64596e7575fdb21', {
	cluster: 'ap1',
	encrypted: true
});

var channel = pusher.subscribe('penjualan');
channel.bind('my-event', function(data) {
	alert(JSON.stringify(data));
});