<?php
// auto-generated by sfPropelAdmin
// date: 2018/01/23 09:51:38
?>
<table cellspacing="0" class="sf_admin_list">
<thead>
<tr>
<?php include_partial('list_th_tabular') ?>
</tr>
</thead>
<tfoot>
<tr><th colspan="4">
<div class="float-right">
<?php if ($pager->haveToPaginate()): ?>
  <?php echo link_to(image_tag(sfConfig::get('sf_admin_web_dir').'/images/first.png', array('align' => 'absmiddle', 'alt' => __('First'), 'title' => __('First'))), 'wilayah/list?page=1') ?>
  <?php echo link_to(image_tag(sfConfig::get('sf_admin_web_dir').'/images/previous.png', array('align' => 'absmiddle', 'alt' => __('Previous'), 'title' => __('Previous'))), 'wilayah/list?page='.$pager->getPreviousPage()) ?>

  <?php foreach ($pager->getLinks() as $page): ?>
    <?php echo link_to_unless($page == $pager->getPage(), $page, 'wilayah/list?page='.$page) ?>
  <?php endforeach; ?>

  <?php echo link_to(image_tag(sfConfig::get('sf_admin_web_dir').'/images/next.png', array('align' => 'absmiddle', 'alt' => __('Next'), 'title' => __('Next'))), 'wilayah/list?page='.$pager->getNextPage()) ?>
  <?php echo link_to(image_tag(sfConfig::get('sf_admin_web_dir').'/images/last.png', array('align' => 'absmiddle', 'alt' => __('Last'), 'title' => __('Last'))), 'wilayah/list?page='.$pager->getLastPage()) ?>
<?php endif; ?>
</div>
<?php echo format_number_choice('[0] no result|[1] 1 result|(1,+Inf] %1% results', array('%1%' => $pager->getNbResults()), $pager->getNbResults()) ?>
</th></tr>
</tfoot>
<tbody>
<?php $i = 1; foreach ($pager->getResults() as $wilayah): $odd = fmod(++$i, 2) ?>
<tr class="sf_admin_row_<?php echo $odd ?>">
<?php include_partial('list_td_tabular', array('wilayah' => $wilayah)) ?>
<?php include_partial('list_td_actions', array('wilayah' => $wilayah)) ?>
</tr>
<?php endforeach; ?>
</tbody>
</table>
