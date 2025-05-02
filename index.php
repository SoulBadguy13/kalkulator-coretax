
<head>
    <!-- SweetAlert2 CDN -->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KALKULATOR PPN</title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">


    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">


    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,300,100,700,900' rel='stylesheet'
          type='text/css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- inject:css -->
     <!-- Material Design Lite CSS -->
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
<!-- Material Design Lite JS -->
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
<!-- Material Icons -->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.10/dist/sweetalert2.min.css">
    <link rel="icon" type="image/png" href="<?= base_url('asset/dist/images/DB_16х16.png');?>">
    <link rel="stylesheet" href="<?= base_url('asset/dist/css/lib/getmdl-select.min.css');?>">
    <link rel="stylesheet" href="<?= base_url('asset/dist/css/lib/nv.d3.min.css');?>">
    <link rel="stylesheet" href="<?= base_url('asset/dist/css/application.min.css');?>">

    <style>
  /* Atur tata letak agar lebih rapi */
  body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        /* Membuat tabel lebih panjang dan scrollable */
    .tabel-card {
        height: 90vh; /* Mengatur tinggi tabel 80% dari viewport */
        display: flex;
        flex-direction: column;
    }

    .tabel-container {
        flex: 1; /* Mengisi ruang yang tersisa */
        overflow-y: auto; /* Scroll jika konten tabel terlalu panjang */
    }

    /* Membatasi tinggi kalkulator */
    .kalkulator-card {
        height: 450px; /* Tetapkan tinggi tetap untuk kalkulator */
        overflow-y: auto; /* Tambahkan scroll jika konten terlalu panjang */
    }

        h1 {
            text-align: center;
            padding-top: 20px;
        }

        /* Container utama form */
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 30px;
            background-color: white;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        /* Atur label dan input agar sejajar */
        .form-group {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
            align-items: center;
        }

        label {
            font-size: 16px;
            width: 30%;
        }

        input[type="text"] {
            width: 65%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        /* Mengatur button */
        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #0056b3;
        }

        /* Atur hasil perhitungan */
        .result-group {
            margin-top: 20px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        /* Set input readonly background */
        input[readonly] {
            background-color: #f0f0f0;
        }

          /* Dropdown container styling */
.notifications-dropdown {
    width: 300px; /* Atur lebar dropdown */
    max-height: 400px; /* Batas tinggi maksimal dropdown */
    overflow-y: auto; /* Tambahkan scroll jika konten melebihi tinggi */
    overflow-x: auto; /* Hilangkan scroll horizontal */
    padding: 5px; /* Berikan padding agar konten tidak terlalu rapat */
    list-style: none; /* Hilangkan bullet pada list */
    margin: 0; /* Hilangkan margin bawaan */
    background-color:#000; /* Latar belakang putih */
    flex-grow: 1; /* Teks mengambil ruang yang tersedia */
    border-radius: 8px; /* Sudut dropdown membulat */
    
    position: absolute; /* Posisi dropdown di luar aliran dokumen */
    
    right: 0; /* Posisi dropdown di sisi kanan */
    z-index: 1000; /* Pastikan dropdown berada di atas konten lainnya */
}

/* Styling notifikasi untuk memperbaiki tampilannya */
.mdl-list__item {
    padding: 10px 15px; /* Jarak dalam elemen */
    display: flex; /* Gunakan flex untuk tata letak */
    justify-content: space-between; /* Posisi kiri dan kanan */
    align-items: center; /* Rata tengah secara vertikal */
    border-bottom: 1px solid #ddd; /* Garis pembatas antar item */
    
}

.mdl-list__item:hover {
    background-color:rgba(241, 241, 241, 0.49); /* Efek hover, latar belakang sedikit lebih gelap */
}

/* Efek untuk menghapus item dengan transisi */
.fade-out {
    opacity: 1;
    transition: opacity 0.5s ease;
}

.fade-out.hidden {
    opacity: 0; /* Item menjadi transparan saat disembunyikan */
}

/* Styling waktu untuk notifikasi */
.time {
    font-size: 10px; /* Ukuran font lebih besar untuk waktu */
    font-weight: bold;
    color: #ddd; /* Warna abu-abu untuk waktu */
}

/* Tambahkan icon atau elemen tambahan dalam item notifikasi */
.mdl-list__item .icon {
    font-size: 20px; /* Ukuran ikon */
    color: #4CAF50; /* Warna ikon, hijau untuk konfirmasi */
    margin-right: 10px; /* Beri jarak antara ikon dan teks */
}

/* Responsif */
@media (max-width: 600px) {
    .notifications-dropdown {
        width: 250px; /* Lebar lebih kecil pada layar kecil */
    }
}

.list-notif{
    color:white;
    font-size: 12px;
}


        

</style></head>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.10/dist/sweetalert2.all.min.js"></script>

<div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
<header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
    <img src="<?= base_url('asset/img/logo-fix-putih.png'); ?>" alt="Logo" style="height: 40px; width:100px; margin-left:210px; padding:10px">
        <div class="mdl-layout-spacer"></div>
    <!-- Notifications Icon and Dropdown -->
<div class="material-icons mdl-badge mdl-badge--overlap mdl-button--icon notification" id="notification"
 data-badge="<?= isset($unread_count) ? $unread_count : 0; ?>">
notifications_none
</div>
<ul class="mdl-menu mdl-list mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right mdl-shadow--2dp notifications-dropdown"
for="notification">
<li class="mdl-list__item">
    <span><i class="material-icons">notifications</i></span>
     <span>You have <?= isset($unread_count) ? $unread_count : 0; ?> new notifications!</span>
</li>
<?php if (!empty($notifications)): ?>
    <?php foreach ($notifications as $notification): ?>
        <li onclick="window.location.href='<?= base_url('ticket/detail/' . $notification['ticket_id'] . '/' . $notification['id']); ?>'" class="mdl-menu__item mdl-list__item mdl-list__item--two-line list__item--border-top"  data-notification-id="<?= $notification['id']; ?>">  
        <span class="mdl-list__item-primary-content">      
        <a href="<?= base_url('ticket/detail/' . $notification['ticket_id']); ?>" class="list-notif">
        
                <span><?php echo $notification['message']; ?></span>
        </span>
            <span class="mdl-list__item-secondary-content">
                <span class="time label--transparent"></span>
                </a>
            </span>
        
        </li>
    <?php endforeach; ?>
    <span class="mdl-list__item-primary-content">
<button id="clear-notifications" class="mdl-button mdl-js-button mdl-js-ripple-effect">CLEAR NOTIFICATIONS</button>
</span>        
<?php else: ?>
    <li class="mdl-list__item">No new notifications.</li>
<?php endif; ?>
</ul>
        <div class="avatar-dropdown" id="icon">
            <span>Accounting</span>
        </div>
</header>

<div class="mdl-layout__drawer">
        <header>ACCOUNTING</header>
        <div class="scroll__wrapper" id="scroll__wrapper">
            <div class="scroller" id="scroller">
                <div class="scroll__container" id="scroll__container">
                    <nav class="mdl-navigation">
                        <a class="mdl-navigation__link" href="<?= site_url('');?>">
                            <i class="material-icons" role="presentation">dashboard</i>
                            Dashboard
                        </a>
                        <a class="mdl-navigation__link" href="<?= site_url('welcome');?>">
                            <i class="material-icons" role="presentation">local_atm</i>
                            Kalkulator Coretax
                        </a>
                        <a class="mdl-navigation__link" href="bbm.php">
                            <i class="material-icons" role="presentation">directions_car</i>
                            Kalkulator BBM
                        </a>
                       

                        <div class="mdl-layout-spacer"></div>
                        <hr>
                        
                    </nav>
                </div>
            </div>
            <div class='scroller__bar' id="scroller__bar"></div>
        </div>
    </div>
    
    <main class="mdl-layout__content">
    <div class="mdl-grid ui-tables">
        <!-- Kalkulator Coretax -->
        <div class="mdl-cell mdl-cell--6-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone kalkulator-card">
            <div class="mdl-card mdl-shadow--2dp">
                <div class="mdl-card__title" style="display: flex; justify-content: space-between; align-items: center;">
                    <h1 class="mdl-card__title-text">KALKULATOR CORETAX</h1>
                </div>
                <div class="mdl-card__supporting-text">
                    <!-- Form input untuk DPP -->
                    <label for="dpp">DPP :</label>
                    <input type="text" id="dpp" oninput="formatInputRupiah(event); hitung();" placeholder="Masukkan Nilai DPP" required>
                    <br><br>
                    
                    <!-- Hasil perhitungan -->
                    <div class="result-group">
                        <div class="form-group">
                            <label for="dppNilaiLain">DPP Nilai Lain (11/12)</label>
                            <input type="text" id="dppNilaiLain" readonly>
                        </div>
                        <div class="form-group">
                            <label for="ppn">PPN (12%)</label>
                            <input type="text" id="ppn" readonly>
                        </div>
                    </div>
                    <br>
                    
                    <!-- Tombol Clear -->
                    <button onclick="clearData()">Clear</button>
                </div>
            </div>
        </div>

        <!-- Tabel Data -->
        <div class="mdl-cell mdl-cell--6-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone tabel-card">
            <div class="mdl-card mdl-shadow--2dp">
                <div class="mdl-card__title">
                    <h1 class="mdl-card__title-text">DATA NPWP</h1>
                </div>
                <div class="mdl-card__supporting-text">
                    <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
                        <thead>
                            <tr>
                                <th class="mdl-data-table__cell--non-numeric">NO</th>
                                <th class="mdl-data-table__cell--non-numeric">CUSTOMER</th>
                                <th class="mdl-data-table__cell--non-numeric">NPWP 16 DIGIT</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="mdl-data-table__cell--non-numeric">1</td>
                                <td class="mdl-data-table__cell--non-numeric">PT ASTRA OTOPARTS TBK</td>
                                <td class="mdl-data-table__cell--non-numeric">0013452438054000</td>
                            </tr>
                            <tr>
                                <td class="mdl-data-table__cell--non-numeric">2</td>
                                <td class="mdl-data-table__cell--non-numeric">PT AUTOPLASTIK INDONESIA</td>
                                <td class="mdl-data-table__cell--non-numeric">0315892919433000</td>
                            </tr>
                            <tr>
                                <td class="mdl-data-table__cell--non-numeric">3</td>
                                <td class="mdl-data-table__cell--non-numeric">PT DASA WINDU AGUNG</td>
                                <td class="mdl-data-table__cell--non-numeric">0013008792431000</td>
                            </tr>
                            <tr>
                                <td class="mdl-data-table__cell--non-numeric">4</td>
                                <td class="mdl-data-table__cell--non-numeric">PT DHARMA ELECTRINDO MANUFACTURING</td>
                                <td class="mdl-data-table__cell--non-numeric">0021987649431000</td>
                            </tr>
                            <tr>
                                <td class="mdl-data-table__cell--non-numeric">5</td>
                                <td class="mdl-data-table__cell--non-numeric">PT FRINA LESTARI NUSANTARA</td>
                                <td class="mdl-data-table__cell--non-numeric">0020110763431000</td>
                            </tr>
                            <tr>
                                <td class="mdl-data-table__cell--non-numeric">6</td>
                                <td class="mdl-data-table__cell--non-numeric">PT INDONESIA THAI SUMMIT PLASTECH</td>
                                <td class="mdl-data-table__cell--non-numeric">0742873789408000</td>
                            </tr>
                            <tr>
                                <td class="mdl-data-table__cell--non-numeric">7</td>
                                <td class="mdl-data-table__cell--non-numeric">PT INDUSTRI CHARGED MOBILITAS</td>
                                <td class="mdl-data-table__cell--non-numeric">0639880921451000</td>
                            </tr>
                            <tr>
                                <td class="mdl-data-table__cell--non-numeric">8</td>
                                <td class="mdl-data-table__cell--non-numeric">PT ITORI KREASINDO PERKASA</td>
                                <td class="mdl-data-table__cell--non-numeric">0862573094414000</td>
                            </tr>
                            <tr>
                                <td class="mdl-data-table__cell--non-numeric">9</td>
                                <td class="mdl-data-table__cell--non-numeric">PT KHARISMA MULIA MANDIRI</td>
                                <td class="mdl-data-table__cell--non-numeric">0021211073031000</td>
                            </tr>
                            <tr>
                                <td class="mdl-data-table__cell--non-numeric">10</td>
                                <td class="mdl-data-table__cell--non-numeric">PT MORIROKU TECHNOLOGY INDONESIA</td>
                                <td class="mdl-data-table__cell--non-numeric">0315591339433000</td>
                            </tr>
                            <tr>
                                <td class="mdl-data-table__cell--non-numeric">11</td>
                                <td class="mdl-data-table__cell--non-numeric">PT MULTI USAGE INDONESIA</td>
                                <td class="mdl-data-table__cell--non-numeric">0018825927052000</td>
                            </tr>
                            <tr>
                                <td class="mdl-data-table__cell--non-numeric">12</td>
                                <td class="mdl-data-table__cell--non-numeric">PT NISSEN CHEMITEC INDONESIA</td>
                                <td class="mdl-data-table__cell--non-numeric">0315275537433000</td>
                            </tr>
                            <tr>
                                <td class="mdl-data-table__cell--non-numeric">13</td>
                                <td class="mdl-data-table__cell--non-numeric">PT RESIN PLATING TECHNOLOGY</td>
                                <td class="mdl-data-table__cell--non-numeric">0317121465413000</td>
                            </tr>
                            <tr>
                                <td class="mdl-data-table__cell--non-numeric">14</td>
                                <td class="mdl-data-table__cell--non-numeric">PT SARANA KARYA MASINDO</td>
                                <td class="mdl-data-table__cell--non-numeric">0032629982048000</td>
                            </tr>
                            <tr>
                                <td class="mdl-data-table__cell--non-numeric">15</td>
                                <td class="mdl-data-table__cell--non-numeric">PT SCHLEMMER AUTOMOTIVE INDONESIA</td>
                                <td class="mdl-data-table__cell--non-numeric">0820887982413000</td>
                            </tr>
                            <tr>
                                <td class="mdl-data-table__cell--non-numeric">16</td>
                                <td class="mdl-data-table__cell--non-numeric">PT SUMBER MAS AUTORINDO</td>
                                <td class="mdl-data-table__cell--non-numeric">0024923047004000</td>
                            </tr>
                            <tr>
                                <td class="mdl-data-table__cell--non-numeric">17</td>
                                <td class="mdl-data-table__cell--non-numeric">PT SURYA TOTO INDONESIA TBK</td>
                                <td class="mdl-data-table__cell--non-numeric">0010002392054000</td>
                            </tr>
                            <tr>
                                <td class="mdl-data-table__cell--non-numeric">18</td>
                                <td class="mdl-data-table__cell--non-numeric">PT TAMANO INDONESIA</td>
                                <td class="mdl-data-table__cell--non-numeric">0312830342433000</td>
                            </tr>
                            <tr>
                                <td class="mdl-data-table__cell--non-numeric">19</td>
                                <td class="mdl-data-table__cell--non-numeric">PT TENMA INDONESIA</td>
                                <td class="mdl-data-table__cell--non-numeric">0010813392052000</td>
                            </tr>
                            <tr>
                                <td class="mdl-data-table__cell--non-numeric">20</td>
                                <td class="mdl-data-table__cell--non-numeric">PT TRI MENTARI NIAGA</td>
                                <td class="mdl-data-table__cell--non-numeric">0020254827431000</td>
                            </tr>
                            <tr>
                                <td class="mdl-data-table__cell--non-numeric">21</td>
                                <td class="mdl-data-table__cell--non-numeric">PT USRA TAMPI INDONESIA</td>
                                <td class="mdl-data-table__cell--non-numeric">0010847283431000</td>
                            </tr>
                            <tr>
                                <td class="mdl-data-table__cell--non-numeric">22</td>
                                <td class="mdl-data-table__cell--non-numeric">PT WERATE JAYA IND</td>
                                <td class="mdl-data-table__cell--non-numeric">0820813327413000</td>
                            </tr>
                            <tr>
                                <td class="mdl-data-table__cell--non-numeric">23</td>
                                <td class="mdl-data-table__cell--non-numeric">PT WHETRON JAYA INDONESIA</td>
                                <td class="mdl-data-table__cell--non-numeric">0826451320413000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
</div>


<!-- inject:js -->
<script src="<?= base_url('asset/dist/js/d3.min.js');?>"></script>
<script src="<?= base_url('asset/dist/js/getmdl-select.min.js');?>"></script>
<script src="<?= base_url('asset/dist/js/material.min.js');?>"></script>
<script src="<?= base_url('asset/dist/js/nv.d3.min.js');?>"></script>
<script src="<?= base_url('asset/dist/js/layout/layout.min.js');?>"></script>
<script src="<?= base_url('asset/dist/js/scroll/scroll.min.js');?>"></script>
<script src="<?= base_url('asset/dist/js/widgets/charts/discreteBarChart.min.js');?>"></script>
<script src="<?= base_url('asset/dist/js/widgets/charts/linePlusBarChart.min.js');?>"></script>
<script src="<?= base_url('asset/dist/js/widgets/charts/stackedBarChart.min.js');?>"></script>
<script src="<?= base_url('asset/dist/js/widgets/employer-form/employer-form.min.js');?>"></script>
<script src="<?= base_url('asset/dist/js/widgets/line-chart/line-charts-nvd3.min.js');?>"></script>
<script src="<?= base_url('asset/dist/js/widgets/map/maps.min.js');?>"></script>
<script src="<?= base_url('asset/dist/js/widgets/pie-chart/pie-charts-nvd3.min.js');?>"></script>
<script src="<?= base_url('asset/dist/js/widgets/table/table.min.js');?>"></script>
<script src="<?= base_url('asset/dist/js/widgets/todo/todo.min.js');?>"></script>



<script>

// Fungsi untuk memformat angka menjadi format umum (koma untuk ribuan, titik untuk desimal)
function formatRupiah(angka) {
    return angka
        .toFixed(2) // Pastikan dua desimal
        .replace(/\d(?=(\d{3})+\.)/g, '$&,'); // Tambahkan koma setiap tiga digit sebelum desimal
}

// Fungsi untuk memformat angka menjadi format khusus (titik untuk ribuan, koma untuk desimal)
function formatRupiahKhusus(angka) {
    // Format angka dengan titik sebagai pemisah ribuan
    let formatted = angka
        .toFixed(2) // Pastikan dua desimal
        .replace(/\B(?=(\d{3})+(?!\d))/g, '.'); // Tambahkan titik setiap tiga digit sebelum desimal

    // Ganti titik terakhir (desimal) menjadi koma
    const lastDotIndex = formatted.lastIndexOf('.');
    if (lastDotIndex !== -1) {
        formatted = formatted.substring(0, lastDotIndex) + ',' + formatted.substring(lastDotIndex + 1);
    }

    return formatted;
}

// Fungsi untuk memformat input agar sesuai dengan format Rupiah
function formatInputRupiah(event) {
    var input = event.target;
    var value = input.value;

    // Hapus semua karakter selain angka dan titik
    value = value.replace(/[^0-9.]/g, '');

    // Pisahkan angka dan bagian desimal
    var parts = value.split('.');
    var number = parts[0].replace(/,/g, '').replace(/\B(?=(\d{3})+(?!\d))/g, ','); // Format ribuan
    var formattedValue = number;

    // Tambahkan bagian desimal jika ada
    if (parts[1]) {
        formattedValue += '.' + parts[1].substring(0, 2); // Batasi dua angka desimal
    }

    input.value = formattedValue;
}

// Fungsi untuk melakukan perhitungan
function hitung() {
    // Ambil nilai DPP dari input, ganti koma dengan kosong
    var dpp = document.getElementById("dpp").value.replace(/,/g, '');

    // Konversi ke angka float
    dpp = parseFloat(dpp);


    // Hitung DPP nilai lain
    var dppNilaiLain = (11 / 12) * dpp;

    // Hitung PPN
    var ppn = 0.12 * dppNilaiLain;

    // Hitung Total
    var total = dpp + ppn;

    // Format hasil perhitungan dan tampilkan
    document.getElementById("dppNilaiLain").value = formatRupiahKhusus(dppNilaiLain); // Format khusus
    document.getElementById("ppn").value = formatRupiahKhusus(ppn); // Format umum
    document.getElementById("total").value = formatRupiah(total); // Format umum
}

// Fungsi untuk menghapus data perhitungan
function clearData() {
    document.getElementById("dpp").value = "";
    document.getElementById("dppNilaiLain").value = "";
    document.getElementById("ppn").value = "";
    document.getElementById("total").value = "";
}





    </script>
    

<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>



<!-- endinject -->