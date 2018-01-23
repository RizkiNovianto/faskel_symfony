<?php


abstract class BaseIpalKomunalPeer {

	
	const DATABASE_NAME = 'propel';

	
	const TABLE_NAME = 'ipal_komunal';

	
	const CLASS_DEFAULT = 'lib.model.IpalKomunal';

	
	const NUM_COLUMNS = 10;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'ipal_komunal.ID';

	
	const ID_WILAYAH = 'ipal_komunal.ID_WILAYAH';

	
	const NAMA = 'ipal_komunal.NAMA';

	
	const ALAMAT = 'ipal_komunal.ALAMAT';

	
	const DASAR_PEMBANGUNAN = 'ipal_komunal.DASAR_PEMBANGUNAN';

	
	const TANGGAL_PEMBANGUNAN = 'ipal_komunal.TANGGAL_PEMBANGUNAN';

	
	const BULAN_PEMBANGUNAN = 'ipal_komunal.BULAN_PEMBANGUNAN';

	
	const TAHUN_PEMBANGUNAN = 'ipal_komunal.TAHUN_PEMBANGUNAN';

	
	const PENGELOLA = 'ipal_komunal.PENGELOLA';

	
	const KONDISI = 'ipal_komunal.KONDISI';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'IdWilayah', 'Nama', 'Alamat', 'DasarPembangunan', 'TanggalPembangunan', 'BulanPembangunan', 'TahunPembangunan', 'Pengelola', 'Kondisi', ),
		BasePeer::TYPE_COLNAME => array (IpalKomunalPeer::ID, IpalKomunalPeer::ID_WILAYAH, IpalKomunalPeer::NAMA, IpalKomunalPeer::ALAMAT, IpalKomunalPeer::DASAR_PEMBANGUNAN, IpalKomunalPeer::TANGGAL_PEMBANGUNAN, IpalKomunalPeer::BULAN_PEMBANGUNAN, IpalKomunalPeer::TAHUN_PEMBANGUNAN, IpalKomunalPeer::PENGELOLA, IpalKomunalPeer::KONDISI, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'id_wilayah', 'nama', 'alamat', 'dasar_pembangunan', 'tanggal_pembangunan', 'bulan_pembangunan', 'tahun_pembangunan', 'pengelola', 'kondisi', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'IdWilayah' => 1, 'Nama' => 2, 'Alamat' => 3, 'DasarPembangunan' => 4, 'TanggalPembangunan' => 5, 'BulanPembangunan' => 6, 'TahunPembangunan' => 7, 'Pengelola' => 8, 'Kondisi' => 9, ),
		BasePeer::TYPE_COLNAME => array (IpalKomunalPeer::ID => 0, IpalKomunalPeer::ID_WILAYAH => 1, IpalKomunalPeer::NAMA => 2, IpalKomunalPeer::ALAMAT => 3, IpalKomunalPeer::DASAR_PEMBANGUNAN => 4, IpalKomunalPeer::TANGGAL_PEMBANGUNAN => 5, IpalKomunalPeer::BULAN_PEMBANGUNAN => 6, IpalKomunalPeer::TAHUN_PEMBANGUNAN => 7, IpalKomunalPeer::PENGELOLA => 8, IpalKomunalPeer::KONDISI => 9, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'id_wilayah' => 1, 'nama' => 2, 'alamat' => 3, 'dasar_pembangunan' => 4, 'tanggal_pembangunan' => 5, 'bulan_pembangunan' => 6, 'tahun_pembangunan' => 7, 'pengelola' => 8, 'kondisi' => 9, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/map/IpalKomunalMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.map.IpalKomunalMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = IpalKomunalPeer::getTableMap();
			$columns = $map->getColumns();
			$nameMap = array();
			foreach ($columns as $column) {
				$nameMap[$column->getPhpName()] = $column->getColumnName();
			}
			self::$phpNameMap = $nameMap;
		}
		return self::$phpNameMap;
	}
	
	static public function translateFieldName($name, $fromType, $toType)
	{
		$toNames = self::getFieldNames($toType);
		$key = isset(self::$fieldKeys[$fromType][$name]) ? self::$fieldKeys[$fromType][$name] : null;
		if ($key === null) {
			throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(self::$fieldKeys[$fromType], true));
		}
		return $toNames[$key];
	}

	

	static public function getFieldNames($type = BasePeer::TYPE_PHPNAME)
	{
		if (!array_key_exists($type, self::$fieldNames)) {
			throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants TYPE_PHPNAME, TYPE_COLNAME, TYPE_FIELDNAME, TYPE_NUM. ' . $type . ' was given.');
		}
		return self::$fieldNames[$type];
	}

	
	public static function alias($alias, $column)
	{
		return str_replace(IpalKomunalPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(IpalKomunalPeer::ID);

		$criteria->addSelectColumn(IpalKomunalPeer::ID_WILAYAH);

		$criteria->addSelectColumn(IpalKomunalPeer::NAMA);

		$criteria->addSelectColumn(IpalKomunalPeer::ALAMAT);

		$criteria->addSelectColumn(IpalKomunalPeer::DASAR_PEMBANGUNAN);

		$criteria->addSelectColumn(IpalKomunalPeer::TANGGAL_PEMBANGUNAN);

		$criteria->addSelectColumn(IpalKomunalPeer::BULAN_PEMBANGUNAN);

		$criteria->addSelectColumn(IpalKomunalPeer::TAHUN_PEMBANGUNAN);

		$criteria->addSelectColumn(IpalKomunalPeer::PENGELOLA);

		$criteria->addSelectColumn(IpalKomunalPeer::KONDISI);

	}

	const COUNT = 'COUNT(ipal_komunal.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT ipal_komunal.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(IpalKomunalPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(IpalKomunalPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = IpalKomunalPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}
	
	public static function doSelectOne(Criteria $criteria, $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = IpalKomunalPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return IpalKomunalPeer::populateObjects(IpalKomunalPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			IpalKomunalPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = IpalKomunalPeer::getOMClass();
		$cls = Propel::import($cls);
				while($rs->next()) {
		
			$obj = new $cls();
			$obj->hydrate($rs);
			$results[] = $obj;
			
		}
		return $results;
	}

	
	public static function doCountJoinWilayah(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(IpalKomunalPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(IpalKomunalPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(IpalKomunalPeer::ID_WILAYAH, WilayahPeer::ID);

		$rs = IpalKomunalPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinWilayah(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		IpalKomunalPeer::addSelectColumns($c);
		$startcol = (IpalKomunalPeer::NUM_COLUMNS - IpalKomunalPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		WilayahPeer::addSelectColumns($c);

		$c->addJoin(IpalKomunalPeer::ID_WILAYAH, WilayahPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = IpalKomunalPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = WilayahPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getWilayah(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addIpalKomunal($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initIpalKomunals();
				$obj2->addIpalKomunal($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, $con = null)
	{
		$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(IpalKomunalPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(IpalKomunalPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(IpalKomunalPeer::ID_WILAYAH, WilayahPeer::ID);

		$rs = IpalKomunalPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinAll(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		IpalKomunalPeer::addSelectColumns($c);
		$startcol2 = (IpalKomunalPeer::NUM_COLUMNS - IpalKomunalPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		WilayahPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + WilayahPeer::NUM_COLUMNS;

		$c->addJoin(IpalKomunalPeer::ID_WILAYAH, WilayahPeer::ID);

		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = IpalKomunalPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);


					
			$omClass = WilayahPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getWilayah(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addIpalKomunal($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj2->initIpalKomunals();
				$obj2->addIpalKomunal($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}

	
	public static function getTableMap()
	{
		return Propel::getDatabaseMap(self::DATABASE_NAME)->getTable(self::TABLE_NAME);
	}

	
	public static function getOMClass()
	{
		return IpalKomunalPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(IpalKomunalPeer::ID); 

				$criteria->setDbName(self::DATABASE_NAME);

		try {
									$con->begin();
			$pk = BasePeer::doInsert($criteria, $con);
			$con->commit();
		} catch(PropelException $e) {
			$con->rollback();
			throw $e;
		}

		return $pk;
	}

	
	public static function doUpdate($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; 
			$comparison = $criteria->getComparison(IpalKomunalPeer::ID);
			$selectCriteria->add(IpalKomunalPeer::ID, $criteria->remove(IpalKomunalPeer::ID), $comparison);

		} else { 			$criteria = $values->buildCriteria(); 			$selectCriteria = $values->buildPkeyCriteria(); 		}

				$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	
	public static function doDeleteAll($con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}
		$affectedRows = 0; 		try {
									$con->begin();
			$affectedRows += BasePeer::doDeleteAll(IpalKomunalPeer::TABLE_NAME, $con);
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	 public static function doDelete($values, $con = null)
	 {
		if ($con === null) {
			$con = Propel::getConnection(IpalKomunalPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof IpalKomunal) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(IpalKomunalPeer::ID, (array) $values, Criteria::IN);
		}

				$criteria->setDbName(self::DATABASE_NAME);

		$affectedRows = 0; 
		try {
									$con->begin();
			
			$affectedRows += BasePeer::doDelete($criteria, $con);
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public static function doValidate(IpalKomunal $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(IpalKomunalPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(IpalKomunalPeer::TABLE_NAME);

			if (! is_array($cols)) {
				$cols = array($cols);
			}

			foreach($cols as $colName) {
				if ($tableMap->containsColumn($colName)) {
					$get = 'get' . $tableMap->getColumn($colName)->getPhpName();
					$columns[$colName] = $obj->$get();
				}
			}
		} else {

		}

		$res =  BasePeer::doValidate(IpalKomunalPeer::DATABASE_NAME, IpalKomunalPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = IpalKomunalPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
            $request->setError($col, $failed->getMessage());
        }
    }

    return $res;
	}

	
	public static function retrieveByPK($pk, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		$criteria = new Criteria(IpalKomunalPeer::DATABASE_NAME);

		$criteria->add(IpalKomunalPeer::ID, $pk);


		$v = IpalKomunalPeer::doSelect($criteria, $con);

		return !empty($v) > 0 ? $v[0] : null;
	}

	
	public static function retrieveByPKs($pks, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria();
			$criteria->add(IpalKomunalPeer::ID, $pks, Criteria::IN);
			$objs = IpalKomunalPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseIpalKomunalPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/map/IpalKomunalMapBuilder.php';
	Propel::registerMapBuilder('lib.model.map.IpalKomunalMapBuilder');
}
