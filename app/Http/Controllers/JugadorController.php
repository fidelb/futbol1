<?php

namespace App\Http\Controllers;

use App\Models\Jugador;
use Illuminate\Http\Request;

/**
 * Class JugadorController
 * @package App\Http\Controllers
 */
class JugadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jugadors = Jugador::paginate();

        return view('jugador.index', compact('jugadors'))
            ->with('i', (request()->input('page', 1) - 1) * $jugadors->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jugador = new Jugador();
        return view('jugador.create', compact('jugador'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Jugador::$rules);

        $jugador = Jugador::create($request->all());

        return redirect()->route('jugadors.index')
            ->with('success', 'Jugador created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jugador = Jugador::find($id);

        return view('jugador.show', compact('jugador'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jugador = Jugador::find($id);

        return view('jugador.edit', compact('jugador'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Jugador $jugador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jugador $jugador)
    {
        request()->validate(Jugador::$rules);

        $jugador->update($request->all());

        return redirect()->route('jugadors.index')
            ->with('success', 'Jugador updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $jugador = Jugador::find($id)->delete();

        return redirect()->route('jugadors.index')
            ->with('success', 'Jugador deleted successfully');
    }
}
