<?php
// auto-generated by sfPropelAdmin
// date: 2018/02/01 01:49:44
?>
<?php use_helper('Object', 'Validation', 'ObjectAdmin', 'I18N', 'Date') ?>

<?php use_stylesheet('/sf/sf_admin/css/main') ?>

<div id="sf_admin_container">

<h1><?php echo __('Edit "%%username%%" user', 
array('%%username%%' => $sf_guard_user->getUsername())) ?></h1>

<div id="sf_admin_header">
<?php include_partial('sfGuardUser/edit_header', array('sf_guard_user' => $sf_guard_user)) ?>
</div>

<div id="sf_admin_content">
<?php include_partial('sfGuardUser/edit_messages', array('sf_guard_user' => $sf_guard_user, 'labels' => $labels)) ?>
<?php include_partial('sfGuardUser/edit_form', array('sf_guard_user' => $sf_guard_user, 'labels' => $labels)) ?>
</div>

<div id="sf_admin_footer">
<?php include_partial('sfGuardUser/edit_footer', array('sf_guard_user' => $sf_guard_user)) ?>
</div>

</div>
