<link href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.3/fullcalendar.min.css" rel="stylesheet">
<link href="/css/fullcalendar.css" rel="stylesheet">
<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.4/moment.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.3/fullcalendar.min.js"></script>
<script type="text/javascript">
$(function() {
	$('#calendar').fullCalendar({
		firstDay : 1,
		dayNames: ['日曜日','月曜日','火曜日','水曜日','木曜日','金曜日','土曜日'],
		dayNamesShort: ['日','月','火','水','木','金','土'],
		titleFormat: {
			month: 'YYYY年 M月',
		},
		buttonText: {
			today: '今日'
		},
		events: '/data/events.json',
		eventClick: function(event) {
			if (event.url) {
				window.open(event.url);
				return false;
			}
		}
	});
});
</script>
