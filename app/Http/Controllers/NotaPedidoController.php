<?php

namespace App\Http\Controllers;

use App\Http\Resources\NotaPedidoResource;
use App\Models\Detalle_NotaPedido;
use App\Models\Nota_Pedido;
use Exception;
use Illuminate\Http\Request;

class NotaPedidoController extends Controller
{
    public function index()
    {
        try
        {
            return NotaPedidoResource::collection(Nota_Pedido::all());
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
            $nota_pedido = $request->all();
            Nota_Pedido::create($nota_pedido);

            $data = $request->data;
            $nota_pedido = Nota_Pedido::latest('id')->first();
            
            foreach ($data as $detalle)
            {
                $detalle["Id_NotaPedido"] = $nota_pedido->id;
                Detalle_NotaPedido::create($detalle);
            }

            return response()->json([
                'res' => true,
                'message' =>'Exito',
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

    public function show(Nota_Pedido $nota_pedido)
    {
        try
        {
            return new NotaPedidoResource($nota_pedido);
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

    public function update(Request $request, Nota_Pedido $nota_pedido)
    {
        try
        {
            $datos = $request->all();
            $nota_pedido->update($datos);

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

    public function destroy(Nota_Pedido $nota_pedido)
    {
        try
        {
            $nota_pedido->delete();

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
