<?php



class KaderMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.KaderMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('kader');
		$tMap->setPhpName('Kader');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addForeignKey('ID_WILAYAH', 'IdWilayah', 'int', CreoleTypes::INTEGER, 'wilayah', 'ID', true, null);

		$tMap->addForeignKey('ID_JENIS_KADER', 'IdJenisKader', 'int', CreoleTypes::INTEGER, 'jenis_kader', 'ID', false, null);

		$tMap->addColumn('NAMA', 'Nama', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('ALAMAT', 'Alamat', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('RT', 'Rt', 'string', CreoleTypes::VARCHAR, false, 10);

		$tMap->addColumn('RW', 'Rw', 'string', CreoleTypes::VARCHAR, false, 10);

		$tMap->addColumn('NO_TELP', 'NoTelp', 'string', CreoleTypes::VARCHAR, false, 13);

	} 
} 