<div class="page checkout-approved">
  <h2>Something went wrong.</h2>
  <p>There is a problem<?php if (count($errors) > 1) echo 's'?> processing your request:</p>
  <ul>
  <?php foreach ($errors as $error) : ?>
    <li><?php echo $error?></li>
  <?php endforeach; ?>
  </ul>
  <p><a href="mailto:support@anonvpn.com">Contact us</a> for help.</p>
</div>