<?php

namespace App\Http\Controllers;
use App\Trail;
use Illuminate\Http\Request;


class TrailController extends Controller
{
    public function index()
    {
        $trails = Trail::all();
        return view('sentieri.index', compact('trails'));
    }

    public function create()
    {
        return view('sentieri.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' =>'required|max:50',
            'partenza' =>'max:50',
            'arrivo' => 'max:50',
            'vicino' => 'required|max:100',
            'distanza' => 'required',
            'durata' => 'required',
            'percorso' => 'max:60',
            'difficolta' => 'required',
            'descrizione' => 'max:1000'

        ]);
        $data = $request->all();
        $newTrail = new Trail();
        $newTrail->fill($data);
        $newTrail->save();
        return redirect()->route('sentieri.index');
    }

    public function show($id)
    {
        $trail = Trail::find($id);
        return view('sentieri.show', compact('trail'));
    }

    public function edit($id)
    {
        $trail = Trail::find($id);
        if($trail){
            return view('sentieri.edit', compact('trail'));
        }
            return abort('404');
    }

    public function update(Request $request, $id){
        
        $request->validate([
            'nome' => 'required|max:50',
            'partenza' => 'max:50',
            'arrivo' => 'max:50',
            'vicino' => 'required|max:100',
            'distanza' => 'required',
            'durata' => 'required',
            'percorso' => 'max:60',
            'difficolta' => 'required',
            'descrizione' => 'max:1000'
        ]);

        $data = $request->all();
        $trail = Trail::find($id);
        $trail->update($data);

        return redirect()->route('sentieri.index', $trail);
    }

    public function destroy($id)
    {
        $trail = Trail::find($id);
        $trail->delete();
        return redirect()->route('sentieri.index', compact('trail'));
    }
   
}
