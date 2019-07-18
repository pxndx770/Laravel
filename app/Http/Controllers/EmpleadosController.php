<?php

namespace App\Http\Controllers;

use App\Empleados;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Storage;

class EmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['empleados']=Empleados::paginate(5);
        return view('empleados.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('empleados.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //$datosEmpleados= request()->all();
        $datosEmpleados=request()->except('_token');
        if($request->hasfile('Foto')){
            $datosEmpleados['Foto']=$request->file('Foto')->store('uploads','public');
        }
        Empleados::insert($datosEmpleados);

        //return response()->json($datosEmpleados);
        return redirect('empleados')->with('Mensaje','Empleado Agregado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function show(Empleados $empleados)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $empleado=Empleados::findOrFail($id);

        return view('empleados.edit',compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosEmpleados=request()->except(['_token','_method']);
        if($request->hasfile('Foto')){
            $empleado=Empleados::findOrFail($id);
            Storage::delete('public/'.$empleado->Foto);
            $datosEmpleados['Foto']=$request->file('Foto')->store('uploads','public');
        }
        
        Empleados::where('id','=',$id)->update($datosEmpleados);
        $empleado=Empleados::findOrFail($id);
        
        //return view('empleados.edit',compact('empleado'));
        return redirect('empleados')->with('Mensaje','Empleado modificado con exito');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $empleado=Empleados::findOrFail($id);
        if(Storage::delete('public/'.$empleado->Foto)){
            Empleados::destroy($id);

        }


        return redirect('empleados')->with('Mensaje','Usuario Eliminado');

    }
}
