<html> 
    <head> 
        <title>Form Input tokosepatu</title> 
    </head> 

<body>
    <br><br><br><br><br>
    <center> 
        <?php echo validation_errors(); ?>
        <form action="<?= base_url('tokosepatu/cetak'); 
        ?>" method="post"> 
            <table bgcolor="blue" width='1000px'> 
                <tr> 
                    <th colspan="3"> 
                        <h1>toko sepatu</h1>
                    </th> 
                </tr>
                <tr> 
                    <td colspan="3"> 
                        <hr> 
                    </td> 
                </tr> 
                <tr> 
                    <th>Nama pembeli</th> 
                    <th>:</th> 
                    <td> 
                        <input type="text" name="nama" id="nama"> 
                    </td> 
                </tr> 
                <tr> 
                    <th>No telpon</th> 
                    <td>:</td> 
                    <td> 
                        <input type="text" name="notelp" id="notelp"> 
                    </td> 
                </tr> 
                <tr> 
                    <th>merek sepatu</th> 
                    <td>:</td> 
                    <td> 
                      <select name="merek" id="merek"> 
                        <option value=""> Pilih Merk sepatu </option> 
                        <option value="Nike">Nike</option> 
                        <option value="Adidas">Adidas</option> 
                        <option value="Kickers">Kickers</option> 
                        <option value="Eiger">Eiger</option> 
                        <option value="Bucherri">Bucherri</option> 
                    </td> 
                </tr> 
                <tr>
                    <th>ukuran sepatu</th> 
                    <td>:</td> 
                    <td> 
                        <select name="ukuran" id="ukuran">
                    <option value=""> Pilih ukuran sepatu </option> 
                            <option value="32">32</option> 
                            <option value="33">33</option> 
                            <option value="34">34</option> 
                            <option value="35">35</option> 
                            <option value="36">36</option> 
                            <option value="37">37</option> 
                            <option value="38">38</option> 
                            <option value="39">39</option> 
                            <option value="40">40</option> 
                            <option value="41">41</option> 
                            <option value="42">42</option> 
                            <option value="43">43</option> 
                            <option value="44">44</option> 
                        </select>    
                    </td> 
                </tr> 
                <tr> 
                    <td colspan="3" align="center"> 
                        <input type="submit" value="Submit"> 
                    </td> 
                </tr> 
            </table> 
        </form> 
    </center> 

</body> 

</html> 