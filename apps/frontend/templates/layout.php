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
          <div class="sidebar">
          <div class="search">
            <form id="form" name="form" method="post" action="">
              <span>
              <input name="q" type="text" class="keywords" id="textfield" maxlength="50" value="Search..." />

              <input name="b" type="image" src="images/search.gif" class="button" />
              </span>
            </form>
          </div>
          <!--/search -->
            <div class="gadget">
              <h2>Sidebar Menu</h2>
              <div class="clr"></div>
              <ul class="sb_menu">
                <li><a href="#">Home</a></li>
                <li><a href="#">TemplateInfo</a></li>
                <li><a href="#">Style Demo</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Archives</a></li>
                <li><a href="http://www.dreamtemplate.com/">Web Templates</a></li>
              </ul>
            </div>
            <div class="gadget">
              <h2><span>Sponsors</span></h2>
              <div class="clr"></div>
              <ul class="ex_menu">
                <li><a href="http://www.dreamtemplate.com" title="Website Templates">DreamTemplate</a><br />
                  Over 6,000+ Premium Web Templates</li>
                <li><a href="http://www.templatesold.com" title="WordPress Themes">TemplateSOLD</a><br />
                  Premium WordPress &amp; Joomla Themes</li>
                <li><a href="http://www.imhosted.com" title="Affordable Hosting">ImHosted.com</a><br />
                  Affordable Web Hosting Provider</li>
                <li><a href="http://www.myvectorstore.com" title="Stock Icons">MyVectorStore</a><br />
                  Royalty Free Stock Icons</li>
                <li><a href="http://www.evrsoft.com" title="Website Builder">Evrsoft</a><br />
                  Website Builder Software &amp; Tools</li>
                <li><a href="http://www.csshub.com/" title="CSS Templates">CSS Hub</a><br />
                  Premium CSS Templates</li>
              </ul>
            </div>
            <div class="gadget">
              <h2>Wise Words</h2>
              <div class="clr"></div>
              <p>   <img src="images/test_1.gif" alt="image" width="19" height="20" /> <em>We can let circumstances rule us, or we can take charge and rule our lives from within </em>.<img src="images/test_2.gif" alt="image" width="19" height="20" /></p>
              <p style="float:right;"><strong>Earl Nightingale</strong></p>
              </div>
                 </div>
          <div class="clr"></div>
        </div>
      </div>
      <div class="fbg">
        <div class="fbg_resize">
          <div class="col c1">
            <h2><span>Image Gallery</span></h2>
            <a href="#"><img src="images/gallery_1.jpg" width="58" height="58" alt="pix" /></a> <a href="#"><img src="images/gallery_2.jpg" width="58" height="58" alt="pix" /></a> <a href="#"><img src="images/gallery_3.jpg" width="58" height="58" alt="pix" /></a> <a href="#"><img src="images/gallery_4.jpg" width="58" height="58" alt="pix" /></a> <a href="#"><img src="images/gallery_5.jpg" width="58" height="58" alt="pix" /></a> <a href="#"><img src="images/gallery_6.jpg" width="58" height="58" alt="pix" /></a> </div>
          <div class="col c2">
            <h2><span>Lorem Ipsum</span></h2>
            <p>Lorem ipsum dolor<br />
              Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum. Cras id urna. <a href="#">Morbi tincidunt, orci ac convallis aliquam</a>, lectus turpis varius lorem, eu posuere nunc justo tempus leo. Donec mattis, purus nec placerat bibendum, dui pede condimentum odio, ac blandit ante orci ut diam.</p>
          </div>
          <div class="col c3">
            <h2><span>Contact</span></h2>
            <p>Nullam quam lorem, tristique non vestibulum nec, consectetur in risus. Aliquam a quam vel leo gravida gravida eu porttitor dui. Nulla pharetra, mauris vitae interdum dignissim, justo nunc suscipit ipsum. <a href="#">mail@example.com</a><br />
              <a href="#">+1 (123) 444-5677</a></p>
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
