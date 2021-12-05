<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UserRequest;



class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::with('education', 'skill', 'roles', 'rrss', 'whatido', 'projects', 'professional', 'experience', 'blog')->latest()->get();


        return view('admin.users.index', compact('users'));
        //return view('my-portfolio', compact('users'));

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
    public function edit(User $user)
    {
   
            return view('admin.users.edit', compact('user'));
        
        
        //return redirect()->route('user.index')->with('succes', 'El usuario fue editado con éxito');
    }

    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, User $user)
    {
       /* if($request->file('file')){
            $user->image = $request->file('file')->store('users', 'public');
            $user->save();
        }*/

        // Validaciones en el controlador
        /* $request->validate([
            'name'          => 'required | min:5 | max:64',
            'title_job'     => 'required | min:5 | max:64',
            'tel'           => 'required | numeric | min:6',
            'address'       => 'required | min:10 | max:128',
            'file'          => 'image:jpg | dimensions:min_width=100,min_height=200 | size:512',
        ]);*/

        if($request->file('file')){
            Storage::disk('public')->delete($user->image);
            $user->image = $request->file('file')->store('users', 'public');
            $user->save();
        }

        
        date($request->all());


        
            return redirect()->route('user.index')->with('succes', 'El usuario fue editado con éxito');
         

       // return redirect()->to('user');
       // return redirect()->route('user.index')->with('succes', 'El usuario fue editado con éxito');
       // return redirect()->route('my-portfolio')->with('succes', 'El usuario fue editado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        if($user->image){
            Storage::disk('public')->delete($user->image);
        }
        $user->delete();

        return redirect()->route('user.index')->with('succes', 'El usuario fue eliminado con éxito');
    }

    public function logout_user()
    {
        Auth::logout();
        return view('welcome');
    }

    public function my_portfolio()
    {
        $user = User::where('id', Auth::user()->id)->with('education', 'skill', 'roles', 'rrss', 'whatido', 'projects', 'professional', 'experience', 'blog')->get();
        $user = $user[0];
        
        

        return view('my-portfolio', compact('user'));
    }

    public function my_portfolio_edit()
    {
        $user = User::where('id', Auth::user()->id)->with('education', 'skill', 'roles', 'rrss', 'whatido', 'projects', 'professional', 'experience', 'blog')->get();
        $user = $user[0];
      

        return view('my-portfolio-edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateClient(UserRequest $request, User $user)
    {
        $data = $request->all();
        $user = User::find($data['id']);

        if($request->file('file')){
           
            Storage::disk('public')->delete($user->image);
            $user->image = $request->file('file')->store('users', 'public');
            $user->save();
        }

        if($request->file('file_about_me')){
            
            Storage::disk('public')->delete($user->image_about_me);
            $user->image_about_me = $request->file('file_about_me')->store('users', 'public');
            $user->save();
        }
        $data=$request->all();
        
        $data['image_about_me'] = $user->image_about_me;
        $user->update($request->all());
       
        return redirect()->route('my-portfolio')->with('succes', 'El usuario fue editado con éxito');
    }
}
