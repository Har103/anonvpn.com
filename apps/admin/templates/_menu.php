<?php
$menu = new ioMenu();
$menu->addChild('Hosters',			'@hoster');
$menu->addChild('Servers',			'@server');
$menu->addChild('Customers',    '@customer');
$menu->addChild('Products',  	  '@product');
$menu->addChild('Orders',    		'@order');

echo $menu;