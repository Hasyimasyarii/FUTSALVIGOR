 <div class='container'>
        <div class='page-section'>
            <div class='row'>
                <div class='col-md-12 col-lg-9'>
                    <div class='page-section padding-top-none'>
                        <div class='s-container'>
                            <h1 class='text-display-1 margin-top-none'>Info Lapangan Vigor Pontianak</h1>
                            <ul>Lapangan futsal ini berlokasi di Parit Tokaya, South Pontianak, Pontianak, West Kalimantan 78113

Jika teman-teman ingin me-review lapangan futsal ini, silahkan gunakan formulir review dibawah. Dan jangan lupa tambahkan foto pendukung.

Untuk melihat daftar lapangan futsal lainnya di Pontianak, silahkan lihat daftar lengkap lapangan futsal di Pontianak

Salam Futsal!

Catatan :
Berikut adalah informasi yang kami dapat secara online. Jika terjadi kesalahan dalam informasi yang diberikan, mohon kirim email ke info[at]lapanganfutsal.id atau kontak formulir disini agar diperbaiki oleh tim redaksi.

Jika kamu pemilik Vigor Sport Center, kamu bisa memberi informasi tambahan untuk customer kamu (seperti harga, jam buka, fasilitas lapangan, dan promosi) di halaman ini. Silahkan hubungi kami langsung melalui info[at]lapanganfutsal.id atau kontak formulir disini untuk informasi lebih lanjut.</ul>

                        </div>
                        <br/>

                        <?php
                        $SQL=mysql_query("SELECT * FROM tlapangan ORDER BY noLapangan ASC");
                        while($_data=mysql_fetch_array($SQL)){
                            echo"
                             <h1 class='text-display-1 margin-top-none'>Lapangan Nomor : $_data[noLapangan]</h1>
                             <img class='paragraph-inline width-280 clearfix-xs width-100pc-xs' src='gambar/lapangan_img/height/$_data[gambarLapangan]' alt='image' /> 
                             <p>$_data[deskripsi]</p>
                             <br>

                            ";



                        }


                        ?>
                           
                      
                    </div>
                                                       
                </div>
               
            </div>
        </div>
    </div>