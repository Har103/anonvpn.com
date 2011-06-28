<?php
$menu = new ioMenu();
$menu->addChild('Hosters',			'@hoster');
$menu->addChild('Servers',			'@server');
$menu->addChild('Customers',		'@customer');
$menu->addChild('Orders',    		'@order');
$menu->addChild('Pages',				'@page');

echo $menu;