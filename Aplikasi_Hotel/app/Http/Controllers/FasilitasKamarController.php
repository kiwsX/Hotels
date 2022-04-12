<?php

namespace App\Http\Controllers;

use App\Models\Fasilitaskmr;
use Illuminate\Http\Request;

class FasilitasKamarController extends Controller
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
            Fasilitaskmr::select('id', 'nama_fasilitaskmr')
                ->whereRaw("lower(nama_fasilitaskmr) like lower('%$search%')")
                ->orderBy('id')->paginate(10) :
            Fasilitaskmr::all();
        return view('fasilitaskamar.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('fasilitaskamar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
        'nama_fasilitaskmr' => 'required',
    ]);
//         Fasilitaskmr::create([
//             'nama_fasilitaskmr'=>$request->nama_fasilitaskmr,
//
//         ]);
         $fasilitas = new Fasilitaskmr;
         $fasilitas->nama_fasilitaskmr = $request->nama_fasilitaskmr;
         $fasilitas->save();

//         dd($fasilitas);
        return redirect()->route('fasilitaskmr.index')->with('status','store');
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Fasilitaskmr $fasilitaskmr)
    {
        return view('fasilitaskamar.edit',['row'=>$fasilitaskmr]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'nama_fasilitaskmr' => 'required|min:3',
        ]);

        Fasilitaskmr::where('id', $id)
            ->update($data);

        return redirect()->route('fasilitaskmr.index')->with('status','update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Fasilitaskmr::find($id);
        $data->delete();
        return redirect()->route('fasilitaskmr.index')->with('status','destroy');
    }
}
