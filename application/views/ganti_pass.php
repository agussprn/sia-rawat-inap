<div class="box flat no-margin no-shadow samping-kanan" style="padding:5px;border:1px solid #eee">
<div class="box flat no-margin no-shadow bg-1">
<div class="box-body">
	<b><i class="fa fa-user  fa-fw"></i> EDIT DATA PETUGAS</b>
</div>
</div>

 

<br>

<div class="box-body">
<?=$gagal;?>
<form action="<?=base_url();?>gantipass/edit/<?=$id_petugas;?>/simpan" method="post" >
  
    <table class="table">
     
	  <tr>
	  <td width="150px;">Nama Petugas</td>
        <td>
            <input name="nama" type="text" class="form-control" maxlength="20" required style="width:200px;" value="<?=$nama;?>"/>
        </td>
     </tr>
	 <tr>
        <td>Jabatan</td>
        <td>
		<?php
		if ($_SESSION['jabatan']=="CS"){
		$dis="disabled";
		}else{
		$dis="";
		}
		?>
         <select name="jabatan" class="form-control" style="width:200px;" required <?=$dis;?>>
		 <?php
		 if ($jabatan=="ADMIN"){
		 $ad="selected";
		 $cs="";
		 }else if($jabatan=="CS"){
		 $cs="selected";
		 $ad="";
		 }
		 
		 ?>
		 <option value="ADMIN" <?=$ad;?>>ADMIN</option>
		 <option value="CS" <?=$cs;?>>CS</option>
		 
		 </select>
        </td>
      </tr>
      <tr>
        <td>Username</td>
        <td>
         <input name="username" type="text" class="form-control" maxlength="10" style="width:200px;" required value="<?=$username;?>" />
        </td>
      </tr>  
	 <?php
	 if ($_SESSION['id_petugas']==$id_petugas){
	 ?>
	 <tr>
        <td>Password</td>
        <td>
         <input name="password" type="text" class="form-control" maxlength="10" style="width:200px;" required value="<?=$password;?>" />
        </td>
      </tr>
	 
	 <?php
	 }
     ?>
		
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




