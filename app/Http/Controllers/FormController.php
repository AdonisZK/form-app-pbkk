<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

            // Store
            $request->session()->put('uploaded_image', $filename);
        }

        return back()->with('success', 'Form submitted successfully!');
    }

    public function showForm()
    {
        return view('form');
    }
}
