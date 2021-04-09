<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use League\CommonMark\Inline\Element\Image;

use Session;
use Hash;
// use Image;


class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }
    //get the user profile view
    public function profile()
    {

        return view('profile');
    }
    // update the authenticated user profile
    public function profileUpdate(Request $request)
    {
        // validation rules
        $request->validate([
            'name' => 'required|min:6|string|max:255',
            'email' => 'required|email|string|max:255'
        ]);
        //save the profile update
        $user = Auth::user();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->save();
        return back()->with('message', 'profile Updated.');
    }
    // get the profile view for changing th password
    public function changePasswordForm()
    {

        return view('changePassword');
    }
    // change password for the authenticated user
    public function changePassword(Request $request)
    {
        if (!(Hash::check($request->get('current_Password'), Auth::user()->password))) {
            return back()->with('error', 'Your current password does not much with what you provided');
        }
        if (strcmp($request->get('current_Password'), $request->get('new_Password')) == 0) {
            return back()->with('error', 'Your current password cannot be the same as new password');
        }
        $request->validate([
            'current_Password' => 'required',
            'new_Password' => 'required|confirmed|string|min:6'
        ]);

        $user = Auth::user();
        $user->password = bcrypt($request->get('new_Password'));
        $user->save();
        return back()->with('message', 'Password changed successfully');
    }
    // get the profile upload view
    public function getProfileAvatar()
    {
        return view('profilePicture');
    }
    // upload and change the profile picture for the authenticated user
    public function profilePictureUpload(Request $request)
    {
        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $filename = time() . "." . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(250, 250)->save(public_path('/img/avatar/' . $filename));
            // $avatar->save(public_path('/img/avatar/' . $filename));
            $user = Auth::user();
            $user->avatar = $filename;
            // validate the avatar
            $request->validate([
                'avatar'=>'required|image|dimensions:max_width=250,max_height=250|mimes:png,jpg'
            ]);
            $user->save();
            return back()->with('message', 'profile picture uploaded successfully');
        }
    }
}
