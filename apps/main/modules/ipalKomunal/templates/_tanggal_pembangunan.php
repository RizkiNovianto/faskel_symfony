<?php 

for($x=1; $x<=31; $x++)
{
    $arNum[] = $x;
}

echo select_tag('ipal_komunal[tanggal_pembangunan]',
        options_for_select($arNum
                , $ipal_komunal->getTanggalPembangunan(),
                'include_blank = true'
                )) 
?>