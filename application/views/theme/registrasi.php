<!DOCTYPE html>
<html>
<head>
    <title>Contoh form pendaftaran</title>
</head>
<body>
     <div class="content">
        <?php 
            if(isset ($_POST['nik'])){
                $nama = $_POST['nama'];
                $jk = $_POST['jk'];
                $tempat = $_POST['tempat'];
                $tanggal = $_POST['tanggal'];
                $alamat = $_POST['alamat'];
                $agama = $_POST['agama'];
            }




         ?>

   <center> <h1>Pendaftaran</h1>
    <hr width="20%" align="left">
    <p>Isilah seluruh kolom registrasi dengan <br />sebenar-benarnya.</p>
    <form action ="<?=base_url()?>/home/form/" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td valign="top">NIK</td>
            <td><input type="number" name="nik" placeholder="Masukan NIK anda"></td>
        </tr>
    	<tr>
    	    <td valign="top">Nama</td>
    	    <td><input type="text" name="nama" placeholder="Masukan nama anda"></td>
    	</tr>
    	<tr>
    	    <td valign="top">Username</td>
    	    <td><input type="text" name="username" placeholder="Masukan username"></td>
    	</tr>
    	<tr>
               <td valign="top">Password</td>
               <td><input type="password" name="password" placeholder="Password"></td>
    	</tr>
    	<tr>
    	    <td valign="top">Email</td>
    	    <td><input type="email" name="email" placeholder="Masukan email"></td>
    	</tr>
    	<tr>
    	    <td valign="top">Jenis Kelamin</td>
    	    <td>
    	    	<input type="radio" name="jk" value="pria">Pria<br/>
    	    	<input type="radio" name="jk" value="perempuan">Perempuan
    	    </td>
    	</tr>
        <tr>
            <td valign="top">Tempat Lahir</td>
            <td><input type="text" name="tempat" placeholder="Masukkan Tempat Lahir"></td>
        </tr>
    	<tr>
    	    <td valign="top">Tanggal Lahir</td>
    	    <td>
    	       <input type="date" name="tanggal">
    	    </td>
    	</tr>
    	<tr>
    	    <td valign="top">Alamat</td>
    	    <td><input type="text" name="alamat" placeholder="Alamat tempat tinggal"></td>
    	</tr>
    	<tr>
    	    <td valign="top">Agama</td>
    	    <td>
    	        <select name="agama">
    	            <option>Islam</option>
		    <option>Kristen</option>
		    <option>Hindu</option>
		    <option>Katolik</option>
		    <option>Protestan</option>
		    <option>Budha</option>
    	        </select>
    	    </td>
    	</tr>
    	<tr>
    	    <td colspan="2"><input type="submit" value="Simpan"></td>
    	</tr></center>
    </div>
    </table>
</body>
</html>