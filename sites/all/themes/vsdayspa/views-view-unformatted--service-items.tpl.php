<?php
// $Id: views-view-unformatted.tpl.php,v 1.6 2008/10/01 20:52:11 merlinofchaos Exp $
/**
 * @file views-view-unformatted.tpl.php
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<style type="text/css">
.service-item-header {
  border-bottom: none;
}
</style>

<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>

<?php global $services; ?>

<?php $count = 0; ?>
<div class="block">
<?php foreach($services as $service => $rows): ?>
<?php if ($count % 2 == 0): ?>
   <div style="width:100%;float:left;height:10px;"></div>
<?php endif; ?>
  <div class="sub_block">
	<a name="<?php print strip_tags($service); ?>"></a>
    <h2 class="r1"><?php print strip_tags($service); ?></h2>
    <table border=1" class="d2">
    <?php foreach ($rows as $id => $row): ?>
      <div class="<?php print $classes[$id]; ?>">
        <?php print $row; ?>
      </div>
    <?php endforeach; ?>
    </table>
  </div>

  <?php $count++; ?>
<?php endforeach; ?>
<div class="clear"></div>
</div>