<?php


abstract class BaseKaderPeer {

	
	const DATABASE_NAME = 'propel';

	
	const TABLE_NAME = 'kader';

	
	const CLASS_DEFAULT = 'lib.model.Kader';

	
	const NUM_COLUMNS = 8;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'kader.ID';

	
	const ID_WILAYAH = 'kader.ID_WILAYAH';

	
	const ID_JENIS_KADER = 'kader.ID_JENIS_KADER';

	
	const NAMA = 'kader.NAMA';

	
	const ALAMAT = 'kader.ALAMAT';

	
	const RT = 'kader.RT';

	
	const RW = 'kader.RW';

	
	const NO_TELP = 'kader.NO_TELP';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'IdWilayah', 'IdJenisKader', 'Nama', 'Alamat', 'Rt', 'Rw', 'NoTelp', ),
		BasePeer::TYPE_COLNAME => array (KaderPeer::ID, KaderPeer::ID_WILAYAH, KaderPeer::ID_JENIS_KADER, KaderPeer::NAMA, KaderPeer::ALAMAT, KaderPeer::RT, KaderPeer::RW, KaderPeer::NO_TELP, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'id_wilayah', 'id_jenis_kader', 'nama', 'alamat', 'RT', 'RW', 'no_telp', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'IdWilayah' => 1, 'IdJenisKader' => 2, 'Nama' => 3, 'Alamat' => 4, 'Rt' => 5, 'Rw' => 6, 'NoTelp' => 7, ),
		BasePeer::TYPE_COLNAME => array (KaderPeer::ID => 0, KaderPeer::ID_WILAYAH => 1, KaderPeer::ID_JENIS_KADER => 2, KaderPeer::NAMA => 3, KaderPeer::ALAMAT => 4, KaderPeer::RT => 5, KaderPeer::RW => 6, KaderPeer::NO_TELP => 7, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'id_wilayah' => 1, 'id_jenis_kader' => 2, 'nama' => 3, 'alamat' => 4, 'RT' => 5, 'RW' => 6, 'no_telp' => 7, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/map/KaderMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.map.KaderMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = KaderPeer::getTableMap();
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
		return str_replace(KaderPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(KaderPeer::ID);

		$criteria->addSelectColumn(KaderPeer::ID_WILAYAH);

		$criteria->addSelectColumn(KaderPeer::ID_JENIS_KADER);

		$criteria->addSelectColumn(KaderPeer::NAMA);

		$criteria->addSelectColumn(KaderPeer::ALAMAT);

		$criteria->addSelectColumn(KaderPeer::RT);

		$criteria->addSelectColumn(KaderPeer::RW);

		$criteria->addSelectColumn(KaderPeer::NO_TELP);

	}

	const COUNT = 'COUNT(kader.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT kader.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(KaderPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(KaderPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = KaderPeer::doSelectRS($criteria, $con);
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
		$objects = KaderPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return KaderPeer::populateObjects(KaderPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			KaderPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = KaderPeer::getOMClass();
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
			$criteria->addSelectColumn(KaderPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(KaderPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(KaderPeer::ID_WILAYAH, WilayahPeer::ID);

		$rs = KaderPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinJenisKader(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(KaderPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(KaderPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(KaderPeer::ID_JENIS_KADER, JenisKaderPeer::ID);

		$rs = KaderPeer::doSelectRS($criteria, $con);
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

		KaderPeer::addSelectColumns($c);
		$startcol = (KaderPeer::NUM_COLUMNS - KaderPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		WilayahPeer::addSelectColumns($c);

		$c->addJoin(KaderPeer::ID_WILAYAH, WilayahPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = KaderPeer::getOMClass();

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
										$temp_obj2->addKader($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initKaders();
				$obj2->addKader($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinJenisKader(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		KaderPeer::addSelectColumns($c);
		$startcol = (KaderPeer::NUM_COLUMNS - KaderPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		JenisKaderPeer::addSelectColumns($c);

		$c->addJoin(KaderPeer::ID_JENIS_KADER, JenisKaderPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = KaderPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = JenisKaderPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getJenisKader(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addKader($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initKaders();
				$obj2->addKader($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, $con = null)
	{
		$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(KaderPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(KaderPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(KaderPeer::ID_WILAYAH, WilayahPeer::ID);

		$criteria->addJoin(KaderPeer::ID_JENIS_KADER, JenisKaderPeer::ID);

		$rs = KaderPeer::doSelectRS($criteria, $con);
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

		KaderPeer::addSelectColumns($c);
		$startcol2 = (KaderPeer::NUM_COLUMNS - KaderPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		WilayahPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + WilayahPeer::NUM_COLUMNS;

		JenisKaderPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + JenisKaderPeer::NUM_COLUMNS;

		$c->addJoin(KaderPeer::ID_WILAYAH, WilayahPeer::ID);

		$c->addJoin(KaderPeer::ID_JENIS_KADER, JenisKaderPeer::ID);

		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = KaderPeer::getOMClass();


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
					$temp_obj2->addKader($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj2->initKaders();
				$obj2->addKader($obj1);
			}


					
			$omClass = JenisKaderPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3 = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getJenisKader(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addKader($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj3->initKaders();
				$obj3->addKader($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAllExceptWilayah(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(KaderPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(KaderPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(KaderPeer::ID_JENIS_KADER, JenisKaderPeer::ID);

		$rs = KaderPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAllExceptJenisKader(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(KaderPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(KaderPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(KaderPeer::ID_WILAYAH, WilayahPeer::ID);

		$rs = KaderPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinAllExceptWilayah(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		KaderPeer::addSelectColumns($c);
		$startcol2 = (KaderPeer::NUM_COLUMNS - KaderPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		JenisKaderPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + JenisKaderPeer::NUM_COLUMNS;

		$c->addJoin(KaderPeer::ID_JENIS_KADER, JenisKaderPeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = KaderPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = JenisKaderPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getJenisKader(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addKader($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initKaders();
				$obj2->addKader($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAllExceptJenisKader(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		KaderPeer::addSelectColumns($c);
		$startcol2 = (KaderPeer::NUM_COLUMNS - KaderPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		WilayahPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + WilayahPeer::NUM_COLUMNS;

		$c->addJoin(KaderPeer::ID_WILAYAH, WilayahPeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = KaderPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = WilayahPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getWilayah(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addKader($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initKaders();
				$obj2->addKader($obj1);
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
		return KaderPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(KaderPeer::ID); 

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
			$comparison = $criteria->getComparison(KaderPeer::ID);
			$selectCriteria->add(KaderPeer::ID, $criteria->remove(KaderPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(KaderPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(KaderPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof Kader) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(KaderPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(Kader $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(KaderPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(KaderPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(KaderPeer::DATABASE_NAME, KaderPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = KaderPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(KaderPeer::DATABASE_NAME);

		$criteria->add(KaderPeer::ID, $pk);


		$v = KaderPeer::doSelect($criteria, $con);

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
			$criteria->add(KaderPeer::ID, $pks, Criteria::IN);
			$objs = KaderPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseKaderPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/map/KaderMapBuilder.php';
	Propel::registerMapBuilder('lib.model.map.KaderMapBuilder');
}
