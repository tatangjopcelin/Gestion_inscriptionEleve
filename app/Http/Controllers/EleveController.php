<?php

namespace App\Http\Controllers;

use App\Models\Eleve;
use App\Models\Image;

use App\Http\Requests\StoreEleveRequest;
use App\Http\Requests\UpdateEleveRequest;

class EleveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $eleves = Eleve::all();
        return view(
            'index',[
                'eleves'=>$eleves
            ]
            );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('welcome');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEleveRequest $request)
    {
        $data = $request->validated(
            [
                'photo_profil'=>'nullable()',
               'nom' =>'required|max:255',
               'prenom' =>'required|max:255',
               'email' =>'required|max:255',
               'classe' =>'required|max:255',
               'sexe' =>'required|max:1',
               'specialite' =>'required|max:255',

            ]
            );


        $eleves = new Eleve();
        $eleves->nom=$request->nom;
        $eleves->prenom=$request->prenom;
        $eleves->email=$request->email;
        $eleves->classe=$request->classe;
        $eleves->sexe=$request->sexe;
        $eleves->specialite=$request->specialite;
       // $e=$eleves->create();
       // dd($e);
       if($request->hasFile('photo_profil')){
        $path = $request->file('photo_profil')->store('photo','public');
        $eleves->photo_profil = $path;
       }
       $eleves->save();

        return redirect()->route('eleves.index');


    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $eleve=Eleve::find($id);
        if($eleve){

            return view('show', compact('eleve'));
        }else{
            return redirect()->route('eleves.index')->with('erro', 'eleve non trouvable');
        }

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $eleve = Eleve::where('id',$id)->get();
        // dd($eleve);
        return view('update',compact('eleve'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEleveRequest $request, $id)
    {
        $data = $request->validated(
            [
               'nom' =>'nullable|max:255',
               'prenom' =>'nullable|max:255',
               'email' =>'nullable|max:255',
               'classe' =>'nullable|max:255',
               'sexe' =>'nullable|max:1',
               'specialite' =>'nullable|max:255',

            ]
            );



        $eleves=Eleve::find($id);
        $eleves->nom=$request->nom;
        $eleves->prenom=$request->prenom;
        $eleves->email=$request->email;
        $eleves->classe=$request->classe;
        $eleves->sexe=$request->sexe;
        $eleves->specialite=$request->specialite;
        $eleves->save();


        $image= new Image();
        $image=$request->file("image")
        ->store('storage/photo-eleve','public');
        $path ='storage/photo-eleve/'.$image;

        $eleve=Eleve::create([
            'photo_path'=>$path,
            'eleve_id'=>$eleve_id,
        ]);


        $image->url=$request->url;
        $image->eleve_id=$request->eleve_id;
        $image->save();

        return redirect()->route('eleves.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $eleves=Eleve::find($id);
        if($eleves){
        $eleves->delete();
        return redirect()->back();
        } else{
            return redirect()->back();
        }
    }
}
