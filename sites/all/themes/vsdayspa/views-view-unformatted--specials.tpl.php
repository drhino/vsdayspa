<?php
// $Id: views-view-unformatted.tpl.php,v 1.6 2008/10/01 20:52:11 merlinofchaos Exp $
/**
 * @file views-view-unformatted.tpl.php
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php global $specials; ?>
<?php $count = 0; ?>
<?php foreach($specials as $special): ?>
  <?php if ($count % 2 == 0): ?>
    <div class="block_sp">
  <?php endif; ?>
  <div class="sub_block_sp <?php if ($count % 2 == 1) echo "end" ?>">
    <div class="<?php print $classes[$id]; ?>">
      <?php print $special; ?>
    </div>
  </div>
  <?php $count++; ?>
  <?php if ($count % 2 == 0): ?>
    <div class="clear"></div>
    </div>
  <?php endif; ?>    
<?php endforeach; ?>
<?php if ($count % 2 != 0): ?>
  <div class="clear"></div>
  </div>
<?php endif; ?>