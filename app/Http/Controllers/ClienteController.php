<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use Illuminate\Http\Request;

use App\Http\Resources\ClienteResource;
use Exception;

class ClienteController extends Controller
{

    public function index()
    {
        try
        {
            return ClienteResource::collection(cliente::all());
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
            $cliente = $request->all();
            cliente::create($cliente);

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

    public function show(cliente $cliente)
    {
        try
        {
            return new ClienteResource($cliente);
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

    public function update(Request $request, cliente $cliente)
    {
        try
        {
            $datos = $request->all();
            $cliente->update($datos);

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

    public function destroy(cliente $cliente)
    {
        try
        {
            $cliente->delete();

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