<?php

global $database;
$addons = new Addons();

if (isset($_POST['username'])) {
	if ($database->update('disqus', $_POST)) {
		$parameters['message'] = 'Disqus settings updated successfully';
	}
}

$widget = getDisqus();
$parameters['disqus'] = $widget;
$parameters['_title'] = 'Disqus Settings';
$parameters['mainSection'] = 'disqus';
$addons->display(DISQUS_CORE_NAME, 'pages/manage.html', $parameters);