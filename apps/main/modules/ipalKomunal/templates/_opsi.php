<?php echo link_to(image_tag('/sf/sf_admin/images/edit_icon.png', array('alt' => __('edit'), 'title' => __('Ubah Data'))), 'ipalKomunal/edit?id='.$ipal_komunal->getId()) ?>
<?php echo link_to(image_tag('/sf/sf_admin/images/delete_icon.png', array('alt' => __('delete'), 'title' => __('Hapus Data'))), 'ipalKomunal/delete?id='.$ipal_komunal->getId(), array (
  'post' => true,
  'confirm' => __('Hapus Data Ini ?\n('.$ipal_komunal->getNama().' - '.$ipal_komunal->getWilayah().')'),
)) ?>
