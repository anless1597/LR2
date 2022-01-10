<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Capitals;

class CapitalsController extends Controller
{
    public function index()
    {
        $capitals = Capitals::all();
        return view('capitals.index', compact("capitals"));
    }

    public function create()
    {
        return view('capitals.create');
    }

    public function store(Request $request)
    {
        $request->validate([
                'file' => 'required|mimes:png,jrg,jpeg',
                'name' => 'required',
                'country' => 'required',
                'population' => 'required|numeric',
            ]);
        $fileName = $request->name . '.' . $request->file->extension();
        $request->file->move(public_path('images'), $fileName);
        Capitals::create([
            'photo_url'=>'images/'.$fileName,
            'name'=>$request->name,
            'country'=>$request->country,
            'population'=>$request->population
        ]);
        $capitals = Capitals::all();
        return redirect()->route('capitals.index', compact('capitals'));
    }

    public function show(Capitals $capital)
    {
        return view('capitals.show', compact('capital'));
    }

    public function edit($id)
    {
        $capital = Capitals::find($id);
        return view('capitals.edit', compact('capital'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'file' => 'mimes:png,jpg,jpeg',
            'name' => 'required',
            'country' => 'required',
            'population' => 'required|numeric',
        ]);
        $list_on_update = [
            'name' => $request->name,
            'country' => $request->country,
            'population' => $request->population,
        ];
        if ($request->hasFile('file')) {
            $fileName = $request->name . '.' . $request->file->extension();
            $request->file->move(public_path('images'), $fileName);
            $list_on_update += ['photo_url' => 'images/' . $fileName];
        }
        $capital = Capitals::find($id);
        $capital->update($list_on_update);
        return redirect('capitals');
    }

    public function destroy($id)
    {
        $capital = Capitals::find($id);
        $capital->delete();
        return redirect('capitals');
    }
}
