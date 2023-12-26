<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Jewel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class JewelController extends Controller
{
    function createJewel() {
        $categories = Category::all();
        return view('createJewel', compact('categories'));
    }

    function createJewel1(Request $request) {
        $request->validate([
            'Name' => ['required', 'min:3'],
            'Gram' => ['required', 'integer', 'min:1'],
            'Color' => ['required'],
            'Image' => ['required', 'image'],
            'CategoryId' => ['required']
        ]);

        $filename = $request->file('Image')->getClientOriginalName();
        $request->file('Image')->storeAs('/public'.'/'.$filename);

        Jewel::create([
            'Name' => $request->Name,
            'Gram' => $request->Gram,
            'Color' => $request->Color,
            'Image' => $filename,
            'CategoryId' => $request->CategoryId
        ]);

        // return redirect('/create-jewel');
        return redirect('/read-jewels');
    }

    function readJewels() {
        $jewels = Jewel::paginate(5);
        return view('readJewels', compact('jewels'));
    }

    function editJewel($id) {
        $jewel = Jewel::find($id);
        return view('editJewel', compact('jewel'));
    }

    function updateJewel(Request $request, $id) {
        $request->validate([
            'Name' => ['required', 'min:3'],
            'Gram' => ['required', 'min:1'],
            'Color' => ['required'],
            'Image' => ['required', 'image']
        ]);

        $filename = $request->file('Image')->getClientOriginalName();
        $request->file('Image')->storeAs('/public'.'/'.$filename);

        Jewel::find($id)->update([
            'Name' => $request->Name,
            'Gram' => $request->Gram,
            'Color' => $request->Color,
            'Image' => $filename
        ]);

        return redirect('/read-jewels');
    }

    function deleteJewel($id) {
        $jewelImage = Jewel::find($id)->Image;
        Jewel::destroy($id);
        Storage::delete('/public'.'/'.$jewelImage);
        return redirect('/read-jewels');
    }
}
