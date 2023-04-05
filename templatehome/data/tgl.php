<div class="container">
        <div class="card">
            <div class="card-header text-center">Program Menentukan Hari, Bulan, Tahun</div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="mb-3">
                        <input type="date" class="form-control" name="tgl" required>
                    </div>
                    <div class="row g-0">
                        <div class="col">
                            <div class="mb-3">
                                <input type="number" name="jml" class="form-control" autocomplete="off" placeholder="ex: 30" min="1" required>
                            </div>
                        </div>
                        <div class="col">
                            <select name="pil1" class="form-select" required>
                                <option value="">-Pilih-</option>
                                <option value="hari">Hari</option>
                                <option value="bulan">Bulan</option>
                                <option value="tahun">Tahun</option>
                            </select>
                        </div>
                        <div class="col">
                            <select name="pil2" class="form-select" required>
                                <option value="">-Pilih-</option>
                                <option value="datang">Masa Datang</option>
                                <option value="lampau">Masa Lampau</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" name="hitung" class="btn btn-primary">Hitung</button>
                </form>
            </div>
        </div>
    </div>












    
<?php
if(isset($_POST['hitung'])){
    $tgl = $_POST['tgl'];
    $jml = $_POST['jml'];
    $pil1 = $_POST['pil1'];
    $pil2 = $_POST['pil2'];

    $nama_hari = array(
        'Sunday' => 'Minggu',
        'Monday' => 'Senin',
        'Tuesday' => 'Selasa',
        'Wednesday' => 'Rabu',
        'Thursday' => 'Kamis',
        'Friday' => 'Jumat',
        'Saturday' => 'Sabtu'
    );
    $hari = date('l', strtotime($tgl));
    $date = date('d', strtotime($tgl));
    $bln = date('M', strtotime($tgl));
    $thn = date('Y', strtotime($tgl));


    if($pil1 == 'hari' && $pil2 == 'datang'){
        $htng = date('d-M-Y', strtotime('+'.$jml.'day', strtotime($tgl)));
        $hasil = date('l', strtotime($htng));
        echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
            <b>'.$nama_hari[$hari].', '.$date.'-'.$bln.'-'.$thn.'</b><br>
            <b>'.$jml.'</b> Hari Yang Akan Datang Adalah <br>
            <b>'.$nama_hari[$hasil].', '.$htng.'</b>
    
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
    }elseif($pil1 == 'hari' && $pil2 == 'lampau'){
        $htng = date('d-M-Y', strtotime('-'.$jml.'day', strtotime($tgl)));
        $hasil = date('l', strtotime($htng));
        echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
            <b>'.$nama_hari[$hari].', '.$date.'-'.$bln.'-'.$thn.'</b><br>
            <b>'.$jml.'</b> Hari Yang Lalu Adalah <br>
            <b>'.$nama_hari[$hasil].', '.$htng.'</b>
    
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }elseif($pil1 == 'bulan' && $pil2 == 'datang'){
        $htng = date('d-M-Y', strtotime('+'.$jml.'month', strtotime($tgl)));
        $hasil = date('l', strtotime($htng));
        echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
            <b>'.$nama_hari[$hari].', '.$date.'-'.$bln.'-'.$thn.'</b><br>
            <b>'.$jml.'</b> Bulan Yang Akan Datang Adalah <br>
            <b>'.$nama_hari[$hasil].', '.$htng.'</b>
    
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }elseif($pil1 == 'bulan' && $pil2 == 'lampau'){
        $htng = date('d-M-Y', strtotime('-'.$jml.'month', strtotime($tgl)));
        $hasil = date('l', strtotime($htng));
        echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
            <b>'.$nama_hari[$hari].', '.$date.'-'.$bln.'-'.$thn.'</b><br>
            <b>'.$jml.'</b> Bulan Yang Lalu Adalah <br>
            <b>'.$nama_hari[$hasil].', '.$htng.'</b>
    
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }elseif($pil1 == 'tahun' && $pil2 == 'datang'){
        $htng = date('d-M-Y', strtotime('+'.$jml.'year', strtotime($tgl)));
        $hasil = date('l', strtotime($htng));
        echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
            <b><b>'.$nama_hari[$hari].', '.$date.'-'.$bln.'-'.$thn.'</b><br>
            <b><b>'.$jml.'</b> Tahun Yang Akan Datang Adalah <br>
            <b><b>'.$nama_hari[$hasil].', '.$htng.'</b>
    
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }elseif($pil1 == 'tahun' && $pil2 == 'lampau'){
        $htng = date('d-M-Y', strtotime('-'.$jml.'year', strtotime($tgl)));
        $hasil = date('l', strtotime($htng));
        echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
            <b>'.$nama_hari[$hari].', '.$date.'-'.$bln.'-'.$thn.'</b><br>
            <b>'.$jml.'</b> Tahun Yang Lalu Adalah <br>
            <b>'.$nama_hari[$hasil].', '.$htng.'</b>
    
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
}
?>