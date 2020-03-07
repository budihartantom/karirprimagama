<?php
is_login(); $otori = $this->session->userdata('pcOtoriName'); if (isset($otori) 
&& in_array($otori, array('208117','16','209739','193702','208114','193713'))) 
{ $tgl_awal = $this->input->post('tgl_awal'); $tgl_akhir = $this->input->post('tgl_akhir'); 
$jenis_soal = $this->input->post('jenis_soal'); if (isset($tgl_awal) && isset($tgl_akhir)) 
{ $where['a.tgl_diterima >='] = $tgl_awal; $where['a.tgl_diterima <='] = $tgl_akhir; 
if ((isset($jenis_soal) && !empty($jenis_soal)) && $jenis_soal <> 'All') 
{ $where['a.jenis_soal'] = $jenis_soal; } $arr1 = array(); $arr2 = array(); 
$sql = $this->config_model->find(array( 'select' 
=> array( "'Penulis' AS penyusun", 'a.idmp', 'a.kdmp', 'a.keterangan', 'b.NamaProdi', 
"(CASE WHEN (a.jenjang2 IS NOT NULL OR a.jenjang2 != '') THEN SUBSTRING(c.NamaJenjang, 1, 7) 
ELSE c.NamaJenjang END) AS jenjang", "(ISNULL(b.layak,0)) AS jml_1", "(ISNULL(b.revisi,0)) AS jml_0", 
"(CASE WHEN b.layak = '0' OR b.layak IS NULL THEN 0 ELSE e.layak END) AS nominal_1", 
"(CASE WHEN b.revisi = '0' OR b.revisi IS NULL THEN 0 ELSE e.revisi END) AS nominal_0", 'd.nama', 'd.alamat', 'd.npwp', 
'd.ktp', 'd.nama_rek', 'd.cabang_rek', 'd.no_rek', 'd.email', 'd.no_hp' ), 
'from' => 'tblmatpel a', 'join' => array( "( SELECT sum(CASE WHEN a.status_kma 
= '1' THEN 1 ELSE 0 END) AS 'layak', sum(CASE WHEN a.status_kma = '7' THEN 1 ELSE 0 END) 
AS 'revisi', a.kdmp, a.idmp, a.username, b.NamaProdi FROM tblsoal a INNER JOIN programstudi b ON a.KodeProdi=b.KodeProdi 
WHERE a.statusqc='6' OR a.statusqc = '8' GROUP BY a.kdmp, a.idmp, a.username, b.NamaProdi ) b"
=> array( 'on' => 'a.kdmp = b.kdmp AND a.idmp=b.idmp', 'type' => 'left' ), 
'TPrimaEdu_Prod.dbo.jenjang c' => array( 'on' => 'a.jenjang=c.KodeJenjang OR a.Jenjang2=c.KodeJenjang', 'type' 
=> 'inner' ), 'tblpenulis d' => array( 'on' => 'b.username=d.Kode', 'type' => 'left' ), 'v_harga e' 
=> array( 'on' => "e.penerima='1' AND e.jenjang IN (a.jenjang,a.jenjang2)" ) ), 'where' => $where, 'group_by' 
=> array( 'a.idmp', 'a.kdmp', 'a.keterangan', 'b.NamaProdi', "(CASE WHEN (a.jenjang2 IS NOT NULL OR a.jenjang2 != '') 
THEN SUBSTRING(c.NamaJenjang, 1, 7) ELSE c.NamaJenjang END)", 'b.layak', 'b.revisi', 'd.nama', 'd.alamat', 'd.npwp',
'd.ktp', 'd.nama_rek', 'd.cabang_rek', 'd.email', 'd.no_hp', 'd.no_rek', 'e.layak', 'e.revisi' ) ))->result_array(); 
$sql1 = $this->config_model->find(array( 'select' => array( "'KMA' AS penyusun", 'a.idmp', 'a.kdmp', 'a.keterangan',
'b.NamaProdi', "(CASE WHEN (a.jenjang2 IS NOT NULL OR a.jenjang2 != '') THEN SUBSTRING(c.NamaJenjang, 1, 7)
ELSE c.NamaJenjang END) AS jenjang", "(ISNULL(b.sempurna,0)) AS jml_1", "(ISNULL(b.kurang_sempurna,0)) AS jml_0", 
"(CASE WHEN b.sempurna = '0' OR b.sempurna IS NULL THEN 0 ELSE e.sempurna END) AS nominal_1", 
"(CASE WHEN b.kurang_sempurna = '0' OR b.kurang_sempurna IS NULL THEN 0 ELSE e.kurang_sempurna END) AS nominal_0",
'd.nama', 'd.alamat', 'd.npwp', 'd.ktp', 'd.nama_rek', 'd.cabang_rek', 'd.no_rek', 'd.email' ), 
'from' => 'tblmatpel a', 'join' => array( "( SELECT sum(CASE WHEN a.statusqc = '6' THEN 1 ELSE 0 END) 
AS 'sempurna', sum(CASE WHEN a.statusqc = '8' THEN 1 ELSE 0 END) AS 'kurang_sempurna', a.kdmp, a.idmp, a.qc, 
b.NamaProdi FROM tblsoal a INNER JOIN programstudi b ON a.KodeProdi=b.KodeProdi WHERE a.statusqc='6' 
OR a.statusqc = '8' GROUP BY a.kdmp, a.idmp, a.qc, b.NamaProdi ) b" => array( 'on' => 'a.kdmp = b.kdmp 
AND a.idmp=b.idmp', 'type' => 'left' ), 'TPrimaEdu_Prod.dbo.jenjang c' 
=> array( 'on' => 'a.jenjang=c.KodeJenjang OR a.Jenjang2=c.KodeJenjang', 'type' => 'inner' ), 'tblkma d'
=> array( 'on' => 'b.qc=d.Kode', 'type' => 'left' ), 'v_harga e' => array( 'on' => "e.penerima='2' 
AND e.jenjang IN (a.jenjang,a.jenjang2)" ) ), 'where' => $where, 'group_by' => array( 'a.idmp', 'a.kdmp',
'a.keterangan', 'b.NamaProdi', "(CASE WHEN (a.jenjang2 IS NOT NULL OR a.jenjang2 != '') 
THEN SUBSTRING(c.NamaJenjang, 1, 7) ELSE c.NamaJenjang END)", 'b.sempurna', 'b.kurang_sempurna', 'd.nama', 
'd.alamat', 'd.npwp', 'd.ktp', 'd.nama_rek', 'd.cabang_rek', 'd.email', 'd.no_rek', 'e.sempurna', 
'e.kurang_sempurna' ) ))->result_array(); if (count($sql) > 0)
{ foreach ($sql as $val) { $arr1[$val['penyusun']][$val['nama']][] = $val; } } if (count($sql1) > 0) 
{ foreach ($sql1 as $val) { $arr2[$val['penyusun']][$val['nama']][] = $val; } } $data['query'] 
= array_merge_recursive($arr1,$arr2); $this->load->view('laporan/pembayaransoal/rekap_pembayaran_soal',$data); } 
else { $data['breadcrumbs'] = array( array( 'link' => base_url('laporan/rekap_pembayaran_soal'),
'title' => 'Rekap Pembayaran Soal' ) ); $data['is_template_active'] = 1; $data['modul'] 
= 'Rekap Pembayaran Soal'; $this->template->set('title', 'Rekap Pembayaran Soal'); 
$this->template->load('template','laporan/pembayaranSoal/cari_rekap_pembayaran_soal',$data); } } 
else { redirect('welcome'); }