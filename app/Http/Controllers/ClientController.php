<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function allUserName($id = null)
    {
        if($id){
            $user = Client::select("name")
            ->where("id", $id)
            ->get();

            $message = array(
                'message' => "Usuario no encontrado Valido",
            );

            return $user ; 

        }else if(!$id){
            $message = array(
                'message' => "Ingrese Un Usuario Valido",
            );
            return response()->json($message, 400);
        }
    }

    public function store(Request $request ){

        
        $request->validate([
            "name" => 'required|string'
        ]);

        Client::create($request->only('name'));

        return redirect()->route('crud')->with('status','Record saved successfully');
    }
}
