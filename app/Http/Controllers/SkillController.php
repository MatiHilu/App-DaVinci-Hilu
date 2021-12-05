<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\SkillRequest;

class SkillController extends Controller
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
    public function store(SkillRequest $request)
    
    {
        $data = $request->all();

        $skill = Skill::create([
            'name' => $data['name'],
            'user_id' => intval($data['user_id']),
            'percent' => 50
        ]);

        $skill->save();


        return redirect()->to('user/'.$data['user_id'].'/edit')->with('succes', 'Habilidad Creada con Exito');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeClient(SkillRequest $request)
    {
        $data = $request->all();

        $skill = Skill::create([
            'name' => $data['name'],
            'user_id' => intval($data['user_id']),
            'percent' => $data['percent'],
        ]);

        $skill->save();


        return redirect()->to('my-portfolio')->with('succes', 'Habilidad Creada con Exito');
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
    public function update(Request $request, Skill $skill)
    {

        $skill->update($request->all());

        return redirect()->to('user/'.$skill->user_id.'/edit')->with('succes', 'Habilidad Modificada con Exito');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateClient(SkillRequest $request, Skill $skill)
    {

        $data = $request->all();
        $skill = Skill::find($data['id']);

        $skill->update($request->all());
        return redirect()->to('my-portfolio')->with('succes', 'Habilidad Modificada con Exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Skill $skill)
    {
        $id = $skill->user_id;

        $skill = Skill::find($skill->id);
        $skill->delete();

        return redirect()->to('user/'.$id.'/edit')->with('danger', 'Habilidad Borrada');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyClient(Request $request, Skill $skill)
    {

        
        $data = $request->all();
        $skill = Skill::find($data['skill_id']);
        $skill->delete();

        return redirect()->to('my-portfolio')->with('danger', 'Habilidad Borrada');;
    }
}
