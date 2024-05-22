<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Option;
use App\Http\Requests\Admin\OptionFormRequest;

class OptionController extends Controller
{
    public function index()
    {
        return view('admin.option.index', [
            'options' => Option::paginate(25)  // Utilisation de 'options' au lieu de 'option'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $option = new Option();

        return view('admin.option.form', [
            'option' => $option
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OptionFormRequest $request)
    {
        $option = Option::create($request->validated());
        return to_route('admin.option.index')->with('success', 'L\'option a bien été créée');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Option $option)  // Correction du type hinting à 'Option' au lieu de 'Property'
    {
        return view('admin.option.form', [
            'option' => $option
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(OptionFormRequest $request, Option $option)
    {
        $option->update($request->validated());
        return to_route('admin.option.index')->with('success', 'L\'option a bien été modifiée');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Option $option)  // Correction du type hinting à 'Option' avec majuscule
    {
        $option->delete();
        return to_route('admin.option.index')->with('success', 'L\'option a bien été supprimée');
    }
}
