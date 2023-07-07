<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;

class RegisterBusinessController extends Controller
{
    //
    public function store(Request $request)
{
    // Validate the form data
    $validatedData = $request->validate([
        'product_name' => 'required',
        'product_image' => 'required|image',
        'product_description' => 'required',
        'product_price' => 'required|numeric',
    ]);

    // Save the data to the database
    $product = new Product();
    $product->product_name = $validatedData['product_name'];
    $product->product_description = $validatedData['product_description'];
    $product->product_price = $validatedData['product_price'];

    // Handle the file upload and store the image
    if ($request->hasFile('product_image')) {
        $image = $request->file('product_image');
        $imagePath = $image->store('product_images/images', 'public');
        $product->product_image = $imagePath;
    
    }

    // Save the product
    $product->save();

    // Optionally, you can flash a success message to the session
    session()->flash('message', 'Product registered successfully.');

    // Redirect or return a response
    return redirect()->back();
}

public function viewBusiness()
{
    $products = Product::all();

    return view('viewBusiness', compact('products'));
}
public function Business()
{
    $products = Product::all();

    return view('business', compact('products'));
}
public function Businez()
{
    $products = Product::all();

    return view('business2', compact('products'));
}
public function Busines()
{
    $products = Product::all();

    return view('order', compact('products'));
}


public function edit(Product $product)
{
    return view('editBusiness', compact('product'));
}

public function update(Request $request, Product $product)
{
    $validatedData = $request->validate([
        'product_name' => 'required',
        'product_image' => 'nullable|image',
        'product_description' => 'required',
        'product_price' => 'required|numeric',
    ]);

    $product->product_name = $validatedData['product_name'];
    $product->product_description = $validatedData['product_description'];
    $product->product_price = $validatedData['product_price'];

    // Handle the file upload and store the new image if provided
    if ($request->hasFile('product_image')) {
        $image = $request->file('product_image');
        $imagePath = $image->store('product_images/images', 'public');
        $product->product_image = $imagePath;
    }

    $product->save();

     // Optionally, you can flash a success message to the session
     session()->flash('message', 'Product updated successfully.');

     // Redirect or return a response
     return redirect()->back();
    // return redirect()->route('')->with('message', 'Product updated successfully.');
}
public function show(Product $product)
{
    return view('viewProduct', compact('product'));
}
public function show2($product)
{
    $product = Product::find($product);

    return view('order', compact('product'));
}





public function destroy($id)
{
    // Find the product by ID
    $product = Product::findOrFail($id);
    
    // Delete the product
    $product->delete();

    // Optionally, you can flash a success message to the session
    session()->flash('message', 'Product deleted successfully.');

    // Redirect or return a response
    return redirect()->back();
}


}
