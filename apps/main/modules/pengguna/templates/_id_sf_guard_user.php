<?php $user = $sf_user->getGuardUser();?>
<?php 

$cri = new Criteria();
if($user->getIsSuperAdmin() != '1') $cri->add(SfGuardUserPeer::ID, $user->getId());
$user = sfGuardUserPeer::doSelect($cri);

echo select_tag('pengguna[id_sf_guard_user]', objects_for_select(
  $user,
  'getId',
  '__toString',
  $pengguna->getIdSfGuardUser()
  ));
        
?>