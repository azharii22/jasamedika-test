<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\Kelurahan;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DateTime;
use DB;
use PDF;

class OperatorController extends Controller
{
    public function indexOperator()
    {
        $pasien = Pasien::with('kelurahan')->orderBy('id', 'ASC')->get();
        return view('operator.home', compact('pasien'))->with('i');
    }

    public function create()
    {
        $pasien = Pasien::with('kelurahan')->get();
        $kelurahan = Kelurahan::all();
        return view('operator.tambahPasien', compact('pasien', 'kelurahan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama'     => 'required',
            'alamat'   => 'required',
            'no_telp'  => 'required',
            'rt'       => 'required',
            'rw'       => 'required',
            'jk'        => 'required',
            'tgl_lahir' => 'required',

            'id_kel'        => 'required',
        ]);


        $a = DB::table('pasiens')->select(DB::raw('MAX(RIGHT(id_pasien,3)) as kd_max'))
            ->whereYear('created_at', Carbon::now()->year)
            ->whereMonth('created_at', Carbon::now()->month)
            ->count();

            $tmp = $a + 1;
            $kd = sprintf("%06s", $tmp);

            $now = new DateTime();
            $year = substr($now->format("Y"), -2);
            $month = substr($now->format("m"), -2);
            $date = $now->format("d");

        $pasien = Pasien::create([
            'nama'          => $request->nama,
            'alamat'         => $request->alamat,
            'no_telp'       => $request->no_telp,
            'rt'              => $request->rt,
            'rw'       => $request->rw,
            'jk'       => $request->jk,
            'tgl_lahir'       => $request->tgl_lahir,
            'id_kel'       => $request->id_kel,
            'id_pasien' => $year . $month . $kd,
        ]);
        return redirect('operator');
    }

    public function destroy(Pasien $pasien, $id)
    {
        $pasien = Pasien::find($id);
        $pasien->delete();

        return redirect('operator');
    }

    public function edit(Pasien $pasien, $id)
    {
        $pasien = Pasien::findOrFail($id);
        $kelurahan = Kelurahan::all();
        return view('operator.editPas', compact('pasien', 'kelurahan'));
    }

    public function update(Request $request, Pasien $pasien, $id)
    {
        $pasien = Pasien::findOrFail($id);
        $pasien->nama     = $request->nama;
        $pasien->alamat     = $request->alamat;
        $pasien->no_telp    = $request->no_telp;
        $pasien->rt         = $request->rt;
        $pasien->rw         = $request->rw;
        $pasien->jk         = $request->jk;
        $pasien->tgl_lahir   = $request->tgl_lahir;
        $pasien->id_kel     = $request->id_kel;


        $pasien->update();

        return redirect('operator');
    }

    public function cetak($id)
    {
        $pasien =  Pasien::with([
                        'kelurahan'
                    ])
                    ->find($id);
        $customPaper = array(0,0,390,620);
        $pdf = PDF::loadView('operator.cetak', compact('pasien'))->setPaper($customPaper);

        return $pdf->stream($pasien->id_pasien.'.pdf');
    }
}
