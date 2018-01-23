<?php echo link_to(image_tag('/sf/sf_admin/images/edit_icon.png', array('alt' => __('edit'), 'title' => __('Ubah Data'))), 'wilayah/edit?id='.$wilayah->getId()) ?>
<?php echo link_to(image_tag('/sf/sf_admin/images/delete_icon.png', array('alt' => __('delete'), 'title' => __('Hapus Data'))), 'wilayah/delete?id='.$wilayah->getId(), array (
  'post' => true,
  'confirm' => __('Hapus Data Ini ?\n('.$wilayah->getWilayah().' - '.$wilayah->getKecamatan().' - '.$wilayah->getKelurahan().')'),
)) ?>
