<?php
$product = ProductTable::getInstance()->find('VPNMONTHLY');
if (!$product) return;
?>
<div class="homepage-widget unlimited">
  <h2>Unlimited VPN</h2>
  <div class="clr"></div>
  <ul class="green-tick">
    <li>Instant activation</li>
    <li>No software required</li>
    <li>100MBit connection *</li>
    <li>Unlimited transfer</li>
    <li>Access to all <a title="Unmetered VPN servers list" href="<?php echo url_for('@servers_unlimited')?>">servers</a></li>
    <li>128-bit <a href="http://wikipedia.org/wiki/Microsoft_Point-to-Point_Encryption" title="Wikipedia article explaining MPPE" target="_blank">encryption</a></li>
  </ul>
  <div class="footnote">* shared. We do not oversell.</div>
  <div class="offer-tag">
  	<span class="price">$<?php echo (int)$product->getPrice()?></span>
    <span class="sign-up"><a title="Proceed to checkout" href="<?php echo url_for('@checkout_unlimited')?>">Sign up</a></span>
  </div>
</div>