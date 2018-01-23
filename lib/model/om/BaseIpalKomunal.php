<?php


abstract class BaseIpalKomunal extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $id_wilayah;


	
	protected $nama;


	
	protected $alamat;


	
	protected $dasar_pembangunan;


	
	protected $tanggal_pembangunan;


	
	protected $bulan_pembangunan;


	
	protected $tahun_pembangunan;


	
	protected $pengelola;


	
	protected $kondisi;

	
	protected $aWilayah;

	
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

	
	public function getNama()
	{

		return $this->nama;
	}

	
	public function getAlamat()
	{

		return $this->alamat;
	}

	
	public function getDasarPembangunan()
	{

		return $this->dasar_pembangunan;
	}

	
	public function getTanggalPembangunan()
	{

		return $this->tanggal_pembangunan;
	}

	
	public function getBulanPembangunan()
	{

		return $this->bulan_pembangunan;
	}

	
	public function getTahunPembangunan()
	{

		return $this->tahun_pembangunan;
	}

	
	public function getPengelola()
	{

		return $this->pengelola;
	}

	
	public function getKondisi()
	{

		return $this->kondisi;
	}

	
	public function setId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = IpalKomunalPeer::ID;
		}

	} 
	
	public function setIdWilayah($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id_wilayah !== $v) {
			$this->id_wilayah = $v;
			$this->modifiedColumns[] = IpalKomunalPeer::ID_WILAYAH;
		}

		if ($this->aWilayah !== null && $this->aWilayah->getId() !== $v) {
			$this->aWilayah = null;
		}

	} 
	
	public function setNama($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->nama !== $v) {
			$this->nama = $v;
			$this->modifiedColumns[] = IpalKomunalPeer::NAMA;
		}

	} 
	
	public function setAlamat($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->alamat !== $v) {
			$this->alamat = $v;
			$this->modifiedColumns[] = IpalKomunalPeer::ALAMAT;
		}

	} 
	
	public function setDasarPembangunan($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->dasar_pembangunan !== $v) {
			$this->dasar_pembangunan = $v;
			$this->modifiedColumns[] = IpalKomunalPeer::DASAR_PEMBANGUNAN;
		}

	} 
	
	public function setTanggalPembangunan($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->tanggal_pembangunan !== $v) {
			$this->tanggal_pembangunan = $v;
			$this->modifiedColumns[] = IpalKomunalPeer::TANGGAL_PEMBANGUNAN;
		}

	} 
	
	public function setBulanPembangunan($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->bulan_pembangunan !== $v) {
			$this->bulan_pembangunan = $v;
			$this->modifiedColumns[] = IpalKomunalPeer::BULAN_PEMBANGUNAN;
		}

	} 
	
	public function setTahunPembangunan($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->tahun_pembangunan !== $v) {
			$this->tahun_pembangunan = $v;
			$this->modifiedColumns[] = IpalKomunalPeer::TAHUN_PEMBANGUNAN;
		}

	} 
	
	public function setPengelola($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->pengelola !== $v) {
			$this->pengelola = $v;
			$this->modifiedColumns[] = IpalKomunalPeer::PENGELOLA;
		}

	} 
	
	public function setKondisi($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->kondisi !== $v) {
			$this->kondisi = $v;
			$this->modifiedColumns[] = IpalKomunalPeer::KONDISI;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->id_wilayah = $rs->getInt($startcol + 1);

			$this->nama = $rs->getString($startcol + 2);

			$this->alamat = $rs->getString($startcol + 3);

			$this->dasar_pembangunan = $rs->getString($startcol + 4);

			$this->tanggal_pembangunan = $rs->getInt($startcol + 5);

			$this->bulan_pembangunan = $rs->getInt($startcol + 6);

			$this->tahun_pembangunan = $rs->getInt($startcol + 7);

			$this->pengelola = $rs->getString($startcol + 8);

			$this->kondisi = $rs->getString($startcol + 9);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 10; 
		} catch (Exception $e) {
			throw new PropelException("Error populating IpalKomunal object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(IpalKomunalPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			IpalKomunalPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(IpalKomunalPeer::DATABASE_NAME);
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


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = IpalKomunalPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += IpalKomunalPeer::doUpdate($this, $con);
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


			if (($retval = IpalKomunalPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = IpalKomunalPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getNama();
				break;
			case 3:
				return $this->getAlamat();
				break;
			case 4:
				return $this->getDasarPembangunan();
				break;
			case 5:
				return $this->getTanggalPembangunan();
				break;
			case 6:
				return $this->getBulanPembangunan();
				break;
			case 7:
				return $this->getTahunPembangunan();
				break;
			case 8:
				return $this->getPengelola();
				break;
			case 9:
				return $this->getKondisi();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = IpalKomunalPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getIdWilayah(),
			$keys[2] => $this->getNama(),
			$keys[3] => $this->getAlamat(),
			$keys[4] => $this->getDasarPembangunan(),
			$keys[5] => $this->getTanggalPembangunan(),
			$keys[6] => $this->getBulanPembangunan(),
			$keys[7] => $this->getTahunPembangunan(),
			$keys[8] => $this->getPengelola(),
			$keys[9] => $this->getKondisi(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = IpalKomunalPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setNama($value);
				break;
			case 3:
				$this->setAlamat($value);
				break;
			case 4:
				$this->setDasarPembangunan($value);
				break;
			case 5:
				$this->setTanggalPembangunan($value);
				break;
			case 6:
				$this->setBulanPembangunan($value);
				break;
			case 7:
				$this->setTahunPembangunan($value);
				break;
			case 8:
				$this->setPengelola($value);
				break;
			case 9:
				$this->setKondisi($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = IpalKomunalPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setIdWilayah($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setNama($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setAlamat($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setDasarPembangunan($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setTanggalPembangunan($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setBulanPembangunan($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setTahunPembangunan($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setPengelola($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setKondisi($arr[$keys[9]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(IpalKomunalPeer::DATABASE_NAME);

		if ($this->isColumnModified(IpalKomunalPeer::ID)) $criteria->add(IpalKomunalPeer::ID, $this->id);
		if ($this->isColumnModified(IpalKomunalPeer::ID_WILAYAH)) $criteria->add(IpalKomunalPeer::ID_WILAYAH, $this->id_wilayah);
		if ($this->isColumnModified(IpalKomunalPeer::NAMA)) $criteria->add(IpalKomunalPeer::NAMA, $this->nama);
		if ($this->isColumnModified(IpalKomunalPeer::ALAMAT)) $criteria->add(IpalKomunalPeer::ALAMAT, $this->alamat);
		if ($this->isColumnModified(IpalKomunalPeer::DASAR_PEMBANGUNAN)) $criteria->add(IpalKomunalPeer::DASAR_PEMBANGUNAN, $this->dasar_pembangunan);
		if ($this->isColumnModified(IpalKomunalPeer::TANGGAL_PEMBANGUNAN)) $criteria->add(IpalKomunalPeer::TANGGAL_PEMBANGUNAN, $this->tanggal_pembangunan);
		if ($this->isColumnModified(IpalKomunalPeer::BULAN_PEMBANGUNAN)) $criteria->add(IpalKomunalPeer::BULAN_PEMBANGUNAN, $this->bulan_pembangunan);
		if ($this->isColumnModified(IpalKomunalPeer::TAHUN_PEMBANGUNAN)) $criteria->add(IpalKomunalPeer::TAHUN_PEMBANGUNAN, $this->tahun_pembangunan);
		if ($this->isColumnModified(IpalKomunalPeer::PENGELOLA)) $criteria->add(IpalKomunalPeer::PENGELOLA, $this->pengelola);
		if ($this->isColumnModified(IpalKomunalPeer::KONDISI)) $criteria->add(IpalKomunalPeer::KONDISI, $this->kondisi);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(IpalKomunalPeer::DATABASE_NAME);

		$criteria->add(IpalKomunalPeer::ID, $this->id);

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

		$copyObj->setNama($this->nama);

		$copyObj->setAlamat($this->alamat);

		$copyObj->setDasarPembangunan($this->dasar_pembangunan);

		$copyObj->setTanggalPembangunan($this->tanggal_pembangunan);

		$copyObj->setBulanPembangunan($this->bulan_pembangunan);

		$copyObj->setTahunPembangunan($this->tahun_pembangunan);

		$copyObj->setPengelola($this->pengelola);

		$copyObj->setKondisi($this->kondisi);


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
			self::$peer = new IpalKomunalPeer();
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

} 