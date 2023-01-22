<?php

namespace App\Http\Controllers;

use App\Models\Kelurahan;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $kelurahan = Kelurahan::orderBy('kelurahan', 'ASC')->get();
        return view('admin.adminHome', compact('kelurahan'))->with('i');
    }

    public function createKel()
    {
        return view('admin.tambahKel');
    }

    public function storeKel(Request $request)
    {
        $request->validate([
            'kelurahan' => 'required',
            'kecamatan' => 'required',
            'kota'      => 'required',
        ]);

        $kelurahan = Kelurahan::create([
            'kelurahan'  => $request->kelurahan,
            'kecamatan'  => $request->kecamatan,
            'kota'       => $request->kota,
        ]);


        return redirect('admin');
    }

    public function editKel(Kelurahan $kelurahan, $id)
    {
        $kelurahan = Kelurahan::find($id);
        return view('admin.editKel', compact('kelurahan'));
    }

    public function updateKel(Request $request, $id)
    {
        $kelurahan = Kelurahan::findOrFail($id);
        $kelurahan->kelurahan     = $request->kelurahan;
        $kelurahan->kecamatan     = $request->kecamatan;
        $kelurahan->kota          = $request->kota;


        $kelurahan->update();

        return redirect('admin');

        // $kelurahan = Kelurahan::find($id);
        // $kelurahan->update([
        //     'kelurahan'  => $request->kelurahan,
        //     'kecamatan'    => $request->kecamatan,
        //     'kota'    => $request->kota
        // ]);

        // return redirect('admin');
    }

    public function destroyKel(Kelurahan $kelurahan, $id)
    {
        $kelurahan = Kelurahan::find($id);
        $kelurahan->delete();

        return redirect('admin');
    }
    // public function kelurahan()
    // {
    //     $kelurahan = Kelurahan::orderBy('kelurahan', 'ASC')->get();
    //     return view('adminHome', compact('kelurahan'))->with('i');
    // }
}
