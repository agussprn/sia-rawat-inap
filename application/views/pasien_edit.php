<div class="box flat no-margin no-shadow samping-kanan" style="padding:5px;border:1px solid #eee">
<div class="box flat no-margin no-shadow bg-1">
<div class="box-body">
	<b><i class="fa fa-user  fa-fw"></i> EDIT DATA PASIEN</b>
</div>
</div>

 

<br>

<div class="box-body">
<?=$pesan;?>
<form action="<?=base_url();?>pasien/edit/<?=$id_pasien;?>/simpan" method="post" >
  
    <table class="table">
     
	  <tr>
	  <td>Nama Pasien</td>
        <td>
            <input name="nama" type="text" class="form-control" maxlength="50" required value="<?=$nama;?>"/>
        </td>
     
        <td>Keluhan</td>
        <td>
         <input name="keluhan" type="text" class="form-control" maxlength="50" required value="<?=$keluhan;?>"/>
        </td>
      </tr>
      <tr>
        <td scope="col">Alamat</td>
        <td scope="col">
            <textarea name="alamat" type="text" class="form-control" rows="4" maxlength="50" required /><?=$alamat;?></textarea>
        </td>
		
    	<td scope="col">Dokter</td>
        <td scope="col">
            <select name="dokter" class="form-control" >
			<?php
			foreach($dokter as $d){
			if ($id_dokter==$d->id_dokter){
			echo "
			<option value='$d->id_dokter' selected>$d->nama_dok, Spesialis : $d->spesialisasi</option>
			";
			}else{
			echo "
			<option value='$d->id_dokter'>$d->nama_dok, Spesialis : $d->spesialisasi</option>
			";
			}
			}
			?>
			</select>
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




