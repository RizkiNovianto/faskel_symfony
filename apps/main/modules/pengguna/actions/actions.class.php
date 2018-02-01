<?php

/**
 * pengguna actions.
 *
 * @package    faskel_symfony
 * @subpackage pengguna
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2288 2006-10-02 15:22:13Z fabien $
 */
class penggunaActions extends autopenggunaActions
{
    public function executeDetail()
  {
    //$this->forward('default', 'module');
        
    $userId = $this->getRequestParameter('userId');
    $c = new Criteria();
    $c->add(PenggunaPeer::ID_SFGUARDUSER, $userId);
    $pg = PenggunaPeer::doSelect($c);
    $this->pengguna = $pg[0];
    $this->userId = $userId;
    
  }
  
  public function executeCreate()
  {
    $this->userId = $this->getRequestParameter('userId');
    return $this->forward('pengguna', 'edit');
  }
  
  public function executeEdit()
  {
    $this->pengguna = $this->getPenggunaOrCreate();
        $this->userId = $this->getRequestParameter('userId');

    if ($this->getRequest()->getMethod() == sfRequest::POST)
    {
      $this->updatePenggunaFromRequest();

      $this->savePengguna($this->pengguna);

      $this->setFlash('notice', 'Your modifications have been saved');

      if ($this->getRequestParameter('save_and_add'))
      {
        return $this->redirect('pengguna/create');
      }
      else if ($this->getRequestParameter('save_and_list'))
      {
        return $this->redirect('pengguna/list');
      }
      else
      {
        return $this->redirect('pengguna/edit?id='.$this->pengguna->getId());
      }
    }
    else
    {
      $this->labels = $this->getLabels();
    }
  }
}

?>