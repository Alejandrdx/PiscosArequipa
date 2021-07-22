<?php

namespace App\Http\Controllers;

use App\Models\Pisco;
use Illuminate\Http\Request;

use App\Http\Resources\PiscoResource;
use Exception;


class PiscoController extends Controller
{
    public function index()
    {
        try
        {
            return PiscoResource::collection(Pisco::all());
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
            $pisco = $request->all();
            Pisco::create($pisco);

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

    public function show(Pisco $pisco)
    {
        try
        {
            return new PiscoResource($pisco);
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

    public function update(Request $request, Pisco $pisco)
    {
        try
        {
            $datos = $request->all();
            $pisco->update($datos);

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

    public function destroy(Pisco $pisco)
    {
        try
        {
            $pisco->delete();

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
