<?php
$product = ProductTable::getInstance()->find('VPN50');
if (!$product) return;
?>
<div class="homepage-widget metered">
  <h2>Metered VPN</h2>
  <div class="clr"></div>
  <ul class="green-tick">
    <li>Instant activation</li>
    <li>No software required</li>
    <li>1Gbit connection *</li>
    <li>50Gb of transfer</li>
    <li>Choose a <a title="Metered VPN servers list" href="<?php echo url_for('@servers_metered')?>">server</a></li>
    <li>128-bit <a href="http://wikipedia.org/wiki/Microsoft_Point-to-Point_Encryption" title="Wikipedia article explaining MPPE" target="_blank">encryption</a></li>
  </ul>
  <div class="footnote">* shared. We do not oversell.</div>
  <div class="offer-tag">
  	<span class="price">$<?php echo (int)$product->getPrice()?></span>
    <span class="sign-up"><a title="Checkout metered VPN" href="<?php echo url_for('@checkout_metered')?>">Sign up</a></span>
  </div>
</div>