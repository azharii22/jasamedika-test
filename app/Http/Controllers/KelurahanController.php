<?php

namespace App\Http\Controllers;

use App\Models\Kelurahan;
use Illuminate\Http\Request;

class KelurahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
     {
         $this->middleware('auth');
     }

     public function index()
    {
        // $kelurahan = Kelurahan::orderBy('kelurahan', 'ASC')->get();
        // return view('adminHome', compact('kelurahan'))->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tambahKel');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kelurahan  $kelurahan
     * @return \Illuminate\Http\Response
     */
    public function show(Kelurahan $kelurahan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kelurahan  $kelurahan
     * @return \Illuminate\Http\Response
     */
    public function edit(Kelurahan $kelurahan)
    {
        return view('admin.editKel');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kelurahan  $kelurahan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kelurahan $kelurahan, $id)
    {
        $request->validate([
            'kelurahan'     => 'required',
            'kecamatan'       => 'required',
            'kota'      => 'required'
        ]);
        $kelurahan = Kelurahan::find($id);
        $kelurahan->update([
            'kelurahan'  => $request->kelurahan,
            'kecamatan'    => $request->kecamatan,
            'kota'    => $request->kota
        ]);

        return redirect('admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kelurahan  $kelurahan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kelurahan $kelurahan, $id)
    {
        $kelurahan = Kelurahan::find($id);
        $kelurahan->delete();

        return redirect('admin');
    }
}
