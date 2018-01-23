<div style="text-align: center">
<?php echo link_to(image_tag('/sf/sf_admin/images/edit_icon.png', array('alt' => __('edit'), 'title' => __('Ubah Data'))), 'kader/edit?id='.$kader->getId()) ?>
<?php echo link_to(image_tag('/sf/sf_admin/images/delete_icon.png', array('alt' => __('delete'), 'title' => __('Hapus Data'))), 'kader/delete?id='.$kader->getId(), array (
  'post' => true,
  'confirm' => __('Hapus Data Ini ?\n('.$kader->getNama().' - '.$kader->getWilayah().')'),
)) ?>

</div>
