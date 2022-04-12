<?php

namespace App\Http\Controllers;

use App\Models\DetailKamar;
use App\Models\Fasilitaskmr;
use App\Models\Kamar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class KamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->get('search');
        $data = $request->has('search') ?
            Kamar::select('id', 'nama_kamar', 'jum_kamar', 'harga_kamar')
                ->whereRaw("lower(nama_kamar) like lower('%$search%') or lower(harga_kamar) like lower('%$search%')")
                ->orderBy('id')->paginate(10) :
            Kamar::all();
        return view('kamar.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $fasilitas = Fasilitaskmr::all();
        return view('kamar.create', ['fasilitas' => $fasilitas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_kamar' => 'required|min:3',
            'file_kamar' => 'required|image|mimes:png,jpg,jpeg',
            'jumlah_kamar' => 'required',
            'ketersediaan' => 'required',
            'harga_kamar' => 'required',
            'deskripsi' => 'required|min:10',
        ]);

        $kamar = Kamar::create([
            'nama_kamar' => $request->nama_kamar,
            'foto_kamar' => $request->hasFile('file_kamar') ? $request->file('file_kamar')->store('foto-kamar', 'public') : null,
            'jum_kamar' => $request->jumlah_kamar,
            'ketersediaan' => $request->ketersediaan,
            'harga_kamar' => $request->harga_kamar,
            'deskripsi_kamar' => $request->deskripsi,
        ]);

        foreach ($request->get('nama_fasilitas') as $f) {
            DetailKamar::create([
                'kamar_id' => $kamar->id,
                'fasilitaskmr_id' => $f,
            ]);
        }

        return redirect()->route('kamar.index')->with('status', 'store');
    }

    /**\n
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Kamar $kamar)
    {
        $fasilitas = Fasilitaskmr::all();
        return view('kamar.edit', ['row' => $kamar, 'fasilitas' => $fasilitas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     * @throws \Exception
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'nama_kamar' => 'required|min:3',
            'foto_kamar' => ['image', 'mimes:png,jpg,jpeg'],
            'jum_kamar' => 'required',
            'ketersediaan' => 'required',
            'harga_kamar' => 'required',
            'deskripsi_kamar' => 'required|min:10',
        ]);

        if ($request->hasFile('file_kamar')) {
            $file = $request->file('file_kamar');
            $fileName = $file->hashName() . $file->extension();

            $data['foto_kamar'] = $file->storeAs(
                'foto-kamar',
                $fileName,
                'public'
            );
        }

        $kamar = Kamar::find($id);

        $kamar->update($data);

        $requestFasilitasKamarIds = $request->get('nama_fasilitas') ?? [];

        // Ambil fasilitas yang tidak present dalam request, lalu delete
        $oldFasilitas = $kamar->fasilitas()->get()->toArray();
        $oldFasilitasIds = array_column($oldFasilitas, 'id') ?? [];
        DetailKamar::whereIn('fasilitaskmr_id', array_diff($oldFasilitasIds, $requestFasilitasKamarIds))
            ->delete();

        // Ambil fasilitas yang ada di request dan belum ada di database
        $newFasilitas = Fasilitaskmr::whereIn('id', $requestFasilitasKamarIds)->get()
            ->diff($kamar->fasilitas()->get());

        foreach ($newFasilitas as $f) {
            DetailKamar::create([
                'kamar_id' => $kamar->id,
                'fasilitaskmr_id' => $f->id,
            ]);
        }

        return redirect()->route('kamar.index')->with('status', 'update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Kamar::find($id);
        $data->delete();
        return redirect()->route('kamar.index')->with('status', 'destroy');
    }
}
