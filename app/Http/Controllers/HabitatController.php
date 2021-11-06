<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Habitat;
use Illuminate\Http\Request;

class HabitatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('habitat.indexhabitat',[
            'habitats' => Habitat::paginate(5),
            
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('habitat.createhabitat',[
            'animals' => Animal::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'code' => 'required|min:2|max:3|unique:habitats',
            'name' => 'required|unique:habitats',
            'humidity'=> 'required',
            'min_size' => 'required|integer',
            'max_size' => 'required|integer|gt:min_size',
            'description' => 'required'
        ]);

        Habitat::create($validatedData);
        return redirect('/habitats')->with('createdHabitat','You have successfully created a new Habitat Entry');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Habitat  $habitat
     * @return \Illuminate\Http\Response
     */
    public function show($code)
    {
        return view('habitat.showhabitat',[
            'habitat' => Habitat::where('code',$code)->first()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Habitat  $habitat
     * @return \Illuminate\Http\Response
     */
    public function edit($code)
    {
        return view('habitat.edithabitat',[
            'habitat' => Habitat::where('code',$code)->first(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Habitat  $habitat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $code)
    {
        $validatedData = $request->validate([
            'code' => 'required|min:2|max:3|unique:habitats',
            'name' => 'required|unique:habitats',
            'humidity'=> 'required',
            'min_size' => 'required|integer',
            'max_size' => 'required|integer|gt:min_size',
            'description' => 'required'
        ]);

        Habitat::where('code',$code)->update($validatedData);
        return redirect('/habitats')->with('editedHabitat','You have successfully updated a Habitat Entry');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Habitat  $habitat
     * @return \Illuminate\Http\Response
     */
    public function destroy($code)
    {
        Habitat::where('code',$code)->delete();
        return redirect('/habitats')->with('success','You have deleted a habitat entry!');
    }
}
