<?php 

for($x=1; $x<=12; $x++)
{
    $arNum[] = $x;
}

echo select_tag('bank_sampah[bulan_pendirian]',
        options_for_select($arNum
                , $bank_sampah->getBulanPendirian(),
                'include_blank = true'
                )) 
?>