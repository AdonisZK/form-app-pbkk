<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormData;

class FormController extends Controller
{
    public function submitForm(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'age' => 'required|integer|min:1|max:150',
            'rizz' => 'required|numeric|min:2.5|max:99.99',
            'image' => [
                'required',
                'file',
                // 'mimes:png,jpg,jpeg', error : Unable to guess the mime type 
                'max:2048',
            ]
        ]);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $file->move(public_path('images'), $filename);

            // Store in database
            $formData = new FormData;
            $formData->name = $request->input('name');
            $formData->email = $request->input('email');
            $formData->age = $request->input('age');
            $formData->rizz = $request->input('rizz');
            $formData->image = $filename;
            $formData->save();

            return redirect()->action(
                [FormController::class, 'displayData'],
                ['id' => $formData->id]
            );
        }

        return back()->with('success', 'Form submitted successfully!');
    }

    public function showForm()
    {
        $formData = FormData::all();
        return view('form', ['formData' => $formData]);
    }
    public function displayData($id)
    {
        $formData = FormData::find($id);
        return view('display', ['formData' => $formData]);
    }
}
