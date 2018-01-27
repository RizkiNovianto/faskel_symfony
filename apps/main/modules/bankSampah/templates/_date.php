<?php 

$tggl = $bank_sampah->getTanggalpendirian();
$bln = $bank_sampah->getBulanpendirian();
$thn = $bank_sampah->getTahunpendirian();

$blnText = '';
if($bln == 1) $blnText = 'Januari';
else if ($bln == 2) $blnText = 'Februari';
else if ($bln == 3) $blnText = 'Maret';
else if ($bln == 4) $blnText = 'April';
else if ($bln == 5) $blnText = 'Mei';
else if ($bln == 6) $blnText = 'Juni';
else if ($bln == 7) $blnText = 'Juli';
else if ($bln == 8) $blnText = 'Agustus';
else if ($bln == 9) $blnText = 'September';
else if ($bln == 10) $blnText = 'Oktober';
else if ($bln == 11) $blnText = 'November';
else if ($bln == 12) $blnText = 'Desember';

if ($tggl < 1) $tggl ='';
if ($thn < 1) $thn = '';
echo $tggl.' '.$blnText.' '.$thn; ?>
