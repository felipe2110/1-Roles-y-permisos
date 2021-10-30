<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class productsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = products::paginate(8);
        // select * from products
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('fileImage')) {
            $file = $request->file('fileImage');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads/products/', $filename);
        }
        $products = products::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'image' => $filename,
        ]);
        return redirect('products')->with('status', 'Se ha creado correctamente');
    }

    public function show($id)
    {
        $products = products::find($id);
        return view('products.show', compact('products'));
    }

    public function destroy($id)
    {
        $products = products::find($id);
        $destination = 'uploads/products/' . $products->image;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $products = products::find($id)->delete();
        return redirect(('products'))->with('status', 'Se ha eliminado correctamente');
    }
    public function edit($id)
    {
        $products = products::find($id);
        return view('products.edit', compact('products'));
    }
    public function update(Request $request, $id)
    {
        $products = products::find($id);
        $products->name= $request->input('name');
        $products->description = $request->input('description');
        $products->price = $request->input('price');

        if ($request->hasFile('fileImage'))
        {
            $destination = 'uploads/products/' . $products->image;
            if (File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('fileImage');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads/products/', $filename);
            $products->image = $filename;
        }

    $products->update();
        return redirect('products')->with('status', 'Se ha actualizado correctamente');
    }
}
