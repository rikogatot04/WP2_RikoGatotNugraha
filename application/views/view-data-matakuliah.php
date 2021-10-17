<html>

<head>
    <title> Data Matakuliah Riko</title> 

</head> 
<body> 
<br><br><br>
    <center> 
        <table> 
            <tr> 
                <th colspan="3"> 
                    Tampil Data Mata Kuliah 
                </th> 
            </tr> 
            <tr> 
                <td colspan="3"> 
                    <hr> 
                </td> 
            </tr> 
            <tr> 
                <th>Kode Mata Kuliah</th> 
                <th>:</th> 
                <td> 
                    <?= $kode; ?> 
                </td> 
            </tr> 
            <tr>
            <tr> 
                <td>Nama Mata Kuliah</td> 
                <td>:</td> 
                <td> 
                    <?= $nama; ?> 
                </td> 
            </tr> 
            <tr> 
                <td>Kelas</td> 
                <td>:</td> 
                <td> 
                    <?= $kelas; ?> 
                </td> 
            </tr> 
            <tr> 
                <td>SKS</td> 
                <td>:</td> 
                <td> 
                    <?= $sks; ?> 
                </td> 
            </tr> 
            <tr> 
                <td colspan="3" align="center"> 
                    <a href="<?= base_url('matakuliah'); 
                ?>">Kembali</a> 
                </td>
                </tr> 
            </table> 
        </center> 
</body> 

</html>