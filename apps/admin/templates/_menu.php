<?php
$menu = new ioMenu();
$menu->addChild('Servers',			'@server');
$menu->addChild('Customers',		'@customer');
$menu->addChild('Pages',				'@page');

echo $menu;