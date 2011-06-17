<?php
$menu = new ioMenu(array('class' => null));
$menu->addChild('Home', '@homepage');

// wrap all items with <span> (required by css)
foreach ($menu as $item)
{
  $item->setName('<span>' . $item->getName() . '</span>');
}
?>

<div class="menu_nav">
 	<?php echo $menu?>
  <div class="clr"></div>
</div>
