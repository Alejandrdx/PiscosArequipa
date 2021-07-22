<?php

namespace App\Http\Controllers;

use App\Http\Resources\DetalleFacturaResource;
use App\Models\Detalle_Factura;
use Exception;
use Illuminate\Http\Request;

class DetalleFacturaController extends Controller
{
    public function index()
    {
        try
        {
            return DetalleFacturaResource::collection(Detalle_Factura::all());
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
            $detalle = $request->all();
            Detalle_Factura::create($detalle);

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

    public function show(Detalle_Factura $detalle_Factura)
    {
        try
        {
            return new DetalleFacturaResource($detalle_Factura);
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

    public function update(Request $request, Detalle_Factura $detalle_Factura)
    {
        try
        {
            $datos = $request->all();
            $detalle_Factura->update($datos);

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

    public function destroy(Detalle_Factura $detalle_Factura)
    {
        try
        {
            $detalle_Factura->delete();

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
