<?php
// auto-generated by sfPropelAdmin
// date: 2018/01/22 09:34:59
?>
  <th id="sf_admin_list_th_username">
          <?php if ($sf_user->getAttribute('sort', null, 'sf_admin/sf_guard_user/sort') == 'username'): ?>
      <?php echo link_to(__('Username'), 'sfGuardUser/list?sort=username&type='.($sf_user->getAttribute('type', 'asc', 'sf_admin/sf_guard_user/sort') == 'asc' ? 'desc' : 'asc')) ?>
      (<?php echo __($sf_user->getAttribute('type', 'asc', 'sf_admin/sf_guard_user/sort')) ?>)
      <?php else: ?>
      <?php echo link_to(__('Username'), 'sfGuardUser/list?sort=username&type=asc') ?>
      <?php endif; ?>
          </th>
  <th id="sf_admin_list_th_created_at">
          <?php if ($sf_user->getAttribute('sort', null, 'sf_admin/sf_guard_user/sort') == 'created_at'): ?>
      <?php echo link_to(__('Created at'), 'sfGuardUser/list?sort=created_at&type='.($sf_user->getAttribute('type', 'asc', 'sf_admin/sf_guard_user/sort') == 'asc' ? 'desc' : 'asc')) ?>
      (<?php echo __($sf_user->getAttribute('type', 'asc', 'sf_admin/sf_guard_user/sort')) ?>)
      <?php else: ?>
      <?php echo link_to(__('Created at'), 'sfGuardUser/list?sort=created_at&type=asc') ?>
      <?php endif; ?>
          </th>
  <th id="sf_admin_list_th_last_login">
          <?php if ($sf_user->getAttribute('sort', null, 'sf_admin/sf_guard_user/sort') == 'last_login'): ?>
      <?php echo link_to(__('Login Terakhir'), 'sfGuardUser/list?sort=last_login&type='.($sf_user->getAttribute('type', 'asc', 'sf_admin/sf_guard_user/sort') == 'asc' ? 'desc' : 'asc')) ?>
      (<?php echo __($sf_user->getAttribute('type', 'asc', 'sf_admin/sf_guard_user/sort')) ?>)
      <?php else: ?>
      <?php echo link_to(__('Login Terakhir'), 'sfGuardUser/list?sort=last_login&type=asc') ?>
      <?php endif; ?>
          </th>
  <th id="sf_admin_list_th_opsi">
        <?php echo __('Opsi') ?>
          </th>
