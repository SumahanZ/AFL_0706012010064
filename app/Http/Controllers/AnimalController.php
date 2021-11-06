<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Habitat;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('animal.indexanimal',[
            'animals' => Animal::paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('animal.createanimal',[
            'habitats' => Habitat::all(),
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
            'animal_code' => 'required|min:2|max:3|unique:animals',
            'name' => 'required|unique:animals|string',
            'latin_name'=> 'required|unique:animals|string',
            'species' => 'required|string',
            'habitat_name' => 'required',
            'class' => 'required|string',
            'description' => 'required'
        ]);

        Animal::create($validatedData);
        return redirect('/animals')->with('createdAnimal','You have successfully created a new Animal Entry');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function show($code)
    {
        return view('animal.showanimal',[
            'animal' => Animal::where('animal_code',$code)->first()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function edit($code)
    {
        return view('animal.editanimal',[
            'animal' => Animal::where('animal_code',$code)->first(),
            'habitat' => Habitat::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $code)
    {
        $validatedData = $request->validate([
            'animal_code' => 'required|min:2|max:3|unique:animals',
            'name' => 'required|unique:animals',
            'latin_name'=> 'required',
            'species' => 'required|string',
            'habitat_name' => 'required',
            'class' => 'required|string',
            'description' => 'required'
        ]);

        Animal::where('animal_code',$code)->update($validatedData);
        return redirect('/animals')->with('editedAnimal','You have successfully updated an Animal Entry');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function destroy($code)
    {
        Animal::where('animal_code',$code)->delete();
        return redirect('/animals')->with('success','You have deleted an animal entry!');
    }
}
