<div class="box flat no-margin no-shadow samping-kanan" style="padding:5px;border:1px solid #eee">
<div class="box flat no-margin no-shadow bg-1">
<div class="box-body">
	<b><i class="fa fa-user  fa-fw"></i> EDIT DATA RUANGAN RAWAT INAP</b>
</div>
</div>

 

<br>

<div class="box-body">
<?=$pesan;?>
<form action="<?=base_url();?>ruang/edit/<?=$id_ruang;?>/simpan" method="post" >
  
    <table class="table">
     
	  <tr>
	  <td width="150px;">Nama Ruang</td>
        <td>
            <input name="ruang" type="text" class="form-control" maxlength="20" required style="width:200px;" value="<?=$ruangan;?>"/>
        </td>
     </tr>
	 <tr>
        <td>Nama Gedung</td>
        <td>
         <input name="gedung" type="text" class="form-control" maxlength="20" required style="width:200px;" value="<?=$gedung;?>"/>
        </td>
      </tr>
	  <tr>
        <td>Biaya Sewa Perhari</td>
        <td>
         <input name="biaya" type="number" class="form-control" maxlength="11" style="width:200px;" required value="<?=$biaya;?>" />
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




