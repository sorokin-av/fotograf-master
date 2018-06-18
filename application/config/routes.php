<?php

return [
	// MainController
	'' => [
		'controller' => 'main',
		'action' => 'index',
	],

	'about' => [
		'controller' => 'main',
		'action' => 'about',
	],
	'contact' => [
		'controller' => 'main',
		'action' => 'contact',
	],
	'portret' => [
		'controller' => 'main',
		'action' => 'portret',
	],
	'lovestory' => [
		'controller' => 'main',
		'action' => 'lovestory',
	],
	'pedding' => [
		'controller' => 'main',
		'action' => 'pedding',
	],
	'family' => [
		'controller' => 'main',
		'action' => 'family',
	],
	'events' => [
		'controller' => 'main',
		'action' => 'events',
	],
	'artdress' => [
		'controller' => 'main',
		'action' => 'artdress',
	],
	'car' => [
		'controller' => 'main',
		'action' => 'car',
	],
	'wedding' => [
		'controller' => 'main',
		'action' => 'wedding',
	],
	// AdminController
	'admin/login' => [
		'controller' => 'admin',
		'action' => 'login',
	],
	'admin/logout' => [
		'controller' => 'admin',
		'action' => 'logout',
	],
	'admin/add' => [
		'controller' => 'admin',
		'action' => 'add',
	],
	'admin/edit/{id:\d+}' => [
		'controller' => 'admin',
		'action' => 'edit',
	],
	'admin/delete/{id:\d+}' => [
		'controller' => 'admin',
		'action' => 'delete',
	],
	'admin/posts/{page:\d+}' => [
		'controller' => 'admin',
		'action' => 'posts',
	],
	'admin/posts' => [
		'controller' => 'admin',
		'action' => 'posts',
	],

	//PortfolioController
	
	/*'portret' => [
		'controller' => 'portfolios',
		'action' => 'portret',
	],
	'lovestory' => [
		'controller' => 'portfolios',
		'action' => 'lovestory',
	],
	'pedding' => [
		'controller' => 'portfolios',
		'action' => 'pedding',
	],
	'family' => [
		'controller' => 'portfolios',
		'action' => 'family',
	],
	'events' => [
		'controller' => 'portfolios',
		'action' => 'events',
	],
	'artdress' => [
		'controller' => 'portfolios',
		'action' => 'artdress',
	],
	'car' => [
		'controller' => 'portfolios',
		'action' => 'car',
	],
	'wedding' => [
		'controller' => 'portfolios',
		'action' => 'wedding',
	],*/
];