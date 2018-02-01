<?php echo link_to(image_tag('/sf/sf_admin/images/edit_icon.png', array('alt' => __('edit'), 'title' => __('Ubah Data'))), 'pengguna/edit?id='.$pengguna->getId()) ?>
<?php echo link_to(image_tag('/sf/sf_admin/images/delete_icon.png', array('alt' => __('delete'), 'title' => __('Hapus Data'))), 'pengguna/delete?id='.$pengguna->getId(), array (
  'post' => true,
  'confirm' => __('Hapus Data Ini ?\n('.$pengguna->getNama().' - '.$pengguna->getWilayah().')'),
)) ?>
