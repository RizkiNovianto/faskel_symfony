<?php
// auto-generated by sfPropelAdmin
// date: 2018/01/24 08:21:14
?>
  <th id="sf_admin_list_th_wilayah">
        <?php echo __('Wilayah') ?>
          </th>
  <th id="sf_admin_list_th_nama">
          <?php if ($sf_user->getAttribute('sort', null, 'sf_admin/ipal_komunal/sort') == 'nama'): ?>
      <?php echo link_to(__('Nama'), 'ipalKomunal/list?sort=nama&type='.($sf_user->getAttribute('type', 'asc', 'sf_admin/ipal_komunal/sort') == 'asc' ? 'desc' : 'asc')) ?>
      (<?php echo __($sf_user->getAttribute('type', 'asc', 'sf_admin/ipal_komunal/sort')) ?>)
      <?php else: ?>
      <?php echo link_to(__('Nama'), 'ipalKomunal/list?sort=nama&type=asc') ?>
      <?php endif; ?>
          </th>
  <th id="sf_admin_list_th_alamat">
          <?php if ($sf_user->getAttribute('sort', null, 'sf_admin/ipal_komunal/sort') == 'alamat'): ?>
      <?php echo link_to(__('Alamat'), 'ipalKomunal/list?sort=alamat&type='.($sf_user->getAttribute('type', 'asc', 'sf_admin/ipal_komunal/sort') == 'asc' ? 'desc' : 'asc')) ?>
      (<?php echo __($sf_user->getAttribute('type', 'asc', 'sf_admin/ipal_komunal/sort')) ?>)
      <?php else: ?>
      <?php echo link_to(__('Alamat'), 'ipalKomunal/list?sort=alamat&type=asc') ?>
      <?php endif; ?>
          </th>
  <th id="sf_admin_list_th_dasar_pembangunan">
          <?php if ($sf_user->getAttribute('sort', null, 'sf_admin/ipal_komunal/sort') == 'dasar_pembangunan'): ?>
      <?php echo link_to(__('Dasar pembangunan'), 'ipalKomunal/list?sort=dasar_pembangunan&type='.($sf_user->getAttribute('type', 'asc', 'sf_admin/ipal_komunal/sort') == 'asc' ? 'desc' : 'asc')) ?>
      (<?php echo __($sf_user->getAttribute('type', 'asc', 'sf_admin/ipal_komunal/sort')) ?>)
      <?php else: ?>
      <?php echo link_to(__('Dasar pembangunan'), 'ipalKomunal/list?sort=dasar_pembangunan&type=asc') ?>
      <?php endif; ?>
          </th>
  <th id="sf_admin_list_th_date">
        <?php echo __('Tanggal') ?>
          </th>
  <th id="sf_admin_list_th_pengelola">
          <?php if ($sf_user->getAttribute('sort', null, 'sf_admin/ipal_komunal/sort') == 'pengelola'): ?>
      <?php echo link_to(__('Pengelola'), 'ipalKomunal/list?sort=pengelola&type='.($sf_user->getAttribute('type', 'asc', 'sf_admin/ipal_komunal/sort') == 'asc' ? 'desc' : 'asc')) ?>
      (<?php echo __($sf_user->getAttribute('type', 'asc', 'sf_admin/ipal_komunal/sort')) ?>)
      <?php else: ?>
      <?php echo link_to(__('Pengelola'), 'ipalKomunal/list?sort=pengelola&type=asc') ?>
      <?php endif; ?>
          </th>
  <th id="sf_admin_list_th_kondisi">
          <?php if ($sf_user->getAttribute('sort', null, 'sf_admin/ipal_komunal/sort') == 'kondisi'): ?>
      <?php echo link_to(__('Kondisi'), 'ipalKomunal/list?sort=kondisi&type='.($sf_user->getAttribute('type', 'asc', 'sf_admin/ipal_komunal/sort') == 'asc' ? 'desc' : 'asc')) ?>
      (<?php echo __($sf_user->getAttribute('type', 'asc', 'sf_admin/ipal_komunal/sort')) ?>)
      <?php else: ?>
      <?php echo link_to(__('Kondisi'), 'ipalKomunal/list?sort=kondisi&type=asc') ?>
      <?php endif; ?>
          </th>
  <th id="sf_admin_list_th_opsi">
        <?php echo __('Opsi') ?>
          </th>
