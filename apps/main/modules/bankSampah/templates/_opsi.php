<?php echo link_to(image_tag('/sf/sf_admin/images/edit_icon.png', array('alt' => __('edit'), 'title' => __('Ubah Data'))), 'bankSampah/edit?id='.$bank_sampah->getId()) ?>
<?php echo link_to(image_tag('/sf/sf_admin/images/delete_icon.png', array('alt' => __('delete'), 'title' => __('Hapus Data'))), 'bankSampah/delete?id='.$bank_sampah->getId(), array (
  'post' => true,
  'confirm' => __('Hapus Data Ini ?\n('.$bank_sampah->getNama().' - '.$bank_sampah->getWilayah().')'),
)) ?>
