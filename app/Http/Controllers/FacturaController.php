<?php

namespace App\Http\Controllers;

use App\Http\Resources\FacturaResource;
use App\Models\Detalle_Factura;
use App\Models\Factura;
use Exception;
use Illuminate\Http\Request;

class FacturaController extends Controller
{
    public function index()
    {
        try
        {
            return FacturaResource::collection(Factura::all());
        }
        catch(Exception $e)
        {
            return response()->json([
                'res' => false,
                'message' =>'Error',
                'Exception' => $e
            ],400);
        }
    }

    public function store(Request $request)
    {
        try
        {
            $factura = $request->all();
            Factura::create($factura);

            $data = $request->data;
            $factura = Factura::latest('id')->first();
            
            foreach ($data as $detalle)
            {
                $detalle["Id_Factura"] = $factura->id;
                Detalle_Factura::create($detalle);
            }

            return response()->json([
                'res' => true,
                'message' =>'Exito'
            ],200);
        }
        catch(Exception $e)
        {
            return response()->json([
                'res' => false,
                'message' =>'Error al crear el registro',
                'Exception' => $e
            ],400);
        }   
    }

    public function show(Factura $factura)
    {
        try
        {
            return new FacturaResource($factura);
        }
        catch(Exception $e)
        {
            return response()->json([
                'res' => false,
                'message' =>'Error',
                'Exception' => $e
            ],400);
        }
    }

    public function update(Request $request, Factura $factura)
    {
        try
        {
            $datos = $request->all();
            $factura->update($datos);

            return response()->json([
                'res' => true,
                'message' =>'Registro actualizado Correctamente'
            ],200);
        }
        catch(Exception $e)
        {
            return response()->json([
                'res' => false,
                'message' =>'Error',
                'Exception' => $e
            ],400);
        }
    }

    public function destroy(Factura $factura)
    {
        try
        {
            $factura->delete();

            return response()->json([
                'res' => true,
                'message' =>'Registro eliminado Correctamente'
            ],200);
        }
        catch(Exception $e)
        {
            return response()->json([
                'res' => false,
                'message' =>'Error',
                'Exception' => $e
            ],400);
        }
    }
}
