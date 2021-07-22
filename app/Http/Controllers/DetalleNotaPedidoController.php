<?php

namespace App\Http\Controllers;

use App\Http\Resources\DetalleNotaPedidoResource;
use App\Models\Detalle_NotaPedido;
use Exception;
use Illuminate\Http\Request;

class DetalleNotaPedidoController extends Controller
{
    public function index()
    {
        try
        {
            return DetalleNotaPedidoResource::collection(Detalle_NotaPedido::all());
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
            Detalle_NotaPedido::create($detalle);

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

    public function show(Detalle_NotaPedido $detalle_NotaPedido)
    {
        try
        {
            return new DetalleNotaPedidoResource($detalle_NotaPedido);
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

    public function update(Request $request, Detalle_NotaPedido $detalle_NotaPedido)
    {
        try
        {
            $datos = $request->all();
            $detalle_NotaPedido->update($datos);

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

    public function destroy(Detalle_NotaPedido $detalle_NotaPedido)
    {
        try
        {
            $detalle_NotaPedido->delete();

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
