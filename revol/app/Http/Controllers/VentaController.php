<?php

namespace App\Http\Controllers;

use App\Venta;
use App\Dulceria;
use App\Gamer;
use DB;
use App\Http\Datatables\VentaDatatable;
use App\Http\Requests\VentaRequest;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        //$query = Venta::query();
        //$datatables = VentaDatatable::make($query);

        $query = DB::table('ventas')
            ->join('gamers', 'gamers.id', '=', 'ventas.gamer_id')
            ->join('dulcerias', 'dulcerias.id', '=', 'ventas.articulo_id')
            ->select('ventas.*', 'gamers.gamertag AS gamer_id', 'dulcerias.nombre_articulo AS articulo_id')
            ->get();

        $datatables = VentaDatatable::make($query);            

        return $request->ajax()
            ? $datatables->json()
            : view('ventas.index', $datatables->html());
    }

    public function create()
    {
        $articulos = Dulceria::all();
        $gamers = Gamer::all();
        return view('ventas.create', compact('articulos', 'gamers'));
    }

    public function store(VentaRequest $request)
    {
        Venta::create($request->all());

        return $request->input('submit') == 'reload'
            ? redirect()->route('ventas.create')
            : redirect()->route('ventas.index');
    }

    public function show(Venta $venta)
    {
        return view('ventas.show', compact('venta'));
    }

    public function edit(Venta $venta)
    {

        $articulos = Dulceria::all();
        $gamers = Gamer::all();

        return view('ventas.edit', compact('venta', 'articulos', 'gamers'));
    }

    public function update(VentaRequest $request, Venta $venta)
    {
        $venta->update($request->all());

        return $request->input('submit') == 'reload'
            ? redirect()->route('ventas.edit', $venta->id)
            : redirect()->route('ventas.index');
    }

    /** @noinspection PhpUnhandledExceptionInspection */
    public function destroy(Venta $venta)
    {
        $venta->delete();

        return redirect()->route('ventas.index');
    }

    public function getTotalVenta(Request $request) 
    {
        $articulo_id = $request->input('articulo_id');
        $cantidad = $request->input('cantidad');


        $query = DB::table('dulcerias')
            ->select('dulcerias.costo')
            ->where('dulcerias.id', $articulo_id)->first();
        
        $costo = $query->costo;
        $total =  $costo * $cantidad;

        return response()->json(
            [
                'total'=>$total
            ]
        );

    }

}