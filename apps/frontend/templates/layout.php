<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>

  <body>
    <div class="main">
      <div class="header">
        <div class="header_resize">
					<?php include_partial('global/logo')?>
					<?php include_partial('global/upperMenu')?>
          <div class="clr"></div>
          <div class="header_img">
          	<?php echo image_tag('main_img.png', array('alt' => 'Dashboard display', 'width' => '271', 'height' => '234'))?>
          	<?php include_component('panel', 'dashboard')?>
						<?php include_partial('global/motd')?>
          	<div class="clr"></div>
          </div>
        </div>
      </div>
      <div class="clr"></div>
      <div class="content">
        <div class="content_resize">
          <div class="mainbar">
						<?php echo $sf_content; ?>
          </div>
          <?php // include_partial('global/sidebar')?>
          <div class="clr"></div>
        </div>
      </div>
      <div class="fbg">
        <div class="fbg_resize">
          <div class="col c1">
          	<?php include_partial('global/weAccept')?>
          </div>
          <div class="col c2">
          	<?php include_partial('global/ourTechnologies')?>
          </div>
          <div class="col c3">
          	<?php include_partial('global/servers')?>
          </div>
          <div class="clr"></div>
        </div>
        <div class="footer">
          <p class="lr">&copy; Copyright <a href="#">MyWebSite</a>.</p>
          <p class="lf">Layout by Cool <a href="http://www.coolwebtemplates.net/">Website Templates</a></p>
          <div class="clr"></div>
        </div>
      </div>
    </div>
  </body>
</html>
