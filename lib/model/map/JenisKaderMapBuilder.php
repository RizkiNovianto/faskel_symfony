<?php



class JenisKaderMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.JenisKaderMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('jenis_kader');
		$tMap->setPhpName('JenisKader');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('JABATAN', 'Jabatan', 'string', CreoleTypes::VARCHAR, true, 50);

	} 
} 