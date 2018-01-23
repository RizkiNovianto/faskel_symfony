<?php



class IpalKomunalMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.IpalKomunalMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('ipal_komunal');
		$tMap->setPhpName('IpalKomunal');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addForeignKey('ID_WILAYAH', 'IdWilayah', 'int', CreoleTypes::INTEGER, 'wilayah', 'ID', true, null);

		$tMap->addColumn('NAMA', 'Nama', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('ALAMAT', 'Alamat', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('DASAR_PEMBANGUNAN', 'DasarPembangunan', 'string', CreoleTypes::VARCHAR, false, 25);

		$tMap->addColumn('TANGGAL_PEMBANGUNAN', 'TanggalPembangunan', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('BULAN_PEMBANGUNAN', 'BulanPembangunan', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('TAHUN_PEMBANGUNAN', 'TahunPembangunan', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('PENGELOLA', 'Pengelola', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('KONDISI', 'Kondisi', 'string', CreoleTypes::VARCHAR, false, 25);

	} 
} 