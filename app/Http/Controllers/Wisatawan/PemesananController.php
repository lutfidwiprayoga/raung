<?php

namespace App\Http\Controllers\Wisatawan;

use App\Http\Controllers\Controller;
use App\Mail\Wisatawan\WisatawanMailAcc;
use App\Models\Cetak_pdf;
use App\Models\City;
use App\Models\Kebangsaan;
use App\Models\Notifikasi;
use App\Models\Pesanan;
use App\Models\Province;
use App\Models\Tiket;
use App\Models\Wisatawan;
use App\Models\WisatawanAnggota;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class PemesananController extends Controller
{
    public function __construct()
    {
        $this->Wisatawan = new Wisatawan();
        $this->middleware(['auth', 'verified']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $kebangsaan = Kebangsaan::get();
        $provinsi = Province::get();
        $kota = City::get();
        $wisatawan = Wisatawan::latest()->get();
        $tiket = Tiket::orderBy('nama', 'asc')->get();
        $tanggal_id = $request->input('tanggal_naik');
        $id = $request->input('id');
        return view('frontend.pendaftaran', compact('tiket', 'wisatawan', 'kebangsaan', 'provinsi', 'kota', 'tanggal_id', 'id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'kebangsaan_id' => 'required',
            'tanggal_naik' => 'required',
            'tanggal_turun' => 'required',
            'jenis_identitas' => 'required',
            'nama' => 'required',
            'email' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required|max:12',
            'pekerjaan' => 'required',
            'foto_identitas' => 'required|mimes:jpg,jpeg,png|max:300',
            'kebangsaan_id.required' => 'Field Wajib Diisi.',
            'tanggal_naik.required' => 'Field Wajib Diisi.',
            'tanggal_turun.required' => 'Field Wajib Diisi.',
            'jenis_identitas.required' => 'Field Wajib Diisi.',
            'nama.required' => 'Field Wajib Diisi.',
            'email.required' => 'Field Wajib Diisi.',
            'tanggal_lahir.required' => 'Field Wajib Diisi.',
            'jenis_kelamin.required' => 'Field Wajib Diisi.',
            'alamat.required' => 'Field Wajib Diisi.',
            'no_hp.required' => 'Field Wajib Diisi.',
            'no_hp.max' => 'No Hp maksimal 12 digit.',
            'pekerjaan.required' => 'Field Wajib Diisi.',
            'foto_identitas.required' => 'Field Wajib Diisi.',
            'foto_identitas.mimes' => 'Format harus JPG/JPEG/PNG.',
            'foto_identitas.max' => 'Maksimal 300kb',
        ]);
        $foto_identitas = time() . '.' . $request->foto_identitas->extension();
        $request->foto_identitas->move(public_path('foto_wisatawan'), $foto_identitas);
        $wisatawan = Wisatawan::create([
            'user_id' => Auth::user()->id,
            'tanggal_naik' => $request->tanggal_naik,
            'tanggal_turun' => $request->tanggal_turun,
            'jenis_identitas' => $request->jenis_identitas[0],
            'nomor_identitas' => $request->nomor_identitas[0],
            'nama' => $request->nama[0],
            'email' => $request->email,
            'tanggal_lahir' => $request->tanggal_lahir[0],
            'jenis_kelamin' => $request->jenis_kelamin[0],
            'alamat' => $request->alamat[0],
            'no_hp' => $request->no_hp[0],
            'asal_kota' => $request->asal_kota,
            'provinsi' => $request->provinsi,
            'pekerjaan' => $request->pekerjaan,
            'kebangsaan_id' => $request->kebangsaan_id[0],
            'foto_identitas' => $foto_identitas,
        ]);
        // if ($request->hasFile('foto_identitas')) {
        //     $request->file('foto_identitas')->move('foto_wisatawan/', $request->file('foto_identitas')->getClientOriginalName());
        //     $wisatawan->foto_identitas = $request->file('foto_identitas')->getClientOriginalName();
        //     $wisatawan->save();
        // }
        for ($i = 1; $i < count($request->input('nama')); $i++) {
            $anggota = new WisatawanAnggota();
            $anggota->ketua_id = $wisatawan->id;
            $anggota->nama = $request->nama[$i];
            $anggota->tanggal_lahir = $request->tanggal_lahir[$i];
            $anggota->jenis_kelamin = $request->jenis_kelamin[$i];
            $anggota->alamat = $request->alamat[$i];
            $anggota->no_hp = $request->no_hp[$i];
            $anggota->jenis_identitas = $request->jenis_identitas[$i];
            $anggota->nomor_identitas = $request->nomor_identitas[$i];
            $anggota->kebangsaan_id = $request->kebangsaan_id[$i];
            $anggota->save();
        }

        $tanggal_pesan = Carbon::now()->format('Y-m-d H:i:s');
        $now = Carbon::now();
        $tanggal = $now->day . $now->month . $now->year;
        $pesanan = new Pesanan();
        $max_id = DB::table('pesanans')->max('id');
        $nomor_urut = $max_id + 1;
        $pesanan->ketua_id = $wisatawan->id;
        $pesanan->kode_pesanan = 'RAUNG' . '-' . $tanggal . '0' . '0' . $nomor_urut;
        $pesanan->tanggal_pesan = $tanggal_pesan;
        $pesanan->status_pemesanan = 'Pengajuan';
        $tgl_exp = strtotime('+5 hours', strtotime($pesanan->tanggal_pesan)); // jangka waktu +2 jam
        $pesanan->maksimal_pembayaran = date("Y-m-d H:i:s", $tgl_exp); //Tanggal Maksimal Pembayaran
        $pesanan->jumlah_tiket = count($request->input('nama'));
        $pesanan->biaya_tiket = $request->biaya_tiket;
        $pesanan->total_harga = $request->total_harga;
        $pesanan->upload_bukti = null;
        $pesanan->save();

        $notifikasi = new Notifikasi();
        $notifikasi->user_id = Auth::user()->id;
        $notifikasi->pesanan_id = $pesanan->id;
        $notifikasi->save();

        $pdf = new Cetak_pdf();
        $pdf->pesanan_id = $pesanan->id;
        $pdf->ketua_id = $wisatawan->id;
        $pdf->save();

        $data = array(
            'kode_pesanan' => $pesanan->kode_pesanan,
            'tanggal_pesan' => $pesanan->tanggal_pesan,
            'jumlah_tiket' => $pesanan->jumlah_tiket,
            'maksimal_pembayaran' => $pesanan->maksimal_pembayaran,
            'total_harga' => $pesanan->total_harga,
            'nama' => $wisatawan->nama,
            'email' => $wisatawan->email,
            'no_hp' => $wisatawan->no_hp,
            'tanggal_naik' => $wisatawan->kuota->tanggal_pendakian,
            'tanggal_turun' => $wisatawan->tanggal_turun,
        );
        Mail::to($wisatawan->email)->send(new WisatawanMailAcc($data));
        //redirect dengan pesan sukses
        if ($wisatawan) {
            Alert::success('Pesanan Sukses', 'Silahkan cek di email anda');
            return redirect()->route('booking.create');
        } else {
            //redirect dengan pesan error
            return redirect()->route('booking.create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $pdf = CetakPDF::find($id);
        // $wisatawan = Wisatawan::find($id);
        // $anggota = WisatawanAnggota::get();
        // $kebangsaan = Kebangsaan::find($id);
        // $pesanan = Pesanan::find($id);
        // $user = User::select('id', 'name', 'email', 'no_hp', 'foto')->where('level', 'guide')->first();
        // $perjalanan = Perjalanan::with('user')->get();
        // return view('frontend.checkout', compact('wisatawan', 'user', 'pesanan', 'kebangsaan', 'perjalanan', 'anggota', 'pdf'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pesanan = Pesanan::find($id);
        $pesanan->update($request->all());
        //jika wisatawan upload bukti
        if ($request->hasFile('upload_bukti')) {
            $request->file('upload_bukti')->move('upload_bukti/', $request->file('upload_bukti')->getClientOriginalName());
            $pesanan->upload_bukti = $request->file('upload_bukti')->getClientOriginalName();
            $pesanan->save();
        }

        if ($pesanan) {
            //redirect dengan pesan sukses
            return
                redirect()->back()->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return
                redirect()->back()->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
