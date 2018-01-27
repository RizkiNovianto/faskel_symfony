<?php

/**
 * kader actions.
 *
 * @package    faskel_symfony
 * @subpackage kader
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2288 2006-10-02 15:22:13Z fabien $
 */
class kaderActions extends autokaderActions
{
   public function executeExcelGenerate()
  {      
    $this->processSort();

    $this->processFilters();

    $this->filters = $this->getUser()->getAttributeHolder()->getAll('sf_admin/kader/filters');

    $c = new Criteria();
    $this->addSortCriteria($c);
    $this->addFiltersCriteria($c);
    
    $bs = KaderPeer::doSelect($c);
    
/*---------------------------------------*/    
    $filename = "website_data_" . date('Ymd') . ".xls";

    header("Content-Disposition: attachment; filename=\"$filename\"");
    header("Content-Type: application/vnd.ms-excel");
    
    $arrayRow = array();
    
    $counter = 1;
    $blnText ='';
    
    
    foreach ($bs as $baris)
    {                
        $wilayahPart = explode(' - ', $baris->getWilayah());

        array_push($arrayRow, array(
            'No.' => $counter, 
            'Wilayah' => $wilayahPart[0],
            'Kecamatan' => $wilayahPart[1],
            'Kelurahan' => $wilayahPart[2],
            'Nama' => $baris->getNama(), 
            'Alamat' => $baris->getAlamat(),
            'Jenis Kader' => $baris->getJenisKader(),
            'RT' => $baris->getRT(),            
            'RW' => $baris->getRW(), 
            'No. Telp' => $telp)
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
