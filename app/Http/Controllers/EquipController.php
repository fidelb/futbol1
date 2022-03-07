<?php

namespace App\Http\Controllers;

use App\Models\Equip;
use Illuminate\Http\Request;

/**
 * Class EquipController
 * @package App\Http\Controllers
 */
class EquipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equips = Equip::paginate();

        return view('equip.index', compact('equips'))
            ->with('i', (request()->input('page', 1) - 1) * $equips->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $equip = new Equip();
        return view('equip.create', compact('equip'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Equip::$rules);

        $equip = Equip::create($request->all());

        return redirect()->route('equips.index')
            ->with('success', 'Equip created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $equip = Equip::find($id);

        return view('equip.show', compact('equip'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $equip = Equip::find($id);

        return view('equip.edit', compact('equip'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Equip $equip
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Equip $equip)
    {
        request()->validate(Equip::$rules);

        $equip->update($request->all());

        return redirect()->route('equips.index')
            ->with('success', 'Equip updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $equip = Equip::find($id)->delete();

        return redirect()->route('equips.index')
            ->with('success', 'Equip deleted successfully');
    }
}
