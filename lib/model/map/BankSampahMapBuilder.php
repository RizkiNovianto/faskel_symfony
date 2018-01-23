<?php



class BankSampahMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.BankSampahMapBuilder';

	
	private $dbMap;

	
	public function isBuilt()
	{
		return ($this->dbMap !== null);
	}

	
	public function getDatabaseMap()
	{
		return $this->dbMap;
	}

	
	public function doBuild()
	{
		$this->dbMap = Propel::getDatabaseMap('propel');

		$tMap = $this->dbMap->addTable('bank_sampah');
		$tMap->setPhpName('BankSampah');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addForeignKey('ID_WILAYAH', 'IdWilayah', 'int', CreoleTypes::INTEGER, 'wilayah', 'ID', true, null);

		$tMap->addColumn('NAMA', 'Nama', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('ALAMAT', 'Alamat', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('DASAR_PENDIRIAN', 'DasarPendirian', 'string', CreoleTypes::VARCHAR, false, 25);

		$tMap->addColumn('TANGGAL_PENDIRIAN', 'TanggalPendirian', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('BULAN_PENDIRIAN', 'BulanPendirian', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('TAHUN_PENDIRIAN', 'TahunPendirian', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('SK', 'Sk', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('KETUA', 'Ketua', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('JUMLAH_NASABAH', 'JumlahNasabah', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('OMSET', 'Omset', 'int', CreoleTypes::INTEGER, false, null);

	} 
} 