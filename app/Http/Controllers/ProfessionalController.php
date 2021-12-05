<?php

namespace App\Http\Controllers;


use App\Models\Professional;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ProfessionalRequest;

class ProfessionalController extends Controller
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
    public function store(ProfessionalRequest $request)
    {
        $data = $request->all();

        $professional = Professional::create([
            'name' => $data['name'],
            'user_id' => intval($data['user_id']),
            'percent' => 50
        ]);

        $professional->save();


        return redirect()->to('user/'.$data['user_id'].'/edit')->with('succes', 'Habilidad profesional Creada con Exito');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeClient(ProfessionalRequest $request)
    {
        $data = $request->all();

        $professional = Professional::create([
            'name' => $data['name'],
            'user_id' => intval($data['user_id']),
            'percent' => $data['percent'],
        ]);

        $professional->save();


        return redirect()->to('my-portfolio')->with('succes', 'Habilidad profesional Creada con Exito');
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
    public function update(Request $request, Professional $professional)
    {

        $professional->update($request->all());

        return redirect()->to('user/'.$professional->user_id.'/edit')->with('succes', 'Habilidad profesional Modificada con Exito');
    }

    public function updateClient(Request $request, Professional $professional)
    {

        $data = $request->all();
        $professional = Professional::find($data['id']);

        $professional->update($request->all());
        return redirect()->to('my-portfolio')->with('succes', 'Habilidad profesional Modificada con Exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Professional $professional)
    {
        $id = $professional->user_id;

        $professional = Professional::find($professional->id);
        $professional->delete();

        return redirect()->to('user/'.$id.'/edit')->with('danger', 'Habilidad profesional Borrada');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyClient(Request $request, Professional $professional)
    {

        $data = $request->all();
        $professional = Professional::find($data['professional_id']);
        $professional->delete();

        return redirect()->to('my-portfolio')->with('danger', 'Habilidad Borrada');;
    }
}
