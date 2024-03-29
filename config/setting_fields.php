<?php
return [
	'app' => [
		'title' => 'General',
		'desc' => 'All the general settings for application.',
		'icon' => 'fa fa-sunglasses',

		'elements' => [
			[
				'type' => 'text', // input fields type
				'data' => 'string', // data type, string, int, boolean
				'name' => 'app_name', // unique name for field
				'label' => 'App Name', // you know what label it is
				'rules' => 'required|min:2|max:50', // validation rule of laravel
				'class' => 'w-auto px-2', // any class for input
				'value' => 'CoolApp', // default value if you want
			],
		],
	],
	'email' => [
		'title' => 'Email',
		'desc' => 'Email settings for app',
		'icon' => 'fa fa-envelope',
		'elements' => [
			[
				'type' => 'email',
				'data' => 'string', // data type, string, int, boolean
				'name' => 'email', // unique name for field
				'label' => 'Email Address', // you know what label it is
				'rules' => 'required|min:2|max:50|email', // validation rule of laravel
				'class' => 'w-auto px-2', // any class for input
				'value' => 'admin@admin.com', // default value if you want
			],
		],
	],
];