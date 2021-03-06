<?php

namespace App\Http\Controllers;

use App\Http\Resources\SedeResource;
use App\Models\Detalle_Inventario;
use App\Models\Sede;
use Exception;
use Illuminate\Http\Request;

class SedeController extends Controller
{
    public function index()
    {
        try
        {
            return SedeResource::collection(Sede::all());
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
            $sede = $request->all();
            Sede::create($sede);

            $data = $request->data;
            $sede = Sede::latest('id')->first();
            
            foreach ($data as $detalle)
            {
                $detalle["Id_Sede"] = $sede->id;
                Detalle_Inventario::create($detalle);
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

    public function show(Sede $sede)
    {
        try
        {
            return new SedeResource($sede);
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

    public function update(Request $request, Sede $sede)
    {
        try
        {
            $datos = $request->all();
            $sede->update($datos);

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

    public function destroy(Sede $sede)
    {
        try
        {
            $sede->delete();

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
