<?php

/**
 * Subclass for representing a row from the 'jenis_kader' table.
 *
 * 
 *
 * @package lib.model
 */ 
class JenisKader extends BaseJenisKader
{
	public function __toString()
    {
        return $this->getJabatan();
    }

}
