<?php
// auto-generated by sfPropelAdmin
// date: 2014/11/12 08:43:50
?>
<?php use_helper('Object', 'Validation', 'ObjectAdmin', 'I18N', 'Date') ?>

<?php use_stylesheet('/sf/sf_admin/css/main') ?>

<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Wilayah
                            <small>Tambah / Ubah</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-home"></i>  <a href="index.html">Home</a>
                            </li>
                            <li>
                                <a href="/faskel_symfony/web/main_dev.php/wilayah">Wilayah</a>
                            </li>
                            <li class="active">
                                Tambah / Ubah
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                
            </div>
            <!-- /.container-fluid -->



	<div id="sf_admin_container">

	<h1><?php echo __('Form Penambahan/Pengubahan Data', 
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
    
</div>
            
</div>