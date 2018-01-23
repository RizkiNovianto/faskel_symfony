<?php 

for($x=1; $x<=12; $x++)
{
    $arNum[] = $x;
}

echo select_tag('ipal_komunal[bulan_pembangunan]',
        options_for_select($arNum
                , $ipal_komunal->getBulanPembangunan(),
                'include_blank = true'
                )) 
?>