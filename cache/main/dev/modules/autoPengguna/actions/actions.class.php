<?php
// auto-generated by sfPropelAdmin
// date: 2018/02/01 04:26:42
?>
<?php

/**
 * autoPengguna actions.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage autoPengguna
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 * @version    SVN: $Id: actions.class.php 9855 2008-06-25 11:26:01Z FabianLange $
 */
class autoPenggunaActions extends sfActions
{
  public function executeIndex()
  {
    return $this->forward('pengguna', 'list');
  }

  public function executeList()
  {
    $this->processSort();

    $this->processFilters();


    // pager
    $this->pager = new sfPropelPager('Pengguna', 20);
    $c = new Criteria();
    $this->addSortCriteria($c);
    $this->addFiltersCriteria($c);
    $this->pager->setCriteria($c);
    $this->pager->setPage($this->getRequestParameter('page', $this->getUser()->getAttribute('page', 1, 'sf_admin/pengguna')));
    $this->pager->init();
    // save page
    if ($this->getRequestParameter('page')) {
        $this->getUser()->setAttribute('page', $this->getRequestParameter('page'), 'sf_admin/pengguna');
    }
  }

  public function executeCreate()
  {
    return $this->forward('pengguna', 'edit');
  }

  public function executeSave()
  {
    return $this->forward('pengguna', 'edit');
  }

  public function executeEdit()
  {
    $this->pengguna = $this->getPenggunaOrCreate();

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

  public function executeDelete()
  {
    $this->pengguna = PenggunaPeer::retrieveByPk($this->getRequestParameter('id'));
    $this->forward404Unless($this->pengguna);

    try
    {
      $this->deletePengguna($this->pengguna);
    }
    catch (PropelException $e)
    {
      $this->getRequest()->setError('delete', 'Could not delete the selected Pengguna. Make sure it does not have any associated items.');
      return $this->forward('pengguna', 'list');
    }

    return $this->redirect('pengguna/list');
  }

  public function handleErrorEdit()
  {
    $this->preExecute();
    $this->pengguna = $this->getPenggunaOrCreate();
    $this->updatePenggunaFromRequest();

    $this->labels = $this->getLabels();

    return sfView::SUCCESS;
  }

  protected function savePengguna($pengguna)
  {
    $pengguna->save();

  }

  protected function deletePengguna($pengguna)
  {
    $pengguna->delete();
  }

  protected function updatePenggunaFromRequest()
  {
    $pengguna = $this->getRequestParameter('pengguna');

    if (isset($pengguna['id_sf_guard_user']))
    {
      $this->pengguna->setIdSfGuardUser($pengguna['id_sf_guard_user']);
    }
    if (isset($pengguna['nama']))
    {
      $this->pengguna->setNama($pengguna['nama']);
    }
    if (isset($pengguna['id_wilayah']))
    {
    $this->pengguna->setIdWilayah($pengguna['id_wilayah'] ? $pengguna['id_wilayah'] : null);
    }
    if (isset($pengguna['keterangan']))
    {
      $this->pengguna->setKeterangan($pengguna['keterangan']);
    }
  }

  protected function getPenggunaOrCreate($id = 'id')
  {
    if (!$this->getRequestParameter($id))
    {
      $pengguna = new Pengguna();
    }
    else
    {
      $pengguna = PenggunaPeer::retrieveByPk($this->getRequestParameter($id));

      $this->forward404Unless($pengguna);
    }

    return $pengguna;
  }

  protected function processFilters()
  {
  }

  protected function processSort()
  {
    if ($this->getRequestParameter('sort'))
    {
      $this->getUser()->setAttribute('sort', $this->getRequestParameter('sort'), 'sf_admin/pengguna/sort');
      $this->getUser()->setAttribute('type', $this->getRequestParameter('type', 'asc'), 'sf_admin/pengguna/sort');
    }

    if (!$this->getUser()->getAttribute('sort', null, 'sf_admin/pengguna/sort'))
    {
    }
  }

  protected function addFiltersCriteria($c)
  {
  }

  protected function addSortCriteria($c)
  {
    if ($sort_column = $this->getUser()->getAttribute('sort', null, 'sf_admin/pengguna/sort'))
    {
      $sort_column = PenggunaPeer::translateFieldName($sort_column, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_COLNAME);
      if ($this->getUser()->getAttribute('type', null, 'sf_admin/pengguna/sort') == 'asc')
      {
        $c->addAscendingOrderByColumn($sort_column);
      }
      else
      {
        $c->addDescendingOrderByColumn($sort_column);
      }
    }
  }

  protected function getLabels()
  {
    return array(
      'pengguna{id_sf_guard_user}' => 'Id sf guard user:',
      'pengguna{nama}' => 'Nama:',
      'pengguna{id_wilayah}' => 'Id wilayah:',
      'pengguna{keterangan}' => 'Keterangan:',
    );
  }
}
