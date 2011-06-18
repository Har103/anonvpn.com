<?php
$product = ProductTable::getInstance()->find('VPNMONTHLY');
?>

<div class="homepage-widget vpnmonthly">
  <h2>Monthly VPN service</h2>
  <div class="clr"></div>
  <ul>
    <li>Instant automagic activation</li>
    <li>Unlimited transfer</li>
    <li>Access to all VPN servers</li>
    <li>
      128-bit
      <?php
      echo link_to(
        'MPPE',
        'http://wikipedia.org/wiki/Microsoft_Point-to-Point_Encryption',
        array('title' => 'Wikipedia article about MPPE', 'target' => '_blank'))
      ?>
      encryption
    </li>
    <li>Shared IP</li>
    <li>24/7 support</li>
    <?php /*
    <li>7-day money back guarantee</li>
    */ ?>
  </ul>
  <div class="price">$<?php echo (int)$product->getPrice()?></div>
  <div class="button">
  	<form action='https://www.2checkout.com/checkout/purchase' method='post'>
      <?php if ($sf_context->getConfiguration()->getEnvironment() === 'dev') : ?>
      <input type='hidden' name='demo' value='Y' />
      <?php endif; ?>
  	  <?php /* Merchant ID */ ?>
      <input type='hidden' name='sid' value='1507059' />
      <?php /* 2CO assigned ID */ ?>
      <input type='hidden' name='product_id' value='<?php echo $product->get2coId()?>' />
      <input type='hidden' name='quantity' value='1' />
      <?php /* to remove the Continue Shopping button and lock the quantity fields. */ ?>
      <input type="hidden" name="fixed" value="Y" />
      <input class="button" name='submit' type='submit' value='Purchase' />
  	</form>
	</div>
</div>