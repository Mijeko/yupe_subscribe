<?php
return [
	'module' => [
		'class' => 'application.modules.subscribes.SubscribesModule',
	],
	'import' => [
		'application.modules.subscribes.models.entity.*',
	],
	'rules' => [
		'/subscribe/create' => 'subscribes/subscribe/create',
	],
];