<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Credit;

class CreditController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function read($id = null)
    {
        //condicional para evaluar si el usuario quiere consultar todos los montos o la de un usuarios en concreto
        if($id)
        {
            //Si el usuario manda un id valido obtiene solo los registro de ese usuario 
           return Credit::where("client_id", $id)->get(); 
        }else{
            //Si no manda ID obtendra todos los resultados
            return Credit::all();
        }
        
    }

    public function amount($id = null)
    {
        if($id)
        {
        return Credit::select("client_id",\DB::raw("SUM(amount) as total"))
            ->where("client_id",$id)
            ->groupBy("client_id")
            ->get();
        }else{
            return Credit::select("client_id",\DB::raw("SUM(amount) as total"))
            ->groupBy("client_id")
            ->get();
        }
    }

    public function view($id = ""){
        //instacia del model Credits para usarlo en el formulario para crear y actulizar en los modal;

        $credit = new Credit();
        //consulta a la DB para consultar los registros

        if($id){
            $credits = Credit::where("client_id",$id)
            ->orderBy('client_id', 'DESC')
            ->paginate(10);
        }else{
            $credits = Credit::orderBy('client_id', 'ASC')->paginate(7); 
        }
        
        return view('credits.crud',compact('credit','credits'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Credit::create($request->only('client_id','date','description','amount'));

        return redirect()->route('crud')->with('status','Record saved successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        $credit = Credit::findOrFail($id);
        $data = $request->only('client_id','date','description','amount');

        $credit->update($data);

        return redirect()->route('crud')->with('status','Register successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $credit = Credit::findOrFail($id);
        $credit->delete();
        
        return redirect()->route('crud')->with('delete','ok');
    }
}
