<?php
// auto-generated by sfPropelAdmin
// date: 2018/01/23 05:12:19
?>
<td colspan="10">
    <?php echo $bank_sampah->getWilayah() ?>
     - 
    <?php echo $bank_sampah->getNama() ?>
     - 
    <?php echo $bank_sampah->getAlamat() ?>
     - 
    <?php echo $bank_sampah->getDasarPendirian() ?>
     - 
    <?php echo get_partial('date', array('type' => 'list', 'bank_sampah' => $bank_sampah)) ?>
     - 
    <?php echo $bank_sampah->getSk() ?>
     - 
    <?php echo $bank_sampah->getKetua() ?>
     - 
    <?php echo $bank_sampah->getJumlahNasabah() ?>
     - 
    <?php echo get_partial('omset', array('type' => 'list', 'bank_sampah' => $bank_sampah)) ?>
     - 
    <?php echo get_partial('opsi', array('type' => 'list', 'bank_sampah' => $bank_sampah)) ?>
     - 
</td>