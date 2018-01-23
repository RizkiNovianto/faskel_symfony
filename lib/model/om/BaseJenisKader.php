<?php


abstract class BaseJenisKader extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $jabatan;

	
	protected $collKaders;

	
	protected $lastKaderCriteria = null;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getJabatan()
	{

		return $this->jabatan;
	}

	
	public function setId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = JenisKaderPeer::ID;
		}

	} 
	
	public function setJabatan($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->jabatan !== $v) {
			$this->jabatan = $v;
			$this->modifiedColumns[] = JenisKaderPeer::JABATAN;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->jabatan = $rs->getString($startcol + 1);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 2; 
		} catch (Exception $e) {
			throw new PropelException("Error populating JenisKader object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(JenisKaderPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			JenisKaderPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public function save($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(JenisKaderPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			$affectedRows = $this->doSave($con);
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	protected function doSave($con)
	{
		$affectedRows = 0; 		if (!$this->alreadyInSave) {
			$this->alreadyInSave = true;


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = JenisKaderPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += JenisKaderPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collKaders !== null) {
				foreach($this->collKaders as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			$this->alreadyInSave = false;
		}
		return $affectedRows;
	} 
	
	protected $validationFailures = array();

	
	public function getValidationFailures()
	{
		return $this->validationFailures;
	}

	
	public function validate($columns = null)
	{
		$res = $this->doValidate($columns);
		if ($res === true) {
			$this->validationFailures = array();
			return true;
		} else {
			$this->validationFailures = $res;
			return false;
		}
	}

	
	protected function doValidate($columns = null)
	{
		if (!$this->alreadyInValidation) {
			$this->alreadyInValidation = true;
			$retval = null;

			$failureMap = array();


			if (($retval = JenisKaderPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collKaders !== null) {
					foreach($this->collKaders as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}


			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = JenisKaderPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getJabatan();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = JenisKaderPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getJabatan(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = JenisKaderPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setJabatan($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = JenisKaderPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setJabatan($arr[$keys[1]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(JenisKaderPeer::DATABASE_NAME);

		if ($this->isColumnModified(JenisKaderPeer::ID)) $criteria->add(JenisKaderPeer::ID, $this->id);
		if ($this->isColumnModified(JenisKaderPeer::JABATAN)) $criteria->add(JenisKaderPeer::JABATAN, $this->jabatan);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(JenisKaderPeer::DATABASE_NAME);

		$criteria->add(JenisKaderPeer::ID, $this->id);

		return $criteria;
	}

	
	public function getPrimaryKey()
	{
		return $this->getId();
	}

	
	public function setPrimaryKey($key)
	{
		$this->setId($key);
	}

	
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setJabatan($this->jabatan);


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->getKaders() as $relObj) {
				$copyObj->addKader($relObj->copy($deepCopy));
			}

		} 

		$copyObj->setNew(true);

		$copyObj->setId(NULL); 
	}

	
	public function copy($deepCopy = false)
	{
				$clazz = get_class($this);
		$copyObj = new $clazz();
		$this->copyInto($copyObj, $deepCopy);
		return $copyObj;
	}

	
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new JenisKaderPeer();
		}
		return self::$peer;
	}

	
	public function initKaders()
	{
		if ($this->collKaders === null) {
			$this->collKaders = array();
		}
	}

	
	public function getKaders($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseKaderPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collKaders === null) {
			if ($this->isNew()) {
			   $this->collKaders = array();
			} else {

				$criteria->add(KaderPeer::ID_JENIS_KADER, $this->getId());

				KaderPeer::addSelectColumns($criteria);
				$this->collKaders = KaderPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(KaderPeer::ID_JENIS_KADER, $this->getId());

				KaderPeer::addSelectColumns($criteria);
				if (!isset($this->lastKaderCriteria) || !$this->lastKaderCriteria->equals($criteria)) {
					$this->collKaders = KaderPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastKaderCriteria = $criteria;
		return $this->collKaders;
	}

	
	public function countKaders($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseKaderPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(KaderPeer::ID_JENIS_KADER, $this->getId());

		return KaderPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addKader(Kader $l)
	{
		$this->collKaders[] = $l;
		$l->setJenisKader($this);
	}


	
	public function getKadersJoinWilayah($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseKaderPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collKaders === null) {
			if ($this->isNew()) {
				$this->collKaders = array();
			} else {

				$criteria->add(KaderPeer::ID_JENIS_KADER, $this->getId());

				$this->collKaders = KaderPeer::doSelectJoinWilayah($criteria, $con);
			}
		} else {
									
			$criteria->add(KaderPeer::ID_JENIS_KADER, $this->getId());

			if (!isset($this->lastKaderCriteria) || !$this->lastKaderCriteria->equals($criteria)) {
				$this->collKaders = KaderPeer::doSelectJoinWilayah($criteria, $con);
			}
		}
		$this->lastKaderCriteria = $criteria;

		return $this->collKaders;
	}

} 