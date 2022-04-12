<?php

namespace App\Http\Controllers;

use App\Models\Fasilitashtl;
use App\Models\Fasilitaskmr;
use App\Models\Kamar;
use App\Models\Pemesanan;
use DateTime;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TamuController extends Controller
{
    public function fasilitas()
    {
        $fasilitas = Fasilitashtl::all();
        return view('fasilitas',['fasilitas'=>$fasilitas]);
    }

    public function listKamar()
    {
        $kamar = Kamar::all();
        return view('kamar', ['kamar' => $kamar]);
    }

    public function detailKamar($id)
    {
        $kamar = Kamar::find($id);
        return view('detail', ['kamar' => $kamar]);
    }

    public function viewBook()
    {
        $kamar = Kamar::all();
        // $kamarTerpilih = Kamar::find($id);
        return view('pesan', ['kamar' => $kamar]);

    }

    public function orderBook(Request $request)
    {
        // $reservasi =

        $data_request = $request->only(
            'id_kamar',
            'jumlah_kamar',
            'jumlah_orang',
            'email',
            'no_telp',
            'nik',
            'nama',
            'alamat',
            'checkin',
            'checkout',
            'catatan',
        );
        $validator = Validator::make($data_request, array(
            'id_kamar'=> ["required"],
            'jumlah_kamar'=> ["required"],
            'email'=> ["required"],
            'no_telp'=> ["required"],
            'nik'=> ["required"],
            'nama'=> ["required", "max:16"],
            'alamat'=> ["required"],
            'checkin'=> ["required"],
            'checkout'=> ["required"],
            'catatan'=> ["required"],
        ));

        if(!$validator->fails()){
            try{
                // dd($request->id_kamar);
                $kamar = Kamar::find($request->id_kamar);

                $dateCheckin = $request->checkin;
                $dateCheckout = $request->checkout;

                $datetime1 = new DateTime($dateCheckin);
                $datetime2 = new DateTime($dateCheckout);

                $interval = $datetime1->diff($datetime2);
                $days = $interval->format('%a');

                // dd($days);

                $totalHarga = $kamar->harga_kamar * intval($days) * intval($request->jumlah_kamar);

                $jumlahSekarang = $kamar->ketersediaan - $request->jumlah_kamar;

                $kamar->ketersediaan = $jumlahSekarang;
                $kamar->save();

                $reservasi = new Pemesanan();

                $reservasi->id_kamar = $request->id_kamar;
                $reservasi->jumlah_kamar = $request->jumlah_kamar;
                $reservasi->jumlah_orang = $request->jumlah_orang;
                $reservasi->email = $request->email;
                $reservasi->no_telp = $request->no_telp;
                $reservasi->nik = $request->nik;
                $reservasi->nama = $request->nama;
                $reservasi->alamat = $request->alamat;
                $reservasi->tgl_check_in = $request->checkin;
                $reservasi->tgl_check_out = $request->checkout;
                $reservasi->catatan = $request->catatan;
                $reservasi->status = "proses";
                $reservasi->total_harga = $totalHarga;


                // dd($reservasi);
                $reservasi->save();

                // dd($reservasi->id);

                return redirect(route('bookpreview', [$reservasi->id]));
                // $create_kamar = Kamar::create($data_request);

            } catch(Exception $e){
                // dd($e->getMessage());
                dd($e);
                return redirect()->back();
            }
        }   else {
            return redirect()->back();
        }
    }

    public function konfirmasiOrder($id)
    {
        $book = Pemesanan::find($id);
        $kamar = Kamar::find($book->id_kamar);

        $dateCheckin = $book->tgl_check_in;
        $dateCheckout = $book->tgl_check_out;

        $datetime1 = new DateTime($dateCheckin);
        $datetime2 = new DateTime($dateCheckout);

        $interval = $datetime1->diff($datetime2);
        $days = $interval->format('%a');

        return view('konfirmasi', ['resi'=>$book, 'days'=>$days]);
    }

    public function successOrder($id)
    {
        $reservasi = Pemesanan::find($id);
        $reservasi->status = "proses";
    }
}
