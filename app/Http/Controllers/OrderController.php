<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    // ...

    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
            'total_price' => 'required|numeric',
        ]);
    
        // Create a new order instance
        $order = new Order();
        $order->product_id = $validatedData['product_id'];
        $order->user_id = Auth::id(); // Assuming you have user authentication implemented
        $order->quantity = $validatedData['quantity'];
        $order->total_price = $validatedData['total_price'];
    
        // Save the order
        $order->save();
    
        // Optionally, you can flash a success message to the session
        session()->flash('message', 'Order placed successfully.');
    
        // Redirect or return a response
        return redirect()->back();
    }
    public function saveorder(Request $request)
    {
        // Validate the form data
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
            'total_price' => 'required|numeric',
        ]);

        $userId = auth()->user()->id;
        $productId = $request->input('product_id');

        // Check if the user has already booked the event
        // $existingBooking = Sherehe::where('user_id', $userId)
        //     ->where('event_id', $eventId)
        //     ->first();

        // if ($existingBooking) {
        //     return redirect()->back()->with('message', 'You have already booked this event.');
        // }

        // Create a new Attendee instance
        $od = new Order([
            'user_id' => $userId,
            'product_id' => $productId,
        ]);

        // Save the attendee
        $od->save();

        // Redirect or show success message
        return redirect()->back()->with('message', 'Successfully ordered wait for verification of your order and payment! we will call you .');
    }
    
    // ...
}
