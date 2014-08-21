<?php
// $Id: views-view-unformatted.tpl.php,v 1.6 2008/10/01 20:52:11 merlinofchaos Exp $
/**
 * @file views-view-unformatted.tpl.php
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<img alt="" src="<?php echo path_to_theme()."/images/services.jpg" ?>"/>
<?php global $services; ?>
<?php $count = 0; ?>
<div class="block_s1"> 
<?php foreach($services as $service => $rows): ?>
  <?php if ($count % 3 == 0): ?>
    <div style="width:100%;float:left;height:10px;"></div>
  <?php endif; ?>
  <div class="sub_block_s1 <?php if ($count % 3 == 2) echo "last" ?>">
    <?php foreach ($rows as $id => $row): ?>

      <div class="<?php print $classes[$id]; ?>">
        <?php print $row; ?>
      </div>
    <?php endforeach; ?>
  </div>
 <?php $count++; ?>
<?php endforeach; ?>
<div class="clear"></div>
</div>