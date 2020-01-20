  <html> 
<head>
    <title>FORM PELAPORAN</title>
</head>
     <div class="content">

   <center> <h1>LAPOR DISINI</h1>
    <hr width="20%" align="left">
    <form action ="<?=base_url()?>home/melapor" method="post">
    <table>
        <tr>
        <td></td>
        <td><textarea name="message" rows="10" cols="30">Ketik laporan disini.</textarea></td>
  </tr>
</table>
  <div class="dropdown">
            <td valign="top">Pilih kategori laporan</td>
            <td>
                <select name="kategori">
            <option>Sosial</option>
            <option>Politik</option>
            <option>Ekonomi</option>
            <option>Budaya</option>
            <option>Umum</option>
                </select>
            </td>
        </div>
            <div class="checkbox checkbox-primary checkbox-circle checkbox-inline">
                    <input id="Rahasia" class="styled" type="checkbox" name="is_secret" data-toggle="tooltip" data-placement="top" data-title="Laporan Anda tidak dapat dilihat publik" data-original-title-title="">
            <input id="Anonim" class="styled" type="checkbox" name="is_secret" data-toggle="tooltip" data-placement="top" data-title="Nama Anda tidak dapat dilihat publik" data-original-title="" title="">
            <div>
                    <label for="Rahasia">
                        Rahasia
                    </label>
                </div>
                <div>
                     <label for="Anonim">
                        Anonim
                    </label>
                </div>
</div>  
    <input type="submit" name="submit" value="LAPOR!">
</tr>
</body>
</html>