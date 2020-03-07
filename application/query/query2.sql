use eLPrimagama
Go

select nama, npwp, file_npwp, Kode from dbo.tblkma
where Nama = 'Septiana Sari'

UPDATE dbo.tblkma SET npwp = '906875075314000' where Kode = 'FIS.2017.02.16';