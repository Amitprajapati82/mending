<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    //
    public function index()
    {
        $profile = Auth::user();
        // return $profile;
        return view('auth.profile',compact('profile'));
    }

    public function upload(Request $request)
    {
        return 'bj';
        $request->validate([
            'profile_image' => 'required|image|mimes:jpg,jpeg,png|max:2048', // Adjust validation as needed
        ]);

        $user = Auth::user();
        $image = $request->file('profile_image');
        $imagePath = $image->store('profile_images', 'public');

        // Remove old image if it exists
        if ($user->profile_image) {
            Storage::disk('public')->delete($user->profile_image);
        }

        // Save the new image path to the user's profile
        $user->profile_image = $imagePath;
        $user->save();

        return back()->with('success', 'Profile image updated successfully.');
    }

    public function update(Request $request)
    {
        $request->validate([
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'fullName' => 'required|string|max:255',
            // 'Role' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:20',
            'email' => 'required|email',
            'facebook' => 'nullable|url',
            'instagram' => 'nullable|url',
        ]);

        $user = auth()->user();

        // Handle image removal
        if ($request->has('remove_image') && $request->remove_image) {
            if ($user->image_path ) {
                Storage::delete($user->image_path );
                $user->image_path  = null;
            }
        } elseif ($request->hasFile('profile_image')) {
            // Handle image upload
            if ($user->image_path) {
                Storage::delete($user->image_path);
            }

            $path = $request->file('profile_image')->store('public');
            $user->image_path = $path;
        }

        // Update profile information
        $user->name = $request->input('fullName');
        // $user->role = $request->input('Role');
        $user->mobile = $request->input('phone');
        $user->email = $request->input('email');
        $user->facebook = $request->input('facebook');
        $user->instagram = $request->input('instagram');
        // $user->facebook = $request->input('facebook');
        // $user->instagram = $request->input('instagram');

        $user->save(); // Ensure this is called on the Eloquent User model

        return back()->with('success', 'Profile updated successfully.');
    }
    public function changePassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'current_password' => 'required',
            'new_password' => 'required|min:8|confirmed',
        ]);
        if ($validator->fails()) {
            // return 'nlnfl';
            return response()->json(['errors' => $validator->errors()], 422);
        }

        // Check if the current password is correct
        if (!Hash::check($request->current_password, Auth::user()->password)) {
            return 'lfnl';
            return response()->json(['message' => 'Current password is incorrect'], 422);
        }

        // Update the password
        $user = Auth::user();
        $user->password = Hash::make($request->new_password);
        $user->save();

        return response()->json(['message' => 'Password changed successfully'], 200);
    }
}
