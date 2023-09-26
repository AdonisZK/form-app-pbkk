<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

function store(Request $request)
{
    $request->validate([
        'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
    ]);

    $path = $request->file('image')->store('public/images');

    return back()->with('success', 'Image Uploaded successfully');
}
