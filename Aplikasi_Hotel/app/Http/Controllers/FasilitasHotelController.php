<?php

namespace App\Http\Controllers;

use App\Models\Fasilitashtl;
use Illuminate\Http\Request;

class FasilitasHotelController extends Controller
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
            Fasilitashtl::select('id', 'nama_fasilitashtl')
                ->whereRaw("lower(nama_fasilitashtl) like lower('%$search%')")
                ->orderBy('id')->paginate(10) :
            Fasilitashtl::all();
        return view('fasilitashotel.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('fasilitashotel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_fasilitashtl' => 'required|min:3',
            'foto_fasilitashtl' => 'required|image|mimes:png,jpg,jpeg',
            'deskripsi_fasilitashtl' => 'required|min:10',
        ]);
        Fasilitashtl::create([
            'nama_fasilitashtl'=>$request->nama_fasilitashtl,
            'foto_fasilitashtl'=> $request->hasFile('foto_fasilitashtl') ? $request->file('foto_fasilitashtl')->store('foto-fasilitashtl', 'public') : null,
            'deskripsi_fasilitashtl'=>$request->deskripsi_fasilitashtl,
        ]);
        return redirect()->route('fasilitashtl.index')->with('status','store');
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
    public function edit(Fasilitashtl $fasilitashtl)
    {
        return view('fasilitashotel.edit',['row'=>$fasilitashtl]);
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
            'nama_fasilitashtl' => 'required|min:3',
            'foto_fasilitashtl' => 'image|mimes:png,jpg,jpeg',
            'deskripsi_fasilitashtl' => 'required|min:10',
        ]);

        if($request->hasFile('foto_fasilitashtl')) {
            $data['foto_fasilitashtl'] = $request->file('foto_fasilitashtl')->storeAs('foto-kamar',
                $request->file('foto_fasilitashtl')->hashName().
                $request->file('foto_fasilitashtl')->extension(), 'public');
        }

        $fasilitashtl = Fasilitashtl::find($id);
        $fasilitashtl->update($data);

        return redirect()->route('fasilitashtl.index')->with('status','update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Fasilitashtl::find($id);
        $data->delete();
        return redirect()->route('fasilitashtl.index')->with('status','destroy');
    }
}
