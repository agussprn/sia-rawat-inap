<div class="box flat no-margin no-shadow samping-kanan no-border" style="padding:5px;border:1px solid #eee;">

<div class="box no-shadow flat bg-1">
<div class="box-body no-padding">
<div class="col-md-10 no-padding pd-t-5">
	<b><i class="fa fa-users  fa-fw"></i> DATA RUANG RAWAT INAP</b>
</div>
<div class="col-md-2 no-padding" style="text-align:right;">
	<a class="btn btn-primary flat" href="<?=base_url();?>ruang/baru"><i class="fa fa-plus"></i> TAMBAH DATA</a>
</div>
</div>
</div>

<div class="table-responsive">
<table class="table table-bordered" id="table">
<thead>
<tr>
<th width="50px">NO</th>
<th>NAMA RUANG</th>
<th>NAMA GEDUNG</th>
<th>BIAYA SEWA PER HARI</th>
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
<td><?php echo $data->nama_ruang; ?></td>
<td><?php echo $data->nama_gedung; ?></td>
<td><?php echo $data->biaya_per_hari; ?></td>
<td width="150px">
<a href="<?=base_url();?>ruang/edit/<?php echo $data->id_ruang; ?>"><i class="fa fa-edit"> EDIT</i></a> | 
<a class="hapus" href="<?=base_url();?>ruang/hapus/<?php echo $data->id_ruang; ?>"><i class="fa fa-close"> HAPUS</i></a>
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