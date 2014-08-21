<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title><?php print $head_title ?></title>
<?php print $head ?>
<?php print $styles ?>
<?php print $scripts ?>
<!--[if lt IE 7]>
  <?php print phptemplate_get_ie_styles(); ?>
<![endif]-->
<script type="text/javascript"><?php /* Needed to avoid Flash of Unstyle Content in IE */ ?> </script>
</head>
<body>
	<div id="canvas">
		<div id="head">
			<div id="nameplate"><a href="<?php print $front_page ?>"><?php print $site_name ?></a></div>
			<?php print $header ?>
			<div class="clear"></div>
		</div>
		<div id="nav">
			<?php if (isset($primary_links)) { ?><?php print theme('links', $primary_links, array('class' => 'links', 'id' => 'navlist')) ?><?php } ?>
			<div class="clear"></div>
		</div>
		<div id="content">
			<div class="tabs"><?php print $tabs ?></div>
	        <?php if ($show_messages) { print $messages; } ?>
			<?php print $content; ?>
		</div>
	</div>
	<div id="footer">
		<div id="sect"><?php print $footer_message ?></div>
		<div id="sect_opts">
			<?php if (isset($secondary_links)) { ?><?php print theme('links', $secondary_links, array('class' => 'links', 'id' => 'subnavlist')) ?><?php } ?>
		</div>
		<div class="clear"></div>
	</div>
	<?php print $closure ?>
</body>
</html>