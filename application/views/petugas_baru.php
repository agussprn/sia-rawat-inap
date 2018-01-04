<div class="box flat no-margin no-shadow samping-kanan" style="padding:5px;border:1px solid #eee">
<div class="box flat no-margin no-shadow bg-1">
<div class="box-body">
	<b><i class="fa fa-user  fa-fw"></i> TAMBAH DATA PETUGAS</b>
</div>
</div>

 

<br>

<div class="box-body">
<?=$gagal;?>
<form action="<?=base_url();?>petugas/baru/simpan" method="post" >
  
    <table class="table">
     
	  <tr>
	  <td width="150px;">Nama Petugas</td>
        <td>
            <input name="nama" type="text" class="form-control" maxlength="20" style="width:200px;" required />
        </td>
     </tr>
	 <tr>
        <td>Jabatan</td>
        <td>
         <select name="jabatan" class="form-control" style="width:200px;" required >
		 <option value="ADMIN">ADMIN</option>
		 <option value="CS">CS</option>
		 </select>
        </td>
      </tr>
      <tr>
        <td>Username</td>
        <td>
         <input name="username" type="text" class="form-control" maxlength="10" style="width:200px;" required />
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





