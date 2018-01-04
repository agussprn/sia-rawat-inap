<div class="box flat no-margin no-shadow samping-kanan" style="padding:5px;border:1px solid #eee">
<div class="box flat no-margin no-shadow bg-1">
<div class="box-body">
	<b><i class="fa fa-user  fa-fw"></i> EDIT DATA RAWAT INAP</b>
</div>
</div>

 

<br>

<div class="box-body">
<?=$pesan;?>
<form action="<?=base_url();?>inap/edit/<?=$id_rawatinap;?>/simpan" method="post" >
  
    <table class="table">
     
	  <tr>
	  <td width="150px;">Nama Pasien</td>
        <td>
		   <select name="pasien" class="form-control" readonly>
			<?php
			foreach($pasien as $dp){
			if ($id_pasien==$dp->id_pasien){
			echo "
			<option value='$dp->id_pasien'>$dp->nama, $dp->alamat, Keluhan : $dp->keluhan</option>
			";
			}
			}
			?>
			</select>
           
        </td>
		</tr>
		<tr>
        <td>Ruangan</td>
        <td>
         <select name="ruangan" class="form-control" >
			<?php
			foreach($ruangan as $d){
			if ($id_ruang==$d->id_ruang){
			echo "
			<option selected value='$d->id_ruang'>$d->nama_ruang, Gedung : $d->nama_gedung, Biaya : $d->biaya_per_hari</option>
			";
			}else{
			echo "
			<option value='$d->id_ruang'>$d->nama_ruang, Gedung : $d->nama_gedung, Biaya : $d->biaya_per_hari</option>
			";
			}
			}
			?>
			</select>
        </td>
      </tr>
	 <tr>
        <td scope="col">Tanggal Masuk</td>
        <td scope="col">
        <input name="tgl" type="date" class="form-control" maxlength="15" required style="width:160px;" value="<?=$tgl_masuk;?>" />
        </td>    
		

	</tr>
      <tr>
        <td colspan="4">
         
          <button class="btn btn-primary btn-sm btn-flat simpan" type="submit" /><i class="fa fa-save fa-fw"></i> SIMPAN</button>
          <button class="btn btn-warning btn-sm btn-flat" type="reset"/><i class="fa fa-undo fa-fw"></i> RESET</button>
           
              
        </td>
      </tr>
    </table>
</form>  
</div>
</div>




