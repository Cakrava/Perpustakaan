

                                    <html>

<head>
    <title>Print Document</title>
</head>

<body>
    <div class="box-header">
        <center>
            <h3 class="box-title">Laporan Pengembalian</h3>
        </center>
    </div>
    <table border="1" width="90%" style="border-collapse:collapse;" align="center">
        <tr class="tableheader">
            <th>No Peminjaman</th>
            <th>Tanggal Peminjaman</th>
            <th>Nama Peminjam</th>
            <th>Alamat</th>
            <th>Nomor</th>
      
        </tr>
        <?php
        // Load file koneksi.php
        include "koneksi.php";
        if (isset($_POST['cetak'])) {
            $bulan = $_POST['bulan'];
            $tahun = $_POST['tahun'];
            //$query = ""; // Tampilkan semua data
            $sql = mysql_query("SELECT * from bukukembali where month(tglkeluar)='$bulan' and year(tglkeluar)='$tahun'");
            // Eksekusi/Jalankan query dari variabel $query
            if ($sql > 0) { // Jika jumlah data lebih dari 0 (Berarti jika data ada)
                while ($data = mysql_fetch_array($sql)) { // Ambil semua data dari hasil eksekusi $sql
                    echo "<tr>";
                    echo "<td>" . $data['nokeluar'] . "</td>";
                    echo "<td>" . $data['tglkeluar'] . "</td>";
                    echo "<td>" . $data['peminjam'] . "</td>";
                    $row = mysql_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
                    echo "<td>" . $data['alamat'] . "</td>";
                    echo "<td>" . $data['nomor'] . "</td>";
            
                    echo "</tr>";
                }
            } else { // Jika data tidak ada
                echo "<tr><td colspan='4'>Data tidak ada</td></tr>";
            }
        ?>
        <?php
        }
        ?>
    </table>
    <script>
        window.load = print_d();

        function print_d() {
            window.print();
        }
    </script>
    <br />
    <br />
    <div class="box-footer">
        <h5 class="box-title" align="left">Padang,________________________
            <br />
            <br /><br />
            <br /><br />
            <br /><br />
            <br /> Joyo Kilat Moko
        </h5>
    </div>



    <center><lable>---------------------------------------------------------------------------------<lable></center>
                                    <center><lable>Perpustakaan Nasional Meh Library Padang<lable></center>



