<?php


abstract class BasePengguna extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $id_wilayah;


	
	protected $id_sfguarduser;


	
	protected $nama;


	
	protected $keterangan;

	
	protected $aWilayah;

	
	protected $aSfGuardUser;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getIdWilayah()
	{

		return $this->id_wilayah;
	}

	
	public function getIdSfguarduser()
	{

		return $this->id_sfguarduser;
	}

	
	public function getNama()
	{

		return $this->nama;
	}

	
	public function getKeterangan()
	{

		return $this->keterangan;
	}

	
	public function setId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = PenggunaPeer::ID;
		}

	} 
	
	public function setIdWilayah($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id_wilayah !== $v) {
			$this->id_wilayah = $v;
			$this->modifiedColumns[] = PenggunaPeer::ID_WILAYAH;
		}

		if ($this->aWilayah !== null && $this->aWilayah->getId() !== $v) {
			$this->aWilayah = null;
		}

	} 
	
	public function setIdSfguarduser($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id_sfguarduser !== $v) {
			$this->id_sfguarduser = $v;
			$this->modifiedColumns[] = PenggunaPeer::ID_SFGUARDUSER;
		}

		if ($this->aSfGuardUser !== null && $this->aSfGuardUser->getId() !== $v) {
			$this->aSfGuardUser = null;
		}

	} 
	
	public function setNama($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->nama !== $v) {
			$this->nama = $v;
			$this->modifiedColumns[] = PenggunaPeer::NAMA;
		}

	} 
	
	public function setKeterangan($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->keterangan !== $v) {
			$this->keterangan = $v;
			$this->modifiedColumns[] = PenggunaPeer::KETERANGAN;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->id_wilayah = $rs->getInt($startcol + 1);

			$this->id_sfguarduser = $rs->getInt($startcol + 2);

			$this->nama = $rs->getString($startcol + 3);

			$this->keterangan = $rs->getString($startcol + 4);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 5; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Pengguna object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(PenggunaPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			PenggunaPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(PenggunaPeer::DATABASE_NAME);
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


												
			if ($this->aWilayah !== null) {
				if ($this->aWilayah->isModified()) {
					$affectedRows += $this->aWilayah->save($con);
				}
				$this->setWilayah($this->aWilayah);
			}

			if ($this->aSfGuardUser !== null) {
				if ($this->aSfGuardUser->isModified()) {
					$affectedRows += $this->aSfGuardUser->save($con);
				}
				$this->setSfGuardUser($this->aSfGuardUser);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = PenggunaPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += PenggunaPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

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


												
			if ($this->aWilayah !== null) {
				if (!$this->aWilayah->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aWilayah->getValidationFailures());
				}
			}

			if ($this->aSfGuardUser !== null) {
				if (!$this->aSfGuardUser->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aSfGuardUser->getValidationFailures());
				}
			}


			if (($retval = PenggunaPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = PenggunaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getIdWilayah();
				break;
			case 2:
				return $this->getIdSfguarduser();
				break;
			case 3:
				return $this->getNama();
				break;
			case 4:
				return $this->getKeterangan();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = PenggunaPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getIdWilayah(),
			$keys[2] => $this->getIdSfguarduser(),
			$keys[3] => $this->getNama(),
			$keys[4] => $this->getKeterangan(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = PenggunaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setIdWilayah($value);
				break;
			case 2:
				$this->setIdSfguarduser($value);
				break;
			case 3:
				$this->setNama($value);
				break;
			case 4:
				$this->setKeterangan($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = PenggunaPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setIdWilayah($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setIdSfguarduser($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setNama($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setKeterangan($arr[$keys[4]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(PenggunaPeer::DATABASE_NAME);

		if ($this->isColumnModified(PenggunaPeer::ID)) $criteria->add(PenggunaPeer::ID, $this->id);
		if ($this->isColumnModified(PenggunaPeer::ID_WILAYAH)) $criteria->add(PenggunaPeer::ID_WILAYAH, $this->id_wilayah);
		if ($this->isColumnModified(PenggunaPeer::ID_SFGUARDUSER)) $criteria->add(PenggunaPeer::ID_SFGUARDUSER, $this->id_sfguarduser);
		if ($this->isColumnModified(PenggunaPeer::NAMA)) $criteria->add(PenggunaPeer::NAMA, $this->nama);
		if ($this->isColumnModified(PenggunaPeer::KETERANGAN)) $criteria->add(PenggunaPeer::KETERANGAN, $this->keterangan);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(PenggunaPeer::DATABASE_NAME);

		$criteria->add(PenggunaPeer::ID, $this->id);

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

		$copyObj->setIdWilayah($this->id_wilayah);

		$copyObj->setIdSfguarduser($this->id_sfguarduser);

		$copyObj->setNama($this->nama);

		$copyObj->setKeterangan($this->keterangan);


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
			self::$peer = new PenggunaPeer();
		}
		return self::$peer;
	}

	
	public function setWilayah($v)
	{


		if ($v === null) {
			$this->setIdWilayah(NULL);
		} else {
			$this->setIdWilayah($v->getId());
		}


		$this->aWilayah = $v;
	}


	
	public function getWilayah($con = null)
	{
		if ($this->aWilayah === null && ($this->id_wilayah !== null)) {
						include_once 'lib/model/om/BaseWilayahPeer.php';

			$this->aWilayah = WilayahPeer::retrieveByPK($this->id_wilayah, $con);

			
		}
		return $this->aWilayah;
	}

	
	public function setSfGuardUser($v)
	{


		if ($v === null) {
			$this->setIdSfguarduser(NULL);
		} else {
			$this->setIdSfguarduser($v->getId());
		}


		$this->aSfGuardUser = $v;
	}


	
	public function getSfGuardUser($con = null)
	{
		if ($this->aSfGuardUser === null && ($this->id_sfguarduser !== null)) {
						include_once 'lib/model/om/BaseSfGuardUserPeer.php';

			$this->aSfGuardUser = SfGuardUserPeer::retrieveByPK($this->id_sfguarduser, $con);

			
		}
		return $this->aSfGuardUser;
	}

} 