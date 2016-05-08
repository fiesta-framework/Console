<!DOCTYPE html>
<html>
<head>
	
	<title></title>
		{Pikia\Kernel\Resources\Libs::js("app/library/jquery-1.11.3.min.js",false)}
		{Console_Controller::css('style')}
		{Console_Controller::js('main')}
</head>
<body>
		{View::import("console","input")}
</body>
<script type="text/javascript">
		var ajax_route = "{$ajax}";
	</script>
</html>