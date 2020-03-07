<?php
Hasil enkripsi: if (isset($items[0]['npwp']) && !empty($items[0]['npwp']) && 
$items[0]['npwp'] != '0' && !preg_match("/[a-z]/i", $items[0]['npwp']) && 
strlen(preg_replace("/[^0-9]/", "", $items[0]['npwp'])) == 15) 
{ $total_dibayar = ($total_honorium - ($total_honorium * 0.025)); 
$stotal_dibayar = $total_honorium; $pph21 = 
($total_honorium * 0.025); echo ''; echo 'Terbilang: '.(isset($total_dibayar) ? 
ucwords(terbilang(number_format($total_dibayar,0,'','')).' rupiah') : '').''; 
echo ''; echo ''; echo 'Subtotal'; echo 'Rp. '.(isset($stotal_dibayar) ? number_format($stotal_dibayar,0,'','.') : 0).''; 
echo ''; echo ''; echo 'Pph21 (2,5%)'; echo 'Rp. '.(isset($pph21) ? $pph21 : 0).''; echo ''; echo ''; echo 'Total'; 
echo 'Rp. '.(isset($total_dibayar) ? number_format($total_dibayar,0,'','.') : 0).''; echo ''; } 
else { $total_dibayar = ($total_honorium - ($total_honorium * 0.03)); $stotal_dibayar = $total_honorium; $pph21 = 
($total_honorium * 0.03); echo ''; echo 'Terbilang: '.(isset($total_dibayar) ? 
ucwords(terbilang(number_format($total_dibayar,0,'','')).' rupiah') : '').''; 
echo ''; echo ''; echo 'Subtotal'; echo 'Rp. '.(isset($stotal_dibayar) ? 
number_format($stotal_dibayar,0,'','.') : 0).''; echo ''; echo ''; 
echo 'Pph21 (3%)'; echo 'Rp. '.(isset($pph21) ? $pph21 : 0).''; echo ''; echo ''; 
echo 'Total'; echo 'Rp. '.(isset($total_dibayar) ? number_format($total_dibayar,0,'','.') : 0).''; echo ''; }