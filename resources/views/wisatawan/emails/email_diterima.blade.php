@component('mail::message')
    # Dear {{ $data['nama'] }}

    <p>Terima Kasih Atas Booking Online Gunung Raung Via Kalibaru Banyuwangi</p>
    <p>Bersama ini konfirmasi Data Booking Online anda sebagai berikut :</p><br>
    <table class="table-condensed">
        <tr>
            <th width="20%">Kode Pemesanan</th>
            <th width="10">:</th>
            <th>{{ $data['kode_pesanan'] }}</th>
        </tr>
        <tr>
            <th width="20%">Tanggal Pemesanan</th>
            <th width="10">:</th>
            <th>{{ $data['tanggal_pesan'] }}</th>
        </tr>
        <tr>
            <th width="20%">Nama Ketua Kelompok</th>
            <th width="10">:</th>
            <th>{{ $data['nama'] }}</th>
        </tr>
        <tr>
            <th width="20%">Email Ketua Kelompok</th>
            <th width="10">:</th>
            <th>{{ $data['email'] }}</th>
        </tr>
        <tr>
            <th width="20%">No Hp Ketua Kelompok</th>
            <th width="10">:</th>
            <th>{{ $data['no_hp'] }}</th>
        </tr>
        <tr>
            <th width="20%">Jumlah Anggota Kelompok</th>
            <th width="10">:</th>
            <th>{{ $data['jumlah_tiket'] }}</th>
        </tr>
        <tr>
            <th width="20%">Tanggal Naik</th>
            <th width="10">:</th>
            <th>{{ $data['tanggal_naik'] }}</th>
        </tr>
        <tr>
            <th width="20%">Tanggal Turun</th>
            <th width="10">:</th>
            <th>{{ $data['tanggal_turun'] }}</th>
        </tr>
        <tr>
            <th width="20%">Metode Pembayaran</th>
            <th width="10">:</th>
            <th>Via Transfer BNI</th>
        </tr>
    </table><br>
    <p>Mohon Segera lakukan Pembayaran sebelum :</p>

    <p style="font-weight: bold; text-transform: capitalize">Tanggal :{{ $data['maksimal_pembayaran'] }}</p>
    <p>a.n : <b> mtraung3344mdpldwonorejo BNI</b></p>
    <p>Jumlah yang Dibayar : <b>Rp. {{ $data['total_harga'] }}</b></p>

    <p style="font-weight: bold; text-transform: capitalize">Mohon dibayarkan sesuai dengan nominal tagihan Booking Online
        tersebut.</p>

    <p>
        <font color="red">Apabila Sudah membayar Mohon segera Upload Bukti TF pada menu myorder anda.</font>
    </p>

    Thanks,
    Sekretariat Mt. Raung 3344 Mdpl Via Kalibaru Banyuwangi

    {{-- <!DOCTYPE html>
    <html>

    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <style type="text/css">
            body,
            table,
            td,
            a {
                -webkit-text-size-adjust: 100%;
                -ms-text-size-adjust: 100%;
            }

            table,
            td {
                mso-table-lspace: 0pt;
                mso-table-rspace: 0pt;
            }

            img {
                -ms-interpolation-mode: bicubic;
            }

            img {
                border: 0;
                height: auto;
                line-height: 100%;
                outline: none;
                text-decoration: none;
            }

            table {
                border-collapse: collapse !important;
            }

            body {
                height: 100% !important;
                margin: 0 !important;
                padding: 0 !important;
                width: 100% !important;
            }

            a[x-apple-data-detectors] {
                color: inherit !important;
                text-decoration: none !important;
                font-size: inherit !important;
                font-family: inherit !important;
                font-weight: inherit !important;
                line-height: inherit !important;
            }

            @media screen and (max-width: 480px) {
                .mobile-hide {
                    display: none !important;
                }

                .mobile-center {
                    text-align: center !important;
                }
            }

            div[style*="margin: 16px 0;"] {
                margin: 0 !important;
            }

        </style>

    <body style="margin: 0 !important; padding: 0 !important; background-color: #eeeeee;" bgcolor="#eeeeee">
        <table border="0" cellpadding="0" cellspacing="0" width="100%">
            <tr>
                <td align="center" style="background-color: #eeeeee;" bgcolor="#eeeeee">
                    <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;">
                        <tr>
                            <td align="center" style="padding: 35px 35px 20px 35px; background-color: #ffffff;"
                                bgcolor="#ffffff">
                                <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%"
                                    style="max-width:600px;">
                                    <tr>
                                        <td align="center"
                                            style="font-family: Poppins, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 25px;">
                                            <img src="https://img.icons8.com/carbon-copy/100/000000/checked-checkbox.png"
                                                width="125" height="120" style="display: block; border: 0px;" /><br>
                                            <h2
                                                style="font-size: 30px; font-weight: 800; line-height: 36px; color: #333333; margin: 0;">
                                                BOOKING ONLINE ANDA BERHASIL </h2>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="left"
                                            style="font-family: Poppins, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;">
                                            <p
                                                style="font-size: 14px; font-weight: 400; line-height: 24px; color: #777777;">
                                                Terima Kasih Atas Booking Online Gunung Raung Via Kalibaru Banyuwangi</p>
                                            <p
                                                style="font-size: 14px; font-weight: 400; line-height: 24px; color: #777777;">
                                                Bersama ini konfirmasi Data Booking Online anda sebagai berikut :</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="left" style="padding-top: 20px;">
                                            <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                                <tr>
                                                    <td width="75%" align="left" bgcolor="#eeeeee"
                                                        style="font-family: Poppins, sans-serif; font-size: 16px; font-weight: 800; line-height: 24px; padding: 10px;">
                                                        Kode Pemesanan :</td>
                                                    <td width="25%" align="left" bgcolor="#eeeeee"
                                                        style="font-family: Poppins, sans-serif; font-size: 16px; font-weight: 800; line-height: 24px; padding: 10px;">
                                                        {{ $data['kode_pesanan'] }} </td>
                                                </tr>
                                                <tr>
                                                    <td width="75%" align="left"
                                                        style="font-family: Poppins, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 15px 10px 5px 10px;">
                                                        Tanggal Pemesanan :</td>
                                                    <td width="25%" align="left"
                                                        style="font-family: Poppins, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 15px 10px 5px 10px;">
                                                        {{ $data['tanggal_pesan'] }}</td>
                                                </tr>
                                                <tr>
                                                    <td width="75%" align="left"
                                                        style="font-family: Poppins, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;">
                                                        Nama Ketua Kelompok :</td>
                                                    <td width="25%" align="left"
                                                        style="font-family: Poppins, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;">
                                                        {{ $data['nama'] }}</td>
                                                </tr>
                                                <tr>
                                                    <td width="75%" align="left"
                                                        style="font-family: Poppins, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;">
                                                        Email Ketua Kelompok :</td>
                                                    <td width="25%" align="left"
                                                        style="font-family: Poppins, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;">
                                                        {{ $data['email'] }}</td>
                                                </tr>
                                                <tr>
                                                    <td width="75%" align="left"
                                                        style="font-family: Poppins, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;">
                                                        No Hp Ketua Kelompok :</td>
                                                    <td width="25%" align="left"
                                                        style="font-family: Poppins, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;">
                                                        {{ $data['no_hp'] }}</td>
                                                </tr>
                                                <tr>
                                                    <td width="75%" align="left"
                                                        style="font-family: Poppins, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;">
                                                        Jumlah Anggota Kelompok :</td>
                                                    <td width="25%" align="left"
                                                        style="font-family: Poppins, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;">
                                                        {{ $data['jumlah_tiket'] }}</td>
                                                </tr>
                                                <tr>
                                                    <td width="75%" align="left"
                                                        style="font-family: Poppins, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;">
                                                        Tanggal Naik :</td>
                                                    <td width="25%" align="left"
                                                        style="font-family: Poppins, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;">
                                                        {{ $data['tanggal_naik'] }}</td>
                                                </tr>
                                                <tr>
                                                    <td width="75%" align="left"
                                                        style="font-family: Poppins, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;">
                                                        Tanggal Turun :</td>
                                                    <td width="25%" align="left"
                                                        style="font-family: Poppins, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;">
                                                        {{ $data['tanggal_turun'] }}</td>
                                                </tr>
                                                <tr>
                                                    <td width="75%" align="left"
                                                        style="font-family: Poppins, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;">
                                                        Metode Pembayaran :</td>
                                                    <td width="25%" align="left"
                                                        style="font-family: Poppins, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;">
                                                        Via Transfer BANK BNI</td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" height="100%" valign="top" width="100%"
                                style="padding: 0 35px 35px 35px; background-color: #ffffff;" bgcolor="#ffffff">
                                <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%"
                                    style="max-width:660px;">
                                    <tr>
                                        <td align="center" valign="top" style="font-size:0;">
                                            <div
                                                style="display:inline-block; max-width:50%; min-width:240px; vertical-align:top; width:100%;">
                                                <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%"
                                                    style="max-width:300px;">
                                                    <tr>
                                                        <td align="left" valign="top"
                                                            style="font-family: Poppins, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px;">
                                                            <p style="font-weight: 500;">Mohon Segera lakukan Pembayaran
                                                                sebelum :</p>
                                                            <p>Tanggal :{{ $data['maksimal_pembayaran'] }}</p>
                                                            <p>a.n : <b> mtraung3344mdpldwonorejo BNI</b></p>
                                                            <p>Jumlah yang Dibayar : <b>Rp.{{ $data['total_harga'] }}</b>
                                                            </p>
                                                            <p style="font-weight: bold; text-transform: capitalize">Mohon
                                                                dibayarkan sesuai dengan nominal tagihan Booking Online
                                                                tersebut.</p>
                                                            <p>
                                                                <font color="red">Apabila Sudah membayar Mohon segera Upload
                                                                    Bukti TF pada menu myorder anda.</font>
                                                            </p>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" style="padding: 35px; background-color: #ffffff;" bgcolor="#ffffff">
                                <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%"
                                    style="max-width:600px;">
                                    <tr>
                                        <td align="center"
                                            style="font-family: Poppins, sans-serif; font-size: 14px; font-weight: 400; line-height: 24px; padding: 5px 0 10px 0;">
                                            <p
                                                style="font-size: 12px; font-weight: 500; line-height: 18px; color: #333333;">
                                                Thanks,<br>Sekretariat Mt. Raung 3344 Mdpl Via Kalibaru Banyuwangi
                                            </p>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </body>

    </html> --}}
@endcomponent
