<?php
$menu = new ioMenu();
$menu->addChild('Customers', '@customer');
$menu->addChild('Pages', '@page');

echo $menu;