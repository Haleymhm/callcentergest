<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\User;

use Session;
use Image;

class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        return view('profile.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::find(auth()->user()->id);
        if($request->passw!=""){
            $pw=Hash::make($request->passw);
            $user->password=$pw;
        }
        $user->run  = $request->run;
        $user->name  = $request->name;
        $user->telephone  = $request->telephone;
        $user->birthday  = $request->birthday;
        
        $user->save();

        Session::flash('save','El Usuario se ha CREADO Exitosamente');

        return view('home');
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
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function updatephoto(Request $request)
    {

        $ruta = public_path().'/upload/avatar';
        $date = new Carbon(now());
        $dateupload= $date->format('Ymd_hhmmss');
        $this->validate($request, [
            'photo' => 'required|image'
        ]);

        $imagenOriginal = $request->file('photo');
        $extension = $imagenOriginal->getClientOriginalExtension();
        if (isset($imagenOriginal)){

            $imagen = Image::make($imagenOriginal);
            $tmp="/". auth()->user()->uidempresa . "-".auth()->user()->id;
            $temp_name = $tmp.$dateupload . '.' . $extension;

            $uploadfile=$imagen->save($ruta . $temp_name, 100);

            $usuario = User::find($id);
            $usuario->photo = $temp_name;
            $saved=$usuario->save();
            $ruta=asset('/upload/avatar'.$temp_name);
            $data['success'] = $saved;
            $data['path'] = $ruta;

            return $data;
        }
    }
}
