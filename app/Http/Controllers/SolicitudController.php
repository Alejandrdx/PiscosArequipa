<?php

namespace App\Http\Controllers;

use App\Models\Solicitud;
use Illuminate\Http\Request;

use App\Http\Resources\SolicitudResource;
use App\Models\Detalle_Solicitud;
use Exception;

class SolicitudController extends Controller
{
    public function index()
    {
        try
        {
            return SolicitudResource::collection(Solicitud::all());
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
            $solicitud = $request->all();
            Solicitud::create($solicitud);

            $data = $request->data;
            $solicitud = Solicitud::latest('id')->first();
            
            foreach ($data as $detalle)
            {
                $detalle["Id_Solicitud"] = $solicitud->id;
                Detalle_Solicitud::create($detalle);
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

    public function show(Solicitud $solicitud)
    {
        try
        {
            return new SolicitudResource($solicitud);
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

    public function update(Request $request, Solicitud $solicitud)
    {
        try
        {
            $datos = $request->all();
            $solicitud->update($datos);

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

    public function destroy(Solicitud $solicitud)
    {
        try
        {
            $solicitud->delete();

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
