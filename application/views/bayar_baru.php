<div class="box flat no-margin no-shadow samping-kanan" style="padding:5px;border:1px solid #eee">
<div class="box flat no-margin no-shadow bg-1">
<div class="box-body">
	<b><i class="fa fa-user  fa-fw"></i> TAMBAH DATA PEMBAYARAN RAWAT INAP</b>
</div>
</div>

 

<br>

<div class="box-body">
<?=$pesan;?>
<form action="<?=base_url();?>bayar/baru/simpan" method="post" >
  
    <table class="table">
     
	  <tr>
	  <td width="150px;">Data Pasien</td>
        <td>
		   <select name="inap" class="form-control" >
			<?php
			foreach($inap as $dp){
			if ($dp->tgl_keluar=="0000-00-00" or $dp->tgl_keluar=="(NULL)"){
			echo "
			<option value='$dp->id_rawatinap'>
			$dp->nama, $dp->alamat, Keluhan : $dp->keluhan, 
			Di Ruang : $dp->nama_ruang, Gedung : $dp->nama_gedung, Biaya/hr : $dp->biaya_per_hari,
			
			Tgl Masuk : $dp->tgl_masuk</option>
			";
			}
			}
			?>
			</select>
           
        </td>
		</tr>
		
      <tr>
        <td scope="col">Total Bayar</td>
        <td scope="col">
        <input name="bayar" type="number" class="form-control" maxlength="11" required style="width:160px;" />
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





