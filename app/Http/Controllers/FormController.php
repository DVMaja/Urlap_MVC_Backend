<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    //
    public function index()
    {
        $forms = Form::all();
        return response()->json($forms);
    }
    public function store(Request $request)
    {
        $record = new Form();
        $record->nev = $request->nev;
        $record->szul = $request->szul_ev;
        $record->save();
    }
    public function show($id)
    {
        $forms = Form::find($id);
    }
    public function destroy($id)
    {
        Form::find($id)->delete();
    }
    public function update(Request $request, $id)
    {
        $form = Form::find($id);
        $form->nev = $request->nev;
        $form->szul = $request->szul_ev;
        $form->save();
    }
}
