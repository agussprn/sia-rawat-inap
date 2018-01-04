<div class="box flat no-margin no-shadow samping-kanan no-border" style="padding:5px;border:1px solid #eee;">

<div class="box no-shadow flat bg-1">
<div class="box-body no-padding">
<div class="col-md-10 no-padding pd-t-5">
	<b><i class="fa fa-users  fa-fw"></i> DATA PEMBAYARAN PASIEN RAWAT INAP</b>
</div>
<div class="col-md-2 no-padding" style="text-align:right;">
	<a class="btn btn-primary flat" href="<?=base_url();?>bayar/baru"><i class="fa fa-plus"></i> TAMBAH DATA</a>
</div>
</div>
</div>

<div class="table-responsive">
<table class="table table-bordered" id="table" >
<thead>
<tr>
<th width="50px">NO</th>
<th>NAMA</th>
<th>ALAMAT</th>
<th>KELUHAN</th>
<th>DOKTER</th>
<th>RUANG INAP</th>
<th>GEDUNG INAP</th>
<th>TGL MASUK</th>
<th>TGL KELUAR</th>
<th>TOTAL BAYAR</th>
<th>TGL BAYAR</th>
<th>AKSI</th>
</tr>
</thead>
<tbody>
<?php
$i=1;
foreach($query as $data){
?>
<tr>
<td><?=$i;?></td>
<td><?php echo $data->nama; ?></td>
<td><?php echo $data->alamat; ?></td>
<td><?php echo $data->keluhan; ?></td>
<td><?php echo $data->nama_dok; ?></td>
<td><?php echo $data->nama_ruang; ?></td>
<td><?php echo $data->nama_gedung; ?></td>
<td><?php echo $data->tgl_masuk; ?></td>
<td><?php echo $data->tgl_keluar; ?></td>
<td><?php echo $data->total_bayar; ?></td>
<td><?php echo $data->tgl_bayar; ?></td>
<td width="150px">
<a href="<?=base_url();?>bayar/edit/<?php echo $data->id_bayar; ?>"><i class="fa fa-edit"> EDIT</i></a> | 
<a class="hapus" href="<?=base_url();?>bayar/hapus/<?php echo $data->id_bayar; ?>"><i class="fa fa-close"> HAPUS</i></a>
</td>
</tr>
<?php
$i++;
}
?>

</tbody>
</table>
 </div>
 
 <script>
$(function(){
$('.hapus').click(function(){


var c=confirm("Yakin akan dihapus?");
if (c==true){
return true;
}
return false;
});
});



</script>