<html>

<head>
    <title>Transaksi</title> 

</head> 
<body> 
<br><br><br><br><br>
    <center> 
        <table bgcolor="blue" width='1000px'> 
            <tr> 
                <th colspan="3"> 
                    <h1>Toko sepatu<h1>
                </th> 
            </tr> 
            <tr> 
                <td colspan="3"> 
                    <hr> 
                </td> 
            </tr> 
            <tr> 
                <th>No telpon</th> 
                <th>:</th> 
                <td> 
                    <?= $notelp; ?> 
                </td> 
            </tr> 
            <tr>
            <tr> 
                <td>Merek sepatu</td> 
                <td>:</td> 
                <td> 
                    <?= $merek; ?> 
                </td> 
            </tr> 
            <tr> 
                <td>Ukuran sepatu</td> 
                <td>:</td> 
                <td> 
                    <?= $ukuran; ?> 
                </td> 
            </tr> 
            <tr> 
                <td>harga</td> 
                <td>:</td> 
                <td> 
                    <?= $harga; ?> 
                </td> 
            </tr> 
            <tr> 
                <td colspan="3" align="center"> 
                    <a href="<?= base_url('tokosepatu'); 
                ?>">Kembali</a> 
                </td>
                </tr> 
                <br>
            </table> 
        </center> 
</body> 

</html> 