<?php
// auto-generated by sfPropelAdmin
// date: 2018/01/23 09:51:38
?>
<?php use_helper('Object', 'Validation', 'ObjectAdmin', 'I18N', 'Date') ?>

<?php use_stylesheet('/sf/sf_admin/css/main') ?>

<div id="sf_admin_container">

<h1><?php echo __('edit wilayah', 
array()) ?></h1>

<div id="sf_admin_header">
<?php include_partial('wilayah/edit_header', array('wilayah' => $wilayah)) ?>
</div>

<div id="sf_admin_content">
<?php include_partial('wilayah/edit_messages', array('wilayah' => $wilayah, 'labels' => $labels)) ?>
<?php include_partial('wilayah/edit_form', array('wilayah' => $wilayah, 'labels' => $labels)) ?>
</div>

<div id="sf_admin_footer">
<?php include_partial('wilayah/edit_footer', array('wilayah' => $wilayah)) ?>
</div>

</div>
