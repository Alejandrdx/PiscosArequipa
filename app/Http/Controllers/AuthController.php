<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        try
        {
            if(!Auth::attempt($request->only('login', 'password')))
            {
                return response()->json([
                    'res' => false,
                    'message' =>'Usuario Incorrecto'
                ],401);
            }

            $user = Auth::user();
            $token = $user->createToken('token')->plainTextToken;
            $cookie = cookie('jwt', $token, 60 *24);

            return response()->json([
                'res' => true,
                'message' =>'Exito',
                'Token' => $token
            ],200)->withCookie($cookie);
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

    public function logout(Request $request)
    {
        $cookie = Cookie::forget('jwt');

        return response()->json([
            'res' => true,
            'message' =>'Logout Exitoso'
        ],200)->withCookie($cookie);
    }

    public function index()
    {
        try
        {
            return UserResource::collection(User::all());
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
            $user = User::create([
                'login' => $request->input('login'),
                'password' => Hash::make($request->input('password')),
                'Nombres' => $request->input('Nombres'),
                'Apellido_Paterno' => $request->input('Apellido_Paterno'),
                'Apellido_Materno' => $request->input('Apellido_Materno'),
                'DNI' => $request->input('DNI'),
                'Direccion' => $request->input('Direccion'),
                'Telefono' => $request->input('Telefono'),
                'Email' => $request->input('Email'),
                'Id_Rol' => $request->input('Id_Rol'),
            ]);
    
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

    public function show(User $user)
    {
        try
        {
            return new UserResource($user);
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

    public function update(Request $request, User $user)
    {
        try
        {
            $datos = $request->all();
            $user->update($datos);

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

    public function destroy(User $user)
    {
        try
        {
            $user->delete();

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
