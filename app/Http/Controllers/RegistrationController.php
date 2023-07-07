<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class RegistrationController extends Controller
{
    //
    public function register(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'gender' => 'required',
            'phone' => 'required|numeric|digits:10',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
        ]);
          // Create a new user
          $user = new User();
          $user->first_name = $validatedData['first_name'];
          $user->last_name = $validatedData['last_name'];
          $user->email = $validatedData['email'];
          $user->gender = $validatedData['gender'];
          $user->phone = $validatedData['phone'];
          $user->password = Hash::make($validatedData['password']);
          $user->save();
  
          // Redirect back with a success message
          return redirect()->back()->with('message', 'Successful registered!');
}
public function showRegistrationForm()
{
    return view('register_super');
}

public function registerSuperAdmin(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'gender' => 'required',
            'phone' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        // Create a new user instance
        $user = new User();
        $user->first_name = $validatedData['first_name'];
        $user->last_name = $validatedData['last_name'];
        $user->gender = $validatedData['gender'];
        $user->phone = $validatedData['phone'];
        $user->email = $validatedData['email'];
        $user->password = bcrypt($validatedData['password']);
        $user->is_super_admin = true; // Set the super admin flag
        if ($request->hasFile('profile_image')) {
            $image = $request->file('profile_image');
            $imagePath = $image->store('product_images/images', 'public');
            $user->profile_image = $imagePath;
        }
        // Save the user in the database
        $user->save();

        // Redirect back with a success message
        return redirect()->back()->with('message', 'Staff registration successful!');
    }
  
    public function staff()
    {
        $superAdmins = User::where('is_super_admin', true)->get();
        return view('staff', ['superAdmins' => $superAdmins]);
    }
    public function showNormalUsers()
    {
        // Retrieve all normal users who are not super admins from the users table
        $normalUsers = User::where('is_super_admin', false)->get();
    
        return view('customer')->with('normalUsers', $normalUsers);
    }
 public function edit($id)
    {
        $superAdmin = User::findOrFail($id);
        // You can pass the $superAdmin object to the view for editing the staff member
        return view('editStaff', ['superAdmin' => $superAdmin]);
    }
    

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'gender' => 'required',
            'phone' => 'required|numeric|digits:10',
        ]);

        $superAdmin = User::findOrFail($id);
        $superAdmin->first_name = $validatedData['first_name'];
        $superAdmin->last_name = $validatedData['last_name'];
        $superAdmin->email = $validatedData['email'];
        $superAdmin->gender = $validatedData['gender'];
        $superAdmin->phone = $validatedData['phone'];
        $superAdmin->save();

        return redirect()->back()->with('message', 'Staff member updated successfully!');
    }

    public function destroy($id)
    {
        $superAdmin = User::findOrFail($id);
        $superAdmin->delete();

        return redirect()->back()->with('message', 'Staff member deleted successfully!');
    }
    public function destroy2($id)
    {
        $mteja = User::findOrFail($id);
        $mteja->delete();

        return redirect()->back()->with('message', 'Customer deleted successfully!');
    }

}



