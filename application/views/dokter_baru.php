<div class="box flat no-margin no-shadow samping-kanan" style="padding:5px;border:1px solid #eee">
<div class="box flat no-margin no-shadow bg-1">
<div class="box-body">
	<b><i class="fa fa-user  fa-fw"></i> TAMBAH DATA DOKTER</b>
</div>
</div>

 

<br>

<div class="box-body">
<?=$pesan;?>
<form action="<?=base_url();?>dokter/baru/simpan" method="post" >
  
    <table class="table">
     
	  <tr>
	  <td width="150px;">Nama Dokter</td>
        <td>
            <input name="nama" type="text" class="form-control" maxlength="20" style="width:200px;" required />
        </td>
     </tr>
	 <tr>
        <td>Alamat</td>
        <td>
         <input name="alamat" type="text" class="form-control" maxlength="100" style="width:500px;" required />
        </td>
      </tr>
      <tr>
        <td>Spesialisasi</td>
        <td>
         <input name="spesialis" type="text" class="form-control" maxlength="30" style="width:200px;" required />
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





