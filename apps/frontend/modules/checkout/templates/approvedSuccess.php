<div class="page checkout-approved">
  <h2>Payment is completed. Welcome!</h2>
  <div class="clr"></div>
  <p>Here is your details:</p>
  <table>
    <tr>
      <td class="left">Hostname</td>
      <td class="right">us.vpn.anonvpn.com</td>
    </tr>
    <tr>
      <td class="left">Login</td>
      <td class="right"><?php echo $customer->getEmail()?></td>
    </tr>
    <tr>
      <td class="left">Password</td>
      <td class="right"><?php echo $customer->getPassword()?></td>
    </tr>
  </table>
  <p>Please note this information to safe place.</p>
</div>