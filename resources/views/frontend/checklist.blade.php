@extends('frontend.layout.template')
@section('title', 'checklist - Booking Online Gunung Raung')

@section('content')
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""
                style="transform: translateY(-41.8581px);"></div>
            <div class="container">
                <div class="banner_content text-center">
                    <h2 style="color: #fff">CHECKLIST</h2>
                    <div class="page_link">
                        <a href="/">Home</a>
                        <a href="#">-</a>
                        <a href="#" style="color: #17B794">Checklist</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="gtco-services gtco-section">
        <div class="gtco-container">
            <div class="row ">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="feature-box">
                                <div class="feature-box-icon primary-bg"></div>
                                <div class="feature-box-info">
                                    <h3 class="heading-secondary mb-none text-center"><i class="fas fa-check-circle"></i>
                                        Isilah <i>Check List</i> Persyaratan Pendakian Gunung Raung dibawah ini:
                                    </h3>
                                </div>
                            </div>
                            <div style="padding-left: 15px;">
                                <div class="features">
                                    <div>
                                        <ul>
                                            <li>
                                                <label class="form-check-label" style="text-indent: -16px;">
                                                    <input type="checkbox" class="check" oninput="validasi()"
                                                        id="check"> Menunjukan Bukti
                                                    Cetak Pendaftaran Booking Online dari Sekretariat Gunung Raung.
                                                </label>
                                            </li>
                                            <li>
                                                <label class="form-check-label" style="text-indent: -16px;">
                                                    <input type="checkbox" class="check" oninput="validasi()"
                                                        id="check"> Setiap pendaki wajib melampirkan surat keterangan sehat
                                                    dari dokter/instansi kesehatan yang masih berlaku paling lama 3 (tiga)
                                                    hari sebelum hari pendakian.
                                                </label>
                                            </li>
                                            <li>
                                                <label class="form-check-label" style="text-indent: -16px;">
                                                    <input type="checkbox" class="check" oninput="validasi()"
                                                        id="check"> Setiap pendaki wajib menyerahkan fotocopy KTP, Passport
                                                    atau Kartu Identitas yang lain beserta dengan yang asli (berlaku untuk
                                                    semua peserta dan tour guide/pemandu).
                                                </label>
                                            </li>
                                            <li>
                                                <label class="form-check-label" style="text-indent: -16px;">
                                                    <input type="checkbox" class="check" oninput="validasi()"
                                                        id="check"> Setiap Pendaki
                                                    <b>WAJIB</b> menggunakan jasa <em>Tour</em> Guide.
                                                </label>
                                            </li>
                                            <li>
                                                <label class="form-check-label" style="text-indent: -16px;">
                                                    <input type="checkbox" class="check" oninput="validasi()"
                                                        id="check"> Setiap rombongan pendaki <b>WAJIB</b> mengikuti briefing
                                                    tambahan di sekretariat oleh petugas briefing.
                                                </label>
                                            </li>
                                            <li>
                                                <label class="form-check-label" style="text-indent: -16px;">
                                                    <input type="checkbox" class="check" oninput="validasi()"
                                                        id="check"> Pengunjung di
                                                    bawah 10 tahun <b>WAJIB </b> membawa surat ijin dari orang tua
                                                    bermaterai dan FotoCopy KTP orang tua.
                                                </label>
                                            </li>
                                            <li>
                                                <label class="form-check-label" style="text-indent: -16px;">
                                                    <input type="checkbox" class="check" oninput="validasi()"
                                                        id="check"> <b>Batas aman Pendakian yang direkomendasikan adalah di
                                                        Puncak Bendera.</b>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="form-check-label" style="text-indent: -16px;">
                                                    <input type="checkbox" class="check" oninput="validasi()"
                                                        id="check"> <b>Batas maksimal lama pendakian yang diizinkan maksimal
                                                        adalah 3 (tiga) hari dan 2 (dua) malam.</b>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center btn-checklist">
                                <a href="{{ route('infokuota.index') }}">
                                    <input class="btn btn-success btn-round" type="submit" id="pendaftaran" value="Daftar"
                                        disabled="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $("input[type=checkbox]").on("change", function(evt) {
            var check = $('input[class=check]:checked');
            if (check.length < 8) {
                $("input[id=pendaftaran]").prop("disabled", true);
            } else {
                $("input[id=pendaftaran]").prop("disabled", false);
            }
        });
    </script>
@endsection
