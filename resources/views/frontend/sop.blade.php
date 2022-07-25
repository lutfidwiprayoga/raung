@extends('frontend.layout.template')
@section('title', 'SOP - Booking Online Gunung Raung')

@section('content')
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""
                style="transform: translateY(-41.8581px);"></div>
            <div class="container">
                <div class="banner_content text-center">
                    <h2 style="color: #fff">SOP</h2>
                    <div class="page_link">
                        <a href="/">Home</a>
                        <a href="#">-</a>
                        <a href="#" style="color: #17B794">SOP</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="gtco-services gtco-section">
        <div class="gtco-container">
            <div class="wrapper wrapper-content">
                <div class="row animated fadeInRight scroll">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>PENDAFTARAN PENDAKIAN</h5>
                            </div>
                            <div class="ibox-content" id="ibox-content" style="background-color: #ffffff;font-size: 14px">
                                <p>Pendaftaran pendakian di Gunung Raung Via Kalibaru dilakukan dengan sistem pendaftaran
                                    online, dengan ketentuan sebagai berikut :</p>
                                <div class="well wells">
                                    <span style="color: red"> Waktu Pelayanan verifikasi data Booking dilakukan pada hari
                                        Senin s/d Jumat jam 07.00 s/d 16.00 WIB & Sabtu s/d Minggu jam 08.00 s/d 15.00 WIB.
                                        Proses maksimal 1x24 jam (hari kerja) setelah melakukan registrasi.</span>
                                </div>
                                <div class="well wells">
                                    <span style="color: red">Waktu pelayanan perizinan pendakian pada setiap pos pendakian
                                        07.00 - 19.00 WIB.</span>
                                </div>
                                <div class="well wells">
                                    <span style="color: red">Pendaftaran dilakukan maksimal 2 (dua) hari sebelum melakukan
                                        pendakian (H-2).</span>
                                </div>
                                <div class="well wells">
                                    <span style="color: red">Batas lama pendakian yang diizinkan maksimal adalah 3 (Tiga)
                                        hari dan 2 (dua) malam.</span>
                                </div>
                                <div class="well wells">
                                    <span style="color: red">Pendakian dapat dilaksanakan dengan minimal jumlah rombongan
                                        pendaki 4 orang, diketuai oleh 1 (satu) orang yang bertanggung jawab terhadap
                                        administrasi pendaki dan keselamatan anggota kelompoknya dan setiap kelompok wajib
                                        memiliki guide</span>
                                </div>
                                <div class="well wells">
                                    Setiap pendaki wajib menggunakan jasa Tour Guide/Pemandu (Guide/Pemandu minimal sudah
                                    melakukan pendakian di MT.Raung sebanyak tiga kali). Ketentuan ini berlaku bagi pendaki
                                    pemula maupun pendaki lama.
                                </div>
                                <div class="well wells">
                                    Setiap pendaki beserta tour guide/pemandu wajib melakukan registrasi dan lapor diri
                                    di Sekretariat Pendakian Mt.Raung dengan menyertakan form pendakian yang telah diisi dan
                                    disetujui.
                                </div>
                                <div class="well wells">
                                    Setiap pendaki wajib menyerahkan fotocopy KTP, Passport atau Kartu Identitas yang
                                    lain beserta dengan yang asli (berlaku untuk semua peserta dan tour guide/pemandu).
                                </div>
                                <div class="well wells">
                                    Pendaftaran diberlakukan bagi calon pendaki, baik lokal maupun <s>mancanegara</s>.
                                </div>
                                <div class="well wells">
                                    Pendaftaran dilakukan secara online.
                                </div>
                                <div class="well wells">
                                    Pendaftaran dilakukan dengan mengisi formulir yang bisa diakses dari website resmi
                                    Booking Online Gunung Raung Via Kalibaru : https://raung.raungkalibaru.or.id
                                    dengan mengikuti alur pendaftaran.
                                </div>
                                <div class="well wells">
                                    <span>Surat Izin Masuk Kawasan Konservasi (e-Simaksi) diberikan pada kelompok dengan
                                        jumlah anggota minimal 4, 1 orang sebagai ketua kelompok.</span>
                                </div>
                                <div class="well wells">
                                    Konfirmasi pendaftaran akan diterima calon pendaki melalui email. Pastikan alamat email
                                    benar karena konfirmasi pendaftaran pendakian akan dikirim ke alamat email yang anda
                                    gunakan ketika mendaftar. Apabila tidak ada pesan pemberitahuan pada kotak masuk gmail
                                    harap periksa pada kotak SPAM.
                                </div>
                                <div class="well wells">
                                    Calon pendaki diizinkan melakukan penggantian anggota maksimal 1 (satu) kali, 1 (satu)
                                    orang, dengan batasan waktu 3 (tiga) hari (H-3) sebelum keberangkatan. Penggantian tidak
                                    untuk ketua kelompok.
                                </div>
                                <div class="well wells">
                                    <strong>BARANG SIAPA MELAKUKAN TINDAK PIDANA PENIPUAN/PEMALSUAN TIDAK AKAN DIBERIKAN
                                        IZIN UNTUK MENDAKI ATAU BERPARIWISATA KE WILAYAH GUNUNG RAUNG VIA KALIBARU (BLACK
                                        LIST)</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>TARIF DAN PEMBAYARAN KARCIS</h5>
                            </div>
                            <div class="ibox-content" id="ibox-content" style="background-color: #ffffff;font-size: 14px">
                                <p>Setiap pendaki di Gunung Raung Via Kalibaru dikenakan tarif karcis masuk sesuai dengan
                                    ketentuan yang tercantum pada Peraturan Pemerintah RI Nomor 12 tahun 2014 tentang Jenis
                                    dan Tarif Atas Jenis Penerimaan Negara Bukan Pajak yang Berlaku Pada Kementerian
                                    Kehutanan. Bila terdapat aturan / kebijakan baru tentang tarif karcis masuk di kawasan
                                    konservasi, maka tarif karcis pendakian akan disesuaikan sebagaimana peraturan terbaru
                                    tersebut.</p>
                                <p>1. Tarif karcis masuk pendaki Wisatawan Lokal</p>
                                <div class="well wells">
                                    <strong>Rp. 60.000,- Setiap Hari / Orang</strong> <small>(Karcis Rp. 55.000 +
                                        Asuransi Rp. 5.000)</small>
                                </div>
                                <p style="margin-top: 10px;">2. Tarif karcis masuk pendaki Wisatawan Mancanegara</p>
                                <div class="well wells">
                                    <strong>Rp. 120.000,- / Orang</strong> <small>(Karcis Rp. 115.000 + Asuransi Rp.
                                        5.000)</small>
                                </div>
                                <p style="color: red">5. Pembayaran dilakukan via transfer Bank</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins" style="margin-bottom: 15px">
                            <div class="ibox-title">
                                <h5>PELAKSANAAN PENDAKIAN</h5>
                            </div>
                            <div class="ibox-content" id="ibox-content" style="background-color: #ffffff;font-size: 14px">
                                <ol>
                                    <li>Bukti pendaftaran harus dicetak dan dibawa untuk menjadi alat bukti
                                        masuk ke pintu masuk pendakian atau pos pendakian.</li>
                                    <li>Persyaratan memperoleh izin pendakian :</li>
                                </ol>
                                <div class="well wells">
                                    Bukti cetak pendaftaran menjadi syarat untuk memperoleh perizinan pendakian di Gunung
                                    Raung Via Kalibaru;
                                </div>
                                <div class="well wells">
                                    FC identitas ketua (KTP/Kartu Pelajar/KTM/SIM/Pasport) wajib diserahkan kepada
                                    petugas selama masa pendakian;
                                </div>
                                <div class="well wells">
                                    Pendaki usia kurang dari 10 tahun harap disertakan surat izin orang tua/wali bermaterai
                                    beserta fotokopi KTP orang tua/wali.
                                </div>
                                <div class="well wells">
                                    Surat Keterangan Sehat asli termasuk bebas dari ISPA, bertanda tangan dan berstempel
                                    basah dari fasilitas pelayanan kesehatan dengan tujuan akan digunakan sebagai
                                    persyaratan untuk melakukan pendakian Gunung Raung, yang berlaku paling lama 3 (tiga)
                                    hari sebelum hari pendakian.
                                </div>
                                <div class="well wells">
                                    Ketua kelompok bertanggung jawab terhadap kelengkapan administrasi, keselamatan anggota
                                    dan bertanggungjawab membawa sampah turun kembali;
                                </div>
                                <div class="well wells">
                                    Proses pemeriksaan dan pencocokan barang dilakukan oleh petugas sesuai dengan isi form
                                    pendaftaran online.
                                </div>
                                <div class="well wells">
                                    Pemandu Jalur wajib mengikuti pengarahan/briefing dari petugas sekretariat.
                                </div>
                                <div class="well wells">
                                    Semua calon pendaki wajib mengikuti pengarahan/briefing.
                                </div>
                                <ol start="3">
                                    <li>Mematuhi dan membayar restribusi Masuk Gunung Raung Via Kalibaru dan Asuransi
                                        sejumlah personil sesuai peraturan perundang-undangan yang berlaku dan pastikan
                                        Bukti Retribusi adalah karcis resmi yang dikeluarkan oleh Sekretariat Gunung Raung
                                        Via Kalibaru sesuai dengan jumlah personil serta menyimpan bukti rertibusi tersebut.
                                    </li>
                                    <li>Pada saat melakukan pendakian agar berjalan secara berkelompok, tidak memisahkan
                                        diri dari kelompok/rombongan, berjalan sesuai jalur yang sudah ditetapkan, wajib
                                        mengikuti arahan dari pemandu jalur, dan dilarang memotong jalur atau membuat jalur
                                        baru.</li>
                                    <li>Menjaga keselamatan kelompok dan sesama pengunjung/pendaki serta menjaga kebersihan
                                        dan keamanan kawasan.</li>
                                    <li>Turut berpatisipasi dalam upaya Pencegahan, Pengendalian dan Penangulangan Bencana
                                        Alam dan memastikan bahwa tempat yang ditinggalkan tidak terdapat api/bara api.</li>
                                    <li>Dalam rangka pengamanan pendakian dan perlindungan keanekaragaman hayati, beberapa
                                        hal yang harus diperhatikan antara lain :</li>
                                </ol>
                                <div class="well wells">
                                    Setiap pendaki harus menggunakan perlengkapan/personal use yang memenuhi standar
                                    pendakian.
                                </div>
                                <div class="well wells">
                                    Pendaki harus tetap berjalan pada jalur yang telah ditentukan;
                                </div>
                                <div class="well wells">
                                    Pendaki wajib mematuhi rekomendasi batas aman pendakian yang diberikan;
                                </div>
                                <div class="well wells">
                                    Tempat mendirikan tenda hanya di lokasi yang telah ditentukan;
                                </div>
                                <div class="well wells">
                                    Pendaki dilarang membuat api dari kayu dan sampah anorganik untuk tujuan apapun;
                                </div>
                                <div class="well wells">
                                    Pendaki yang turun harus melapor dan membawa kembali sampah untuk diperiksa oleh petugas
                                    di pos pendakian;
                                </div>
                                <ol start="9">
                                    <li>Setiap pendaki diwajibkan untuk menggunakan :</li>
                                </ol>
                                <div class="well wells">
                                    Tenda kedap air;
                                </div>
                                <div class="well wells">
                                    Ransel/carrier dengan spesifikasi kuat dan kondisi baik, nyaman untuk pendakian;
                                </div>
                                <div class="well wells">
                                    Matras, kantong tidur (Sleeping bag), sarung tangan, kaos kaki, bandana/kerpus/kupluk,
                                    sepatu, dan jas hujan sesuai standar pendakian;
                                </div>
                                <div class="well wells">
                                    Lampu senter, head lamp dan baterai cadangan;
                                </div>
                                <div class="well wells">
                                    Perbekalan logistik, disesuaikan dengan rencana perjalanan dan jumlah anggota kelompok;
                                </div>
                                <div class="well wells">
                                    Obat-obatan pribadi (alat P3K);
                                </div>
                                <div class="well wells">
                                    Disarankan untuk membawa Tracking Pole dan Safety Helmet for Climbing.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>LARANGAN</h5>
                            </div>
                            <div class="ibox-content" id="ibox-content" style="background-color: #ffffff;font-size: 14px">
                                <ol>
                                    <li>
                                        Dalam rangka mempertahankan nilai penting keanekaragaman hayati ekosistem, maka
                                        pendakian di wilayah Gunung Raung harus dilaksanakan dengan memperhatikan :
                                    </li>
                                </ol>
                                <div class="well wells">
                                    Dilarang membawa alat alat yang terindikasi digunakan untuk melakukan tindakan yang
                                    mengakibatkan kerusakan flora/fauna, melakukan coretan-coretan/vandalisme pada
                                    benda-benda,pohon atau bangunan didalam kawasan.
                                </div>
                                <div class="well wells">
                                    Dilarang memaksakan diri untuk melanjutkan perjalanan jika kondisi dan situasi tidak
                                    memungkinkan (kesehatan, cuaca, keamanan) .
                                </div>
                                <div class="well wells">
                                    Dilarang melanggar norma agama, norma asusila, norma budaya dan nilai-nilai adat
                                    istiadat masyarakat setempat.
                                </div>
                                <div class="well wells">
                                    Dilarang membawa dan minum-minuman keras (beralkohol) membawa dan menggunakan obat-obat
                                    terlarang (narkoba)
                                </div>
                                <div class="well wells">
                                    Dilarang membuat bangunan permanen, semi permanen dengan tujuan tertentu tanpa ada surat
                                    izin dari Sekretariat Gunung Raung via Kalibaru dan mengetahui Perhutani.
                                </div>
                                <div class="well wells">
                                    Dilarang Merubah bentuk asli, Merusak, Memugar, Mencuri, Memindah letak lokasi,
                                    Mengganti yang asli dengan Replika situs Purbakala di dalam kawasan Tahura Raden Soerjo.
                                </div>
                                <div class="well wells">
                                    Dilarang membuang sampah sembarangan dan wajib membawa sampah anda turun kembali.
                                </div>
                                <div class="well wells">
                                    Dilarang membawa senjata tajam dan senjata api yang tidak selayaknya untuk kegiatan
                                    pendakian
                                </div>
                                <div class="well wells">
                                    Dilarang Melakukan tindakan yang menagkibatkan kerusakan flora / fauna serta vandalisme
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>SOP PROTOKOL KESEHATAN COVID-19</h5>
                            </div>
                            <div class="ibox-content" id="ibox-content" style="background-color: #ffffff;font-size: 14px">
                                <ol>
                                    <li>
                                        Dalam rangka mencegah penyebaran COVID-19 maka setiap tour guide dan pendaki
                                        diharuskan mengikuti prosedur berikut :
                                    </li>
                                </ol>
                                <div class="well wells">
                                    Wajib melaksanakan prosedur/protokol kesehatan COVID-19 di dalam kawasan jalur
                                    pendakian Gunung Raung via Kalibaru, menerapkan Perilaku Hidup Bersih dan Sehat (PHBS)
                                    sesuai protokol pencegahan COVID-19 (cuci tangan dengan sabun dan air mengalir/Hand
                                    Sanitizer, menjaga etika batuk dan bersin, dll).
                                </div>
                                <div class="well wells">
                                    Wajib menunjukkan bukti telah Vaksin (minimal dosis pertama) dengan menggunakan aplikasi
                                    PeduliLidungi atau menunjukkan kartu vaksin.
                                </div>
                                <div class="well wells">
                                    Bagi pendaki yang tidak bisa vaksin karena alasan medis, wajib menyertakan surat
                                    keterangan tidak bisa melakukan vaksin dari dokter dan menunjukkan hasil test Antigen
                                    Covid-19 H-1 atau Test PCR H-2.
                                </div>
                                <div class="well wells">
                                    Jika Tour Guide ataupun Pendaki selama di dalam kawasan tidak memakai masker dan
                                    membawa hand sanitizer tidak diperkenankan memasuki kawasan jalur pendakian Gunung Raung
                                    via Kalibaru.
                                </div>
                                <div class="well wells">
                                    Ketika melakukan proses registrasi dan lapor diri, tour guide dan pendaki tetap
                                    menjaga jarak dengan petugas loket, sedikitnya 1 (satu) meter dan tidak berkerumun.
                                </div>
                                <div class="well wells">
                                    Wajib menggunakan masker dan sarung tangan selama berada di dalam kawasan jalur
                                    pendakian Gunung Raung via Kalibaru.
                                </div>
                                <div class="well wells">
                                    Wajib melakukan pengecekan suhu tubuh dengan thermogun. Jika ditemukan pengunjung
                                    dengan suhu >37,30°C (2 kali pemeriksaan dengan jarak 5 menit), tidak diperkenankan
                                    masuk kawasan Jalur Pendakian Gunung Raung via Kalibaru.
                                </div>
                                <div class="well wells">
                                    Tenda yang digunakan oleh pengunjung hanya bisa diisi maksimal 50% dari kapasitas tenda
                                    dengan jarak pendirian antar tenda minimal 2 meter.
                                </div>
                                <div class="well wells">
                                    Wajib membawa hand sanitizer untuk membersihkan tangan.
                                </div>
                                <div class="well wells">
                                    Pendaki dan Tour Guide menggunakan peralatan pribadi untuk berbagai keperluan, seperti
                                    peralatan makan, minum, ibadah, dll.
                                </div>
                                <div class="well wells">
                                    Menjaga jarak minimal 1 meter dengan pengunjung yang lain, tidak berkerumun, dan selalu
                                    menjaga ketertiban.
                                </div>
                                <div class="well wells">
                                    Wajib menjaga kebersihan serta tidak batuk, bersin maupun membuang ludah sembarangan
                                    (menjaga etika batuk dan bersin).
                                </div>
                                <div class="well wells">
                                    Pendaki tidak membuang masker, tissue, face shield di kawasan jalur pendakian Gunung
                                    Raung via Kalibaru.
                                </div>
                                <div class="well wells">
                                    Membawa obat-obatan pribadi (P3K).
                                </div>
                                <div class="well wells">
                                    Pengunjung wajib menginformasikan kepada pengelola dan/atau pemandu jika mengalami
                                    gangguan kesehatan.
                                </div>
                                <div class="well wells">
                                    Pengunjung ikut serta menjaga kebersihan fasilitas publik, seperti: mushola, kamar
                                    mandi/toilet, pos pendakian dan lain-lain.
                                </div>
                                <div class="well wells">
                                    <b>Barang siapa dengan sengaja melakukan pelanggaran terhadap larangan-larangan
                                        sebagaimana poin 1 sampai dengan 13 akan dikenakan sanksi mulai dari pembinaan
                                        sampai dengan blacklist untuk memasuki kawasan jalur pendakian gunung Raung yang
                                        lamanya disesuaikan dengan tingkat pelanggaran.</b>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $("input[type=checkbox]").on("change", function(evt) {
            var check = $('input[id=checklist]:checked');
            if (check.length < 1) {
                $("input[id=sop]").prop("disabled", true);
            } else {
                $("input[id=sop]").prop("disabled", false);
            }
        });
    </script>
@endsection
