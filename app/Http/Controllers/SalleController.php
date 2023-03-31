<?php

namespace App\Http\Controllers;

use App\Interfaces\ISalleInterface;
use App\Models\Salle;
use Illuminate\Http\Request;

class SalleController extends Controller
{

    public $salle;

    public function __construct(ISalleInterface $salle)
    {
        $this->salle = $salle;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salles = $this->salle->getAll();
        return view('salles.page')->with('salles', $salles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('salles.create');
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
            'designe' => 'required',
            'occupation'
        ]);

        $data = $request->all();
        $this->salle->createSalle($data);
        return redirect('/gestions/salle')->with('success', 'Salle bien enrigistré!.');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $salle = Salle::find($id);
        $this->salle->deleteSalle($salle);
        return redirect('/gestions/salle')->with('success', 'Salle bien supprimé!.');
    }
}
