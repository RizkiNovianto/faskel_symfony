<?php
// auto-generated by sfPropelAdmin
// date: 2018/01/22 10:26:07
?>
  <th id="sf_admin_list_th_wilayah">
        <?php echo __('Wilayah') ?>
          </th>
  <th id="sf_admin_list_th_nama">
          <?php if ($sf_user->getAttribute('sort', null, 'sf_admin/bank_sampah/sort') == 'nama'): ?>
      <?php echo link_to(__('Nama'), 'bankSampah/list?sort=nama&type='.($sf_user->getAttribute('type', 'asc', 'sf_admin/bank_sampah/sort') == 'asc' ? 'desc' : 'asc')) ?>
      (<?php echo __($sf_user->getAttribute('type', 'asc', 'sf_admin/bank_sampah/sort')) ?>)
      <?php else: ?>
      <?php echo link_to(__('Nama'), 'bankSampah/list?sort=nama&type=asc') ?>
      <?php endif; ?>
          </th>
  <th id="sf_admin_list_th_alamat">
          <?php if ($sf_user->getAttribute('sort', null, 'sf_admin/bank_sampah/sort') == 'alamat'): ?>
      <?php echo link_to(__('Alamat'), 'bankSampah/list?sort=alamat&type='.($sf_user->getAttribute('type', 'asc', 'sf_admin/bank_sampah/sort') == 'asc' ? 'desc' : 'asc')) ?>
      (<?php echo __($sf_user->getAttribute('type', 'asc', 'sf_admin/bank_sampah/sort')) ?>)
      <?php else: ?>
      <?php echo link_to(__('Alamat'), 'bankSampah/list?sort=alamat&type=asc') ?>
      <?php endif; ?>
          </th>
  <th id="sf_admin_list_th_dasar_pendirian">
          <?php if ($sf_user->getAttribute('sort', null, 'sf_admin/bank_sampah/sort') == 'dasar_pendirian'): ?>
      <?php echo link_to(__('Dasar pendirian'), 'bankSampah/list?sort=dasar_pendirian&type='.($sf_user->getAttribute('type', 'asc', 'sf_admin/bank_sampah/sort') == 'asc' ? 'desc' : 'asc')) ?>
      (<?php echo __($sf_user->getAttribute('type', 'asc', 'sf_admin/bank_sampah/sort')) ?>)
      <?php else: ?>
      <?php echo link_to(__('Dasar pendirian'), 'bankSampah/list?sort=dasar_pendirian&type=asc') ?>
      <?php endif; ?>
          </th>
  <th id="sf_admin_list_th_date">
        <?php echo __('Tanggal Pendirian') ?>
          </th>
  <th id="sf_admin_list_th_sk">
          <?php if ($sf_user->getAttribute('sort', null, 'sf_admin/bank_sampah/sort') == 'sk'): ?>
      <?php echo link_to(__('Sk'), 'bankSampah/list?sort=sk&type='.($sf_user->getAttribute('type', 'asc', 'sf_admin/bank_sampah/sort') == 'asc' ? 'desc' : 'asc')) ?>
      (<?php echo __($sf_user->getAttribute('type', 'asc', 'sf_admin/bank_sampah/sort')) ?>)
      <?php else: ?>
      <?php echo link_to(__('Sk'), 'bankSampah/list?sort=sk&type=asc') ?>
      <?php endif; ?>
          </th>
  <th id="sf_admin_list_th_ketua">
          <?php if ($sf_user->getAttribute('sort', null, 'sf_admin/bank_sampah/sort') == 'ketua'): ?>
      <?php echo link_to(__('Ketua'), 'bankSampah/list?sort=ketua&type='.($sf_user->getAttribute('type', 'asc', 'sf_admin/bank_sampah/sort') == 'asc' ? 'desc' : 'asc')) ?>
      (<?php echo __($sf_user->getAttribute('type', 'asc', 'sf_admin/bank_sampah/sort')) ?>)
      <?php else: ?>
      <?php echo link_to(__('Ketua'), 'bankSampah/list?sort=ketua&type=asc') ?>
      <?php endif; ?>
          </th>
  <th id="sf_admin_list_th_jumlah_nasabah">
          <?php if ($sf_user->getAttribute('sort', null, 'sf_admin/bank_sampah/sort') == 'jumlah_nasabah'): ?>
      <?php echo link_to(__('Jumlah nasabah'), 'bankSampah/list?sort=jumlah_nasabah&type='.($sf_user->getAttribute('type', 'asc', 'sf_admin/bank_sampah/sort') == 'asc' ? 'desc' : 'asc')) ?>
      (<?php echo __($sf_user->getAttribute('type', 'asc', 'sf_admin/bank_sampah/sort')) ?>)
      <?php else: ?>
      <?php echo link_to(__('Jumlah nasabah'), 'bankSampah/list?sort=jumlah_nasabah&type=asc') ?>
      <?php endif; ?>
          </th>
  <th id="sf_admin_list_th_omset">
          <?php if ($sf_user->getAttribute('sort', null, 'sf_admin/bank_sampah/sort') == 'omset'): ?>
      <?php echo link_to(__('Omset'), 'bankSampah/list?sort=omset&type='.($sf_user->getAttribute('type', 'asc', 'sf_admin/bank_sampah/sort') == 'asc' ? 'desc' : 'asc')) ?>
      (<?php echo __($sf_user->getAttribute('type', 'asc', 'sf_admin/bank_sampah/sort')) ?>)
      <?php else: ?>
      <?php echo link_to(__('Omset'), 'bankSampah/list?sort=omset&type=asc') ?>
      <?php endif; ?>
          </th>
  <th id="sf_admin_list_th_opsi">
        <?php echo __('Opsi') ?>
          </th>
