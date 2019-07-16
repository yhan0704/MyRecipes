<!DOCTYPE html>
<html lang="EN"><head>
	<title>Creating your own recipes</title>
	<link rel="stylesheet" type="text/css" href="tips_tricks.css" title="style" />
</head>
<h1> Thank you for creating your own recipes! </h1>
<body>
<?php
	#connect to mysql database
	$db = mysqli_connect("127.0.0.1", "root", "111111");
		$sql = mysqli_select_db($db, "guest1");
	if (mysqli_connect_errno())
		exit("Error - could not connect to MySQL");

?>



<?php
	$constructed_query1 = mysqli_query($db, "SELECT * FROM my_recipes");
	
	$num_rows = mysqli_num_rows($constructed_query1);
	//$num_fields = mysqli_num_fields($constructed_query1);
?>

<?php
	for($row_num = 1; $row_num <= $num_rows; $row_num++){
	echo '<div class="div2">';
	$row_array = mysqli_fetch_array($constructed_query1);
	print("$row_array[food_name] <br />
		  $row_array[description]<br />
		  $row_array[steps] <br />");
	echo '</div>';
	}
?>

<p>
<a href="my_recipes.html"> Enter another post</a> <br />
</p>
<!-- Code injected by live-server -->
<script type="text/javascript">
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script></body>
</html>