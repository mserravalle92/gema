<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Colegio;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ColegioRequest;

class ColegioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $colegios = Colegio::all();
        return view('colegios.index', ['colegios' => $colegios ] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $colegio = new Colegio;
        return view('colegios.create',['colegio'=>$colegio]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ColegioRequest $request)
    {
        $colegio = new Colegio();
        $colegio->fill($request->all());
        $colegio->user_id = Auth::user()->id;
        
        if ($colegio->save()) {

            flash('Colegio agregado correctamente','success');
            return redirect('/colegios');

        }
        else{

            flash('Problema al agregar el colegio','danger');
            return view('colegios.create');
        }


        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $colegio = Colegio::find($id);
        return view('colegios.edit',['colegio'=>$colegio]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ColegioRequest $request, $id)
    {
        $colegio = Colegio::find($id);
        $colegio->fill($request->all());

        if ($colegio->save()) {

            flash('Colegio agregado correctamente','success');
            return redirect('/colegios');

        }
        else{

            flash('Problema al agregar el colegio','danger');
            return view('colegios.edit');
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Colegio::destroy($id);

        flash('Colegio eliminado correctamente','warning');
            return redirect('/colegios');

        return redirect('/colegios');
    }
}
