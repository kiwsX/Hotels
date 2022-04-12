<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
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
            Admin::select('id', 'nama', 'username', 'role')
                ->whereRaw("lower(nama) like lower('%$search%')")
                ->orderBy('id')->paginate(50) :
            Admin::all();

        return view('admin.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
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
            'nama_lengkap'=>'required',
            'username'=>'required|alpha_dash|unique:admins',
            'password'=> 'required',
            'password_konfirmasi' => 'required|same:password',
        ]);

        Admin::create([
           'nama'=>$request->nama_lengkap,
           'username'=>$request->username,
           'password'=>bcrypt($request->password),
           'role'=>'resepsionis',
        ]);
        return redirect()->route('admin.index')->with('status','store');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response|\never
     */
    public function show($id)
    {
        return abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        return view('admin.edit',['row'=>$admin]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        $request->validate([
            'nama_lengkap'=>'required',
            "username'=>'required|alpha_dash|unique:admins,username,{$admin->id}",
            'password'=> 'nullable',
            'password_konfirmasi' => 'nullable|same:password'
        ]);

        if ($request->password){
            $arr = [
                'nama'=>$request->nama_lengkap,
                'username'=>$request->username,
                'password'=>bcrypt($request->password),
            ];
        } else{
            $arr = [
                'nama'=>$request->nama_lengkap,
                'username'=>$request->username,
            ];
        }
        $admin->update($arr);

        return redirect()->route('admin.index')->with('status','update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response|string
     */
    public function destroy(Admin $admin)
    {
        $admin->delete();
        return redirect()->route('admin.index')->with('status','destroy');
    }
    public function akun(){
        $admin = Auth::user();
        return view('admin.akun',['row'=>$admin]);
    }
    public function updateAkun(Request $request){
        $admin = Auth::user();

        $request->validate([
            'nama_lengkap'=>'required',
            "username'=>'required|alpha_dash|unique:admins,username,{$admin->id}",
            'password'=> 'nullable',
            'password_konfirmasi' => 'nullable|same:password'
        ]);

        if ($request->password){
            $arr = [
                'nama'=>$request->nama_lengkap,
                'username'=>$request->username,
                'password'=>bcrypt($request->password),
            ];
        } else{
            $arr = [
                'nama'=>$request->nama_lengkap,
                'username'=>$request->username,
            ];
        }
        $admin->update($arr);

        return back()->with('status','update');
    }
}
