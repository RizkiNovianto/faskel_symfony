<?php 

for($x=1; $x<=31; $x++)
{
    $arNum[] = $x;
}

echo select_tag('bank_sampah[tanggal_pendirian]',
        options_for_select($arNum
                , $bank_sampah->getTanggalPendirian(),
                'include_blank = true'
                )) 
?>