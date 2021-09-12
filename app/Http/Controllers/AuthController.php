<?php
namespace App\Http\Controllers;


    use App\Models\User;
    use Illuminate\Http\RedirectResponse;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Hash;

class AuthController
{
    public function login()
    {

        return view('login');
    }

    public function handleLogin(Request $request)
    {
        $credentials = $request->only('name', 'password');

        if (Auth::attempt($credentials)) {
            $user=Auth::user();
            $user->password = Hash::make($credentials['password']);
            $user->save();
            return redirect()->route('schools.index');
        }

            $credentials = $request->only('name', 'password');
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                return new RedirectResponse(route('schools.index'));
            }


        return back()->withErrors([
            'name' => 'The provided credentials do not match our records.',
        ]);

    }






    public function logout()
    {
        Auth::logout();


        return redirect()->route('login');
    }


}
