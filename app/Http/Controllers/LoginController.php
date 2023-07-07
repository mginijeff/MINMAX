<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        $errorMessage = session('error');
        return view('login', compact('errorMessage'));
    }
    
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'hf-username' => 'required',
            'hf-password' => 'required',
        ]);
    
        $username = $credentials['hf-username'];
        $password = $credentials['hf-password'];
    
        // Attempt to authenticate the user
        if (Auth::guard('web')->attempt(['phone' => $username, 'password' => $password])) {
            // Authentication successful
            $user = Auth::guard('web')->user();
            $fullName = $user->first_name . ' ' . $user->last_name; // Assuming the user model has 'first_name' and 'last_name' attributes
            $username = $user->username;
    
            if ($user->is_super_admin) {
                // Redirect super admin to the dashboard for admin
                return redirect()->route('Dashboard_admin')->with('fullName', $fullName);
                

            } else {
                // Redirect regular user to the business route
                return redirect()->route('business')->with('fullName', $fullName);;
            }
        }
    
        // Authentication failed, handle the case
        // Redirect the user back to the login page with an error message
        return redirect()->route('auth')->with('error', 'Invalid username or password');
    }
   

    public function logout()
    {
        Auth::logout();
        return redirect()->route('business');
    }
    

public function logout2()
    {
        Auth::guard('web')->logout(); // Logout the user from the 'web' guard
        session()->invalidate(); // Invalidate the current session
        session()->regenerateToken(); // Regenerate the CSRF token

        return redirect()->route('login');
    }

    public function isLoggedIn()
    {
        if (Auth::guard('web')->check()) {
            return true;
        }
    
        return false;
    }
    
}
