<!DOCTYPE html>
 <html>
 <head>
     <title></title>
 </head>
 <body>
    <div class="content">
        <h4> FORM REGISTRASI DESA DIGITAL QUICKRESPONSE</h4>
 <table border='1'>
        <tr>
            <th>Nik</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Password</th>
            <th>Email</th>
            <th>Jenis kelamin</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Agama</th>
            <th>Aksi</th>
        </tr>
        <tr>
            <td> 1234456677</td>
            <td> Sabila</td>
            <td> bila123</td>
            <td> hariselasa</td>
            <td> bila@gmail.com</td>
            <td> perempuan </td>
            <td> pemalang</td>
            <td> 04-10-1999</td>
            <td> sukabirus</td>
            <td> islam</td>
            <td>edit</td> 
            <a href="<?=base_url()?>/home/ubah"></a>
        </td>

        </tr>
        <tr>
        <td><?php if (isset($nik)){echo $nik;}?></td>
        <td><?php if (isset($nama)){echo $nama;}?></td>
        <td><?php if (isset($username)){echo $username;}?></td>
        <td><?php if (isset($password)){echo $password;}?></td>
        <td><?php if (isset($email)){echo $email;}?></td>
        <td><?php if (isset($jk)){echo $jk;}?></td>
        <td><?php if (isset($tempat)){echo $tempat;}?></td>
        <td><?php if (isset($tanggal)){echo $tanggal;}?></td>
        <td><?php if (isset($alamat)){echo $alamat;}?></td>
        <td><?php if (isset($agama)){echo $agama;}?></td>
        <td>
          <a href="<?=base_url()?>/home/ubah">Edit </a>
        </td>
    </tr>
</table>
</div>
</body>
</html>