<?php


abstract class BaseWilayah extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $wilayah;


	
	protected $kecamatan;


	
	protected $kelurahan;

	
	protected $collBankSampahs;

	
	protected $lastBankSampahCriteria = null;

	
	protected $collIpalKomunals;

	
	protected $lastIpalKomunalCriteria = null;

	
	protected $collKaders;

	
	protected $lastKaderCriteria = null;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getWilayah()
	{

		return $this->wilayah;
	}

	
	public function getKecamatan()
	{

		return $this->kecamatan;
	}

	
	public function getKelurahan()
	{

		return $this->kelurahan;
	}

	
	public function setId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = WilayahPeer::ID;
		}

	} 
	
	public function setWilayah($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->wilayah !== $v) {
			$this->wilayah = $v;
			$this->modifiedColumns[] = WilayahPeer::WILAYAH;
		}

	} 
	
	public function setKecamatan($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->kecamatan !== $v) {
			$this->kecamatan = $v;
			$this->modifiedColumns[] = WilayahPeer::KECAMATAN;
		}

	} 
	
	public function setKelurahan($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->kelurahan !== $v) {
			$this->kelurahan = $v;
			$this->modifiedColumns[] = WilayahPeer::KELURAHAN;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->wilayah = $rs->getString($startcol + 1);

			$this->kecamatan = $rs->getString($startcol + 2);

			$this->kelurahan = $rs->getString($startcol + 3);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 4; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Wilayah object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(WilayahPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			WilayahPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(WilayahPeer::DATABASE_NAME);
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
					$pk = WilayahPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += WilayahPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collBankSampahs !== null) {
				foreach($this->collBankSampahs as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collIpalKomunals !== null) {
				foreach($this->collIpalKomunals as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

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


			if (($retval = WilayahPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collBankSampahs !== null) {
					foreach($this->collBankSampahs as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collIpalKomunals !== null) {
					foreach($this->collIpalKomunals as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
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
		$pos = WilayahPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getWilayah();
				break;
			case 2:
				return $this->getKecamatan();
				break;
			case 3:
				return $this->getKelurahan();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = WilayahPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getWilayah(),
			$keys[2] => $this->getKecamatan(),
			$keys[3] => $this->getKelurahan(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = WilayahPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setWilayah($value);
				break;
			case 2:
				$this->setKecamatan($value);
				break;
			case 3:
				$this->setKelurahan($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = WilayahPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setWilayah($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setKecamatan($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setKelurahan($arr[$keys[3]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(WilayahPeer::DATABASE_NAME);

		if ($this->isColumnModified(WilayahPeer::ID)) $criteria->add(WilayahPeer::ID, $this->id);
		if ($this->isColumnModified(WilayahPeer::WILAYAH)) $criteria->add(WilayahPeer::WILAYAH, $this->wilayah);
		if ($this->isColumnModified(WilayahPeer::KECAMATAN)) $criteria->add(WilayahPeer::KECAMATAN, $this->kecamatan);
		if ($this->isColumnModified(WilayahPeer::KELURAHAN)) $criteria->add(WilayahPeer::KELURAHAN, $this->kelurahan);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(WilayahPeer::DATABASE_NAME);

		$criteria->add(WilayahPeer::ID, $this->id);

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

		$copyObj->setWilayah($this->wilayah);

		$copyObj->setKecamatan($this->kecamatan);

		$copyObj->setKelurahan($this->kelurahan);


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->getBankSampahs() as $relObj) {
				$copyObj->addBankSampah($relObj->copy($deepCopy));
			}

			foreach($this->getIpalKomunals() as $relObj) {
				$copyObj->addIpalKomunal($relObj->copy($deepCopy));
			}

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
			self::$peer = new WilayahPeer();
		}
		return self::$peer;
	}

	
	public function initBankSampahs()
	{
		if ($this->collBankSampahs === null) {
			$this->collBankSampahs = array();
		}
	}

	
	public function getBankSampahs($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseBankSampahPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collBankSampahs === null) {
			if ($this->isNew()) {
			   $this->collBankSampahs = array();
			} else {

				$criteria->add(BankSampahPeer::ID_WILAYAH, $this->getId());

				BankSampahPeer::addSelectColumns($criteria);
				$this->collBankSampahs = BankSampahPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(BankSampahPeer::ID_WILAYAH, $this->getId());

				BankSampahPeer::addSelectColumns($criteria);
				if (!isset($this->lastBankSampahCriteria) || !$this->lastBankSampahCriteria->equals($criteria)) {
					$this->collBankSampahs = BankSampahPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastBankSampahCriteria = $criteria;
		return $this->collBankSampahs;
	}

	
	public function countBankSampahs($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseBankSampahPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(BankSampahPeer::ID_WILAYAH, $this->getId());

		return BankSampahPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addBankSampah(BankSampah $l)
	{
		$this->collBankSampahs[] = $l;
		$l->setWilayah($this);
	}

	
	public function initIpalKomunals()
	{
		if ($this->collIpalKomunals === null) {
			$this->collIpalKomunals = array();
		}
	}

	
	public function getIpalKomunals($criteria = null, $con = null)
	{
				include_once 'lib/model/om/BaseIpalKomunalPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collIpalKomunals === null) {
			if ($this->isNew()) {
			   $this->collIpalKomunals = array();
			} else {

				$criteria->add(IpalKomunalPeer::ID_WILAYAH, $this->getId());

				IpalKomunalPeer::addSelectColumns($criteria);
				$this->collIpalKomunals = IpalKomunalPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(IpalKomunalPeer::ID_WILAYAH, $this->getId());

				IpalKomunalPeer::addSelectColumns($criteria);
				if (!isset($this->lastIpalKomunalCriteria) || !$this->lastIpalKomunalCriteria->equals($criteria)) {
					$this->collIpalKomunals = IpalKomunalPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastIpalKomunalCriteria = $criteria;
		return $this->collIpalKomunals;
	}

	
	public function countIpalKomunals($criteria = null, $distinct = false, $con = null)
	{
				include_once 'lib/model/om/BaseIpalKomunalPeer.php';
		if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(IpalKomunalPeer::ID_WILAYAH, $this->getId());

		return IpalKomunalPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addIpalKomunal(IpalKomunal $l)
	{
		$this->collIpalKomunals[] = $l;
		$l->setWilayah($this);
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

				$criteria->add(KaderPeer::ID_WILAYAH, $this->getId());

				KaderPeer::addSelectColumns($criteria);
				$this->collKaders = KaderPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(KaderPeer::ID_WILAYAH, $this->getId());

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

		$criteria->add(KaderPeer::ID_WILAYAH, $this->getId());

		return KaderPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addKader(Kader $l)
	{
		$this->collKaders[] = $l;
		$l->setWilayah($this);
	}


	
	public function getKadersJoinJenisKader($criteria = null, $con = null)
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

				$criteria->add(KaderPeer::ID_WILAYAH, $this->getId());

				$this->collKaders = KaderPeer::doSelectJoinJenisKader($criteria, $con);
			}
		} else {
									
			$criteria->add(KaderPeer::ID_WILAYAH, $this->getId());

			if (!isset($this->lastKaderCriteria) || !$this->lastKaderCriteria->equals($criteria)) {
				$this->collKaders = KaderPeer::doSelectJoinJenisKader($criteria, $con);
			}
		}
		$this->lastKaderCriteria = $criteria;

		return $this->collKaders;
	}

} 