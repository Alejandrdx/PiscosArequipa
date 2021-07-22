<?php

namespace App\Http\Controllers;

use App\Http\Resources\DetalleInventarioResource;
use App\Models\Detalle_Inventario;
use Exception;
use Illuminate\Http\Request;

class DetalleInventarioController extends Controller
{
    public function index()
    {
        try
        {
            return DetalleInventarioResource::collection(Detalle_Inventario::all());
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
            Detalle_Inventario::create($detalle);

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

    public function show(Detalle_Inventario $detalle_Inventario)
    {
        try
        {
            return new DetalleInventarioResource($detalle_Inventario);
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

    public function update(Request $request, Detalle_Inventario $detalle_Inventario)
    {
        try
        {
            $datos = $request->all();
            $detalle_Inventario->update($datos);

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

    public function destroy(Detalle_Inventario $detalle_Inventario)
    {
        try
        {
            $detalle_Inventario->delete();

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
