<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clima;

class ClimaController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('ciudad')) {
            Clima::create([
                'ciudad' => $request->ciudad,
                'temperatura' => rand(10, 30),
                'estado' => 'Soleado',
                'humedad' => rand(40, 80),
            ]);
        }

        $ciudades = Clima::all();

        return view('clima', compact('ciudades'));
    }

    public function eliminar($id)
    {
        Clima::findOrFail($id)->delete();
        return redirect('/clima');
    }
}