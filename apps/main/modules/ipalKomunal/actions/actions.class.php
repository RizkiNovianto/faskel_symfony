<?php

/**
 * ipalKomunal actions.
 *
 * @package    faskel_symfony
 * @subpackage ipalKomunal
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2288 2006-10-02 15:22:13Z fabien $
 */
class ipalKomunalActions extends autoipalKomunalActions
{
   public function executeExcelGenerate()
  {      
    $this->processSort();

    $this->processFilters();

    $this->filters = $this->getUser()->getAttributeHolder()->getAll('sf_admin/ipal_komunal/filters');

    $c = new Criteria();
    $this->addSortCriteria($c);
    $this->addFiltersCriteria($c);
    
    $bs = IpalKomunalPeer::doSelect($c);
    
/*---------------------------------------*/    
    $filename = "website_data_" . date('Ymd') . ".xls";

    header("Content-Disposition: attachment; filename=\"$filename\"");
    header("Content-Type: application/vnd.ms-excel");
    
    $arrayRow = array();
    
    $counter = 1;
    $blnText ='';
    
    foreach ($bs as $baris)
    {
        if($baris->getBulanPembangunan() == 1) $blnText = 'Januari';
        else if ($baris->getBulanPembangunan() == 2) $blnText = 'Februari';
        else if ($baris->getBulanPembangunan() == 3) $blnText = 'Maret';
        else if ($baris->getBulanPembangunan() == 4) $blnText = 'April';
        else if ($baris->getBulanPembangunan() == 5) $blnText = 'Mei';
        else if ($baris->getBulanPembangunan() == 6) $blnText = 'Juni';
        else if ($baris->getBulanPembangunan() == 7) $blnText = 'Juli';
        else if ($baris->getBulanPembangunan() == 8) $blnText = 'Agustus';
        else if ($baris->getBulanPembangunan() == 9) $blnText = 'September';
        else if ($baris->getBulanPembangunan() == 10) $blnText = 'Oktober';
        else if ($baris->getBulanPembangunan() == 11) $blnText = 'November';
        else if ($baris->getBulanPembangunan() == 12) $blnText = 'Desember';
        
        $tglText = $baris->getTanggalPembangunan();
        if ($tglText < 1) $tglText = '';
        
        $thnText = $baris->getTahunPembangunan();
        if ($thnText < 1) $thnText = '';
                
        $wilayahPart = explode(' - ', $baris->getWilayah());

        array_push($arrayRow, array(
            'No.' => $counter, 
            'Wilayah' => $wilayahPart[0],
            'Kecamatan' => $wilayahPart[1],
            'Kelurahan' => $wilayahPart[2],
            'Nama' => $baris->getNama(), 
            'Alamat' => $baris->getAlamat(),
            'Dasar Pembangunan' => $baris->getDasarPembangunan(),
            'Tanggal Pembangunan' => $tglText.' '.$blnText.' '.$thnText,
            'Pengelola' => $baris->getPengelola(), 
            'Kondisi' => $baris->getKondisi())
                );
        $counter++;
    }
    
    $this->outputArray = $arrayRow;
    
    $flag = false;
    foreach($arrayRow as $row) {
      if(!$flag) {
        // display field/column names as first row
        echo implode("\t", array_keys($row)) . "\r\n";
        $flag = true;
      }
      echo implode("\t", array_values($row)) . "\r\n";
    }
  exit;
    
/*---------------------------------------*/    
    
  }


}
