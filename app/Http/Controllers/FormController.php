<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    //
    public function index()
    {
        $forms = Form::all(); //összes record lekérése
        return response()->json($forms);
    }
    public function store(Request $request) //POST
    {
        $record = new Form();
        $record->nev = $request->nev;
        $record->szul = $request->szul;
        $record->save();
        return Form::find($record->id);
    }
    public function destroy($id)
    {
        //Form::find($id)->delete();
        $form = Form::find($id)->delete();
        return response()->json(['message' => 'Sikeres törlés!'], 201);
    }
    public function update(Request $request, $id)
    {
        $form = Form::find($id);
        $form->nev = $request->nev;
        $form->szul = $request->szul;
        $form->save();
    }
    public function show($id)
    {
        $forms = Form::find($id);
        return $forms;
    }
}
