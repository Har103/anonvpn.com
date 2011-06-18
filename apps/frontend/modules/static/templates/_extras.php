<?php
// just one extra for now
$extras[] = ProductTable::getInstance()->find('VPNIP');
?>

<div class="homepage-widget extras">
  <h2>Extra goodies</h2>
  <div class="clr"></div>
	<table>
  <?php foreach($extras as $product) : ?>
		<tr>
			<td class="left"><?php echo $product->getTitle()?></td>
			<td class="right">$<?php echo (int)$product->getPrice()?></td>
		</tr>
  <?php endforeach;?>
	</table>
</div>
