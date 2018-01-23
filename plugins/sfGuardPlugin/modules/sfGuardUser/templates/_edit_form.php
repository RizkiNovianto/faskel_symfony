<?php
// auto-generated by sfPropelAdmin
// date: 2018/01/22 04:14:43
?>
<?php echo form_tag('sfGuardUser/save', array(
  'id'        => 'sf_admin_edit_form',
  'name'      => 'sf_admin_edit_form',
  'multipart' => true,
  'onsubmit'  => 'double_list_submit(); return true;'
)) ?>

<?php echo object_input_hidden_tag($sf_guard_user, 'getId') ?>

<fieldset id="sf_fieldset_none" class="">

<!-------------------------------------------------------------------------------------------------------------->
<div class="form-row">
  <?php echo label_for('sf_guard_user[username]', __($labels['sf_guard_user{username}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('sf_guard_user{username}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('sf_guard_user{username}')): ?>
    <?php echo form_error('sf_guard_user{username}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

      <?php if($sf_user->getGuardUser()->getIsSuperAdmin() == 1) { ?>
  <?php $value = object_input_tag($sf_guard_user, 'getUsername', array (
  'size' => 80,
  'control_name' => 'sf_guard_user[username]'
)); echo $value ? $value : '&nbsp;' ?>
      <?php } 
      else{ ?>
  <?php $value = object_input_tag($sf_guard_user, 'getUsername', array (
  'size' => 80,
  'control_name' => 'sf_guard_user[username]',
  'readonly' => true
)); echo $value ? $value : '&nbsp;' ?>
      <?php };?>
    </div>
</div>
<!-------------------------------------------------------------------------------------------------------------->

<div class="form-row">
  <?php echo label_for('sf_guard_user[password]', __($labels['sf_guard_user{password}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('sf_guard_user{password}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('sf_guard_user{password}')): ?>
    <?php echo form_error('sf_guard_user{password}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = get_partial('password', array('type' => 'edit', 'sf_guard_user' => $sf_guard_user)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

<div class="form-row">
  <?php echo label_for('sf_guard_user[password_bis]', __($labels['sf_guard_user{password_bis}']), '') ?>
  <div class="content<?php if ($sf_request->hasError('sf_guard_user{password_bis}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('sf_guard_user{password_bis}')): ?>
    <?php echo form_error('sf_guard_user{password_bis}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = get_partial('password_bis', array('type' => 'edit', 'sf_guard_user' => $sf_guard_user)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

</fieldset>
<fieldset id="sf_fieldset_information" class="">
<h2><?php echo __('Information') ?></h2>

<div class="form-row">
  <?php echo label_for('sf_guard_user[is_active]', __($labels['sf_guard_user{is_active}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('sf_guard_user{is_active}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('sf_guard_user{is_active}')): ?>
    <?php echo form_error('sf_guard_user{is_active}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

            <?php if($sf_user->getGuardUser()->getIsSuperAdmin() == 1) { ?>
  <?php $value = object_checkbox_tag($sf_guard_user, 'getIsActive', array (
  'control_name' => 'sf_guard_user[is_active]'
)); echo $value ? $value : '&nbsp;' ?>
            <?php }
            else{ ?>
                <?php $value = object_checkbox_tag($sf_guard_user, 'getIsActive', array (
  'control_name' => 'sf_guard_user[is_active]', 'onclick'=>'this.checked=!this.checked'
)); echo $value ? $value : '&nbsp;' ?>
            <?php }
?>
    </div>
</div>

<div class="form-row">
  <?php echo label_for('sf_guard_user[last_login]', __($labels['sf_guard_user{last_login}']), '') ?>
  <div class="content<?php if ($sf_request->hasError('sf_guard_user{last_login}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('sf_guard_user{last_login}')): ?>
    <?php echo form_error('sf_guard_user{last_login}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = ($sf_guard_user->getLastLogin() !== null && $sf_guard_user->getLastLogin() !== '') ? format_date($sf_guard_user->getLastLogin(), "f") : ''; echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

</fieldset>

<?php include_partial('edit_actions', array('sf_guard_user' => $sf_guard_user)) ?>

</form>

<!-------------------------------------------------------------------------------------------------------------->
<?php if($sf_user->getGuardUser()->getIsSuperAdmin() == 1) { ?>
<ul class="sf_admin_actions">
      <li class="float-left"><?php if ($sf_guard_user->getId()): ?>
<?php echo button_to(__('delete'), 'sfGuardUser/delete?id='.$sf_guard_user->getId(), array (
  'post' => true,
  'confirm' => __('Are you sure?'),
  'class' => 'sf_admin_action_delete',
)) ?><?php endif; ?>
</li>
  </ul>
<?php } ?>
<!-------------------------------------------------------------------------------------------------------------->
