<?php
if (count($query) > 0) { $no=1; $stotal_dibayar_1=0; $stotal_dibayar_0=0; while (list($k, $v)=@each($query))
 { $out .= ""; $out .= ''.$k.''; $out .= ""; while (list($kk, $vv)=@each($v)) { $out .= ""; $out .= ''.$no.''; 
 $out .= ''.$kk.''; $total_honorium = 0; $cpph = 0; while (list($kkk, $vvv)=@each($vv)) 
 { $honorium = (($vvv['jml_1'] * $vvv['nominal_1']) + ($vvv['jml_0'] * $vvv['nominal_0'])); 
 $total_honorium += $honorium; 
 if (isset($vvv['npwp']) && !empty($vvv['npwp']) && $vvv['npwp'] != '0' && !preg_match("/[a-z]/i", 
 $vvv['npwp']) && strlen(preg_replace("/[^0-9]/", "", $vvv['npwp'])) == 15) { $cpph = 0.025; }
 else { $cpph = 0.03; } $out .= ''.$vvv['kdmp'].''; $out .= ''.$vvv['jenjang'].''; $out .= ''.$vvv['NamaProdi'].''; 
$out .= ''.$vvv['jml_1'].''; $out .= ''.$vvv['nominal_1'].''; $out .= ''.$vvv['jml_0'].''; 
$out .= ''.$vvv['nominal_0'].''; $out .= ''.number_format($honorium,0,'','').''; $out .= ""; } 
$total_dibayar = ($total_honorium - ($total_honorium * $cpph)); 
$pph21 = ($total_honorium * $cpph); $stotal_dibayar_1 += $total_dibayar; $stotal_dibayar_0 += $total_honorium; $out .= ""; 
$out .= 'Total Honorium:'; $out .= ''.(number_format($total_honorium,0,'','')).''; $out .= ""; $out .= ""; 
$out .= 'PPH 21:'; $out .= ''.$pph21.''; $out .= ""; $out .= ""; 
$out .= 'Total:'; $out .= ''.(number_format($total_dibayar,0,'','')).''; $out .= ""; $no++; } } } echo $out;