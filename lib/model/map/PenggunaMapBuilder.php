<?php



class PenggunaMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.PenggunaMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('pengguna');
		$tMap->setPhpName('Pengguna');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addForeignKey('ID_WILAYAH', 'IdWilayah', 'int', CreoleTypes::INTEGER, 'wilayah', 'ID', false, null);

		$tMap->addForeignKey('ID_SFGUARDUSER', 'IdSfguarduser', 'int', CreoleTypes::INTEGER, 'sf_guard_user', 'ID', true, null);

		$tMap->addColumn('NAMA', 'Nama', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('KETERANGAN', 'Keterangan', 'string', CreoleTypes::VARCHAR, false, 255);

	} 
} 