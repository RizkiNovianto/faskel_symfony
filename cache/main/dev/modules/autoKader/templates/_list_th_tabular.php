<?php
// auto-generated by sfPropelAdmin
// date: 2018/01/23 09:48:10
?>
  <th id="sf_admin_list_th_nama">
          <?php if ($sf_user->getAttribute('sort', null, 'sf_admin/kader/sort') == 'nama'): ?>
      <?php echo link_to(__('Nama'), 'kader/list?sort=nama&type='.($sf_user->getAttribute('type', 'asc', 'sf_admin/kader/sort') == 'asc' ? 'desc' : 'asc')) ?>
      (<?php echo __($sf_user->getAttribute('type', 'asc', 'sf_admin/kader/sort')) ?>)
      <?php else: ?>
      <?php echo link_to(__('Nama'), 'kader/list?sort=nama&type=asc') ?>
      <?php endif; ?>
          </th>
  <th id="sf_admin_list_th_alamat">
          <?php if ($sf_user->getAttribute('sort', null, 'sf_admin/kader/sort') == 'alamat'): ?>
      <?php echo link_to(__('Alamat'), 'kader/list?sort=alamat&type='.($sf_user->getAttribute('type', 'asc', 'sf_admin/kader/sort') == 'asc' ? 'desc' : 'asc')) ?>
      (<?php echo __($sf_user->getAttribute('type', 'asc', 'sf_admin/kader/sort')) ?>)
      <?php else: ?>
      <?php echo link_to(__('Alamat'), 'kader/list?sort=alamat&type=asc') ?>
      <?php endif; ?>
          </th>
  <th id="sf_admin_list_th_jenis_kader">
        <?php echo __('Jenis kader') ?>
          </th>
  <th id="sf_admin_list_th_wilayah">
        <?php echo __('Wilayah') ?>
          </th>
  <th id="sf_admin_list_th_rt">
          <?php if ($sf_user->getAttribute('sort', null, 'sf_admin/kader/sort') == 'rt'): ?>
      <?php echo link_to(__('RT'), 'kader/list?sort=rt&type='.($sf_user->getAttribute('type', 'asc', 'sf_admin/kader/sort') == 'asc' ? 'desc' : 'asc')) ?>
      (<?php echo __($sf_user->getAttribute('type', 'asc', 'sf_admin/kader/sort')) ?>)
      <?php else: ?>
      <?php echo link_to(__('RT'), 'kader/list?sort=rt&type=asc') ?>
      <?php endif; ?>
          </th>
  <th id="sf_admin_list_th_rw">
          <?php if ($sf_user->getAttribute('sort', null, 'sf_admin/kader/sort') == 'rw'): ?>
      <?php echo link_to(__('RW'), 'kader/list?sort=rw&type='.($sf_user->getAttribute('type', 'asc', 'sf_admin/kader/sort') == 'asc' ? 'desc' : 'asc')) ?>
      (<?php echo __($sf_user->getAttribute('type', 'asc', 'sf_admin/kader/sort')) ?>)
      <?php else: ?>
      <?php echo link_to(__('RW'), 'kader/list?sort=rw&type=asc') ?>
      <?php endif; ?>
          </th>
  <th id="sf_admin_list_th_no_telp">
          <?php if ($sf_user->getAttribute('sort', null, 'sf_admin/kader/sort') == 'no_telp'): ?>
      <?php echo link_to(__('No. Telp'), 'kader/list?sort=no_telp&type='.($sf_user->getAttribute('type', 'asc', 'sf_admin/kader/sort') == 'asc' ? 'desc' : 'asc')) ?>
      (<?php echo __($sf_user->getAttribute('type', 'asc', 'sf_admin/kader/sort')) ?>)
      <?php else: ?>
      <?php echo link_to(__('No. Telp'), 'kader/list?sort=no_telp&type=asc') ?>
      <?php endif; ?>
          </th>
  <th id="sf_admin_list_th_opsi">
        <?php echo __('Opsi') ?>
          </th>