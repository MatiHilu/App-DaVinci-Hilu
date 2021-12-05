<?php

namespace App\Http\Controllers;

use App\Models\WhatIDo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\WhatidoRequest;

class WhatidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeClient(WhatidoRequest $request)
    {
        $data = $request->all();

        $whatido = WhatIDo::create([
            'title' => $data['title'],
            'user_id' => intval($data['user_id']),
            'description' => $data['description'],
        ]);



        $whatido->save();


        return redirect()->to('my-portfolio')->with('succes', 'Que hago Creado con Exito');
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
        //
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
        //
    }

/**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateClient(WhatidoRequest $request, WhatIDo $whatido)
    {

        $data = $request->all();

        
        $whatido = WhatIDo::find($data['id']);
        
        $whatido->update($request->all());
        
        return redirect()->to('my-portfolio')->with('succes', 'Que hago Modificado con Exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(WhatIDo $whatido)
    {
        $id = $whatido->user_id;

        $whatido = WhatIDo::find($whatido->id);
        $whatido->delete();

        return redirect()->to('user/'.$id.'/edit')->with('danger', 'What i do Borrada');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyClient(Request $request, WhatIDo $whatido)
    {

        
        $data = $request->all();
        $whatido = WhatIDo::find($data['what_id']);
        $whatido->delete();

        return redirect()->to('my-portfolio')->with('danger', 'What i do Borrada');;
    }
}
