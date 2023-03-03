<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Person;
use App\Http\Resources\PersonResource;

class PersonController extends Controller
{

    protected $singleName="Person";
    protected $pluralName="Persons";
    protected $titles=[
        'ID',
        'Name',
        'Address',
        'Email'
    ];

    /**
     * Create a new controller instance.
     *
     * @param  \App\Repositories\ProductRepository  $users
     * @return void
     */
    public function __construct() 
    {
        $this->middleware(['auth'])->except(['all']);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $persons= Person::paginate(10);
        //dd($persons);

        return Inertia::render('Persons/Index', [
            'tableItems' => $persons,
            'tableTitles' => $this->titles,
            'singleName' => $this->singleName,
            'pluralName' => $this->pluralName,
            'success' => session()->get('success')
        ]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function all()
    {
        $persons= Person::paginate(10);
        return PersonResource::collection($persons);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Persons/Form', [
            'singleName' => $this->singleName,
            'pluralName' => $this->pluralName,
            'formTitles' => $this->titles
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
        $request->validate([
            'name' => 'required|string',
            'address' => 'required|string',
            'email' => 'required|string|email',
        ]);

        $input = $request->all();
        $person=Person::create($input);

        return redirect()->route('persons.index')->with('success', 'Person Created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Person $person
     * @return \Illuminate\Http\Response
     */
    public function show(Person $person)
    {
        return Inertia::render('Persons/Show', [
            'Items' => $person,
            'showTitles' => $this->titles,
            'pluralName' => $this->pluralName
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Person $person
     * @return \Illuminate\Http\Response
     */
    public function edit(Person $person)
    {
        return Inertia::render('Persons/Form', [
            'singleName' => $this->singleName,
            'pluralName' => $this->pluralName,
            'formTitles' => $this->titles,
            'id' => $person->id,
            'person' => $person,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Person $person
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Person $person)
    {
        $request->validate([
            'name' => 'required|string',
            'address' => 'required|string',
            'email' => 'required|string|email',
        ]);

        $input = $request->all();
        $person->update($input);

        return redirect()->route('persons.index')->with('success', 'Updated Person.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Person $person
     * @return \Illuminate\Http\Response
     */
    public function destroy(Person $person)
    {
        $person->delete();
        return redirect()->route('persons.index')->with('success', 'Removed Person.');
    }
}
